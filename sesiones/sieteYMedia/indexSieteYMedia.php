<?php

include "Baraja.php";
include "Carta.php";

session_start();

if(!isset($_SESSION["juego"])){
    $_SESSION["juego"]= [];
}

if(!isset($_POST["submit"])){
   
?>

<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
            <link rel="stylesheet" href="css/estilosSuma.css">
        </head>
        <body>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" style="text-align: center">
                
                    <?php
                        echo "<br><br>";
                        echo "<h1>SIETE Y MEDIA</h1>";
                        echo "<p style='text-align: center'><input type='submit' name='submit' value='Pedir Carta' /></p>";
                        echo "<a href='cerrarSesion.php' >Cerrar sesión</a>";                        
                    ?>
            </form>
        </body>
    </html>

<?php
            
        

        }else{

            $paloAleatorio = rand(1,4);

            $figuraAleatoria = rand(1,10);

            $carta = new Carta($paloAleatorio,$figuraAleatoria);

            $baraja = new Baraja();

            

            print_r($baraja);

            // echo $baraja;

            foreach ($baraja->getBaraja() as $palo => $carta) {
                foreach ($carta as $clave => $figura) {
                    echo "<br><br>";
                    echo $baraja;
                    echo $figura;

                }
            }

            // $serie = new Serie($_POST["nombrePelicula"],$_POST["plataforma"]);

            // array_push($_SESSION["juego"], $serie);

            ?>
             <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" style="text-align: center">
                
                <?php

                    echo "<br><br>";
                    echo "<h1>SIETE Y MEDIA</h1>";
                    echo "<p style='text-align: center'><input type='submit' name='submit' value='Pedir Carta' /></p>";
                    echo "<a href='cerrarSesion.php' >Cerrar sesión</a>";                       
                ?>
            </form>
                <?php
                // foreach ($_SESSION["series"] as $clave => $valor) {
                //     echo '<tr style="border: solid black 1px; padding: 10px; background: #EADAD6">';
                //     echo "<td>" . $valor->getNombre() . "</td>";
                //     echo "<td>" . $valor->getPlataforma() . "</td>";
                //     echo '</tr>';
                // }
            }

                ?>