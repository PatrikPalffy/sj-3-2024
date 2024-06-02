<?php

// Definícia triedy Page
class Page{
    // Privátna premenná pre názov stránky
    private $page_name;

    // Metóda na nastavenie názvu stránky
    public function set_page_name($page_name)
    {
        $this->page_name = $page_name; // Nastavenie hodnoty pre premennú $page_name
    }

    // Metóda na pridanie štýlových súborov do stránky
    function add_stylesheet() {
        // Štandardné štýly a štýly z Font Awesome
        $result =  '<link rel="stylesheet" href="../assets/css/style.css">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
        
        // Rozšírené štýly pre konkrétne stránky
        switch($this->page_name){
            case 'home':
            case 'kontakt':
            case 'kontakt-update':
            case 'register':
            case 'login':
            case 'portfolio':
            case 'qna':
            case 'thankyou':
                $result .= '<link rel="stylesheet" href="../assets/css/style1.css">'; // Špecifické štýly pre danú stránku
                break;
        }
        return $result; // Vrátenie výsledku
    }

    // Metóda na pridanie skriptov do stránky
    function add_scripts(){
        // Základný skript
        $result = '<script src="../assets/js/script.js"></script>';
        
        // Rozšírené skripty pre konkrétne stránky
        switch($this->page_name){
            case 'home':
            case 'qna':
                $result .= '<script src="../assets/js/script.js"></script>'; // Skript pre konkrétnu stránku
                break;  
        }
        return $result; // Vrátenie výsledku
    }
    
    // Metóda na presmerovanie na domovskú stránku
    function redirect_homepage(){
        header("Location: templates/home.php"); // Presmerovanie na domovskú stránku
        die("Nepodarilo sa nájsť Domovskú stránku"); // Vypíše chybu ak sa nepodarilo presmerovať
    }

}

?>
