<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cursos</title>
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
              url:'get_lista_cursos.php',
              success: function (data){
                $('#conteudo').html(data);
              }
          });
          $('#criar_curso').click(function(){
            $.ajax({
                url:'criar_curso.php',
                success: function (data){
                  $('#conteudo').html(data);
                }
            });
          });
      });
    </script>

  </head>


  <link rel="stylesheet" href="style.css">
  <body>
    <div class="container">
      <?php require('include/menu.php'); ?>

      <div id="conteudo">

      </div>
    </div>
  </body>
</html>
