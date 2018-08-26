<form action="submitions/set_usuarios.php" method="post">
      <h1>Dados pessoais</h1>
      <div class="form-group">
        <label for="name">Nome completo</label>
        <input type="text" id="name" name="name" class="form-control">
      </div>
      <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" id="cpf" name="cpf" class="form-control">
      </div>
      <div class="form-group">
        <label for="rg">RG</label>
        <input type="text" id="rg" name="rg" class="form-control">
      </div>
      <div class="form-group">
        <label for="nasc">Data de nascimento</label>
        <input type="date" id="nasc" name="nasc" class="form-control">
      </div>
      <div class="form-group">
        <label for="endereco">Endereço</label>
        <input type="text" id="endereco" name="endereco" class="form-control">
      </div>
      <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" id="telefone" name="telefone" class="form-control">
      </div>
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" class="form-control">
      </div>
      <br />
      <h1>Dados do acesso</h1>
      <div class="form-group">
        <label for="usuario">Usuario</label>
        <input type="text" id="usuario" name="usuario" class="form-control">
      </div>
      <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" id="password" name="password" class="form-control">
      </div>
      <select name="permissao" class="form-group">
        <option value="1">Gerente</option>
        <option value="2" selected>Colaborador</option>
      </select>
      <br />
      <button type="submit" class="btn btn-custom">Cadastrar</button>
</form>
