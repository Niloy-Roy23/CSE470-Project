<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Chart Data</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">

<?php
// Include the controller file
require_once('../controller/chartDataController.php');

// Check if ID is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Get chart data by ID
    $chartData = getChartDataById($id);
?>

    <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
        <h1 class="text-2xl font-semibold mb-4">Update Chart Data</h1>
        <form action="../controller/chartDataController.php" method="post">
            <input type="hidden" name="id" value="<?php echo $chartData['id']; ?>">
            
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-600">Email:</label>
                <input type="text" id="email" name="email" value="<?php echo $chartData['email']; ?>" class="mt-1 p-2 border rounded-md w-full">
            </div>
            
            <div class="mb-4">
                <label for="mealday" class="block text-sm font-medium text-gray-600">Mealday:</label>
                <input type="text" id="mealday" name="mealday" value="<?php echo $chartData['mealday']; ?>" class="mt-1 p-2 border rounded-md w-full">
            </div>

            <div class="mb-4">
                <label for="mealday" class="block text-sm font-medium text-gray-600">saturday:</label>
                <input type="text" id="mealday" name="saturday" value="<?php echo $chartData['saturday']; ?>" class="mt-1 p-2 border rounded-md w-full">
            </div>


            <div class="mb-4">
                <label for="mealday" class="block text-sm font-medium text-gray-600">sunday:</label>
                <input type="text" id="mealday" name="sunday" value="<?php echo $chartData['sunday']; ?>" class="mt-1 p-2 border rounded-md w-full">
            </div>


            <div class="mb-4">
                <label for="mealday" class="block text-sm font-medium text-gray-600">monday:</label>
                <input type="text" id="mealday" name="monday" value="<?php echo $chartData['monday']; ?>" class="mt-1 p-2 border rounded-md w-full">
            </div>


            <div class="mb-4">
                <label for="mealday" class="block text-sm font-medium text-gray-600">tuesday:</label>
                <input type="text" id="mealday" name="tuesday" value="<?php echo $chartData['tuesday']; ?>" class="mt-1 p-2 border rounded-md w-full">
            </div>


            <div class="mb-4">
                <label for="mealday" class="block text-sm font-medium text-gray-600">wednesday:</label>
                <input type="text" id="mealday" name="webnesday" value="<?php echo $chartData['wednesday']; ?>" class="mt-1 p-2 border rounded-md w-full">
            </div>



            <div class="mb-4">
                <label for="mealday" class="block text-sm font-medium text-gray-600">thursday:</label>
                <input type="text" id="mealday" name="thursday" value="<?php echo $chartData['thursday']; ?>" class="mt-1 p-2 border rounded-md w-full">
            </div>


            <div class="mb-4">
                <label for="mealday" class="block text-sm font-medium text-gray-600">friday:</label>
                <input type="text" id="mealday" name="friday" value="<?php echo $chartData['friday']; ?>" class="mt-1 p-2 border rounded-md w-full">
            </div>


           
            
            <!-- Repeat similar structure for other input fields -->

            <div class="mt-4">
                <input type="submit" name="update" value="Update" class="px-4 py-2 bg-yellow-500 text-white rounded-md cursor-pointer">
            </div>
        </form>
    </div>

<?php
} else {
    echo "Invalid ID.";
}
?>
    
</body>
</html>
