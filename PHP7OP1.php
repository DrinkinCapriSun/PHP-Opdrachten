<!DOCTYPE html>
<html>
    <head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"></head>
<body>

<?php
$Meubels = array("Tafel", "Stoel", "Kast", "Bank"); 
echo "<table class='table table-condensed table-bordered'>";
    echo "<tr bgcolor='orange'>";
        echo "<th>Meubels</th>"; 
    echo "</tr>";

    echo "<tr>";
        echo "<th>$Meubels[0]</th>"; 
    echo "</tr>";
    echo "<tr>";
        echo "<th>$Meubels[1]</th>"; 
    echo "</tr>";
    echo "<tr>";
        echo "<th>$Meubels[2]</th>"; 
    echo "</tr>";
    echo "<tr>";
        echo "<th>$Meubels[3]</th>"; 
echo "</tr>";


?>

</body>
</html>
