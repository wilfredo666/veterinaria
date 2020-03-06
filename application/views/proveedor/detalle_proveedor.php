<?php
$id_proveedor=$proveedor[0]->id_proveedor;
$nit_ci=$proveedor[0]->nit_ci;
$nombre_prov=$proveedor[0]->nombre_prov;
$direccion_prov=$proveedor[0]->direccion_prov;
$telefono_prov=$proveedor[0]->telefono_prov;
?>
    <button class="btn btn-info" data-dismiss="modal" style="float:right;"><span>X</span></button>
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="2">ID</th>
                    <td colspan="2"><?php echo $id_proveedor;?></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th colspan="2">Nombre</th>
                    <td colspan="2"><?php echo $nombre_prov;?></td>
                </tr>
                <tr>
                    <th colspan="2">NIT / CI</th>
                    <td colspan="2"><?php echo $nit_ci;?></td>
                </tr>
                <tr>
                    <th colspan="2">Direccion</th>
                    <td colspan="2"><?php echo $direccion_prov;?></td>
                </tr>
                <tr>
                    <th colspan="2">Telefono de contacto</th>
                    <td colspan="2"><?php echo $telefono_prov;?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>