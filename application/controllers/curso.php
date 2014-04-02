<?php

class Curso extends CI_Controller {
    
    public function novo() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Novo Curso';
        
        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('descricao', 'Descrição', 'required');
        $this->form_validation->set_rules('valor', 'Valor', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('curso/novo');
            $this->load->view('template/footer');
        } else {
            echo "<h1>Curso cadastrado com sucesso!</h1>";
        }
        
        
    }
    
}
