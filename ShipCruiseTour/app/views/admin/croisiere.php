<?php require_once APPROOT.'/views/admin/header_admin.php'; notification(); ?>

<div class="container-fluid">
    <h1 class="text-center">Croisières</h1>
</div>



<div class="container availability-form">
 	<div class="row">
 		<div class="col-lg-12 bg-white shadow p-4 rounded">
 			<h5 class="mb-4">Filtrer les croisières :</h5>
 			<form>
 				<div class="row d-flex d-flex justify-content-around">
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Port :</label>
 						<select class="form-control" id="port">
             <option>--select--</option>
              <?php foreach ($data as $port): ?>
  						<option value="<?= $port['id_p'] ?>"><?= $port['nom'].' - '.$port['pays'] ?></option>
              <?php endforeach; ?>
						</select>
 					</div>
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Mois :</label>
 						<input type="month" id="month" class="form-control shadow-none">
 					</div>
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Navire :</label>
 						<select class="form-control" name="port_depart" id="idnavire" required>
             <option>--select--</option>
             <?php foreach ($data2 as $navire): ?>
  						<option value="<?= $navire['id_n'] ?>"><?= $navire['nom'] ?></option>
              <?php endforeach; ?>
            </select>
 					</div>
 				</div>
 			</form>
 		</div>
 	</div>
 </div>

 <div class="container mt-5 mb-5" id="croisieres">

</div>
<button type="button" id="btnaddCroisiere" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fa fa-plus" style="font-size:40px;color:white"></i></button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nouvelle Croisière</h1>
      </div>
      <div class="modal-body">
        <form action="../Croisieres/addcroisiere" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Nom de croisière :</label>
            <input type="text" class="form-control" placeholder="Nom de croisière" name="nom" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Image :</label>
            <input type="file" class="form-control" name="image" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Nombre de nuit :</label>
            <input type="number" min="0" placeholder="Nombre de nuit" class="form-control" name="nbr_nuit" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Date de départ :</label>
            <input type="date" min="0" class="form-control" name="date_depart" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Port de départ :</label>
            <select class="form-control" name="port_depart" required>
                    <option >--Select--</option>
                <?php foreach($data as $port) : ?>
                    <option value="<?= $port['id_p'] ?>"><?= $port['nom'].' - '.$port['pays'] ?></option>
                <?php endforeach ;?>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Nom de navire :</label>
            <select class="form-control" name="id_navire" required>
                    <option >--Select--</option>
                <?php foreach($data2 as $navire) : ?>
                    <option value="<?= $navire['id_n'] ?>"><?= $navire['nom'] ?></option>
                <?php endforeach ?>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Escale a:</label><br>
            <div class="container">
              <div class="row">
              <?php foreach($data as $port) : ?>
                  <div class="col-md-6">
                    <input type="checkbox" name="check_navire[]" value="<?= $port['id_p'] ?>" id="<?= $port['id_p'] ?>" class="check">&nbsp;<label for="check"><?= $port['nom'].' - '.$port['pays'] ?></label>
                  </div>
                <?php endforeach ?>
              </div>
            </div>
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
<script src="<?php echo URLROOT.'/js/croisiere_admin.js' ?>"></script>