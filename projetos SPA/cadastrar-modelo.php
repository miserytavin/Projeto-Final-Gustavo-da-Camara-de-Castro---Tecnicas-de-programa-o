<h1>Cadastrar sessão</h1>
<form action="?page=salvar-sessao" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome
            <input type="text" name="nome_sessao" class="form-control">
        </label>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">
            Cadastrar Sessão
        </button>
        <a href="?page=index.php" class="btn btn-secondary">
            Voltar
        </a>
    </div>
</form>