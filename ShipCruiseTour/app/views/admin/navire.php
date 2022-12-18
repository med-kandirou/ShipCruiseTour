<?php require_once APPROOT.'/views/admin/header_admin.php'; ?>

<div class="container-fluid">
    <h1 class="text-center mt-5">navire</h1>
</div>

<div class="container text-center">           
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


<?php require_once APPROOT.'/views/inc/footer.php'; ?>