<?php
include('partials/header.php');
?> 
<br>
<br>
<br>
<br>
<br>

<table bgcolor="black" >
        <tr bgcolor="RoyalBlue" align="center">
            <th width="150">Meno</th>
            <th width="150">Zápasy</th>
            <th width="150">Góly</th>
            <th width="150">Asistencia</th>
            <th width="150">Žlté karty</th>
            <th width="150">Červené karty</th>
        </tr>
        <?php
                    $stats_object = new Stats();
                    echo($stats_object->get_stats());
                    ?>
    </table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
    include_once('partials/footer.php')
?> 