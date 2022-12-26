<?php require_once APPROOT.'/views/client/header_client.php'; ?>

<div class="container-fluid">
    <h1 class="text-center">Croisières</h1>
</div>


<div class="container availability-form">
 	<div class="row">
 		<div class="col-lg-12 bg-white shadow p-4 rounded">
 			<h5 >Filtrer les croisières :</h5>
 			<form>
 				<div class="row align-items-end">
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Port :</label>
             <select class="form-control" name="port_depart" required>
                    <option >--Select--</option>
                <?php foreach($data as $port) : ?>
                    <option value="<?= $port['id_p'] ?>"><?= $port['nom'].' - '.$port['pays'] ?></option>
                <?php endforeach ?>
            </select>
 					</div>
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Mois :</label>
 						<input type="date" class="form-control shadow-none">
 					</div>
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Navire :</label>
 						<select class="form-control" name="port_depart" required>
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

<?php require_once APPROOT.'/views/inc/footer.php'; ?>
<script src="<?php echo URLROOT.'/js/croisiere_user.js' ?>"></script>