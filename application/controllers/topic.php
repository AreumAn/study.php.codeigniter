<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic extends CI_Controller {
    // http://localhost:8080/index.php/topic
    function index(){
        $this->load->view('topic');
    }

    // http://localhost:8080/index.php/topic/get/$id
    function get($id){
        $data = array('id'=>$id);
        $this->load->view('get', $data);
    }
}
