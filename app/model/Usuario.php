<?php

namespace app\model; 
use app\core\Database; 

class Usuario
{
  public static function verificaLogin($email, $password)
  {
    $conn = new Database();
    $result = $conn->executeQuery('SELECT Email, Senha FROM tb_Users WHERE Email = :EMAIL AND Senha = :PASSWORD LIMIT 1', array(
      ':EMAIL' => $email,
      ':PASSWORD' => $password
    ));

    return !empty($result);
  }

  public static function cadastraUsuario($email, $password)
  {

  }

}