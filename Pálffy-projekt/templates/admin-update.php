<?php
include('partials/header.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if form is submitted
    if (isset($_POST['update'])) {
        // Assuming you have the required data from the form
        $id = $_POST['id'];
        $meno = $_POST['meno'];
        $zapasy = $_POST['zapasy'];
        $goly = $_POST['goly'];
        $asistencia = $_POST['asistencia'];
        $zlte_karty = $_POST['zlte_karty'];
        $cervene_karty = $_POST['cervene_karty'];

       
            $stats = new Stats();
            $stats->update($id, $meno, $zapasy, $goly, $asistencia, $zlte_karty, $cervene_karty);
        
    }
}
?>

<body class="body p-2">
<div class="add_history"> 
    <div class="form-container"> 
        <h2>Update History</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="id">ID:</label><br>
            <input type="text" id="id" name="id"><br>
            <label for="meno">Meno:</label><br>
            <input type="text" id="meno" name="meno"><br>
            <label for="zapasy">Zapasy:</label><br>
            <input type="text" id="zapasy" name="zapasy"><br>
            <label for="goly">Goly:</label><br>
            <input type="text" id="goly" name="goly"><br>
            <label for="asistencia">Asistencia:</label><br>
            <input type="text" id="asistencia" name="asistencia"><br>
            <label for="zlte_karty">Zlte karty:</label><br>
            <input type="text" id="zlte_karty" name="zlte_karty"><br>
            <label for="cervene_karty">Cervene karty:</label><br>
            <input type="text" id="cervene_karty" name="cervene_karty"><br>
            
            <input type="submit" name="update" value="Update">
        </form>
    </div>

</div>


</body>
</html>