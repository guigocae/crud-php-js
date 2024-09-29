<?php
    try {
        $pdo = new PDO("mysql:dbname=crud;host=localhost", "root", "");

    } catch (PDOException $e){
        echo "DB connection error: \n".$e->getMessage();

    } catch (Exception $e){
        echo "Generic error: \n".$e->getMessage();

    }

?>