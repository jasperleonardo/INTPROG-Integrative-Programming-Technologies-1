<!DOCTYPE html>
<html>
<body>

<?php
$name = $_GET["name"];
$year = $_GET["year"];
$section = $_GET["section"];

echo "Welcome, " . $name . "!<br>";
echo "Year/Course: " . $year . "<br>";
echo "Section: " . $section;
?>

</body>
</html>