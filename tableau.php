<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border ="1">
    <?php
   $compteur = 0;

for($i = 0; $i < 10; $i++){
echo "<tr>";
for($j = 0; $j < 10; $j++){
    $compteur++;
echo "<td>" .$compteur. "</td>";

}
echo "</tr>";
}

?> 
</table>

<?php

include("pyramide.php");
?>
</body>
</html>