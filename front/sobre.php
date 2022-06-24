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
      <div class="box">
        <div class="descricao">
          <h2>Animed</h2>
          <img src="<?php echo $imagem_page?>" class="img-serv" />
          <div class="text">
            <p>O Hospital Veterinário Animed nasceu da vontade de participar da vida de pets e donos, para fortalecer e aproximar esta união, conseguindo, assim, entender às necessidades dos nossos clientes e conseguir corresponder com excelência e qualidade.</p>
            <p>
              Por entender essa importância, nos sensibilizamos diante da relação de amor e dedicação que temos com nossos animais. Oferecendo uma equipe de profissionais qualificados e dedicados, trabalhamos para que você entenda que entregar seu companheiro em nossas mãos é ter a certeza de que toda a dedicação e respeito investidos é uma extensão do amor que nós sentimos por cuidar.
            </p>
          </div>
        </div>
      </div>
    </main>
    <?php include('components/footer.php'); ?>
  </body>
</html>
