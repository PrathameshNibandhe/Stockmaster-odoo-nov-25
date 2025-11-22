<?php 
// Ensure header.php exists or copy the header code here
include 'header.php'; 
?>

<!-- HERO SECTION -->
<div class="relative bg-slate-50 pt-16 pb-20 lg:pt-24 lg:pb-28 overflow-hidden">
    <div class="relative max-w-7xl mx-auto px-6">
        <div class="text-center">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                <span class="block">One Platform.</span>
                <span class="block text-[#2563EB]">Unlimited Locations.</span>
            </h1>
            <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-500">
                Stop juggling separate spreadsheets for every site. StockMaster unifies your Main Warehouse, Retail Outlets, and Production Floors into a single, real-time dashboard.
            </p>
            <div class="mt-8 flex justify-center gap-4">
                <a href="backend/signup.php" class="px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-[#2563EB] hover:bg-blue-700 md:text-lg shadow-lg transition">
                    Start Managing Now
                </a>
            </div>
        </div>
    </div>
</div>

<!-- INTERACTIVE VISUAL SECTION -->
<div class="bg-white py-16 border-y border-gray-100">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Text Context -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Real-time Stock Visibility</h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-100 text-[#2563EB]">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Centralized Ledger</h3>
                            <p class="mt-2 text-gray-500">View total stock counts across all warehouses instantly. Filter by location to see exactly what is sitting on Shelf A in Warehouse 2.</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-100 text-[#2563EB]">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Internal Transfers</h3>
                            <p class="mt-2 text-gray-500">Easily create transfer orders to move stock between locations. The system automatically decrements the source and increments the destination.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- UI Mockup: Warehouse List -->
            <div class="bg-slate-50 rounded-xl border border-slate-200 p-2 shadow-xl">
                <div class="bg-white rounded-lg overflow-hidden shadow-sm">
                    <div class="bg-gray-50 px-4 py-3 border-b border-gray-200 flex justify-between items-center">
                        <span class="font-bold text-gray-700">Your Warehouses</span>
                        <span class="bg-green-100 text-green-800 text-xs font-bold px-2 py-1 rounded-full">All Systems Online</span>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Location Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stock Value</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap flex items-center gap-3">
                                    <div class="h-8 w-8 rounded bg-purple-100 text-purple-600 flex items-center justify-center font-bold">A</div>
                                    <span class="text-sm font-medium text-gray-900">Main Warehouse (NY)</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">12,450 Units</td>
                                <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap flex items-center gap-3">
                                    <div class="h-8 w-8 rounded bg-orange-100 text-orange-600 flex items-center justify-center font-bold">B</div>
                                    <span class="text-sm font-medium text-gray-900">West Coast Hub</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">8,200 Units</td>
                                <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap flex items-center gap-3">
                                    <div class="h-8 w-8 rounded bg-blue-100 text-blue-600 flex items-center justify-center font-bold">C</div>
                                    <span class="text-sm font-medium text-gray-900">Production Floor</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">450 Units</td>
                                <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Maintenance</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="bg-gray-50 px-4 py-3 border-t border-gray-200 text-center">
                        <button class="text-sm text-[#2563EB] font-medium hover:underline">+ Add New Location</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FEATURE GRID -->
<section class="py-12 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center text-[#2563EB] mb-4">
                    <i class="fas fa-warehouse text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Bin & Rack Tracking</h3>
                <p class="text-gray-500 text-sm">Don't just know which warehouse it's in—know exactly which shelf and bin. StockMaster supports granular location definitions.</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center text-[#2563EB] mb-4">
                    <i class="fas fa-route text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Transit Locations</h3>
                <p class="text-gray-500 text-sm">Track stock that is currently on the truck. Using "Transit" virtual locations ensures no inventory goes missing during moves.</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center text-[#2563EB] mb-4">
                    <i class="fas fa-chart-pie text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Per-Warehouse KPIs</h3>
                <p class="text-gray-500 text-sm">Generate reports for specific locations. Analyze which warehouse turns over stock fastest and optimize your storage strategy.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="bg-[#1E293B] py-12">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">Ready to organize your inventory?</h2>
        <p class="text-blue-200 mb-8">Join thousands of managers using StockMaster to control their supply chain.</p>
        <a href="backend/signup.php" class="inline-block bg-[#2563EB] text-white font-bold py-3 px-8 rounded-lg hover:bg-blue-600 transition shadow-lg">
            Create First Warehouse
        </a>
    </div>
</section>

<?php include 'footer.php'; ?>