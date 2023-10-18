<?php
// Initialize variables
$first_name = '';
$last_name = '';
$dob = '';
$gender = '';
$address = '';
$city = '';
$state_province = '';
$postal_code = '';
$passport_picture = '';
$errors = array();

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get input values
  $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
  $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
  $dob = isset($_POST['dob']) ? $_POST['dob'] : '';
  $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
  $address = isset($_POST['address']) ? $_POST['address'] : '';
  $city = isset($_POST['city']) ? $_POST['city'] : '';
  $state_province = isset($_POST['state_province']) ? $_POST['state_province'] : '';
  $postal_code = isset($_POST['postal_code']) ? $_POST['postal_code'] : '';
  $passport_picture = isset($_POST['passport_picture']) ? $_POST['passport_picture'] : '';

  // Validate input values
  if (empty($first_name)) {
    $errors['first_name'] = 'First name is required.';
  }

  if (empty($last_name)) {
    $errors['last_name'] = 'Last name is required.';
  }

  if (empty($dob)) {
    $errors['dob'] = 'Date of birth is required.';
  }

  if (empty($gender)) {
    $errors['gender'] = 'Gender is required.';
  }

  if (empty($address)) {
    $errors['address'] = 'Address is required.';
  }

  if (empty($city)) {
    $errors['city'] = 'City is required.';
  }

  if (empty($state_province)) {
    $errors['state_province'] = 'State/Province is required.';
  }

  if (empty($postal_code)) {
    $errors['postal_code'] = 'Postal code is required.';
  }

  // If there are no errors, process form data
  if (empty($errors)) {
    // connect to database
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'user_database';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die('Connection failed: ' . $conn->connect_error);
    }

    // insert student data into database
    $stmt = $conn->prepare('INSERT INTO application_details (first_name, last_name, dob, gender, address, city, state_province, postal_code, passport_picture) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $stmt->bind_param('sssssssss', $first_name, $last_name, $dob, $gender, $address, $city, $state_province, $postal_code, $passport_picture);

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
      // Display success message and download link
      echo '<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">';
      echo '<strong class="font-bold">Thank you for your application!</strong><br>';
      echo 'Your application has been received and is being processed.<br><br>';
      echo '<a href="download.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Download Application Form</a>';
      echo '<p>Please print out the application form and submit it to the admissions office in person or by mail.</p>';
      echo '</div>';
     } else {
      echo "Error submitting application form: " . $stmt->error;
      }

    $stmt->close();
    $conn->close();
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="application-css.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <link href="/path/to/tailwind.css" rel="stylesheet">
    <title>About</title>
</head>
<body>
<div class="mx-auto max-w-2xl">
<form class="bg-yellow-500" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    
    <!-- Student Information -->
    <h2 class="text-xl font-semibold mb-6">Student Information</h2>
    <div class="grid grid-cols-2 gap-6">
      <div>
        <label class="block font-semibold mb-2">First Name</label>
        <input type="text" name="first_name" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
      </div>
      <div>
        <label class="block font-semibold mb-2">Last Name</label>
        <input type="text" name="last_name" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
      </div>
    </div>
    <div class="grid grid-cols-2 gap-6 mt-6">
      <div>
        <label class="block font-semibold mb-2">Date of Birth</label>
        <input type="date" name="dob" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
      </div>
      <div>
        <label class="block font-semibold mb-2">Gender</label>
        <select name="gender" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
          <option value="">-- Select --</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>
    </div>
    <div class="mt-6">
      <label class="block font-semibold mb-2">Address</label>
      <input type="text" name="address" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
    </div>
    <div class="mt-6">
      <label class="block font-semibold mb-2">City</label>
      <input type="text" name="city" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
    </div>
    <div class="grid grid-cols-2 gap-6 mt-6">
      <div>
        <label class="block font-semibold mb-2">State/Province</label>
        <input type="text" name="state_province" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
      </div>
      <div>
        <label class="block font-semibold mb-2">Postal Code</label>
        <input type="text" name="postal_code" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
      </div>
      <div class="sm:col-span-3">
  <label for="passport_picture" class="block text-sm font-medium text-gray-700">
    Passport Picture
  </label>
  <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
    <div class="space-y-1 text-center">
      <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
        <path d="M27.58,11.22a6,6,0,1,0-7.16,0A14,14,0,0,0,8,25v12a6,6,0,0,0,6,6H34a6,6,0,0,0,6-6V25A14,14,0,0,0,27.58,11.22Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
        <path d="M33.8,25.14a4,4,0,1,1-6,0,4,4,0,0,1,6,0Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
        <circle cx="24" cy="29" r="13" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
      </svg>
      <div class="flex text-sm text-gray-600">
        <label for="passport_picture" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
          <span>Upload a file</span>
          <input id="passport_picture" name="passport_picture" type="file" class="sr-only">
        </label>
        <p class="pl-1">or drag and drop</p>
      </div>
      <p class="text-xs text-gray-500">
        PNG, JPG, GIF up to 10MB
      </p>
    </div>
  </div>
</div>
</div>
<div>
<h2 class="text-xl font-semibold mb-6">Education Information</h2>

