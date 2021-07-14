<?php
include_once __DIR__ . '/includes/header.php';
$cant = $_GET['cant'];
$cols = 12 / $cant;

if(isset($_GET['points1'])){
    for($i=0;$i<$cant;$i++){
        $points[$i] = $_GET['points'.$i+1];
    }
}

?>
</main>
<form action="includes/getData.php" method="POST">
    <div class="row">
        <?php for ($i = 0; $i < $cant; $i++) : ?>
            
            <div class="col-<?php echo $cols; ?>">
            <input  name="players[]" value="<?php echo $_GET['player'.$i+1];?>" hidden></input>
            <h1><?php echo $_GET['player'.$i+1];?></h1>
            <?php if(isset($points)): ?>
                <input  name="points[]" value="<?php echo $points[$i];?>" hidden></input>
                <h1><?php echo $points[$i]; ?> puntos.</h1>
            <?php endif; ?>
                <div class="row">
                    <label for="cantMuertos">Cantidad de muertos levantados: </label>
                    <input type="number" name="cantMuertos[]" class="points" required>
                </div>
                <div class="row">
                    <label for="canLimpias">Cantidad de canastas puras: </label>
                    <input type="number" name="canLimpias[]" class="points" required>
                </div>
                <div class="row">
                    <label for="canSucias">Cantidad de canastas impuras: </label>
                    <input type="number" name="canSucias[]" class="points" required>
                </div>
                <div class="row">
                    <label for="cantUnos">Cantidad de 1: </label>
                    <input type="number" name="cantUnos[]" class="points" required>
                </div>
                <div class="row">
                    <label for="cantDos">Cantidad de 2: </label>
                    <input type="number" name="cantDos[]" class="points" required>
                </div>
                <div class="row">
                    <label for="cantBajos">Cantidad de 3, 4, 5, 6, 7: </label>
                    <input type="number" name="cantBajos[]" class="points" required>
                </div>
                <div class="row">
                    <label for="cantAltos">Cantidad de 8, 9, 10, 11, 12, 13: </label>
                    <input type="number" name="cantAltos[]" class="points" required>
                </div>
                <div class="row">
                    <label for="cantComo">Cantidad de Comodines: </label>
                    <input type="number" name="cantComo[]" class="points" required>
                </div>
                <input class="form-check-input" type="checkbox"  id="corte<?php echo $i;?>" name="corte<?php echo $i;?>">¿Cortó?</input>
                
            </div>
        <?php endfor; ?>

    </div>
<div>
    <input type="submit" class="btn btn-dark" value="Calcular puntos">
</div>


</form>

</body>