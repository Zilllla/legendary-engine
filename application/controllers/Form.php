<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  function index() {
    // $this->load->view('header');
    $this->load->view('form');
    // $this->load->view('footer');
  }

}
