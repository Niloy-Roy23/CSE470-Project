<?php

require_once('../model/adminReplyModel.php');

class ReplyModelTest {
    public function test_reply_function_success() {
        // Test data
        $email = "example@example.com";
        $subject = "Test Subject";
        $reply = "Test Reply Content";

        // Call the reply function
        $result = reply($email, $subject, $reply);

        // Assertion
        if ($result === true) {
            echo "Test Passed: Reply inserted successfully.\n";
        } else {
            echo "Test Failed: Unable to insert reply.\n";
        }
    }

    public function test_reply_function_failure() {
        // Test data with invalid email
        $email = "invalid_email";
        $subject = "Test Subject";
        $reply = "Test Reply Content";

        // Call the reply function
        $result = reply($email, $subject, $reply);

        // Assertion
        if ($result === false) {
            echo "Test Passed: Reply insertion failed as expected due to invalid email.\n";
        } else {
            echo "Test Failed: Reply was inserted despite providing invalid email.\n";
        }
    }
}

// Create an instance of the test class
$test = new ReplyModelTest();

// Run test cases
$test->test_reply_function_success();
$test->test_reply_function_failure();

?>
<?php

require_once('../model/chartDataModel.php');

class ChartDataModelTest {
    public function test_chartdata_function_success() {
        // Test data
        $email = "example@example.com";
        $mealday = "Monday";
        $saturday = "Meal Plan for Saturday";
        $sunday = "Meal Plan for Sunday";
        $monday = "Meal Plan for Monday";
        $tuesday = "Meal Plan for Tuesday";
        $wednesday = "Meal Plan for Wednesday";
        $thursday = "Meal Plan for Thursday";
        $friday = "Meal Plan for Friday";

        // Call the chartdata function
        $result = chartdata($email, $mealday, $saturday, $sunday, $monday, $tuesday, $wednesday, $thursday, $friday);

        // Assertion
        if ($result === true) {
            echo "Test Passed: Chart data inserted successfully.\n";
        } else {
            echo "Test Failed: Unable to insert chart data.\n";
        }
    }

    public function test_getChartDataBySession_function() {
        // Test data
        $email = "example@example.com";

        // Call the getChartDataBySession function
        $result = getChartDataBySession($email);

        // Assertion
        if ($result->num_rows > 0) {
            echo "Test Passed: Chart data retrieved successfully.\n";
        } else {
            echo "Test Failed: Unable to retrieve chart data.\n";
        }
    }
}

// Create an instance of the test class
$test = new ChartDataModelTest();

// Run test cases
$test->test_chartdata_function_success();
$test->test_getChartDataBySession_function();

?>

<?php

require_once('../model/complainModel.php');

class ComplainModelTest {
    public function test_complain_function_success() {
        // Test data
        $email = "example@example.com";
        $subject = "Test Subject";
        $description = "Test Description";

        // Call the complain function
        $result = complain($email, $subject, $description);

        // Assertion
        if ($result === true) {
            echo "Test Passed: Complain submitted successfully.\n";
        } else {
            echo "Test Failed: Unable to submit complain.\n";
        }
    }

    public function test_getComplaints_function() {
        // Call the getComplaints function
        $complaints = getComplaints();

        // Assertion
        if (!empty($complaints)) {
            echo "Test Passed: Complaints retrieved successfully.\n";
        } else {
            echo "Test Failed: Unable to retrieve complaints.\n";
        }
    }
}

// Create an instance of the test class
$test = new ComplainModelTest();

// Run test cases
$test->test_complain_function_success();
$test->test_getComplaints_function();

?>
<?php

require_once('../model/dataModel.php');

// class DataModelTest {
//     public function test_data_function_success() {
//         // Test data
//         $gender = "Male";
//         $age = 30;
//         $height = 175;
//         $weight = 70;
//         $checkbox = "Checked";
//         $history = "No medical history";

//         // Call the data function
//         $result = data($gender, $age, $height, $weight, $checkbox, $history);

