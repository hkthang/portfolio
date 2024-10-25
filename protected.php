<?php
// Set the required password
$requiredPassword = 'your_password';

// Check if a password was submitted
if (isset($_POST['password'])) {
  // Verify the password
  if ($_POST['password'] === $requiredPassword) {
    // Password is correct, redirect to the protected content
    header('Location: protected_content.html');
    exit;
  } else {
    // Password is incorrect, display an error message
    echo 'Incorrect password.';
  }
}
?>

<form method="post">
  <label for="password">Password:</label>
  <input type="password" name="password" required>
  <button type="submit">Submit</button>
</form>