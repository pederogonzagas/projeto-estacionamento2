<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css">
    <title>REGISTRAR MENSALISTA</title>
    <style>
    h1{
        text-align: center;
    }

    button{
        text-align: center;
    }

    .controle{
        text-align: center;
    }

    .funcionario{
        text-align: center;
    }

    .gerente{
        text-align: center;
    }

    .mensalista{
        text-align: center;
    }
    </style>
</head>
<body>

 
    <h1>registrar mensalista</h1>

    <div class="mensalista">
    <form method="POST">
    <label>informe o nome do cliente </label>
    <input type="text" id="nome" name="nome"><br><br>

    <label>informe o carro do cliente </label>
    <input type="number" id="telefone" name="telefone"><br><br>

    <label>informe o horario em que o carro entrou</label>
    <input type="text" id="endereco" name="endereco"><br><br>
   
    <label>informe o dia em que o carro entrou </label>
    <input type="text" id="carro" name="carro"><br><br>
   
    <label>informe o horario em que o carro saiu</label>
    <input type="text" id="placa" name="placa"><br><br>
 
    <label>informe o dia em que o carro saiu </label>
    <input type="text" id="cor" name="cor"><br><br>

    <label>informe a data de pagamento do cliente </label>
    <input type="number" id="dataPag" name="dataPag"><br><br>

    <label>informe o valor do pagamento mensal </label>
    <input type="number" id="valor" name="valor"><br><br>
  

    <button>registrar mensalista
    <?php
    session_start();
    try{
        $_SESSION['nome']     = $_POST['nome'];
        $_SESSION['telefone'] = $_POST['telefone'];
        $_SESSION['endereco'] = $_POST['endereco'];
        $_SESSION['carro']    = $_POST['carro'];
        $_SESSION['placa']    = $_POST['placa'];
        $_SESSION['cor']      = $_POST['cor'];
        $_SESSION['dataPag']  = $_POST['dataPag'];
        $_SESSION['valor']    = $_POST['valor'];
    }catch(Exception $erro){
        echo $erro;
    }
    ?>
    </button>
    </div>

    