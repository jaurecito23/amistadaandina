<?php

require "include/app.php";



incluírTemplate("header");
?>

<main class='main'>
    <div class="contenido__main">



        <div class="contenedor__intro">

            <h2 class="titulo"> Dinámica: </h2>

            <p class='texto'>
                Todos los días debes responder una serie de preguntas.
            </p>
            <p class="texto">

                Nuestro sistema irá matcheando similitudes para armar grupos afines.


            </p>

            <p class="intro">Preparate para jugar, divertirte y sorprenderte!</p>

        </div>







        <form action='intro3.php'>

            <input class="btn" type="submit" value="Siguiente">
        </form>
    </div>
</main>


<?php include "footer.php"?>

</body>
</html>