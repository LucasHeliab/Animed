<?php

  if(isset($_POST['email'])|| isset($_POST['senha'])){
    if(strlen($_POST['email']) == 0 || strlen($_POST['senha']) == 0){
      echo "Preencha seu e-mail e/ou senha";
    } else{
      include('conexao.php');
      
      $criptografada = md5($_POST['senha']);
      $email = $mysqli->real_escape_string($_POST['email']);
      $senha = $mysqli->real_escape_string($criptografada);

      $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha';";
      $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL:" . $mysqli->error);

      if($sql_query->num_rows == 1){

        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)){
          session_start();
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];

        header("Location: index.php");
      }else{
        echo "Falha ao logar! E-mail ou senha incorretos";
      }
    }
  }else{
    if(!isset($_SESSION)){
      session_start();
    }
    if(isset($_SESSION['id'])){
      session_destroy();
  
      header("Location: index.php");

    }
  }
?>

<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="box">
      <form id="login-form" action="" method="POST">
        <fieldset>
          <legend><b>Login</b></legend>

          <br />

          <div class="inputBox">
            <label for="email">E-mail</label>
            <input
              type="email"
              name="email"
              id="email"
              class="inputUser"
              data-required
            />
          </div>
          <br /><br />

          <div class="inputBox">
            <label for="senha">Senha</label>
            <input
              type="password"
              name="senha"
              id="senha"
              class="inputUser"
              data-required
            />
          </div>
          <br /><br />

          <button type="submit">
             Login 
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
