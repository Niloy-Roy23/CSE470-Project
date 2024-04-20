<?php

require_once 'path/to/your/replyFunction.php'; // Adjust the path as per your project structure

class ReplyTest {

    public function testReplySuccess() {
        // Test data
        $email = "test@example.com";
        $subject = "Test Subject";
        $reply = "Test Reply";
        
        // Call the function
        $result = reply($email, $subject, $reply);
        
        // Assert that the result is true
        if ($result) {
            echo "Test Reply Success: Passed<br>";
        } else {
            echo "Test Reply Success: Failed<br>";
        }
        
        // Additional assertions can be added if needed
    }

    public function testReplyFailure() {
        // Test data with missing information
        $email = "test@example.com";
        $subject = "Test Subject";
        $reply = ""; // Missing reply
        
        // Call the function
        $result = reply($email, $subject, $reply);
        
        // Assert that the result is false
        if (!$result) {
            echo "Test Reply Failure: Passed<br>";
        } else {
            echo "Test Reply Failure: Failed<br>";
        }
        
        // Additional assertions can be added if needed
    }
}

?>

<?php

// Include the PHP file containing your functions
require_once 'path/to/your/chartDataModel.php'; // Adjust the path as per your project structure

// Test the chartdata() function
function testChartData() {
    // Test data
    $email = "test@example.com";
    $mealday = "Monday";
    $saturday = "Saturday data";
    $sunday = "Sunday data";
    $monday = "Monday data";
    $tuesday = "Tuesday data";
    $wednesday = "Wednesday data";
    $thursday = "Thursday data";
    $friday = "Friday data";

    // Call the chartdata() function
    $status = chartdata($email, $mealday, $saturday, $sunday, $monday, $tuesday, $wednesday, $thursday, $friday);

    // Assert if the status is true
    if ($status) {
        echo "chartdata() function test passed.<br>";
    } else {
        echo "chartdata() function test failed.<br>";
    }
}

// Test the getAllChartData() function
function testGetAllChartData() {
    // Call the getAllChartData() function
    $result = getAllChartData();

    // Assert if the result is not empty
    if ($result) {
        echo "getAllChartData() function test passed.<br>";
    } else {
        echo "getAllChartData() function test failed.<br>";
    }
}

// Test the getChartDataBySession() function
function testGetChartDataBySession() {
    // Test data
    $email = "test@example.com";

    // Call the getChartDataBySession() function
    $result = getChartDataBySession($email);

    // Assert if the result is not empty
    if ($result) {
        echo "getChartDataBySession() function test passed.<br>";
    } else {
        echo "getChartDataBySession() function test failed.<br>";
    }
}

// Test the getChartDataById() function
function testGetChartDataById() {
    // Test data
    $id = 1; // Assuming ID exists

    // Call the getChartDataById() function
    $result = getChartDataById($id);

    // Assert if the result is not empty
    if ($result) {
        echo "getChartDataById() function test passed.<br>";
    } else {
        echo "getChartDataById() function test failed.<br>";
    }
}

// Test the updateChartData() function
function testUpdateChartData() {
    // Test data
    $id = 1; // Assuming ID exists
    $email = "test@example.com";
    $mealday = "Monday";
    $saturday = "Updated Saturday data";
    $sunday = "Updated Sunday data";
    $monday = "Updated Monday data";
    $tuesday = "Updated Tuesday data";
    $wednesday = "Updated Wednesday data";
    $thursday = "Updated Thursday data";
    $friday = "Updated Friday data";

    // Call the updateChartData() function
    $status = updateChartData($id, $email, $mealday, $saturday, $sunday, $monday, $tuesday, $wednesday, $thursday, $friday);

    // Assert if the status is true
    if ($status) {
        echo "updateChartData() function test passed.<br>";
    } else {
        echo "updateChartData() function test failed.<br>";
    }
}

// Test the deleteChartData() function
function testDeleteChartData() {
    // Test data
    $id = 1; // Assuming ID exists

    // Call the deleteChartData() function
    $status = deleteChartData($id);

    // Assert if the status is true
    if ($status) {
        echo "deleteChartData() function test passed.<br>";
    } else {
        echo "deleteChartData() function test failed.<br>";
    }
}

// Run all test cases
testChartData();
testGetAllChartData();
testGetChartDataBySession();
testGetChartDataById();
testUpdateChartData();
testDeleteChartData();

?>
<?php

// Include the PHP file containing your functions
require_once 'path/to/your/complainModel.php'; // Adjust the path as per your project structure

