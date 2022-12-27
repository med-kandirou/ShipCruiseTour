<?php require_once APPROOT.'/views/client/header_client.php'; ?>

<div class="container-fluid">
    <h1 class="text-center mb-5">Details croisières</h1>
</div>
  <div class="container mb-5">
    <div class="row croisiere mb-5">
        <div class="col-md-4">
            <img src="<?= URLROOT.'/img/'.$data['croisiere']['image'] ?>" width="100%" height="100%"">
        </div>
        <div class="col-md-5 p-3">
            <p class="nuit"><?= $data['croisiere']['nbr_nuit']?> Nuits</p>
            <h4 class="title_vg"><?= $data['croisiere']['nom_crois']?></h4>
            <p><img width="30px" height="30px" src="<?= URLROOT.'/img/cruise.png' ?>"><?= $data['croisiere']['nom_nav'] ?></p>
            <p><span class="depart_dep">Port de départ :</span><?= ' '.$data['croisiere']['port_dep'].' - '.$data['croisiere']['pays'] ?></p>
            <p><span class="depart_dep">L'escale à :</span><p>
                <?php foreach($data['trajet'] as $escale): ?>
                    <?= $escale['nom'].'-'.$escale['pays'].'&nbsp'  ?>
                <?php endforeach ; ?>
            </p></p>
        </div>
        <div class="col-md-3 text-center p-3" id="prix_div">
            <p class="prix"><?= $data['croisiere']['prix'] ?><span class="mad">MAD</span></p>
            <p class="mad">pour une personne</p>
            <p class="depart_dep"><?= $data['croisiere']['date_depart'] ?><p>
        </div>
    </div>
  </div>

  <div class="container">
    <h4 class="mb-5">Selectionner une chambre :</h4>
  </div>
  

<?php require_once APPROOT.'/views/inc/footer.php'; ?>
<script src="<?php echo URLROOT.'/js/user.js' ?>"></script>