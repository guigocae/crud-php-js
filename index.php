<?php 
require_once "./src/Cadastro.php";

$c = new Cadastro("crudpdo", "localhost", "root", "");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    
</head>
<body>
    <head>
        <nav class="navbar bg-dark border-bottom border-body container" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                My CRUD</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav text-light">
                        <li class="nav-item ">
                        <a class="nav-link" aria-current="page" href="#" onclick="page('home')" id="pg-home">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#" onclick="page('cadastro')" id="pg-cadastro">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#" onclick="page('registros'); loadDoc()">Registros</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </head>
    <main class="container bg-body-tertiary " id="view-container">
        <h3>Olá Guilherme!</h3>
        <p>Olá! Este será o seu ambiente para registrar tarefas a serem feitas ou concluídas</p>
        <h5>Como Usar:</h5>
        <p>Para usar esse modelo de CRUD, você precisa ir até a página de formulário, onde terão campos a serem preenchidos:</p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item list-group-item-action">Título da tarefa</li>
            <li class="list-group-item list-group-item-action">Descrição da tarefa</li>
            <li class="list-group-item list-group-item-action">Categoria</li>
            <li class="list-group-item list-group-item-action">Data para conclusão</li>
        </ul>
        <p style="margin-top: 10px;">Assim que você tiver preenchido todos os campos, a tupla será adicionada à página de registros. Você tem total liberdade para excluir ou editar qualquer registro da tabela, inclusive editar a data para conclusão. Qualquer dúvida ou sugestão que tiver, pode enviar uma mensagem na página de contato.</p>
        <button type="button" class="btn btn-primary" onclick="page('cadastro')">Iniciar</button>
    </main>
    
    

    <script src="src/main.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>