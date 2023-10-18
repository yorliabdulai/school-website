<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Status</title>
    <!-- Include Tailwind CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
<body class="bg-gray-100">
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <?php
            // Retrieve user details from form submission
            $applicant_name = $_POST['applicant_name'];
            $applicant_email = $_POST['applicant_email'];
            $applicant_phone = $_POST['applicant_phone'];
            $applicant_program = $_POST['applicant_program'];
            $applicant_id = $_POST['applicant_id'];

            // Check admission status based on unique application ID
            $admission_status = 'pending'; // Set default status to pending
            // Connect to database and retrieve admission status for applicant ID
            $db = new mysqli('localhost', 'username', 'password', 'database_name');
            if ($db->connect_error) {
                die('Connection failed: ' . $db->connect_error);
            }
            $query = "SELECT admission_status FROM applications WHERE application_id = '$applicant_id'";
            $result = $db->query($query);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $admission_status = $row['admission_status'];
            }
            $db->close();

            // Display admission status and user details
            if ($admission_status == 'admitted') {
                echo '<h1 class="text-3xl font-bold text-green-600">Congratulations! You have been admitted!</h1>';
                echo '<p class="mt-4 text-lg font-medium">Your admission letter is available for download below.</p>';
                // Add logic to download admission letter here
                // Check if the user is logged in and has been admitted
if (isset($_SESSION['user_id']) && isset($_SESSION['admission_status']) && $_SESSION['admission_status'] == 'admitted') {

    // Set the admission letter filename
    $filename = 'admission-letter-' . $_SESSION['user_id'] . '.pdf';
  
    // Generate the admission letter PDF file using a PDF library (e.g. TCPDF, FPDF)
    // ...
    require_once('C:\TCPDF\TCPDF-main/tcpdf.php');
    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
    $pdf->SetTitle('My PDF Document');
    $pdf->SetAuthor('John Doe');
    $pdf->SetHeaderData('logo.png', 30, 'My PDF Document', 'Document author: John Doe', array(0,64,255), array(0,64,128));
    $pdf->setFooterData(array(0,64,0), array(0,64,128));
    $pdf->AddPage();
    $pdf->SetFont('times', '', 12);
    $pdf->Cell(0, 10, 'Hello, World!', 0, 1);
    $pdf->Image('image.jpg', 10, 20, 50, 50, 'JPG', '', '', true, 150);
    $pdf->Ln();
    $pdf->WriteHTML('<h1>Table of Contents</h1><ul><li>Chapter 1</li><li>Chapter 2</li><li>Chapter 3</li></ul>');
    $pdf->Output('my-document.pdf', 'I');


    // Send the admission letter PDF file to the user for download
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    readfile($filename);
  }
            } elseif ($admission_status == 'rejected') {
                echo '<h1 class="text-3xl font-bold text-red-600">We regret to inform you that your application has been rejected.</h1>';
            } else {
                echo '<h1 class="text-3xl font-bold text-yellow-600">Your application status is still pending. Please check back later.</h1>';
            }

            // Display user details regardless of admission status
            echo '<div class="mt-6">';
            echo '<h2 class="text-xl font-medium">User Details</h2>';
            echo '<ul class="list-disc list-inside mt-4">';
            echo '<li><strong>Name:</strong> ' . $applicant_name . '</li>';
            echo '<li><strong>Email:</strong> ' . $applicant_email . '</li>';
            echo '<li><strong>Phone:</strong> ' . $applicant_phone . '</li>';
            echo '<li><strong>Program:</strong> ' . $applicant_program . '</li>';
            echo '<li><strong>Application ID:</strong> ' . $applicant_id . '</li>';
            echo '</ul>';
            echo '</div>';
            ?>
        </div>
    </div>
</body>
</html>
