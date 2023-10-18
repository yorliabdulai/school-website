<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="programs.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <link href="/path/to/tailwind.css" rel="stylesheet">
    <title>Programs</title>
</head>
<body>
    <header>
    <?php include('nav.php'); ?>
    </header>
<!-- Your page content goes here -->
<!-- Page content -->
<main>
<div class="container mx-auto">
  <h1 class="text-3xl font-bold mt-4">Our Programs</h1>
  <p class="mt-4">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet quam maximus,
    euismod elit eget, pulvinar mauris. Nullam vel faucibus velit. Aenean et odio mauris.
    Nulla facilisi. Praesent maximus, tellus eu tristique pretium, lectus quam bibendum leo,
    quis interdum sapien tortor sed libero. Vivamus gravida tincidunt neque, eget lobortis
    nulla imperdiet eget.
  </p>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
    <div class="border rounded-lg p-4">
      <h2 class="text-xl font-bold">Bachelor's Degree in Computer Science</h2>
      <p class="mt-2">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet quam maximus,
        euismod elit eget, pulvinar mauris. Nullam vel faucibus velit. Aenean et odio mauris.
        Nulla facilisi. Praesent maximus, tellus eu tristique pretium, lectus quam bibendum leo,
        quis interdum sapien tortor sed libero. Vivamus gravida tincidunt neque, eget lobortis
        nulla imperdiet eget.
      </p>
      <a href="#" class="mt-2 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Learn More</a>
    </div>
    <div class="border rounded-lg p-4">
      <h2 class="text-xl font-bold">Master's Degree in Business Administration</h2>
      <p class="mt-2">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet quam maximus,
        euismod elit eget, pulvinar mauris. Nullam vel faucibus velit. Aenean et odio mauris.
        Nulla facilisi. Praesent maximus, tellus eu tristique pretium, lectus quam bibendum leo,
        quis interdum sapien tortor sed libero. Vivamus gravida tincidunt neque, eget lobortis
        nulla imperdiet eget.
      </p>
      <a href="#" class="mt-2 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Learn More</a>
    </div>
    <div class="border rounded-lg p-4">
      <h2 class="text-xl font-bold">Associate's Degree in Graphic Design</h2>
      <p class="mt-2">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet quam maximus,
        euismod elit eget, pulvinar mauris. Nullam vel faucibus velit. Aenean et odio mauris.
        Nulla facilisi. Praesent maximus, tellus eu tristique pretium, lectus quam bibendum leo,
        quis interdum sapien tortor sed libero. Vivamus gravida tincidunt neque, eget lobortis
        nulla imperdiet eget.
      </p>
      <a href="#" class="mt-2 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Learn More</a>
    </div>
    <script>
        // Define a function to toggle the visibility of program details
function toggleProgramDetails(event) {
  event.preventDefault(); // prevent default link behavior

  // Get the clicked link and the associated program details element
  const link = event.target;
  const detailsId = link.getAttribute('href').substring(1);
  const details = document.getElementById(detailsId);

  // Toggle the "hidden" class on the program details element
  details.classList.toggle('hidden');

  // Change the link text based on the current visibility of the program details
  const linkText = link.textContent;
  const newLinkText = linkText === 'Learn More' ? 'Hide Details' : 'Learn More';
  link.textContent = newLinkText;
}

// Attach click event listeners to all "Learn More" links on the page
const learnMoreLinks = document.querySelectorAll('.program-link');
for (let i = 0; i < learnMoreLinks.length; i++) {
  learnMoreLinks[i].addEventListener('click', toggleProgramDetails);
}

    </script>
    </main>
<footer class="flex items-center justify-center bg-gray-200 py-4">
  <?php include('footer.php'); ?>
</footer>

</body>
</html>