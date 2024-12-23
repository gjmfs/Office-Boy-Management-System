<?php
include './nav.php';
include '../config.php';

// Fetch images from the database
$sql = "SELECT food_image FROM food"; 
$result = $connection->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Images</title>
    <link rel="stylesheet" href="../Styles/dist/css/bootstrap.css">
</head>
<body>

    <h1>Uploaded Images</h1>

    <div>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<img src='" . $row['food_image'] . "' alt='Food Image' style='max-width: 200px; margin: 10px;'> ";
            }
        } else {
            echo "No images found.";
        }
        ?>
    </div>

</body>
</html>