<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="student-dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <link href="/path/to/tailwind.css" rel="stylesheet">
    <title>Student Dashboard - School Name</title>
</head>
<body>

<body>
<header class="bg-blue-500 py-4">
      <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-white text-3xl font-bold">YorTech Institute</h1>
        <img src="logo.png" alt="School Logo" class="w-12 h-12">
      </div>
    </header>
    <nav class="bg-gray-200 py-2">
      <div class="container mx-auto flex justify-between">
        <ul class="flex">
          <li class="mx-3"><a href="student-dashboard.php">Profile</a></li>
          <li class="mx-3"><a href="#registration">Registration</a></li>
          <li class="mx-3"><a href="#courses">Courses</a></li>
          <li class="mx-3"><a href="#results">Results</a></li>
          <li class="mx-3"><a href="#timetable">Timetable</a></li>
          <li class="mx-3"><a href="#course-materials">Course Materials</a></li>
        </ul>
        <form action="#" method="POST">
          <input type="search" name="search" id="search" placeholder="Search">
          <button type="submit">Search</button>
        </form>
      </div>
    </nav>
    <main class="container mx-auto my-8">
      <section id="profile">
        <h2 class="text-2xl font-bold mb-4">Profile</h2>
        <div class="grid grid-cols-2 gap-4">
          <div>
            <img src="avatar.png" alt="Student Avatar" class="w-48 h-48">
          </div>
          <div>
            <ul>
              <li><strong>Name:</strong> John Doe</li>
              <li><strong>Student ID:</strong> 123456789</li>
              <li><strong>Email:</strong> john.doe@example.com</li>
              <li><strong>Major:</strong> Computer Science</li>
              <li><strong>GPA:</strong> 3.8</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Register for courses section -->
<section id="register-for-courses">
  <h2 class="text-2xl font-bold mb-4">Register for Courses</h2>
  <form id="register-form">
    <div class="flex flex-wrap mb-4">
      <label for="first-name" class="block w-full lg:w-1/3 mb-2 lg:mb-0">First Name:</label>
      <input id="first-name" name="first-name" type="text" class="block w-full lg:w-2/3 px-4 py-2 rounded border-gray-300">
    </div>
    <div class="flex flex-wrap mb-4">
      <label for="last-name" class="block w-full lg:w-1/3 mb-2 lg:mb-0">Last Name:</label>
      <input id="last-name" name="last-name" type="text" class="block w-full lg:w-2/3 px-4 py-2 rounded border-gray-300">
    </div>
    <div class="flex flex-wrap mb-4">
      <label for="student-id" class="block w-full lg:w-1/3 mb-2 lg:mb-0">Student ID:</label>
      <input id="student-id" name="student-id" type="text" class="block w-full lg:w-2/3 px-4 py-2 rounded border-gray-300">
    </div>
    <div class="flex flex-wrap mb-4">
      <label for="email" class="block w-full lg:w-1/3 mb-2 lg:mb-0">Email:</label>
      <input id="email" name="email" type="email" class="block w-full lg:w-2/3 px-4 py-2 rounded border-gray-300">
    </div>
    <div class="flex flex-wrap mb-4">
      <label for="major" class="block w-full lg:w-1/3 mb-2 lg:mb-0">Major:</label>
      <input id="major" name="major" type="text" class="block w-full lg:w-2/3 px-4 py-2 rounded border-gray-300">
    </div>
    <div class="flex flex-wrap mb-4">
      <label for="course-select" class="block w-full lg:w-1/3 mb-2 lg:mb-0">Select a course:</label>
      <select id="course-select" name="course" class="block w-full lg:w-2/3 px-4 py-2 rounded border-gray-300 mb-2 lg:mb-0">
        <option value="">Select a course</option>
        <option value="math101">Math 101</option>
        <option value="eng101">English 101</option>
        <option value="hist101">History 101</option>
      </select>
    </div>
    <div class="flex flex-wrap mb-4">
      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Register</button>
    </div>
  </form>
