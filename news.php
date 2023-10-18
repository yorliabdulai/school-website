<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="news.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <link href="/path/to/tailwind.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-gray-100">
<header>
    <?php include('nav.php'); ?>
</header>
<!-- Your page content goes here -->
<
    <div class="container mx-auto px-4 py-8">
      <h1 class="text-4xl font-bold mb-8">School News and Events</h1>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- News Card -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img src="https://via.placeholder.com/300x200" alt="News Image" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2">Exciting News Heading</h3>
            <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante eget magna blandit efficitur. Suspendisse potenti.</p>
          </div>
        </div>
        <!-- Event Card -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img src="https://via.placeholder.com/300x200" alt="Event Image" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2">Upcoming Event Heading</h3>
            <p class="text-gray-700">Nam ut convallis libero, eget blandit quam. Sed rhoncus velit at eros tincidunt, eu ultricies sapien vestibulum.</p>
            <p class="text-gray-700 mt-4">Date: May 5, 2023</p>
            <p class="text-gray-700">Time: 2:00 PM - 4:00 PM</p>
          </div>
        </div>
        <!-- News Card -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img src="https://via.placeholder.com/300x200" alt="News Image" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2">Another Interesting News Heading</h3>
            <p class="text-gray-700">Donec nec leo at lacus elementum efficitur. Nam maximus bibendum turpis, quis eleifend elit blandit quis.</p>
          </div>
        </div>
      </div>
    </div>


    <Footer>
<?php include('footer.php'); ?>
</footer>
           
</body>
</html>