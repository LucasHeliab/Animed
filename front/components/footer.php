<footer>
    <ul>
      <li id="servicos" class="col-3">
        <h3>Serviços</h3>
        <ul>
          <?php
            include('conexao.php');

            $sql_code = "SELECT nome FROM servicos";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL:" . $mysqli->error);

            while ($servico = $sql_query->fetch_row()){
              $text = '<li id="item" class="col-3">'.$servico[0].'</li>';
              echo $text;
            }
          ?>
        </ul>
      </li>
    </ul>
    <ul>
      <li id="medicos" class="col-3"><h3>Médicos</h3></li>
    </ul>
    <ul>
      <li id="contato" class="col-3"><h3>Contato</h3></li>
    </ul>
</footer>