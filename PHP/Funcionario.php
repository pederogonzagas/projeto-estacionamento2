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

 
    <h1>registrar funcionario</h1>

    <div class="funcionario">
    <form method="POST">

    <label>informe o nome do codigo de funcionario </label>
    <input type="number" id="codigo" name="codigo"><br><br>

    <label>informe o nome do funcionario </label>
    <input type="text" id="nome" name="nome"><br><br>
    
    <label>informe o seu telefone</label>
    <input type="number" id="telefone" name="telefone"><br><br>
    
    <label>informe sua data de nascimento </label>
    <input type="number" id="cpf" name="cpf"><br><br>
   
    <label>informe o seu endereço</label>
    <input type="text" id="endereco" name="endereco"><br><br>

    <label>informe o seu endereço</label>
    <input type="number" id="id" name="id"><br><br>
   
    <label>informe o seu cargo </label>
    <input type="text" id="cargo" name="cargo"><br><br>
   
    <label>informe o seu salario</label>
    <input type="number" id="salario" name="salario"><br><br>

    <label>informe o seu salario</label>
    <input type="number" id="dtnascimento" name="dtnascimento"><br><br>
 

    

<button>
    <?php
session_start();
 
$_SESSION['codigo'] = $_POST['codigo'];  
$_SESSION['nome'] = $_POST['nome'];
$_SESSION['telefone'] = $_POST['telefone'];
$_SESSION['cpf'] = $_POST['cpf'];
$_SESSION['endereco'] = $_POST['endereco'];
$_SESSION['id'] = $_POST['id'];
$_SESSION['cargo'] = $_POST['cargo'];
$_SESSION['salario'] = $_POST['salario'];
$_SESSION['dtnascimento'] = $_POST['dtnascimento']
?>
</button>
<button><a href="Mensalista.php"></button>ADICIONAR MENSALISTA</a>
</div>