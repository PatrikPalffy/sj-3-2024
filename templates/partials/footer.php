<a href="tel:0944832177"><i class="fa-solid fa-phone fa-beat" style="color: #000000;"></i></a>
    <a href="mailto:palffypatrik3@gmail.com"><i class="fa-solid fa-envelope fa-beat" style="color: #000000;"></i></a>
 
    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>
    <footer>
        <div class="footerContainer">
            <div class="socialIcons">
                <a href="https://www.instagram.com/fcbayern/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.facebook.com/fcbayern.en"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.youtube.com/@fcbayern"><i class="fa-brands fa-youtube"></i></a>
            </div>
            <?php
            $pages = array('Domov'=>'home.php',
            'Zostava'=>'Tím.php',  
            'Galeria'=>'Galéria.php',
            'Kontakt'=>'kontakt.php',
             
            );
            foreach($pages as $page_name => $page_url){
                echo('<p><a href = "'.$page_url.'">'.$page_name.'</a></p>');
            }
        ?>
        </div>
        <div class="footerBottom">
            <p>Copyright &copy;          Toto je oficiálna stránka fanklubu</p>
        </div>
    </footer>
</body>
<script src="../assets/js/script.js"></script>
</html>
