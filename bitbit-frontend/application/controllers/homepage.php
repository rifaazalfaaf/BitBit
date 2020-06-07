<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

 function __construct(){
  parent::__construct();
     $this->API="http://localhost:9000/api";
     $this->load->library('curl');
     $this->load->helper('url');
 }

 public function index()
 {
  $data['tanaman'] = json_decode($this->curl->simple_get($this->API.'/tanaman'));
  $data['jasa'] = json_decode($this->curl->simple_get($this->API.'/jasa'));
  // Debug data
  // echo '<pre>';
  // var_dump($data['tanaman']);
  // echo '</pre>';

  $this->load->view('component/header.php');
  $this->load->view('component/navbar.php');
  $this->load->view('main-content/home.php',$data);
  $this->load->view('component/footer.php');
 }
}