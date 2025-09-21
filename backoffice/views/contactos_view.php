
<?php 

  $c = getContactos();



?>
  <main class="container">
    <div class="row py-5">
      <div class=
        "
        col-12 
        text-center 
        w-75 
        m-auto 
        rounded-4 
        box
        "
      >
      <button onclick="abrirPopup('cab_new.php')">Novo</button>
      <table class="text-center m-auto mt-4" style="max-height: 100px;">
        <thead></thead>
        <tr>
          <th><input type="checkbox"></th>
          <th>ID</th>
          <th>MORADA</th>
          <th>TELEFONE</th>
          <th>E-MAIL</th>
          <th>FACEBOOK</th>
          <th>AÇÕES</th>
     
        </tr>
        <tr>

          <td><input type="checkbox"></td>
          <td><?= $c["id"] ?></td>
          <td><?= $c["morada"] ?></td>
          <td><?= $c["telefone"] ?> </td>
          <td><?= $c["email"] ?> </td>
          <td><?= $c["facebook"] ?> </td>
          <td>
            <button onclick="abrirPopupId(<?= $c['id'] ?>, 'con_edit.php?editar_con')">Editar</button>
          </td>
        </tr>
 
      </table>

      </div>
    </div>
  </main>
