<?php
  if(!isset($_SESSION)){
    session_start();
  }
?>
<!DOCTYPE html>
<html lang="pt-Br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Animed</title>
    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
    <?php
      if(isset($_SESSION['id'])){
        echo "Bem vindo ", $_SESSION['nome'];
      }
    ?>
    <header id="header">
      <div class="row vertical-justify col-12">
        <nav>
          <ul>
            <li class="col-2"><a href="index.html">Home</a></li>
            <li class="col-2"><a href="sobre.html">Sobre</a></li>
            <?php
              if(isset($_SESSION['id'])){
                echo ('
                  <li class="col-2"><a href="login.php">Logout</a></li>
                ');
              }else{
                echo ('
                  <li class="col-2"><a href="cadastro.php">Cadastre-se</a></li>
                  <li class="col-2"><a href="login.php">Login</a></li>

                ');
              }
            ?>
          </ul>
        </nav>
      </div>
    </header>
    <main>
      <div class="container">
        <div class="row col-12">
          <a href="consultas.html" class="col-4">
            <div>
              <img src="" class="img-serv" />
              <h1>Consultas</h1>
            </div>
          </a>
          <a href="uti.html" class="col-4">
            <div>
              <img src="" class="img-serv" />
              <h1>UTI</h1>
            </div>
          </a>
          <a href="exames.html" class="col-4">
            <div>
              <img src="" class="img-serv" />
              <h1>Exames</h1>
            </div>
          </a>
          <a href="cirurgias.html" class="col-4">
            <div>
              <img src="" class="img-serv" />
              <h1>Cirurgias</h1>
            </div>
          </a>
          <a href="taxiPet.html" class="col-4">
            <div>
              <img src="" class="img-serv" />
              <h1>Taxi Pet</h1>
            </div>
          </a>
          <a href="farmacia.html" class="col-4">
            <div>
              <img src="" class="img-serv" />
              <h1>Farmácia Veterinária</h1>
            </div>
          </a>
        </div>
      </div>
    </main>
    <footer id="footer" class="col-12">
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
