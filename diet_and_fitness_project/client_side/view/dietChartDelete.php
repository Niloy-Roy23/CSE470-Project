<?php
// Include the controller file
require_once('../controller/chartDataController.php');

// Check if ID is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete chart data by ID
    $result = deleteChartData($id);

    if ($result) {
        // Data deleted successfully, you can redirect to a page or show a success message
        header("Location: chartshowAdmin.php"); // Redirect to the index page or any other page
        exit();
    } else {
        echo "Error deleting data.";
    }
} else {
    echo "Invalid ID.";
}
?>
