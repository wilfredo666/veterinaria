<script src="http://localhost/veterinaria/assets/js/compra.js"></script>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary">Lista de compras</h6>
                </div>
                <div class="col">
                    <input type="button" class="btn btn-primary float-right" value="Nuevo" onclick="MRegCom();">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Cod. de compra</th>
                            <th>Proveedor</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                               <th>Cod. de compra</th>
                            <th>Proveedor</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        foreach($lista_compra as $compra){
                            $id_compra=$compra->id_compra;
                            $cod_compra=$compra->cod_compra;
                            $id_proveedor=$compra->id_proveedor;
                            $total=$compra->total;
                        ?>
                        <tr>
                            <td><?php echo $cod_compra; ?></td>
                            <td><?php echo $id_proveedor; ?></td>
                            <td><?php echo $total; ?></td>
                            <td>
                                <div class="btn-group">
                                    <button onclick="Mvercompra(<?php echo $id_compra; ?>);" class="btn btn-info btn-circle"><i class="fas fa-eye"></i></button>
                                    <button onclick="Meditcompra(<?php echo $id_compra; ?>);" class="btn btn-secondary btn-circle"><i class="fas fa-edit"></i></button>
                                    <button onclick="Melicompra(<?php echo $id_compra; ?>);" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></button>
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
