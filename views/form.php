<?php
require "../controllers/PessoaControllers.php";

  echo '<table class="table table-dark table-striped">
  <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Status</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Tipo</th>
        <th>CEP</th>
        <th>Genero</th>
        <th>ACAO</th>
      </tr>
    </thead>
    <tbody>';

      foreach($dados_pessoas as $dado):
        
      echo '<tr>
              <td>'.$dado['id'].'</td>
              <td>'.$dado['nome'].'</td>
              <td>'.$dado['status'].'</td>
              <td>'.$dado['email'].'</td>
              <td>'.$dado['phone'].'</td>
              <td>'.$dado['type'].'</td>
              <td>'.$dado['cep'].'</td>
              <td>'.$dado['gender'].'</td>
              <td>
                <button type="button" class="btnEditar btn-primary" value='.$dado['id'].'>Editar</button>
                <button type="button" class="btnExcluir btn-secondary" value='.$dado['id'].'>Excluir</button>
              </td>
            </tr>';

      endforeach;

    echo '</tbody>
  </table>';