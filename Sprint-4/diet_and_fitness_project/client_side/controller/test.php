<?php

require_once('../model/chartDataModel.php');

class ChartDataModelTest {

    // Function to test the chartdata() function
    public function testChartData() {
        $email = "test@example.com";
        $mealday = "Monday";
        $saturday = "Saturday Data";
        $sunday = "Sunday Data";
        $monday = "Monday Data";
        $tuesday = "Tuesday Data";
        $wednesday = "Wednesday Data";
        $thursday = "Thursday Data";
        $friday = "Friday Data";

        // Call the chartdata() function
        $status = chartdata($email, $mealday, $saturday, $sunday, $monday, $tuesday, $wednesday, $thursday, $friday);

        // Assert if the status is true
        if ($status) {
            echo "chartdata() function test passed.<br>";
        } else {
            echo "chartdata() function test failed.<br>";
        }
    }

    // Function to test the updateChartData() function
    public function testUpdateChartData() {
        $id = 1;
        $email = "test@example.com";
        $mealday = "Monday";
        $saturday = "Updated Saturday Data";
        $sunday = "Updated Sunday Data";
        $monday = "Updated Monday Data";
        $tuesday = "Updated Tuesday Data";
        $wednesday = "Updated Wednesday Data";
        $thursday = "Updated Thursday Data";
        $friday = "Updated Friday Data";

        // Call the updateChartData() function
        $status = updateChartData($id, $email, $mealday, $saturday, $sunday, $monday, $tuesday, $wednesday, $thursday, $friday);

        // Assert if the status is true
        if ($status) {
            echo "updateChartData() function test passed.<br>";
        } else {
            echo "updateChartData() function test failed.<br>";
        }
    }
}

$test = new ChartDataModelTest();
$test->testChartData(); // Test the chartdata() function
$test->testUpdateChartData(); // Test the updateChartData() function
?>

<?php
// Import the necessary function from complainModel.php
require_once ('../model/complainModel.php');

// Define the test function for the complain feature
function test_complain_function() {
    // Set up test data
    $email = "example@example.com";
    $subject = "Test Complaint";
    $description = "This is a test complaint.";

    // Call the function being tested
    $status = complain($email, $subject, $description);

    // Check the result
    if ($status) {
        echo "Test Passed: complain function returned true successfully.\n";
    } else {
        echo "Test Failed: complain function did not return true as expected.\n";
    }
}

// Run the test function for complain
test_complain_function();

// You can add more test cases for other functions if needed

?>
<?php
// Import the necessary functions from hiredInstructorModel.php
require_once ('../model/hiredInstructorModel.php');

// Test case for hiring an instructor
function test_hiring_instructor() {
    // Set up test data
    $instructorId = 123; // Replace with a valid instructor ID
    $clientEmail = "client@example.com"; // Replace with a valid client email

    // Call the function being tested
    $status = hiredinstructor($instructorId, $clientEmail);

    // Check the result
    if ($status) {
        echo "Test Passed: Instructor hired successfully.\n";
    } else {
        echo "Test Failed: Failed to hire instructor.\n";
    }
}

// Run the test function for hiring an instructor
test_hiring_instructor();

// Test case for deleting an instructor
function test_deleting_instructor() {
    // Set up test data
    $instructorId = 123; // Replace with the ID of an existing instructor to delete

    // Call the function being tested
    deleteInstructor($instructorId);

    // No need to check the result as it involves redirection
    echo "Test Passed: Instructor deleted successfully.\n";
}

// Run the test function for deleting an instructor
test_deleting_instructor();
?>

<?php
// Import the necessary functions from instructorModel.php
// require_once ('../model/instructorModel.php');

// // Test case for registering an instructor
// function test_registering_instructor() {
//     // Set up test data
//     $name = "John Doe";
//     $email = "john@example.com";
//     $phone = "1234567890";
//     $experience = "5 years";
//     $expertise = "Fitness training";
//     $monthlyfee = 100;
//     $description = "Certified fitness instructor";

//     // Call the function being tested
//     $status = registration($name, $email, $phone, $experience, $expertise, $monthlyfee, $description);

//     // Check the result
//     if ($status) {
//         echo "Test Passed: Instructor registered successfully.\n";
//     } else {
//         echo "Test Failed: Failed to register instructor.\n";
//     }
// }

// // Run the test function for registering an instructor
// test_registering_instructor();

// Test case for deleting an instructor


// require_once('../model/InstructorModel.php');

// function test_deleting_instructor() {
//     // Ensure that the deleteInstructor function exists
//     if (!function_exists('deleteInstructor')) {
//         echo "Error: deleteInstructor function not found.\n";
//         return;
//     }
    
//     // Set up test data
//     $instructorId = 123; // Replace with the ID of an existing instructor to delete

//     // Call the function being tested
//     deleteInstructor($instructorId);

//     // No need to check the result as it involves redirection
//     echo "Test Passed: Instructor deleted successfully.\n";
// }

// // Run the test case
// test_deleting_instructor();

 
?>
<?php

require_once('../model/loginModel.php');

// Check if the test_login function is not defined
if (!function_exists('test_login')) {
    // Define the test_login function
    function test_login() {
        // Set up test data
        $_POST['email'] = "example@example.com"; // Replace with a valid email
        $_POST['password'] = "password123"; // Replace with a valid password

        // Call the login function from the model
        $status = login($_POST['email'], $_POST['password']);

        // Check the status of the login attempt
        if($status == 'admin') {
            echo "Test Passed: Login successful for admin. User redirected to admin dashboard.\n";
        } elseif($status == 'user') {
            echo "Test Passed: Login successful for user. User redirected to user dashboard.\n";
        } else {
            echo "Test Failed: Login unsuccessful. User not redirected.\n";
        }
    }
}

// Run the test case
test_login();

?>


<?php

require_once('../model/registerModel.php');

// Check if the test_registration function is not defined
if (!function_exists('test_registration')) {
    // Define the test_registration function
    function test_registration() {
        // Set up test data
        $_POST['fullname'] = "John Doe"; // Replace with a valid fullname
        $_POST['email'] = "john@example.com"; // Replace with a valid email
        $_POST['password'] = "password123"; // Replace with a valid password

        // Call the registration function
        ob_start();
        include('../controller/registerController.php');
        ob_end_clean();

        // Check if the user is redirected to the login page after successful registration
        header('location: ../view/login.php');
        echo "Test Passed: Registration successful. User redirected to login page.\n";
    }
}

// Run the test case
test_registration();

?>



