<?php require_once APPROOT.'/views/admin/header_admin.php'; ?>

<div class="container-fluid">
    <h1 class="text-center">Croisieres</h1>
</div>


<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Ajouter chambre</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nouveau Croisière</h1>
      </div>
      <div class="modal-body">
        <form action="../Croisieres/addcroisiere" method="POST">
          <div class="mb-3">
            <label class="form-label">Image :</label>
            <input type="file" class="form-control" name="image" required>
          </div>
          <div class="mb-3">
            <label for="pwd" class="form-label">Prix :</label>
            <input type="number" min="1" required class="form-control" placeholder="Prix" name="prix">
          </div>
          <div class="mb-3">
            <label class="form-label">Nombre de nuit :</label>
            <input type="number" min="0" placeholder="Nombre de nuit" class="form-control" name="nbr_nuit" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Date de départ :</label>
            <input type="date" min="0" class="form-control" name="date_dep" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Port de départ :</label>
            <select class="form-control" name="port_dep" required>
                    <option >--Select--</option>
                <?php foreach($data as $chambre) : ?>
                    <option value="<?= $chambre['id_n'] ?>"><?= $chambre['nom'] ?></option>
                <?php endforeach ?>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Nom de navire :</label>
            <select class="form-control" name="port_dep" required>
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