<?php

    if(isset($_POST['submit']))
    {
      //  print_r('CPF: ' . $_POST['cpf']);
      //  print_r('<br>');
      //  print_r('CRECI: ' . $_POST['creci']);
      //  print_r('<br>');
      //  print_r('NOME: ' . $_POST['nome']);

      include_once('config.php');

    $cpf = $_POST['cpf'];
    $creci = $_POST['creci'];
    $nome = $_POST['nome'];

    $result = mysqli_query($conexao, "INSERT INTO corretor(cpf,creci,nome) VALUES ('$cpf','$creci','$nome')");
    
    }

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,user-scalable=0"/>
    <title>Cadastro de Corretor</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
</head>

    
        <body>
            <div>
                <form action="index.php" method="POST">
                    <fieldset id="fieldset">
                        <legend>Cadastro de Corretor</legend>
                            <label>
                                <input type="text" name="cpf" maxlength="14" placeholder="Digite seu CPF" required/>
                            </label>
                                <Label>
                                    <input type="text" name="creci" minlength="2" placeholder="Digite seu Creci" required/>
                                </Label> <br>
                                    <label>
                                        <input class="nome" type="text" name="nome" minlength="2" placeholder="Digite seu nome" required/>
                                    </label> <br>
                                            <input type="submit" name="submit" id="submit"></input>
                                                    
                    </fieldset>
                </form>
            </div>


        </body>
</html>