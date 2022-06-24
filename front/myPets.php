<?php
   if(!isset($_SESSION)){
    session_start();
  }
  include('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-Br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sobre</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php include('components/header.php'); ?>
    <main>
      <div class="list">
        <table>
          <thead>
            <tr>
              <th id="list-head">Nome</th>
              <th id="list-head">Espécie</th> 
            </tr>
          </thead>
          <tbody>
            <?php
               $idDono = $_SESSION['id'];
               $sql_code = "SELECT nome,especie FROM pet WHERE idDono = '$idDono'";
               $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL:" . $mysqli->error);

               while ($servico = $sql_query->fetch_row()){
                 $text = '
                   <tr class="list-body">
                     <th>
                       '.$servico[0].'
                     </th>
                     <th>
                       '.$servico[1].'
                     </th>
                   </tr>
                 ';
                 echo $text;
               }
            ?>
          </tbody>
        </table>
        <div>
          <a href="cadastroPet.php">
            Cadastrar novo
          </a>
        </div>
      </div>
    </main>
    <?php include('components/footer.php'); ?>
  </body>
</html>
