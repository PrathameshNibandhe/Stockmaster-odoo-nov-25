<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster - New Receipt</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <style>
        /* Custom style for the status arrow effect */
        .status-arrow {
            clip-path: polygon(0 0, 85% 0, 100% 50%, 85% 100%, 0 100%, 15% 50%);
        }
        .status-arrow-first {
            clip-path: polygon(0 0, 85% 0, 100% 50%, 85% 100%, 0 100%);
        }
    </style>
</head>
<body class="bg-slate-50 font-sans text-gray-800">

<div class="flex h-screen overflow-hidden">

    <!-- Sidebar (Consistent with existing design) -->
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
                        <a href="../deliveries/delivery.php" class="flex items-center px-3 py-2 text-gray-600 hover:bg-gray-50 hover:text-[#2563EB] rounded-lg transition-colors group">
                            <i class="fas fa-truck w-6 group-hover:text-[#2563EB] transition-colors"></i>
                            <span>Deliveries</span>
                        </a>
                        <a href="#" class="flex items-center px-3 py-2 text-gray-600 hover:bg-gray-50 hover:text-[#2563EB] rounded-lg transition-colors group">
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

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        
        <!-- Top Header -->
        <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-6 shadow-sm z-10">
            <div class="flex items-center gap-4">
                <a href="receipts.php" class="text-gray-400 hover:text-gray-600 transition">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <h1 class="text-lg font-bold text-gray-800">New Receipt</h1>
            </div>
            <div class="flex items-center space-x-5">
                <span class="text-sm font-medium text-gray-600">Main Warehouse</span>
            </div>
        </header>

        <!-- Scrollable Form Area -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50 p-8">
            
            <div class="max-w-5xl mx-auto bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                
                <!-- ACTION BAR & STATUS -->
                <div class="border-b border-gray-200 p-4 flex flex-col md:flex-row justify-between items-center gap-4 bg-white sticky top-0 z-20">
                    
                    <!-- Left: Buttons -->
                    <div class="flex gap-2 w-full md:w-auto">
                        <button class="px-4 py-2 bg-[#2563EB] text-white text-sm font-bold rounded shadow-sm hover:bg-blue-700 transition">
                            Validate
                        </button>
                        <button class="px-4 py-2 bg-white border border-gray-300 text-gray-700 text-sm font-medium rounded hover:bg-gray-50 transition">
                            Print
                        </button>
                        <button onclick="window.location.href='receipts.php'" class="px-4 py-2 bg-white border border-gray-300 text-gray-700 text-sm font-medium rounded hover:bg-red-50 hover:text-red-600 transition">
                            Cancel
                        </button>
                    </div>

                    <!-- Right: Status Ribbon (Draft > Ready > Done) -->
                    <div class="flex items-center text-sm font-medium w-full md:w-auto justify-end">
                        <!-- Draft (Active) -->
                        <div class="relative bg-[#2563EB] text-white px-6 py-1.5 status-arrow-first z-30 pr-8">
                            Draft
                        </div>
                        <!-- Ready -->
                        <div class="relative bg-gray-100 text-gray-400 px-6 py-1.5 status-arrow -ml-4 z-20 pr-8 border-r border-white">
                            Ready
                        </div>
                        <!-- Done -->
                        <div class="relative bg-gray-100 text-gray-400 px-6 py-1.5 status-arrow -ml-4 z-10 pr-8">
                            Done
                        </div>
                    </div>
                </div>

                <!-- FORM CONTENT -->
                <div class="p-8">
                    
                    <!-- Title -->
                    <div class="mb-8">
                        <h2 class="text-3xl font-bold text-[#2563EB]">WH/IN/0001</h2>
                        <p class="text-xs text-gray-400 mt-1">Reference will be auto-generated upon saving</p>
                    </div>

                    <!-- Form Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-6 mb-8">
                        
                        <!-- Left Column -->
                        <div class="space-y-4">
                            <div class="grid grid-cols-3 items-center gap-4">
                                <label class="text-sm font-bold text-gray-700 col-span-1 border-b border-gray-300 pb-1">Receive From</label>
                                <div class="col-span-2 relative">
                                    <input type="text" class="w-full border-b border-gray-300 focus:border-[#2563EB] outline-none py-1 text-gray-900 placeholder-gray-400 transition" placeholder="Select Vendor...">
                                    <i class="fas fa-chevron-down absolute right-0 top-2 text-xs text-gray-400 pointer-events-none"></i>
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-3 items-center gap-4">
                                <label class="text-sm font-medium text-gray-600 col-span-1">Operation Type</label>
                                <div class="col-span-2 text-sm text-gray-900">
                                    Main Warehouse: Receipts
                                </div>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="space-y-4">
                            <div class="grid grid-cols-3 items-center gap-4">
                                <label class="text-sm font-bold text-gray-700 col-span-1 border-b border-gray-300 pb-1">Scheduled Date</label>
                                <div class="col-span-2">
                                    <input type="date" class="w-full border-b border-gray-300 focus:border-[#2563EB] outline-none py-1 text-gray-900 transition">
                                </div>
                            </div>

                            <div class="grid grid-cols-3 items-center gap-4">
                                <label class="text-sm font-medium text-gray-600 col-span-1 border-b border-gray-300 pb-1">Responsible</label>
                                <div class="col-span-2">
                                    <!-- Auto-filled with John Doe as per wireframe -->
                                    <div class="flex items-center gap-2 border-b border-gray-300 py-1">
                                        <img src="https://ui-avatars.com/api/?name=Prathamesh+Nibandhe&background=2563EB&color=fff" class="w-5 h-5 rounded-full" alt="JD">
                                        <input type="text" value="Prathamesh Nibandhe" class="w-full outline-none text-gray-900 bg-transparent" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- PRODUCTS TAB SECTION -->
                    <div class="mt-10">
                        <div class="border-b border-gray-200 mb-4">
                            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
                                <li class="mr-2">
                                    <a href="#" class="inline-block p-4 text-[#2563EB] border-b-2 border-[#2563EB] rounded-t-lg active" aria-current="page">Operations</a>
                                </li>
                                <li class="mr-2">
                                    <a href="#" class="inline-block p-4 text-gray-500 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">Additional Info</a>
                                </li>
                                <li class="mr-2">
                                    <a href="#" class="inline-block p-4 text-gray-500 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">Note</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Product Table -->
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b border-gray-200">
                                    <tr>
                                        <th scope="col" class="px-4 py-3 w-1/2">Product</th>
                                        <th scope="col" class="px-4 py-3 w-1/4">Demand</th>
                                        <th scope="col" class="px-4 py-3 w-10"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Example Row -->
                                    <tr class="bg-white border-b hover:bg-gray-50 group">
                                        <td class="px-4 py-2">
                                            <div class="relative">
                                                <input type="text" value="[DESK001] Large Desk" class="w-full border-none focus:ring-0 p-0 text-gray-900 font-medium bg-transparent" placeholder="Select Product">
                                                <span class="absolute right-0 top-0 text-xs text-gray-400 hidden group-hover:block">
                                                    <i class="fas fa-external-link-alt"></i>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="px-4 py-2">
                                            <input type="number" value="10.00" class="w-24 border-b border-gray-200 focus:border-[#2563EB] outline-none text-right text-gray-900">
                                        </td>
                                        <td class="px-4 py-2 text-right">
                                            <button class="text-gray-400 hover:text-red-500 transition">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" class="px-4 py-3">
                                            <a href="#" class="text-[#2563EB] hover:text-blue-700 font-medium text-sm flex items-center gap-1">
                                                Add a line
                                            </a>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </main>
    </div>
</div>

</body>
</html>