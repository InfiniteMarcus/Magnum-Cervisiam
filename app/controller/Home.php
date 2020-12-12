<?php

use app\core\Controller;
use app\model\usuario;

class Home extends Controller
{
  public function index()
  {
    $this->view('home/index');
  }

  public function login(){

  }
}
