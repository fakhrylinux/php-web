<?php
$numbers = $_GET['numbers'];
$total = 0;

foreach ($numbers as $number) {
    $total += $number;
}

?>

<html>
<body>
<h1><?= $total ?><h1>
</body>
</html>