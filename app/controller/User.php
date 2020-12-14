<?php

use app\core\Controller;

class User extends Controller
{
  public function index()
  {
    $this->view('user/userIndex');
  }

  public function userIndex()
  {
    $this->view('user/userIndex');
  }

  public function premios()
  {
    $this->view('user/premios');
  }

  public function quiz()
  {
    $pesquisa = new Pesquisa();
    $dados = $pesquisa->retornaPerguntaPorId("2");

    if(!empty($dados))
      $this->view('my/quiz', ['pesquisa' => $dados]);
    else{
      echo "<script> window.location.href = 'erro404'; </script>";
      die();
    }
  }
}
