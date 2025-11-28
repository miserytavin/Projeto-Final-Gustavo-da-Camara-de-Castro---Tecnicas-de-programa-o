<?php 
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $cliente_id = $_POST['cliente_id_cliente'];
            $funcionario_id = $_POST['funcionario_id_funcionario'];
            $sessao_id = $_POST['sessao_id_sessao']; // 
            $data_venda = $_POST['data_venda'];
            $valor_venda = $_POST['valor_venda'];
            $sql = "INSERT INTO venda (cliente_id_cliente, funcionario_id_funcionario, sessao_id_sessao, data_venda, valor_venda) 
                    VALUES ('{$cliente_id}', '{$funcionario_id}', '{$sessao_id}', '{$data_venda}', '{$valor_venda}')";
            
            $res = $conn->query($sql);
            
            if($res == true){
                print "<script>alert('Cadastrou Horário com sucesso!');</script>";
                print "<script>location.href='?page=listar-horario';</script>";
            }else{
                print "<script>alert('Não Cadastrou Horário! Erro: " . $conn->error . "');</script>";
                print "<script>location.href='?page=cadastrar-horario';</script>";
            }
            break;
    }
?>