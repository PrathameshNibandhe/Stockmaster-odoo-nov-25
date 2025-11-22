<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>
<body class="bg-gray-100 font-sans">

<div class="flex h-screen overflow-hidden">

    <aside class="w-64 bg-white border-r border-gray-200 hidden md:flex flex-col">
        <div class="h-16 flex items-center justify-center border-b border-gray-200">
            <h1 class="text-xl font-bold text-red-600">StockMaster</h1>
        </div>

        <nav class="flex-1 overflow-y-auto py-4">
            <ul class="space-y-1 px-2">
                <li>
                    <a href="#" class="flex items-center px-4 py-3 bg-red-50 text-red-700 rounded-md font-medium">
                        <i class="fas fa-th-large w-6"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="mt-4 px-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">Operations</li>
                <li>
                    <a href="#" class="flex items-center px-4 py-2 text-gray-600 hover:bg-gray-50 hover:text-gray-900 rounded-md">
                        <i class="fas fa-truck-loading w-6"></i>
                        <span>Receipts</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-4 py-2 text-gray-600 hover:bg-gray-50 hover:text-gray-900 rounded-md">
                        <i class="fas fa-truck w-6"></i>
                        <span>Deliveries</span>
                    </a>
                </li>

                <li class="mt-4 px-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">Inventory</li>
                <li>
                    <a href="#" class="flex items-center px-4 py-2 text-gray-600 hover:bg-gray-50 hover:text-gray-900 rounded-md">
                        <i class="fas fa-boxes w-6"></i>
                        <span>Stock</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-4 py-2 text-gray-600 hover:bg-gray-50 hover:text-gray-900 rounded-md">
                        <i class="fas fa-history w-6"></i>
                        <span>Move History</span>
                    </a>
                </li>

                <li class="mt-4 px-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">System</li>
                <li>
                    <a href="#" class="flex items-center px-4 py-2 text-gray-600 hover:bg-gray-50 hover:text-gray-900 rounded-md">
                        <i class="fas fa-cog w-6"></i>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <div class="flex-1 flex flex-col overflow-hidden">
        
        <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-6">
            <div class="flex items-center bg-gray-100 rounded-md px-3 py-2 w-96">
                <i class="fas fa-search text-gray-400 mr-2"></i>
                <input type="text" placeholder="Search products, operations..." class="bg-transparent border-none focus:outline-none text-sm w-full">
            </div>

            <div class="flex items-center space-x-4">
                <button class="text-gray-500 hover:text-red-600 relative">
                    <i class="fas fa-bell"></i>
                    <span class="absolute top-0 right-0 block h-2 w-2 rounded-full bg-red-600 ring-2 ring-white"></span>
                </button>
                <div class="h-8 w-8 rounded-full bg-red-100 flex items-center justify-center text-red-600 font-bold border border-red-200">
                    A
                </div>
            </div>
        </header>

        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
            
            <div class="mb-6">
                <h2 class="text-2xl font-semibold text-gray-800">Dashboard Overview</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-1 h-full bg-red-500"></div>
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="text-lg font-bold text-red-600">Receipts</h3>
                            <p class="text-xs text-gray-500">Incoming Stock Operations</p>
                        </div>
                        <div class="bg-red-50 p-2 rounded-full">
                            <i class="fas fa-download text-red-500"></i>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div class="bg-gray-50 p-3 rounded border border-gray-100 text-center">
                            <span class="block text-2xl font-bold text-gray-800">4</span>
                            <span class="text-xs text-gray-500 uppercase">To Receive</span>
                        </div>
                        <div class="bg-gray-50 p-3 rounded border border-gray-100 text-center">
                            <span class="block text-2xl font-bold text-gray-800">6</span>
                            <span class="text-xs text-gray-500 uppercase">Total Operations</span>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <button class="w-full py-2 text-sm text-red-600 border border-red-600 rounded hover:bg-red-50 transition">
                            View All Receipts
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-1 h-full bg-blue-500"></div>
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="text-lg font-bold text-blue-600">Delivery</h3>
                            <p class="text-xs text-gray-500">Outgoing Stock Operations</p>
                        </div>
                        <div class="bg-blue-50 p-2 rounded-full">
                            <i class="fas fa-upload text-blue-500"></i>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div class="bg-gray-50 p-3 rounded border border-gray-100 text-center">
                            <span class="block text-2xl font-bold text-gray-800">9</span>
                            <span class="text-xs text-gray-500 uppercase">To Deliver</span>
                        </div>
                        <div class="bg-gray-50 p-3 rounded border border-gray-100 text-center">
                            <span class="block text-2xl font-bold text-gray-800">2</span>
                            <span class="text-xs text-gray-500 uppercase">Waiting</span>
                        </div>
                    </div>

                    <div class="mt-4">
                        <button class="w-full py-2 text-sm text-blue-600 border border-blue-600 rounded hover:bg-blue-50 transition">
                            View All Deliveries
                        </button>
                    </div>
                </div>

            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded shadow-sm">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <i class="fas fa-exclamation-triangle text-yellow-400"></i>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-yellow-800">Attention Required</h3>
                        <div class="mt-2 text-sm text-yellow-700">
                            <ul class="list-disc list-inside space-y-1">
                                <li>2 Receipts scheduled for yesterday are still pending.</li>
                                <li>Waiting for stocks on Ref #WH/OUT/002.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
</div>

</body>
</html>