<?php 
 $id_producto=$this->uri->segment(3);
?>

    <div>
        <h2>(*)ESTA SEGURO DE ELIMINAR ESTE PRODUCTO ?</h2>
    </div>
        <div class="row">
        <div class="col-md-12">
                <div id="respuesta_sm">

                </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <input class="btn btn-danger" type="submit" value="ELIMINAR" onclick="EliProducto(<?php echo $id_producto;?>)">
        </div>
        <div class="form-group col-md-6">
            <input class="btn btn-primary" type="button" data-dismiss="modal" value="CANCELAR">
        </div>
    </div>




