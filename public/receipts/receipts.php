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
            <div class="flex flex-col md:flex-row justify-between items-center mb-6">
    <div class="flex space-x-2 mb-4 md:mb-0">
        <button class="bg-red-600 text-white px-4 py-2 rounded shadow hover:bg-red-700 flex items-center">
            <i class="fas fa-plus mr-2"></i> New Receipt
        </button>
    </div>
    
    <div class="flex items-center space-x-3">
        <div class="relative">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                <i class="fas fa-search"></i>
            </span>
            <input type="text" class="pl-10 pr-4 py-2 border border-gray-300 rounded focus:border-red-500 focus:outline-none" placeholder="Search Reference...">
        </div>
        <div class="border border-gray-300 rounded flex overflow-hidden">
            <button class="px-3 py-2 bg-gray-200 text-gray-700 shadow-inner"><i class="fas fa-list"></i></button>
            <button class="px-3 py-2 bg-white text-gray-500 hover:bg-gray-50"><i class="fas fa-th-large"></i></button>
        </div>
    </div>
</div>

<div class="bg-white shadow-sm rounded-lg overflow-hidden border border-gray-200">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reference</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact/Partner</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">From / To</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <tr class="hover:bg-red-50 cursor-pointer transition">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-red-600">WH/IN/0001</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">12/1/2025</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Azure Interior</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Vendor &rarr; WH/Stock1</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        Ready
                    </span>
                </td>
            </tr>

            <tr class="hover:bg-red-50 cursor-pointer transition">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-red-600">WH/OUT/0002</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">12/2/2025</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Gemini Corp</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">WH/Stock1 &rarr; Customer</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                        Waiting
                    </span>
                </td>
            </tr>
            
            </tbody>
    </table>
    
    <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
        <div class="flex justify-between items-center">
            <p class="text-sm text-gray-700">Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of <span class="font-medium">20</span> results</p>
            <div class="flex space-x-2">
                <button class="px-3 py-1 border rounded text-sm text-gray-600 hover:bg-gray-50">Previous</button>
                <button class="px-3 py-1 border rounded text-sm text-gray-600 hover:bg-gray-50">Next</button>
            </div>
        </div>
    </div>
</div>
        </main>
    </div>
</div>

</body>
</html>