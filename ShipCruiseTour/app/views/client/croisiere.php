<?php require_once APPROOT.'/views/client/header_client.php'; ?>

<div class="container-fluid">
    <h1 class="text-center">Croisières</h1>
</div>


<div class="container availability-form">
 	<div class="row">
 		<div class="col-lg-12 bg-white shadow p-4 rounded">
		 <h5 class="mb-4">Filtrer les croisières :</h5>
 			<form>
 				<div class="row d-flex justify-content-around">
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Port :</label>
					<select class="form-control" id="port">
							<option >--Select--</option>
						<?php foreach($data as $port) : ?>
							<option value="<?= $port['id_p'] ?>"><?= $port['nom'].' - '.$port['pays'] ?></option>
						<?php endforeach;?>
					</select>
 					</div>
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Mois :</label>
 						<input type="month" id="month" class="form-control shadow-none">
 					</div>
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Navire :</label>
 						<select class="form-control" name="port_depart" id="idnavire">
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

	<div class="row croisiere mb-5">
			<div class="col-md-4">
				<img src="../img/${data[i].image}" width="100%" height="100%"">
			</div>
			<div class="col-md-5 p-3">
				<p class="nuit">${data[i].nbr_nuit} Nuits</p>
				<h4 class="title_vg">${data[i].nom_crois}</h4>
				<p><img width="30px" height="30px" src="../img/cruise.png" alt="cruise"> ${data[i].nom_nav}</p>
				<p><span class="depart_dep">Port de départ :</span> ${data[i].port_dep} - ${data[i].pays} </p>
				<p><span class="depart_dep">L'escale à :</span><p class='trajet${data[i].id_croisiere}'></p></p>
			</div>
			<div class="col-md-3 text-center p-3" id="prix_div">
				<p class="prix">${data[i].prix} <span class="mad">MAD</span></p>
				<p class="mad">pour une personne</p>
				<a href="../Reservations/show/${data[i].id_croisiere}" value="${data[i].id_croisiere}" class="btn btn-outline-primary mb-3">Réserver</a>
				<p class="depart_dep">${data[i].date_depart}<p>
			</div>
		</div>

  </div>

<?php require_once APPROOT.'/views/inc/footer.php'; ?>
<script src="<?php echo URLROOT.'/js/user.js' ?>"></script>
