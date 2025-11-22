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
    <?php include '../sidebar.php' ?>

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
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg shadow-sm hover:bg-indigo-700 flex items-center transition-colors" id="myButton" onclick="window.location.href = 'create.php';">
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