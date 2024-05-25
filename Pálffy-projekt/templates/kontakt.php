<?php
include('partials/header.php');

if(isset($_SESSION['logged_in'])&&$_SESSION['is_admin']==true){
    header('Location: admin.php');
}
?>
<section class="p-5">
    
    <div class="wrapper">
        <form action="" method ="POST">
            <h1>Prihlásenie</h1>
            <div class="input-box">
                <input type="text1" name = "email" id = "email" placeholder="Email" required>
                <i class="bi bi-person-fill"></i>
                
            </div>
            <div class="input-box">
                <input type="password" name = "password" id = "password" placeholder="Heslo" required>
                <c class="bi bi-lock-fill"></c>

            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" class="btn" name = "user_login" value = "Odoslat">Login</button>
            <div class="register-link">
                <p>Nemáte konto?<a href="register.php">Register</a></p>
            </div>
        </form>
        <?php
                    if(isset($_POST['user_login'])){
                        $email = $_POST['email'];
                        $password = $_POST['password']; 

                        $user_object = new User();

                        $login_success = $user_object->login($email,$password);
                        //ak metóda vráti TRUE
                        if($login_success == true){
                            if($_SESSION['is_admin'] == 1){
                              header('Location: admin.php');
                            }
                            else{
                              header('Location: home.php');
                              die;
                            }
                      
                          }else{
                              echo 'Nesprávne meno alebo heslo';
                      
                          }

                    }
                ?>
    </div>
    </div>
</section> 


</body>
<?php
    include_once('partials/footer.php');
  ?>  


   
   
