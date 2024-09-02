<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css">
    <title>OPÇÕES FUNCIOANRIO</title>
    <style>
h1{
    text-align: center;
}

button{
    text-align: center;
    border-radius: 50px;
    background-color: darkblue;
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

 
    <h1>Controle de entradas e saidas</h1>

    <div class="controle">
    <form method="POST">
    <label>informe o nome do cliente </label>
    <input type="text" id="nome" name="nome"><br><br>

    <label>informe o carro do cliente </label>
    <input type="text" id="carro" name="carro"><br><br>

    <label>informe o horario em que o carro entrou</label>
    <input type="Number" id="hrEntrada" name="hrEntrada"><br><br>
   
    <label>informe o dia em que o carro entrou </label>
    <input type="Number" id="diaEntrada" name="diaEntrada"><br><br>
   
    <label>informe o horario em que o carro saiu</label>
    <input type="Number" id="hrSaida" name="hrSaida"><br><br>
 
    <label>informe o dia em que o carro saiu </label>
    <input type="Number" id="diaSaida" name="diaSaida"><br><br>
   
    <label>gere e informe o codigo </label>
    <input type="Number" id="codigo" name="codigo"><br><br>
    


    <button>imprimir notinha
        <?php
        session_start();
        try{
            $_SESSION['nome']       = $_POST['nome'];
            $_SESSION['carro']      = $_POST['carro'];
            $_SESSION['hrEntrada']  = $_POST['hrEntrada'];
            $_SESSION['hrSaida']    = $_POST['hrSaida'];
            $_SESSION['diaEntrada'] = $_POST['diaEntrada'];
            $_SESSION['diaSaida']   = $_POST['diaSaida'];
            $_SESSION['codigo']     = $_POST['codigo'];
            }catch(exception $erro){
            echo $erro;
        }
        ?>
    </button>
    </div>
<button><a href="Notinha.php"></button>IMPRIMIR NOTINHA</a>