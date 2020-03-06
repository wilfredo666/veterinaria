function MRegCom(){
    $('#modal_fs').modal('show');
    var obj="";
    $.ajax({type:"POST",
            url:"http://localhost/veterinaria/index.php/Ccompra/f_reg_compra",
            data:obj,
            success:function(data){
                $("#formulario_fs").html(data);
            }
           }
          )
}

var lista=[];

function objdetalleCompra(producto, cantidad, precioCompra, precioVenta){
    this.producto=producto
    this.cantidad=cantidad;
    this.precioCompra=precioCompra;
    this.precioVenta=precioVenta;
}
function detalleCompra(producto, cantidad, precioCompra, precioVenta){
    var compra=new objdetalleCompra(producto, cantidad, precioCompra, precioVenta);
    lista.push(compra);
    listar_compra();
}
var i=0;
var total=0;
function listar_compra(){
    var Pcompra=parseFloat(lista[i].precioCompra);
    var cantidad=parseFloat(lista[i].cantidad);
    var costoTot=Pcompra*cantidad;
    total=parseFloat(total)+parseFloat(costoTot);
    $("#total").val(total);
    var cadena="<tr><td>"+
        lista[i].producto+"</td><td>"+
        lista[i].cantidad+"</td><td>"+
        lista[i].precioCompra+"</td><td>"+
        costoTot+"</td><td>"+
        "<button type='button' class='btn btn-danger' onclick=''>Eliminar</button>"+
        "</td></tr>"; 
    $('#lista_compra').append(cadena);
    i=i+1;
}

function calCambio(){
    var pago=$("#pago").val();
    var total=$("#total").val();
    var cambio=parseFloat(pago)-parseFloat(total);
    $("#cambio").val(cambio);
}

function agreVenta(){
        //obtiene de los controladores select
    var producto = $("#producto").val();
    var cantidad = $("#cantidad").val();
    var precioCompra = $("#pre_compra").val();
    var precioVenta = $("#pre_venta").val();

    detalleCompra(producto, cantidad, precioCompra, precioVenta);
}
function regCompra(){
    var formData = new FormData($("#form_reg_com")[0]);
    
    $.ajax({type:"POST",
            url:"http://localhost/veterinaria/index.php/Ccompra/registrar_compra",
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
function Meditcompra(id){
    $("#modal_cont").modal("show");
    var obj="";
    $.ajax({
        type:"POST",
        url:"http://localhost/veterinaria/index.php/Ccompra/f_edi_compra/"+id,
        data:obj,
        success:function(data)
        {
            $("#formulario").html(data)
        }
    })
}
function editcompra(id){
    var formData = new FormData($("#form_reg_prov")[0]);

    $.ajax({type:"POST",
            url:"http://localhost/veterinaria/index.php/Ccompra/actualizar_compra/"+id,
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
function Mvercompra(id){
        $('#modal_cont').modal('show');
    var obj="";
    $.ajax({type:"POST",
            url:"http://localhost/veterinaria/index.php/Ccompra/f_ver_compra/"+id,
            data:obj,
            success:function(data){
                $("#formulario").html(data);
            }
           }
          )
}
function Melicompra(id){
    $('#modal_cont_sm').modal('show');
    var obj="";
    $.ajax({type:"POST",
            url:"http://localhost/veterinaria/index.php/Ccompra/f_eliminar_compra/"+id,
            data:obj,
            success:function(data){
                $("#formulario_sm").html(data);
            }
           }
          )
}
function Elicompra(id){
    var obj="";
    $.ajax({type:"POST",
            url:"http://localhost/veterinaria/index.php/Ccompra/eliminar_compra/"+id,
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