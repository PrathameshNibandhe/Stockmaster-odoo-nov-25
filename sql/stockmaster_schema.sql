-- Create database
CREATE DATABASE IF NOT EXISTS stockmaster
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE stockmaster;

-- =========================
-- 1. USERS
-- =========================
CREATE TABLE users (
    user_id     INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name        VARCHAR(100) NOT NULL,
    email       VARCHAR(150) NOT NULL UNIQUE,
    password    VARCHAR(255) NOT NULL,
    role        ENUM('inventory_manager','warehouse_staff','admin') NOT NULL DEFAULT 'warehouse_staff',
    created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- =========================
-- 2. WAREHOUSES
-- =========================
CREATE TABLE warehouses (
    warehouse_id    INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    warehouse_name  VARCHAR(100) NOT NULL,
    location        VARCHAR(200),
    created_at      TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- =========================
-- 3. LOCATIONS (inside warehouses)
-- =========================
CREATE TABLE locations (
    location_id     INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    warehouse_id    INT UNSIGNED NOT NULL,
    location_name   VARCHAR(100) NOT NULL,
    created_at      TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_locations_warehouse
        FOREIGN KEY (warehouse_id) REFERENCES warehouses(warehouse_id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
) ENGINE=InnoDB;

-- =========================
-- 4. PRODUCT CATEGORIES
-- =========================
CREATE TABLE categories (
    category_id     INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    category_name   VARCHAR(100) NOT NULL UNIQUE
) ENGINE=InnoDB;

-- =========================
-- 5. PRODUCTS
-- =========================
CREATE TABLE products (
    product_id      INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name            VARCHAR(150) NOT NULL,
    sku             VARCHAR(100) NOT NULL UNIQUE,
    category_id     INT UNSIGNED,
    unit            VARCHAR(50) NOT NULL,         -- e.g. 'kg', 'pcs'
    reorder_level   INT UNSIGNED DEFAULT 0,       -- for low stock alerts
    created_at      TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_products_category
        FOREIGN KEY (category_id) REFERENCES categories(category_id)
        ON UPDATE CASCADE
        ON DELETE SET NULL
) ENGINE=InnoDB;

-- =========================
-- 6. STOCK LEVELS (per product per location)
-- =========================
CREATE TABLE stock_levels (
    stock_id        INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    product_id      INT UNSIGNED NOT NULL,
    location_id     INT UNSIGNED NOT NULL,
    quantity        INT NOT NULL DEFAULT 0,
    CONSTRAINT fk_stock_product
        FOREIGN KEY (product_id) REFERENCES products(product_id)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT fk_stock_location
        FOREIGN KEY (location_id) REFERENCES locations(location_id)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT uq_product_location UNIQUE (product_id, location_id)
) ENGINE=InnoDB;

-- =========================
-- 7. RECEIPTS (incoming stock header)
-- =========================
CREATE TABLE receipts (
    receipt_id      INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    supplier_name   VARCHAR(150) NOT NULL,
    status          ENUM('draft','waiting','ready','done','canceled') 
                    NOT NULL DEFAULT 'draft',
    created_by      INT UNSIGNED NOT NULL,
    created_at      TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_receipts_user
        FOREIGN KEY (created_by) REFERENCES users(user_id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
) ENGINE=InnoDB;

-- =========================
-- 8. RECEIPT ITEMS (incoming stock lines)
-- =========================
CREATE TABLE receipt_items (
    receipt_item_id     INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    receipt_id          INT UNSIGNED NOT NULL,
    product_id          INT UNSIGNED NOT NULL,
    location_id         INT UNSIGNED NOT NULL,
    quantity_received   INT NOT NULL,
    CONSTRAINT fk_receipt_items_receipt
        FOREIGN KEY (receipt_id) REFERENCES receipts(receipt_id)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT fk_receipt_items_product
        FOREIGN KEY (product_id) REFERENCES products(product_id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT,
    CONSTRAINT fk_receipt_items_location
        FOREIGN KEY (location_id) REFERENCES locations(location_id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
) ENGINE=InnoDB;

-- =========================
-- 9. DELIVERIES (outgoing stock header)
-- =========================
CREATE TABLE deliveries (
    delivery_id     INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    customer_name   VARCHAR(150) NOT NULL,
    status          ENUM('draft','waiting','ready','done','canceled') 
                    NOT NULL DEFAULT 'draft',
    created_by      INT UNSIGNED NOT NULL,
    created_at      TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_deliveries_user
        FOREIGN KEY (created_by) REFERENCES users(user_id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
) ENGINE=InnoDB;

-- =========================
-- 10. DELIVERY ITEMS (outgoing stock lines)
-- =========================
CREATE TABLE delivery_items (
    delivery_item_id    INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    delivery_id         INT UNSIGNED NOT NULL,
    product_id          INT UNSIGNED NOT NULL,
    location_id         INT UNSIGNED NOT NULL,
    quantity_delivered  INT NOT NULL,
    CONSTRAINT fk_delivery_items_delivery
        FOREIGN KEY (delivery_id) REFERENCES deliveries(delivery_id)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT fk_delivery_items_product
        FOREIGN KEY (product_id) REFERENCES products(product_id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT,
    CONSTRAINT fk_delivery_items_location
        FOREIGN KEY (location_id) REFERENCES locations(location_id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
) ENGINE=InnoDB;

-- =========================
-- 11. INTERNAL TRANSFERS (header)
-- =========================
CREATE TABLE internal_transfers (
    transfer_id         INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    from_location_id    INT UNSIGNED NOT NULL,
    to_location_id      INT UNSIGNED NOT NULL,
    status              ENUM('draft','waiting','ready','done','canceled') 
                        NOT NULL DEFAULT 'draft',
    created_by          INT UNSIGNED NOT NULL,
    created_at          TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_transfers_from_location
        FOREIGN KEY (from_location_id) REFERENCES locations(location_id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT,
    CONSTRAINT fk_transfers_to_location
        FOREIGN KEY (to_location_id) REFERENCES locations(location_id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT,
    CONSTRAINT fk_transfers_user
        FOREIGN KEY (created_by) REFERENCES users(user_id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
) ENGINE=InnoDB;

-- =========================
-- 12. TRANSFER ITEMS (per product moved)
-- =========================
CREATE TABLE transfer_items (
    transfer_item_id    INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    transfer_id         INT UNSIGNED NOT NULL,
    product_id          INT UNSIGNED NOT NULL,
    quantity            INT NOT NULL,
    CONSTRAINT fk_transfer_items_transfer
        FOREIGN KEY (transfer_id) REFERENCES internal_transfers(transfer_id)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT fk_transfer_items_product
        FOREIGN KEY (product_id) REFERENCES products(product_id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
) ENGINE=InnoDB;

-- =========================
-- 13. ADJUSTMENTS (stock corrections)
-- =========================
CREATE TABLE adjustments (
    adjustment_id       INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    product_id          INT UNSIGNED NOT NULL,
    location_id         INT UNSIGNED NOT NULL,
    counted_quantity    INT NOT NULL,
    previous_quantity   INT NOT NULL,
    difference          INT NOT NULL,
    reason              TEXT,
    created_by          INT UNSIGNED NOT NULL,
    created_at          TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_adjustments_product
        FOREIGN KEY (product_id) REFERENCES products(product_id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT,
    CONSTRAINT fk_adjustments_location
        FOREIGN KEY (location_id) REFERENCES locations(location_id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT,
    CONSTRAINT fk_adjustments_user
        FOREIGN KEY (created_by) REFERENCES users(user_id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
) ENGINE=InnoDB;

-- =========================
-- 14. STOCK LEDGER (all movements)
-- =========================
CREATE TABLE stock_ledger (
    ledger_id           INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    product_id          INT UNSIGNED NOT NULL,
    location_id         INT UNSIGNED,
    change_type         ENUM('receipt','delivery','transfer_in','transfer_out','adjustment') NOT NULL,
    quantity_change     INT NOT NULL,     -- can be + or -
    reference_document  VARCHAR(50),      -- e.g. 'R-1', 'D-10' or just the numeric ID as string
    created_at          TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_ledger_product
        FOREIGN KEY (product_id) REFERENCES products(product_id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT,
    CONSTRAINT fk_ledger_location
        FOREIGN KEY (location_id) REFERENCES locations(location_id)
        ON UPDATE CASCADE
        ON DELETE SET NULL
) ENGINE=InnoDB;
