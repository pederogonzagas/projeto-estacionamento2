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

<h1>registrar gerente</h1>

    <div class="gerente">
    <form method="POST">

    <label>informe o nome do codigo de funcionario </label>
    <input type="number" id="codigo" name="codigo"><br><br>

    <label>informe o nome do funcionario </label>
    <input type="text" id="nome" name="nome"><br><br>

    <label>informe sua data de nascimento </label>
    <input type="number" id="dataNas" name="dataNas"><br><br>

    <label>informe o seu telefone</label>
    <input type="number" id="telefone" name="telefone"><br><br>
   
    <label>informe o seu endereço</label>
    <input type="text" id="endereco" name="endereco"><br><br>
   
    <label>informe o seu salario</label>
    <input type="number" id="salario" name="salario"><br><br>
 
    <label>informe o seu cargo </label>
    <input type="text" id="cargo" name="cargo"><br><br>
    

<button>
    <?php
    session_start();
    try{
        $_SESSION['codigo']    = $_POST['codigo'];
        $_SESSION['nome']     = $_POST['nome'];
        $_SESSION['dataNas'] = $_POST['dataNas'];
        $_SESSION['telefone'] = $_POST['telefone'];
        $_SESSION['endereco']    = $_POST['endereco'];
        $_SESSION['salario']    = $_POST['salario'];
        $_SESSION['cargo']      = $_POST['cargo'];
        
       
    }catch(Exception $erro){
        echo $erro;
    }?>
</button>
</div>

    <button><a href="Funcionario2.php"></button>MODIFICAR FUNCIONARIO</a>
