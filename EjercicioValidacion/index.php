<?php
function validarEmail($email) {
    $estado = "No valido";
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) { //La función "filter_var" permite validar una variable, el primer parámetro indica la variable a validar y el segundo parámetro indica el tipo de validación. 
        $estado = "Valido";
    }
    return $estado;
}

if (isset($_GET["email"])) { //Se verifica que llegue el parámetro por GET (Enviarlo desde la URL).
    echo validarEmail($_GET["email"]); //Se llama a la función y se le entrega como parammetro la dirección de correo.
}
?>