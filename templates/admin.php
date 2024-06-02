<?php
include('partials/header.php'); // Zahrnutie hlavičky stránky

// Skontrolovanie, či je používateľ prihlásený
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true) {
    header('Location: 404.php'); // Presmerovanie na 404 stránku, ak nie je prihlásený
    exit(); // Ukončenie skriptu
}
?>
<main>
    <section class="container">
        <div class="row">
            <div class="col-100 text-left">
                <h1>Admin rozhranie</h1>

                <?php
                    // Skontrolovanie, či je používateľ admin
                    if ($_SESSION['is_admin'] == 1) {
                        include('admin-stats.php'); // Zahrnutie súboru s administrátorskými štatistikami
                    }
                    // #include('partials/admin-qna.php'); // (Nepoužitý riadok, možná budúca funkcionalita)
                ?>
                
            </div>
        </div>
    </section> 
</main>
<?php
include('partials/footer.php'); // Zahrnutie pätičky stránky
?>
