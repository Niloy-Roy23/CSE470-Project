<?php

require_once('../model/complainModel.php');

class ComplainTest {

    // Function to test the complain() function
    public function testComplain() {
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
}

// Instantiate ComplainTest class
$test = new ComplainTest();

// Run test case
$test->testComplain();

?>


<?php

require_once('../model/chartDataModel.php');

class TestData {

    // Function to test chartdata()
    public function testChartData() {
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

    // Function to test updateChartData()
    public function testUpdateChartData() {
        $id = 1; // Assuming you have the correct ID for the record to update
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
}

// Instantiate TestData class
$test = new TestData();

// Run test cases
$test->testChartData();
$test->testUpdateChartData();

?>


<?php

require_once('../model/dataModel.php');

class DataTest {

    // Function to test the data() function
    public function testData() {
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
}

// Instantiate DataTest class
$test = new DataTest();

// Run test case
$test->testData();

?>

<?php

require_once('../model/hiredInstructorModel.php');

class HiredInstructorTest {

    // Function to test the hiredinstructor() function
    public function testHiredInstructor() {
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

    // Function to test the deleteInstructor() function
    public function testDeleteInstructor() {
        $instructorId = 1; // Assuming instructor ID exists

        // Call the deleteInstructor() function
        deleteInstructor($instructorId);

        // Assert if the instructor is deleted successfully
        // You may need to implement additional checks here based on your application logic
        echo "deleteInstructor() function test passed.<br>";
    }
}

// Instantiate HiredInstructorTest class
$test = new HiredInstructorTest();

// Run test cases
$test->testHiredInstructor();
$test->testDeleteInstructor();

?>

<?php

require_once('../model/instructorModel.php');

class InstructorTest {

    // Function to test the registration() function
    public function testRegistration() {
        $name = "John Doe";
        $email = "john@example.com";
        $phone = "1234567890";
        $experience = "5 years";
        $expertise = "Fitness training";
        $monthlyfee = 100;
        $description = "Certified fitness trainer";

        // Call the registration() function
        $status = registration($name, $email, $phone, $experience, $expertise, $monthlyfee, $description);

        // Assert if the status is true
        if ($status) {
            echo "registration() function test passed.<br>";
        } else {
            echo "registration() function test failed.<br>";
        }
    }

    // Function to test the getUsers() function
    public function testGetUsers() {
        // Call the getUsers() function
        $users = getUsers();

        // Assert if the users array is not empty
        if (!empty($users)) {
            echo "getUsers() function test passed.<br>";
        } else {
            echo "getUsers() function test failed.<br>";
        }
    }

    // Function to test the deleteInstructor() function
    public function testDeleteInstructor() {
        $instructorId = 1; // Assuming instructor ID exists

        // Call the deleteInstructor() function
        deleteInstructor($instructorId);

        // Assert if the instructor is deleted successfully
        // You may need to implement additional checks here based on your application logic
        echo "deleteInstructor() function test passed.<br>";
    }
}

// Instantiate InstructorTest class
$test = new InstructorTest();

// Run test cases
$test->testRegistration();
$test->testGetUsers();
$test->testDeleteInstructor();

?>

<?php

require_once('../model/loginModel.php');

class LoginTest {

    // Function to test the login() function
    public function testLogin() {
        $email = "test@example.com";
        $password = "password";

        // Call the login() function
        $status = login($email, $password);

        // Assert if the status is 'admin' or 'user'
        if ($status === 'admin' || $status === 'user') {
            echo "login() function test passed.<br>";
        } else {
            echo "login() function test failed.<br>";
        }
    }
}

// Instantiate LoginTest class
$test = new LoginTest();

// Run test case
$test->testLogin();

?>

<?php

require_once('../model/registerModel.php');

class RegistrationTest {

    // Function to test the registration() function
    public function testRegistration() {
        $fullname = "John Doe";
        $email = "test@example.com";
        $password = "password";

        // Call the registration() function
        $status = registration($fullname, $email, $password);

        // Assert if the status is true
        if ($status) {
            echo "registration() function test passed.<br>";
        } else {
            echo "registration() function test failed.<br>";
        }
    }
}

// Instantiate RegistrationTest class
$test = new RegistrationTest();

// Run test case
$test->testRegistration();

?>

<?php

require_once('../model/adminReplyModel.php');

class AdminReplyTest {

    // Function to test the reply() function
    public function testReply() {
        $email = "test@example.com";
        $subject = "Test Subject";
        $reply = "Test Reply";

        // Call the reply() function
        $status = reply($email, $subject, $reply);

        // Assert if the status is true
        if ($status) {
            echo "reply() function test passed.<br>";
        } else {
            echo "reply() function test failed.<br>";
        }
    }
}

// Instantiate AdminReplyTest class
$test = new AdminReplyTest();

// Run test case
$test->testReply();

?>
