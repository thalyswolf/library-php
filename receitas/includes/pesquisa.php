<?php include('includes/header.php'); ?>

<h2>Pesquisa</h2>
<h3>Sua opinião é muito importante para nós</h3>

<form action="../recebe_pesquisa.php" method="post">
    <p>Dados pessoais</p><br />
    <label for="nome">Seu nome:</label><br />
    <input type="text" name="nome" value="" size="50">
    <br />
    <label for="nome">Endereço:</label><br />
    <input type="text" name="endereco" value="" size="50">
    <br />
    <p>Dados da pesquisa</p><br />
    <label for="classificacao">Como avalia nosso site?</label><br />
    <input type="radio" name="genre" value="Bom" checked id="_genre">
    <label for="_genre">Bom</label>    

    <input type="radio" name="genre" value="Medio" id="_genre"> 
    <label for="_genre">Médio</label>    

    <input type="radio" name="genre" value="Ruim" id="_genre">
    <label for="_genre">Ruim</label>    
    <br />   

    <p>Por favor, nos deixe sua mensagem :)</p><br />   
    <textarea rows="5" cols="50" name="mensagem"></textarea>
    <br />
    <p>Classifique nosso site!</p>
    <?php
        for($i=1;$i<6; $i++){ ?>
        <input type="radio" name="nota" value="<?= $i ?>">
        <label for="nota_<?= $i ?>">
            <?php 
              for($j=0;$j<$i; $j++){
                 echo'*';
            }
             echo'<br />  ';
            }
            ?>    
        </label>
        <input type="submit" name="" value="Enviar" style="width:370px; height:40px;">
</form>
<?php include('includes/footer.php');?>


