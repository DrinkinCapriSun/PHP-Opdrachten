<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"></head>
<body>

<?php
$product = array("Hamburger", "Patat met Mayo", "Patat Kapsalon"); 
$calorien= array("560", "600", "1600"); 
echo "<table class='table table-condensed table-bordered'>";
    echo "<tr bgcolor='orange'>";
        echo "<th>product</th>"; 
        echo "<th>calorien</th>"; 
    echo "</tr>";

    echo "<tr>";
        echo "<td>$product[0]</td>"; 
        echo "<td>$calorien[0]</td>"; 
    echo "</tr>";
    echo "<tr>";
        echo "<td>$product[1]</td>"; 
        echo "<td>$calorien[1]</td>"; 
    echo "</tr>";
    echo "<tr>";
        echo "<td>$product[2]</td>"; 
        echo "<td>$calorien[2]</td>"; 
    echo "</tr>";
?>

<?php
$product = array("Hamburger"=>"560", "Patat met Mayo"=>"600", "Patat Kapsalon"=>"1600");

foreach($product as $x => $val) {
  echo "$x heeft $val calorien<br>";
}
?>


</body>
</html>