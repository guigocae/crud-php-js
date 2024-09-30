<?php
    Class Cadastro{

        private $pdo;

        public function __construct($dbname, $host, $user, $pass)
        {
            try{
                $this->pdo = new PDO("mysql:dbname=$dbname;host=$host", $user, $pass);

            } catch(PDOException $e){
                echo "DB connection error: ".$e->getMessage(); 
                exit();

            } catch(Exception $e){
                echo "Generic error: ".$e->getMessage();
                exit();
            }
        }

        public function buscarDados()
        {
            $res = array();
            $cmd = $this->pdo->query("SELECT * FROM 'cadastros' ORDER BY 'id'");
            $res = $cmd->fetchAll(PDO::FETCH_ASSOC);

            return $res;
        }


    }



?>