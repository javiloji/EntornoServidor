<table style="margin: 100px auto; background: #064B12;border-radius:50px">
<?php

$array =['#63F07C','orange','red'];

for ($i = 0; $i < 3; $i++){
    echo "<tr>";
    echo "<td>";
    echo "<svg height='130' width='130'>";
    echo "<circle cx = '65' cy='65' r='50' fill='$array[$i]'/>";
    echo "</svg>";
    echo "</td>";
    echo "</tr>";
}

?>
</table>

<?php

echo '<a style="margin-left: 47%;"
 href="../verCodigo.php?src='.__FILE__.'"><button style="padding: 10px;">Ver Codigo</button></a>';

?>