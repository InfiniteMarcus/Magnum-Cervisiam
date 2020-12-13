<?php

namespace app\model; 
use app\core\Database; 

class Pesquisa
{
  public static function retornaPerguntaPorId($id)
  {

    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM tb_Pesquisa WHERE ID = :ID LIMIT 1', array(
      ':ID' => $id
    ));

    $res = $result->fetch();

    if(!empty($res))
        return $res;
    else
        return false;
  }

  public static function retornarRespostas()
  {
    $id = "2";

    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM tb_Pesquisa WHERE ID = :ID LIMIT 1', array(
      ':ID' => $id
    ));

    $res = $result->fetch();

    if(!empty($res))
        return $res;
    else
        return false;
  }

}
