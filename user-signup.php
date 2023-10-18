<?php
// Turn on output buffering
ob_start();

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Get the input values from the form
  $email = $_POST['email'];
  $password = $_POST['password'];
  $userType = $_POST['user-type'];

  // Validate the input values
  if (empty($email) || empty($password) || empty($userType)) {
    echo '<script>alert("Please fill in all the fields");</script>';
    exit;
  }

  // Connect to the database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "user_database";
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check for connection errors
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Check if the email already exists in the database
  $stmt = $conn->prepare("SELECT id FROM user WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();
  
  if ($result->num_rows > 0) {
    echo '<script>alert("Email already exists. Please use a different email address.");</script>';
    exit;
  }

  // Hash the password
  $password_hash = password_hash($password, PASSWORD_DEFAULT);

  // Insert the user details into the database
  $stmt = $conn->prepare("INSERT INTO user (email, password_hash, userType) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $email, $password_hash, $userType);
  $stmt->execute();

  // Check if the user was added successfully
  if ($stmt->affected_rows === 1) {
    echo '<script>alert("User created successfully!");</script>';
  } else {
    echo '<script>alert("Error creating user.");</script>';
  }

  // Close the statement and the database connection
  $stmt->close();
  $conn->close();

}

// Flush the output buffer
ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>School Portal</title>
    <link rel="stylesheet" type="text/css" href="parent-dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <link href="/path/to/tailwind.css" rel="stylesheet">
  </head>
  <body>
    <header class="bg-blue-500 py-4">
      <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-white text-3xl font-bold">YorTech Institute</h1>
        <img src="logo.png" alt="School Logo" class="w-12 h-12">
      </div>
    </header>
    <main class="container mx-auto mt-6">
      <h2 class="text-2xl font-bold mb-4">Sign Up</h2>

      <form class="max-w-md mx-auto" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="email" id="email">
            Email Address
          </label>
          <input
            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="email"
            type="email"
            placeholder="Enter your email address"
            name="email"
          />
        </div>

        <div class="mb-6">
          <label class="block text-gray-700 font-bold mb-2" for="password" id="password">
            Password
          </label>
          <input
            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="password"
            type="password"
            placeholder="Enter your password"
            name="password"
          />
        </div>

        <div class="mb-6">
          <label class="block text-gray-700 font-bold mb-2" for="user-type" id="user-type">
            User Type
          </label>
          <div class="relative">
            <select
              class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              id="user-type"
              name="user-type"
            >
              <option value="teacher">Teacher</option>
              <option value="student">Student</option>
              <option value="parent">Parent</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <svg
                class="fill-current h-4 w-4"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
                <path
                  d="M10 12l-6-6h12l-6 6z"
                />
              </svg>
            </div>
          </div>
        </div>

        <div class="flex items-center justify-center">
          <button
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            type="submit"
          >
            Sign Up
          </button>
        </div>
      </form>
  
    </main>
  </body>
</html>
