function MRegPro(){
    $('#modal_cont').modal('show');
    var obj="";
    $.ajax({type:"POST",
            url:"http://localhost/veterinaria/index.php/Cproducto/f_reg_producto",
            data:obj,
            success:function(data){
                $("#formulario").html(data);
            }
           }
          )
}

function regProducto(){

    var formData = new FormData($("#form_reg_pro")[0]);

    $.ajax({type:"POST",
            url:"http://localhost/veterinaria/index.php/Cproducto/registrar_producto",
            data:formData,
            cache:false,
            contentType:false,
            processData:false,
            success:function(data)
            {
                $('#respuesta_form').html(data);
                    setTimeout(
                    function(){
                        $('#modal_cont').modal('hide');
                    },2000);

                setTimeout(
                    function(){
                        location.reload();
                    },2000);
            }

           }
          )
}
function MeditProducto(id){
    $("#modal_cont").modal("show");
    var obj="";
    $.ajax({
        type:"POST",
        url:"http://localhost/veterinaria/index.php/Cproducto/f_edi_producto/"+id,
        data:obj,
        success:function(data)
        {
            $("#formulario").html(data)
        }
    })
}
function editProducto(id){
    var formData = new FormData($("#form_reg_pro")[0]);

    $.ajax({type:"POST",
            url:"http://localhost/veterinaria/index.php/Cproducto/actualizar_producto/"+id,
            data:formData,
            cache:false,
            contentType:false,
            processData:false,
            success:function(data)
            {
                $('#respuesta_form').html(data);
                    setTimeout(
                    function(){
                        $('#modal_cont').modal('hide');
                    },2000);

                setTimeout(
                    function(){
                        location.reload();
                    },2000);
            }

           }
          )
}
function MverProducto(id){
        $('#modal_cont').modal('show');
    var obj="";
    $.ajax({type:"POST",
            url:"http://localhost/veterinaria/index.php/Cproducto/f_ver_producto/"+id,
            data:obj,
            success:function(data){
                $("#formulario").html(data);
            }
           }
          )
}
function MeliProducto(id){
    $('#modal_cont_sm').modal('show');
    var obj="";
    $.ajax({type:"POST",
            url:"http://localhost/veterinaria/index.php/Cproducto/f_eliminar_producto/"+id,
            data:obj,
            success:function(data){
                $("#formulario_sm").html(data);
            }
           }
          )
}
function EliProducto(id){
    var obj="";
    $.ajax({type:"POST",
            url:"http://localhost/veterinaria/index.php/Cproducto/eliminar_producto/"+id,
            data:obj,
            success:function(data)
            {
                $("#respuesta_sm").html(data);//el mensaje esta en el controlador porque dvuelve la funsion

                setTimeout(
                    function(){
                        $('#modal_cont_sm').modal('hide');
                    },1000);

                setTimeout(
                    function(){
                        location.reload();
                    },1000);
            }

           }
          )
}