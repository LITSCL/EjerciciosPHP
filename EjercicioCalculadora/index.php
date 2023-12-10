<?php
$resultado = false;
if (!empty($_GET["numero1"]) && !empty($_GET["numero2"]) && !empty($_GET["boton"])) {
    $numero1 = $_GET["numero1"];
    $numero2 = $_GET["numero2"];
    
    switch ($_GET["boton"]) {
        case "1":
            $resultado = $numero1 + $numero2;
            break;
        case "2":
            $resultado = $numero1 - $numero2;
            break;
        case "3":
            $resultado = $numero1 / $numero2;
               break;           
        case "4":
            $resultado = $numero1 * $numero2;
            break;
        default:
            echo "El valor del boton no es valido";       
    }
}
?>

<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<form action="#">
	<p>
		<label for="numero1">Numero 1</label>
		<input type="number" name="numero1" required/>
	</p>
	
	<p>
		<label for="numero2">Numero 2</label>
		<input type="number" name="numero2" required/>
	</p>
	
	<button type="submit" value="1" name="boton">Sumar</button>
	<button type="submit" value="2" name="boton">Restar</button>
	<button type="submit" value="3" name="boton">Dividir</button>
	<button type="submit" value="4" name="boton">Multiplicar</button>
	
	<p>
		<label for="resultado">Resultado</label>
		<input type="text" name="resultado" <?php if ($resultado != false) : echo "value='" . $resultado . "'"; endif; ?> disabled/>
	</p>

	</form>
</body>
</html>