<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"href="home.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <link href="/path/to/tailwind.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<header class="bg-blue-500 py-4">
      <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-white text-3xl font-bold">YorTech Institute</h1>
        <img src="logo.png" alt="School Logo" class="w-12 h-12">
      </div>
    </header>
<!-- Your page content goes here -->
<!-- HTML code for Teachers page -->
<main>
<div class="container mx-auto px-4 py-8">
  <h1 class="text-3xl font-bold mb-4">Welcome, Teacher!</h1>

  <div class="grid grid-cols-2 gap-4">
    <!-- Teacher Schedule -->
    <div>
      <h2 class="text-xl font-bold mb-2">Schedule</h2>
      <table class="w-full">
        <thead>
          <tr>
            <th class="py-2">Day</th>
            <th class="py-2">Time</th>
            <th class="py-2">Course</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border py-2">Monday</td>
            <td class="border py-2">9:00 AM - 11:00 AM</td>
            <td class="border py-2">Mathematics</td>
          </tr>
          <tr>
            <td class="border py-2">Tuesday</td>
            <td class="border py-2">10:00 AM - 12:00 PM</td>
            <td class="border py-2">English</td>
          </tr>
          <tr>
            <td class="border py-2">Wednesday</td>
            <td class="border py-2">1:00 PM - 3:00 PM</td>
            <td class="border py-2">Science</td>
          </tr>
          <tr>
            <td class="border py-2">Thursday</td>
            <td class="border py-2">9:00 AM - 11:00 AM</td>
            <td class="border py-2">History</td>
          </tr>
          <tr>
            <td class="border py-2">Friday</td>
            <td class="border py-2">10:00 AM - 12:00 PM</td>
            <td class="border py-2">Art</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Teacher Course Assignment -->
    <div>
      <h2 class="text-xl font-bold mb-2">Assign Courses</h2>
      <form>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="course">Course</label>
          <select class="form-select w-full" id="course" name="course">
            <option value="mathematics">Mathematics</option>
            <option value="english">English</option>
            <option value="science">Science</option>
            <option value="history">History</option>
            <option value="art">Art</option>
          </select>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="class">Class</label>
          <select class="form-select w-full" id="class" name="class">
            <option value="class1">Class 1</option>
            <option value="class2">Class 2</option>
            <option value="class3">Class 3</option>
            <option value="class4">Class 4</option>
          </select>
        </div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
         Assign Courses
        </button>
        <div class="flex flex-col mt-8">
    <h2 class="text-lg font-bold mb-4">Schedule</h2>
    <table class="table-auto border-collapse border border-green-800">
        <thead>
            <tr>
                <th class="border border-green-800 px-4 py-2">Time</th>
                <th class="border border-green-800 px-4 py-2">Monday</th>
                <th class="border border-green-800 px-4 py-2">Tuesday</th>
                <th class="border border-green-800 px-4 py-2">Wednesday</th>
                <th class="border border-green-800 px-4 py-2">Thursday</th>
                <th class="border border-green-800 px-4 py-2">Friday</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-green-800 px-4 py-2">08:00 - 09:00</td>
                <td class="border border-green-800 px-4 py-2"></td>
                <td class="border border-green-800 px-4 py-2">Maths</td>
                <td class="border border-green-800 px-4 py-2"></td>
                <td class="border border-green-800 px-4 py-2">Science</td>
                <td class="border border-green-800 px-4 py-2">Social Studies</td>
            </tr>
            <tr>
                <td class="border border-green-800 px-4 py-2">09:00 - 10:00</td>
                <td class="border border-green-800 px-4 py-2">History</td>
                <td class="border border-green-800 px-4 py-2"></td>
                <td class="border border-green-800 px-4 py-2">Geography</td>
                <td class="border border-green-800 px-4 py-2">English</td>
                <td class="border border-green-800 px-4 py-2"></td>
            </tr>
            <!-- Rest of the rows -->
        </tbody>
    </table>
</div>
<button id="schedule-btn">View Schedule</button>
<!-- Modal HTML -->
<div id="schedule-modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Teacher Schedule</h2>
    <table>
      <thead>
        <tr>
          <th>Course</th>
          <th>Day</th>
          <th>Time</th>
        </tr>
      </thead>
      <tbody id="schedule-body">
        <!-- schedule data will be added here using JavaScript -->
      </tbody>
    </table>
  </div>
</div>
</main>

<footer class="flex items-center justify-center bg-gray-200 py-4">
  <?php include('footer.php'); ?>
</footer>
</body>
</html>