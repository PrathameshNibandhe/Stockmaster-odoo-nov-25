<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster - Internal Transfers</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>
<body class="bg-slate-50 font-sans text-gray-800">

<div class="flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-64 bg-white border-r border-gray-200 hidden md:flex flex-col shadow-sm z-10">
        <!-- Brand Logo -->
        <div class="h-16 flex items-center px-6 border-b border-gray-100">
            <a href="../../index.php" class="flex items-center gap-2 font-bold text-xl text-[#2563EB]">
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
                <a href="../dashboard.php" class="flex items-center px-3 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-[#2563EB] rounded-lg transition-colors group">
                    <i class="fas fa-th-large w-6 group-hover:text-[#2563EB] transition-colors"></i>
                    <span>Dashboard</span>
                </a>
            </div>

            <!-- Operations Group -->
            <div class="mt-6">
                <h3 class="px-6 text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Operations</h3>
                <div class="px-3 space-y-1">
                    <a href="../receipts/receipts.php" class="flex items-center px-3 py-2 text-gray-600 hover:bg-gray-50 hover:text-[#2563EB] rounded-lg transition-colors group">
                        <i class="fas fa-truck-loading w-6 group-hover:text-[#2563EB] transition-colors"></i>
                        <span>Receipts</span>
                    </a>
                    <a href="#" class="flex items-center px-3 py-2 text-gray-600 hover:bg-gray-50 hover:text-[#2563EB] rounded-lg transition-colors group">
                        <i class="fas fa-truck w-6 group-hover:text-[#2563EB] transition-colors"></i>
                        <span>Deliveries</span>
                    </a>
                    <!-- Active State for Internal Transfers -->
                    <a href="#" class="flex items-center px-3 py-2 bg-blue-50 text-[#2563EB] rounded-lg font-medium transition-colors">
                        <i class="fas fa-sync-alt w-6"></i>
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

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col overflow-hidden">
        
        <!-- Top Header -->
        <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-6 shadow-sm z-10">
            <div class="flex items-center bg-slate-100 rounded-lg px-4 py-2 w-96 transition-all focus-within:ring-2 focus-within:ring-blue-100 focus-within:bg-white border border-transparent focus-within:border-blue-200">
                <i class="fas fa-search text-gray-400 mr-3"></i>
                <input type="text" placeholder="Search transfers, locations..." class="bg-transparent border-none focus:outline-none text-sm w-full text-gray-700 placeholder-gray-400">
            </div>

            <div class="flex items-center space-x-5">
                <button class="text-gray-400 hover:text-[#2563EB] transition-colors relative">
                    <i class="fas fa-bell text-lg"></i>
                </button>
                <div class="h-8 w-px bg-gray-200"></div>
                <span class="text-sm font-medium text-gray-600">Main Warehouse</span>
            </div>
        </header>

        <!-- Scrollable Content -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50 p-8">
            
            <!-- Page Title & Actions -->
            <div class="mb-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-1">
                        <span>Operations</span>
                        <i class="fas fa-chevron-right text-xs"></i>
                        <span class="text-[#2563EB] font-medium">Internal Transfers</span>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">Warehouse Movement</h2>
                </div>
                <button class="bg-[#2563EB] text-white px-5 py-2.5 rounded-lg text-sm font-bold shadow-sm hover:bg-blue-700 transition flex items-center gap-2">
                    <i class="fas fa-plus"></i> Create Transfer
                </button>
            </div>

            <!-- Filters Bar -->
            <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm mb-6 flex flex-wrap gap-3 items-center">
                <span class="text-sm font-medium text-gray-500 mr-2">Filter by:</span>
                
                <button class="px-3 py-1.5 rounded-full text-xs font-medium bg-blue-50 text-[#2563EB] border border-blue-100">
                    All Statuses
                </button>
                <button class="px-3 py-1.5 rounded-full text-xs font-medium bg-white text-gray-600 border border-gray-200 hover:bg-gray-50">
                    Draft
                </button>
                <button class="px-3 py-1.5 rounded-full text-xs font-medium bg-white text-gray-600 border border-gray-200 hover:bg-gray-50">
                    Ready
                </button>
                <button class="px-3 py-1.5 rounded-full text-xs font-medium bg-white text-gray-600 border border-gray-200 hover:bg-gray-50">
                    Done
                </button>
                
                <div class="flex-1"></div>
                
                <div class="flex items-center border border-gray-200 rounded-lg overflow-hidden">
                    <button class="px-3 py-1.5 bg-white text-gray-500 border-r border-gray-200 hover:bg-gray-50">
                        <i class="fas fa-filter"></i>
                    </button>
                    <button class="px-3 py-1.5 bg-white text-gray-500 hover:bg-gray-50">
                        <i class="fas fa-sort"></i>
                    </button>
                </div>
            </div>

            <!-- Data Table -->
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                Reference
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                From
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-bold text-gray-400 uppercase tracking-wider w-8">
                                
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                To
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                Scheduled
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                Status
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Actions</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        
                        <!-- Row 1: Ready Transfer -->
                        <tr class="hover:bg-blue-50/30 transition-colors cursor-pointer">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-bold text-[#2563EB]">WH/INT/0023</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Main Warehouse</div>
                                <div class="text-xs text-gray-400">Zone A</div>
                            </td>
                            <td class="px-0 py-4 text-center">
                                <i class="fas fa-arrow-right text-gray-300 text-xs"></i>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Production Floor</div>
                                <div class="text-xs text-gray-400">Line 1 Input</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">Today, 2:00 PM</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-[#2563EB]">
                                    Ready
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button class="text-[#2563EB] hover:text-blue-900 font-bold">Validate</button>
                            </td>
                        </tr>

                        <!-- Row 2: Draft Transfer -->
                        <tr class="hover:bg-blue-50/30 transition-colors cursor-pointer">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-bold text-gray-700">WH/INT/0024</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Main Warehouse</div>
                                <div class="text-xs text-gray-400">Receiving</div>
                            </td>
                            <td class="px-0 py-4 text-center">
                                <i class="fas fa-arrow-right text-gray-300 text-xs"></i>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">West Coast Hub</div>
                                <div class="text-xs text-gray-400">Transit</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">Tomorrow</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-600">
                                    Draft
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button class="text-gray-400 hover:text-gray-600">Edit</button>
                            </td>
                        </tr>

                        <!-- Row 3: Done Transfer -->
                        <tr class="hover:bg-blue-50/30 transition-colors cursor-pointer opacity-75">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-bold text-gray-600">WH/INT/0022</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Production Floor</div>
                                <div class="text-xs text-gray-400">Output Rack</div>
                            </td>
                            <td class="px-0 py-4 text-center">
                                <i class="fas fa-arrow-right text-gray-300 text-xs"></i>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Main Warehouse</div>
                                <div class="text-xs text-gray-400">Zone C</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">Yesterday</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-teal-100 text-teal-800">
                                    Done
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <i class="fas fa-check text-teal-600"></i>
                            </td>
                        </tr>

                    </tbody>
                </table>
                
                <!-- Pagination -->
                <div class="bg-white px-4 py-3 border-t border-gray-200 flex items-center justify-between sm:px-6">
                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                        <div>
                            <p class="text-sm text-gray-700">
                                Showing <span class="font-medium">1</span> to <span class="font-medium">3</span> of <span class="font-medium">28</span> results
                            </p>
                        </div>
                        <div>
                            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Previous</span>
                                    <i class="fas fa-chevron-left h-5 w-5 p-1"></i>
                                </a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">1</a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">2</a>
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Next</span>
                                    <i class="fas fa-chevron-right h-5 w-5 p-1"></i>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
</div>

</body>
</html>