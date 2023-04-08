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
        <h1>Cell Report</h1>
        <br>
          <form action="cellReport.php" method="post">
              <div class="form-group">
                  <label for="fname">Cell Date:</label>
                  <input type="date" id="birthday" name="date" class="form-control">
              </div>
              <div class="form-group">
                  <label for="lname">Cell Time:</label>
                  <input type="time" id="appt" name="time" class="form-control">
              </div>
              <div class="form-group">
                  <label for="number">Attendance:</label>
                  <div class="form-group">
                    <?php
                      while($brethren = $allBrethren->fetch_assoc()) {
                        echo '<input type="checkbox" name="brethren[]" value="' . $brethren["BrethrenID"] .'">' .
                        '<label for="vehicle1">' . $brethren["FirstName"] . ' ' . $brethren["LastName"] . '</label><br>';
                      }        
                    ?>
                  </div>
              </div>
              <div class="form-group">
                  <label for="pwd">Add first timers:</label>
                  <br>
                  <button type="button" class="btn btn-default" onclick="addTextBox()">+</button>
                  <div id="FirstTimers">
                  </div>
              </div>
              <div class="form-group">
                  <label for="email">Souls won:</label>
                  <input type="number" class="form-control" name="SoulsWon" min="0" >
              </div>
              <div class="form-group">
                  <label for="pwd">Total offering:</label>
                  <input type="text" class="form-control" placeholder="Total offering" name="invitedBy">
              </div>
              <div class="form-group">
                  <label for="pwd">Did you evangelise before the meeting?:</label>
                  <select name="Evanglise" class="form-control">
                    <option value="0">No</option>
                    <option value="1">No</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="pwd">Where was the meeting held</label>
                  <select name="MeetingFormat" class="form-control">
                    <option value="Online">Online</option>
                    <option value="Physical">Physical</option>
                    <option value="Both">Both</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="pwd">How many Rhapsody of Realities purchased:</label>
                  <input type="number" class="form-control" placeholder="Please indicate who invited you" name="RhapsodiesP">
              </div>
              <div class="form-group">
                  <label for="pwd">How many rhapsodies of realities distributed:</label>
                  <input type="number" class="form-control" placeholder="Please indicate who invited you" name="RhapsodiesD">
              </div>
              <div class="form-group">
                  <label for="pwd">Number of PCDL subscriptions:</label>
                  <input type="number" class="form-control" placeholder="Please indicate who invited you" name="Subscription">
              </div>
              <div class="form-group">
                  <label for="pwd">What was your meeting outline:</label>
                  <input type="text" class="form-control" placeholder="Please indicate who invited you" name="Outline">
              </div>
              <div class="form-group">
                  <label for="pwd">Things to improve for next weeks meeting:</label>
                  <textarea name="ImprovementComments" id="" cols="10" rows="10" class="form-control"></textarea>
              </div>
              <input type="submit" value="submit" class="form-control" name="submit">
          </form>
          </div>
        
      </div>
    </div>
  </body>
</html>
