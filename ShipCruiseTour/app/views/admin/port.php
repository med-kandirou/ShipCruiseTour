<?php require_once APPROOT.'/views/admin/header_admin.php'; 
notification(); ?>

<div class="container-fluid">
    <h1 class="text-center mb-5">Ports</h1>
</div>
<div class="container mb-4">
  <div class="row d-flex justify-content-between">
    <h3 class="ml-3">Les informations des Ports</h3>
    <button type="button" class="btn btn-primary mr-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Ajouter port</button>
  </div>
</div>
<div class="container text-center">   
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Numreo</th>
        <th>Nom</th>
        <th>Pays</th>
        <th>Supprimer</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($data as $port) :?>
            <tr>
                <td><?= $port['id_p'] ?></td>
                <td><?= $port['nom'] ?></td>
                <td><?= $port['pays'] ?></td>
                <td><a href="<?= '../Ports/deleteport/'.$port['id_p'] ?>"><i class="fa fa-trash" style="font-size:30px;color:red;"></i></a></td>
            </tr> 
        <?php endforeach;?>
    </tbody>
  </table>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nouveau port</h1>
      </div>
      <div class="modal-body">
        <form action="../Ports/addport" method="POST">
          <div class="mb-3 mt-3">
            <label class="form-label">Nom de port :</label>
            <input type="text" class="form-control" placeholder="Nom de port" name="nom" required>
          </div>
          <div class="mb-3">
            <label  class="form-label">Pays :</label>
            <input type="text" class="form-control" placeholder="Pays" name="pays" required>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-warning">Ajouter</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<?php require_once APPROOT.'/views/inc/footer.php'; ?>