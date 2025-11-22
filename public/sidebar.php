<?php
// Configuration for paths and active states
// $path_to_root: Used to handle links from subfolders (e.g., "../")
// $active_page: Used to highlight the current page
$path_to_root = isset($path_to_root) ? $path_to_root : './'; 
$active_page = isset($active_page) ? $active_page : '';
?>

<aside class="w-64 bg-white border-r border-gray-200 hidden md:flex flex-col shadow-sm z-10">
    <!-- Brand Logo -->
    <div class="h-16 flex items-center px-6 border-b border-gray-100">
        <a href="<?php echo $path_to_root; ?>index.php" class="flex items-center gap-2 font-bold text-xl text-[#2563EB]">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
            </svg>
            StockMaster
        </a>
    </div>

    <!-- Navigation Links -->
    <nav class="flex-1 overflow-y-auto py-4 space-y-1">
        
        <!-- Dashboard -->
        <div class="px-3">
            <a href="dashboard.php" 
               class="flex items-center px-3 py-2.5 rounded-lg font-medium transition-colors 
               <?php echo ($active_page == 'dashboard') ? 'bg-blue-50 text-[#2563EB]' : 'text-gray-600 hover:bg-blue-50 hover:text-[#2563EB]'; ?>">
                <i class="fas fa-th-large w-6"></i>
                <span>Dashboard</span>
            </a>
        </div>

        <!-- Operations Group -->
        <div class="mt-6">
            <h3 class="px-6 text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Operations</h3>
            <div class="px-3 space-y-1">
                
                <!-- Receipts -->
                <a href="../receipts/receipts.php" 
                   class="flex items-center px-3 py-2 rounded-lg transition-colors group
                   <?php echo ($active_page == 'receipts') ? 'bg-blue-50 text-[#2563EB] font-medium' : 'text-gray-600 hover:bg-blue-50 hover:text-[#2563EB]'; ?>">
                    <i class="fas fa-truck-loading w-6 <?php echo ($active_page == 'receipts') ? '' : 'group-hover:text-[#2563EB]'; ?> transition-colors"></i>
                    <span>Receipts</span>
                </a>

                <!-- Deliveries (Indigo Theme when active) -->
                <a href="../deliveries/delivery.php" 
                   class="flex items-center px-3 py-2 rounded-lg transition-colors group
                   <?php echo ($active_page == 'deliveries') ? 'bg-indigo-50 text-indigo-600 font-medium' : 'text-gray-600 hover:bg-blue-50 hover:text-[#2563EB]'; ?>">
                    <i class="fas fa-truck w-6 transition-colors"></i>
                    <span>Deliveries</span>
                </a>

                <a href="../transfers/list.php" class="flex items-center px-3 py-2 text-gray-600 hover:bg-blue-50 hover:text-[#2563EB] rounded-lg transition-colors group">
                    <i class="fas fa-sync-alt w-6 group-hover:text-[#2563EB] transition-colors"></i>
                    <span>Internal Transfers</span>
                </a>
            </div>
        </div>

        <!-- Inventory Group -->
        <div class="mt-6">
            <h3 class="px-6 text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Inventory</h3>
            <div class="px-3 space-y-1">
                <a href="#" class="flex items-center px-3 py-2 text-gray-600 hover:bg-blue-50 hover:text-[#2563EB] rounded-lg transition-colors group">
                    <i class="fas fa-boxes w-6 group-hover:text-[#2563EB] transition-colors"></i>
                    <span>Products</span>
                </a>
                <a href="#" class="flex items-center px-3 py-2 text-gray-600 hover:bg-blue-50 hover:text-[#2563EB] rounded-lg transition-colors group">
                    <i class="fas fa-history w-6 group-hover:text-[#2563EB] transition-colors"></i>
                    <span>Move History</span>
                </a>
            </div>
        </div>

        <!-- System Group -->
        <div class="mt-6">
            <h3 class="px-6 text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">System</h3>
            <div class="px-3 space-y-1">
                <a href="#" class="flex items-center px-3 py-2 text-gray-600 hover:bg-blue-50 hover:text-[#2563EB] rounded-lg transition-colors group">
                    <i class="fas fa-cog w-6 group-hover:text-[#2563EB] transition-colors"></i>
                    <span>Settings</span>
                </a>
                <a href="<?php echo $path_to_root; ?>login.php" class="flex items-center px-3 py-2 text-gray-600 hover:bg-red-50 hover:text-red-600 rounded-lg transition-colors group">
                    <i class="fas fa-sign-out-alt w-6 group-hover:text-red-600 transition-colors"></i>
                    <span>Logout</span>
                </a>
            </div>
        </div>
    </nav>
    
    <!-- User Mini Profile -->
    <div class="border-t border-gray-100 p-4">
        <div class="flex items-center gap-3">
            <div class="h-9 w-9 rounded-full bg-[#2563EB] flex items-center justify-center text-white font-bold text-sm shadow-md">
                JD
            </div>
            <div>
                <p class="text-sm font-medium text-gray-700">John Doe</p>
                <p class="text-xs text-gray-500">Warehouse Manager</p>
            </div>
        </div>
    </div>
</aside>