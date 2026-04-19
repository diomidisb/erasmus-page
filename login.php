<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <title>Είσοδος Χρήστη</title>
    <link rel="icon" type="image/jpeg" href="media/icons/favicon.jpeg">
    <link rel="stylesheet" href="styles/navigation.css"> 
    <link rel="stylesheet" href="styles/body index.css"> 
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/rensposive.css">
    
    
</head>
<?php
session_start();
if (isset($_SESSION['error_message'])) {
    echo '<div class="error">' . htmlspecialchars($_SESSION['error_message']) . '</div>';
    unset($_SESSION['error_message']);
}
if (isset($_SESSION['success_message'])) {
    echo '<div class="success">' . htmlspecialchars($_SESSION['success_message']) . '</div>';
    unset($_SESSION['success_message']);
}

?>


<header>
   
   <?php
     include 'navigation.php';
    ?>

      
</header>

<body>
    <main class="login-container">
      <h1>Είσοδος</h1>
      <form action="backend/login.php" method="POST">

        <label for="username">Όνομα Χρήστη:</label>
        <input type="text" id="username" name="username" required>
  
        <label for="password">Κωδικός Πρόσβασης:</label>
        <input type="password" id="password" name="password" required>
  
        <button type="submit">Σύνδεση</button>
      </form>
      <p>Δεν έχετε λογαριασμό; <a href="sign-up.html">Εγγραφείτε εδώ</a>.</p>
    </main>
  </body>
<footer>
    <p>© 2025 Πανεπιστήμιο Πελοποννήσου - Erasmus</p>
  </footer>
  
