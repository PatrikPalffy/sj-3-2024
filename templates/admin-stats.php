<h2>Statistiky</h2>
<?php
    $stats_object = new Stats(); // Vytvorenie inštancie triedy Stats
    $stats = $stats_object->select(); // Načítanie všetkých štatistík

    // Ak bol odoslaný formulár na vymazanie štatistiky
    if (isset($_POST['delete_stats'])) {
        $stats_id = $_POST['delete_stats']; // Získanie ID štatistiky na vymazanie
        $stats_object->delete($stats_id); // Vymazanie štatistiky
        header('Location: admin.php'); // Presmerovanie na stránku admin.php
        exit();
    }

    // Vytvorenie HTML tabuľky
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
    
    // Prechádza cez každý záznam v štatistikách
    foreach ($stats as $s) {
        echo '<tr>';
        echo '<td>' . $s->id . '</td>';
        echo '<td>' . $s->meno . '</td>';
        echo '<td>' . $s->zapasy . '</td>';
        echo '<td>' . $s->goly . '</td>';
        echo '<td>' . $s->asistencia . '</td>';
        echo '<td>' . $s->zlte_karty . '</td>';
        echo '<td>' . $s->cervene_karty . '</td>';
        echo '<td>
                <form action="" method="POST">
                    <button type="submit" name="delete_stats" value="' . $s->id . '">Vymazať</button>
                </form>
              </td>';
        echo '<td>
                <form action="admin-update.php" method="POST">
                    <button type="submit" name="edit_stats" value="' . $s->id . '">Editovať</button>
              </form>
             </td>';
        echo '</tr>';
    }

    echo '</table>';
?>
