<h1>Cadastrar Clientes</h1>
<form action="?page=salvar-clientes" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
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