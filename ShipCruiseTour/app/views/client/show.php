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
            <span class="depart_dep">Date :</span><span><?= $data['croisiere']['date_depart'] ?></span>
        </div>
    </div>
  </div>

  <div class="container">
    <h4 class="text-center mb-5">Selectionner une chambre :</h4>
    <div class="row">
        <table class="table table-hover text-center">
            <thead>
            <tr>
                <th>Numreo de chambre</th>
                <th>Prix</th>
                <th>type</th>
                <th>Réservation</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($data['chambre'] as $chambre): ?>
                    <tr>
                        <td><?= $chambre['id_ch'] ?></td>
                        <td><?= $chambre['prix'] ?></td>
                        <td><?= $chambre['type'] ?></td>
                        <td><a href="<?= '../Ports/deleteport/'.$chambre['id_p'] ?>">Réserver</a></td>
                    </tr> 
                <?php endforeach ; ?>
            </tbody>
        </table>
    </div>
    
  </div>


  

<?php require_once APPROOT.'/views/inc/footer.php'; ?>
<script src="<?php echo URLROOT.'/js/user.js' ?>"></script>