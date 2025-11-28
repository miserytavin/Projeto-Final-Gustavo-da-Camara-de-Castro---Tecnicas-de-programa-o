📄 README.md - Sistema GuSPA
Este documento contém os passos necessários para configurar e executar o Sistema GuSPA em seu ambiente de desenvolvimento local usando o XAMPP.

🛠️ Pré-requisitos
Certifique-se de ter o XAMPP instalado em seu computador.

🚀 Passos para Configuração e Execução
Siga os passos abaixo para colocar o sistema em funcionamento:

Baixar os Arquivos:

Baixe todos os arquivos do projeto (incluindo os arquivos PHP, config.php, e a DOCUMENTACAO_COMPLEMENTAR.md).

Organizar os Arquivos:

Crie uma única pasta para o projeto (ex: projetospa).

Coloque todos os arquivos baixados dentro desta pasta.

Localizar a Pasta htdocs:

Coloque a pasta do projeto (guspacrud ou o nome que você escolheu) dentro do diretório htdocs da sua instalação XAMPP.

Exemplo de caminho: C:\xampp\htdocs\projetospa

Iniciar o XAMPP:

Execute o XAMPP Control Panel.

Ligar os Serviços:

Inicie (clique em Start) os módulos Apache e MySQL. Eles devem ficar verdes.

Criar o Banco de Dados:

No XAMPP Control Panel, clique no botão Admin ao lado do módulo MySQL. Isso abrirá o phpMyAdmin no seu navegador.

Crie um novo banco de dados com o nome exato que está definido no seu arquivo config.php, que é: concessionaria2122m.

Observação: A estrutura das tabelas (SQL) não estava entre os arquivos, mas você pode usar a seção "Estrutura do Banco de Dados" da DOCUMENTACAO_COMPLEMENTAR.md para criar as tabelas necessárias (funcionario, cliente, marca, modelo, venda) com as colunas especificadas.

Acessar o Sistema:

Abra seu navegador e digite localhost

O sistema principal será carregado.

📝 Documentação Complementar
A documentação do projeto, incluindo detalhes sobre o CRUD e a estrutura do banco de dados, pode ser encontrada no arquivo:

DOCUMENTACAO_COMPLEMENTAR.md
