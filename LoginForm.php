<?php
// Start a session
session_start();

// Connect to the database using mysqli
$servername = "ceutrecht.cgffkwd24prp.eu-west-2.rds.amazonaws.com";
$username = "admin";
$password = "password";
$dbname = "CEUtrecht";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if the login form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Retrieve user input
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Query the database for the user's credentials using prepared statements
  $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();
  $user = $result->fetch_assoc();
  if ($user && password_verify($password, $user['password'])) {
    // Store the user's username in a session variable
    $_SESSION['username'] = $username;

    // Redirect the user to the home page
    header('Location: home.php');
    exit();
  } else {
    // Display an error message
    echo "<p>Invalid username or password</p>";
  }

  // Increment the failed login attempts for this IP address
  $ip = $_SERVER['REMOTE_ADDR'];
  $stmt = $conn->prepare("UPDATE login_attempts SET attempts = attempts + 1 WHERE ip = ?");
  $stmt->bind_param("s", $ip);
  $stmt->execute();

  // If there have been too many failed login attempts from this IP address, block further login attempts for a certain period of time
  $stmt = $conn->prepare("SELECT attempts FROM login_attempts WHERE ip = ?");
  $stmt->bind_param("s", $ip);
  $stmt->execute();
  $result = $stmt->get_result();
  $attempts = $result->fetch_assoc()['attempts'];
  if ($attempts >= 5) {
    $block_time = time() + 300; // Block login attempts for 5 minutes
    $stmt = $conn->prepare("UPDATE login_attempts SET block_time = ? WHERE ip = ?");
    $stmt->bind_param("is", $block_time, $ip);
    $stmt->execute();
  }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
  </head>
  <body>
    <h1>Login</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br>
      <input type="submit" value="Login">
    </form>
  </body>
</html>
