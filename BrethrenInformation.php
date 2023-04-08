<?php

  $conn = new mysqli("ceutrecht.cgffkwd24prp.eu-west-2.rds.amazonaws.com", "admin", "password", "CEUtrecht");

  $result = $conn->query("SELECT * from Departments");

  if( isset($_POST['submit']))
  {
    $submit = $_POST['submit'];

    if ($submit === "NewBrethren"){
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $bday = $_POST['bday'];
      $pnumber = $_POST['pnumber'];
      $address = $_POST['address'];
      $email = $_POST['email'];
      $mstatus = $_POST['MaritalStatus'];
      $NTYABA = $_POST['NTYABA'];
      $graduated = $_POST['graduated'];
      $department = $_POST['department'];

      $conn->query("INSERT INTO Brethren (FirstName, LastName, BirthDay, PhoneNumber, Address, Email, MaritalStatus, Graduated, FoundationSchool, NTYABA, DepartmentID, CellID) VALUES('$fname', '$lname', '$bday', '$pnumber', '$address', '$email', '$mstatus', $graduated, 0, $NTYABA, $department, 1)");
    }
  }

  $allBrethren = $conn->query("SELECT * from Brethren");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <title>Document</title>
  </head>
  <body>
    <div class="appContainer">
      <!-- ++++++++++++++++ THE LEFT SIDE OF THE CONTAINER +++++++++++++++ -->
      <div class="left">
        <ul>
          <?php include_once("navbar.html") ?>
        </ul>
      </div>
      <!-- ++++++++++++++++ THE CENTER SIDE OF THE CONTAINER +++++++++++++++ -->
      <div class="center">
        <div class="center-contents">
          <h1>All Brethren</h1>

          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#AddBrethrenModal">Add new brethren</button>
          
          <br></br>

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Cell position</th>
              <th>Birthday</th>
              <th>Phone number</th>
              <th>Address</th>
              <th>E-mail</th>
              <th>Marital status</th>
              <th>Graduated</th>
              <th>Graduation year</th>
              <th>Department</th>
              <th>Salvation year</th>
              <th>Baptism year</th>
              <th>Foundation school</th>
              <th>NTYABA?</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
            <td>John </td>
            <td>Akinola-Ajayi</td>
            <td>Cell Executive</td>
            <td>15 June</td>
            <td>+44 75401 98543</td>
            <td>59 Haselbury Road, N18 1PZ</td>
            <td>tracynkindu@hotmail.co.uk</td>
            <td>Married</td>
            <td>Yes</td>
            <td>2018</td>
            <td>Ushering</td>
            <td>2020</td>
            <td>2019</td>
            <td>Yes</td>
            <td>No</td>
            
            </tr>
            <?php 
                while($brethren = $allBrethren->fetch_assoc()) {
                  echo "<tr><td><a href='accountSettings/ProfileSettings.php?id={$brethren["BrethrenID"]}'>".$brethren["FirstName"]."</a></td>" . 
                  "<td>" . $brethren["LastName"] . "</td>" .
                  "<td>" . $brethren["CellPosition"] . "</td>" .
                  "<td>" . $brethren["BirthDay"] . "</td>" .
                  "<td>" . $brethren["PhoneNumber"] . "</td>" .
                  "<td>" . $brethren["Address"] . "</td>" .
                  "<td>" . $brethren["Email"] . "</td>" .
                  "<td>" . $brethren["MaritalStatus"] . "</td>" .
                  "<td>" . $brethren["Graduated"] . "</td>" .
                  "<td>" . $brethren["GraduationYear"] . "</td>" .
                  "<td>" . $brethren["DepartmentID"] . "</td>" .
                  "<td>" . $brethren["SalvationYear"] . "</td>" .
                  "<td>" . $brethren["BaptismYear"] . "</td>" .
                  "<td>" . $brethren["FoundationSchool"] . "</td>" .
                  "<td>" . $brethren["NTYABA"] . "</td>" .
                  "</tr>";
                }
            ?>
          </tbody>
        </table>
        
            <!-- New Brethren Modal -->
    <div id="AddBrethrenModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
    
        <!-- New Brethren Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add new brethren</h4>
          </div>
          <div class="modal-body">
            <form action="BrethrenInformation.php" method="post">
              <div class="form-group">
                <label for="FirstName">First Name</label>
                <input type="text" class="form-control" placeholder="Enter Firstname" name="fname">
              </div>
              <div class="form-group">
                <label for="LastName">Last Name</label>
                <input type="text" class="form-control"placeholder="Enter Last Name" name="lname">
              </div>
              <div class="form-group">
                <label for="Birthday">Birthday</label>
                <input type="text" class="form-control" placeholder="Enter Birthday" name="bday">
              </div>
              <div class="form-group">
                <label for="PhoneNumber">Phone Number</label>
                <input type="text" class="form-control" placeholder="Enter Phone Number" name="pnumber">
              </div>
              <div class="form-group">
                <label for="pwd">Address</label>
                <input type="text" class="form-control" placeholder="Enter Address" name="address">
              </div>
              <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter E-mail" name="email">
              </div>
              <div class="form-group">
                <label for="MaritalStatus">Martial Status</label>
                <select class="form-control" id="MaritalStatus" name="MaritalStatus">
                  <option value="Single">Single</option>
                  <option value="Married">Married</option>
                  <option value="Divorced">Divorced</option>
                </select>
              </div>
              <div class="form-group">
                <label for="NTYABA">NTYABA?</label>
                <select class="form-control" id="NTYABA" name="NTYABA">
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
              </div>
              <div class="form-group">
                <label for="Graduated">Graduated?</label>
                <select class="form-control" id="Graduated" name="graduated">
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
              </div>
              <div class="form-group">
                <label for="pwd">Department</label>
                <select class="form-control" id="Departments" name="department">
                  <?php 
                    while($row = $result->fetch_assoc()) {
                      echo "<option value='" . $row["DepartmentID"] . "'> " . $row['DepartmentName'] . "</option>";
                    }
                  ?>
                </select>
              </div>
              <button type="submit" name="submit" value="NewBrethren" class="btn btn-default">Submit</button>
            </form>
          </div>
        </div>
    
      </div>
    </div>


        </div>
      </div>
    </div>
  </body>
</html>
