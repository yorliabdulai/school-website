
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Navigation</title>
    <link rel="stylesheet" type="text/css" href="nav.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <link href="/path/to/tailwind.css" rel="stylesheet">

    <script>
        const nav = document.querySelector('nav');
        window.addEventListener('scroll', () => {
          if (window.scrollY > nav.offsetHeight + 150) {
            nav.classList.add('bg-white');
          } else {
            nav.classList.remove('bg-white');
          }
        });
    </script>
</head>
<body>
<nav class="bg-violet-500 py-4">
  <div class="container mx-auto px-4 sm:flex sm:items-center sm:justify-between">
    <div class="flex items-center justify-between">
    <a href="index.php" class="text-butter-500 font-bold hover:text-white">
        <img src="YOR.png" alt="Logo" class="h-8 w-auto">
      </a>
      <button id="toggleButton" class="sm:hidden text-white focus:outline-none">
        <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
          <path
            d="M4 6h16M4 12h16M4 18h16"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
        </svg>
      </button>
    </div>
    <ul id="navList" class="mt-4 sm:mt-0 sm:flex sm:items-center">
      <li class="mx-2">
        <a href="index.php" class="text-butter-500 font-bold hover:text-white">Home</a>
      </li>
      <li class="mx-2">
        <a href="about.php" class="text-butter-500 font-bold hover:text-white">About</a>
      </li>
      <li class="mx-2">
        <a href="programs.php" class="text-butter-500 font-bold hover:text-white">Programs</a>
      </li>
      <li class="mx-2">
        <a href="admissions.php" class="text-butter-500 font-bold hover:text-white">Admissions</a>
      </li>
      <li class="mx-2">
        <a href="faculty.php" class="text-butter-500 font-bold hover:text-white">Faculty and Staff</a>
      </li>
      <li class="mx-2">
        <a href="news.php" class="text-butter-500 font-bold hover:text-white">News and Events</a>
      </li>
      <li class="mx-2">
        <a href="portal.php" class="text-butter-500 font-bold hover:text-white">Portal</a>
      </li>
      <li class="mx-2">
        <a href="contact.php" class="text-butter-500 font-bold hover:text-white">Contact</a>
      </li>
    </ul>
  </div>
</nav>
<script>
  const toggleButton = document.getElementById('toggleButton');
  const navList = document.getElementById('navList');

  toggleButton.addEventListener('click', () => {
    navList.classList.toggle('hidden');
  });
</script>

</body>
</html>
