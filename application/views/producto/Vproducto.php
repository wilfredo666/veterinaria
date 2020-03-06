<script src="http://localhost/veterinaria/assets/js/producto.js"></script>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary">Lista de productos</h6>
                </div>
                <div class="col">
                    <input type="button" class="btn btn-primary float-right" value="Nuevo" onclick="MRegPro();">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Portada</th>
                            <th>Nombre</th>
                            <th>Detalle</th>
                            <th>Stock</th>
                            <th>Precio de compra</th>
                            <th>Precio de venta</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Portada</th>
                            <th>Nombre</th>
                            <th>Detalle</th>
                            <th>Stock</th>
                            <th>Precio de compra</th>
                            <th>Precio de venta</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        foreach($lista_productos as $pro){
                            $id_producto=$pro->id_producto;
                            $portada=$pro->portada;
                            $nombre=$pro->producto;
                            $detalle=$pro->descripcion;
                            $stock=$pro->cantidad;
                            $pre_compra=$pro->precio_compra;
                            $pre_venta=$pro->precio_venta;
                        ?>
                        <tr>
                            <td><img src='http://localhost/veterinaria/portada/<?php echo $portada; ?>' style="width: 100px; heigth:100px;"></td>
                            <td><?php echo $nombre; ?></td>
                            <td><?php echo $detalle; ?></td>
                            <td><?php echo $stock; ?></td>
                            <td><?php echo $pre_compra; ?></td>
                            <td><?php echo $pre_venta; ?></td>
                            <td>
                                <div class="btn-group">
                                    <button onclick="MverProducto(<?php echo $id_producto; ?>);" class="btn btn-info btn-circle"><i class="fas fa-eye"></i></button>
                                    <button onclick="MeditProducto(<?php echo $id_producto; ?>);" class="btn btn-secondary btn-circle"><i class="fas fa-edit"></i></button>
                                    <button onclick="MeliProducto(<?php echo $id_producto; ?>);" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></button>
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
