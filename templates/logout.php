<?php
include('partials/header.php'); // Zahrnutie hlavičky stránky
?>
<main>
    <section class="container">
        <div class="row">
            <div class="col-100 text-left">
              
                <?php
                    unset($_SESSION['logged_in']); // Odhlásenie používateľa, odstránenie položky 'logged_in' zo session
                    header('Location: kontakt.php'); // Presmerovanie na stránku kontakt.php
                    exit(); // Ukončenie skriptu
                ?>
                
            </div>
        </div>
    </section> 
</main>
<?php
include('partials/footer.php'); // Zahrnutie pätičky stránky
?>
