<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Cliente</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome / Razão Social</label>
      <input type="text" class="form-control" name="cliente['nome']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CNPJ / CPF</label>
      <input type="text" class="form-control" name="cliente['cpf_cnpj']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Nascimento</label>
      <input type="date" class="form-control" name="cliente['nasc']">
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1">Endereço</label>
      <input type="text" class="form-control" name="cliente['endereco']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Bairro</label>
      <input type="text" class="form-control" name="cliente['bairro']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">CEP</label>
      <input type="text" class="form-control" name="cliente['cep']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="cliente['created']" disabled>
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo1">Município</label>
      <input type="text" class="form-control" name="cliente['cidade']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo2">Telefone</label>
      <input type="text" class="form-control" name="cliente['telefone']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">Celular</label>
      <input type="text" class="form-control" name="cliente['celular']">
    </div>
    
    <div class="form-group col-md-1">
      <label for="campo3">UF</label>
      <input type="text" class="form-control" name="cliente['estado']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">Inscrição Estadual</label>
      <input type="text" class="form-control" name="cliente['ie']">
    </div>
    
    <!--<div class="form-group col-md-2">
      <label for="campo3">Estado</label>
      <input type="text" class="form-control">
    </div>-->
  </div>
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>
