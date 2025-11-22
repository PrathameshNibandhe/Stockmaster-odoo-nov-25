<?php 
// Ensure header.php exists
include 'header.php'; 
?>

<!-- HERO SECTION -->
<div class="relative bg-white pt-16 pb-20 lg:pt-24 lg:pb-28 overflow-hidden">
    <div class="relative max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
            Everything you need to <br>
            <span class="text-[#2563EB]">Run Your Warehouse</span>
        </h1>
        <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-500">
            From the moment stock arrives at the dock to the minute it ships to a customer, StockMaster tracks every movement, adjustment, and transfer with precision.
        </p>
    </div>
</div>

<!-- FEATURE 1: PRODUCT MANAGEMENT -->
<section class="py-16 bg-slate-50 border-y border-gray-100">
    <div class="max-w-7xl mx-auto px-6">
        <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
            <!-- Content -->
            <div class="mb-10 lg:mb-0">
                <div class="flex items-center gap-3 mb-4">
                    <span class="p-2 bg-blue-100 text-[#2563EB] rounded-lg">
                        <i class="fas fa-box-open text-xl"></i>
                    </span>
                    <h2 class="text-3xl font-bold text-gray-900">Smart Product Management</h2>
                </div>
                <p class="text-lg text-gray-600 mb-6">
                    Say goodbye to manual entry errors. Create detailed product profiles that act as the single source of truth for your inventory.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <div class="flex-shrink-0 h-6 w-6 flex items-center justify-center rounded-full border border-green-200 bg-green-50 text-green-600 mt-0.5">
                            <i class="fas fa-check text-xs"></i>
                        </div>
                        <p class="ml-4 text-base text-gray-600"><strong>SKU & Barcode Support:</strong> Quickly identify items using unique codes.</p>
                    </li>
                    <li class="flex items-start">
                        <div class="flex-shrink-0 h-6 w-6 flex items-center justify-center rounded-full border border-green-200 bg-green-50 text-green-600 mt-0.5">
                            <i class="fas fa-check text-xs"></i>
                        </div>
                        <p class="ml-4 text-base text-gray-600"><strong>Categories & Attributes:</strong> Organize stock by type, size, or material.</p>
                    </li>
                    <li class="flex items-start">
                        <div class="flex-shrink-0 h-6 w-6 flex items-center justify-center rounded-full border border-green-200 bg-green-50 text-green-600 mt-0.5">
                            <i class="fas fa-check text-xs"></i>
                        </div>
                        <p class="ml-4 text-base text-gray-600"><strong>Reordering Rules:</strong> Set minimum stock levels to trigger automatic alerts.</p>
                    </li>
                </ul>
            </div>
            <!-- Graphic/Mockup -->
            <div class="relative bg-white p-6 rounded-xl shadow-lg border border-gray-100 transform rotate-2 hover:rotate-0 transition duration-500">
                <div class="flex justify-between items-center border-b border-gray-100 pb-4 mb-4">
                    <div>
                        <div class="text-sm font-bold text-gray-900">Steel Rods - 10mm</div>
                        <div class="text-xs text-gray-500">SKU: SR-10-X</div>
                    </div>
                    <span class="bg-green-100 text-green-800 text-xs font-bold px-2 py-1 rounded">In Stock</span>
                </div>
                <div class="grid grid-cols-3 gap-4 text-center">
                    <div class="bg-gray-50 p-2 rounded">
                        <div class="text-xs text-gray-500">On Hand</div>
                        <div class="font-bold text-[#2563EB]">1,200</div>
                    </div>
                    <div class="bg-gray-50 p-2 rounded">
                        <div class="text-xs text-gray-500">Forecasted</div>
                        <div class="font-bold text-gray-800">1,150</div>
                    </div>
                    <div class="bg-gray-50 p-2 rounded">
                        <div class="text-xs text-gray-500">Incoming</div>
                        <div class="font-bold text-green-600">+50</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FEATURE 2: RECEIPTS & DELIVERIES -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
            
            <!-- Graphic (Left on Desktop) -->
            <div class="order-2 lg:order-1 relative">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-100 to-indigo-100 rounded-3xl transform -rotate-3"></div>
                <div class="relative bg-white rounded-2xl shadow-xl border border-gray-200 p-6">
                    <!-- Incoming Card -->
                    <div class="flex gap-4 mb-6 border-b border-gray-100 pb-6">
                        <div class="h-12 w-12 bg-blue-50 rounded-lg flex items-center justify-center text-[#2563EB]">
                            <i class="fas fa-truck-loading text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">Receipt #WH/IN/004</h4>
                            <p class="text-sm text-gray-500">Vendor: Global Steel Corp</p>
                            <div class="mt-2 flex items-center gap-2">
                                <div class="h-2 w-24 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="h-full bg-[#2563EB] w-3/4"></div>
                                </div>
                                <span class="text-xs font-bold text-[#2563EB]">Validating...</span>
                            </div>
                        </div>
                    </div>
                    <!-- Outgoing Card -->
                    <div class="flex gap-4">
                        <div class="h-12 w-12 bg-indigo-50 rounded-lg flex items-center justify-center text-indigo-600">
                            <i class="fas fa-truck text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">Delivery #WH/OUT/009</h4>
                            <p class="text-sm text-gray-500">Customer: Apex Construction</p>
                            <div class="mt-2">
                                <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded font-bold">Ready to Ship</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content (Right on Desktop) -->
            <div class="order-1 lg:order-2 mb-10 lg:mb-0">
                <div class="flex items-center gap-3 mb-4">
                    <span class="p-2 bg-indigo-100 text-indigo-600 rounded-lg">
                        <i class="fas fa-sync text-xl"></i>
                    </span>
                    <h2 class="text-3xl font-bold text-gray-900">Seamless Operations</h2>
                </div>
                <p class="text-lg text-gray-600 mb-6">
                    Automate your stock flow. When you validate a receipt, stock increases automatically. When you ship an order, it decreases instantly.
                </p>
                <div class="space-y-6">
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">Incoming Receipts</h3>
                        <p class="text-gray-600 text-sm">Log shipments from vendors. Verify quantities against purchase orders and update stock availability in one click.</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">Outgoing Deliveries</h3>
                        <p class="text-gray-600 text-sm">Generate delivery orders based on sales. The system reserves stock so you never oversell.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FEATURE 3: ADJUSTMENTS & TRANSFERS -->
<section class="py-16 bg-slate-50 border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-6 text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-900">Complete Inventory Control</h2>
        <p class="mt-4 text-gray-500">Handle the realities of warehouse management with advanced tools.</p>
    </div>

    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <div class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition border border-gray-100">
            <div class="w-14 h-14 bg-teal-50 rounded-full flex items-center justify-center text-teal-600 mb-6">
                <i class="fas fa-exchange-alt text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3">Internal Transfers</h3>
            <p class="text-gray-600">Move items from the receiving dock to the shelf, or from Warehouse A to Warehouse B. Every move is logged in the ledger.</p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition border border-gray-100">
            <div class="w-14 h-14 bg-amber-50 rounded-full flex items-center justify-center text-amber-600 mb-6">
                <i class="fas fa-clipboard-check text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3">Stock Adjustments</h3>
            <p class="text-gray-600">Physical count doesn't match the system? Quickly run an inventory adjustment to correct discrepancies due to damage or loss.</p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition border border-gray-100">
            <div class="w-14 h-14 bg-purple-50 rounded-full flex items-center justify-center text-purple-600 mb-6">
                <i class="fas fa-history text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3">Full Traceability</h3>
            <p class="text-gray-600">See the entire history of a specific product. Who moved it? When did it arrive? Where is it now? Audit trails included.</p>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="bg-[#2563EB] py-16">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-white mb-6">Ready to digitize your inventory?</h2>
        <a href="backend/signup.php" class="bg-white text-[#2563EB] px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition shadow-lg">
            Start Free Trial
        </a>
        <p class="mt-4 text-blue-200 text-sm">No credit card required for demo.</p>
    </div>
</section>

<?php include 'footer.php'; ?>