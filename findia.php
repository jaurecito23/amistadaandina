<?php

    require "include/app.php";



    $db = conectarDB();

   $id = obtenerId();

$query = "SELECT * FROM users WHERE id = '${id}'";
$resultado = mysqli_query($db,$query);
$apodo = "";
$imagen = "";

foreach ($resultado as $user) {
    $apodo = $user["apodo"];
    $imagen = $user["imagen"];
}

$date =  obtenerHora();

    if($date > 20 || $date < 8){

        header("Location: index.php");

    }


include "include/templates/header2.php";

?>


<main class='main'>
    <div class="contenido__main">



        <div class="findia">
            <p class="titulo">
                Mostraremos los resultados a las <span>21:00 hs</span>.
            </p>
            <p class="texto">

                ¡Muchas Gracias por Responder!

            </p>
        </div>
</main>

<?php include "footer.php"?>

</body>
</html>