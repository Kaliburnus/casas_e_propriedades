
<?php 
  $carousel = getCarousel();
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
          <th>IMAGEM</th>
          <th>TÍTULO</th>
          <th>TEXTO</th>
          <th>AÇÕES</th>
     
        </tr>
        <?php foreach($carousel as $c): ?>
          <tr>

            <td><input type="checkbox"></td>
            <td><?= $c["id"] ?></td>
            <td><img src="<?= $c["imagem"] ?>" alt="" width="150"></td>
            <td><?= $c["titulo"] ?></td>
            <td><?= $c["texto"] ?> </td>
            <td>
              <button onclick="abrirPopupId(<?= $c['id'] ?>, 'cab_edit.php?editar_cab')">Editar</button>

              <a href="cabecalho.php?excluir_cab=<?= $c["id"] ?>"><button>Excluir</button></a>
          </td>
          </tr>
        <?php endforeach ?>
      </table>

      </div>
    </div>
  </main>
