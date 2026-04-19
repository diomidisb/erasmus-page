
 <?php
    session_start();
 ?>

<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <title>Erasmus | Πανεπιστήμιο Πελοποννήσου</title>
    <link rel="icon" type="image/jpeg" href="media/icons/favicon.jpeg">
    <link rel="stylesheet" href="styles/navigation.css"> 
    <link rel="stylesheet" href="styles/body index.css"> 
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/rensposive.css">
</head>

<body>
 
<header>
  <?php
      include 'navigation.php';
  ?> 
</header>

<main>
    <section class="welcome">
        <h2>Καλώς ήρθατε στην Erasmus Web App!</h2>
        <p>
            Αν είστε φοιτητής και σας ενδιαφέρει να συμμετάσχετε στο πρόγραμμα Erasmus, βρίσκεστε
            στο σωστό μέρος! Η εφαρμογή αυτή δημιουργήθηκε για να σας καθοδηγήσει στα πρώτα σας βήματα
            προς μια συναρπαστική ακαδημαϊκή εμπειρία στο εξωτερικό.
        </p>
        <p>
            Μέσα από έναν απλό και φιλικό σχεδιασμό, θα μπορείτε να ενημερωθείτε για βασικές πληροφορίες,
            πανεπιστήμια συνεργασίας, διαδικασίες μετακίνησης και πολλά ακόμα. Μείνετε συντονισμένοι!
        </p>

        <div class="images">
            <img src="media/photos/1200px-Erasmus+_Logo.svg.png" alt="Erasmus+ Logo" class="main-image">
            <img src="media/photos/logo-uop-black-red-v1.png" alt="Δεύτερη Φωτογραφία Erasmus" class="main-image">
        </div>

    </section>
</main>

<footer>
  <p>© 2025 Πανεπιστήμιο Πελοποννήσου - Erasmus</p>
</footer>

</body>
</html>
