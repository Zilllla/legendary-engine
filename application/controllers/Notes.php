<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  function index() {
    // $this->load->view('header');
    $this->load->view('notes');
    // $this->load->view('footer');
  }

}
