<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de placa</title>
</head>
<body>
    <img src="https://logodownload.org/wp-content/uploads/2020/02/detran-sp-logo.png" alt="logo detran" style="width: 300px;">

    <form action="validacao.php" method="post">
        <h1>Informe a placa do veículo</h1>
        <input type="text" placeholder="Informe a placa:" name="input-placa" required  autofocus>
        <button type="submit">Validar</button>
        <input type="reset">
        
    </form>

</body>
</html>