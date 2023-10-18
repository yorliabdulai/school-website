<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
    <?php include('nav.php'); ?>
    </header>
<!-- Your page content goes here -->
<div class="container mx-auto my-4">
      <h1 class="text-3xl font-bold text-center mb-8">Faculty and Staff</h1>

      <div class="flex flex-wrap justify-center">
        <div class="w-full md:w-1/2 lg:w-1/3 p-4">
          <h2 class="text-xl font-bold mb-4">Teaching Staff</h2>
          <ul>
            <li class="mb-2">John Doe - Math</li>
            <li class="mb-2">Jane Smith - Science</li>
            <li class="mb-2">Bob Johnson - English</li>
          </ul>
        </div>

        <div class="w-full md:w-1/2 lg:w-1/3 p-4">
          <h2 class="text-xl font-bold mb-4">Non-Teaching Staff</h2>
          <ul>
            <li class="mb-2">Tom Brown - Janitor</li>
            <li class="mb-2">Sara Lee - Receptionist</li>
            <li class="mb-2">Mike Davis - IT Support</li>
          </ul>
        </div>
      </div>
    </div>

    <script>
      // Get all the staff items
      const staffItems = document.querySelectorAll('ul li');

      // Loop through the staff items and add a click event listener to each one
      staffItems.forEach(item => {
        item.addEventListener('click', () => {
          // Toggle the selected class to the clicked item
          item.classList.toggle('selected');
        });
      });
    </script>
<footer class="flex items-center justify-center bg-gray-200 py-4">
  <?php include('footer.php'); ?>
</footer>
  
</body>
</html>