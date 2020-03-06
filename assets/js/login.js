function ingresar(){
    var alias=$('#alias').val();
    var password=$('#password').val();
    var obj={
        alias:alias,
        password:password
    };

    $.ajax({type:"POST",
            url:"http://localhost/veterinaria/index.php/Cacceso/ingresar",
            data:obj,
            success:function(data)
            {
                console.log(obj);
                location.reload();
            }

           });
}
function validarPass(a){
    var pass1=$('#password').val();
    var pass2=$('#password_rep').val();
    if(pass1==pass2){
        $("#msj_pass").html("Contraseña correcta");
        $("#msj_pass").css("color","green");
       }else{
           $("#msj_pass").html("Las contraseñas no coinsiden");
           $("#msj_pass").css("color","red");
       }
}