</section>
<div class="bg-gray-100 py-10">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold mb-6">Courses</h2>
    <ul class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <li>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <div class="p-4">
            <h3 class="text-xl font-bold mb-2">Course Name 1</h3>
            <p class="text-gray-700 text-base">Description of Course 1</p>
          </div>
          <div class="bg-yellow-500 px-4 py-2 flex items-center justify-between">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700">More Info</button>
            <div class="course-img">
              <img src="course-img-1.jpg" alt="Course Image 1" class="h-24 w-24 object-cover rounded-full">
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <div class="p-4">
            <h3 class="text-xl font-bold mb-2">Course Name 2</h3>
            <p class="text-gray-700 text-base">Description of Course 2</p>
          </div>
          <div class="bg-yellow-500 px-4 py-2 flex items-center justify-between">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700">More Info</button>
            <div class="course-img">
              <img src="course-img-2.jpg" alt="Course Image 2" class="h-24 w-24 object-cover rounded-full">
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <div class="p-4">
            <h3 class="text-xl font-bold mb-2">Course Name 3</h3>
            <p class="text-gray-700 text-base">Description of Course 3</p>
          </div>
          <div class="bg-yellow-500 px-4 py-2 flex items-center justify-between">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700">More Info</button>
            <div class="course-img">
              <img src="course-img-3.jpg" alt="Course Image 3" class="h-24 w-24 object-cover rounded-full">
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
</section>
<section class="bg-white p-6 shadow rounded-lg">
  <h2 class="text-2xl font-bold mb-4">Results</h2>
  <table class="w-full table-auto">
    <thead>
      <tr class="bg-gray-200">
        <th class="px-4 py-2 text-left">Course Name</th>
        <th class="px-4 py-2 text-left">Score</th>
        <th class="px-4 py-2 text-left">Grade</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="px-4 py-2">Mathematics</td>
        <td class="px-4 py-2">85</td>
        <td class="px-4 py-2">A</td>
      </tr>
      <tr>
        <td class="px-4 py-2">Science</td>
        <td class="px-4 py-2">75</td>
        <td class="px-4 py-2">B</td>
      </tr>
      <tr>
        <td class="px-4 py-2">English</td>
        <td class="px-4 py-2">90</td>
        <td class="px-4 py-2">A</td>
      </tr>
    </tbody>
  </table>
</section>
<div class="py-6">
  <h2 class="text-2xl font-bold mb-4">Timetable</h2>
  <div class="bg-white shadow overflow-hidden rounded-md">
    <table class="min-w-full divide-y divide-gray-200">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Day</th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">9:00-10:30</th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">10:45-12:15</th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">1:00-2:30</th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">2:45-4:15</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">
        <tr>
          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Monday</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">English</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Math</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Science</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Social Studies</td>
        </tr>
        <tr>
          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Tuesday</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Math</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Science</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">English</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Social Studies</td>
        </tr>
        <tr>
          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Wednesday</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Science</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Social Studies</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Math</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">English</td>
        </tr>
        
      </tbody>
    </table>
  </div>
</section>
<section class="bg-gray-100 py-8">
  <div class="container mx-auto px-2 py-4">
    <h2 class="text-2xl font-bold mb-2">Course Materials</h2>
    <div class="flex flex-wrap -mx-2">
      <div class="w-full md:w-1/3 px-2">
        <div class="bg-white rounded-lg shadow-md p-4">
          <h3 class="text-lg font-medium mb-2">Week 1</h3>
          <ul class="list-disc list-inside">
            <li><a href="#">Lecture 1 slides</a></li>
            <li><a href="#">Lecture 1 video</a></li>
            <li><a href="#">Reading materials</a></li>
          </ul>
        </div>
      </div>
      <div class="w-full md:w-1/3 px-2">
        <div class="bg-white rounded-lg shadow-md p-4">
          <h3 class="text-lg font-medium mb-2">Week 2</h3>
          <ul class="list-disc list-inside">
            <li><a href="#">Lecture 2 slides</a></li>
            <li><a href="#">Lecture 2 video</a></li>
            <li><a href="#">Reading materials</a></li>
          </ul>
        </div>
      </div>
      <div class="w-full md:w-1/3 px-2">
        <div class="bg-white rounded-lg shadow-md p-4">
          <h3 class="text-lg font-medium mb-2">Week 3</h3>
          <ul class="list-disc list-inside">
            <li><a href="#">Lecture 3 slides</a></li>
            <li><a href="#">Lecture 3 video</a></li>
            <li><a href="#">Reading materials</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="flex items-center justify-center bg-gray-200 py-4">
  <?php include('footer.php'); ?>
</footer>
</body>
</html>