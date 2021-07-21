<?php

    require "include/app.php";


$date = obtenerHora();


if($date < 21 && $date > 8){

    header("Location: index.php");

}


$db = conectarDB();

$id = obtenerId();

$dia = obtenerDia();

$query = "SELECT * FROM users WHERE id='${id}'";
$resultado = mysqli_query($db,$query);

$apodo = "";

foreach ($resultado as $user){

    $apodo = $user["apodo"];
    $imagen = $user["imagen"];

}



$query = "SELECT * FROM respuestas WHERE usuarioId = '${id}' AND dia ='${dia}';" ;



$resultado = mysqli_query($db,$query);

if($resultado -> num_rows == 0){

    header("Location: noparticipo.php");

}





$grupo ="";

foreach ($resultado as $respuestas ) {

    $grupo = $respuestas["grupo"];

}


$query = "SELECT * FROM grupos_${dia} WHERE grupo = '${grupo}';";
$resultado = mysqli_query($db,$query);

$cantidad = "";

foreach ($resultado as $group) {
    $cantidad = $group["cantidad"];
}



$cantidad -= 1;
include "include/templates/header3.php";

?>

<main class='main'>
    <div class="contenido__main">


        <h3 class="texto texto-coincidencias">Las nuevas preguntas estarán disponibles desde las 8:00 hs.</h3>


    </div>


    </div>
</main>


<?php include "footer.php"?>


</body>
</html>