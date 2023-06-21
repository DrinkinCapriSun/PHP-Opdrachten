<html>
<head>
    <link rel="stylesheet" href="stylePHP8OP1.css">
</head>
<body>

<h2>8,1 formulier</h2>
<table class="table-striped  table-bordered dikke">
    <tr>
        <td>Voornaam</td>
        <td><?php echo $_POST["voornaam"]; ?></td>
    </tr>
    <tr>
        <td>Achternaam</td>
        <td><?php echo $_POST["achternaam"]; ?></td>
    </tr>
    <tr>
        <td>Leeftijd</td>
        <td><?php echo $_POST["leeftijd"]; ?></td>
    </tr>
    <tr>
        <td>Woonplaats</td>
        <td><?php echo $_POST["woonplaats"]; ?></td>
    </tr>
    <tr>
        <td>Opleiding</td>
        <td><?php echo $_POST["opleiding"]; ?></td>
    </tr>
</table>


</form>
</body>
</html>