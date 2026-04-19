 
 

 
 <link rel="stylesheet" href="styles/navigation.css">
 
 
 <nav class="navbar">
   <?php
     $conn = new mysqli("localhost", "root", "", "erasmustsel");
if ($conn->connect_error) die("Σφάλμα DB: " . $conn->connect_error);

$flag_q = $conn->query("SELECT value FROM settings WHERE name = 'results_published'");
$results_published = $flag_q && $flag_q->num_rows ? intval($flag_q->fetch_assoc()['value']) : 0;

 ?>
 
 
    <div class="navbar-section logo">
          <img  src="media/photos/Pelopas_-copy.png" alt="Λογότυπο Πανεπιστημίου">
        </div>
      
        <ul class="navbar-section nav-links">
            <li><a class="now" href="index.php">HOME</a></li>
            <li ><a href="reqs.php">REQUIREMENTS</a></li>

            <?php if ($results_published):?>
              <li ><a href="succsesors.php">SUCCSESORS</a></li>
              <?php endif; ?>
              
              
            
          <?php if (isset($_SESSION['username'])): ?>
             <li><a href="aplication.php">APPLICATION</a></li>
             <?php endif; ?>

             <li><a href="more.php">MORE</a></li>
          </ul>


          <?php if (isset($_SESSION['username'])): ?>
             <li class="dropdown">
             <ul class="navbar-section auth-links">
              <a href="#" class="dropbtn">
           <?php echo htmlspecialchars($_SESSION['username']); ?> 
        </a>
        <div class="dropdown-content">
          <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
            <li><a href="backend/set_period.php">Αλλαγή <br> ημερομηνίας</a></li>
            <li><a href="backend/view_applications.php">Διαχείριση<br> αιτήσεων</a></li>
             <li><a href="backend/manage_universities.php">Διαχείριση <br> Πανεπιστημίων</a></li>
            <?php endif; ?>

      
          <li><a href="backend/profile.php">Προφίλ</a></li>
             <li><a href="backend/logout.php">Αποσύνδεση</a></li>
        </div>
        
            
            <?php else: ?>
 <ul class="navbar-section auth-links">
    <li><a href="login.php">Login</a></li>
    <li><a href="sign-up.php">Sign-Up</a></li>
    </ul>

<?php endif; ?>
      
   
    
      </nav>