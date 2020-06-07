<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

    function __construct(){
    parent::__construct();
    $this->API="http://localhost:9000/api";
    $this->load->helper('url');
    $this->load->library('curl');}

 public function index()
 {
    $keyword = $this->input->get('keyword');
    $data['tanaman'] = json_decode($this->curl->simple_get($this->API.'/tanaman?name='.$keyword));
    $data['jasa'] = json_decode($this->curl->simple_get($this->API.'/jasa?title='.$keyword));
  
  // Debug data
  // echo '<pre>';
  // var_dump($data['matkul']);
  // echo '</pre>';

  $this->load->view('component/header.php');
  $this->load->view('component/navbar.php');
  $this->load->view('main-content/search.php',$data);
  $this->load->view('component/footer.php');
 }
}