<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Account Settings</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <!-- ++++++++++++++++ THE LEFT SIDE OF THE CONTAINER +++++++++++++++ -->
      <div class="left">
        <ul>
          <?php include_once("../navbar.html") ?>
        </ul>
      </div>
      <!-- ++++++++++++++++ THE CENTER SIDE OF THE CONTAINER +++++++++++++++ -->
      <div class="center">
        <div class="center-contents">
        <h1>Account Settings</h1>
        <br>
        <h2>My Profile</h2>
        <br>
        <div class="dashboardQuickStats">
          <img class="profile-pic" src="images/Untitled-1.png" alt="profile-pic">
          <div class="profile-intro">
            <h2>Grace Oluwatosin</h2>
            <p>Fellowship Member</p>
            <p style="font-size: 0.8rem">London, United Kingdom</p>
          </div>
          <div class="edit-button">
            <button type="submit" id="edit-button1" class="button">Edit</button>
            <img class="edit-button-image" src="images/icons8-edit-row-64.png" alt="edit-button">
          </div>
        </div>
        <br>
              <!-- ++++++++++++++++ PERSONAL INFO +++++++++++++++ -->
        <div class="dashboardPersonalInfo">
          <div class="PersonalInfoHeader">
          <h2>Personal Information</h2>
          <br>
          <div class="edit-button">
            <button type="submit" id="edit-button2" class="button">Edit</button>
            <img class="edit-button-image" src="images/icons8-edit-row-64.png" alt="edit-button">
          </div>
        </div>
        <div class="PersonalInfoDetails">
          <div class="PersonalDetails1">
            <p class="PersonalDetailsHeading">First Name</p>
            <p class="PersonalDetailsText">Grace</p>
            <br>
            <p class="PersonalDetailsHeading">Email</p>
            <p class="PersonalDetailsText">graceoluwatosin@gmail.com</p>
            <br>
            <p class="PersonalDetailsHeading">Birthday</p>
            <p class="PersonalDetailsText">01/01/1998</p>
          </div>
          <div class="PersonalDetails2">
            <p class="PersonalDetailsHeading">Last Name</p>
            <p class="PersonalDetailsText">Oluwatosin</p>
            <br>
            <p class="PersonalDetailsHeading">Phone Number</p>
            <p class="PersonalDetailsText">0759967823</p>
            <br>
            <p class="PersonalDetailsHeading">Marital Status</p>
            <p class="PersonalDetailsText">Single</p>
          </div>
        </div>
        </div>
              <!-- ++++++++++++++++ ADDRESS INFO +++++++++++++++ -->
          <br>
          <div class="dashboardAddressInfo">
            <div class="PersonalInfoHeader">
            <h2>Address</h2>
            <br>
            <div class="edit-button">
              <button type="submit" id="edit-button`" class="button">Edit</button>
              <img class="edit-button-image" src="images/icons8-edit-row-64.png" alt="edit-button">
            </div>
          </div>
          <div class="PersonalInfoDetails">
            <div class="PersonalDetails1">
              <p class="PersonalDetailsHeading">Country</p>
              <p class="PersonalDetailsText">Grace</p>
              <br>
              <p class="PersonalDetailsHeading">Postcode</p>
              <p class="PersonalDetailsText">graceoluwatosin@gmail.com</p>
            </div>
            <div class="PersonalDetails2">
              <p class="PersonalDetailsHeading">City</p>
              <p class="PersonalDetailsText">London</p>
            </div>
          </div>
          </div>
      </div>
      <br>
      </div>
    </div>
  </body>
</html>
