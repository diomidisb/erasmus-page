<?php
$conn = new mysqli("localhost", "root", "", "erasmustsel");
if ($conn->connect_error) die("Σφάλμα DB: " . $conn->connect_error);

// Παίρνουμε όλες τις αιτήσεις που έχουν αποδεχθεί (accepted = 1)
$sql = "SELECT name, surname, am, passed_percentage, gpa, uni1, uni2, uni3 FROM applications WHERE accepted = 1 ORDER BY gpa DESC";
$app_q = $conn->query($sql);
?>
 <?php
  // any logic you need at the top
  session_start();

  $conn = new mysqli("localhost", "root", "", "erasmustsel");
if ($conn->connect_error) die("Σφάλμα DB: " . $conn->connect_error);

$flag_q = $conn->query("SELECT value FROM settings WHERE name = 'results_published'");
$results_published = $flag_q && $flag_q->num_rows ? intval($flag_q->fetch_assoc()['value']) : 0;

if (!$results_published) {
    die("⛔ Τα αποτελέσματα δεν είναι ακόμη διαθέσιμα.");
}

?>


<!DOCTYPE html>
<html lang="el">
<head>
  <meta charset="UTF-8" />
  <title>Αποδεκτές Αιτήσεις Erasmus</title>
     <link rel="stylesheet" href="styles/rensposive.css">
                <link rel="stylesheet" href="styles/succsesors.css">

</head>
<body>
     <?php
   include 'navigation.php';
  ?>

  <h1>Αποδεκτές Αιτήσεις Erasmus</h1>
  <table>
    <thead>
      <tr>
        <th>Όνομα</th>
        <th>Επώνυμο</th>
        <th>Α.Μ.</th>
        <th>Ποσοστό Μαθημάτων</th>
        <th>Μ.Ο.</th>
        <th>1η Επιλογή</th>
        <th>2η Επιλογή</th>
        <th>3η Επιλογή</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($app_q->num_rows === 0): ?>
        <tr><td colspan="8">Δεν υπάρχουν αποδεκτές αιτήσεις.</td></tr>
      <?php else: ?>
        <?php while ($app = $app_q->fetch_assoc()): ?>
          <tr>
            <td><?= htmlspecialchars($app['name']) ?></td>
            <td><?= htmlspecialchars($app['surname']) ?></td>
            <td><?= htmlspecialchars($app['am']) ?></td>
            <td><?= htmlspecialchars($app['passed_percentage']) ?>%</td>
            <td><?= htmlspecialchars($app['gpa']) ?></td>
            <td><?= htmlspecialchars($app['uni1']) ?></td>
            <td><?= htmlspecialchars($app['uni2']) ?></td>
            <td><?= htmlspecialchars($app['uni3']) ?></td>
          </tr>
        <?php endwhile; ?>
      <?php endif; ?>
    </tbody>
  </table>
</body>
</html>
