<?php include('includes/header.php'); ?>
<h2>Obrigado por sua avaliação</h2>

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
        <tr>
            <th>Avaliação da receita</th>
            <td><?= $_POST['genre'] ?></td>
        </tr>
        <tr>
            <th>Mensagem do usuário</th>
            <td><?= $_POST['mensagem'] ?></td>
        </tr>
        <tr>
            <th>Avaliação do site</th>
            <td><?= $_POST['nota'] ?></td>
        </tr>
     </table>
<?php include('includes/footer.php');?>