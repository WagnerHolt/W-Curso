<?php
include '_conexao.php';
$id = $_GET['id'];

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
    <div class="container " style="margin-top: 40px; width: 600px">
      <h4>Atualizar Matrícula</h4>
      <form id="form" action="_atualizar_matricula.php" method="post">
      	<?php
      		$sql = "SELECT * FROM alunos WHERE id = $id";
      		$select = mysqli_query($con, $sql);
      		while($atualiza = mysqli_fetch_array($select)){

      	?>

        <div class="form-group">
          <label for="nro">Nro de Matrícula</label>
          <input type="number" class="form-control" id="nro" value="<?php echo $atualiza['matricula'] ?>" name="matricula" disabled>
          <input type="number" class="form-control"  value="<?php echo $id ?>" name="id" style="display: none">
         </div>

        <div class="form-group">
          <label for="nome">Nome do Aluno</label>
          <input type="text" class="form-control" id="nome" value="<?php echo $atualiza['nome'] ?>" name="nome" required>
         </div>

         <div class="form-group">
          <label for="email">E-mail do Aluno</label>
          <input type="email" class="form-control" id="email" value="<?php echo $atualiza['email'] ?>" name="email" required>
         </div>

         <div class="form-group">
          <label for="fone">Telefone do Aluno</label>
          <input type="number" class="form-control" id="fone" value="<?php echo $atualiza['telefone'] ?>" name="telefone" required>
         </div>

         <div class="form-group">
          <label for="curso">Curso</label>
          <select class="form-control" id="curso" name="curso" value="<?php echo $atualiza['curso'] ?>">
            <option>HTML, CSS e JavaScript</option>
            <option>PHP</option>
            <option>MySQL</option>
          </select>
         </div>

         <div style="text-align: right;">
          <button type="submit" class="btn btn-sm btn-success" id="botao">Atualizar</button>
         </div>
 	    <?php } ?>
      </form>
      
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>