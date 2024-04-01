<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registrácia</title>
  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
  <header>
    <a href="home.html"><img class="logo" src="img/logo.png" alt="Bayern Logo"></a>
    <h1>Bayern München fanklub</h1>
    <nav>
        <ul>
            <li><a href="home.html">Domov</a></li>
            <li><a href="Tím.html">Zostava</a></li>
            <li><a href="Galéria.html">Galéria</a></li>
            <li><a href="kontakt.html">Prihlásenie</a></li>
        </ul>
    </nav>
</header>

<div class="box">
  <div class="cont1">
    <form id="registerForm" class="bayern-form" onsubmit="return validateForm()">
      <h2>Registrácia</h2>
      <div class="input-group">
        <label for="fullName">Celé meno</label>
        <input type="text" id="fullName" name="fullName" required>
      </div>
      <div class="input-group">
        <label for="username">Používateľské meno</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <p id="emailError" class="error-message"></p>
      </div>
      <div class="input-group">
        <label for="phoneNumber">Tel.číslo</label>
        <input type="text" id="phoneNumber" name="phoneNumber" required>
      </div>
      <button type="submit">Register</button>
    </form>
  </div>
</div>
  <script src="js/script.js"></script>
  <footer>
    <div class="footerContainer">
        <div class="socialIcons">
            <a href="https://www.instagram.com/fcbayern/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.facebook.com/fcbayern.en"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.youtube.com/@fcbayern"><i class="fa-brands fa-youtube"></i></a>
            
        </div>
        <div class="footerNav">
            <ul>
                <li><a href="home.html">Domov</a></li>
                <li><a href="Tím.html">Zostava</a></li>
                <li><a href="Galéria.html">Galéria</a></li>
                <li><a href="kontakt.html">Prihlásenie</a></li>
            </ul>
           
            
            
        </div>
    </div>
    <div class="footerBottom">
        <p>Copyright &copy; Toto je oficiálna stránka fanklubu</p>
    </div>
    </footer>
</body>
</html>
