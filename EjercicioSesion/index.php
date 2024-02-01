<?php
session_start();

if (!$_SESSION["numero"]) { //Se consulta si existe la sesión, si no existe se crea.
    $_SESSION["numero"] = 0;
}

if (isset($_GET["contador"])) {
    if ($_GET["contador"] == "1") {
        $_SESSION["numero"]++;   
    }
    else {
        $_SESSION["numero"]--; 
    }
}

echo $_SESSION["numero"];
?>

<a href="index.php?contador=1">Aumentar</a>

<a href="index.php?contador=0">Disminuir</a>