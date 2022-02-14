<?php
include_once __DIR__ . '/includes/header.php';
?>
</main>
<form method="GET" action="players.php">
    <div class="row">
        <h1>Seleccionar cantidad de jugadores:</h1>
        <div class="col">
            <input type="submit" name="cantPlayers" id="twoPlayers" class="btn" value="2">
        </div>
        <div class="col">
            <input type="submit" name="cantPlayers" id="threePlayers" class="btn" value="3">
        </div>
    </div>



</form>
</body>

</html>