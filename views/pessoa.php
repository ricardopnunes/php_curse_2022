<?php
  $dados_pessoas = [
    [
        "id" => 1,
        "nome" =>"Ricardo P Nunes",
        "status" =>"Ativo",
        "email" =>"ricardopontin145@gmail.com",
        "phone" =>"54 991754639",
        "gender" =>"M",
        "type" =>"CPF",
        "cep" =>"95707110",
        
    ],
    
    [
        "id" =>2,
        "nome" =>"Aviao P Nunes",
        "status" =>"Ativo",
        "email" =>"Avião@gmail.com",
        "phone" =>"54 991759999",
        "gender" =>"M",
        "type" =>"CNPJ",
        "cep" =>"95707110",
    ],
    
    [
        "id" =>3,
        "nome" =>"Babybaby do Biruleibe Leibe",
        "status" =>"Ativo",
        "email" =>"Avião@gmail.com",
        "phone" =>"54 991759999",
        "gender" =>"M",
        "type" =>"CNPJ",
        "cep" =>"95707110",
    ],
    
    [
        "id" =>4,
        "nome" =>"Lohaine Stefâni Do HAHAHA",
        "status" =>"Ativo",
        "email" =>"Avião@gmail.com",
        "phone" =>"54 991759999",
        "gender" =>"M",
        "type" =>"CNPJ",
        "cep" =>"95707110",
    ],
    
    [
        "id" => 5,
        "nome" =>"Ricardo P Nunes",
        "status" =>"Ativo",
        "email" =>"ricardopontin145@gmail.com",
        "phone" =>"54 991754639",
        "gender" =>"M",
        "type" =>"CPF",
        "cep" =>"95707110",
        
    ],
    
    [
        "id" =>6,
        "nome" =>"Aviao P Nunes",
        "status" =>"Ativo",
        "email" =>"Avião@gmail.com",
        "phone" =>"54 991759999",
        "gender" =>"M",
        "type" =>"CNPJ",
        "cep" =>"95707110",
    ],
    
    [
        "id" =>7,
        "nome" =>"Babybaby do Biruleibe Leibe",
        "status" =>"Ativo",
        "email" =>"Avião@gmail.com",
        "phone" =>"54 991759999",
        "gender" =>"M",
        "type" =>"CNPJ",
        "cep" =>"95707110",
    ],
    
    [
        "id" =>8,
        "nome" =>"Lohaine Stefâni Do HAHAHA",
        "status" =>"Ativo",
        "email" =>"Avião@gmail.com",
        "phone" =>"54 991759999",
        "gender" =>"M",
        "type" =>"CNPJ",
        "cep" =>"95707110",
    ],
    ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="./scripts/pessoa.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<button type="button" class="btn btn-primary btnCriarUsuario" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Cadastrar
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Cadastro</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <div class="modal-body">
    <div class="mb-3 row">
        <div class="col-md-2">
          <input type="number" id="idBanco" class="form-control" placeholder="ID" min="0" readonly>
        </div>
      </div>
      <div class="mb-3 row">
        <div class="col-md-6">
          <input type="email" id="idEmail" class="form-control"  placeholder="E-mail">
        </div>
      </div>
    <div class="mb-3 row">
      <div class="col-md-4">
        <input type="text" id="idNome" class="form-control" placeholder="Nome">
      </div>
    </div>
    <div class="mb-4 row">
      <script src="./scripts/index.js"></script>
        <div class="col-sm-3">
          <input oninput="mask_cpf(this)" class="form-control" type="text" placeholder="CPF">
        </div>
    </div>
    <div class="mb-3 row">
      <div class="col-md-3">
       <input type="text" class="form-control" id="inputRG" placeholder="RG">
      </div>
    </div>
    <div class="mb-3 row">
      <div class="col-sm-3">
        <input oninput="mask_cep(this)" type="text" class="form-control" id="inputCEP" placeholder="CEP">
      </div>
    </div>
    <div class="mb-3 row">
      <div class="col-md-3">
        <input type="text" class="form-control" id="inputPassword" placeholder="Rede Social">
      </div>
    </div>
    <div class="mb-1 row">
      <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm selectGenero">
        <option selected>Abra para selecionar seu Genero</option>
        <option value="1">Masculino</option>
        <option value="2">Feminino</option>
        <option value="3">Outros</option>
      </select>
    </div>
    <div class="mb-1 row">
      <select class="form-select form-select-sm mb-3" aria-label="size 1 form-select-lg example">
      <option selected>Abra para selecionar seu estado civil</option>
      <option value="1">Solteiro</option>
      <option value="2">Casado</option>
      <option value="3">Viuvo</option>
      </select>
    </div>
    <div class="mb-3 row">
      <div class="col-sm-4">
        <input type="date" class="form-control" id="inputDate" placeholder="Data de Nascimento">
      </div>
    </div>
    <div class="mb-3 row">
      <div class="col-md-3">
        <input type="text" id="inputPhone" class="form-control" placeholder="Celular" onkeypress="mask_phone(this, mphone)">
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
    <button type="button" class="btn btn-primary btnSalvarUsuariop">Salvar</button>
  </div>
</div>
</div>
</div>
</body>
<footer>
<table id="idTabelaUsuarios" class="table table-responsive table-dark table-striped">
</table>
<?php
 // require "./tabela_dinamica.php";
?>

</footer>
</html>