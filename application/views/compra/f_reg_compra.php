<button class="btn btn-info" data-dismiss="modal" style="float:right;"><span>X</span></button>
<center><h2>REGISTRAR COMPRA</h2></center>
<div class="row">
    <div class="col-md-4">
        <form action="" id="form_reg_com" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-6">
                    <input class="form-control" type="text" placeholder="Codigo de compra" name="cod_compra" id="cod_compra">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <select name="proveedor" id="proveedor" class="form-control">
                        <option value="">Seleccionar proveedor</option>
                        <?php 
                        foreach($proveedor as $prov){
                            $id_proveedor=$prov->id_proveedor;
                            $nom_proveedor=$prov->nombre_prov;
                        ?>
                        <option value="<?php echo $id_proveedor;?>"><?php echo $nom_proveedor;?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <select name="producto" id="producto" class="form-control">
                        <option value="">Seleccionar producto</option>
                        <?php 
                        foreach($producto as $pro){
                            $id_producto=$pro->id_producto;
                            $nom_producto=$pro->producto;
                            $cantidad=$pro->cantidad;
                        ?>
                        <option value="<?php echo $nom_producto;?>"><?php echo $nom_producto;?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <input class="form-control" type="number" placeholder="Cantidad" name="cantidad" id="cantidad">
                </div>
                <div class="form-group col-md-4">
                    <input class="form-control" type="number" placeholder="P. de compra" name="pre_compra" id="pre_compra">
                </div>
                <div class="form-group col-md-4">
                    <input class="form-control" type="number" placeholder="P. de venta" name="pre_venta" id="pre_venta">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="respuesta_form">

                    </div>
                </div>
            </div>
            <input class="btn btn-success" type="button" value="AGREGAR" onclick="agreVenta();">
        </form>
    </div>
    <div class="col-md-8">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Producto</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Costo unitario</th>
                    <th scope="col">Costo total</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody id="lista_compra">
            </tbody>
        </table>
        <table class="table table-bordered table-hover table-striped table-condensed">
            <tbody>
                <tr>
                    <td>Pago</td>
                    <td><input type="number" id="pago" name="pago" class="form-control" value="0" onkeyup="calCambio();"></td>
                    <td>Cambio</td>
                    <td><input type="number" id="cambio" name="cambio" class="form-control" value="0" readonly></td>
                    <td>Total</td>
                    <td><input type="number" id="total" name="total" class="form-control" readonly></td>
                </tr>
            </tbody>
        </table>
        </form>
    <div class="row justify-content-center">
        <input class="btn btn-primary" type="button" data-dismiss="modal" value="REGISTRAR" onclick="regCompra();">
    </div>
</div>
</div>


