<?php

include "Serie.php";

session_start();

if(!isset($_SESSION["series"])){
    $_SESSION["series"]= [];
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
                        echo "<p>Añadir pelicula a favoritos:</p>";
                        echo "<input type='text' name='nombrePelicula'  placeholder='Nombre Pelicula'><br><br>";
                        echo "<input type='text' name='plataforma'  placeholder='Plataforma'>";
                        echo "<p style='text-align: center'><input type='submit' name='submit' value='Añadir Pelicula' /></p>";
                        echo "<a href='cerrarSesion.php' >Cerrar sesión</a>";                        
                    ?>
            </form>
        </body>
    </html>

<?php
            
        

        }else{

            $serie = new Serie($_POST["nombrePelicula"],$_POST["plataforma"]);

            array_push($_SESSION["series"], $serie);

            ?>
             <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" style="text-align: center">
                
                <?php
                    echo "<br><br>";
                    echo "<p>Añadir pelicula a favoritos:</p>";
                    echo "<input type='text' name='nombrePelicula'  placeholder='Nombre Pelicula'><br><br>";
                    echo "<input type='text' name='plataforma'  placeholder='Plataforma'>";
                    echo "<p style='text-align: center'><input type='submit' name='submit' value='Añadir Pelicula' /></p>";
                    echo "<a href='cerrarSesion.php' >Cerrar sesión</a>";                        
                ?>
            </form>
            <table style="text-align: center; margin: 50px auto;margin-bottom:50px">
                <?php
                echo '<tr style="border: solid black 1px; padding: 10px; background: silver">';
                echo "<th>Nombre</th>";
                echo "<th>Plataforma</th>";
                echo '</tr>';
                foreach ($_SESSION["series"] as $clave => $valor) {
                    echo '<tr style="border: solid black 1px; padding: 10px; background: #EADAD6">';
                    echo "<td>" . $valor->getNombre() . "</td>";
                    echo "<td>" . $valor->getPlataforma() . "</td>";
                    echo '</tr>';
                }
            }

                ?>
            </table>