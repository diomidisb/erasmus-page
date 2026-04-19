<?php session_start();?>
<!DOCTYPE html>
            <html lang="en">
            
            
            <head>
                <meta charset="UTF-8">
                 <title>Εγγραφή Χρήστη</title>
                <link rel="icon" type="image/jpeg" href="media/icons/favicon.jpeg">
                <link rel="stylesheet" href="styles/navigation.css"> 
                <link rel="stylesheet" href="styles/body index.css"> 
                <link rel="stylesheet" href="styles/footer.css">
                <link rel="stylesheet" href="styles/rensposive.css">
                <link rel="stylesheet" href="styles/signup.css">
                
                
            </head>
          
<?php
    if (isset($_SESSION['error_message'])) {
      echo '<div class="error">' . htmlspecialchars($_SESSION['error_message']) . '</div>';
       unset($_SESSION['error_message']);
      }
  ?>
           
<header>
   <?php include 'navigation.php';?>
</header>

<body>
    <main class="signup-container">
      <h1>Εγγραφή</h1>
      <form action="backend/register.php" method="post">
        <label for="name">Όνομα:</label>
        <input type="text" id="name" name="name" required>
  
        <label for="surname">Επίθετο:</label>
        <input type="text" id="surname" name="surname" required>
  
        <label for="am">Αριθμός Μητρώου:</label>
        <input type="text" id="am" name="am" required>
  
        <label for="phone">Τηλέφωνο:</label>
        <input type="tel" id="phone" name="phone" required>
  
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
  
        <label for="username">Όνομα Χρήστη:</label>
        <input type="text" id="username" name="username" required>
  
        <label for="password">Κωδικός Πρόσβασης:</label>
        <input type="password" id="password" name="password" required>
  
        <label for="confirm-password">Επιβεβαίωση Κωδικού:</label>
        <input type="password" id="confirm-password" name="confirm-password" required>
  
        <button type="submit">Εγγραφή</button>
      </form>
      <p>Έχετε ήδη λογαριασμό; <a href="login.html">Συνδεθείτε εδώ</a>.</p>
    </main>
  </body>

   <script src="scripts/signup.js" defer></script>
               
<footer>
    <p>© 2025 Πανεπιστήμιο Πελοποννήσου - Erasmus</p>
  </footer>
  
