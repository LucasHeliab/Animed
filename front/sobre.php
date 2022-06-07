<!DOCTYPE html>
<html lang="pt-Br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sobre</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <header>
      <h1>Animed</h1>
      <nav>
        <a href="index.php">Home</a>
        <a href="sobre.php">Sobre</a>
        <?php
          if(isset($_SESSION['id'])){
            echo ('
              <a href="login.php">Logout</a>
            ');
          }else{
            echo ('
              <a href="cadastro.php">Cadastre-se</a>
              <a href="login.php">Login</a>

            ');
          }
        ?>
      </nav>
    </header>
    <main>
      <div class="container">
        <div class="row col-12">
          <img src="" alt="imagem" />
          <div>
            <h3>Texto sobre a clinica</h3>
          </div>
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
