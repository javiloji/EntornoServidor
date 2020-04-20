<?php

$clasificacion = [
    array(
        "escudo" => "<img src='img/bucks.png' width='30px'",
        "nombre" => "Bucks",
        "victorias" => 53,
        "derrotas" => 12
    ),
    array(
        "escudo" => "<img src='img/toronto.png' width='30px'",
        "nombre" => "Raptors",
        "victorias" => 46,
        "derrotas" => 18
    ),
    array(
        "escudo" => "<img src='img/boston.png' width='30px'",
        "nombre" => "Celtics",
        "victorias" => 43,
        "derrotas" => 21
    ),
    array(
        "escudo" => "<img src='img/miami.png' width='30px'",
        "nombre" => "Miami",
        "victorias" => 41,
        "derrotas" => 24
    ),
    array(
        "escudo" => "<img src='img/indiana.png' width='30px'",
        "nombre" => "Pacers",
        "victorias" => 39,
        "derrotas" => 26
    ),
    array(
        "escudo" => "<img src='img/philadelphia.png' width='30px'",
        "nombre" => "76ers",
        "victorias" => 39,
        "derrotas" => 26
    ),
    array(
        "escudo" => "<img src='img/brooklyn.png' width='30px'",
        "nombre" => "Nets",
        "victorias" => 30,
        "derrotas" => 34
    ),
    array(
        "escudo" => "<img src='img/orlando.png' width='30px'",
        "nombre" => "Magic",
        "victorias" => 30,
        "derrotas" => 35
    ),
    array(
        "escudo" => "<img src='img/washington.png' width='30px'",
        "nombre" => "Wizards",
        "victorias" => 24,
        "derrotas" => 40
    ),
    array(
        "escudo" => "<img src='img/charlotte.png' width='30px'",
        "nombre" => "Hornets",
        "victorias" => 22,
        "derrotas" => 43
    ),
    array(
        "escudo" => "<img src='img/chicago.png' width='30px'",
        "nombre" => "Bulls",
        "victorias" => 22,
        "derrotas" => 43
    ),
    array(
        "escudo" => "<img src='img/newYork.png' width='30px'",
        "nombre" => "Knicks",
        "victorias" => 21,
        "derrotas" => 45
    ),
    array(
        "escudo" => "<img src='img/detroit.png' width='30px'",
        "nombre" => "Pistons",
        "victorias" => 20,
        "derrotas" => 46
    ),
    array(
        "escudo" => "<img src='img/atlanta.png' width='30px'",
        "nombre" => "Hawks",
        "victorias" => 20,
        "derrotas" => 47
    ),
    array(
        "escudo" => "<img src='img/cleveland.png' width='30px'",
        "nombre" => "Cavaliers",
        "victorias" => 19,
        "derrotas" => 46
    ),
];

$i = 0;

echo "<table style='text-align: center; margin: 100px auto;margin-bottom:50px'>";
echo "<tr><th colspan='5' style='border: solid black 1px; padding: 10px; background: silver'>Clasificacion Este</th></tr>";
foreach ($clasificacion as $equipo) {
    echo "<tr>";
    $i++;
    echo "<td style='border: solid black 1px; padding: 10px; background: silver'>$i</td>";

    foreach ($equipo as $clave => $valor) {
        
        echo "<td style='border: solid black 1px; padding: 10px; background: #DFFAC4'>$valor</td>";
    }
    echo "</tr>";
}
echo "<table>";

echo '<br><br><br><a 
 href="../verCodigo.php?src='.__FILE__.'"><button style="padding: 10px;">Ver Codigo</button></a>';

?>

