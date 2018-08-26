<?php
/* Smarty version 3.1.31, created on 2017-10-22 20:32:36
  from "C:\xampp\htdocs\dashboard\mvc_de_verdade\view\contato.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59ece4443b7db2_69263648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd29e582dc4fd0b78faabfc615cf2d109279aa1ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\mvc_de_verdade\\view\\contato.tpl',
      1 => 1508697151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ece4443b7db2_69263648 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2><?php echo $_smarty_tpl->tpl_vars['CONTATO']->value;?>
</h2>
<div class="container">
    <div class="row">

        <form class="form-horizontal" id="frmcontatoazul">
        <fieldset>

        <!-- Form Name -->
        <legend>Contato</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txtinputnome">Nome</label>
          <div class="col-md-8">
          <input id="txtinputnome" name="txtinputnome" placeholder="Escreva seu nome completo" class="form-control input-md" required="required" type="text" />
          <span class="help-block">help</span>
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txtinputemail">Email</label>
          <div class="col-md-8">
          <input id="txtinputemail" name="txtinputemail" placeholder="Coloque um email válido" class="form-control input-md" required="required" type="email" />
          <span class="help-block">help</span>
          </div>
        </div>


        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txtinputarea">Mensagem</label>
          <div class="col-md-8">
            <textarea class="form-control" id="txtinputarea" rows="6" name="txtinputarea" placeholder="Escreva sua opinião, crítica ou sugestão para o site"></textarea>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="btnenviar"></label>
          <div class="col-md-8">
            <button id="btnenviar" name="btnenviar" class="btn btn-primary btn-lg">Enviar</button>
          </div>
        </div>

        </fieldset>
        </form>

	</div>
</div>
<?php }
}
