<?php 

$conn = new mysqli("ceutrecht.cgffkwd24prp.eu-west-2.rds.amazonaws.com", "admin", "password", "CEUtrecht");

$allBrethren = $conn->query("SELECT * from Brethren");
$allBrethren1 = $conn->query("SELECT * from Brethren");
$allBrethren2 = $conn->query("SELECT * from Brethren");

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
    <script src="LoadAttendances.js"></script>
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
          <h1>Fellowship Growth and Evangelism</h1>

          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#Cell">Cell</a></li>
            <li><a data-toggle="tab" href="#Midweek">Midweek</a></li>
            <li><a data-toggle="tab" href="#Church">Church</a></li>
            <li><a data-toggle="tab" href="#Evangelism">Evangelism</a></li>
          </ul>

          <div class="tab-content">
            <div id="Cell" class="tab-pane fade in active">
              <h3>Cell Attendance</h3>

              <form style="margin: 5px; text-align: center;" onSubmit=getCellAttendance(1)>
                <label for="birthday">Date:</label>
                <input type="date" id="date" name="cellDate" onChange="getCellAttendance(5)">
                <select id="cellList" onChange="getCellAttendance(this.value)" >
                    <option selected="selected" >Choose one</option>
                    <?php
                    include("config.php");
                    // A sample product array
                    $sql = "SELECT * FROM cells";
                    $result = mysqli_query($connection,$sql);

                    $row['CellID'];
                    
                    // Iterating through the product array
                      while($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='{$row['CellID']}'>{$row['CellName']}</option>";
                      }
                    ?>
                </select>
              </form>

              <div id="CellAttendance"></div>
        
            </div>


            <div id="Midweek" class="tab-pane fade">
             <h3>Midweek Attendance</h3>

             <button type="button" class="btn btn-default" data-toggle="modal" data-target="#NewMidweekAttendance">Enter Attendance</button>

              <form style="margin: 5px; text-align: center;" onSubmit=getMidweekAttendance(1)>
                <label for="birthday">Date:</label>
                <input type="date" id="date" name="cellDate" onChange="getMidweekAttendance(5)">
                <select id="cellList" onChange="getMidweekAttendance(this.value)" >
                    <option selected="selected" >Choose one</option>
                    <?php
                    include("config.php");
                    // A sample product array
                    $sql = "SELECT * FROM cells";
                    $result = mysqli_query($connection,$sql);

                    $row['CellID'];
                    
                    // Iterating through the product array
                      while($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='{$row['CellID']}'>{$row['CellName']}</option>";
                      }
                    ?>
                </select>
              </form>

              <div id="MidweekAttendance"></div>

            </div>


            <div id="Church" class="tab-pane fade">
              <h3>Church Attendance</h3>

              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#NewChurchAttendance">Enter Attendance</button>

              <form style="margin: 5px; text-align: center;" onSubmit=getChurchAttendance(1)>
                <label for="birthday">Date:</label>
                <input type="date" id="date" name="cellDate" onChange="getChurchAttendance(5)">
                <select id="cellList" onChange="getChurchAttendance(this.value)" >
                    <option selected="selected" >Choose one</option>
                    <?php
                    include("config.php");
                    // A sample product array
                    $sql = "SELECT * FROM cells";
                    $result = mysqli_query($connection,$sql);

                    $row['CellID'];
                    
                    // Iterating through the product array
                      while($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='{$row['CellID']}'>{$row['CellName']}</option>";
                      }
                    ?>
                </select>
              </form>

              <div id="ChurchAttendance"></div>


            </div>


            <div id="Evangelism" class="tab-pane fade">
              <h3>Evangelism Attendance</h3>

              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#NewEvangelismAttendance">Enter Attendance</button>

              <form style="margin: 5px; text-align: center;" onSubmit=getEvangelismAttendance(1)>
                <label for="birthday">Date:</label>
                <input type="date" id="date" name="cellDate" onChange="getEvangelismAttendance(5)">
                <select id="cellList" onChange="getEvangelismAttendance(this.value)" >
                    <option selected="selected" >Choose one</option>
                    <?php
                    include("config.php");
                    // A sample product array
                    $sql = "SELECT * FROM cells";
                    $result = mysqli_query($connection,$sql);

                    $row['CellID'];
                    
                    // Iterating through the product array
                      while($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='{$row['CellID']}'>{$row['CellName']}</option>";
                      }
                    ?>
                </select>
              </form>

              <div id="EvangelismAttendance"></div>


            </div>
          </div>
          
        </div>

        <div class="modal fade" id="NewMidweekAttendance" role="dialog">
          <div class="modal-dialog">
                
                <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Midweek Attendnace</h4>
              </div>
              <div class="modal-body">
 

                            <form action="/action_page.php">
                              <div class="form-group">
                                <label for="email">Date:</label>
                                <input type="date" class="form-control" name="date">
                              </div>
                              <div class="form-group">
                                <label for="number">Attendance:</label>
                                <div class="form-group">
                                  <?php
                                    while($brethren = $allBrethren->fetch_assoc()) {
                                      echo '<input type="checkbox" name="brethren[]" value="' . $brethren["BrethrenID"] .'">' .
                                      '<label for="vehicle1">' . $brethren["FirstName"] . ' ' . $brethren["LastName"] . '</label><br>';
                                    };
                                  ?>
                                </div>
                              </div>
                              <button type="submit" class="btn btn-default" value="Midweek">Submit</button>
                            </form>


                    </div>
              </div>
          </div>
        </div>

        <div class="modal fade" id="NewChurchAttendance" role="dialog">
                <div class="modal-dialog">
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Church Attendnace</h4>
                    </div>
                    <div class="modal-body">
 

                            <form action="/action_page.php">
                              <div class="form-group">
                                <label for="email">Date:</label>
                                <input type="date" class="form-control" name="date">
                              </div>
                              <div class="form-group">
                                <label for="number">Attendance:</label>
                                <div class="form-group">
                                  <?php
                                    while($brethren1 = $allBrethren1->fetch_assoc()) {
                                      echo '<input type="checkbox" name="brethren[]" value="' . $brethren1["BrethrenID"] .'">' .
                                      '<label for="vehicle1">' . $brethren1["FirstName"] . ' ' . $brethren1["LastName"] . '</label><br>';
                                    }        
                                  ?>
                                </div>
                              </div>
                              <button type="submit" class="btn btn-default" value="Church">Submit</button>
                            </form>


                    </div>
                    </div>
                </div>
              </div>
      </div>
      </div>





      <div class="modal fade" id="NewEvangelismAttendance" role="dialog">
                <div class="modal-dialog">
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Evangelism Attendance</h4>
                    </div>
                    <div class="modal-body">
 

                            <form action="/action_page.php">
                              <div class="form-group">
                                <label for="email">Date:</label>
                                <input type="date" class="form-control" name="date">
                              </div>
                              <div class="form-group">
                                <label for="number">Attendance:</label>
                                <div class="form-group">
                                  <?php
                                    while($brethren2 = $allBrethren2->fetch_assoc()) {
                                      echo '<input type="checkbox" name="brethren[]" value="' . $brethren2["BrethrenID"] .'">' .
                                      '<label for="vehicle1">' . $brethren2["FirstName"] . ' ' . $brethren2["LastName"] . '</label><br>';
                                    }        
                                      ?>
                                </div>
                              </div>
                              <button type="submit" class="btn btn-default" value="Evangelism">Submit</button>
                            </form>


                    </div>
                    </div>
                </div>
              </div>
      </div>
 




    </div>
  </body>
</html>
