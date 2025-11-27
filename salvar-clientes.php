<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$nome = $_POST['nome_cliente'];
			$email = $_POST['email_cliente'];
			$telefone = $_POST['telefone_cliente'];
			$endereco = $_POST['endereco_cliente'];
			$dt_nasc = $_POST['dt_nasc_cliente'];

			$sql = "INSERT INTO cliente (nome_cliente, email_cliente, telefone_cliente, endereco_cliente, dt_nasc_cliente)
					VALUES ('{$nome}','{$email}','{$telefone}','{$endereco}','{$dt_nasc}')";

			$res = $conn->query($sql);

			if($res == true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=listar-clientes';</script>";
			}else{
				print "<script>alert('Não Cadastrou!');</script>";
				print "<script>location.href='?page=listar-clientes';</script>";
			}
			break;
		
	}