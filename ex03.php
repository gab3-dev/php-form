<?php

    $user = $_POST['user'];
    $user_password = $_POST['password'];
    $access = hash_equals($user, "etecia");
    $access_p = hash_equals($user_password, "etecia238");

    if ($access && $access_p){
        echo "“Autenticação  realizada  com  sucesso";
    }
    else{
        echo "Você não tem permissão de visualizar essa página";
    };

?>