
<div class="container">
  <h1>Criar um curso</h1>
  <form class="" action="set_curso.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="nome">Nome do curso</label>
      <input type="text" id="nome" name="nome" class="form-control">
    </div>
    <div class="form-group">
      <label for="desc">Descrição do curso</label>
      <input type="text" id="desc" name="desc" class="form-control">
    </div>
      <label for="arquivo">Thumbnail</label>
      <input type="file" id="arquivo" name="arquivo" >
      <br />
      <input type="submit" class="btn btn-primary">
  </form>
</div>
