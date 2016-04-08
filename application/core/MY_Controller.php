<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller
{
    var $data = array();
    public function __construct() 
    {
        parent::__construct();
        $this->load->library('cart');
        $this->getLoja();
        //$this->get_banners();
        //$this->get_paginas();
    }
    public function getLoja() 
    {
        if(!$this->session->userdata('loja')){
            $this->load->model('parceiros_model','parceiro');
            if(!$this->parceiro->getSession()){
                redirect('http://www.facilemecursos.com.br', 'location');
            }
        }
        if(!$this->session->userdata('loja')->online){
            $html = $this->load->view('temporario', $this->data, true);
            print $html;
            exit();
        }
    }



}
