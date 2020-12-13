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
    $this->view('home/cadastro');
  }

  public function login(){
    //verificar se ele ta no login e quis logar, ou se so entrou pela primeira vez
        
    if(!isset($_SESSION['logado'])){
      if(isset($_POST['login'])){
        $user = new Usuario();

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

        $verifica_query = $user->verificaLogin($email, $password);

        if(!empty($verifica_query)){
          $_SESSION['erroLogin'] = 1;
          $this->view('home/login');
        }else{
          $_SESSION['logado'] = true;
          $this->view('home/index');
        }
      }else{
        $this->view('home/login');
      }

    }else{
      //Vai para menu do usuario
      echo "<script> window.location.href = ''; </script>";
      die();
    }
  }
}