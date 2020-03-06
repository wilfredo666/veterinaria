<script src="http://localhost/veterinaria/assets/js/proveedor.js"></script>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary">Lista de proveedores</h6>
                </div>
                <div class="col">
                    <input type="button" class="btn btn-primary float-right" value="Nuevo" onclick="MRegProv();">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Proveedor</th>
                            <th>NIT/CI</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Proveedor</th>
                            <th>NIT/CI</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        foreach($lista_proveedor as $prov){
                            $id_proveedor=$prov->id_proveedor;
                            $nombre=$prov->nombre_prov;
                            $nit_ci=$prov->nit_ci;
                            $direccion=$prov->direccion_prov;
                            $telefono=$prov->telefono_prov;
                        ?>
                        <tr>
                            <td><?php echo $nombre; ?></td>
                            <td><?php echo $nit_ci; ?></td>
                            <td><?php echo $direccion; ?></td>
                            <td><?php echo $telefono; ?></td>
                            <td>
                                <div class="btn-group">
                                    <button onclick="MverProveedor(<?php echo $id_proveedor; ?>);" class="btn btn-info btn-circle"><i class="fas fa-eye"></i></button>
                                    <button onclick="Meditproveedor(<?php echo $id_proveedor; ?>);" class="btn btn-secondary btn-circle"><i class="fas fa-edit"></i></button>
                                    <button onclick="Meliproveedor(<?php echo $id_proveedor; ?>);" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
