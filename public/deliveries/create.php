<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster - New Delivery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>
<body class="bg-slate-50 font-sans text-gray-800">

<div class="flex h-screen overflow-hidden">

    <!-- IMPORT SIDEBAR -->
    <?php 
        $path_to_root = "../"; 
        $active_page = "deliveries";
        include '../sidebar.php'; 
    ?>

    <!-- MAIN CONTENT -->
    <div class="flex-1 flex flex-col overflow-hidden">
        
        <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-6 shadow-sm z-10">
            <div class="flex items-center">
                <a href="deliveries.php" class="mr-4 text-gray-400 hover:text-gray-600">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
                <h1 class="text-lg font-bold text-gray-800">New Delivery Order</h1>
            </div>
            <div class="flex items-center space-x-5">
                <div class="h-8 w-8 rounded-full bg-[#2563EB] flex items-center justify-center text-white font-bold text-sm shadow-md">JD</div>
            </div>
        </header>

        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50 p-8">
            
            <!-- Main Form Card -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                
                <!-- Action Bar (Top) -->
                <div class="border-b border-gray-200 p-4 flex flex-col md:flex-row justify-between items-center bg-gray-50/50 gap-4">
                    <div class="flex gap-2">
                        <button class="bg-indigo-600 text-white px-6 py-2 rounded-lg shadow-sm hover:bg-indigo-700 font-medium transition-colors">
                            Validate
                        </button>
                        <button class="bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-50 font-medium transition-colors">
                            Print
                        </button>
                        <button onclick="window.location.href='deliveries.php'" class="bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-50 font-medium transition-colors">
                            Cancel
                        </button>
                    </div>

                    <!-- Status Pipeline -->
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <span class="px-3 py-1 rounded-l-lg bg-indigo-600 text-white text-sm font-bold border border-indigo-600 z-10">Draft</span>
                            <!-- Triangle Effect -->
                            <div class="w-0 h-0 border-t-[14px] border-t-transparent border-l-[10px] border-l-indigo-600 border-b-[14px] border-b-transparent mr-[-10px] z-20"></div>
                        </div>
                        
                        <div class="flex items-center -ml-2">
                            <span class="px-4 py-1 bg-gray-100 text-gray-500 text-sm font-medium border-y border-r border-gray-200">Waiting</span>
                        </div>
                        
                        <div class="flex items-center">
                            <span class="px-4 py-1 bg-gray-100 text-gray-500 text-sm font-medium border-y border-r border-gray-200">Ready</span>
                        </div>
                        
                        <div class="flex items-center">
                            <span class="px-4 py-1 rounded-r-lg bg-gray-100 text-gray-500 text-sm font-medium border-y border-r border-gray-200">Done</span>
                        </div>
                    </div>
                </div>

                <!-- Form Content -->
                <div class="p-8">
                    
                    <!-- Document Title / Reference -->
                    <div class="mb-8">
                        <h2 class="text-3xl font-bold text-indigo-600">WH/OUT/Draft</h2>
                        <p class="text-sm text-gray-400">New delivery order</p>
                    </div>

                    <!-- Fields Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-6 mb-8">
                        
                        <!-- Left Column -->
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1 border-b-2 border-transparent hover:border-indigo-200 w-fit transition-colors">Delivery Address</label>
                                <input type="text" placeholder="e.g. Azure Interior" class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-indigo-600 bg-transparent transition-colors placeholder-gray-400">
                            </div>
                            
                             <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">Responsible</label>
                                <input type="text" class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-indigo-600 bg-transparent transition-colors" >
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">Scheduled Date</label>
                                <input type="date" class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-indigo-600 bg-transparent transition-colors text-gray-600">
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">Operation Type</label>
                                <div class="relative">
                                    <select class="w-full border-b border-gray-300 py-2 pr-8 focus:outline-none focus:border-indigo-600 bg-transparent appearance-none text-gray-700 cursor-pointer">
                                        <option>Delivery Orders</option>
                                        <option>Returns</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                        <i class="fas fa-caret-down text-gray-400"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Products Tabs -->
                    <div class="border-b border-gray-200 mb-4">
                        <nav class="-mb-px flex space-x-8">
                            <a href="#" class="border-indigo-500 text-indigo-600 whitespace-nowrap pb-4 px-1 border-b-2 font-medium text-sm">
                                Operations
                            </a>
                            <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap pb-4 px-1 border-b-2 font-medium text-sm">
                                Additional Info
                            </a>
                            <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap pb-4 px-1 border-b-2 font-medium text-sm">
                                Note
                            </a>
                        </nav>
                    </div>

                    <!-- Product Lines Table -->
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th class="py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-2/3">Product</th>
                                    <th class="py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider w-1/3">Quantity</th>
                                    <th class="w-10"></th>
                                </tr>
                            </thead>
                            <tbody id="product-lines" class="divide-y divide-gray-100">
                                <!-- Existing Line Example -->
                                <tr class="group hover:bg-gray-50">
                                    <td class="py-3">
                                        <div class="text-sm font-medium text-gray-900">[DESK001] Large Cabinet Desk</div>
                                    </td>
                                    <td class="py-3 text-right">
                                        <input type="number" value="6" class="w-20 text-right border border-transparent hover:border-gray-300 focus:border-indigo-500 rounded px-2 py-1 bg-transparent focus:bg-white transition-colors">
                                    </td>
                                    <td class="py-3 text-right">
                                        <button class="text-gray-400 hover:text-red-500 opacity-0 group-hover:opacity-100 transition-opacity">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <!-- Add New Line -->
                        <div class="mt-4">
                            <button onclick="addNewLine()" class="text-indigo-600 hover:text-indigo-800 text-sm font-medium hover:underline flex items-center">
                                <i class="fas fa-plus-circle mr-2"></i> Add a product
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </main>
    </div>
</div>

<!-- Simple JS for Demo Interactivity -->
<script>
    function addNewLine() {
        const tbody = document.getElementById('product-lines');
        const row = document.createElement('tr');
        row.className = 'group hover:bg-gray-50';
        row.innerHTML = `
            <td class="py-3">
                <input type="text" placeholder="Search Product..." class="w-full border border-transparent hover:border-gray-300 focus:border-indigo-500 rounded px-2 py-1 bg-transparent focus:bg-white transition-colors text-sm">
            </td>
            <td class="py-3 text-right">
                <input type="number" value="1" class="w-20 text-right border border-transparent hover:border-gray-300 focus:border-indigo-500 rounded px-2 py-1 bg-transparent focus:bg-white transition-colors">
            </td>
            <td class="py-3 text-right">
                <button onclick="this.closest('tr').remove()" class="text-gray-400 hover:text-red-500 transition-colors">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </td>
        `;
        tbody.appendChild(row);
        // Focus the new input
        row.querySelector('input[type="text"]').focus();
    }
</script>

</body>
</html>