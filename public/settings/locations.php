<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster - New Location</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>
<body class="bg-slate-50 font-sans text-gray-800">

<div class="flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <?php include '../sidebar.php'?>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        
        <!-- Top Header -->
        <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-6 shadow-sm z-10">
            <div class="flex items-center gap-4">
                <a href="../dashboard.php" class="text-gray-400 hover:text-gray-600 transition">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <h1 class="text-lg font-bold text-gray-800">Configuration / Locations</h1>
            </div>
            <div class="flex items-center space-x-5">
                <span class="text-sm font-medium text-gray-600">Main Warehouse</span>
            </div>
        </header>

        <!-- Form Area -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50 p-8">
            
            <div class="max-w-3xl mx-auto bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                
                <!-- Action Bar -->
                <div class="border-b border-gray-200 p-4 flex gap-2 bg-gray-50/50">
                    <button class="px-4 py-2 bg-[#2563EB] text-white text-sm font-bold rounded shadow-sm hover:bg-blue-700 transition">
                        Save
                    </button>
                    <button class="px-4 py-2 bg-white border border-gray-300 text-gray-700 text-sm font-medium rounded hover:bg-gray-50 transition">
                        Discard
                    </button>
                </div>

                <!-- Form Content -->
                <div class="p-8">
                    
                    <div class="mb-8 border-b border-gray-100 pb-4">
                        <h2 class="text-2xl font-bold text-gray-800">Location</h2>
                    </div>

                    <div class="space-y-6">
                        
                        <!-- Name Field -->
                        <div class="grid grid-cols-1 md:grid-cols-4 items-center gap-4">
                            <label class="text-sm font-bold text-[#2563EB] md:col-span-1">
                                Location Name
                            </label>
                            <div class="md:col-span-3">
                                <input type="text" class="w-full border-b border-gray-300 focus:border-[#2563EB] outline-none py-2 text-gray-900 placeholder-gray-300 transition text-lg" placeholder="e.g., Shelf A, Zone 1">
                            </div>
                        </div>

                        <!-- Short Code Field -->
                        <div class="grid grid-cols-1 md:grid-cols-4 items-center gap-4">
                            <label class="text-sm font-bold text-[#2563EB] md:col-span-1">
                                Short Code
                            </label>
                            <div class="md:col-span-3">
                                <input type="text" class="w-full md:w-1/2 border-b border-gray-300 focus:border-[#2563EB] outline-none py-2 text-gray-900 placeholder-gray-300 transition" placeholder="e.g., WH/ST/A">
                            </div>
                        </div>

                        <!-- Warehouse Field -->
                        <div class="grid grid-cols-1 md:grid-cols-4 items-center gap-4">
                            <label class="text-sm font-bold text-[#2563EB] md:col-span-1">
                                Warehouse
                            </label>
                            <div class="md:col-span-3">
                                <div class="relative w-full md:w-1/3">
                                    <select class="w-full appearance-none border-b border-gray-300 focus:border-[#2563EB] outline-none py-2 text-gray-900 bg-transparent pr-8 cursor-pointer">
                                        <option value="WH" selected>WH</option>
                                        <option value="WH2">WH2 - West Coast</option>
                                        <option value="PROD">PROD - Production</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <i class="fas fa-chevron-down text-xs"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Help Text / Footer Info -->
                    <div class="mt-16 pt-8 border-t border-gray-100 text-center">
                        <p class="text-gray-400 text-sm italic">
                            This holds the multiple locations of warehouse, rooms, shelves, or racks.
                        </p>
                    </div>

                </div>
            </div>

        </main>
    </div>
</div>

</body>
</html>