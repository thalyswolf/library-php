<?php
  $id_curso = isset($_GET['id_curso']) ? $_GET['id_curso'] : null;
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Teste e-learning</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
    function req(id_aula){
      $.ajax({
          url:'get_aula.php',
          method:'post',
          data:{id:id_aula},
          success: function (data){
            $('#area-aula').html(data);
          }
      });
    }
      $(document).ready(function(){
          $.ajax({
              url:'get_cursos.php',
              method:'post',
              data:{id:<?=$id_curso?>},
              success: function (data){
                $('#menu-vertical').html(data);
              }
          });
      });
    </script>
  </head>
  <body>

    <div class="container">
      <div id="menu-vertical" class="col-sm-4">

      </div>
      <div id="area-aula" class="col-sm-8">

      </div>
    </div>
  </body>
</html>