// Test the complain() function
function testComplain() {
    // Test data
    $email = "test@example.com";
    $subject = "Test Subject";
    $description = "Test Description";

    // Call the complain() function
    $status = complain($email, $subject, $description);

    // Assert if the status is true
    if ($status) {
        echo "complain() function test passed.<br>";
    } else {
        echo "complain() function test failed.<br>";
    }
}

// Test the getComplaints() function
function testGetComplaints() {
    // Call the getComplaints() function
    $complaints = getComplaints();

    // Assert if the complaints array is not empty
    if (!empty($complaints)) {
        echo "getComplaints() function test passed.<br>";
    } else {
        echo "getComplaints() function test failed.<br>";
    }
}

// Run all test cases
testComplain();
testGetComplaints();

?>
<?php

// Include the PHP file containing your function
require_once 'path/to/your/dataModel.php'; // Adjust the path as per your project structure

// Test the data() function
function testData() {
    // Test data
    $gender = "Male";
    $age = 25;
    $height = 180;
    $weight = 75;
    $checkbox = "Some value";
    $history = "Test history";

    // Call the data() function
    $status = data($gender, $age, $height, $weight, $checkbox, $history);

    // Assert if the status is true
    if ($status) {
        echo "data() function test passed.<br>";
    } else {
        echo "data() function test failed.<br>";
    }
}

// Run the test case
testData();

?>

<?php

// Include the PHP file containing your functions
require_once 'path/to/your/hiredInstructorModel.php'; // Adjust the path as per your project structure

// Test the hiredinstructor() function
function testHiredInstructor() {
    // Test data
    $instructorId = 1; // Assuming instructor ID exists
    $clientEmail = "test@example.com";

    // Call the hiredinstructor() function
    $status = hiredinstructor($instructorId, $clientEmail);

    // Assert if the status is true
    if ($status) {
        echo "hiredinstructor() function test passed.<br>";
    } else {
        echo "hiredinstructor() function test failed.<br>";
    }
}

// Test the deleteInstructor() function
function testDeleteInstructor() {
    // Test data
    $instructorId = 1; // Assuming instructor ID exists

    // Call the deleteInstructor() function
    deleteInstructor($instructorId);

    // Assert if the instructor is deleted successfully
    // You may need to implement additional checks here based on your application logic
    echo "deleteInstructor() function test passed.<br>";
}

// Run the test cases
testHiredInstructor();
testDeleteInstructor();

?>

<?php

require_once 'path/to/your/login_function.php'; // Adjust the path as per your project structure

// Test the login() function
function testLogin() {
    // Test data
    $adminEmail = "admin123@gmail.com";
    $adminPassword = "adminpassword";
    $userEmail = "user@example.com";
    $userPassword = "userpassword";

    // Call the login() function for admin login
    $adminStatus = login($adminEmail, $adminPassword);

    // Assert if the admin login status is correct
    if ($adminStatus === 'admin') {
        echo "Admin login test passed.<br>";
    } else {
        echo "Admin login test failed.<br>";
    }

    // Call the login() function for user login
    $userStatus = login($userEmail, $userPassword);

    // Assert if the user login status is correct
    if ($userStatus === 'user') {
        echo "User login test passed.<br>";
    } else {
        echo "User login test failed.<br>";
    }
}

// Run the test case
testLogin();

?>

<?php

require_once 'path/to/your/registration_function.php'; // Adjust the path as per your project structure

// Test the registration() function
function testRegistration() {
    // Test data
    $fullName = "John Doe";
    $email = "test@example.com";
    $password = "password";

    // Call the registration() function
    $status = registration($fullName, $email, $password);

    // Assert if the registration status is correct
    if ($status) {
        echo "Registration test passed.<br>";
    } else {
        echo "Registration test failed.<br>";
    }
}

// Run the test case
testRegistration();

?>

<?php

require_once 'path/to/your/getReply_function.php'; // Adjust the path as per your project structure

// Test the getReply() function
function testGetReply() {
    // Test data
    $email = "test@example.com";

    // Call the getReply() function
    $result = getReply($email);

    // Assert if the result is valid
    if ($result) {
        // Fetch and display the reply data
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Email: " . $row['email'] . "<br>";
            echo "Subject: " . $row['subject'] . "<br>";
            echo "Reply: " . $row['reply'] . "<br>";
            echo "Created Date: " . $row['created_date'] . "<br>";
            echo "<br>";
        }
    } else {
        echo "Failed to retrieve reply data.<br>";
    }
}

// Run the test case
testGetReply();

?>
