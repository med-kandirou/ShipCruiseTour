<?php require_once APPROOT.'/views/admin/header_admin.php'; ?>

<div class="container-fluid">
    <h1 class="text-center mb-5">Port</h1>
</div>
<div class="container text-center">           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Numreo</th>
        <th>Nom</th>
        <th>Pays</th>

      </tr>
    </thead>
    <tbody>
        <?php foreach($data as $port) :?>
            <tr>
                <td><?= $port['id_p'] ?></td>
                <td><?= $port['nom'] ?></td>
                <td><?= $port['pays'] ?></td>
            </tr> 
        <?php endforeach;?>
    </tbody>
  </table>
</div>



<?php require_once APPROOT.'/views/inc/footer.php'; ?>