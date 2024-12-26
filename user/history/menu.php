<?php
session_start();
if(!isset($_SESSION['username'])){
  die ("Youre not logged in ");
}
include './nav.php';
include '../config.php';

$table_no=$_SESSION['table_no'];
// Fetch images from the database
$sql = "SELECT * FROM request where table_no='$table_no'"; 
$result = $connection->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foods</title>
    <link rel="stylesheet" href="../../css/card.css">
    

</head>
<body>

    <h1 class="text-center m-5 ">Food Details</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Request ID</th>
      <th scope="col">Employee Name</th>
      <th scope="col">Table NO</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
      <th scope="col">Drink Item</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<th scope='row'>{$row['request_id']}</th>";
            echo "<td>{$row['employee_name']}</td>";
            echo "<td>{$row['table_no']}</td>";
            echo "<td>{$row['subject']}</td>";
            echo "<td>{$row['msg']}</td>";
            echo "<td>{$row['drink_item']}</td>";
            echo "<td>{$row['quantity']}</td>";
            echo "</tr>";
        }
    }
    ?>
  </tbody>
</table>
    </div>
</body>
</html>