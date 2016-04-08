<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Campanha extends CI_Controller {


	public function index(){

		
		
		$dados = array('topo' => "img/campanha.png",'menu_selecionado'=>'campanha' );
		$this->load->view("campanha",$dados);
	}




}