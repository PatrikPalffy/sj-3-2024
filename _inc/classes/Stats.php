<?php

    class Stats extends Database {

        private $db;

        // Konštruktor triedy, ktorý inicializuje pripojenie k databáze
        public function __construct() {
            $this->db = $this->db_connection();
        }

        // Metóda na výber všetkých záznamov z tabuľky "stats"
        public function select() {
            try {
                $db_query = "SELECT * FROM stats";
                $query = $this->db->query($db_query);
                $stats = $query->fetchAll();
                return $stats;
            } catch(PDOException $e) {
                echo($e->getMessage());
            }
        }

        // Metóda na získanie a vygenerovanie HTML tabuľky so štatistikami
        public function get_stats() {
            $stats = $this->select();
            $result = '';
           
            for ($i = 0; $i < count($stats); $i++) {
                $result .= '<tr bgcolor="RoyalBlue" align="center">';
                $result .= '<td>' . $stats[$i]->meno . '</td>';
                $result .= '<td>' . $stats[$i]->zapasy . '</td>';
                $result .= '<td>' . $stats[$i]->goly . '</td>';
                $result .= '<td>' . $stats[$i]->asistencia . '</td>';
                $result .= '<td>' . $stats[$i]->zlte_karty . '</td>';
                $result .= '<td>' . $stats[$i]->cervene_karty . '</td>';
                $result .= '</tr>';
            }
            return $result;
        }

        // Metóda na vymazanie záznamu z tabuľky "stats"
        public function delete() {
            try {
                $data = array(
                    'stats_id' => $_POST['delete_stats']
                );
                $query = "DELETE FROM stats WHERE id = :stats_id";
                $query_run = $this->db->prepare($query);
                $query_run->execute($data);
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }

        // Metóda na aktualizáciu záznamu v tabuľke "stats"
        public function update($id, $meno, $zapasy, $goly, $asistencia, $zlte_karty, $cervene_karty) {
            try {
                // Kontrola, či ID existuje
                $check_query = "SELECT * FROM stats WHERE id = :id";
                $check_stmt = $this->db->prepare($check_query);
                $check_stmt->execute(array(':id' => $id));
                if ($check_stmt->rowCount() > 0) {
                    $data = array(
                        'id' => $id,
                        'meno' => $meno,
                        'zapasy' => $zapasy,
                        'goly' => $goly,
                        'asistencia' => $asistencia,
                        'zlte_karty' => $zlte_karty,
                        'cervene_karty' => $cervene_karty
                    );
                    $query = "UPDATE stats SET meno = :meno, zapasy = :zapasy, goly = :goly, asistencia = :asistencia, zlte_karty = :zlte_karty, cervene_karty = :cervene_karty WHERE id = :id";
                    $query_run = $this->db->prepare($query);
                    $query_run->execute($data);
                    echo "Aktualizácia úspešná!";
                } else {
                    // ID neexistuje
                    echo "Neplatné ID!";
                }
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }

    }
?>
