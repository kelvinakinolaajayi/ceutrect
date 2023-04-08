<php? 
  include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid red;
  padding: 5px;
}

th {text-align: left;}
</style>

</head>
<body>
  <h1>Hello</h1>
  <h2>Fish</h2>
<?php
  include("config.php");

  $cellID = intval($_GET['id']);
  $year = $_GET['year'];
  $month = $_GET['month'];
  $day = $_GET['day'];

  $celldate = "${year}-${month}-${day}";


  $sql="SELECT brethren.BrethrenID, brethren.first_name, brethren.last_name, CASE " .
  "WHEN midweekattendance.id IS NOT NULL THEN " .
  "'present' " .
  "ELSE " .
  "'absent' " .
  "END as attendance_status " .
  "FROM heroku_cac12764d97fd49.brethren " .
  "LEFT JOIN " .
  "heroku_cac12764d97fd49.midweekattendance " .
  "on brethren.BrethrenID = midweekattendance.BrethrenID AND midweekattendance.DatePresent = '" . $celldate . "' " .
  "where brethren.CellID = ${cellID}";
  $result = mysqli_query($connection,$sql);

  echo "<table id='cellTable' class='table table-bordered'>
  <tr>
  <th>BrethrenID</th>
  <th>First Name</th>
  <th>Last Name</th>
  <th>Attendance Status</th>
  </tr>";
  while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['BrethrenID'] . "</td>";
    echo "<td>" . $row['first_name'] . "</td>";
    echo "<td>" . $row['last_name'] . "</td>";
    if($row['attendance_status'] == "present"){
      echo "<td style='background: green;'>" . $row['attendance_status'] . "</td>";
    } else {
      echo "<td>" . $row['attendance_status'] . "</td>";
    }
    echo "</tr>";
  }

  echo "</table>";

  mysqli_close($connection);

?>


</body>
</html>
