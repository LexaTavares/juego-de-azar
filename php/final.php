<?php

include("conexion.php");

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

$jugador1=$_POST["jugador1"];
$jugador2=$_POST["jugador2"];
$ganador=$_POST["ganador"];


$consulta="insert into jugadores(jugador1, jugador2,ganador)values('".$jugador1."', '".$jugador2."','".$ganador."')";

$query=$bd->prepare($consulta);

$query->execute();

$piedra='img/reaccion1.png';
$papel='img/reaccion2.png';
$tijeras='img/reaccion3.png';


?>

<html>
    <head>
        <title>Juego Azar</title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet">
        <link rel="stylesheet" href="css/estilos.css">
        <link href="css/normalize.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    </head>
    <body>
        <section class="container">
            <section class="row">
                <section class="col-md-12">
                    <h1 class="jumbotron text-center" style="background-color:#3742fa;color:#fff;">Desarrollo Web-Proyecto</h1>
                </section>
                <section class="col-md-6 lista-color altura">
                    <div id="ganador">
                        <h1 class="text-center marcador">GANADOR</h1>
                        <div class="col-md-12">

                            <?php

                            if($jugador1=="piedra" && $jugador2=="tijeras"){
                                //    console.log("ganador jugador 1");
                                print "<h2 class='col-md-7 col-md-offset-4'> Jugador 1</h2>";

                            }else if($jugador1=="papel" && $jugador2=="piedra"){
                                //    console.log("ganador jugador 1");
                                print "<h2 class='col-md-7 col-md-offset-4'> Jugador 1</h2>";
                            }else if($jugador1=="tijeras" && $jugador2=="papel"){
                                //            console.log("ganador jugador 1");
                                print "<h2 class='col-md-7 col-md-offset-4'> Jugador 1</h2>";

                            }else if($jugador1=="tijeras" && $jugador2=="piedra"){
                                //    console.log("ganador jugador 2");
                                print "<h2 class='col-md-7 col-md-offset-4'> Jugador 2</h2>";

                            }else if($jugador1=="papel" && $jugador2=="tijeras"){
                                //            console.log("ganador jugador 2");
                                print "<h2 class='col-md-7 col-md-offset-4'> Jugador 2</h2>";

                            }else if($jugador1=="piedra" && $jugador2=="papel"){
                                //    console.log("ganador jugador 2");
                                print "<h2 class='col-md-7 col-md-offset-4'> Jugador 2</h2>";

                            }
                            else if($jugador1==$jugador2){
                                print "<h2 class='col-md-7 col-md-offset-4'>Empate</h2>";
                            }

                            ?>
                        </div>
                    </div>
                </section>
                <section class="col-md-6 lista-imagen imagen">
                    <div class="col-md-12" >

                        <?php
                        if($jugador1=="piedra" && $jugador2=="tijeras"){
                            //    console.log("ganador jugador 1");
                            print "<img src=\"$piedra\" class='col-md-7 col-md-offset-2 img-responsive'>";

                        }else if($jugador1=="papel" && $jugador2=="piedra"){
                            //    console.log("ganador jugador 1");
                            print "<img src=\"$papel\" class='col-md-7 col-md-offset-2 img-responsive'>";
                        }else if($jugador1=="tijeras" && $jugador2=="papel"){
                            //            console.log("ganador jugador 1");
                            print "<img src=\"$tijeras\" class='col-md-7 col-md-offset-2 img-responsive'>";

                        }else if($jugador1=="tijeras" && $jugador2=="piedra"){
                            //    console.log("ganador jugador 2");
                            print "<img src=\"$piedra\" class='col-md-7 col-md-offset-2 img-responsive'>";

                        }else if($jugador1=="papel" && $jugador2=="tijeras"){
                            //            console.log("ganador jugador 2");
                            print "<img src=\"$tijeras\" class='col-md-7 col-md-offset-2 img-responsive'>";

                        }else if($jugador1=="piedra" && $jugador2=="papel"){
                            //    console.log("ganador jugador 2");
                            print "<img src=\"$papel\" class='col-md-7 col-md-offset-2 img-responsive'>";

                        }
                        else if($jugador1==$jugador2){

                            print "<img src=\"$papel\" class='col-md-7 col-md-offset-2 img-responsive'>";
                        }

                        ?>

                    </div>
                </section>

                <section class="row">
                    <div class="col-md-5 col-md-offset-3 boton">
                        <a href="comienza-juego.php" class="col-md-12 text-center">Regresar</a>
                    </div>
                </section>
            </section>
        </section>
        <script src="javascript/jquery-3.2.1.min.js"></script>
        <script src="javascript/js.js"></script>
    </body>

</html>