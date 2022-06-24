<?php

  if(!isset($_SESSION)){
    session_start();
  }

  if(isset($_POST['nome']) || isset($_POST['especie'])|| isset($_POST['raca']) || isset($_POST['idade']) || isset($_POST['peso']) || isset($_POST['comprimento'])){
    if(strlen($_POST['nome']) == 0 || strlen($_POST['especie']) == 0 || strlen($_POST['raca']) == 0 || strlen($_POST['idade']) == 0 || strlen($_POST['peso']) == 0 || strlen($_POST['comprimento']) == 0){
      echo "Preencha todos os campos";
    } else {
      include('conexao.php');


      $nome = $mysqli->real_escape_string($_POST['nome']);
      $especie = $mysqli->real_escape_string($_POST['especie']);
      $raca = $mysqli->real_escape_string($_POST['raca']);
      $idade = $mysqli->real_escape_string($_POST['idade']);
      $peso = $mysqli->real_escape_string($_POST['peso']);
      $comprimento = $mysqli->real_escape_string($_POST['comprimento']);
      $idDono = $_SESSION['id'];


      $sql_code = "INSERT INTO `pet` (`id`, `nome`, `especie`, `raca`, `idade`,`peso`,`comprimento`, `idDono`) VALUES (NULL, '$nome', '$especie', '$raca', '$idade', '$peso','$comprimento', '$idDono');";
      $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL:" . $mysqli->error);

      header("Location: index.php");
    }
  }
?>

<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/form.css" />
    <title>Cadastro</title>
  </head>
  <body>
    <div class="box">
      <form id="register-form" method="POST">
        <fieldset>
          <legend><b>Cadastro de novo Pet</b></legend>

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
          
          <div class="inputBox">
            <label for="especie">Espécie</label>
            <input
              type="text"
              name="especie"
              id="especie"
              class="inputUser"
              data-required
              data-email-validate
            />
          </div>
          
          <div class="inputBox">
            <label for="raca">Raça</label>
            <input
              type="text"
              name="raca"
              id="raca"
              class="inputUser"
              data-required
              data-only-phone
            />
          </div>
          
          <div class="inputBox">
            <label for="idade">Idade</label>
            <input
              type="text"
              name="idade"
              id="idade"
              class="inputUser"
              data-required
              data-only-url
            />
          </div>
         
          <div class="inputBox">
            <label for="peso">Peso(gramas)</label>
            <input
              type="text"
              name="peso"
              id="Peso"
              class="inputUser"
              data-required
            />
          </div>
       
          <div class="inputBox">
            <label for="comprimento">Comprimento(cm)</label>
            <input
              type="text"
              name="comprimento"
              id="comprimento"
              class="inputUser"
              data-required
            />
          </div>
          
          <div class="buttons">
            <button class="cancelar" onclick="history.go(-1)">
              Cancelar
            </button>
            <button class="login" type="submit">
                Cadastrar 
            </button>
          </div>
        </fieldset>
      </form>
    </div>
    <p class="error-validation template"></p>
  </body>
</html>
