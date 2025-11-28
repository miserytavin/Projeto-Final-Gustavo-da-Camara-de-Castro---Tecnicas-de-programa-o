<?php

$sql = "SELECT id_sessao, nome_sessao FROM sessao"; 
$res = $conn->query($sql);

$qtd = $res->num_rows;

?>
<h1>Lista de Sessões</h1>
<?php
if($qtd > 0){
    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    print "<table class='table table-bordered table-striped table-hover'>";
    print "<thead>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>Ação</th>";
    print "</tr>";
    print "</thead>";
    print "<tbody>";
    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->id_sessao."</td>";
        print "<td>".$row->nome_sessao."</td>";
        print "<td>
                <button	class='btn btn-success' onclick=\"
                    location.href='?page=editar-sessao&id_sessao={$row->id_sessao}';\">Editar</button>

                <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-sessao&acao=excluir&id_sessao={$row->id_sessao}';}else{false;}\">Excluir</button>

               </td>";

        print "</tr>";

    }
    print "</tbody>";
    print "</table>";
    print"<a href='?page=index.php' class='btn btn-secondary'>Voltar</a>";
}else{
    print "<p class='alert alert-danger'>Não encontrou resultados.</p>";
}
?>