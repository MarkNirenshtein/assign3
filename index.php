<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> marks A3 </title>
<link rel="styles" href="styles.css">
</head>
<body>

<?php
include 'connectdb.php';
?>

<h1>Bus Trip Data</h1>
<?php
include 'GetBusTripData.php';
?>

<input type="radio" id="sort" name="sorter" value="ASC">
<label for="Ascending">Asceding</label><br>
<input type="radio" id="sort" name="sorter" value="DESC">
<label for="Descending">Descending</label><br>
<input type="radio" id="field" name="fielder" value="tripname">
<label for="Ascending">Sort by Trip Name</label><br>
<input type="radio" id="feild" name="fielder" value="country">
<label for="Descending">Sort by Country</label><br>

<hr>
<h1>Passenger Info</h1>
<?php
include 'Passenger.php';
?>
</body>
</html>
