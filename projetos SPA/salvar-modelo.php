<?php
// salvar-modelo.php (Lógica para salvar sessões)

    // Inclui a configuração de conexão (se não estiver já no index.php)
    // include('config.php'); 
    
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            // Recebe apenas o campo nome
            $nome = $_POST['nome_sessao']; 
            
            // SQL simplificado: apenas nome_sessao na tabela sessao
            $sql = "INSERT INTO sessao (nome_sessao) VALUES ('{$nome}')";
            
            $res = $conn->query($sql);
            if ($res == true) {
                print "<script>alert('Cadastrou Sessão com sucesso!');</script>";
                print "<script>location.href='?page=listar-sessao';</script>";
            } else {
                print "<script>alert('Não Cadastrou Sessão! Erro: " . $conn->error . "');</script>";
                print "<script>location.href='?page=cadastrar-sessao';</script>"; // Redireciona para o formulário de cadastro
            }
            break;
            
        case 'editar':
            $id = $_REQUEST['id_sessao'];
            $nome = $_POST['nome_sessao']; 
            
            $sql = "UPDATE sessao SET nome_sessao='{$nome}' WHERE id_sessao=".$id;
            $res = $conn->query($sql);
            
            if ($res == true) {
                print "<script>alert('Editou Sessão com sucesso!');</script>";
                print "<script>location.href='?page=listar-sessao';</script>";
            } else {
                print "<script>alert('Não foi possível editar Sessão! Erro: " . $conn->error . "');</script>";
                print "<script>location.href='?page=listar-sessao';</script>";
            }
            break;
            
        case 'excluir':
            $id = $_REQUEST['id_sessao'];

            $sql = "DELETE FROM sessao WHERE id_sessao=".$id;
            $res = $conn->query($sql);
            
            if ($res == true) {
                print "<script>alert('Excluiu Sessão com sucesso!');</script>";
                print "<script>location.href='?page=listar-sessao';</script>";
            } else {
                print "<script>alert('Não foi possível excluir Sessão! Erro: " . $conn->error . "');</script>";
                print "<script>location.href='?page=listar-sessao';</script>";
            }
            break;
    }
?>