//         // Assertion
//         if ($result === true) {
//             echo "Test Passed: Data inserted successfully.\n";
//         } else {
//             echo "Test Failed: Unable to insert data.\n";
//         }
//     }
// }

// // Create an instance of the test class
// $test = new DataModelTest();

// // Run the test case
// $test->test_data_function_success();

// ?>

<?php

require_once('../model/hiredInstructorModel.php');

class HiredInstructorModelTest {
    public function test_hiredinstructor_function_success() {
        // Test data
        $instuctorId = 1; // Example instructor ID
        $clientEmail = "client@example.com"; // Example client email

        // Call the hiredinstructor function
        $result = hiredinstructor($instuctorId, $clientEmail);

        // Assertion
        if ($result === true) {
            echo "Test Passed: Instructor hired successfully.\n";
        } else {
            echo "Test Failed: Unable to hire instructor.\n";
        }
    }

    public function test_deleteInstructor_function_success() {
        // Test data
        $instructorId = 1; // Example instructor ID to delete

        // Call the deleteInstructor function
        deleteInstructor($instructorId);

        // Check if the instructor is deleted successfully
        $conn = mysqli_connect("localhost", "root", "", "fitness") or die("Connection failed: " . mysqli_connect_error());
        $sql = "SELECT * FROM hiredinstructor WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $instructorId);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        mysqli_close($conn);

        // Assertion
        if ($result->num_rows === 0) {
            echo "Test Passed: Instructor deleted successfully.\n";
        } else {
            echo "Test Failed: Unable to delete instructor.\n";
        }
    }
}

// Create an instance of the test class
$test = new HiredInstructorModelTest();

// Run the test cases
$test->test_hiredinstructor_function_success();
$test->test_deleteInstructor_function_success();

?>

<?php

// require_once('../model/instructorModel.php');

// class InstructorModelTest {
//     public function test_registration_function_success() {
//         // Test data for registration
//         $name = "John Doe";
//         $email = "john@example.com";
//         $phone = "1234567890";
//         $experience = "5 years";
//         $expertise = "Yoga";
//         $monthlyFee = "50";
//         $description = "Certified yoga instructor with extensive experience.";

//         // Call the registration function
//         $result = registration($name, $email, $phone, $experience, $expertise, $monthlyFee, $description);

//         // Assertion
//         if ($result === true) {
//             echo "Test Passed: Instructor registration successful.\n";
//         } else {
//             echo "Test Failed: Unable to register instructor.\n";
//         }
//     }

//     public function test_deleteInstructor_function_success() {
//         // Test data for deletion
//         $instructorId = 1; // Example instructor ID to delete

//         // Call the deleteInstructor function
//         deleteInstructor($instructorId);

//         // Check if the instructor is deleted successfully
//         $conn = mysqli_connect("localhost", "root", "", "fitness") or die("Connection failed: " . mysqli_connect_error());
//         $sql = "SELECT * FROM instructor WHERE id = ?";
//         $stmt = $conn->prepare($sql);
//         $stmt->bind_param("i", $instructorId);
//         $stmt->execute();
//         $result = $stmt->get_result();
//         $stmt->close();
//         mysqli_close($conn);

//         // Assertion
//         if ($result->num_rows === 0) {
//             echo "Test Passed: Instructor deleted successfully.\n";
//         } else {
//             echo "Test Failed: Unable to delete instructor.\n";
//         }
//     }

//     public function test_clientHiredInstructor_function() {
//         // Call the clientHiredInstructor function
//         $result = clientHiredInstructor();

//         // Assertion
//         if ($result->num_rows >= 0) {
//             echo "Test Passed: Client hired instructor data retrieved successfully.\n";
//         } else {
//             echo "Test Failed: Unable to retrieve client hired instructor data.\n";
//         }
//     }
// }

// // Create an instance of the test class
// $test = new InstructorModelTest();

// // Run the test cases
// $test->test_registration_function_success();
// $test->test_deleteInstructor_function_success();
// $test->test_clientHiredInstructor_function();

