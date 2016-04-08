<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cadastro extends CI_Controller {


	public function index(){

		
		
		$dados = array('topo' => "img/Header_LF_Unificada-1-SemLogo.png" );
		$this->load->view("cadastro",$dados);
	}




}