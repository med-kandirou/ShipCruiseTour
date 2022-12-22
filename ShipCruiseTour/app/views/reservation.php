<?php require_once APPROOT.'/views/inc/header.php';?>
<?php require_once APPROOT.'/views/inc/navbar.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="title_ticket">Tickets</h1>
            <h6  class="title_ticket2">Reserve your tickets here</h6>
        </div>
    </div>
</div>

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
  <?php foreach($data as $croisiere): ?>
  <div class="row croisiere mb-5">
    <div class="col-md-4">
      <img src="<?= URLROOT.'/img/'.$croisiere['image'].'' ?>" width="100%" height="100%"">
    </div>
    <div class="col-md-5 p-3">
      <p class="nuit"><?= $croisiere['nbr_nuit']?> Nuits</p>
      <h4 class="title_vg"><?= $croisiere['nom_crois']?></h4>
      <p><img width="30px" height="30px" src="<?= URLROOT.'/img/cruise.png';?>" alt="cruise"><?= $croisiere['nom_nav']?></p>
      <p><span class="depart_dep">Port de départ :</span><?= $croisiere['port_dep'].' - '.$croisiere['pays']?></p>
      <p><span class="depart_dep">L'escale à :</span>visited navire</p>
    </div>
    <div class="col-md-3 text-center p-3" id="prix_div">
      <p class="prix"><?= $croisiere['prix']?><span class="mad">MAD</span></p>
      <p class="mad">pour une personne</p>
      <button type="button" class="btn btn-outline-primary mb-3">Détails</button>
      <p class="depart_dep"><?= $croisiere['date_depart']?><p>
    </div>
  </div>
  <?php endforeach; ?>
</div>

<?php require_once APPROOT.'/views/inc/footer.php'; ?>