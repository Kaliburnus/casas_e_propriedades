
<?php 
  $empresa = getEmpresa();
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
      <button onclick="abrirPopupCarouselNew()">Novo</button>
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

              <a href="cabecalho.php?excluir_cab=<?= $e["id"] ?>"><button>Excluir</button></a>
          </td>
          </tr>
        <?php endforeach ?>
      </table>

      </div>
    </div>
  </main>
