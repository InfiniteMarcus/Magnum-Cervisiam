<?php

use app\core\Controller;
use app\model\Usuario;

class Admin extends Controller
{
  public function index()
  {
    $this->view('admin/painelDados');
  }


}
