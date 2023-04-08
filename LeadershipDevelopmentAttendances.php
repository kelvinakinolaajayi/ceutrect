<?php 

$conn = new mysqli("ceutrecht.cgffkwd24prp.eu-west-2.rds.amazonaws.com", "admin", "password", "CEUtrecht");

$allBrethren = $conn->query("SELECT * from Brethren");
$allBrethren1 = $conn->query("SELECT * from Brethren");
$allBrethren2 = $conn->query("SELECT * from Brethren");
$allBrethren3 = $conn->query("SELECT * from Brethren");
$allBrethren4 = $conn->query("SELECT * from Brethren");

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
          <h1>Leadership Development</h1>

          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#FoundationSchool">Foundation School</a></li>
            <li><a data-toggle="tab" href="#MorningDevotion">Morning Devotion</a></li>
            <li><a data-toggle="tab" href="#ZonalPrayer">Zonal Prayer</a></li>
            <li><a data-toggle="tab" href="#GroupMeetings">Group Meetings</a></li>
            <li><a data-toggle="tab" href="#MinistryPrograms">Ministry Programs</a></li>
          </ul>

          <div class="tab-content">
            <div id="FoundationSchool" class="tab-pane fade in active">
              
              <h3>Foundation School Attendance</h3>

              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#NewFoundationSchoolAttendance">Enter Attendance</button>


              <form style="margin: 5px; text-align: center;" onSubmit=getFoundationSchoolAttendance(1)>
                <label for="birthday">Date:</label>
                <input type="date" id="date" name="cellDate" onChange="getFoundationSchoolAttendance(5)">
                <select id="cellList" onChange="getFoundationSchoolAttendance(this.value)" >
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

              <div id="FoundationSchoolAttendance"></div>
        
            </div>


            <div id="MorningDevotion" class="tab-pane fade">
             <h3>Morning Devotional Attendance</h3>

             <button type="button" class="btn btn-default" data-toggle="modal" data-target="#NewMorningDevotionAttendance">Enter Attendance</button>

              <form style="margin: 5px; text-align: center;" onSubmit=getMorningDevotionAttendance(1)>
                <label for="birthday">Date:</label>
                <input type="date" id="date" name="cellDate" onChange="getMorningDevotionAttendance(5)">
                <select id="cellList" onChange="getMorningDevotionAttendance(this.value)" >
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

              <div id="MorningDevotionAttendance"></div>

            </div>


            <div id="ZonalPrayer" class="tab-pane fade">
              <h3>Zonal Prayer Attendance</h3>

              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#NewZonalPrayerAttendance">Enter Attendance</button>

              <form style="margin: 5px; text-align: center;" onSubmit=getZonalPrayerAttendance(1)>
                <label for="birthday">Date:</label>
                <input type="date" id="date" name="cellDate" onChange="getZonalPrayerAttendance(5)">
                <select id="cellList" onChange="getZonalPrayerAttendance(this.value)" >
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

              <div id="ZonalPrayerAttendance"></div>


            </div>


            <div id="GroupMeetings" class="tab-pane fade">
              <h3>Group Meeting Attendance</h3>

              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#NewGroupMeetingAttendance">Enter Attendance</button>

              <form style="margin: 5px; text-align: center;" onSubmit=getGroupPrayerAttendance(1)>
                <label for="birthday">Date:</label>
                <input type="date" id="date" name="cellDate" onChange="getGroupPrayerAttendance(5)">
                <select id="cellList" onChange="getGroupPrayerAttendance(this.value)" >
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

              <div id="GroupPrayerAttendance"></div>


            </div>


            <div id="MinistryPrograms" class="tab-pane fade">
              <h3>Ministry Programs Attendance</h3>

              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#NewMinistryProgramsAttendance">Enter Attendance</button>

              <form style="margin: 5px; text-align: center;" onSubmit=getMinistryProgramAttendance(1)>
                <label for="birthday">Date:</label>
                <input type="date" id="date" name="cellDate" onChange="getMinistryProgramAttendance(5)">
                <select id="cellList" onChange="getMinistryProgramAttendance(this.value)" >
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

              <div id="MinistryProgramAttendance"></div>
            </div>

          </div>
          
        </div>

        <div class="modal fade" id="NewFoundationSchoolAttendance" role="dialog">
          <div class="modal-dialog">
                
                <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Foundation School Attendnace</h4>
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
                              <button type="submit" class="btn btn-default" value="FoundationSchool" name="Submit">Submit</button>
                            </form>


                    </div>
              </div>
          </div>
        </div>

        

        <div class="modal fade" id="NewMorningDevotionAttendance" role="dialog">
                <div class="modal-dialog">
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Morning Devotion Attendnace</h4>
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
                              <button type="submit" class="btn btn-default" value="MorningDevotion" name="submit">Submit</button>
                            </form>


                    </div>
                    </div>
                </div>
              </div>
      </div>
      </div>





      <div class="modal fade" id="NewZonalPrayerAttendance" role="dialog">
                <div class="modal-dialog">
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Zonal Prayer Attendance</h4>
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
                              <button type="submit" class="btn btn-default" value="ZonalPrayer" name="Submit">Submit</button>
                            </form>


                    </div>
                    </div>
                </div>
              </div>
      </div>
 
      <div class="modal fade" id="NewGroupMeetingAttendance" role="dialog">
                <div class="modal-dialog">
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Group Meetings Attendance</h4>
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
                                    while($brethren3 = $allBrethren3->fetch_assoc()) {
                                      echo '<input type="checkbox" name="brethren[]" value="' . $brethren3["BrethrenID"] .'">' .
                                      '<label for="vehicle1">' . $brethren3["FirstName"] . ' ' . $brethren3["LastName"] . '</label><br>';
                                    }        
                                      ?>
                                </div>
                              </div>
                              <button type="submit" class="btn btn-default" value="GroupMeeting" name="Submit">Submit</button>
                            </form>


                    </div>
                    </div>
                </div>
              </div>
      </div>


      <div class="modal fade" id="NewMinistryProgramsAttendance" role="dialog">
                <div class="modal-dialog">
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Ministry Porgrams Attendance</h4>
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
                                    while($brethren4 = $allBrethren4->fetch_assoc()) {
                                      echo '<input type="checkbox" name="brethren[]" value="' . $brethren4["BrethrenID"] .'">' .
                                      '<label for="vehicle1">' . $brethren4["FirstName"] . ' ' . $brethren4["LastName"] . '</label><br>';
                                    }        
                                      ?>
                                </div>
                              </div>
                              <button type="submit" class="btn btn-default" value="MinistryPrograms" name="Submit">Submit</button>
                            </form>


                    </div>
                    </div>
                </div>
              </div>
      </div>



    </div>
  </body>
</html>
