<header>
  <div class="side-left">
    <img src="img/logo.png" alt="logo" width="60">
    <h1>Animed</h1>
  </div>

  <div class="side-right">
    <nav>
      <a href="index.php">Home</a>
      <a href="sobre.php">Sobre</a>
      <?php
        if (isset($_SESSION['id'])) {
          echo ('
                <a href="myPets.php">Meus Pets</a>
                <a href="login.php">Logout</a>
              ');
        } else {
          echo ('
                <a href="cadastro.php">Cadastre-se</a>
                <a href="login.php">Login</a>
              ');
        }
      ?>
    </nav>
  </div>
</header>