<?php

use app\core\Controller;
use app\model\Usuario;

class Home extends Controller
{
  public function index()
  {
    $this->view('home/index');
  }

  public function login(){
    //verificar se ele ta no login e quis logar, ou se so entrou pela primeira vez
    /*
    if((!isset($_SESSION['logged'])){
      if(isset($_POST[''])){
          unset($_SESSION['email']);
          $this->view('login');
      }
    }else{
      //Vai para menu do usuario
      echo "<script> window.location.href = ''; </script>";
      die();
    }
    */
    $this->view('home/login');
  }


}
