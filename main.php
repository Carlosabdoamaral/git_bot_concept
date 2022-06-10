<?php

// command - 1
$msg = readline("Commit message: ");
gitPush($msg);

// command - 2
//updateOtherRepository();

function gitPush($msg) {
    $pwd = exec("pwd");
    exec("git add $pwd");
    exec("git commit -m '$msg'");
    exec("git push");
}

function updateOtherRepository(): void {
    $cr = getCurrentRepositoryURL();
    $nr = readline("New repository URL: ");

    exec("mkdir .git-bot");
    exec("cd .git-bot");

    try {
        exec("git clone '$nr'");
        exec("cd ..");

    } catch (e) {
        echo $e;
    }
}

function getCurrentRepositoryURL(): string { return exec("git config --get remote.origin.url"); }
