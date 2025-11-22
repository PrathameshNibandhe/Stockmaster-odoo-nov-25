<?php

class DashboardController {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // 1. Total Products in Stock
    public function getTotalStock() {
        $sql = "SELECT SUM(quantity) AS total_stock FROM stock_levels";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc()['total_stock'] ?? 0;
    }

    // 2. Low Stock Items
    public function getLowStockItems() {
        $sql = "SELECT COUNT(*) AS low_count 
                FROM products p 
                JOIN stock_levels s ON p.product_id = s.product_id
                WHERE s.quantity <= p.reorder_level";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc()['low_count'] ?? 0;
    }

    // 3. Pending Receipts
    public function getPendingReceipts() {
        $sql = "SELECT COUNT(*) AS pending_receipts 
                FROM receipts 
                WHERE status != 'done'";
        $res = $this->conn->query($sql);
        return $res->fetch_assoc()['pending_receipts'] ?? 0;
    }

    // 4. Pending Deliveries
    public function getPendingDeliveries() {
        $sql = "SELECT COUNT(*) AS pending_deliveries 
                FROM deliveries 
                WHERE status != 'done'";
        $res = $this->conn->query($sql);
        return $res->fetch_assoc()['pending_deliveries'] ?? 0;
    }

    // 5. Pending Internal Transfers
    public function getPendingTransfers() {
        $sql = "SELECT COUNT(*) AS pending_transfers 
                FROM internal_transfers 
                WHERE status != 'done'";
        $res = $this->conn->query($sql);
        return $res->fetch_assoc()['pending_transfers'] ?? 0;
    }

}
?>
