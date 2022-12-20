$(document).ready(function () {

    //filtre chambre par navire
    $('#filtre_chambre').click(function () { 
        var id_nav=$('#navire_id').val();

        $.post("../Chambres/filtreChambre",{id_nav:id_nav},
                function (response) {
                    var data=JSON.parse(response);
                    console.log(data);
                    document.getElementById('chambre_table').innerHTML+=`
                        <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Numreo</th>
                                <th>Type</th>
                                <th>Prix</th>
                            </tr>
                        </thead>
                    <tbody> `;  
                    for (let i=0;i<data.length;i++) {
                        document.getElementById('chambre_table').innerHTML+=`
                        <tr>
                            <td>${data[i].id_ch}</td>
                            <td>${data[i].prix}</td>
                            <td>${data[i].id_navire}</td>
                        </tr> ` ;
                    }
                    document.getElementById('chambre_table').innerHTML+=`
                        </tbody>
                    </table>`;
                },
            );
    });


})