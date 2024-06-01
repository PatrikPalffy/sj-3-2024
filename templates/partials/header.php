<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doma</title>
    <link rel="stylesheet" href="../assets/css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <header>
        <a href="home.php"><img class="logo" src="../assets/img/logo.png" alt="Bayern Logo"></a>
        <h1>Bayern München fanklub</h1>
        <nav class="main-nav">        

        <ul class="main-menu" id="main-menu">
        <?php
            $pages = array('Domov'=>'home.php',
            'Zostava'=>'Tím.php',
            'Galeria'=>'Galéria.php',
            'Kontakt'=>'kontakt.php',
            'Odhlasit'=>'logout.php'

            );

            foreach($pages as $page_name => $page_url){
              echo('<li><a href = "'.$page_url.'">'.$page_name.'</a></li>');
            }
            require('../_inc/functions.php');
        
       ?>
       </ul>
    </nav>
    </header>
