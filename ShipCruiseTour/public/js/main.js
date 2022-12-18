$(document).ready(function () {

    function getempty(field){
        if($('#'+field+'').val()==''){
            document.getElementById(''+field+'_err').innerText=""+field+" est obligatoire";
            return 1;
        }
        else{
            document.getElementById(''+field+'_err').innerText="";
            return 0;
        }
    }
    function emailregex(){
        if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($('#email').val())==false){
            document.getElementById('email_err').innerText="Format email est invalid";
            return 1;
        }else{
            document.getElementById('email_err').innerText="";
            return 0;
        }
    }
    function passconfirm(){
        if($('#password').val()!=$('#confirmation').val()){
            document.getElementById('confirmation_err').innerText="confirmation password est invalid";
            return 1;
        }
        else{
            document.getElementById('confirmation_err').innerText="";
            return 0;
        }
    }
    //inscire
    $("#inscrire").click(function () { 
        var fields=['nom','prenom','password','confirmation'];
        var count=0;
        for(let i=0;i<fields.length;i++){
            count+=getempty(fields[i]);
        }
        count+=passconfirm();
        count+=emailregex();
        if(count==0){
            $.post("../Users/register",{nom:$("#nom").val(),prenom:$("#prenom").val(),email:$("#email").val(),pass:$("#password").val()},
                function (response) {
                    if(response=='added'){
                        Swal.fire(
                            'Succes!',
                            'Compte a été crée !',
                            'success'
                        )      
                        setTimeout(()=>{
                            location.replace('../Pages/login');
                        },2000);   
                    }
                },
            );
        }
    });
    //login
    $("#login").click(function () { 
        var fields=['email','password'];
        var count=0;
        for(let i=0;i<fields.length;i++){
            count+=getempty(fields[i]);
        }
        if(count==0){
            $.post("../Users/login",{email:$("#email").val(),pass:$("#password").val()},
            function (response) {
                // if(response=='true'){
                //     Swal.fire(
                //         'Succes!',
                //         'Bienvenue dans votre espace !',
                //         'success'
                //     )      
                //     setTimeout(()=>{
                //         location.replace('../Pages/');
                //     },2000);   
                // }
                // else{
                //     Swal.fire({
                //         icon: 'error',
                //         title: 'Oops!Email or password invalid',
                //     })
                // }

                console.log(response);
            },
        );
        }
    });
})