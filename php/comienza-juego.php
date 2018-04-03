<?php

include("conexion.php");

$consulta="select * from jugadores";

$query=$bd->prepare($consulta);

$query->execute();

$arreglo=$query->fetchAll(); //utilizamos fetchAll para traer todos los datos del query

//    echo"<pre>";
//        print_r($arreglo);
//    echo"</pre>";
//
//$consulta="delete from jugadores";
//
//$query=$bd->prepare($consulta);
//$query->execute();

?>

<html>
    <head>
        <title>Juego Azar</title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="icon" href="img/cerebro_fav.ico" type="image/x-icon">
        <link rel="shortcut icon" href="img/cerebro_fav.png" type="image/x-icon">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet">
        <link rel="stylesheet" href="css/estilos.css"> 
        <link href="css/normalize.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    </head>
    <body>
        <section class="container">
            <section class="row">   
                <section class="col-md-10 col-md-offset-1">
                    <form action="final.php" method="post" id="formulario">
                        <section class="col-md-12">
                            <h1 class="jumbotron text-center" style="background-color:#3742fa;color:#fff;">Desarrollo Web-Proyecto</h1>
                        </section>
                        <section class="col-md-4" style="background-color:#3742fa;">
                            <div class="col-md-12 row">
                                <img id="mario" class="col-md-12 img-responsive" src="img/mario.png">
                            </div>
                            <div>

                                <select id="seleccion" class="col-md-12 select" name="jugador1" required>
                                    <option value="Selecciona Opcion Jugador" name="opcion" id="opcion">Selecciona Opcion Jugador</option>
                                    <option value="piedra" name="piedra">piedra</option>
                                    <option value="papel" name="papel">papel</option>
                                    <option value="tijeras" name="tijeras">tijeras</option>
                                </select> 
                            </div>
                            <section class="row">
                                <div class="col-md-12 select">
                                    <div class="col-md-12 text-center marcador" id="contador1">0</div>
                                </div>
                            </section>
                        </section>  
                        <section class="col-md-4">
                            <div class="col-md-12">
                                <img class="col-md-12" src="img/vs.png">

                                <!--                                boton submit-->
                                <div id="boton-submit"  class="btn btn-primary text-center" style="margin:10px; width:93%;height: 50px;font-size:25px;">Jugar</div>
                            </div>
                        </section> 
                        <section class="col-md-4 lista-imagen">
                            <div class="col-md-12 row">
                                <img id="luigi" class="col-md-12 img-responsive" src="img/luigi.png">
                            </div>
                            <div>
                                <select id="seleccion2" class="col-md-12 select" name="jugador2" required>
                                    <option value="Selecciona Opcion Jugador" name="opcion2" id="opcion2">Selecciona Opcion Jugador</option>
                                    <option value="piedra" name="piedra2">piedra</option>
                                    <option value="papel" name="papel2">papel</option>
                                    <option value="tijeras" name="tijeras2">tijeras</option>
                                </select>
                            </div>
                            <section class="row">
                                <div class="col-md-12 select">
                                    <div class="col-md-12 text-center marcador" id="contador2">0</div>
                                </div>
                            </section>
                        </section>
                        <div class="row hide">
                            <input type="text" name="ganador" id="ganador" value="">

                        </div>
                    </form>
                </section>
                <!--                row-->
            </section> 
        </section>

        <section class="container">
            <section class="row">
                <table class="table table-hover tabla col-md-8">
                    <tr>
                        <th class="text-center">Jugador 1</th>
                        <th class="text-center">Jugador 2</th>
                        <th class="text-center">Ganador Jugador</th>
                    </tr>

                    <?php
                    for($x=0 ; $x<count($arreglo); $x++){
                    ?>
                    <tr>

                        <td class="text-center"><?php echo $arreglo[$x]["jugador1"]; ?></td>
                        <td class="text-center"><?php echo $arreglo[$x]["jugador2"]; ?></td>
                        <td class="text-center"><?php echo $arreglo[$x]["ganador"]; ?></td>
                    </tr>
                    <?php
                    }?>

                </table>
            </section>
        </section>

        <section class="col-md-12">
            <a><button class="btn btn-danger col-md-5 col-md-offset-3 boton" delete="<?php echo $arreglo[$x] ?>" >Borrar datos</button></a>
        </section>

        <script src="javascript/jquery-3.2.1.min.js"></script>
        <script src="javascript/js.js"></script>

        <script>
            $(".boton").click(function(){

                var borrar=$(this).attr("delete");
                window.location="borrar.php";

            })
        </script>
    </body>
</html>