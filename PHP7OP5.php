<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"></head>
<body>

<?php
$auto = array("Audi A6", "Porsche 911", "Fiat panda");
$snelheid = array("240 km/h", "290 km/h", "140 km/h");
$verbruik = array("1 op 12", "1 op 8", "1 op 22");
echo "<table class='table table-condensed table-bordered'>";
    echo "<tr bgcolor='ORANGE'>";
        echo "<th>Auto</th>"; 
        echo "<th>Max snelheid</th>"; 
        echo "<th>Verbuikt</th>";
    echo "</tr>";

    echo "<tr>";
        echo "<td>$auto[0]</td>"; 
        echo "<td>$snelheid[0]</td>"; 
        echo "<td>$verbruik[0]</td>"; 
    echo "</tr>";
    echo "<tr>";
        echo "<td>$auto[1]</td>"; 
        echo "<td>$snelheid[1]</td>"; 
        echo "<td>$verbruik[1]</td>"; 
    echo "</tr>";
    echo "<tr>";
        echo "<td>$auto[2]</td>"; 
        echo "<td>$snelheid[2]</td>";
        echo "<td>$verbruik[2]</td>";  
    echo "</tr>";
        
?>

<?php
$cars = array (
  array("Audi A6","240 km/uur","<b>IS ZUINIG</b>"),
  array("Porsche 911","290 km/uur","<b>IS NIET ZUINIG!!!</b>"),
  array("Fiat panda","140 km/uur","<b>IS ZUINIG!!!</b>"),
);
  
echo $cars[0][0].": Rijdt ".$cars[0][1]." Zuinig: ".$cars[0][2].".<br>";
echo $cars[1][0].": Rijdt ".$cars[1][1]." Zuinig: ".$cars[1][2].".<br>";
echo $cars[2][0].": Rijdt ".$cars[2][1]." Zuinig: ".$cars[2][2].".<br>";
?>


<img src="auto.png" width=70px>
Plaatje van <u>de</u> auto


</body>
</html>