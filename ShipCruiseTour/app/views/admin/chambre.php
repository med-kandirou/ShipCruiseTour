<?php require_once APPROOT.'/views/admin/header_admin.php'; 
notification(); ?>

<div class="container-fluid">
    <h1 class="text-center mb-5">Chambres</h1>
</div>
<div class="container mb-4">
  <div class="row">
        <div class="col-md-4">
            <label style="font-weight: bold;" class="mt-1">Selectionnnez une navire :</label>
        </div>
        <div class="col-md-4">
        <select class="form-control" id="navire_id">
        <option >--Select--</option>
            <?php foreach($data as $chambre) : ?>
            <option value="<?= $chambre['id_n'] ?>"><?= $chambre['nom'] ?></option>
            <?php endforeach ?>
        </select>
        </div>
        <div class="col-md-4">
            <button type="button" id="filtre_chambre" class="btn btn-primary">Afficher les chambres</button>
        </div>
  </div>
</div>


<!-- <button type="button" class="btn btn-primary mr-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Ajouter navire</button> -->
<div class="container text-center mt-5">           
   <table class="table table-hover" id="chambre_table">
    
  </table> 
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nouveau navire</h1>
      </div>
      <div class="modal-body">
        <form action="../navires/addnavire" method="POST">
          <div class="mb-3 mt-3">
            <label for="email" class="form-label">Nom de navire :</label>
            <input type="text" class="form-control" id="email" placeholder="Nom de navire" name="nom">
          </div>
          <div class="mb-3">
            <label for="pwd" class="form-label">Nombre de chambre :</label>
            <input type="number" class="form-control" placeholder="Nombre de chambre" name="nbr_ch">
          </div>
          <div class="mb-3">
            <label for="pwd" class="form-label">Nombre de places :</label>
            <input type="number" class="form-control" id="pwd"placeholder="Nombre de places" name="nbr_p">
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