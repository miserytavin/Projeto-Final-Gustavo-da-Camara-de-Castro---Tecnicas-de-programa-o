<?php
    // Inclui o arquivo de configuração e conexão com o banco de dados
    // Certifique-se de que 'config.php' está configurado corretamente.
    include("config.php"); 
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema GuSPA - Concessionária</title> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style>
        /* Estilos básicos para garantir que o rodapé fique no final da página */
        .min-vh-100 {
            min-height: 100vh;
        }
        .content-area {
            padding-top: 20px;
            padding-bottom: 20px;
            flex-grow: 1; /* Permite que a área de conteúdo preencha o espaço restante */
        }
        /* Adicionando um pequeno espaçamento no topo do container principal */
        .container.content-area {
            margin-top: 20px;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">GuSPA</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Clientes
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=cadastrar-cliente">Cadastrar Cliente</a></li>
                        <li><a class="dropdown-item" href="?page=listar-cliente">Listar Clientes</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Funcionários
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=cadastrar-funcionario">Cadastrar Funcionário</a></li>
                        <li><a class="dropdown-item" href="?page=listar-funcionario">Listar Funcionários</a></li>
                    </ul>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sessões
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=cadastrar-sessao">Cadastrar Sessão</a></li>
                        <li><a class="dropdown-item" href="?page=listar-sessao">Listar Sessões</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Horários Marcados
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=cadastrar-horario">Cadastrar Horário</a></li>
                        <li><a class="dropdown-item" href="?page=listar-horario">Listar Horários</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="container content-area">
    <div class="row">
        <div class="col-lg-12">
            <?php
                switch (@$_REQUEST['page']) {
                    
                    case 'cadastrar-cliente':
                    case 'listar-cliente':
                    case 'editar-cliente':
                    case 'salvar-cliente':
                        include($_REQUEST['page'] . '.php');
                        break;
                    case 'cadastrar-funcionario':
                    case 'listar-funcionario':
                    case 'editar-funcionario':
                    case 'salvar-funcionario':
                        include($_REQUEST['page'] . '.php');
                        break;
                    case 'cadastrar-sessao':
                        include('cadastrar-modelo.php');
                        break;
                    case 'listar-sessao':
                        include('listar-modelo.php');
                        break;
                    case 'editar-sessao':
                        include('editar-modelo.php');
                        break;
                    case 'salvar-sessao':
                        include('salvar-modelo.php');
                        break;
                    case 'cadastrar-horario':
                        include('cadastrar-vendas.php');
                        break;
                    case 'listar-horario':
                        include('listar-vendas.php');
                        break;
                    case 'editar-horario':
                        include('editar-vendas.php');
                        break;
                    case 'salvar-horario':
                        include('salvar-vendas.php');
                        break;

                    default:
                        print "<h1>Seja bem vindo ao sistema da GuSPA</h1>";
                        break;
                }
            ?>
        </div>
    </div>
</main>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>