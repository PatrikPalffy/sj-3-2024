
<?php 
 include_once('partials/header.php'); 
 ?>
<section class="p-5">
    
    <div class="wrapper">
        <form action="">
            <h1>Prihlásenie</h1>
            <div class="input-box">
                <input type="text1" placeholder="Používateľské meno" required>
                <i class="bi bi-person-fill"></i>
                
            </div>
            <div class="input-box">
                <input type="password" placeholder="Heslo" required>
                <c class="bi bi-lock-fill"></c>

            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="register-link">
                <p>Nemáte konto?<a href="register.html">Register</a></p>
            </div>
        </form>
    </div>
    </div>
</section> 


</body>
<?php
    include_once('partials/footer.php');
  ?>  


   
   
