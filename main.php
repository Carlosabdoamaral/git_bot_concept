<?php

$msg = readline("Mensagem do commit: ");
gitPush($msg);

function gitPush($msg) {
    $locate = exec("pwd");
    exec("git add $locate");
    exec("git commit -m '$msg'");
    exec("git push");
}

?>