<?php

use app\core\Controller;
use app\model\RespostasPesquisa;

class Admin extends Controller
{
  public function index()
  {      
    $respostas = new RespostasPesquisa();
    $dados = $respostas->retornaRespostasPorId("2");

    if(!empty($dados))
      $this->view('admin/painelDados', ['respostas' => $dados]);
    else{
      echo "<script> window.location.href = 'erro404'; </script>";
      die();
    }
  }

  public function painelDados()
  {      
    $respostas = new RespostasPesquisa();
    $dados = $respostas->retornaImagens();

    if(!empty($dados))
      $this->view('admin/painelDados', ['imagens' => $dados]);
    else{
      echo "<script> window.location.href = 'erro404'; </script>";
      die();
    }
  }
}
