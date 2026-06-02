<!-- Adicionar título tamanho "h3" a tabela .-->
<h3>Usuários Cadastrados</h3>

<!-- Criar a tabela, adicionando a ela o tamanho da borda, e do espaçamento dos itens dentro dela. -->
<table border="1" cellpadding="3">

<!-- Adicionar a tabela, as colunas "ID", "Nome" e "Senha", para o cadastro de usuários. -->
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Senha</th>
    </tr>


    <?php
    // Selecionar e atribuir  a tabela "users" a $sqlUsuarios.
    $sqlUsuarios = "SELECT * FROM users";

    // Declara a variável " $resultadoUsuarios" e pega a tabela.
    $resultadoUsuarios = $conn->query($sqlUsuarios);
    
    
    while($linha = $resultadoUsuarios->fetch_assoc()){

        echo "
        <tr>
            <td>" . $linha["id"]."</td>
            <td>" . $linha["username"]."</td>
            <td>" . $linha["password"]."</td>
        </tr>
        ";

    }


    ?>

</table>