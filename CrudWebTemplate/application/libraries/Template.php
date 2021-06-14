<?php
 class Template {
 protected $_ci;

    function __construct() {
    $this->_ci = &get_instance(); 
}

    function views($template = NULL, $data = NULL) {
if ($template != NULL) {
    
    $data['head'] = $this->_ci->load->view('Admin/_Template/head', $data, TRUE); 
    // untuk memanggil file head pada folder tersebut
    $data['topbar'] = $this->_ci->load->view('Admin/_Template/topbar', $data, TRUE);
    // untuk memanggil file topbar pada folder tersebut
    $data['sidebar'] = $this->_ci->load->view('Admin/_Template/sidebar', $data, TRUE);
    // untuk memanggil file sidebar pada folder tersebut
    $data['konten'] = $this->_ci->load->view($template, $data, TRUE);
    // data yang ita panggil dari file konten
    $data['content'] = $this->_ci->load->view('Admin/_Template/content', $data, TRUE);
    // untuk memanggil file content pada folder tersebut
    $data['footer'] = $this->_ci->load->view('Admin/_Template/footer', $data, TRUE);
    // untuk memanggil file footer pada folder tersebut
    echo $data['Template']= $this->_ci->load->view('Admin/_Template/Template',$data, TRUE); 
    // untuk memanggil file template pada folder tersebut
    
    }
    }
    }?>