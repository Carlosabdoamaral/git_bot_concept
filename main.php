<?php
//$txt_options =
//    "O que você deseja fazer?
//    a - Atualizar o Gitlab com o código do Bitbucket,
//    b - Atualizar o Bitbucket com o código do Gitlab,
//    c - Dar push nas suas alterações
//    Insira o que deseja: ";
//$command = readline($txt_options);

//if ($command == "a") { }
//else if ($command == "b") { }
//else if ($command == "c") {
    $msg = readline("Mensagem do commit: ");
    gitPush($msg);
//}

function gitPush($msg) {
    exec("git add .");
    exec("git commit -m '$msg'");
    exec("git push");
}
?>