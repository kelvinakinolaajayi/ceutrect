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
          <h1>Ministry Materials Overview</h1>
          <br></br>
          
          <table class="table table-bordered">
            <tr>
              <th>First name</th>
              <th>Last name</th>
              <th><a href="#" data-toggle="tooltip" title="Have they read the Cell Manual" style="text-decoration: none">Cell Manual</A></th>
              <th><a href="#" data-toggle="tooltip" title="Now That You Are Born Again" style="text-decoration: none">Now That You Are Born Again</A></th>
              <th><a href="#" data-toggle="tooltip" title="Do they follow our Zonal page on kingschat?" style="text-decoration: none">Recreating your world</a></th>
              <th><a href="#" data-toggle="tooltip" title="Do they regularly share/post/comment on things from their group? " style="text-decoration: none">Active Kingschat?</a></th>
              <th><a href="#" data-toggle="tooltip" title="DO they have PCDL downloaded? " style="text-decoration: none">How to pray effectively</a></th>
              <th><a href="#" data-toggle="tooltip" title="DO they have a gold membership on PCDL? " style="text-decoration: none">Join This Chariot</a></th>
              <th><a href="#" data-toggle="tooltip" title="DO they Rhapsodies of Realities downloaded on their phone" style="text-decoration: none">The Power Of Your Mind</a></th>
              <th><a href="#" data-toggle="tooltip" title="DO they the Loveworld App store downloaded on their phone" style="text-decoration: none">How To Make Your Faith Work</a></th>
              <th><a href="#" data-toggle="tooltip" title="DO they the Live TV App store downloaded on their phone" style="text-decoration: none">The Holy Spirit and You</a></th>
              <th><a href="#" data-toggle="tooltip" title="Now That You Are Born Again" style="text-decoration: none">None of these diseases</A></th>
              <th><a href="#" data-toggle="tooltip" title="Now That You Are Born Again" style="text-decoration: none">The 7 spirits of God</A></th>
              <th><a href="#" data-toggle="tooltip" title="Now That You Are Born Again" style="text-decoration: none">When God Visits you</A></th>
              <th><a href="#" data-toggle="tooltip" title="Now That You Are Born Again" style="text-decoration: none">7 Things the Holy Spirit will do in you</A></th>




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
