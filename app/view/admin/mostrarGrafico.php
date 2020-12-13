<?php
    use app\core\Database; 
    use app\model\RespostasPesquisa;


    $resp = new RespostasPesquisa();

    $res = $resp->retornarRespostas();


    $mtBom = $_POST['mtbom'];
    $bom = $_POST['bom'];
    $neutro = $_POST['neutro'];
    $ruim = $_POST['ruim'];
    $mtRuim = $_POST['mtruim'];
    $titulo = $_POST['titulo'];
    
    switch ($_POST['op']){
        case 1:
            
    }

    echo (json_encode(array(
        'mtbom' => $mtBom,
        
    )))
?>