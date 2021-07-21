<?php

require "include/app.php";

$id = obtenerId();

$date = obtenerHora();

if($date < 21 && $date > 8){

    header("Location: index.php");

}


incluírTemplate("header");

?>

<main class="main">
    <div class="contenido__main">

        <p class="intro">

            Lamentamos no hayas podido participar.

        </p>

        <p class="texto">

            Las preguntas estaran disponibles mañana a las 8:00 hs.

        </p>
    </div>
</main>
</body>

</html>