<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"></head>
<body>

<?php
$naam = array("Amed", "Monique", "Priscilla", "26", "31", "18"); 
$leeftijd = array("26", "31", "18"); 
echo "<table class='table table-condensed table-bordered'>";
    echo "<tr bgcolor='orange'>";
        echo "<th>Naam</th>"; 
        echo "<th>Leeftijd</th>"; 
    echo "</tr>";

    echo "<tr>";
        echo "<td>$naam[0]</td>"; 
        echo "<td>$leeftijd[0]</td>"; 
    echo "</tr>";
    echo "<tr>";
        echo "<td>$naam[1]</td>"; 
        echo "<td>$leeftijd[1]</td>"; 
    echo "</tr>";
    echo "<tr>";
        echo "<td>$naam[2]</td>"; 
        echo "<td>$leeftijd[2]</td>"; 
    echo "</tr>";
        

?>



</body>
</html>