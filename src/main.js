const viewContainer = document.querySelector("#view-container");


const pageHome = `<h3>Olá Guilherme!</h3>
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
                    <button type="button" class="btn btn-primary">Iniciar</button>`;

const pageCadastro = `<form action="">
                        <h3>Cadastro</h3>
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título da tarefa</label>
                            <input type="text" class="form-control needs-validation" id="titulo" max="50" placeholder="Digite aqui" required>
                        </div>
                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição da tarefa</label>
                            <textarea class="form-control" maxlength="250" id="descricao" required></textarea>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="categoria" class="form-label">Categoria</label>
                                <select class="form-select" id="categoria" required>
                                    <option selected disabled>Selecione</option>
                                    <option value="1">Casa</option>
                                    <option value="2">Trabalho</option>
                                    <option value="3">Faculdade</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="date" class="form-label">Data para conclusão</label>
                                <input type="date" class="form-control" id="date" required>
                            </div>
                        </div>
                        <div class="mb-3 col-12">
                            <button class="btn btn-primary" type="submit">Enviar</button>
                        </div>
                        </form>`;

const pageRegistros = `<table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Título</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Data Criação</th>
                                <th scope="col">Data para Conclusão</th>
                            </tr>
                        </thead>
                        <tbody class = "table-body">
                            
                        </tbody>
                        </table>`



    


//seletor de paginas
function page(pageIndex) {
    switch(pageIndex){
        case 'cadastro':
            viewContainer.innerHTML = pageCadastro;
            break;
        case 'home':
            viewContainer.innerHTML = pageHome;
            break;
        case 'registros':
            viewContainer.innerHTML = pageRegistros;
            break;
    }
}

//active para cada pagina no menu
const items = document.querySelectorAll(".nav-link");

for (let i = 0; i < items.length; i++) {
  const item = items[i];
  item.addEventListener("click", changeActiveClass);
}

function changeActiveClass(e)
{
  for (let i = 0; i < items.length; i++) {
    const item = items[i];
    item.classList.remove('active');
  }
  e.target.classList.add('active');
}

//buscar dados no banco
function loadDoc() {
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = () => {
        if(ajax.readyState == 4 && ajax.status == 200) {
            document.querySelector(".table-body").innerHTML = ajax.responseText;
        }
    }
    ajax.open("GET", "/src/getCadastro.php", true);
    ajax.send();
    
}

