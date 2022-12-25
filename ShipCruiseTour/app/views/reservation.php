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

<div class="container mt-5 mb-5" id="croisieres">

</div>

<?php require_once APPROOT.'/views/inc/footer.php'; ?>
<script src="<?php echo URLROOT.'/js/croisiere.js' ?>"></script>