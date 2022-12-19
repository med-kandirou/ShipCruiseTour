<?php require_once APPROOT.'/views/admin/header_admin.php'; ?>

<div class="container-fluid">
    <h1 class="text-center mt-5">Navires</h1>
</div>

<div class="container mb-4">
  <div class="row d-flex justify-content-between">
    <h3 class="ml-3">Les informations des Navires</h3>
    <button type="submit" class="btn btn-primary mr-3" id="btn_addnavire">Ajouter une navires</button>
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
      </tr>
    </thead>
    <tbody>
        <?php foreach($data as $navire) :?>
            <tr>
                <td><?= $navire['id_n'] ?></td>
                <td><?= $navire['nom'] ?></td>
                <td><?= $navire['nbr_ch'] ?></td>
                <td><?= $navire['nbr_place'] ?></td>
            </tr> 
        <?php endforeach;?>
    </tbody>
  </table>
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