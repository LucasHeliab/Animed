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
  </head>
  <body>
    <header>
      <div class="row vertical-justify col-12">
        <nav>
          <ul>
            <li class="col-2"><a href="index.php">Home</a></li>
            <li class="col-2"><a href="sobre.html">Sobre</a></li>
            <li class="col-2"><a href="cadastro.html">Cadastre-se</a></li>
            <li class="col-2"><a href="login.html">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>
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
    <footer>
      <div class="row">
        <ul>
          <li id="servicos" class="col-3">Serviços</li>
        </ul>
        <ul>
          <li id="medicos" class="col-3">Médicos</li>
        </ul>
        <ul>
          <li id="contato" class="col-3">Contato</li>
        </ul>
      </div>
    </footer>    
  </body>
</html>