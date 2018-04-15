<?php
/**
 * Created By Trimmytech
 * Fiverr Handle : @trimmytech
 * Date: 8/7/2017
 * Time: 8:51 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller
{

    function __construct()
    {

        parent::__construct();
        $this->load->helper('url');

    }

    public function index()
    {
        $data = array();
        $data['title'] = "Welcome to TrafficKing.co.uk";
        $this->load->view('includes/header', $data);
        //
        $this->load->view('includes/footer');
    }

    public  function   home() {

    }

}