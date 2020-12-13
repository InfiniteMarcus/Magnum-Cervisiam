<?php

namespace app\core;

use app\model\product;

/**
* Esta classe é responsável por instanciar um model e chamar a view correta
* passando os dados que serão usados.
*/
class Controller
{

  /**
  * Este método é responsável por chamar uma determinada view (página).
  *
  * @param  string  $model   É o model que será instanciado para usar em uma view, seja seus métodos ou atributos
  */
  public function model($model)
  {
    require '../app/model/' . $model . '.php';
    $classe = 'app\\model\\' . $model;
    return new $classe();

  }

  /**
  * Este método é responsável por chamar uuma determinada view (página).
  *
  * @param  string  $view   A view que será chamada (ou requerida)
  * @param  array   $data   São os dados que serão exibidos na view
  */
  public function view(string $view, $data = [])
  {
    require '../app/view/' . $view . '.php';

  }

  /**
  * Este método é herdado para todas as classes filhas que o chamaram quando
  * o método ou classe informada pelo usuário nçao forem encontrados.
  */
  public function pageNotFound()
  {
    $this->view('../erro404');
  }
}
