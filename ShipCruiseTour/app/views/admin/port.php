<?php require_once APPROOT.'/views/admin/header_admin.php'; ?>

<div class="container-fluid">
    <h1 class="text-center mb-5">Ports</h1>
</div>

<div class="container mb-4">
  <div class="row d-flex justify-content-between">
    <h3 class="ml-3">Les informations des Ports</h3>
    <button type="submit" class="btn btn-primary mr-3">Ajouter un port</button>
  </div>
</div>

<div class="container text-center">   
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Numreo</th>
        <th>Nom</th>
        <th>Pays</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($data as $port) :?>
            <tr>
                <td><?= $port['id_p'] ?></td>
                <td><?= $port['nom'] ?></td>
                <td><?= $port['pays'] ?></td>
            </tr> 
        <?php endforeach;?>
    </tbody>
  </table>
</div>


<div class="container d-none" id="addport">
  <form action="">
    <div class="mb-3 mt-3">
      <label for="email" class="form-label">Nom de port :</label>
      <input type="email" class="form-control" id="email" placeholder="Nom de navire" name="nom">
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Pays :</label>
      <input type="text" class="form-control" placeholder="Pays" name="pays">
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-warning">Ajouter</button>
    </div>
  </form>
</div>


<?php require_once APPROOT.'/views/inc/footer.php'; ?>