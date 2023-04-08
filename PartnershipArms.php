<?php 

$conn = new mysqli("ceutrecht.cgffkwd24prp.eu-west-2.rds.amazonaws.com", "admin", "password", "CEUtrecht");

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
          <h1>Partnership Arms</h1>

          <button class="btn btn-default" data-toggle="modal" data-target="#myModal">Add new giving</button>

          <br></br>

          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#All">All partnership</a></li>
            <li><a data-toggle="tab" href="#RoR">Rhapsody of Realities</a></li>
            <li><a data-toggle="tab" href="#HS">Healing school</a></li>
            <li><a data-toggle="tab" href="#ICM">Innercity Mission</a></li>
            <li><a data-toggle="tab" href="#LWTV">Loveworld TV</a></li>
          </ul>

          <div class="tab-content">
            <div id="All" class="tab-pane fade in active">
              <h3>All partnership givings</h3>

              <table class="table table-bordered">
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Partnership Arm</th>
                  <th>Date given</th>
                  <th>Amount given</th>
                </tr>
              </table>
            </div>

            <div id="RoR" class="tab-pane fade">
              <h3>Rhapsody of realities givings</h3>

              <table class="table table-bordered">
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Date given</th>
                  <th>Amount given</th>
                </tr>
              </table>
            </div>

            <div id="HS" class="tab-pane fade">
              <h3>Healing School givings</h3>
            
              <table class="table table-bordered">
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Date given</th>
                  <th>Amount given</th>
                </tr>
              </table>
            </div>


            <div id="ICM" class="tab-pane fade">
              <h3>Innercity Mission givings</h3>

              <table class="table table-bordered">
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Date given</th>
                  <th>Amount given</th>
                </tr>
              </table>
            </div>


            <div id="LWTV" class="tab-pane fade">
              <h3>Loveworld TV givings</h3>

              <table class="table table-bordered">
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Date given</th>
                  <th>Amount given</th>
                </tr>
              </table>
            </div>

          </div>
        </div>





        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add new partship giving</h4>
              </div>
              <div class="modal-body">
                <form action="/action_page.php">
                  <div class="form-group">
                    <label for="Brethren">Brethren:</label>
                    <select name="Brethren" class="form-control">
                      <?php
                        while($row = $allBrethren2->fetch_assoc()) {
                          echo "<option value='" . $row["BrethrenID"] . "'> " . $row['FirstName'] . ' ' . $row['LastName'] . "</option>";
                        }      
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="pwd">Parnership Arm:</label>
                    <select name="Brethren" class="form-control">
                      <?php
                        while($row = $allBrethren2->fetch_assoc()) {
                          echo "<option value='" . $row["BrethrenID"] . "'> " . $row['FirstName'] . ' ' . $row['LastName'] . "</option>";
                        }      
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="pwd">Amount:</label>
                    <input type="number" class="form-control" step="0.01" placeholder="00.00" name="amount">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Date:</label>
                    <input type="date" class="form-control" placeholder="Select date" name="date">
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
                </form>

              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
