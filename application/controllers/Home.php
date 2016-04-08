<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index(){


		$dados = array('topo' => "img/Header_LF_Unificada-2-SemLogo.png",'menu_selecionado'=>'home');



		$this->load->view("home",$dados);
	}




}