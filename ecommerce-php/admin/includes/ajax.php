<?php
  session_start();
  if(!isset($_SESSION['usuario'])){
    header('Location:index.php?erro=1');
  }
?>
<script>
$(document).ready(function(){
  $.ajax({
        url: 'requisitions/get_compras.php',
        success: function (data){
          $('#content').html(data);
        }
  })
  $('#cadastrar').click(function(){
    $.ajax({
          url: 'pages/cadastrar_usuario.php',
          success: function (data){
            $('#content').html(data);
          }
    })
  });
});
</script>
