<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>
<body>
    <?php
        include './nav.php';
        include '../config.php';

        $sql= 'select * from user';
        $result= $connection->query($sql);

    ?>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">User Name</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<th scope='row'>{$row['u_id']}</th>";
            echo "<td>{$row['uName']}</td>";
            echo "<td>{$row['uPassword']}</td>";
            echo "</tr>";
        }
    }
    ?>
  </tbody>
</table>


</body>
</html>