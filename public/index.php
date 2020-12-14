<?php
session_start();
?>

<!-- Esta pagina possui o template geral das paginas do site, mudando apenas o conteudo do body com
as chamadas dos controllers e views -->

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Magnum Cervisiam</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/assets/img/favicon.ico" />

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
        } else if($REQUEST_URI[1] === "painelDados"){
          echo '<link rel="stylesheet" href="/assets/css/estiloDados.css">';
          $set = true;
        } else if($REQUEST_URI[1] === "userIndex"){
          echo '<link rel="stylesheet" href="/assets/css/userIndex.css">';
          $set = true;
        } else if($REQUEST_URI[1] === "premios"){
          echo '<link rel="stylesheet" href="/assets/css/premios.css">';
          echo '<link rel="stylesheet" href="/assets/css/userIndex.css">';
          $set = true;
        }
      }
      if(!$set)
        echo '<link rel="stylesheet" href="/assets/css/style.css">';
    ?>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <style>
      @font-face {
        font-family: "Nexa_Regular";
        src: url("/assets/fonts/NexaDemo-Light.otf");
      }

      @font-face {
        font-family: "Nexa_Bold";
        src: url("/assets/fonts/NexaDemo-Bold.otf");
      }
    </style>
    <link href='/assets/fonts/NexaDemo-Bold.otf' rel='stylesheet' type='text/css'>
    <link href='/assets/fonts/NexaDemo-Light.otf' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="/assets/js/jquery.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  </head>
  <body>

  <?php
    require '../app/autoload.php';

    use app\core\App;
    use app\core\Controller;

    $app = new App();

  ?>

	<!-- Javascript -->
  <script>
    AOS.init();
  </script>

  </body>
</html>
