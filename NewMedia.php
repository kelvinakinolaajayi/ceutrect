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
    <title>New Media</title>
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
          <h1>New media overview</h1>
        
          <br></br>
          

          <table class="table table-bordered">
            <tr>
              <th>First name</th>
              <th>Last name</th>
              <th><a href="#" data-toggle="tooltip" title="Do they follow Pastor Chris on kingschat?" style="text-decoration: none">Pastor Chris Kingschat</th>
              <th><a href="#" data-toggle="tooltip" title="Do they follow our Zonal page on kingschat?" style="text-decoration: none">Zonal Kingschat</a></th>
              <th><a href="#" data-toggle="tooltip" title="Do they regularly share/post/comment on things from their group? " style="text-decoration: none">Active Kingschat?</a></th>
              <th><a href="#" data-toggle="tooltip" title="DO they have PCDL downloaded? " style="text-decoration: none">PCDL?</a></th>
              <th><a href="#" data-toggle="tooltip" title="DO they have a gold membership on PCDL? " style="text-decoration: none">PCDL Subscription?</a></th>
              <th><a href="#" data-toggle="tooltip" title="DO they Rhapsodies of Realities downloaded on their phone" style="text-decoration: none">Rhpaody of Realities?</a></th>
              <th><a href="#" data-toggle="tooltip" title="DO they the Loveworld App store downloaded on their phone" style="text-decoration: none">Loveworld App Store?</a></th>
              <th><a href="#" data-toggle="tooltip" title="DO they the Live TV App store downloaded on their phone" style="text-decoration: none">Live TV App?</a></th>
            </tr>
          </table>


        </div>
      </div>
    </div>
    <script>
      $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
      });
    </script>
  </body>
</html>
