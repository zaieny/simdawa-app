<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $data['title'] = "Dashboard | SIMDAWA-APP";
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('home_view');
        $this->load->view('template/footer');
    }

    function nama()
    {
        echo 'Maulana';
    }
}