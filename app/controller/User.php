<?php

use app\core\Controller;

class User extends Controller
{
  public function userIndex()
  {
    $this->view('user/userIndex');
  }

  public function premios()
  {
    $this->view('user/premios');
  }
}
