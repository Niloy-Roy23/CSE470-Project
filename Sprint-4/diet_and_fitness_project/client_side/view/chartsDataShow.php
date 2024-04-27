<!-- chartDataAssignView.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diet charts</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold mb-6">Diet charts</h1>

        <table class="min-w-full border border-gray-300">
            <thead>
                <tr class="bg-gray-300">
                    <th class="py-3 px-4 border-b">Email</th>
                    <th class="py-3 px-4 border-b">Meal of the day</th>
                    <th class="py-3 px-4 border-b">Saturday</th>
                    <th class="py-3 px-4 border-b">Sunday</th>
                    <th class="py-3 px-4 border-b">Monday</th>
                    <th class="py-3 px-4 border-b">Tuesday</th>
                    <th class="py-3 px-4 border-b">Wednesday</th>
                    <th class="py-3 px-4 border-b">Thursday</th>
                    <th class="py-3 px-4 border-b">Friday</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                require_once('../model/chartDataModel.php');
                $result = getAllChartData();
                // Loop through the fetched data and display it in the table
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td class='py-3 px-4 border-b'>" . $row['email'] . "</td>";
                    echo "<td class='py-3 px-4 border-b'>" . $row['mealday'] . "</td>";
                    echo "<td class='py-3 px-4 border-b'>" . $row['saturday'] . "</td>";
                    echo "<td class='py-3 px-4 border-b'>" . $row['sunday'] . "</td>";
                    echo "<td class='py-3 px-4 border-b'>" . $row['monday'] . "</td>";
                    echo "<td class='py-3 px-4 border-b'>" . $row['tuesday'] . "</td>";
                    echo "<td class='py-3 px-4 border-b'>" . $row['wednesday'] . "</td>";
                    echo "<td class='py-3 px-4 border-b'>" . $row['thursday'] . "</td>";
                    echo "<td class='py-3 px-4 border-b'>" . $row['friday'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
