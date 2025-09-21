
<?php
  $id = (!empty($_GET["id"])) ? ($_GET["id"]) : 0;

  $excluir_por= (!empty($_GET["excluir_por"])) ? ($_GET["excluir_por"]) : 0;
  $verf = !empty($_GET["excluir_por"]);
  if($verf){
    $excluir_ppor = intval($_GET["excluir_por"]);

    iduSql("DELETE FROM portfolio WHERE id=$excluir_por");

    header("Location: portfolio.php");

    
  }

  $port = getPortfolio();

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
      <button onclick="abrirPopup('por_new.php')">Novo</button>
      <table class="text-center m-auto mt-4">
        <thead></thead>
        <tr>
          <th><input type="checkbox"></th>
          <th>ID</th>
          <th>nome_portfolio</th>
          <th>1ª Imagem</th>
          <th>AÇÕES</th>
     
        </tr>
        <?php foreach($port as $p): ?>
          <tr>

            <?php
              $img = json_decode($p["imagens"]);
            ?>

            <td><input type="checkbox"></td>
            <td><?= $p["id"] ?></td>
            <td><?= $p["nome"] ?></td>
            <td><img src="<?= $img[0] ?>" alt="<?= $img[0] ?>" width="160"> </td>
            <td>
              <button onclick="abrirPopupId(<?= $p['id'] ?>, 'por_edit.php?editar_por')">Editar</button>

              <button onclick="confirmacao('portfolio.php?excluir_por=',<?= $p['id'] ?>)">Excluir</button>
          </td>
          </tr>
        <?php endforeach ?>
      </table>

      </div>
    </div>
  </main>
