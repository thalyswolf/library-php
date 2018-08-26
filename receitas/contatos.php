<?php include('includes/header.php'); ?>
    <!-- conteúdo -->
    <h2>Contatos</h2>
    <h3>Entre em contato</h3>

    <form action="recebe_contato.php" method="post">
        <input type="hidden" name="action" value="new_contact">
        <label for="nome">Seu nome:</label><br />
        <input type="text" name="nome" id="nome" value=""><br />
        <label for="nome">Seu endereço:</label> <br />
        <textarea rows="5" name ="endereco" cols="30" id="endereco"></textarea><br />
        <input type="submit" name="" value="Enviar">
    </form>
<?php include('includes/footer.php'); ?>
