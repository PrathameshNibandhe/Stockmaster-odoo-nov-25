<?php 
include 'header.php'; 
?>

<!-- HERO SECTION -->
<div class="bg-slate-50 pt-16 pb-20 lg:pt-24 lg:pb-28">
    <div class="relative max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl mb-4">
            Simple, transparent pricing
        </h1>
        <p class="max-w-2xl mx-auto text-xl text-gray-500">
            No hidden fees. Start with our free tier and upgrade as your inventory grows across multiple warehouses.
        </p>

        <!-- BILLING TOGGLE -->
        <div id="billing-toggle" class="mt-8 flex justify-center items-center gap-3 cursor-pointer">
            <span class="text-gray-500 font-medium" id="monthly-label">Monthly</span>

            <div id="toggle-switch" class="w-12 h-6 bg-[#2563EB] rounded-full p-1 flex items-center justify-start transition-all">
                <div id="toggle-circle" class="w-4 h-4 bg-white rounded-full shadow-md transition-all"></div>
            </div>

            <span class="text-gray-900 font-bold" id="yearly-label">
                Yearly 
            </span>
        </div>
    </div>
</div>


<!-- PRICING CARDS -->
<div class="bg-white pb-24">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-3 gap-8 -mt-12">

            <!-- STARTER -->
            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-8 flex flex-col relative z-10">
                <h3 class="text-xl font-semibold text-gray-900">Starter</h3>
                <p class="text-gray-500 mt-2 text-sm">Perfect for small shops just moving away from Excel.</p>
                <div class="my-6">
                    <span class="text-4xl font-extrabold text-gray-900">₹0</span>
                    <span class="text-gray-500">/month</span>
                </div>
                <a href="backend/signup.php?plan=starter" class="block w-full py-3 px-6 bg-blue-50 text-[#2563EB] font-bold text-center rounded-lg hover:bg-blue-100 transition">
                    Start for Free
                </a>
                <ul class="mt-8 space-y-4 flex-1 text-gray-600">
                    <li>• 1 Warehouse Location</li>
                    <li>• Up to 100 Products</li>
                    <li>• Basic Receipts & Deliveries</li>
                    <li>• Standard Dashboard</li>
                </ul>
            </div>

            <!-- BUSINESS -->
            <div class="bg-[#1E293B] rounded-2xl shadow-2xl border border-gray-800 p-8 flex flex-col relative transform md:-translate-y-4 z-20">
                <div class="absolute top-0 right-0 -mt-3 -mr-3 bg-[#2563EB] text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide shadow-md">
                    Most Popular
                </div>
                <h3 class="text-xl font-semibold text-white">Business</h3>
                <p class="text-gray-400 mt-2 text-sm">For growing companies needing multi-location control.</p>
                <div class="my-6">
                    <span id="price-business" class="text-4xl font-extrabold text-white">₹299</span>
                    <span id="period-business" class="text-gray-400">/month</span>
                </div>
                <a href="backend/signup.php?plan=business" class="block w-full py-3 px-6 bg-[#2563EB] text-white font-bold text-center rounded-lg hover:bg-blue-600 transition shadow-lg shadow-blue-900/50">
                    Get Started
                </a>
                <ul class="mt-8 space-y-4 flex-1 text-gray-300">
                    <li>• 5 Warehouse Locations</li>
                    <li>• Unlimited Products</li>
                    <li>• Internal Transfers</li>
                    <li>• Low Stock Email Alerts</li>
                    <li>• Move History Ledger</li>
                </ul>
            </div>

            <!-- ENTERPRISE -->
            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-8 flex flex-col relative z-10">
                <h3 class="text-xl font-semibold text-gray-900">Enterprise</h3>
                <p class="text-gray-500 mt-2 text-sm">Advanced features for large scale logistics.</p>
                <div class="my-6">
                    <span id="price-enterprise" class="text-4xl font-extrabold text-gray-900">₹499</span>
                    <span id="period-enterprise" class="text-gray-500">/month</span>
                </div>
                <a href="backend/signup.php?plan=enterprise" class="block w-full py-3 px-6 bg-white border-2 border-gray-200 text-gray-700 font-bold text-center rounded-lg hover:border-[#2563EB] hover:text-[#2563EB] transition">
                    Contact Sales
                </a>
                <ul class="mt-8 space-y-4 flex-1 text-gray-600">
                    <li>• Unlimited Warehouses</li>
                    <li>• API Access</li>
                    <li>• Custom Reporting</li>
                    <li>• Dedicated Account Manager</li>
                </ul>
            </div>

        </div>
    </div>
</div>


<!-- FAQ SECTION -->
<section class="bg-slate-50 py-16 border-t border-gray-200">
    <div class="max-w-4xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-gray-900 text-center mb-10">Frequently Asked Questions</h2>

        <div class="grid md:grid-cols-2 gap-8">
            <div>
                <h4 class="font-bold text-lg text-gray-900 mb-2">Can I change plans later?</h4>
                <p class="text-gray-600">Yes, you can upgrade or downgrade anytime.</p>
            </div>
            <div>
                <h4 class="font-bold text-lg text-gray-900 mb-2">What counts as a warehouse?</h4>
                <p class="text-gray-600">Any physical location where stock is stored.</p>
            </div>
            <div>
                <h4 class="font-bold text-lg text-gray-900 mb-2">Is there a free trial?</h4>
                <p class="text-gray-600">Starter is free forever; Business has a 14-day trial.</p>
            </div>
            <div>
                <h4 class="font-bold text-lg text-gray-900 mb-2">Do you offer support?</h4>
                <p class="text-gray-600">Email support is included in all plans.</p>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>


<!-- 🔥 PRICE TOGGLE SCRIPT -->
<script>
  let isYearly = false;

  document.getElementById("billing-toggle").addEventListener("click", function () {
      isYearly = !isYearly;

      const toggleSwitch = document.getElementById("toggle-switch");
      const toggleCircle = document.getElementById("toggle-circle");
      const monthlyLabel = document.getElementById("monthly-label");
      const yearlyLabel = document.getElementById("yearly-label");

      // Move circle left/right
      if (isYearly) {
          toggleCircle.style.transform = "translateX(24px)";
          toggleSwitch.style.backgroundColor = "#16a34a"; // green for yearly

          monthlyLabel.classList.remove("text-gray-900", "font-bold");
          monthlyLabel.classList.add("text-gray-500", "font-medium");

          yearlyLabel.classList.remove("text-gray-500");
          yearlyLabel.classList.add("text-gray-900", "font-bold");
      } else {
          toggleCircle.style.transform = "translateX(0px)";
          toggleSwitch.style.backgroundColor = "#2563EB"; // blue for monthly

          yearlyLabel.classList.remove("text-gray-900", "font-bold");
          yearlyLabel.classList.add("text-gray-500", "font-medium");

          monthlyLabel.classList.remove("text-gray-500");
          monthlyLabel.classList.add("text-gray-900", "font-bold");
      }
  });
</script>

