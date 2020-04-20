<table style="text-align: center; margin: 100px auto;margin-bottom:50px">
<?php
$g = 0;
for($i=1;$i<11;$i++){
    echo '<tr>';
    echo '<td style="border: solid black 1px; padding: 10px; background: silver">';

    echo "Tabla del  $i";
    echo '</td>';


    for($j=1;$j<11;$j++){
        $g++;
        if($i%2==0){
            echo '<td style="border: solid black 1px; padding: 10px; background: #EADAD6">';
        }
        else{
            echo '<td style="border: solid black 1px; padding: 10px; background: #D7BBB4">';
        }
        echo $j * $i;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo '<a style="margin-left: 47%;"
 href="../verCodigo.php?src='.__FILE__.'"><button style="padding: 10px;">Ver Codigo</button></a>';

?>


