function MRegProv(){
    $('#modal_cont').modal('show');
    var obj="";
    $.ajax({type:"POST",
            url:"http://localhost/veterinaria/index.php/Cproveedor/f_reg_proveedor",
            data:obj,
            success:function(data){
                $("#formulario").html(data);
            }
           }
          )
}
function regProveedor(){
    var formData = new FormData($("#form_reg_prov")[0]);

    $.ajax({type:"POST",
            url:"http://localhost/veterinaria/index.php/Cproveedor/registrar_proveedor",
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
function Meditproveedor(id){
    $("#modal_cont").modal("show");
    var obj="";
    $.ajax({
        type:"POST",
        url:"http://localhost/veterinaria/index.php/Cproveedor/f_edi_proveedor/"+id,
        data:obj,
        success:function(data)
        {
            $("#formulario").html(data)
        }
    })
}
function editProveedor(id){
    var formData = new FormData($("#form_reg_prov")[0]);

    $.ajax({type:"POST",
            url:"http://localhost/veterinaria/index.php/Cproveedor/actualizar_proveedor/"+id,
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
function MverProveedor(id){
        $('#modal_cont').modal('show');
    var obj="";
    $.ajax({type:"POST",
            url:"http://localhost/veterinaria/index.php/Cproveedor/f_ver_proveedor/"+id,
            data:obj,
            success:function(data){
                $("#formulario").html(data);
            }
           }
          )
}
function Meliproveedor(id){
    $('#modal_cont_sm').modal('show');
    var obj="";
    $.ajax({type:"POST",
            url:"http://localhost/veterinaria/index.php/Cproveedor/f_eliminar_proveedor/"+id,
            data:obj,
            success:function(data){
                $("#formulario_sm").html(data);
            }
           }
          )
}
function Eliproveedor(id){
    var obj="";
    $.ajax({type:"POST",
            url:"http://localhost/veterinaria/index.php/Cproveedor/eliminar_proveedor/"+id,
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