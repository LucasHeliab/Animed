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
      include('header.php');
    ?>
    <main>
      <div class="container">
        <div class="row col-12">
          <a href="servicos.php?type=1" class="col-4">
            <div>
              <img src="" class="img-serv" />
              <h1>Consultas</h1>
            </div>
          </a>
          <a href="servicos.php?type=2" class="col-4">
            <div>
              <img src="" class="img-serv" />
              <h1>UTI</h1>
            </div>
          </a>
          <a href="servicos.php?type=3" class="col-4">
            <div>
              <img src="" class="img-serv" />
              <h1>Exames Laboratoriais</h1>
            </div>
          </a>
          <a href="servicos.php?type=4" class="col-4">
            <div>
              <img src="" class="img-serv" />
              <h1>Cirurgias</h1>
            </div>
          </a>
          <a href="servicos.php?type=5" class="col-4">
            <div>
              <img src="" class="img-serv" />
              <h1>Taxi Pet</h1>
            </div>
          </a>
          <a href="servicos.php?type=6 Veterinária" class="col-4">
            <div>
              <img src="" class="img-serv" />
              <h1>Farmácia Veterinária</h1>
            </div>
          </a>
        </div>
      </div>
    </main>
    <footer>
      <ul>
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
