<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic extends CI_Controller {
    // http://localhost:8080/index.php/topic
    function index(){
        $this->load->view('header');
        $this->load->view('main');
        $this->load->view('footer');
    }

    // http://localhost:8080/index.php/topic/get/$id
    function get($id){
        $this->load->view('header');
        $this->load->view('get', array('id'=>$id));
        $this->load->view('footer');
    }
}
