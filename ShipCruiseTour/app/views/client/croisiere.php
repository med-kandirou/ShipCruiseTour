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
	<ul id="paginated-list" data-current-page="1" aria-live="polite">
		<?php foreach ($data3 as $croisiere): ?>
			<li>
				<div class="row croisiere mb-5">
					<div class="col-md-4">
						<img src="<?= URLROOT.'/img/'.$croisiere['image'].'' ?>" width="100%" height="100%"">
					</div>
					<div class="col-md-5 p-3">
						<p class="nuit"><?= $croisiere['nbr_nuit'] ?> Nuits</p>
						<h4 class="title_vg"><?= $croisiere['nom_crois'] ?></h4>
						<p><img width="30px" height="30px" src="<?= URLROOT.'/img/cruise.png' ?>" alt="cruise"> <?= $croisiere['nom_nav'] ?></p>
						<p><span class="depart_dep">Port de départ :</span><?= $croisiere['port_dep'] ?>  - <?= $croisiere['pays'] ?> </p>
					</div>
					<div class="col-md-3 text-center p-3" id="prix_div">
						<p class="prix"><?= $croisiere['prix'] ?><span class="mad">MAD</span></p>
						<p class="mad">pour une personne</p>
						<a href="../Reservations/show/"<?= $croisiere['id_croisiere'] ?>"" value="<?= $croisiere['id_croisiere'] ?>" class="btn btn-outline-primary mb-3">Réserver</a>
						<p class="depart_dep"><?= $croisiere['date_depart'] ?><p>
					</div>
				</div>
			</li>
		<?php endforeach; ?>
	</ul>


  </div>
	<style>
		li{
			list-style-type: none;
		}
	.hidden {
		display: none;
	}
	.pagination-number,
	.pagination-button{
	font-size: 1.1rem;
	background-color: transparent;
	border: none;
	margin: 0.25rem 0.25rem;
	cursor: pointer;
	height: 2.5rem;
	width: 2.5rem;
	border-radius: .2rem;
	}

	.pagination-number:hover,
	.pagination-button:not(.disabled):hover {
	background: #fff;
	}

	.pagination-number.active {
	color: #fff;
	background: #0085b6;
	}
	</style>
  <nav class="pagination-container">
  <center>
	<button class="pagination-button" id="prev-button" aria-label="Previous page" title="Previous page">
      &lt;
    </button>

    <span id="pagination-numbers">

    </span>

    <button class="pagination-button" id="next-button" aria-label="Next page" title="Next page">
      &gt;
    </button>
</center>
  </nav>

<?php require_once APPROOT.'/views/inc/footer.php'; ?>
<script src="<?php echo URLROOT.'/js/user.js' ?>"></script>
<script src="<?php echo URLROOT.'/js/pagination.js' ?>"></script>
