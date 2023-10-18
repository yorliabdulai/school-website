<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="about.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <link href="/path/to/tailwind.css" rel="stylesheet">
    <title>About</title>
</head>
<body>
    <header>
    <?php include('nav.php'); ?>
    </header>
<!-- Your page content goes here -->
<!-- Page content -->
<main>
<div class="container mx-auto">
  <h1 class="text-3xl font-bold mt-4">About Us</h1>
  <p class="mt-4">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet quam maximus,
    euismod elit eget, pulvinar mauris. Nullam vel faucibus velit. Aenean et odio mauris.
    Nulla facilisi. Praesent maximus, tellus eu tristique pretium, lectus quam bibendum leo,
    quis interdum sapien tortor sed libero. Vivamus gravida tincidunt neque, eget lobortis
    nulla imperdiet eget.
  </p>
  <p class="mt-4">
    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
    Sed vel sapien nec urna facilisis hendrerit. Vestibulum a metus dolor. Integer sodales,
    est sit amet vehicula semper, massa neque varius elit, a imperdiet urna tortor vel elit.
  </p>
  <h2 class="text-2xl font-bold mt-4">Our Vision</h2>
  <p class="mt-4">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet quam maximus,
    euismod elit eget, pulvinar mauris. Nullam vel faucibus velit. Aenean et odio mauris.
    Nulla facilisi. Praesent maximus, tellus eu tristique pretium, lectus quam bibendum leo,
    quis interdum sapien tortor sed libero. Vivamus gravida tincidunt neque, eget lobortis
    nulla imperdiet eget.
  </p>
  <h2 class="text-2xl font-bold mt-4">Our Mission</h2>
  <p class="mt-4">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet quam maximus,
    euismod elit eget, pulvinar mauris. Nullam vel faucibus velit. Aenean et odio mauris.
    Nulla facilisi. Praesent maximus, tellus eu tristique pretium, lectus quam bibendum leo,
    quis interdum sapien tortor sed libero. Vivamus gravida tincidunt neque, eget lobortis
    nulla imperdiet eget.
  </p>
</div>

<script>
  const headings = document.querySelectorAll('h2');

  headings.forEach((heading) => {
    heading.addEventListener('click', () => {
      heading.classList.toggle('text-red-500');
    });
  });
</script>
</main>
<footer class="flex items-center justify-center bg-gray-200 py-4">
  <?php include('footer.php'); ?>
</footer>
    
</body>
</html>