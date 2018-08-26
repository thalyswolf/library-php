
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Painel</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
    
    $(document).ready(function(){
      $.ajax({
          url:'monta_select_curso.php',
          success: function (data){
            $('#cursos').html(data);
            $('#cursos2').html(data);
          }
      });
      $('#buscar').click(function(){
        $.ajax({
            url:'get_modulos.php',
            method:'post',
            data:{id:$('#cursos2').val()},
            success: function (data){
              $('#lista_modulos').html(data);
            }
        });
      });


    });

    </script>
  </head>
  <body>

    <div class="container">
      <?php require('include/menu.php'); ?>
      <div class="col-sm-6" style="border-right:4px solid gray; shadow:2px 2px 1px black;">
        <h1>Adicionar módulo</h1>
        <form class="" action="set_modulo.php" method="post">
          <label for="cursos"><p>Escolha o curso</p></label>
          <select id="cursos" name="curso">
          </select>
          <br />
          <div class="form-group">
            <label for="nome">Digite o nome do módulo</label>
            <input type="text" id="nome" name="nome" class="form form-control">
          </div>
          <br />
          <div class="form-group">
            <label for="desc">Digite a descrição</label>
            <input type="text" id="desc" name="desc" class="form form-control">
          </div>
          <input type="submit" class="btn btn-primary" value="Cadastrar">
        </form>
      </div>
      <div class="col-sm-6">
        <h1>Adicionar conteúdo ao módulo</h1>
        <select id="cursos2" name="curso">
        </select>
        <a href="#" id="buscar"><span class="glyphicon glyphicon-search" style="color:black"></span></a>
        <div class="row container">
          <div id="lista_modulos">

          </div>
        </div>
      </div>
    </div>
  </body>
</html>
