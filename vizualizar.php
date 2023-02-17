<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do veículo</title>
</head>
<body>

    
    <?php 

        $marcaP = $_POST['marca'];

        $modeloP = $_POST['modelo']; 

        $year = $_POST['ano'];

        $anoAtual = date('Y');

        // Cálculo ano do tempo de uso - 
        $tempoDeUso = $anoAtual - $year;


        session_start();
        echo "<h1> Dados do veículo</h1>";

        echo "Placa: " . $_SESSION['input-placa'] . "<br><br>";
        echo "Marca do véiculo: $marcaP <br><br>";
        echo "Modelo do véiculo: $modeloP <br><br>";
        echo "Tempo de uso do veículo: $tempoDeUso"; 

        



    ?>
</body>
</html>