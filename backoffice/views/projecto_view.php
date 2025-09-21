
<?php
  $id = (!empty($_GET["id"])) ? ($_GET["id"]) : 0;

  $proj = getProjetoEspecifico($id);
  $pred= getTodosPrediosPorPai($id);

  $excluir_pro= (!empty($_GET["excluir_pro"])) ? ($_GET["excluir_pro"]) : 0;
  $verf = !empty($_GET["excluir_pro"]);
  if($verf){
    $excluir_pro = intval($_GET["excluir_pro"]);

    iduSql("DELETE FROM projectos WHERE id=$excluir_pro");

    header("Location: home.php");

    
  }

  $excluir_pre= (!empty($_GET["excluir_pre"])) ? ($_GET["excluir_pre"]) : 0;
  $verf = !empty($_GET["excluir_pre"]);
  if($verf){
    $excluir_pre = intval($_GET["excluir_pre"]);

    iduSql("DELETE FROM predios WHERE id=$excluir_pre");

    header("Location: projecto.php?id=" . $pred["id_projecto"]);

    
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
        <button onclick="abrirPopup('pro_new.php')">Novo</button>
        <table class="text-center m-auto mt-4">
          <thead></thead>
          <tr>
            <th><input type="checkbox"></th>
            <th>ID</th>
            <th>nome_projecto</th>
            <th>acabamentos</th>
            <th>AÇÕES</th>
      
          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td><?= $proj["id"] ?></td>
            <td><?= $proj["nome"] ?></td>
            <td><?=  substr(strip_tags($proj["acabamentos"]), 0, 100)?> ... </td>
            <td>
              <button onclick="abrirPopupId(<?= $proj['id'] ?>, 'pro_edit.php?editar_pro')">Editar</button>

              <button onclick="confirmacao('projecto.php?excluir_pro=',<?= $proj['id'] ?>)">Excluir</button>
          </td>
          </tr>
        </table>

      </div>
    </div>

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
      <button onclick="abrirPopup('pre_new.php')">Novo</button>
      <table class="text-center m-auto mt-4">
        <thead></thead>
        <tr>
          <th><input type="checkbox"></th>
          <th>ID</th>
          <th>nome_predio</th>
          <th>tipo</th>
          <th>1ª Imagem</th>
          <th>AÇÕES</th>
     
        </tr>
        <?php foreach($pred as $pre): ?>
          <tr>

            <?php
              $img = json_decode($pre["imagens"]);
            ?>


            <td><input type="checkbox"></td>
            <td><?= $pre["id"] ?></td>
            <td><?= $proj["nome"] ?></td>
            <td><?= $pre["tipo"] ?> </td>
            <td><img src="<?= $img[0] ?>" alt="<?= $img[0] ?>" width="160"> </td>
            <td>
              <button onclick="abrirPopupId(<?= $pre['id'] ?>, 'pre_edit.php?editar_pre')">Editar</button>

              <button onclick="confirmacao('projecto.php?excluir_pre=',<?= $pre['id'] ?>)">Excluir</button>
          </td>
          </tr>
        <?php endforeach ?>
      </table>

      </div>
    </div>
  </main>
