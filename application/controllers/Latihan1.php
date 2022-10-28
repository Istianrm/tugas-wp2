<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Latihan1 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    function index()
    {
        // echo "<h1>Haloo dunia Binatang</h1>";
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('table');
        $this->load->view('templates/footer');
    }
}
