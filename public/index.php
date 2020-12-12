<?php
session_start();
?>

<!-- Esta pagina possui o template geral das paginas do site, mudando apenas o conteudo do body com
as chamadas dos controllers e views -->

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title></title>

  </head>
  <body>
	<!-- HEADER -->
	<header>
		
	</header>
	<!-- /HEADER -->

  <?php
    require '../app/autoload.php';

    use app\core\App;
    use app\core\Controller;

    $app = new App();

  ?>

	<!-- FOOTER -->
	<footer>
		
	</footer>
	<!-- /FOOTER -->

	<!-- Javascript -->

  </body>
</html>
