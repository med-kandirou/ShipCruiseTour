$(document).ready(function () {

    //filtre chambre par navire
    $('#filtre_chambre').click(function () { 
        var id_nav=$('#navire_id').val();

        $.post("../Chambres/filtreChambre",{id_nav:id_nav},
                function (response) {
                    var data=JSON.parse(response);
                    console.log(data);
                    $('#chambre_table').val(`
                        <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Numreo</th>
                                <th>Type</th>
                                <th>Prix</th>
                                <th>Nom de navire</th>
                            </tr>
                        </thead>
                    <tbody>`);
                    for (let i=0;i<data.length; i++) {
                        $('#chambre_table').val(`
                        <tr>
                            <td></td>
                            <td><?= $navire['nom'] ?></td>
                            <td><?= $navire['nbr_ch'] ?></td>
                            <td><?= $navire['nbr_place'] ?></td>
                            <td><a href="<?= '../Navires/deletenavire/'.$navire['id_n'] ?>"><i class="fa fa-trash" style="font-size:30px;color:red;"></i></a></td>
                        </tr> `);
                        
                    }
                },
            );

    });


})