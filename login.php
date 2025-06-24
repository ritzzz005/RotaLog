<?php
// Simulated login logic
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Predefined credentials for the president
    $president_email = 'president_user@gmail.com';
    $president_password = 'president_password123';

    // Check if the entered credentials match the president's credentials
    if ($email === $president_email && $password === $president_password) {
        // Redirect to the president page
        header('Location: president.php');
        exit();
    } else {
        // Redirect to the member page for other users
        header('Location: member.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="container">
    <div class="form-container">
      <h1>Login</h1>
      <form method="post" action="">
        <div class="input-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="btn">Login</button>
        
      </form>
    </div>
  </div>
</body>
</html>
