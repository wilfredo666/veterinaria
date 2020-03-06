<?php
$id_producto=$producto[0]->id_producto;
$nombre_producto=$producto[0]->producto;
$portada=$producto[0]->portada;
$cantidad=$producto[0]->cantidad;
$detalle=$producto[0]->descripcion;
$precio_compra=$producto[0]->precio_compra;
$precio_venta=$producto[0]->precio_venta;
$Uregistro=$producto[0]->alias;
$Fregistro=$producto[0]->fecha_hora;
?>
    <button class="btn btn-info" data-dismiss="modal" style="float:right;"><span>X</span></button>
<div class="row">
    <div class="col-md-8">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="2">ID</th>
                    <td colspan="2"><?php echo $id_producto;?></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th colspan="2">Nombre</th>
                    <td colspan="2"><?php echo $nombre_producto;?></td>
                </tr>
                <tr>
                    <th colspan="2">Stock</th>
                    <td colspan="2"><?php echo $cantidad;?></td>
                </tr>
                <tr>
                    <th colspan="2">Descripcion</th>
                    <td colspan="2"><?php echo $detalle;?></td>
                </tr>
                <tr>
                    <th colspan="2">Precio de compra</th>
                    <td colspan="2"><?php echo $precio_compra;?></td>
                </tr>
                <tr>
                    <th colspan="2">Precio de venta</th>
                    <td colspan="2"><?php echo $precio_venta;?></td>
                </tr>
                <tr>
                    <th colspan="2">Registrado por</th>
                    <td colspan="2"><?php echo $Uregistro;?></td>
                </tr>
                <tr>
                    <th colspan="2">Fecha y hora de registro</th>
                    <td colspan="2"><?php echo $Fregistro;?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-4" style="position:relative;">
        <img src='http://localhost/veterinaria/portada/<?php echo $portada; ?>' style="width: 200px; heigth:200px; position:absolute; top:30%;">
    </div>
</div>