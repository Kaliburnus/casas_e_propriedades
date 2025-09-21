
<?php 
  $empresa = getEmpresa();

  $excluir_emp= (!empty($_GET["excluir_emp"])) ? ($_GET["excluir_emp"]) : 0;
  $verf = !empty($_GET["excluir_emp"]);
  if($verf){
    $excluir_emp = intval($_GET["excluir_emp"]);

    iduSql("DELETE FROM empresa WHERE id=$excluir_emp");

    header("Location: empresa.php");

    
  }




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
      <button onclick="abrirPopup('emp_new.php')">Novo</button>
      <table class="text-center m-auto mt-4">
        <thead></thead>
        <tr>
          <th><input type="checkbox"></th>
          <th>ID</th>
          <th>TÍTULO</th>
          <th>TEXTO</th>
          <th>AÇÕES</th>
     
        </tr>
        <?php foreach($empresa as $e): ?>
          <tr>



            <td><input type="checkbox"></td>
            <td><?= $e["id"] ?></td>
            <td><?= $e["titulo"] ?></td>
            <td><?=  substr(strip_tags($e["texto"]), 0, 100)?> ... </td>
            <td>
              <button onclick="abrirPopupId(<?= $e['id'] ?>, 'emp_edit.php?editar_emp')">Editar</button>

              <button onclick="confirmacao('empresa.php?excluir_emp=',<?= $e['id'] ?>)">Excluir</button>
          </td>
          </tr>
        <?php endforeach ?>
      </table>

      </div>
    </div>
  </main>
