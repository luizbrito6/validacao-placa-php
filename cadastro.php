<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="vizualizar.php" method="post">
        <?php session_start();?>

        <?php echo "Placa:" . $_SESSION['input-placa']; ?> <br> <br>

        <input type="text" placeholder="Marca do veículo:" name="marca" required autofocus> <br> <br>

        <input type="text" placeholder="Modelo do veículo:" name="modelo" required> <br> <br>

        <input type="number" placeholder=" Ano de fabricação:" name="ano" maxlength="4" max="2023" required> <br> <br>
        
        <input type="submit">

        <input type="reset">
    
    </form>
</body>
</html>