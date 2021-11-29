<?php
$query = "SELECT passport.passengerid, firstname, lastname, passportnum, citizenshipcountry, expireydate birthdate  FROM passenger JOIN passport WHERE passenger.passengerid = passport.passengerid ORDER BY lastname";
$result = mysqli_query($connection,$query);
if (!$result) {
     die("databases query failed.");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<div>";
    echo $row[passengerid] . " " . $row[lastname] . " " . $row[firstname] . " " . $row[passportnum] . " " . $row[citizenshipcountry] . " " .  $row[birthday] . "</div>";
}
mysqli_free_result($result);
echo "</ol>";
?>
