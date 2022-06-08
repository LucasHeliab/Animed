<?php
  if(!isset($_SESSION)){
    session_start();
  }
  include('conexao.php');
  $id_page = $_GET['type'];

  $sql_code = "SELECT * FROM servicos WHERE id = '$id_page';";
  $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL:" . $mysqli->error);

  if($sql_query->num_rows == 1){
    $page = $sql_query->fetch_assoc();

    $nome_page = $page['nome'];
    $descricao_page = $page['descricao'];
    $imagem_page = $page['imagem'];

  } else{
    header("Location: index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nome_page?></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php include('components/header.php'); ?>
    <main>
      <div class="container">
        <div class="row col-12">
          <h2><?php echo $nome_page?></h2>
          <img src="<?php echo $imagem_page?>" alt="imagem" />
          <div>
            <h3><?php echo $descricao_page?></h3>
          </div>
        </div>
      </div>
    </main>
    <?php include('components/footer.php');?>   
  </body>
</html>