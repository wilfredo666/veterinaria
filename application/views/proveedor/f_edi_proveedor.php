<?php
$id_proveedor=$proveedor[0]->id_proveedor;
$nit_ci=$proveedor[0]->nit_ci;
$nombre_prov=$proveedor[0]->nombre_prov;
$direccion_prov=$proveedor[0]->direccion_prov;
$telefono_prov=$proveedor[0]->telefono_prov;
?>
<center><h2>EDITAR PROVEEDOR</h2></center>
<form action="" id="form_reg_prov" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-md-6">
            <input class="form-control" type="text" placeholder="Nombre proveedor" name="nom_proveedor" value="<?php echo $nombre_prov;?>">
        </div>
        <div class="form-group col-md-6">
            <input class="form-control" type="number" placeholder="NIT / CI" name="nit_ci" value="<?php echo $nit_ci;?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <input class="form-control" type="text" placeholder="Direccion" name="direccion" value="<?php echo $direccion_prov;?>">
        </div>
        <div class="form-group col-md-6">
            <input class="form-control" type="number" placeholder="Telefono de contacto" name="telefono" value="<?php echo $telefono_prov;?>">
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
            <input class="btn btn-primary" type="button" value="GUARDAR" onclick="editProveedor(<?php echo $id_proveedor;?>);">
            <input class="btn btn-danger" type="button" data-dismiss="modal" value="CANCELAR">
        </div>
        <div class="col-md-4"></div>
    </div>