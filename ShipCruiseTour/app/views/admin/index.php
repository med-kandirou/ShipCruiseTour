<?php require_once APPROOT.'/views/admin/header_admin.php'; ?>


<div class="container-fluid">
    <h1 class="text-center mb-5">Statistiques</h1>
</div>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<div class="container">
<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
       <div class="col-md-4">
		 <div class="card radius-10 border-start border-0 border-3 border-info">
			<div class="card-body">
				<div class="d-flex align-items-center">
					<div>
						<p class="mb-0 text-secondary">Total de croisière</p>
						<h4 class="my-1 text-info"><?= $data['totalCroisiere']; ?></h4>
					</div>
					<div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class="fa fa-globe"></i>
					</div>
				</div>
			</div>
		 </div>
	   </div>
	   <div class="col-md-4">
		<div class="card radius-10 border-start border-0 border-3 border-danger">
		   <div class="card-body">
			   <div class="d-flex align-items-center">
				   <div>
					   <p class="mb-0 text-secondary">Total des clients</p>
					   <h4 class="my-1 text-danger"><?= $data['totalUser']; ?></h4>
				   </div>
				   <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class="fa fa-users"></i>
				   </div>
			   </div>
		   </div>
		</div>
	  </div>
	  <div class="col-md-4">
		<div class="card radius-10 border-start border-0 border-3 border-success">
		   <div class="card-body">
			   <div class="d-flex align-items-center">
				   <div>
					   <p class="mb-0 text-secondary">Total de reservations</p>
					   <h4 class="my-1 text-success"><?= $data['totalReservation']; ?></h4>
				   </div>
				   <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class="fa fa-bar-chart"></i>
				   </div>
			   </div>
		   </div>
		</div>
	  </div>
	</div>
</div>

<?php require_once APPROOT.'/views/inc/footer.php'; ?>