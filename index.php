<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css">
    <title>Tarea Polizas</title>
</head>
<body>
    <header>
        <h1>SEGURO DE AUTOS</h1>
    </header>
    <form method="POST" action="index.php">
    <br><br>
    <label>Seleccione Tipo de Poliza a adquirir: </label>
    <select size="1" name="cmbTipo" id="poliza">
        <option value="seleccione">Seleccione</option>
        <option value="tipoA">Cobertura Amplia</option>
        <option value="tipoB">Daños a Terceros</option>
    </select>
    <br><br><label >Marque lo siguiente </label><br>
    <input type="checkbox" name="cklentes" value="lentes" id="chlentes"><label for="chlentes"> USA LENTES </label></input><br>
    <input type="checkbox" name="ckalcohol" value="alcohol" id="chalcohol"><label for="chalcohol"> CONSUME ALCOHOL </label></input><br>
    <input type="checkbox" name="ckmayor40" value="mayor" id="chmayor"><label for="chmayor"> ES MAYOR DE 40 AÑOS </label></input><br>
    <input type="checkbox" name="ckenf" value="enfermedad" id="chenf"><label for="chenf"> PADECE UNA ENFERMEDAD </label></input><br>
    <br><br>
    <input type="submit" id="btn-calcular" value="CALCULAR COSTO">
    <input type="reset" value="CANCELAR">
    </form>
    <br><br>
    <hr>
    <br>
    <?php
        @$tipo= $_POST["cmbTipo"];
        @$alcohol= $_POST["ckalcohol"];
        @$lentes= $_POST["cklentes"];
        @$edad= $_POST["ckmayor40"];
        @$enf= $_POST["ckenf"];

        switch($tipo){
            case "tipoA":
                $cuota= 1200;
                echo "<h3>Seleccionaste Cobertura Amplia</h3>";
                if(isset($alcohol) && $alcohol=="alcohol"){
                    $Toma=$cuota+$cuota*.10;
                    echo "<h3>Seleccionaste que Si consume alcohol</h3>";
                }else{
                    $Toma=$cuota;
                    echo "<h3>Seleccionaste que No consume alcohol</h3>";
                }
                if(isset($lentes) && $lentes=="lentes"){
                    $Lentes=$Toma+$cuota*.05;
                     echo "<h3>Seleccionaste que Si usa Lentes</h3>";
                }else{
                    $Lentes=$Toma;
                    echo "<h3>Seleccionaste que no usa Lentes</h3>";
                }
                if(isset($enf) && $enf=="enfermedad"){
                    $Covis=$Lentes+$cuota*.05;
                     echo "<h3>Seleccionaste que Si sufre de una enfermedad cronica</h3>";
                }else{
                    $Covis=$Lentes;
                     echo "<h3>Seleccionaste que No sufre de una enfermedad cronica</h3>";
                }
                if(isset($edad) && $edad=="mayor"){
                    $Edad=$Covis+$cuota*.20;
                echo "<h3>Tiene una edad Mayor a 40 años </h3>";
                }else{
                    $Edad=$Covis+$cuota*.10;
                 echo "<h3>Tiene una edad Menor a 40 años</h3>";
                }
                break;
            case "tipoB":
                $cuota=950;
                echo "<h3>Seleccionaste Daños a Terceros</h3>";
                if(isset($alcohol) && $alcohol=="alcohol"){
                    $Toma=$cuota+$cuota*.10;
                    echo "<h3>Seleccionaste que Si consume alcohol</h3>";
                }else{
                    $Toma=$cuota;
                    echo "<h3>Seleccionaste que No consume alcohol</h3>";
                }
                if(isset($lentes) && $lentes=="lentes"){
                    $Lentes=$Toma+$cuota*.05;
                     echo "<h3>Seleccionaste que Si usa Lentes</h3>";
                }else{
                    $Lentes=$Toma;
                    echo "<h3>Seleccionaste que no usa Lentes</h3>";
                }
                if(isset($enf) && $enf=="enfermedad"){
                    $Covis=$Lentes+$cuota*.05;
                     echo "<h3>Seleccionaste que Si sufre de una enfermedad cronica</h3>";
                }else{
                    $Covis=$Lentes;
                     echo "<h3>Seleccionaste que No sufre de una enfermedad cronica</h3>";
                }
                if(isset($edad) && $edad=="mayor"){
                    $Edad=$Covis+$cuota*.20;
                echo "<h3>Tiene una edad Mayor a 40 años </h3>";
                }else{
                    $Edad=$Covis+$cuota*.10;
                 echo "<h3>Tiene una edad Menor a 40 años</h3>";
                }
                break;
            default:
            echo "<h3>Selecione un tipo de Seguro</h3>";
        }
        echo "<br><hr><br>";
        echo "<h2>|EL TOTAL DE SU SEGURO ES DE $$Edad|</h2>";
    ?>
    <script src="index.js"></script>
</body>
</html>