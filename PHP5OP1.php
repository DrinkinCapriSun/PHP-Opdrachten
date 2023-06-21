<!DOCTYPE html>
<html>
<head> <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>


</body><body>
<div class="container">      
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Vaak</th>
        <th>Cijfers</th>       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Engels</td>
        <td>8</td>
        <td>Voldoende</td>
      </tr>
      <tr>
        <td>Netwerken</td>
        <td>3</td>
        <td>Onvoldoende</td>
      </tr>
      <tr>
        <td>PHP</td>
        <td>9</td>
        <td>Goed</td>
      </tr>
    </tbody>
  </table>
</div>

<?php 
$nummer= "3";

if ( $nummer < 5) {
    echo "Onvoldoende!";
}

   

elseif ( $nummer < 8 ) {
    echo "Voldoende!";
}

    
else {
    echo "Goed!";
}
    
     
?>
</body>
</html>
