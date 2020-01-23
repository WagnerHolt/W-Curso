<?php
include '_conexao.php';

$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$curso = $_POST['curso'];

$sql = "INSERT INTO alunos (matricula, nome, email, telefone, curso) VALUES ($matricula, '$nome', '$email', $telefone, '$curso')";
$insert = mysqli_query($con, $sql);

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>W Cursos</title>
  </head>
  <body>
    <div class="container" style="margin-top: 40px">
    	<center>
    		<h4>Aluno Inscrito com sucesso!</h4>
    	</center>
    	<center>
    		<a href="index.php" class="btn btn-sm btn-info">Inscrever novo aluno</a>
    	</center>
      
    </div>
  </body>
</html>