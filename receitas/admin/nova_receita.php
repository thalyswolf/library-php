<?php include('../includes/header.php'); ?>
    <!-- conteúdo -->
    <h2>Nova receita</h2>
    <h3>Cadastre a receita</h3>
    
    <form action="nova_receita.php" method="post">
        <input type="hidden" name="action" value="new_receita">
        <label for="nome">Seu nome:</label><br />
        <input type="text" name="nome" id="nome" value=""><br />
        
        <label for="dificuldade">Dificuldade:</label><br />
        <input type="number" name="dificuldade" id="dificuldade" value="7"><br />

        <label for="descricao">Descrição:</label> <br />
        <textarea rows="5" name ="descricao" cols="30" id="descricao"></textarea><br />
        <input type="submit" name="" value="Enviar">
    </form>
<?php include('../includes/footer.php'); ?>
