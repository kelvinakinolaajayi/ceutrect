<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Three Div Blocks Page</title>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
  </head>
  <body>
    <div class="appContainer">
      <div class="left">
        <ul>
          <?php include_once("navbar.html") ?>
        </ul>
      </div>
      <div class="center">
        <div class="center-contents">
        <h4>Chosen Cell</h4>
        <br>
        <h1>Good Evening Tracy</h1>
        <br>
        <div class="dashboardQuickStats">
          <div class="quickStatsBlockOne">
            <p style="font-size: 0.9em">Cell</p>
            <br>
            <h2 style="margin-top: -10px">-15</h2>
            <br>
            <p style="font-size: 0.8em; margin-top: -10px">Last Updated:<br>02/04/2023</p>
          </div>
          <div class="quickStatsBlockTwo">
            <p style="font-size: 0.9em">Church</p>
            <br>
            <h2 style="margin-top: -10px">-10</h2>
            <br>
            <p style="font-size: 0.8em; margin-top: -10px">Last Updated:<br>02/04/2023</p>
          </div>
          <div class="quickStatsBlockThree">
            <p style="font-size: 0.9em">Midweek</p>
            <br>
            <h2 style="margin-top: -10px">-5</h2>
            <br>
            <p style="font-size: 0.8em; margin-top: -10px">Last Updated:<br>02/04/2023</p>
          </div>
          <div class="quickStatsBlockFour">
            <p style="font-size: 0.9em">Souls Won</p>
            <br>
            <h2 style="margin-top: -10px">-2</h2>
            <br>
            <p style="font-size: 0.8em; margin-top: -10px">Last Updated:<br>02/04/2023</p>
          </div>
          <div class="quickStatsBlockFive">
            <p style="font-size: 0.9em">Evangelism</p>
            <br>
            <h2 style="margin-top: -10px">-1</h2>
            <br>
            <p style="font-size: 0.8em; margin-top: -10px">Last Updated:<br>02/04/2023</p>
          </div>
        </div>
      </div>
      </div>
      <div class="right">
        <h1>Birthdays</h1>
        <p style="font-size: 0.9em; margin-top:-10px">Glory! It's Tracy's birthday in 5 days!</p>
        <br>
        <h4 style="margin-bottom: 0px; color: #0B3954">April</h4>
        <div class="calendarSection">
          <div class="UpcomingDates">
            <h2 style="margin-bottom: -20px">4</h2>
            <br>
            <p style="font-size: 0.9em">Tue</p>
          </div>
          <div class="UpcomingDates">
            <h2 style="margin-bottom: -20px">5</h2>
            <br>
            <p style="font-size: 0.9em">Wed</p>
          </div>
          <div class="UpcomingDates">
            <h2 style="margin-bottom: -20px">6</h2>
            <br>
            <p style="font-size: 0.9em">Thu</p>
          </div>
          <div class="UpcomingDates">
            <h2 style="margin-bottom: -20px">7</h2>
            <br>
            <p style="font-size: 0.9em">Fri</p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
