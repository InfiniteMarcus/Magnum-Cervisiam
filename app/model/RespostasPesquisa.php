<?php

namespace app\model; 
use app\core\Database; 

class RespostasPesquisa
{
  public static function retornaRespostasPorId($id)
  {

    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM tb_pesquisaRespostas WHERE Pesquisa_ID = :ID', array(
      ':ID' => $id
    ));

    $res = $result->fetch();

    if(!empty($res))
        return $res;
    else
        return false;
  }

  public static function retornaImagens()
  {

    $conn = new Database();
    $result = $conn->executeQuery('SELECT Banner FROM tb_Pesquisa');

    $res = $result->fetchAll();

    if(!empty($res))
        return $res;
    else
        return false;
  }

}
