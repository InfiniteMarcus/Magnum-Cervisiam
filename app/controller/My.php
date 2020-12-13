<?php

use app\core\Controller;
use app\model\Pesquisa;

class My extends Controller
{
    public function index()
    {
      $this->view('my/quiz');
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