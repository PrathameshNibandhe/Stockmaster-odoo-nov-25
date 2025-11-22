<?php
// Navigation items based on StockMaster structure
$navItems = [
  ["title" => "Home", "link" => "index.php"],
  ["title" => "Features", "link" => "features.php"], // Showcase Receipts, Deliveries, Transfers
  ["title" => "Pricing", "link" => "pricing.php"],
  ["title" => "Warehouses", "link" => "warehouses.php"], // Multi-warehouse support
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>StockMaster - IMS</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen font-sans bg-gray-50">

  <div class="bg-[#1E293B]">
    <div class="max-w-7xl mx-auto w-full text-white text-center py-2 text-sm font-medium">
      Replace your manual registers! <span class="font-bold text-[#60A5FA]">Get 1 Month Free</span> for new warehouses.
    </div>
  </div>

  <header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto w-full flex justify-between items-center px-6 py-4">

      <a href="index.php" class="flex items-center gap-2 font-bold text-xl text-[#2563EB]">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
        </svg>
        StockMaster
      </a>

      <ul class="hidden md:flex gap-8 items-center text-[#475569] font-medium">
        <?php foreach ($navItems as $item): ?>
          <li>
            <a href="<?= $item['link'] ?>" class="hover:text-[#2563EB] transition-colors duration-200"><?= $item['title'] ?></a>
          </li>
        <?php endforeach; ?>
        
        <li class="flex gap-3 items-center ml-4">
            <a href="login.php" class="px-5 py-2 bg-[#2563EB] text-white rounded-lg hover:bg-blue-700 transition shadow-md hover:shadow-lg">
              Login / Sign Up
            </a>
        </li>
      </ul>

      <button id="menu-toggle" class="md:hidden text-[#2563EB] focus:outline-none">
        <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>

    <div id="mobile-menu" class="hidden md:hidden border-t border-gray-100 bg-white shadow-lg absolute w-full left-0 z-40">
      <div class="flex flex-col px-6 py-4 gap-3">
        <?php foreach ($navItems as $item): ?>
          <a href="<?= $item['link'] ?>" class="text-gray-600 font-medium py-2 border-b border-gray-100 hover:text-[#2563EB]"><?= $item['title'] ?></a>
        <?php endforeach; ?>
        
        <div class="flex flex-col gap-3 mt-2">
            <a href="backend/login.php" class="text-center py-2 text-gray-600 border border-gray-200 rounded-lg hover:bg-gray-50">Login</a>
            <a href="backend/signup.php" class="text-center py-2 bg-[#2563EB] text-white rounded-lg hover:bg-blue-700 shadow-sm">Get Started</a>
        </div>
      </div>
    </div>
  </header>

  <script>
    const toggleBtn = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    
    toggleBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>

</body>
</html>