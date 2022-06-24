<?php
  if(!isset($_SESSION)){
    session_start();
  }
  include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-Br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animed</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
      if(isset($_SESSION['id'])){
        echo "Bem vindo ", $_SESSION['nome'];
      }
      include('components/header.php');
    ?>
    <main>
      <div class="container">
        <?php
          $sql_code = "SELECT * FROM servicos";
          $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL:" . $mysqli->error);

          for($i = 1; $servico = $sql_query->fetch_row(); $i++){
            $text = '
            <div class="item">
              <a href="servicos.php?type='.$i.'">
                <div>
                  <img src="'.$servico[3].'" class="img-serv">
                  <h1>'.$servico[1].'</h1>
                </div>
              </a>
            </div>';
            echo $text;
          }
        ?>
      </div>
    </main>
    <?php include('components/footer.php');?>
  </body>
</html>
