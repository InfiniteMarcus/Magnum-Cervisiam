<?php

use app\core\Controller;
use app\model\Usuario;

class Home extends Controller
{
  public function index()
  {
    $this->view('home/index');
  }

  public function cadastro()
  {
    if(isset($_SESSION['logado'])){
      echo "<script> window.location.href = '/user/userIndex'; </script>";
      die();
    }else
      $this->view('home/cadastro');
  }

  public function login(){

    if(isset($_SESSION['logado'])){ 
      echo "<script> window.location.href = '/user/userIndex'; </script>";
      die();
    }

    if(isset($_POST['login'])){
      $user = new Usuario();

      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
      $password = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

      $verifica_query = $user->verificaLogin($email, $password);

      if($verifica_query == false){
        $_SESSION['erroLogin'] = 1;
        $this->view('home/login');
      }else{
        $_SESSION['logado'] = true;
        echo "<script> window.location.href = '/user/userIndex'; </script>";
        die();
      }
    }else
      $this->view('home/login');
  }
}