<?php require_once APPROOT.'/views/admin/header_admin.php'; notification(); ?>

<div class="container-fluid">
    <h1 class="text-center">Croisières</h1>
</div>


<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Ajouter Croisière</button>
<div class="container availability-form">
 	<div class="row">
 		<div class="col-lg-12 bg-white shadow p-4 rounded">
 			<h5 >Filtrer les croisières :</h5>
 			<form>
 				<div class="row align-items-end">
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Port :</label>
 						<select class="form-control">
  						<option value="1">One</option>
  						<option value="2">Two</option>
  						<option value="3">Three</option>
						</select>
 					</div>
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Mois :</label>
 						<input type="date" class="form-control shadow-none">
 					</div>
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Navire :</label>
 						<select class="form-control" name="port_depart" required>
                <option >--Select--</option>
                <option >--Select--</option>
                <option >--Select--</option>
            </select>
 					</div>
 					<div class="col-lg-1 mb-lg-3 mt-2">
 						<button type="submit" class="btn btn-primary">Submit</button>
 					</div>

 				</div>
 			</form>
 		</div>
 	</div>
 </div>

<div class="container mt-5 mb-5">
  <div class="row croisiere mb-5">
    <div class="col-md-4">
      <img src="<?= URLROOT.'/img/exemple2.jpg' ?>" width="100%" height="100%"">
    </div>
    <div class="col-md-5 p-3">
      <p class="nuit">6 Nuits</p>
      <h4 class="title_vg">Titre voyage</h4>
      <p><img width="30px" height="30px" src="<?= URLROOT.'/img/cruise.png';?>" alt="cruise"> Nom navire</p>
      <p><span class="depart_dep">Port de départ :</span>port depart</p>
      <p><span class="depart_dep">L'escale à :</span>  visited navire</p>
    </div>
    <div class="col-md-3 text-center p-3" id="prix_div">
      <p class="prix">100<span class="mad">MAD</span></p>
      <p class="mad">pour une personne</p>
      <button type="button" class="btn btn-outline-primary mb-3">Ajouter Croisière</button>
      <p class="depart_dep">2001/21/43<p>
    </div>
  </div>
</div>

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
            <label for="pwd" class="form-label">Prix :</label>
            <input type="number" min="1" required class="form-control" placeholder="Prix" name="prix">
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
                <?php endforeach ?>
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