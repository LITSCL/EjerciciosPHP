<?php
function validarEmail($email) {
    $estado = "No valido";
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) { //La funci�n "filter_var" permite validar una variable, el primer par�metro indica la variable a validar y el segundo par�metro indica el tipo de validaci�n. 
        $estado = "Valido";
    }
    return $estado;
}

if (isset($_GET["email"])) { //Se verifica que llegue el par�metro por GET (Enviarlo desde la URL).
    echo validarEmail($_GET["email"]); //Se llama a la funci�n y se le entrega como parammetro la direcci�n de correo.
}
?>