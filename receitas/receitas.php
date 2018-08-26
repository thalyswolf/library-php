<?php include('includes/header.php'); ?>
    <!-- conteúdo -->
    <h2>Receitas</h2>

    <!-- lista de receitas  -->
    <ul>
      <li><a href="receitas/01-ovos-mexidos.php">Ovos mexidos com bacon</a></li>
      <li> <a href="receitas/02-fazendo-gelo.php">Fazendo Gelo</a></li>
    </ul>
    <hr />
    <h1>Mais receitas</h1>
    <ul>
      <?php
        if($sql = $mysqli->prepare("SELECT id, nome, dificuldade, descricao FROM receitas ORDER BY id DESC")){
          //$sql -> bind_param('s', $data);

          //executa a consulta
          $sql->execute();

          // Atribui o resultado encontrado nas variáveis
          $sql->bind_result($id, $nome, $dificuldade, $descricao);

          //exibe os nomes
          while($sql->fetch()){
            echo("<li><a href=\"receitas_detalhes.php?id=$id\">$nome</a> $descricao <b>$dificuldade</b></li>");
          }
        }

      ?>
    </ul>

<?php include('includes/footer.php'); ?>
