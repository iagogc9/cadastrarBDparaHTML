<?php
    include 'conexao.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST')   {
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];

        $comandosql = "INSERT INTO pessoa (nome,telefone,endereco)
                      VALUES ('$nome','$telefone','$endereco')";


        if ($mysqli->query($comandosql)) {   //query identifica comando sql
            echo "Pessoa cadastrada";
    }   else {
            echo "Erro: " . $mysqli->error;
    } 
}

?>