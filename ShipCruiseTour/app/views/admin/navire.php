<?php require_once APPROOT.'/views/admin/header_admin.php'; 
notification(); ?>

<div class="container-fluid">
    <h1 class="text-center mb-5">Navires</h1>
</div>
<div class="container mb-4">
  <div class="row d-flex justify-content-between">
    <h3 class="ml-3">Les informations des Navires</h3>
    <button type="button" class="btn btn-primary mr-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Ajouter navire</button>
  </div>
</div>

<div class="container text-center mt-5">           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Numreo</th>
        <th>Nom</th>
        <th>Nombre de chambre</th>
        <th>Nombre de places</th>
        <th>Supprimer</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($data as $navire) :?>
            <tr>
                <td><?= $navire['id_n'] ?></td>
                <td><?= $navire['nom'] ?></td>
                <td><?= $navire['nbr_ch'] ?></td>
                <td><?= $navire['nbr_place'] ?></td>
                <td><a href="<?= '../Navires/deletenavire/'.$navire['id_n'] ?>"><i class="fa fa-trash" style="font-size:30px;color:red;"></i></a></td>
            </tr> 
        <?php endforeach;?>
    </tbody>
  </table>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nouveau navire</h1>
      </div>
      <div class="modal-body">
        <form action="../navires/addnavire" method="POST">
          <div class="mb-3 mt-3">
            <label for="email" class="form-label">Nom de navire :</label>
            <input type="text" class="form-control" id="email" placeholder="Nom de navire" name="nom">
          </div>
          <div class="mb-3">
            <label for="pwd" class="form-label">Nombre de chambre :</label>
            <input type="number" class="form-control" placeholder="Nombre de chambre" name="nbr_ch">
          </div>
          <div class="mb-3">
            <label for="pwd" class="form-label">Nombre de places :</label>
            <input type="number" class="form-control" id="pwd"placeholder="Nombre de places" name="nbr_p">
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


<div class="container d-none" id="addnavire_div">
  <form action="">
    <div class="mb-3 mt-3">
      <label for="email" class="form-label">Nom de navire :</label>
      <input type="email" class="form-control" id="email" placeholder="Nom de navire" name="nom">
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Nombre de chambre :</label>
      <input type="number" class="form-control" placeholder="Nombre de chambre" name="nbrchambre">
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Nombre de places :</label>
      <input type="number" class="form-control" id="pwd"placeholder="Nombre de places" name="nbrplace">
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-warning">Ajouter</button>
    </div>
  </form>
</div>


<?php require_once APPROOT.'/views/inc/footer.php'; ?>