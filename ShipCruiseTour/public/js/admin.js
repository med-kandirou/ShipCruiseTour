$(document).ready(function () {
//get croisieres
    $.post("../Croisieres/getcroisiere",{},
    function (response) {
        var data=JSON.parse(response);
        for (let i = 0; i < data.length; i++) {
            document.getElementById('croisieres').innerHTML+=`
            <div class="row croisiere mb-5">
                <div class="col-md-4">
                <img src="../img/${data[i].image}" width="100%" height="100%"">
                </div>
                <div class="col-md-5 p-3">
                <p class="nuit">${data[i].nbr_nuit} Nuits</p>
                <h4 class="title_vg">${data[i].nom_crois}</h4>
                <p><img width="30px" height="30px" src="../img/cruise.png" alt="cruise"> ${data[i].nom_nav}</p>
                <p><span class="depart_dep">Port de départ :</span> ${data[i].port_dep} - ${data[i].pays} </p>
                <p><span class="depart_dep">L'escale à :</span><p class='trajet${data[i].id_croisiere}'></p></p>
                </div>
                <div class="col-md-3 text-center p-3" id="prix_div">
                <p class="prix">${data[i].prix} <span class="mad">MAD</span></p>
                <p class="mad">pour une personne</p>
                <a href="../Croisieres/deletecroisiere/${data[i].id_croisiere}" class="btn btn-outline-danger mb-3">Supprimer</a>
                <p class="depart_dep">${data[i].date_depart}<p>
                </div>
            </div>`;
            $.post("../Croisieres/gettrajet",{id_croi:data[i].id_croisiere},
                function (trajet) {
                    var trajet=JSON.parse(trajet);
                    for (let j = 0; j < trajet.length; j++) {
                        document.querySelector('.trajet'+data[i].id_croisiere).innerText+=' '+trajet[j].nom +' - '+trajet[j].pays;
                    }
                },
            );  
        }
    },
);
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

    //filtrer croisiere par mois
    $('#month').change(function(){
        let splited=this.value.split('-')
        if(splited[1]<10){
            let splitedDay=splited[1].split('');
            splited[1]=splitedDay[1]
        }
        $.post("../Croisieres/filterbymonth",{month:splited[0]+'-'+splited[1]},
        function (response) {
            var data=JSON.parse(response);
            document.getElementById('croisieres').innerHTML="";
            for (let i = 0; i < data.length; i++) {
                document.getElementById('croisieres').innerHTML+=`
                <div class="row croisiere mb-5">
                    <div class="col-md-4">
                    <img src="../img/${data[i].image}" width="100%" height="100%"">
                    </div>
                    <div class="col-md-5 p-3">
                    <p class="nuit">${data[i].nbr_nuit} Nuits</p>
                    <h4 class="title_vg">${data[i].nom_crois}</h4>
                    <p><img width="30px" height="30px" src="../img/cruise.png" alt="cruise"> ${data[i].nom_nav}</p>
                    <p><span class="depart_dep">Port de départ :</span> ${data[i].port_dep} - ${data[i].pays} </p>
                    <p><span class="depart_dep">L'escale à :</span><p class='trajet${data[i].id_croisiere}'></p></p>
                    </div>
                    <div class="col-md-3 text-center p-3" id="prix_div">
                    <p class="prix">${data[i].prix} <span class="mad">MAD</span></p>
                    <p class="mad">pour une personne</p>
                    <a href="../Croisieres/deletecroisiere/${data[i].id_croisiere}" class="btn btn-outline-danger mb-3">Supprimer</a>
                    <p class="depart_dep">${data[i].date_depart}<p>
                    </div>
                </div>
                `;
                $.post("../Croisieres/gettrajet",{id_croi:data[i].id_croisiere},
                    function (trajet) {
                        var trajet=JSON.parse(trajet);
                        for (let j = 0; j < trajet.length; j++) {
                            document.querySelector('.trajet'+data[i].id_croisiere).innerText+=' '+trajet[j].nom +' - '+trajet[j].pays;
                        }
                    },
                );  
            }
        },
        );
    });

    //filtrer croisiere par port
    $('#port').change(function(){
        var port=this.value;
        $.post("../Croisieres/filterbyport",{port:port},
        function (response) {
            var data=JSON.parse(response);
            document.getElementById('croisieres').innerHTML="";
            for (let i = 0; i < data.length; i++) {
                document.getElementById('croisieres').innerHTML+=`
                <div class="row croisiere mb-5">
                    <div class="col-md-4">
                    <img src="../img/${data[i].image}" width="100%" height="100%"">
                    </div>
                    <div class="col-md-5 p-3">
                    <p class="nuit">${data[i].nbr_nuit} Nuits</p>
                    <h4 class="title_vg">${data[i].nom_crois}</h4>
                    <p><img width="30px" height="30px" src="../img/cruise.png" alt="cruise"> ${data[i].nom_nav}</p>
                    <p><span class="depart_dep">Port de départ :</span> ${data[i].port_dep} - ${data[i].pays} </p>
                    <p><span class="depart_dep">L'escale à :</span><p class='trajet${data[i].id_croisiere}'></p></p>
                    </div>
                    <div class="col-md-3 text-center p-3" id="prix_div">
                    <p class="prix">${data[i].prix} <span class="mad">MAD</span></p>
                    <p class="mad">pour une personne</p>
                    <a href="../Croisieres/deletecroisiere/${data[i].id_croisiere}" class="btn btn-outline-danger mb-3">Supprimer</a>
                    <p class="depart_dep">${data[i].date_depart}<p>
                    </div>
                </div>
                `;
                $.post("../Croisieres/gettrajet",{id_croi:data[i].id_croisiere},
                    function (trajet) {
                        var trajet=JSON.parse(trajet);
                        for (let j = 0; j < trajet.length; j++) {
                            document.querySelector('.trajet'+data[i].id_croisiere).innerText+=' '+trajet[j].nom +' - '+trajet[j].pays;
                        }
                    },
                );  
            }
        },
        );
    });

    //filtrer croisiere par navire
    $('#idnavire').change(function(){
        var navire=this.value;
        $.post("../Croisieres/filterbynavire",{navire:navire},
        function (response) {
            var data=JSON.parse(response);
            document.getElementById('croisieres').innerHTML="";
            for (let i = 0; i < data.length; i++) {
                document.getElementById('croisieres').innerHTML+=`
                <div class="row croisiere mb-5">
                    <div class="col-md-4">
                    <img src="../img/${data[i].image}" width="100%" height="100%"">
                    </div>
                    <div class="col-md-5 p-3">
                    <p class="nuit">${data[i].nbr_nuit} Nuits</p>
                    <h4 class="title_vg">${data[i].nom_crois}</h4>
                    <p><img width="30px" height="30px" src="../img/cruise.png" alt="cruise"> ${data[i].nom_nav}</p>
                    <p><span class="depart_dep">Port de départ :</span> ${data[i].port_dep} - ${data[i].pays} </p>
                    <p><span class="depart_dep">L'escale à :</span><p class='trajet${data[i].id_croisiere}'></p></p>
                    </div>
                    <div class="col-md-3 text-center p-3" id="prix_div">
                    <p class="prix">${data[i].prix} <span class="mad">MAD</span></p>
                    <p class="mad">pour une personne</p>
                    <a href="../Croisieres/deletecroisiere/${data[i].id_croisiere}" class="btn btn-outline-danger mb-3">Supprimer</a>
                    <p class="depart_dep">${data[i].date_depart}<p>
                    </div>
                </div>
                `;
                $.post("../Croisieres/gettrajet",{id_croi:data[i].id_croisiere},
                    function (trajet) {
                        var trajet=JSON.parse(trajet);
                        for (let j = 0; j < trajet.length; j++) {
                            document.querySelector('.trajet'+data[i].id_croisiere).innerText+=' '+trajet[j].nom +' - '+trajet[j].pays;
                        }
                    },
                );  
            }
        },
        );
    });

})