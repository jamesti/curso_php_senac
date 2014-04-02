<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Mundo extends CI_Controller {
    
    public function teste() {
        echo "Testando esse negocio aqui...";
    }
    
    public function legal($n1 = 0, $n2 = 0) {
        $soma = $n1 + $n2;
        echo "A soma e $soma";
    }
    
    public function index() {
        
        $data['title'] = 'Olá Mundo';
        $data['teste'] = 'Variável teste!';
        $data['legal'] = 'Valor legal!';
        
        $this->load->view('template/header', $data);
        $this->load->view('ola_mundo', $data);
        $this->load->view('template/footer');
    }
    
}












