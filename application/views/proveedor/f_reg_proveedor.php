<center><h2>REGISTRAR PROVEEDOR</h2></center>
<form action="" id="form_reg_prov" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-md-6">
            <input class="form-control" type="text" placeholder="Nombre proveedor" name="nom_proveedor">
        </div>
        <div class="form-group col-md-6">
            <input class="form-control" type="number" placeholder="NIT / CI" name="nit_ci">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <input class="form-control" type="text" placeholder="Direccion" name="direccion">
        </div>
        <div class="form-group col-md-6">
            <input class="form-control" type="number" placeholder="Telefono de contacto" name="telefono">
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
            <input class="btn btn-primary" type="button" value="REGISTRAR" onclick="regProveedor();">
            <input class="btn btn-danger" type="button" data-dismiss="modal" value="CANCELAR">
        </div>
        <div class="col-md-4"></div>
    </div>
