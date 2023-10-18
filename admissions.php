<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admissions</title>
  <link rel="stylesheet" type="text/css" href="admissions.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <link href="/path/to/tailwind.css" rel="stylesheet">
</head>
<body>
  <header>
    <?php include('nav.php'); ?>
  </header>
  <main class="py-12 px-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-bold mb-8">Admissions</h1>
      <p class="mb-8">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet quam maximus,
        euismod elit eget, pulvinar mauris. Nullam vel faucibus velit. Aenean et odio mauris.
        Nulla facilisi. Praesent maximus, tellus eu tristique pretium, lectus quam bibendum leo,
        quis interdum sapien tortor sed libero. Vivamus gravida tincidunt neque, eget lobortis
        nulla imperdiet eget.
      </p>
      <h2 class="text-xl font-bold mb-4">Admission Requirements</h2>
      <ul class="list-disc list-inside mb-8">
        <li>Completed application form</li>
        <li>High school transcripts</li>
        <li>Personal essay</li>
        <li>Interview with an admissions counselor</li>
      </ul>
      <h2 class="text-xl font-bold mb-4">Application Deadline</h2>
      <p class="mb-8">The application deadline for the upcoming academic year is October 15th.</p>
      <div class="mb-8">
        <a href="application-form.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
          Apply Now
        </a>
        
      </div>
      <div class="mb-8">
      <a href="admission-status.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
          Check Admission Status
        </a>
        </div>
      <h2 class="text-xl font-bold mb-4" id="apply">Apply Now</h2>
      <p class="mb-8">
        To apply, please fill out our online application form and submit the required materials listed above.
        If you have any questions about the admissions process, please contact our admissions office
        at <a href="tel:555-1234" class="text-blue-500 hover:underline">555-1234</a> or
        <a href="mailto:admissions@school.edu" class="text-blue-500 hover:underline">admissions@school.edu</a>.
      </p>
       <a href="application-form.php" class="text-blue-500 hover:text-blue-700 font-bold">Click here to fill out the application form</a>

       
     <script>
  // Select the form element
  const form = document.querySelector('#application-form');

  // Select the form elements
  const nameInput = document.querySelector('#name');
  const emailInput = document.querySelector('#email');
  const messageTextarea = document.querySelector('#message');

  // Select the submit button
  const submitButton = document.querySelector('button[type="submit"]');

  // Add an event listener to the form element
  form.addEventListener('submit', (event) => {
    // Prevent the form from submitting
    event.preventDefault();

    // Validate the form data
    if (nameInput.value === '' || emailInput.value === '' || messageTextarea.value === '') {
      alert('Please fill in all fields');
    } else {
      // Submit the form
      form.submit();
    }
  });

  // Add an event listener to the submit button
  submitButton.addEventListener('click', () => {
    // Validate the form data
    if (nameInput.value === '' || emailInput.value === '' || messageTextarea.value === '') {
      alert('Please fill in all fields');
    }
  });
</script>

</main>
<footer class="flex items-center justify-center bg-gray-200 py-4">
  <?php include('footer.php'); ?>
</footer>
    
</body>
</html>