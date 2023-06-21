<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<style>
    .color-red {
    color:red;
}
</style>

<div class="container">          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Jaar</th>
        <th>Schrikkeljaar</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php 
            $x = 2021;

            while($x <= 2084) { 
            echo "$x <br>";
            $x+=1; }
        ?></td>
        <td class='color-red'><?php 
        $schrikkel = array("2024","2028","2032","2036","2040","2044","2048","2052","2056","2060","2064","2068","2072","2076","2080","2084");
        foreach($schrikkel as $value){
            echo $value . "<br>";
        }
        ?></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
