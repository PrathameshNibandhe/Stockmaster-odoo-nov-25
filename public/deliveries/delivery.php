<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster - Deliveries</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>
<body class="bg-slate-50 font-sans text-gray-800">

<div class="flex h-screen overflow-hidden">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white border-r border-gray-200 hidden md:flex flex-col shadow-sm z-10">
        <!-- Brand Logo -->
        <div class="h-16 flex items-center px-6 border-b border-gray-100">
            <a href="../index.php" class="flex items-center gap-2 font-bold text-xl text-[#2563EB]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                </svg>
                StockMaster
            </a>
        </div>

        <!-- Navigation Links -->
        <nav class="flex-1 overflow-y-auto py-4 space-y-1">
            
            <!-- Dashboard Link -->
            <div class="px-3">
                <a href="../dashboard.php" class="flex items-center px-3 py-2.5 text-gray-600 hover:bg-blue-50 hover:text-[#2563EB] rounded-lg font-medium transition-colors">
                    <i class="fas fa-th-large w-6"></i>
                    <span>Dashboard</span>
                </a>
            </div>

            <!-- Operations Group -->
            <div class="mt-6">
                <h3 class="px-6 text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Operations</h3>
                <div class="px-3 space-y-1">
                    <!-- Receipts Link -->
                    <a href="../receipts/receipts.php" class="flex items-center px-3 py-2 text-gray-600 hover:bg-blue-50 hover:text-[#2563EB] rounded-lg transition-colors group">
                        <i class="fas fa-truck-loading w-6 group-hover:text-[#2563EB] transition-colors"></i>
                        <span>Receipts</span>
                    </a>
                    
                    <!-- Deliveries Link (ACTIVE - Indigo Theme) -->
                    <a href="deliveries.php" class="flex items-center px-3 py-2 bg-indigo-50 text-indigo-600 rounded-lg font-medium transition-colors group">
                        <i class="fas fa-truck w-6"></i>
                        <span>Deliveries</span>
                    </a>
                    
                    <a href="#" class="flex items-center px-3 py-2 text-gray-600 hover:bg-blue-50 hover:text-[#2563EB] rounded-lg transition-colors group">
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
                    <a href="../login.php" class="flex items-center px-3 py-2 text-gray-600 hover:bg-red-50 hover:text-red-600 rounded-lg transition-colors group">
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

    <!-- MAIN CONTENT -->
    <div class="flex-1 flex flex-col overflow-hidden">
        
        <!-- HEADER -->
        <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-6 shadow-sm z-10">
            <!-- Search Bar -->
            <div class="flex items-center bg-slate-100 rounded-lg px-4 py-2 w-96 transition-all focus-within:ring-2 focus-within:ring-indigo-100 focus-within:bg-white border border-transparent focus-within:border-indigo-200">
                <i class="fas fa-search text-gray-400 mr-3"></i>
                <input type="text" placeholder="Search deliveries, customers..." class="bg-transparent border-none focus:outline-none text-sm w-full text-gray-700 placeholder-gray-400">
            </div>

            <!-- Right Actions -->
            <div class="flex items-center space-x-5">
                <button class="text-gray-400 hover:text-indigo-600 transition-colors relative">
                    <i class="fas fa-bell text-lg"></i>
                    <span class="absolute -top-1 -right-1 block h-2.5 w-2.5 rounded-full bg-red-500 ring-2 ring-white"></span>
                </button>
                <div class="h-8 w-px bg-gray-200"></div>
                <span class="text-sm font-medium text-gray-600">Main Warehouse</span>
            </div>
        </header>

        <!-- CONTENT AREA -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50 p-8">
            
            <!-- Page Title -->
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-800">Delivery Orders</h2>
                <p class="text-sm text-gray-500 mt-1">Manage outgoing stock and customer deliveries.</p>
            </div>

            <!-- Action Toolbar -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-6">
                <div class="flex space-x-2 mb-4 md:mb-0">
                    <!-- Indigo Button for Deliveries -->
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg shadow-sm hover:bg-indigo-700 flex items-center transition-colors">
                        <i class="fas fa-plus mr-2"></i> New Delivery
                    </button>
                </div>
                
                <div class="flex items-center space-x-3">
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                            <i class="fas fa-filter"></i>
                        </span>
                        <input type="text" class="pl-10 pr-4 py-2 border border-gray-200 rounded-lg focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 bg-white text-sm" placeholder="Filter Reference...">
                    </div>
                    <div class="border border-gray-200 rounded-lg flex overflow-hidden bg-white">
                        <button class="px-3 py-2 bg-slate-100 text-gray-700 shadow-inner"><i class="fas fa-list"></i></button>
                        <button class="px-3 py-2 text-gray-500 hover:bg-slate-50"><i class="fas fa-th-large"></i></button>
                    </div>
                </div>
            </div>

            <!-- TABLE -->
            <div class="bg-white shadow-sm rounded-xl overflow-hidden border border-gray-200">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-slate-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Reference</th>
                            <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Scheduled Date</th>
                            <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Customer</th>
                            <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">From / To</th>
                            <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        
                        <!-- Row 1: Urgent/Waiting -->
                        <tr class="hover:bg-indigo-50 cursor-pointer transition-colors group">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-indigo-600 group-hover:text-indigo-700">WH/OUT/0002</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red-500 font-medium">
                                <i class="fas fa-exclamation-circle mr-1"></i> 12/2/2025 (Late)
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 font-medium">Gemini Corp</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">WH/Stock1 &rarr; Customer</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2.5 py-0.5 inline-flex text-xs leading-5 font-semibold rounded-full bg-amber-100 text-amber-800 border border-amber-200">
                                    Waiting Availability
                                </span>
                            </td>
                        </tr>

                        <!-- Row 2: Ready -->
                        <tr class="hover:bg-indigo-50 cursor-pointer transition-colors group">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-indigo-600 group-hover:text-indigo-700">WH/OUT/0004</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">12/5/2025</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 font-medium">Local Shop A</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">WH/Stock2 &rarr; Customer</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2.5 py-0.5 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 border border-green-200">
                                    Ready to Ship
                                </span>
                            </td>
                        </tr>

                        <!-- Row 3: Done -->
                        <tr class="hover:bg-indigo-50 cursor-pointer transition-colors group">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-indigo-600 group-hover:text-indigo-700">WH/OUT/0001</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">11/30/2025</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 font-medium">Azure Interior</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">WH/Stock1 &rarr; Customer</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2.5 py-0.5 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800 border border-gray-200">
                                    Done
                                </span>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
                
                <!-- Pagination -->
                <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                    <div class="flex justify-between items-center">
                        <p class="text-sm text-gray-700">Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of <span class="font-medium">15</span> results</p>
                        <div class="flex space-x-2">
                            <button class="px-3 py-1 border border-gray-300 rounded text-sm text-gray-600 hover:bg-gray-50 transition">Previous</button>
                            <button class="px-3 py-1 border border-gray-300 rounded text-sm text-gray-600 hover:bg-gray-50 transition">Next</button>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
</div>

</body>