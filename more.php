<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    
    <link rel="icon" type="image/jpeg" href="media/icons/favicon.jpeg">
    <link rel="stylesheet" href="styles/navigation.css"> 
    <link rel="stylesheet" href="styles/body index.css"> 
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/more.css">
    <link rel="stylesheet" href="styles/rensposive.css">
    <title>Περισσότερα για το Erasmus</title>
</head>


<header>
   
      <?php
   include 'navigation.php';
  ?>

      
</header>


<body>
    <main class="more-container">
      <h1>Περισσότερες Πληροφορίες για το Erasmus+</h1>
  
      <section class="info-text">
        <p>
          Το πρόγραμμα Erasmus+ παρέχει τη δυνατότητα στους φοιτητές να σπουδάσουν ή/και να πραγματοποιήσουν πρακτική άσκηση σε συνεργαζόμενα πανεπιστήμια και οργανισμούς του εξωτερικού. Μέσα από την εμπειρία αυτή, οι φοιτητές αποκτούν διεθνείς δεξιότητες, ενισχύουν τις γλωσσικές τους ικανότητες και διευρύνουν τους ορίζοντές τους.
        </p>
      </section>
  
      <section class="external-links">
        <h2>Χρήσιμοι Σύνδεσμοι</h2>
        <ul>
          <li><a href="https://erasmus-plus.ec.europa.eu/" target="_blank">Επίσημο site Erasmus+</a></li>
          <li><a href="https://www.uop.gr/" target="_blank">Πανεπιστήμιο Πελοποννήσου</a></li>
          <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">Εμπειρίες Φοιτητών Erasmus (YouTube)</a></li>
        </ul>
      </section>
  
      <section class="image-gallery">
        <h2>Φωτογραφίες από το Erasmus</h2>
        <div class="images">
          <img src="media/photos/foitites.jpg" alt="Φοιτητές Erasmus">
          <img src="media/photos/panepistimio erasmus.jpg" alt="Πανεπιστήμιο Εξωτερικού">
        </div>
      </section>
  
      <section class="media-section">
        <h2>Video Παρουσίαση</h2>
        <video controls width="100%">
          <source src="media/videos/Παρουσίαση Ευρωπαϊκού προγράμματος Erasmus+ - Μιλάνο 2020.mp4" type="video/mp4">
          Το πρόγραμμα περιήγησής σας δεν υποστηρίζει το video.
        </video>
      </section>
    </main>
  </body>
  <footer>
    <p>© 2025 Πανεπιστήμιο Πελοποννήσου - Erasmus</p>
  </footer>