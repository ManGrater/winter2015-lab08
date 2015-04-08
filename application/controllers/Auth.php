<?php

class Auth extends Application {
  function __construct() {
    parent::__construct();
    $this->load->helper('url');
  }

  function index() {
    $this->data['pagebody'] = 'login';
    $this->render();
  }
}
