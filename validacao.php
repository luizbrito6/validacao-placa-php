<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $placa = $_POST['input-placa'];

        session_start();
        $_SESSION['input-placa'] = $placa;

        $padraoAntigo =  "/^[A-Z]{3}[0-9]{4}$/"; 
        
        $padraoNovo = "/^[A-Z]{3}[0-9][A-Z][0-9]{2}$/";

        if (preg_match($padraoAntigo, $placa) || preg_match($padraoNovo, $placa)) {

            echo "<h1>Placa válida</h1>";
            echo "<a href='cadastro.php'><button>Prosseguir</button></a>";
            echo "<a href='home.php'><button>Home</button></a>";

        } else {

            echo "<h1>Placa inválida</h1>";
            echo "<a href='home.php'><button>Home</button></a>";

        }
        



    /*

        Passo 1 - Fazer o form e pegar o valor da placa
        Passo 2 - Infomrar qual quais os padrões de placa com expressões regulares

            2.1 - Placa antiga regex
            2.2 - Placa nova  regex
        
        Passo 3 - Condicionais para validar se o valor da placa segue o padrão do regex

            3.1 - Se placa seguir o padrão mensagem de válido (botão prosseguir / home)
            3.2 - Se não seguir o padrão mensagem de não válido (botão home)
        
        Passo 4 - Página de cadastro

            4.1 - Trazer a placa com o session 
            4.2 - Input do modelo do veiculo 
            4.3 - Input do ano de frabricação 
            4.4 - Ano atual - ano de frabricação 

        Passo 5 - Retornar os dados dos inputs do passo 4 
        
    */




    ?>























 
</body>
</html>