<div class="grid grid-cols-2 gap-6">
  <div>
    <label class="block font-semibold mb-2">School Name</label>
    <input type="text" name="school_name" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
  </div>

  <div>
    <label class="block font-semibold mb-2">Graduation Year</label>
    <input type="text" name="grad_year" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
  </div>
  <div class="grid grid-cols-2 gap-6 mt-6">
  <div>
    <label class="block font-semibold mb-2">Degree</label>
    <input type="text" name="degree" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
  </div>
  <div>
    <label class="block font-semibold mb-2">Major</label>
    <input type="text" name="major" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
  </div>
</div>
</div>

<h2 class="text-xl font-semibold mt-8 mb-6">Parent Information</h2>

<div class="grid grid-cols-2 gap-6">
  <div>
    <label class="block font-semibold mb-2">Parent First Name</label>
    <input type="text" name="parent_first_name" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
  </div>

  <div>
    <label class="block font-semibold mb-2">Parent Last Name</label>
    <input type="text" name="parent_last_name" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
  </div>
</div>

<div class="mt-6">
  <label class="block font-semibold mb-2">Parent Address</label>
  <input type="text" name="parent_address" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
</div>

<div class="mt-6">
  <label class="block font-semibold mb-2">Parent City</label>
  <input type="text" name="parent_city" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
</div>

</div>

<div class="grid grid-cols-2 gap-6 mt-6">
<div>
  <label class="block font-semibold mb-2">Parent State/Province</label>
  <input type="text" name="parent_state_province" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
</div>

<div>
  <label class="block font-semibold mb-2">Postal Code</label>
  <input type="text" name="parent_postal_code" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
</div>
</div>

<div class="mt-6">
<label class="block font-semibold mb-2">Parent's Phone Number</label>
<input type="tel" name="parent_phone_number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
</div>

<div class="mt-6">
<label class="block font-semibold mb-2">Parent's Email Address</label>
<input type="email" name="parent_email_address" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
</div>

<div class="mt-6">
<label class="block font-semibold mb-2">Parent's Occupation</label>
<input type="text" name="parent_occupation" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
</div>

<div class="mt-6">
<label class="block font-semibold mb-2">Parent's Highest Academic Level</label>
<input type="text" name="parent_highest_academic_level" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
</div>



<div class="mt-8">
<button type="submit" class="py-3 px-6 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-indigo-200">Submit</button>
</div>
</div>
</form>
</div>
<script>
  // Get the form element
const form = document.querySelector('form');

// Add event listener for form submission
form.addEventListener('submit', (event) => {
  // Prevent the default form submission behavior
  event.preventDefault();
  
  // Get the form data as an object
  // Get the form element
const form = document.querySelector('form');

// Add event listener for form submission
form.addEventListener('submit', (event) => {
  // Prevent the default form submission behavior
  event.preventDefault();
  
  // Get the form data as an object
  const formData = {
    first_name: form.first_name.value,
    last_name: form.last_name.value,
    dob: form.dob.value,
    gender: form.gender.value,
    address: form.address.value,
    city: form.city.value,
    state_province: form.state_province.value,
    postal_code: form.postal_code.value,
    school_name: form.school_name.value,
    grad_year: form.grad_year.value,
    degree: form.degree.value,
    major: form.major.value,
    parent_first_name: form.parent_first_name.value,
    parent_last_name: form.parent_last_name.value,
    parent_phone: form.parent_phone.value,
    parent_email: form.parent_email.value,
    passport_photo: form.passport_photo.files[0]
  };
  
  // Create a PDF document from the form data
  const docDefinition = {
    content: [
      { text: 'Application Form', style: 'header' },
      { text: 'Personal Information', style: 'subheader' },
      { text: `Name: ${formData.first_name} ${formData.last_name}` },
      { text: `Date of Birth: ${formData.dob}` },
      { text: `Gender: ${formData.gender}` },
      { text: `Address: ${formData.address}` },
      { text: `City: ${formData.city}` },
      { text: `State/Province: ${formData.state_province}` },
      { text: `Postal Code: ${formData.postal_code}` },
      { text: 'Education Information', style: 'subheader' },
      { text: `School Name: ${formData.school_name}` },
      { text: `Graduation Year: ${formData.grad_year}` },
      { text: `Degree: ${formData.degree}` },
      { text: `Major: ${formData.major}` },
      { text: 'Parent Information', style: 'subheader' },
      { text: `Name: ${formData.parent_first_name} ${formData.parent_last_name}` },
      { text: `Phone: ${formData.parent_phone}` },
      { text: `Email: ${formData.parent_email}` },
      { image: formData.passport_photo ? URL.createObjectURL(formData.passport_photo) : null, width: 200, height: 200 }
    ],
    styles: {
      header: {
        fontSize: 18,
        bold: true,
        margin: [0, 0, 0, 10]
      },
      subheader: {
        fontSize: 14,
        bold: true,
        margin: [0, 10, 0, 5]
      }
    }
  };
  
  const pdfDocGenerator = pdfMake.createPdf(docDefinition);
  
  // Download the PDF document
  pdfDocGenerator.download('application_form.pdf');
});


</script>
</body>
</html>