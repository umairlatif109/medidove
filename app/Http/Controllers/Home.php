
<?php
defined('BEASPATH') OR exit('No direct access allowed');
    class Home extends CI_Controller{


        public function __construct()
        {
             parent::__construct();
             $this->load->library('uri');
        }

        public function index()
        {
            $data = $this->input->post();
            print_r($data);
            $url =$this->uri->segment(1); // press ctrl + Q to see this docs

            echo $url;

            //ok

        }

    }
