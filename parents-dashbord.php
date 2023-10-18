<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="home.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <link href="/path/to/tailwind.css" rel="stylesheet">
    <title>Parent Dashboard</title>
</head>
<body>
<header class="bg-blue-500 py-4">
      <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-white text-3xl font-bold">YorTech Institute</h1>
        <img src="logo.png" alt="School Logo" class="w-12 h-12">
      </div>
    </header>
    <main>
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold mb-4">Welcome, Parent!</h1>
            <?php
                // Check if the parent has more than one child
                $has_multiple_children = true; // Change this value as per your requirements

                if ($has_multiple_children) {
                    // Show child selection dropdown if the parent has multiple children
                    ?>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="child">Select Child</label>
                        <select class="form-select w-full" id="child" name="child">
                            <option value="child1">Child 1</option>
                            <option value="child2">Child 2</option>
                            <option value="child3">Child 3</option>
                            <option value="child4">Child 4</option>
                        </select>
                    </div>
                    <?php
                }
            ?>

            <!-- Attendance and Grades -->
            <div class="mb-8">
                <h2 class="text-xl font-bold mb-2">Attendance and Grades</h2>
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="py-2">Course</th>
                            <th class="py-2">Attendance</th>
                            <th class="py-2">Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border py-2">Mathematics</td>
                            <td class="border py-2">90%</td>
                            <td class="border py-2">A-</td>
                        </tr>
                        <tr>
                            <td class="border py-2">English</td>
                            <td class="border py-2">95%</td>
                            <td class="border py-2">A</td>
                        </tr>
                        <tr>
                            <td class="border py-2">Science</td>
                            <td class="border py-2">85%</td>
                            <td class="border py-2">B+</td>
                        </tr>
                        <tr>
                            <td class="border py-2">History</td>
                            <td class="border py-2">92%</td>
                            <td class="border py-2">A-</td>
                        </tr>
                        <tr>
                            <td class="border py-2">Art</td>
                            <td class="border py-2">80%</td>
                            <td class="border py-2">B</td>
                        </tr>
                    </tbody>
                </table>
            </div>
<footer class="flex items-center justify-center bg-gray-200 py-4">
  <?php include('footer.php'); ?>
</footer>         
</body>
</html>