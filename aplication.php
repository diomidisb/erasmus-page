




<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <title>Αίτηση Erasmus</title>
    <link rel="icon" type="image/jpeg" href="media/icons/favicon.jpeg">
     
    <link rel="stylesheet" href="styles/body index.css"> 
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/aplication.css">
    <link rel="stylesheet" href="styles/rensposive.css">
</head>

<?php session_start(); 





// Έλεγχος αν είναι συνδεδεμένος
if (!isset($_SESSION['username'])) {
    header("Location: backend/noaccses.php");
    exit;
}

// Σύνδεση με τη βάση
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "erasmustsel";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Σφάλμα σύνδεσης: " . $conn->connect_error);
}

// Λήψη στοιχείων χρήστη από βάση
$username = $_SESSION['username'];

$sql = "SELECT name, surname, am FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $userData = $result->fetch_assoc();
} else {
    $_SESSION['error_message'] = "Πρόβλημα κατά την ανάκτηση των στοιχείων χρήστη.";
    header("Location: index.php");
    exit;
}

$stmt->close();




$sql = "SELECT start_date, end_date FROM application_period ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

$today = date('Y-m-d');
$access_allowed = false;
$message = "";

// Έλεγχος εάν έχει οριστεί περίοδος
if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $start = $row['start_date'];
    $end = $row['end_date'];

    // Αν σημερινή ημερομηνία είναι εντός της περιόδου
    if ($today >= $start && $today <= $end) {
        $access_allowed = true;
    } else {
        $message = "⚠️ Η περίοδος αιτήσεων είναι από $start έως $end. Δεν μπορείτε να κάνετε αίτηση αυτή τη στιγμή.";
    }
} else {
    $message = "⚠️ Δεν έχει οριστεί περίοδος αιτήσεων από τον διαχειριστή.";
}

$conn->close();



?>





<header>


  <?php
  if (isset($_SESSION['error_messageee'])) {
    echo '<div class="error">' . htmlspecialchars($_SESSION['error_messageee']) . '</div>';
    unset($_SESSION['error_messageee']);
}
?>
  <?php
  if (isset($_SESSION['success_messageee'])) {
    echo '<div class="success">' . htmlspecialchars($_SESSION['success_messageee']) . '</div>';
    unset($_SESSION['success_messageee']);
}
?>
   
      <?php
   include 'navigation.php';
  ?>

      
</header>
<body>

<?php if (!$access_allowed): ?>
  <div style="text-align:center; padding:20px; background-color:#fff3cd; color:#856404; border:1px solid #ffeeba; margin:20px; border-radius:10px;">
    <p><?= htmlspecialchars($message) ?></p>
  </div>
<?php else: ?>




 <main class="form-container">
      <h1>Φόρμα Αίτησης Erasmus</h1>
      <form method="POST" enctype="multipart/form-data" action="backend/submit-aplication.php">

       
        <label for="name">Όνομα:</label>
<input type="text" id="name" name="name" 
    value="<?php echo htmlspecialchars($userData['name']); ?>" 
    readonly required>

<label for="surname">Επίθετο:</label>
<input type="text" id="surname" name="surname" 
    value="<?php echo htmlspecialchars($userData['surname']); ?>" 
    readonly required>

<label for="am">Αριθμός Μητρώου:</label>
<input type="text" id="am" name="am" 
    value="<?php echo htmlspecialchars($userData['am']); ?>" 
    readonly required>
  
        
        <label for="passed-percentage">Ποσοστό περασμένων μαθημάτων (%):</label>
        <input type="number" id="passed-percentage" name="passed-percentage" min="0" max="100" required>
  
        <label for="gpa">Μέσος Όρος περασμένων μαθημάτων:</label>
        <input type="number" step="0.01" id="gpa" name="gpa" required>
  
        
        <fieldset>
          <legend>Επίπεδο Αγγλικών:</legend>
          <label><input type="radio" name="english-level" value="A1" required> A1</label>
          <label><input type="radio" name="english-level" value="A2"> A2</label>
          <label><input type="radio" name="english-level" value="B1"> B1</label>
          <label><input type="radio" name="english-level" value="B2"> B2</label>
          <label><input type="radio" name="english-level" value="C1"> C1</label>
          <label><input type="radio" name="english-level" value="C2"> C2</label>
        </fieldset>
  
        <fieldset>
          <legend>Γνώση επιπλέον ξένων γλωσσών:</legend>
          <label><input type="radio" name="other-languages" value="yes" required> ΝΑΙ</label>
          <label><input type="radio" name="other-languages" value="no"> ΟΧΙ</label>
        </fieldset>
  <?php
  // Λήψη συνεργαζόμενων πανεπιστημίων
$universities = [];
$conn = new mysqli($host, $user, $pass, $dbname);
$sql = "SELECT university_id, university_name, country FROM universities";
$result = $conn->query($sql);
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $universities[] = $row;
    }
}
$conn->close();

?>
        
        <label for="uni1">Πανεπιστήμιο - 1η επιλογή:</label>
<select id="uni1" name="uni1" required>
    <option value="">-- Επιλογή --</option>
    <?php foreach ($universities as $uni): ?>
        <option value="<?php echo htmlspecialchars($uni['university_name']); ?>">
            <?php echo htmlspecialchars($uni['university_name']); ?>
        </option>
    <?php endforeach; ?>
</select>

<label for="uni2">Πανεπιστήμιο - 2η επιλογή:</label>
<select id="uni2" name="uni2">
    <option value="">-- Επιλογή --</option>
    <?php foreach ($universities as $uni): ?>
        <option value="<?php echo htmlspecialchars($uni['university_name']); ?>">
            <?php echo htmlspecialchars($uni['university_name']); ?>
        </option>
    <?php endforeach; ?>
</select>

<label for="uni3">Πανεπιστήμιο - 3η επιλογή:</label>
<select id="uni3" name="uni3">
    <option value="">-- Επιλογή --</option>
    <?php foreach ($universities as $uni): ?>
        <option value="<?php echo htmlspecialchars($uni['university_name']); ?>">
            <?php echo htmlspecialchars($uni['university_name']); ?>
        </option>
    <?php endforeach; ?>
</select>

  
        
        <label for="grades">Αναλυτική Βαθμολογία:</label>
        <input type="file" id="grades" name="grades" required>
  
        <label for="english-cert">Πτυχίο Αγγλικών:</label>
        <input type="file" id="english-cert" name="english-cert">
  
        <label for="other-certs">Πτυχία Άλλων Γλωσσών:</label>
        <input type="file" id="other-certs" name="other-certs[]" multiple>

  
       
        <label class="terms">
          <input type="checkbox" name="terms" required>
          Αποδοχή των όρων
        </label>
  
        <button type="submit">Υποβολή Αίτησης</button>
            </form>
    </main>





 
<?php endif; ?>






   
  </body>

<footer>
    <p>© 2025 Πανεπιστήμιο Πελοποννήσου - Erasmus</p>
  </footer>



