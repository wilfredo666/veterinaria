<?php
$id_producto=$producto[0]->id_producto;
$nombre_producto=$producto[0]->producto;
$portada=$producto[0]->portada;
$cantidad=$producto[0]->cantidad;
$detalle=$producto[0]->descripcion;
$precio_compra=$producto[0]->precio_compra;
$precio_venta=$producto[0]->precio_venta;

?>
<center><h2>EDITAR PRODUCTO</h2></center>
<form action="" id="form_reg_pro" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-md-6">
            <input class="form-control" type="text" placeholder="Nombre producto" name="nom_producto" value="<?php echo $nombre_producto;?>">
        </div>
        <div class="form-group col-md-6">
            <input class="form-control" type="number" placeholder="Cantidad" name="cantidad" value="<?php echo $cantidad;?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <input class="form-control" type="number" placeholder="Precio Compra" name="pre_compra" step=".01" value="<?php echo $precio_compra;?>">
        </div>
        <div class="form-group col-md-6">
            <input class="form-control" type="number" placeholder="Precio Venta" name="pre_venta" step=".01" value="<?php echo $precio_venta;?>">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-6">
            <textarea class="form-control" placeholder="Detalle" name="detalle" cols="30" rows="5"><?php echo $detalle;?></textarea>
        </div>
        <div class="form-group col-md-6">
            <label for="">Imagen de portada</label>
            <input class="form-control" type="file" name="portada_p" onchange="cargar(event);">
            <div id="preview">
                <img src='http://localhost/veterinaria/portada/<?php echo $portada; ?>' style="width: 100px; heigth:100px;">
            </div>
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
            <input class="btn btn-primary" type="button" value="GUARDAR" onclick="editProducto(<?php echo $id_producto;?>);">
            <input class="btn btn-danger" type="button" data-dismiss="modal" value="CANCELAR">
        </div>
        <div class="col-md-4"></div>
    </div>
