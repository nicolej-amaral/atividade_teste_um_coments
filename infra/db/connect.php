
<?php

    // Criar variavéis e atribuir os nomes delas, como: $pass = root.
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "sistema_simples";

    // Conectar banco de dados.
    $conn = new mysqli($host,$user,$pass,$db);

    // Adicionar condição: se der erro e o banco de dados não conectar, isso acontecerá.
    if ($conn->connect_error){
        echo "<script> console.log('erro na conexão com o banco') </script>";

    // Se não, mostrar que a conexão foi um sucesso
    }else{
        echo "<script> console.log('conexão com o banco foi um sucesso')</script>";
    }

?>