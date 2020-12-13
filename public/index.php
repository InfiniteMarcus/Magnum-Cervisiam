<?php
session_start();
?>

<!-- Esta pagina possui o template geral das paginas do site, mudando apenas o conteudo do body com
as chamadas dos controllers e views -->

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Estilos e fontes -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <?php 
        $string = str_replace('?', '/', substr(filter_input(INPUT_SERVER, 'REQUEST_URI'), 1));
        $REQUEST_URI = explode('/', $string);

        $set = false;
      if(isset($REQUEST_URI[1])){
        if($REQUEST_URI[1] === "login"){
          echo '<link rel="stylesheet" href="/assets/css/login.css">';
          $set = true;
        }else if($REQUEST_URI[1] === "cadastro"){
          echo '<link rel="stylesheet" href="/assets/css/cadastro.css">';
          $set = true;
        }else if($REQUEST_URI[1] === "quiz"){
          echo '<link rel="stylesheet" href="/assets/css/quiz.css">';
          $set = true;
        }
      }
      if(!$set)
        echo '<link rel="stylesheet" href="/assets/css/style.css">';
    ?>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  </head>
  <body>

  <?php
    require '../app/autoload.php';

    use app\core\App;
    use app\core\Controller;

    $app = new App();

  ?>

	<!-- Javascript -->
  <script src="/assets/js/jquery.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  </body>
</html>
