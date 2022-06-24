<footer>
    <ul>
      <li id="servicos">
        <h3>Serviços</h3>
        <ul>
          <?php
            $sql_code = "SELECT nome FROM servicos";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL:" . $mysqli->error);
            $i = 1;
            while ($servico = $sql_query->fetch_row()){
              $text = '
                <li id="item">
                  <a href="servicos.php?type='.$i.'">
                    '.$servico[0].'
                  </a>
                </li>
              ';
              echo $text;
              $i++;
            }
          ?>
        </ul>
      </li>
    </ul>
    <ul>
      <li id="contato">
        <h3>Contato</h3>
        <ul>
          <li>animed.contado@gmail.com</li>
          <li>(93) 9 9199-9999</li>
        </ul>
      </li>
    </ul>
</footer>