<?php 

    class Database{
        // Parametre pripojenia k databáze
        private $host = 'localhost';
        private $db_name = 'Palffy_projekt';
        private $user_name = 'root';
        private $password = '';
        // Premenná na uloženie spojenia s databázou
        protected $connection;

        //public function __construct(){
            //$this->connection = $this->db_connection();
        //}
        // Destruktor na uzavretie spojenia s databázou, keď sa objekt zničí
        public function __destruct() {
            // Uzatvorenie spojenia s databázou
            $this->connection = null;
        }
        // Metóda na vytvorenie spojenia s databázou
        protected function db_connection(){
            try {
                //$pdo = new PDO('mysql:host=localhost;dbname=vaša_databáza', 'vaše_používateľské_meno', 'vaše_heslo');
                 // Vytvorenie nového inštancie PDO a nastavenie spojenia
                $this->connection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8", 
                                    $this->user_name, 
                                    $this->password
                                    );
                // Nastavenie režimu chýb PDO na varovanie
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                // Nastavenie predvoleného režimu načítania na načítanie objektov
                $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
                  // Vrátenie spojenia
                return $this->connection;
            }catch(PDOException $e){
                // V prípade chyby, vráti 0 a vypíše chybovú správu
                return 0;
                die("Chyba pripojenia k databáze: " . $e->getMessage());
            }
        }
    }

?>