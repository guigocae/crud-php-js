<?php
    require_once "Cadastro.php";

    $c = new Cadastro("crudpdo", "localhost", "root", "");

    $dados = $c->buscarDados();
    if(count($dados) > 0){
        for($i = 0; $i < count($dados); $i++){
            echo "<tr>";
            foreach($dados[$i] as $key => $value){
                if($key != "id"){
                    echo "<td>$value</td>";
                }
            }
            echo "<td><i class='bi bi-trash-fill'></i></td>";
            echo "</tr>";
        }
    }
?>