<h2>Statistiky</h2>
<?php
    $stats_object = new Stats();
    $stats = $stats_object->select();
    if(isset($_POST['delete_stats'])){
        $stats_id = $_POST['delete_stats'];
        $stats_object->delete($stats_id);
        header('Location: admin.php');
        exit();
    }





    echo '<table class="admin-table">';
    echo '<tr><th>id</th>
                <th>Name</th>
                <th>Zapasy</th>
                <th>Goly</th>
                <th>Asistencia</th>
                <th>Zlte karty</th>
                <th>Cervene karty</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>';
    foreach($stats as $s){
 
        echo '<tr>';
        echo '<td>'.$s->id;'</td>';
        echo '<td>'.$s->meno;'</td>';
        echo '<td>'.$s->zapasy;'</td>';
        echo '<td>'.$s->goly;'</td>';
        echo '<td>'.$s->asistencia;'</td>';
        echo '<td>'.$s->zlte_karty;'</td>';
        echo '<td>'.$s->cervene_karty;'</td>';
        echo '<td>
                <form action="" method="POST">
                    <button type="submit" name="delete_stats" value="'.$s->id.'"'.'>Vymazať</button>
                </form>
                </td>';
        echo '<td>
                <form action="admin-update.php" method="POST">
                    <button type="submit" name="edit_stats" value="'.$s->id.'"'.'>Editovať</button>
                </form>
             </td>';
        echo '</tr>';
    }

    echo '</table>';
?>