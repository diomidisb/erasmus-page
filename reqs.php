<?php session_start(); ?>
<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ελάχιστες Απαιτήσεις για Erasmus</title>
    <link rel="icon" type="image/jpeg" href="media/icons/favicon.jpeg">
    <link rel="stylesheet" href="styles/reqs.css">
    <link rel="stylesheet" href="styles/navigation.css">
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
    <section class="requirements">
        <div class="imco"><img src="media/photos/papel.png" class="top-image" alt="Καλωσόρισμα Erasmus"></div>

        <h2>Κατ' Ελάχιστον Απαιτήσεις</h2>
        <p>Για να μπορέσετε να συμμετάσχετε στο πρόγραμμα Erasmus, πρέπει να πληροίτε τις ακόλουθες ελάχιστες προϋποθέσεις:</p>

        <table>
            <thead>
                <tr>
                    <th>Απαίτηση</th>
                    <th>Ελάχιστη Αξιολόγηση</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Τρέχον Έτος Σπουδών</td><td>2ο Έτος ή άνω</td></tr>
                <tr><td>Ποσοστό Περασμένων Μαθημάτων</td><td>70% και άνω</td></tr>
                <tr><td>Μέσος Όρος Βαθμολογίας</td><td>6.50 και άνω</td></tr>
                <tr><td>Πιστοποιητικό Γνώσης Αγγλικής Γλώσσας</td><td>Επίπεδο B2 και άνω</td></tr>
            </tbody>
        </table>

        <div class="downloads">
            <h3>Ενημερωτικό Υλικό</h3>
            <a href="media/arxeia/erasmus-programme-guide-v2.2025_el.pdf" target="_blank" class="pdf-link">Οδηγός Erasmus (PDF)</a>
            <a href="media/arxeia/Κινητικότητα Κανονισμός_2.pdf" target="_blank" class="pdf-link">Προϋποθέσεις Μετακίνησης (PDF)</a>
        </div>

        <h3>Φόρμα Ελέγχου Απαιτήσεων</h3>
        <form id="check-form" action="#" method="post" class="requirements-form">
            <label for="year">Τρέχον Έτος Σπουδών:</label>
            <select id="year" name="year">
                <option value="1">1ο Έτος</option>
                <option value="2">2ο Έτος</option>
                <option value="3">3ο Έτος</option>
                <option value="4">4ο Έτος</option>
                <option value="5">Μεγαλύτερο από 4ο</option>
            </select>

            <label for="passed-courses">Ποσοστό Περασμένων Μαθημάτων (%):</label>
            <input type="number" id="passed-courses" name="passed-courses" min="0" max="100" required>

            <label for="average">Μέσος Όρος Βαθμολογίας:</label>
            <input type="number" id="average" name="average" step="0.01" required>

            <label>Πιστοποιητικό Γνώσης Αγγλικής Γλώσσας:</label><br>
            <input type="radio" id="a1" name="english-cert" value="A1"><label for="a1">A1</label>
            <input type="radio" id="a2" name="english-cert" value="A2"><label for="a2">A2</label>
            <input type="radio" id="b1" name="english-cert" value="B1"><label for="b1">B1</label>
            <input type="radio" id="b2" name="english-cert" value="B2"><label for="b2">B2</label>
            <input type="radio" id="c1" name="english-cert" value="C1"><label for="c1">C1</label>
            <input type="radio" id="c2" name="english-cert" value="C2"><label for="c2">C2</label>

            <br><br>
            <button type="submit">Υποβολή</button>
        </form>

        <!-- Μήνυμα αποτελέσματος -->
        <div id="result-message" style="margin-top: 20px; font-weight: bold;"></div>

        <div class="imco">
            <img src="media/photos/New_Erasmus_2021-2027_EU_emblem_with_tagline-pos-EL.png" class="bottom-image" alt="Σπουδές και Ταξίδια Erasmus">
        </div>
    </section>
</main>

<footer>
    <p>© 2025 Πανεπιστήμιο Πελοποννήσου - Erasmus</p>
</footer>

 <script src="scripts/reqs.js" defer></script>

</body>
</html>
