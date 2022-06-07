<?php

  if(isset($_POST['nome']) || isset($_POST['email'])|| isset($_POST['telefone']) || isset($_POST['endereco']) || isset($_POST['senha']) || isset($_POST['senha_confir'])){
    if(strlen($_POST['nome']) == 0 || strlen($_POST['email']) == 0 || strlen($_POST['telefone']) == 0 || strlen($_POST['endereco']) == 0 || strlen($_POST['senha']) == 0 || strlen($_POST['senha_confir']) == 0){
      echo "Preencha todos os campos";
    } else if($_POST['senha'] != $_POST['senha_confir']){
      echo "As senhas dos campos senha e confirmar senha devem ser iguais!!";
    } else{
      include('conexao.php');

      $criptografada = md5($_POST['senha']);

      $nome = $mysqli->real_escape_string($_POST['nome']);
      $email = $mysqli->real_escape_string($_POST['email']);
      $endereco = $mysqli->real_escape_string($_POST['endereco']);
      $telefone = $mysqli->real_escape_string($_POST['telefone']);
      $senha = $mysqli->real_escape_string($criptografada);

      $sql_code = "SELECT * FROM usuario WHERE email = '$email'";
      $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL:" . $mysqli->error);

      if($sql_query->num_rows == 0){

        $sql_code = "INSERT INTO `usuario` (`id`, `nome`, `email`, `endereco`, `telefone`, `senha`) VALUES (NULL, '$nome', '$email', '$endereco', '$telefone', '$senha');";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL:" . $mysqli->error);

        $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha';";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL:" . $mysqli->error);


        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)){
          session_start();
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];

        header("Location: index.php");
      } else{
        echo "Email já cadastrado";
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css" />
    <title>Cadastro</title>
  </head>
  <body>
    <div class="box">
      <form id="register-form" method="POST">
        <fieldset>
          <legend><b>Cadatre-se</b></legend>

          <br />

          <div class="inputBox">
            <label for="nome">Nome completo</label>
            <input
              type="text"
              name="nome"
              id="nome"
              class="inputUser"
              data-required
              data-min-length="3"
              data-only-letters
            />
          </div>
          <br /><br />

          <div class="inputBox">
            <label for="email">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              class="inputUser"
              data-required
              data-email-validate
            />
          </div>
          <br /><br />

          <div class="inputBox">
            <label for="telefone">Telefone</label>
            <input
              type="tel"
              name="telefone"
              id="telefone"
              class="inputUser"
              data-required
              data-only-phone
            />
          </div>
          <br /><br />

          <div class="inputBox">
            <label for="endereco">Endereço</label>
            <input
              type="text"
              name="endereco"
              id="endereco"
              class="inputUser"
              data-required
              data-only-url
            />
          </div>
          <br /><br />

          <div class="inputBox">
            <label for="senha">Senha</label>
            <input
              type="text"
              name="senha"
              id="senha"
              class="inputUser"
              data-required
              data-only-url
            />
          </div>
          <br /><br />
          <div class="inputBox">
            <label for="senha_confir">Confirme a Senha</label>
            <input
              type="text"
              name="senha_confir"
              id="senha_confir"
              class="inputUser"
              data-required
              data-only-url
            />
          </div>
          <br /><br />
          <button type="submit">
              Cadastrar
          </button>
          <br /><br />
          <button onclick="history.go(-1)">
            Cancelar
          </button>
        </fieldset>
      </form>
    </div>
    <p class="error-validation template"></p>
  </body>
</html>
