    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>StockMaster - Dashboard</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    </head>
    <body class="bg-slate-50 font-sans text-gray-800">

    <div class="flex h-screen overflow-hidden">

        <!-- Sidebar -->
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
                
                <!-- Main Group -->
                <div class="px-3">
                    <a href="#" class="flex items-center px-3 py-2.5 bg-blue-50 text-[#2563EB] rounded-lg font-medium transition-colors">
                        <i class="fas fa-th-large w-6"></i>
                        <span>Dashboard</span>
                    </a>
                </div>

                <!-- Operations Group -->
                <div class="mt-6">
                    <h3 class="px-6 text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Operations</h3>
                    <div class="px-3 space-y-1">
                        <a href="receipts/receipts.php" class="flex items-center px-3 py-2 text-gray-600 hover:bg-gray-50 hover:text-[#2563EB] rounded-lg transition-colors group">
                            <i class="fas fa-truck-loading w-6 group-hover:text-[#2563EB] transition-colors"></i>
                            <span>Receipts</span>
                        </a>
                        <a href="deliveries/delivery.php" class="flex items-center px-3 py-2 text-gray-600 hover:bg-gray-50 hover:text-[#2563EB] rounded-lg transition-colors group">
                            <i class="fas fa-truck w-6 group-hover:text-[#2563EB] transition-colors"></i>
                            <span>Deliveries</span>
                        </a>
                        <a href="../public/transfers/list.php" class="flex items-center px-3 py-2 text-gray-600 hover:bg-gray-50 hover:text-[#2563EB] rounded-lg transition-colors group">
                            <i class="fas fa-sync-alt w-6 group-hover:text-[#2563EB] transition-colors"></i>
                            <span>Internal Transfers</span>
                        </a>
                    </div>
                </div>

                <!-- Inventory Group -->
                <div class="mt-6">
                    <h3 class="px-6 text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Inventory</h3>
                    <div class="px-3 space-y-1">
                        <a href="#" class="flex items-center px-3 py-2 text-gray-600 hover:bg-gray-50 hover:text-[#2563EB] rounded-lg transition-colors group">
                            <i class="fas fa-boxes w-6 group-hover:text-[#2563EB] transition-colors"></i>
                            <span>Products</span>
                        </a>
                        <a href="#" class="flex items-center px-3 py-2 text-gray-600 hover:bg-gray-50 hover:text-[#2563EB] rounded-lg transition-colors group">
                            <i class="fas fa-history w-6 group-hover:text-[#2563EB] transition-colors"></i>
                            <span>Move History</span>
                        </a>
                    </div>
                </div>

                <!-- System Group -->
                <div class="mt-6">
                    <h3 class="px-6 text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">System</h3>
                    <div class="px-3 space-y-1">
                        <a href="#" class="flex items-center px-3 py-2 text-gray-600 hover:bg-gray-50 hover:text-[#2563EB] rounded-lg transition-colors group">
                            <i class="fas fa-cog w-6 group-hover:text-[#2563EB] transition-colors"></i>
                            <span>Settings</span>
                        </a>
                        <a href="login.php" class="flex items-center px-3 py-2 text-gray-600 hover:bg-red-50 hover:text-red-600 rounded-lg transition-colors group">
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
                        PN
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-700">Prathamesh Nibandhe</p>
                        <p class="text-xs text-gray-500">Warehouse Manager</p>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col overflow-hidden">
            
            <!-- Top Header -->
            <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-6 shadow-sm z-10">
                
                <!-- Search Bar -->
                <div class="flex items-center bg-slate-100 rounded-lg px-4 py-2 w-96 transition-all focus-within:ring-2 focus-within:ring-blue-100 focus-within:bg-white border border-transparent focus-within:border-blue-200">
                    <i class="fas fa-search text-gray-400 mr-3"></i>
                    <input type="text" placeholder="Search products, SKUs, operations..." class="bg-transparent border-none focus:outline-none text-sm w-full text-gray-700 placeholder-gray-400">
                </div>

                <!-- Right Actions -->
                <div class="flex items-center space-x-5">
                    <button class="text-gray-400 hover:text-[#2563EB] transition-colors relative">
                        <i class="fas fa-bell text-lg"></i>
                        <span class="absolute -top-1 -right-1 block h-2.5 w-2.5 rounded-full bg-red-500 ring-2 ring-white"></span>
                    </button>
                    <div class="h-8 w-px bg-gray-200"></div>
                    <span class="text-sm font-medium text-gray-600">Main Warehouse</span>
                </div>
            </header>

            <!-- Scrollable Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50 p-8">
                
                <!-- Page Title -->
                <div class="mb-8 flex justify-between items-end">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Dashboard Overview</h2>
                        <p class="text-sm text-gray-500 mt-1">Here's what's happening in your warehouse today.</p>
                    </div>
                    <button class="bg-[#2563EB] text-white px-4 py-2 rounded-lg text-sm font-medium shadow-sm hover:bg-blue-700 transition">
                        <i class="fas fa-plus mr-2"></i> New Operation
                    </button>
                </div>

                <!-- KPI Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                    
                    <!-- Receipts Card (Blue Theme) -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 relative overflow-hidden group hover:shadow-md transition-all">
                        <div class="absolute top-0 left-0 w-1.5 h-full bg-[#2563EB]"></div>
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-lg font-bold text-gray-800 group-hover:text-[#2563EB] transition-colors">Receipts</h3>
                                <p class="text-xs text-gray-500">Incoming Stock</p>
                            </div>
                            <div class="bg-blue-50 p-2.5 rounded-full text-[#2563EB]">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4 mt-2">
                            <div class="bg-slate-50 p-3 rounded-lg border border-slate-100 text-center">
                                <span class="block text-2xl font-bold text-gray-900">4</span>
                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wide">To Receive</span>
                            </div>
                            <div class="bg-slate-50 p-3 rounded-lg border border-slate-100 text-center">
                                <span class="block text-2xl font-bold text-gray-900">6</span>
                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wide">Done Today</span>
                            </div>
                        </div>
                        
                        <div class="mt-5">
                            <button class="w-full py-2 text-sm font-medium text-[#2563EB] bg-blue-50 rounded-lg hover:bg-[#2563EB] hover:text-white transition-colors" id="myButton" onclick="window.location.href = 'receipts/receipts.php';">   
                                View All Receipts
                            </button>
                        </div>
                    </div>

                    <!-- Deliveries Card (Indigo Theme for differentiation) -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 relative overflow-hidden group hover:shadow-md transition-all">
                        <div class="absolute top-0 left-0 w-1.5 h-full bg-indigo-500"></div>
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-lg font-bold text-gray-800 group-hover:text-indigo-600 transition-colors">Delivery</h3>
                                <p class="text-xs text-gray-500">Outgoing Stock</p>
                            </div>
                            <div class="bg-indigo-50 p-2.5 rounded-full text-indigo-600">
                                <i class="fas fa-upload"></i>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4 mt-2">
                            <div class="bg-slate-50 p-3 rounded-lg border border-slate-100 text-center">
                                <span class="block text-2xl font-bold text-gray-900">9</span>
                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wide">To Deliver</span>
                            </div>
                            <div class="bg-slate-50 p-3 rounded-lg border border-slate-100 text-center">
                                <span class="block text-2xl font-bold text-gray-900">2</span>
                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wide">Waiting</span>
                            </div>
                        </div>

                        <div class="mt-5">
                            <button class="w-full py-2 text-sm font-medium text-indigo-600 bg-indigo-50 rounded-lg hover:bg-indigo-600 hover:text-white transition-colors" id="myButton" onclick="window.location.href = 'deliveries/delivery.php';">  
                                View All Deliveries
                            </button>
                        </div>
                    </div>

                    <!-- Internal Transfers (Teal Theme) - Hidden on small screens if needed -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 relative overflow-hidden group hover:shadow-md transition-all hidden lg:block">
                        <div class="absolute top-0 left-0 w-1.5 h-full bg-teal-500"></div>
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-lg font-bold text-gray-800 group-hover:text-teal-600 transition-colors">Internal</h3>
                                <p class="text-xs text-gray-500">Warehouse Transfers</p>
                            </div>
                            <div class="bg-teal-50 p-2.5 rounded-full text-teal-600">
                                <i class="fas fa-exchange-alt"></i>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-center h-24 bg-slate-50 rounded-lg border border-slate-100 mt-2">
                            <div class="text-center">
                                <span class="block text-2xl font-bold text-gray-900">3</span>
                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wide">Pending Transfers</span>
                            </div>
                        </div>

                        <div class="mt-5">
                            <button class="w-full py-2 text-sm font-medium text-teal-600 bg-teal-50 rounded-lg hover:bg-teal-600 hover:text-white transition-colors">
                                View Internal
                            </button>
                        </div>
                    </div>

                </div>

                <!-- Alerts Section -->
                <div class="bg-amber-50 border border-amber-200 rounded-xl p-5 shadow-sm flex flex-col sm:flex-row gap-4 items-start sm:items-center">
                    <div class="bg-amber-100 p-3 rounded-full flex-shrink-0">
                        <i class="fas fa-exclamation-triangle text-amber-600 text-xl"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-sm font-bold text-amber-800 uppercase tracking-wide mb-1">Action Required</h3>
                        <ul class="text-sm text-amber-900 space-y-1 list-disc list-inside marker:text-amber-500">
                            <li><strong>2 Receipts</strong> scheduled for yesterday are still pending validation.</li>
                            <li>Waiting for availability on Delivery Order <strong>#WH/OUT/002</strong>.</li>
                        </ul>
                    </div>
                    <button class="text-sm font-bold text-amber-700 hover:text-amber-900 hover:underline whitespace-nowrap px-4">
                        Dismiss
                    </button>
                </div>

            </main>
        </div>
    </div>

    </body>
    </html>