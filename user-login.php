<?php
// Turn on output buffering
ob_start();
// Your PHP code goes here

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

  // function for password hashing
  //$password_hash = password_hash($password, PASSWORD_DEFAULT);
  
  // Store the hashed password in the database
  // ...
  
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

  // Prepare the SQL statement with placeholders
  $stmt = $conn->prepare("SELECT id, email, password_hash FROM user WHERE email = ? AND userType = ?");

  // Bind the input parameters to the placeholders
  $stmt->bind_param("ss", $email, $userType);

  // Execute the statement
  $stmt->execute();

  // Fetch the result
  $result = $stmt->get_result();

  // Check if the user is a valid user
  if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();

    // Verify the password hash
    if (password_verify($password, $row['password_hash'])) {

      // Start a new session and store the user ID
      session_start();
      $_SESSION['user_id'] = $row['id'];

      // Redirect the user to the dashboard page
      if ($userType === 'teacher') {
        header('Location: teacher-dashboard.php');
      } elseif ($userType === 'student') {
        header('Location: student-dashboard.php');
      } elseif ($userType === 'parent') {
        header('Location: parents-dashboard.php');
      } else {
        echo '<script>alert("Invalid user type");</script>';
        exit;
      }

      exit;

    } else {
      echo '<script>alert("Invalid email or password");</script>';
      exit;
    }

  } else {
    echo '<script>alert("Invalid email or password");</script>';
    exit;
  }

  // Close the statement and the database connection
  $stmt->close();
  $conn->close();

}

// Flush the output buffer and send the redirect header
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
      <h2 class="text-2xl font-bold mb-4">Login</h2>

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
            Sign In
          </button>
        </div>
      </form>
  
    </main>
  </body>
</html>

