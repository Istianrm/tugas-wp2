<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JualBeli extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    function index()
    {
        echo "Ini halaman Jual Beli Pengguna";
    }
}
