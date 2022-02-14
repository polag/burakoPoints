<?php
include_once __DIR__ . '/includes/header.php';
$winner = $_GET['winner'];
$points = $_GET['points'];
?>

<h1>Ganó <?php echo $winner;?> con <?php echo $points;?> puntos!</h1>
<a class="nav-link active" aria-current="page" href="./index.php"><button class="btn btn-dark">Jugar otra vez</button></a>

