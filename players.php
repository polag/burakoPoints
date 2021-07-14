<?php
include_once __DIR__ . '/includes/header.php';
$player_quant = $_GET['cantPlayers'];

?>
</main>
<form action="points.php?cant=<?php echo $player_quant; ?>" method="GET">
    <div class="row players">
        <label for="player1">Jugador 1: </label>
        <input type="text" name="player1">
    </div>
    <div class="row players">
        <label for="player2">Jugador 2: </label>
        <input type="text" name="player2">
    </div>
    <div class="row players">
        <?php if ($player_quant == 3) : ?>
            <label for="player3">Jugador 3: </label>
            <input type="text" name="player3">
        <?php endif; ?>
    </div>
    <div class="row" hidden>
        <input name="cant" value="<?php echo $player_quant;?>">
    </div>
    <input type="submit" class="btn btn-dark" value="Jugar!">
</form>