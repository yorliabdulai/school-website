<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"href="home.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <link href="/path/to/tailwind.css" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    <header>
    <?php include('nav.php'); ?>
</header>

<!-- Your page -->
<main>
<div class="container mx-auto px-4 py-8">
  <h1 class="text-2xl font-bold mb-4">Welcome to YorTech Institute</h1>
  <div class="flex flex-wrap -mx-2">
    <div class="w-full md:w-1/2 lg:w-1/3 px-2 mb-4">
      <div class="bg-yellow-500 shadow rounded-lg p-4 h-full">
        <h2 class="text-lg font-bold mb-2">About Us</h2>
        <p class="mb-4">Learn about our school's mission, history, and values.</p>
        <a href="about.php" class="text-blue-500 hover:text-blue-700 font-bold">
          Read More
        </a>
      </div>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/3 px-2 mb-4">
    <div class="bg-yellow-500 shadow rounded-lg p-4 h-full">
        <h2 class="text-lg font-bold mb-2">Programs</h2>
        <p class="mb-4">Discover our wide range of academic and extracurricular programs.</p>
        <a href="programs.php" class="text-blue-500 hover:text-blue-700 font-bold">
          View Programs
        </a>
      </div>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/3 px-2 mb-4">
    <div class="bg-yellow-500 shadow rounded-lg p-4 h-full">
        <h2 class="text-lg font-bold mb-2">Admissions</h2>
        <p class="mb-4">Learn how to apply and join our school community.</p>
        <a href="admissions.php" class="text-blue-500 hover:text-blue-700 font-bold">
          Apply Now
        </a>
      </div>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/3 px-2 mb-4">
    <div class="bg-yellow-500 shadow rounded-lg p-4 h-full">
        <h2 class="text-lg font-bold mb-2">Faculty and Staff</h2>
        <p class="mb-4">Meet our team of dedicated and passionate educators.</p>
        <a href="faculty.php" class="text-blue-500 hover:text-blue-700 font-bold">
          Meet Our Staff
        </a>
      </div>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/3 px-2 mb-4">
    <div class="bg-yellow-500 shadow rounded-lg p-4 h-full">
        <h2 class="text-lg font-bold mb-2">News and Events</h2>
        <p class="mb-4">Stay up-to-date with the latest news and events happening at our school.</p>
        <a href="news.php" class="text-blue-500 hover:text-blue-700 font-bold">
          View News
        </a>
      </div>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/3 px-2 mb-4">
    <div class="bg-yellow-500 shadow rounded-lg p-4 h-full">
        <h2 class="text-lg font-bold mb-2">School Portal</h2>
        <p class="mb-4">Access important school information and resources.</p
        <div class="flex justify-between items-center mt-4">
          <a href="portal.php" class="text-blue-500 hover:text-blue-700 font-bold mr-2">
            Student Login
          </a>
          <a href="portal.php" class="text-blue-500 hover:text-blue-700 font-bold mr-2">
            Teacher Login
          </a>
          <a href="portal.php" class="text-blue-500 hover:text-blue-700 font-bold">
            Parent Login
          </a>
        </div>
      </div>
</main>
        <!-- Footer -->
        <footer class="flex items-center justify-center bg-gray-200 py-4">
  <?php include('footer.php'); ?>
</footer>
</div>    
</body>
</html>