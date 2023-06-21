<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"></head>
<body>

<?php
$naam = array("Amed", "Monique", "Priscilla");
$leeftijd = array("26", "31", "18");
$geslacht = array("Man", "Vrouw");
echo "<table class='table table-condensed table-bordered'>";
    echo "<tr bgcolor='Orange'>";
        echo "<th>Naam</th>"; 
        echo "<th>Leeftijd</th>"; 
        echo "<th>Geslacht</th>";
    echo "</tr>";

    echo "<tr>";
        echo "<td>$naam[0]</td>"; 
        echo "<td>$leeftijd[0]</td>"; 
        echo "<td>$geslacht[0]</td>"; 
    echo "</tr>";
    echo "<tr>";
        echo "<td>$naam[1]</td>"; 
        echo "<td>$leeftijd[1]</td>"; 
        echo "<td>$geslacht[1]</td>"; 
    echo "</tr>";
    echo "<tr>";
        echo "<td>$naam[2]</td>"; 
        echo "<td>$leeftijd[2]</td>";
        echo "<td>$geslacht[1]</td>";  
    echo "</tr>";
        

?>

</body>
</html>