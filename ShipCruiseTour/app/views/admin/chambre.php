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
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Ajouter chambre</button>
        </div>
  </div>
</div>



<div class="container text-center mt-5">           
   <table class="table table-hover" id="chambre_table">
    
  </table> 
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nouveau chambre</h1>
      </div>
      <div class="modal-body">
        <form action="../Chambres/addchambre" method="POST">
          <div class="mb-3">
            <label for="pwd" class="form-label">Prix de chambre :</label>
            <input type="number" min="1" class="form-control" placeholder="Prix de chambre" name="prix_ch">
          </div>
          <div class="mb-3">
            <label class="form-label">Type de chambre :</label>
            <select class="form-control" name="type">
                <option >--Select--</option>
                <option value="1">1 personne</option>
                <option value="2">1 personnes</option>
                <option value="3">3 personnes</option>
                <option value="4">+3 personnes</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Nom de navire :</label>
            <select class="form-control" name="id_navire">
                    <option >--Select--</option>
                <?php foreach($data as $chambre) : ?>
                    <option value="<?= $chambre['id_n'] ?>"><?= $chambre['nom'] ?></option>
                <?php endforeach ?>
        </select>
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