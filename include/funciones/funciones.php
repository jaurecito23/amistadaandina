<?php


//Globales
    function debuguear($var){


        echo "<pre>";
        var_dump($var);
        echo "<pre>";
        exit;

    }

   function incluírTemplate($nombre){
        include TEMPLATES_URL."/".$nombre.".php";
   }
   function incluírTemplate2(){
    include "include/templates/header2.php";
    }



 // Complejas

   function obtenerErrores($errores){

    foreach($errores as $error):?>
<div class="alerta">

    <p> <?php echo $error; ?> </p>

</div>

<?php endforeach;

}


function obtenerHora(){

    $date = date("H");
    $date = intval($date);
    return $date;
}

function verificarSesion(){

$date = obtenerHora();

    session_start();

    if(isset($_SESSION["loginBDM"])){

        if($_SESSION["loginBDM"] == true){

                 verificarHorario($date);

                if($_SESSION["registrado"] == true ){

                 header("Location: cuestionario.php");

                }else{

                    header("Location: intro3.php");

                }

            }

    }

}


function verificarHorario($date){


    if($date > 20 || $date < 8){

        header("Location: coincidencias.php");
        exit;
    }

}


function verificarLogin(){
    if (!isset($_SESSION["loginBDM"])) {

        header("Location: index.php");

    }
}



function obtenerId(){

    session_start();
    if(isset($_SESSION["id"])){
        $id = intval($_SESSION["id"]);
        $id = filter_var($id,FILTER_VALIDATE_INT);
    }else{

        header("Location: index.php");

    }

    return $id;
}


function obtenerDia(){

    $day = date("l");
    $dia = "";
    $dias = [
        "Monday" =>"Lunes",
        "Tuesday" =>"Martes",
        "Wednesday" =>"Miercoles",
        "Thursday"=>"Jueves",
        "Friday"=>"Viernes",
        "Saturday"=>"Sabado",
        "Sunday"=>"Domingo"
    ];
    foreach ($dias as $key => $value) {

        if($key == $day){

            $dia = $value;

        }

    }

    return $dia;

}




?>