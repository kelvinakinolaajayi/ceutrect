<?php
  $conn = new mysqli("ceutrecht.cgffkwd24prp.eu-west-2.rds.amazonaws.com", "admin", "password", "CEUtrecht");

  $allBrethren = $conn->query("SELECT * from Brethren");

  if( isset($_POST['submit']))
  {
    $date = $_POST['date'];
    $time = $_POST['time'];
    $attendance = $_POST['brethren'];
    $firstTimers = $_POST['firstTimers'];
    $soulsWon = $_POST['SoulsWon'];
    $totalOffering =  $_POST['invitedBy'];
    $evangelise = $_POST['Evanglise'];
    $meetingformat = $_POST['MeetingFormat'];
    $rhapsodiespurchased = $_POST['RhapsodiesP'];
    $rhapsodiesDistributed = $_POST['RhapsodiesD'];
    $pcdlSubscriptions = $_POST['Subscription'];
    $outline = $_POST['Outline'];
    $improvement = $_POST['ImprovementComments'];

    echo "date: " . $date . "<br>";
    echo "time: " . $time . "<br>";
    echo "Attendance: <br>";
    foreach ($attendance as $attendee){
      echo $attendee."<br>";
    }

    echo "Firstimers: <br>";
    foreach ($firstTimers as $firstTimer){
      echo $firstTimer."<br>";
    }


    echo "Souls won: " . $soulsWon . "<br>";
    echo "Total offering: " . $totalOffering . "<br>";
    echo "Evangelise: " . $evangelise . "<br>";
    echo "Meeting Format: " . $meetingformat . "<br>";
    echo "Rhapsodies Purchased: " . $rhapsodiespurchased . "<br>";
    echo "Rhapsodies Distributed: " . $rhapsodiesDistributed . "<br>";
    echo "PCDL Subscriptions: " . $pcdlSubscriptions . "<br>";
    echo "Outline: " . $outline . "<br>";
    echo "Any improvements?: <br>" . $improvement . "<br>";

  } else {
    echo "nothing";
  }
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
            <h1>Follow Up Report</h1>
            <br>

            <button class="btn btn-default" data-toggle="modal" data-target="#AddFollowUpModal">Enter Follow Up</button>

            <h3>Please see the last time your brethren was follwed up</h3>
            <br>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Last Date called</th>
                    <th>Called this week?</th>
                </tr>
            </table>

          </div> <!-- Class Contents -->

          <div class="modal fade" id="AddFollowUpModal" role="dialog">
                <div class="modal-dialog">
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Follow up Attendance</h4>
                    </div>
                    <div class="modal-body">
 

                            <form action="/action_page.php">
                              <div class="form-group">
                                <label for="email">Date Followed up:</label>
                                <input type="date" class="form-control" name="date">
                              </div>
                              <div class="form-group">
                                <label for="number">Who you called:</label>
                                <div class="form-group">
                                  <?php
                                    while($brethren2 = $allBrethren->fetch_assoc()) {
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
    </div>
  </body>
</html>
