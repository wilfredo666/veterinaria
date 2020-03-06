<center><h2>REGISTRAR DE PRODUCTO</h2></center>
<form action="" id="form_reg_pro" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-md-6">
            <input class="form-control" type="text" placeholder="Nombre producto" name="nom_producto">
        </div>
        <div class="form-group col-md-6">
            <input class="form-control" type="number" placeholder="Cantidad" name="cantidad">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <input class="form-control" type="number" placeholder="Precio Compra" name="pre_compra" step=".01" min="1" required>
        </div>
        <div class="form-group col-md-6">
            <input class="form-control" type="number" placeholder="Precio Venta" name="pre_venta" step=".01">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-6">
            <textarea class="form-control" placeholder="Detalle" name="detalle" cols="30" rows="5"></textarea>
        </div>
        <input type='hidden' class='form-control' id='img_inmueble'>
        <div class="form-group col-md-6">
            <label for="">Imagen de portada</label>
            <input class="form-control" type="file" name="portada_p" onchange="cargar(event);">
            <div id="preview"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="respuesta_form">

            </div>
        </div>
    </div>
</form> 
   
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <input class="btn btn-primary" type="button" value="REGISTRAR" onclick="regProducto();">
            <input class="btn btn-danger" type="button" data-dismiss="modal" value="CANCELAR">
        </div>
        <div class="col-md-4"></div>
    </div>
