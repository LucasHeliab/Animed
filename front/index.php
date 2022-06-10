<?php
  if(!isset($_SESSION)){
    session_start();
  }
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
        <div class="item">
          <a href="servicos.php?type=1" class="col-4">
            <div>
              <img src="" class="img-serv" />
              <h1>Consultas</h1>
            </div>
          </a>
        </div>

        <div class="item">
          <a href="servicos.php?type=2" class="col-4">
            <div>
              <img src="" class="img-serv" />
              <h1>UTI</h1>
            </div>
          </a>
        </div>
        
        <div class="item">
          <a href="servicos.php?type=3" class="col-4">
            <div>
              <img src="" class="img-serv" />
              <h1>Exames Laboratoriais</h1>
            </div>
          </a>
        </div>

        <div class="item">
          <a href="servicos.php?type=4" class="col-4">
            <div>
              <img src="" class="img-serv" />
              <h1>Cirurgias</h1>
            </div>
          </a>
        </div>

        <div class="item">
          <a href="servicos.php?type=5" class="col-4">
            <div>
              <img src="" class="img-serv" />
              <h1>Taxi Pet</h1>
            </div>
          </a>
        </div>

        <div class="item">
          <a href="servicos.php?type=6 Veterinária" class="col-4">
            <div>
              <img src="" class="img-serv" />
              <h1>Farmácia Veterinária</h1>
            </div>
          </a>
        </div>
      </div>
    </main>
    <?php include('components/footer.php');?>
  </body>
</html>
