<?php
setcookie(
    name: "header_color",
    value: "#12373d"
);

$color = $_COOKIE["header_color"] ?? "#121f3d";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>creaciones brunila</title>
</head>

<body>
    <header style="
     background : <?= $color ?>">
        <img src="logo1.jpg.png" alt="img">
    </header>
</body>

</html>