<?php
    include 'conexao.php'

   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $porcentagemAplicada = $_POST['porcentagemAplicada'];
        $valorInicial = $_POST['valorInicial'];
        $valorFinal = $_POST['valorFinal'];

        $comandosql = "INSERT INTO promocao (porcentagemAplicada, valorInicial, valorFinal)
                      VALUES ('$porcentagemAplicada', $valorInicial' '$valorFinal)";

        if ($mysql->query($comandosql)) {
         echo "Promoção aplicada"
    }   else {
         echo "Falha ao aplicar promoção" . $mysql->error;
    }


}

?>