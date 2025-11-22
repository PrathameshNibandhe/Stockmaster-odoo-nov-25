<section class="relative pt-12 pb-20 lg:pt-20 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 relative">
        
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            
            <div>
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 border border-blue-100 text-[#2563EB] text-sm font-semibold mb-6">
                    <span class="relative flex h-2 w-2">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2 w-2 bg-[#2563EB]"></span>
                    </span>
                    v1.0 Now Live: Multi-Warehouse Support
                </div>

                <h1 class="text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight mb-6">
                    Master your <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#2563EB] to-blue-600">Inventory Logic</span>
                </h1>
                
                <p class="text-lg text-gray-600 mb-8 leading-relaxed max-w-lg">
                    Stop managing stock on scattered Excel sheets. 
                    <strong>StockMaster</strong> centralizes your Receipts, Deliveries, and Adjustments into one real-time dashboard.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="backend/signup.php" class="px-8 py-4 bg-[#2563EB] text-white rounded-xl font-bold hover:bg-blue-700 transition shadow-lg shadow-blue-500/30 text-center">
                        Get Started Free
                    </a>
                    <a href="#features" class="px-8 py-4 bg-white text-gray-700 border border-gray-200 rounded-xl font-bold hover:bg-gray-50 transition text-center flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        View Demo
                    </a>
                </div>

                <div class="mt-8 flex items-center gap-4 text-sm text-gray-500">
                    <div class="flex -space-x-2">
                        <div class="w-8 h-8 rounded-full bg-gray-200 border-2 border-white"></div>
                        <div class="w-8 h-8 rounded-full bg-gray-300 border-2 border-white"></div>
                        <div class="w-8 h-8 rounded-full bg-gray-400 border-2 border-white"></div>
                    </div>
                    <p>Trusted by 50+ Warehouse Managers</p>
                </div>
            </div>

            <div class="relative">
                <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-blue-100 rounded-full blur-3xl opacity-50 -z-10"></div>

                <div class="bg-white rounded-2xl shadow-2xl border border-gray-200 overflow-hidden transform rotate-1 hover:rotate-0 transition duration-500">
                    
                    <div class="bg-gray-50 border-b border-gray-200 px-4 py-3 flex justify-between items-center">
                        <div class="flex gap-2">
                            <div class="w-3 h-3 rounded-full bg-red-400"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                            <div class="w-3 h-3 rounded-full bg-green-400"></div>
                        </div>
                        <div class="h-2 w-32 bg-gray-200 rounded-full"></div>
                    </div>

                    <div class="p-6 grid grid-cols-2 gap-4">
                        
                        <div class="col-span-2 sm:col-span-1 bg-blue-50 p-4 rounded-lg border border-blue-100">
                            <div class="text-xs text-blue-600 font-bold uppercase">Total Stock</div>
                            <div class="text-2xl font-bold text-gray-800 mt-1">1,240</div>
                            <div class="text-xs text-green-600 mt-1">↑ Incoming Receipt #402</div>
                        </div>

                        <div class="col-span-2 sm:col-span-1 bg-red-50 p-4 rounded-lg border border-red-100">
                            <div class="text-xs text-red-600 font-bold uppercase">Low Stock Alert</div>
                            <div class="text-2xl font-bold text-gray-800 mt-1">8 Items</div>
                            <div class="text-xs text-red-500 mt-1">Needs Reordering</div>
                        </div>

                        <div class="col-span-2 bg-white border border-gray-100 rounded-lg p-4 shadow-sm">
                            <div class="flex justify-between items-end h-24 gap-2">
                                <div class="w-full bg-blue-100 rounded-t h-12"></div>
                                <div class="w-full bg-blue-200 rounded-t h-16"></div>
                                <div class="w-full bg-[#2563EB] rounded-t h-20 relative group">
                                    <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-black text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition">
                                        Today
                                    </div>
                                </div>
                                <div class="w-full bg-blue-200 rounded-t h-14"></div>
                                <div class="w-full bg-blue-100 rounded-t h-10"></div>
                            </div>
                            <div class="mt-2 text-center text-xs text-gray-400">Weekly Movement History</div>
                        </div>

                        <div class="col-span-2 space-y-2">
                            <div class="flex justify-between items-center text-sm p-2 bg-gray-50 rounded border border-gray-100">
                                <span class="text-gray-600">Steel Rods (Type A)</span>
                                <span class="text-green-600 font-bold">+50 Rec</span>
                            </div>
                            <div class="flex justify-between items-center text-sm p-2 bg-gray-50 rounded border border-gray-100">
                                <span class="text-gray-600">Office Chairs</span>
                                <span class="text-orange-600 font-bold">-10 Del</span>
                            </div>
                        </div>

                    </div>
                </div>
                
                <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-lg shadow-xl border border-gray-100 hidden md:block animate-bounce" style="animation-duration: 3s;">
                    <div class="flex items-center gap-3">
                        <div class="bg-green-100 p-2 rounded-full text-green-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <div>
                            <div class="text-sm font-bold text-gray-800">Delivery Validated</div>
                            <div class="text-xs text-gray-500">Stock Auto-Updated</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>