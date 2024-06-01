<?php
    include('partials/header.php');
    

    $user_object = new User();

    // Spracovanie údajov z formulára po odoslaní
    if(isset($_POST['user_register'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        

        // Kontrola, či sa zadané heslá zhodujú
        if($password === $confirm_password) {
            // Volanie metódy register() na vytvorenie používateľa
            if($user_object->register($email, $password)) {
                // Registrácia bola úspešná
                echo "<p>Registrácia bola úspešná. Teraz sa môžete prihlásiť.</p>";
            } else {
                // Registrácia zlyhala
                echo "<p>Registrácia zlyhala. Skúste to prosím znova.</p>";
            }
        } else {
            // Heslá sa nezhodujú
            echo "<p>Heslá sa nezhodujú. Skúste to prosím znova.</p>";
        }
    }
?> 

<div class="box">
  <div class="cont1">
    <form id="registerForm" class="bayern-form" action="" method="Post">
      <h2>Registrácia</h2>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <p id="emailError" class="error-message"></p>
      </div>
     
      <div class="input-group">
        <label for="password">Heslo</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="input-group">
        <label for="confirm_password">Confirm Heslo</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
      </div>
      
      
      <button type="submit" name="user_register">Register</button>
    </form>
  </div>
</div>
  
  <?php
    include_once('partials/footer.php');
  ?>  