<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cproducto extends CI_Controller {
    function __construct(){
        parent:: __construct(); 
        $this->load->model('Mproducto');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    function lista_producto(){
        $datos=array('lista_productos'=>$this->Mproducto->listar_productos());
        $this->load->view('menu');
        $this->load->view('producto/Vproducto',$datos);
        $this->load->view('footer');
    }
    function f_reg_producto(){
        $this->load->view('producto/f_reg_producto');
    }
    function registrar_producto(){
        $config=[ 
            "upload_path"=>"./portada",
            "allowed_types"=>"png|jpg"
        ];
        $this->load->library("upload",$config);
        $this->upload->do_upload("portada_p");
        $portada=array('upload_data'=>$this->upload->data());

        $nom_producto=trim($_POST['nom_producto']);
        $cantidad=trim($_POST['cantidad']);
        $detalle=trim($_POST['detalle']);
        $pre_compra=trim($_POST['pre_compra']);
        $pre_venta=trim($_POST['pre_venta']);
        $datos=array(
            'producto'=>$nom_producto,
            'portada'=>$portada['upload_data']['file_name'],
            'cantidad'=>$cantidad,
            'descripcion'=>$detalle,
            'precio_venta'=>$pre_venta,
            'precio_compra'=>$pre_compra,
            'id_usuario'=>"1"        
        );
        $this->Mproducto->reg_producto($datos);
        echo "<center class='alert alert-success'>Producto registrado con exito !!!</center>";
    }
    function f_edi_producto(){
        $id_producto=$this->uri->segment(3);
        $producto=array('producto'=>$this->Mproducto->f_edi_producto($id_producto));
        $this->load->view('producto/f_edi_producto',$producto);
    }
    function actualizar_producto(){
        $id_producto=$this->uri->segment(3);

        $nom_producto=trim($_POST['nom_producto']);
        $cantidad=trim($_POST['cantidad']);
        $detalle=trim($_POST['detalle']);
        $pre_compra=trim($_POST['pre_compra']);
        $pre_venta=trim($_POST['pre_venta']);
        $portada=$_FILES['portada_p']['name'];
        
        if($portada!=""){
            $config=[ 
                "upload_path"=>"./portada",
                "allowed_types"=>"png|jpg"
            ];
            $this->load->library("upload",$config);
            $this->upload->do_upload("portada_p");
            $portada=array('upload_data'=>$this->upload->data());

            $datos=array(
                'producto'=>$nom_producto,
                'portada'=>$portada['upload_data']['file_name'],
                'cantidad'=>$cantidad,
                'descripcion'=>$detalle,
                'precio_venta'=>$pre_venta,
                'precio_compra'=>$pre_compra,
                'id_usuario'=>"1"        
            );
        }else{
            $datos=array(
                'producto'=>$nom_producto,
                'cantidad'=>$cantidad,
                'descripcion'=>$detalle,
                'precio_venta'=>$pre_venta,
                'precio_compra'=>$pre_compra,
                'id_usuario'=>"1"   
            );
        }

        $this->Mproducto->actualizar_producto($datos,$id_producto);
        echo "<center class='alert alert-success'>Producto actualizado con exito !!!</center>";
    }
    function f_eliminar_producto(){
                $this->load->view('producto/mnj_eli_producto');
    }
    function eliminar_producto(){
        $id_producto=$this->uri->segment(3);
        $this->Mproducto->eli_producto($id_producto);
        echo "<center class='alert alert-success'>Producto eliminado con exito !!!</center>";
    }
    function f_ver_producto(){
        $id_producto=$this->uri->segment(3);
        $producto=array('producto'=>$this->Mproducto->info_producto($id_producto));
        $this->load->view('producto/detalle_producto',$producto);
    }

}