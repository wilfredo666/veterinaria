<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cacceso extends CI_Controller {
    function __construct(){
        parent:: __construct(); 
        $this->load->model('Macceso');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
    function index()
    {
        $this->load->view('index');
    }
    function ingresar(){
        $alias=trim($_POST['alias']);
        $clave=trim($_POST['password']);

        $datos=array(
            'alias'=>$alias,
            'password'=>$clave
        );
        $this->session->set_userdata($datos);

        $count=sizeof($this->Macceso->ingresar($datos));

        $this->form_validation->set_rules('alias', 'Contraseña', 'required');
        $this->form_validation->set_rules('password', 'Contraseña', 'required');

        if($this->form_validation->run()==false){
            header('location:http://localhost/veterinaria');
        }else{
            if($count>0){
                $this->perfil();
            }else{
                $error=array('mensaje'=>"Datos incorrectos, vuelve a intentarlo !!!");
                $this->load->view('index',$error);
            }
        }
    }
    function vista_reg_usuario(){
        $datos=array(
            'lista_cargo'=>$this->Macceso->listar_cargo()
        );
        $this->load->view('registro_usuario',$datos);
    }
    function reg_usuario(){
        $alias=trim($_POST['alias']);
        $clave=trim($_POST['password']);
        $email=trim($_POST['email']);
        $cargo=trim($_POST['cargo']);

        $datos=array(
            'alias'=>$alias,
            'email'=>$email,
            'password'=>$clave,
            'id_cargo'=>$cargo
        );

        $this->Macceso->reg_usuario($datos);
        header('location:http://localhost/veterinaria');
    }
    function perfil(){
        $this->load->view('menu');
        $this->load->view('panel');
        $this->load->view('footer');
    }
}
