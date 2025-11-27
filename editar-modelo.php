<?php
$id_sessao = $_REQUEST['id_sessao']; 
$sql = "SELECT id_sessao, nome_sessao FROM sessao WHERE id_sessao=".$id_sessao; 
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<h1>Editar sessão</h1>
<form action="?page=salvar-sessao" method="POST">
    <input type="hidden" name="acao" value="editar">
    
    <input type="hidden" name="id_sessao" value="<?php echo $row->id_sessao; ?>">
    
    <div class="mb-3">
        <label>Nome
            <input type="text" name="nome_sessao" class="form-control" value="<?php echo $row->nome_sessao; ?>">
        </label>
    </div>      
    <div>
        <button type="submit" class="btn btn-primary">
            Editar Sessão
        </button>
        <a href="?page=listar-sessao" class="btn btn-secondary">
            Voltar
        </a>
    </div>
</form>