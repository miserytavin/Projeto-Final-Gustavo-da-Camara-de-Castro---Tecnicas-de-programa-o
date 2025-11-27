<h1>Editar Clientes</h1>
<?php
	$sql = "SELECT * FROM cliente WHERE id_cliente=".$_REQUEST['id_cliente'];

	$res = conn->query($sql);

	$row = $res->fetch_object();
?>
<form action="?page=salvar_cliente" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_cliente" value="<?php print $row->id_marca;?>">
	<div class="mb-3">
		<label>Nome
			<input type="text" name="nome_cliente" class="form-control">
		</label>
	</div>
		<div class="mb-3">
		<label>Cpf
			<input type="text" name="cpf_cliente" class="form-control">
		</label>
	</div>
	<div class="mb-3">
		<label>Email
			<input type="email" name="email_cliente" class="form-control">
		</label>
	</div>
	<div class="mb-3">
		<label>Telefone
			<input type="text" name="telefone_cliente" class="form-control">
		</label>
	</div>
	<div class="mb-3">
		<label>Endereço
			<input type="text" name="endereco_cliente" class="form-control">
		</label>
	</div>
	<div class="mb-3">
		<label>Data de nascimento
			<input type="date" name="dt_nasc_cliente" class="form-control">
		</label>
	</div>
	<div>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>