<?php include('includes/header.php'); ?>
        <h2>Contatos</h2>
        <p>Contato recebido</p>
            <?php if (isset($_POST['action'])&& $_POST['action'] == 'new_contact'):?>
               <p><b><?= $_POST['nome'] ?></b>, sua mensagem foi recebida</p>
            <?php endif ?>  

            <h3>Dados recebidos</h3>
            <table border="4px">
                <tr>
                    <th>Campo</th>
                    <th>Valor</th>
                </tr>
                <tr>
                    <th>Nome</th>
                    <td><?= $_POST['nome'] ?></td>
                </tr>
                <tr>
                    <th>Endereço</th>
                    <td><?= $_POST['endereco'] ?></td>
                </tr>
            </table>     
<?php include('includes/footer.php'); ?>