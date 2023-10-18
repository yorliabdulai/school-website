<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="contact.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <link href="/path/to/tailwind.css" rel="stylesheet">
    <title>Contact</title>
</head>
<body>
<header class="bg-blue-500 py-4">
      <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-white text-3xl font-bold">YorTech Institute</h1>
        <img src="logo.png" alt="School Logo" class="w-12 h-12">
      </div>
    </header>
<main class="py-20 bg-gray-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center sm:justify-center">
      <div class="text-center sm:text-left">
        <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
          Thank You
        </h2>
        <p class="text-xl font-medium text-gray-500">
          for visiting our site
        </p>
      </div>
    </div>
  </div>
</main>

    <!-- Contact form section -->
<section class="bg-gray-100 py-8">
  <div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
    <h1 class="text-2xl font-bold mb-2 text-center">Contact Us</h1>
    <div class="mx-auto lg:w-1/2 md:w-2/3">
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
            Full Name
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="name" type="text" placeholder="John Doe">
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
            Email
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="email" type="email" placeholder="johndoe@example.com">
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="message">
            Message
          </label>
          <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="message" placeholder="Enter your message"></textarea>
        </div>
      </div>
      <div class="md:flex md:items-center">
        <div class="md:w-1/3">
          <button class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button" id="submitBtn">
            Send
          </button>
        </div>
        <div class="md:w-2/3"></div>
      </div>
    </div>
  </div>
</section>

<footer class="bg-gray-900 pt-10 sm:mt-10 pt-10">
  <div class="max-w-6xl m-auto text-gray-800 flex flex-wrap justify-left">
    <!-- Left Column -->
    <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
      <div class="text-xs uppercase text-gray-400 font-medium mb-6">
        Contact Us
      </div>

      <a class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700" href="yortechofficial@gmail.com">yortechofficial@gmail.com</a>
      <a class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700" href="+233557206667">+233557206667</a>
      <a class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700" href="#">Yendi, Ghana</a>
    </div>

    <!-- Right Column -->
    <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
      <div class="text-xs uppercase text-gray-400 font-medium mb-6">
        Links
      </div>

      <ul class="my-4">
        <li>
          <a class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700" href="#">FAQ</a>
        </li>
        <li>
          <a class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700" href="#">Support</a>
        </li>
        <li>
          <a class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700" href="#">Terms &amp; Conditions</a>
        </li>
      </ul>
    </div>

    <!-- Newsletter -->
    <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
      <div class="text-xs uppercase text-gray-400 font-medium mb-6">
        Newsletter
      </div>

      <p class="my-3 text-gray-300 text-sm">Subscribe to our newsletter to get the latest updates.</p>
      <form action="#" method="POST">
        <div class="flex items-center">
          <input type="email" class="bg-gray-800 appearance-none border-2 border-gray-700 rounded py-2 px-3 text-gray-300 leading-tight focus:outline-none focus:bg-gray-700 focus:border-gray-500" placeholder="Your email">
          <button type="submit" class="ml-2 bg-gray-700 hover:bg-gray-600 border-gray-700 hover:border-gray-600 rounded-md px-3 py-2 font-medium text-white focus:outline-none focus:bg-gray-600 duration-700">Subscribe</button>
        </div>
      </form>
    </div>

    <!-- Social Media Tag -->
<div class="bg-gray-900 py-4">
  <div class="container mx-auto flex justify-between items-center">
    <p class="text-gray-400">Follow us:</p>
    <div class="flex items-center">
      <a href="#" class="text-gray-400 hover:text-white mx-4">
        <i class="fab fa-facebook fa-lg">Facebook</i>
      </a>
      <a href="#" class="text-gray-400 hover:text-white mx-4">
        <i class="fab fa-twitter fa-lg">Twitter</i>
      </a>
      <a href="#" class="text-gray-400 hover:text-white mx-4">
        <i class="fab fa-instagram fa-lg">LinkedIn</i>
      </a>
    </div>
  </div>
</div>



</body>
</html>