<?php

require "include/app.php";




incluírTemplate("header");

?>
<main class='main'>
    <div class="contenido__main">
        <div class="contenedor__intro">

            <h2 class='titulo'> ¡Hola! </h2>

            <p class='intro'>
                Todos los días compartimos con muchas personas
                un momento de nuestras vidas.
            </p>
            <p class='texto'>
                Las similitudes generan amistad. Se trata de compartir las cosas más simples con personas en las cuales podemos reconocernos.
            </p>
            <p class="intro">
                ¿Te gustaría descubrir qué es lo
                que compartimos con otras personas ?
            </p>
        </div>


        <form action="intro2.php">

            <input class='btn' type="submit" value="Siguiente">
        </form>
    </div>
</main>


<?php include "footer.php"?>

</body>
</html>