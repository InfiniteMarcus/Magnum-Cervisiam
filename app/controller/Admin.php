<?php

use app\core\Controller;

class Admin extends Controller
{
  public function index()
  {
    $this->view('admin/painelDados');
  }


}