// ?>

<?php

require_once('../model/loginModel.php');

class LoginModelTest {
    public function test_login_function_with_valid_credentials() {
        // Test data for valid login credentials
        $email = "user@example.com";
        $password = "password123";

        // Call the login function
        $result = login($email, $password);

        // Assertion
        if ($result === 'user') {
            echo "Test Passed: User login successful.\n";
        } elseif ($result === 'admin') {
            echo "Test Failed: Admin login detected for user credentials.\n";
        } else {
            echo "Test Failed: Invalid login credentials.\n";
        }
    }

    public function test_login_function_with_admin_credentials() {
        // Test data for admin login credentials
        $email = "admin123@gmail.com";
        $password = "adminpassword";

        // Call the login function
        $result = login($email, $password);

        // Assertion
        if ($result === 'admin') {
            echo "Test Passed: Admin login successful.\n";
        } elseif ($result === 'user') {
            echo "Test Failed: User login detected for admin credentials.\n";
        } else {
            echo "Test Failed: Invalid login credentials.\n";
        }
    }

    public function test_login_function_with_invalid_credentials() {
        // Test data for invalid login credentials
        $email = "invalid@example.com";
        $password = "invalidpassword";

        // Call the login function
        $result = login($email, $password);

        // Assertion
        if ($result === 'user' || $result === 'admin') {
            echo "Test Failed: Login succeeded with invalid credentials.\n";
        } else {
            echo "Test Passed: Invalid login credentials detected.\n";
        }
    }
}

// Create an instance of the test class
$test = new LoginModelTest();

// Run the test cases
$test->test_login_function_with_valid_credentials();
$test->test_login_function_with_admin_credentials();
$test->test_login_function_with_invalid_credentials();

?>
<?php

require_once('../model/registerModel.php');

class RegistrationModelTest {
    public function test_registration_function_with_valid_data() {
        // Test data for valid registration
        $fullname = "John Doe";
        $email = "john.doe@example.com";
        $password = "password123";

        // Call the registration function
        $result = registration($fullname, $email, $password);

        // Assertion
        if ($result === true) {
            echo "Test Passed: User registration successful.\n";
        } else {
            echo "Test Failed: User registration failed.\n";
        }
    }

    public function test_registration_function_with_existing_email() {
        // Test data for existing email
        $fullname = "Jane Smith";
        $email = "john.doe@example.com"; // Existing email
        $password = "password123";

        // Call the registration function
        $result = registration($fullname, $email, $password);

        // Assertion
        if ($result === false) {
            echo "Test Passed: User registration failed due to existing email.\n";
        } else {
            echo "Test Failed: User registration succeeded with existing email.\n";
        }
    }
}

// Create an instance of the test class
$test = new RegistrationModelTest();

// Run the test cases
$test->test_registration_function_with_valid_data();
$test->test_registration_function_with_existing_email();

?>

<?php

require_once('../model/showreplyModel.php');

class ReplyModelTet {
    public function test_getReply_function_with_existing_email() {
        // Test data for an existing email
        $email = "example@example.com"; // Replace with an existing email in your database

        // Call the getReply function
        $result = getReply($email);

        // Assertion
        if (mysqli_num_rows($result) > 0) {
            echo "Test Passed: Reply found for existing email.\n";
        } else {
            echo "Test Failed: Reply not found for existing email.\n";
        }
    }

    public function test_getReply_function_with_non_existing_email() {
        // Test data for a non-existing email
        $email = "nonexisting@example.com"; // Replace with a non-existing email

        // Call the getReply function
        $result = getReply($email);

        // Assertion
        if (mysqli_num_rows($result) === 0) {
            echo "Test Passed: No reply found for non-existing email.\n";
        } else {
            echo "Test Failed: Reply found for non-existing email.\n";
        }
    }
}

// Create an instance of the test class
$test = new ReplyModelTet();

// Run the test cases
$test->test_getReply_function_with_existing_email();
$test->test_getReply_function_with_non_existing_email();

?>
