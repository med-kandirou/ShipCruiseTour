$(document).ready(function () {

    //filtre chambre par navire
    $('#navire_id').change(function () { 
        $('#chambre_table').html();
        var id_nav=$('#navire_id').val();
        if(id_nav!=''){
            $.post("../Chambres/filtreChambre",{id_nav:id_nav},
            function (response) {
                var data=JSON.parse(response);
                document.getElementById('chambre_table').innerHTML="";
                document.getElementById('chambre_table').innerHTML+=`
                    <thead>
                        <tr>
                            <th>Numero</th>
                            <th>Prix</th>
                            <th>Type</th>
                            <th>Nom navire</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                <tbody> `;  
                for (let i=0;i<data.length;i++) {
                    document.getElementById('chambre_table').innerHTML+=`
                    <tr>
                        <td>${data[i].id_ch}</td>
                        <td>${data[i].prix}</td>
                        <td>${data[i].type}</td>
                        <td>${data[i].nom}</td>
                        <td><a href="../Chambres/deletechambre/${data[i].id_ch}"><i class="fa fa-trash" style="font-size:30px;color:red;"></i></a></td>
                    </tr> ` ;
                }
                document.getElementById('chambre_table').innerHTML+=`
                    </tbody>`;
            },
        );
        }
    });


})