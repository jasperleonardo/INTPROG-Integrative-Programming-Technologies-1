<!DOCTYPE html>
<html>
<body>

<?php

$name = $_POST["name"];
$year = $_POST["year"];
$section = $_POST["section"];

echo "Welcome, " . $name . "!<br>";
echo "Year/Course: " . $year . "<br>";
echo "Section: " . $section;

?>

</body>
</html>