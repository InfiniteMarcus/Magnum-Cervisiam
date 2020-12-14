<?php
    use app\core\Database; 
    use app\model\RespostasPesquisa;

    $conn = new Database();

    $val = array(0 => "NULL");
    for ($i = 1; $i<=5; $i++){
        //$result = $conn->executeQuery("SELECT COUNT(*) FROM tb_pesquisaRespostas WHERE Pesquisa_ID = :ID AND Resposta_1 = :N", array(':ID' => $_POST['op'], ':N' => $i));
        $result = $conn->executeQuery("SELECT COUNT(*) FROM tb_pesquisaRespostas WHERE Pesquisa_ID = :ID AND Resposta_1 = :N", array(':ID' => "2", ':N' => "3"));
        $val[$i] = $result->fetch();
    }
    $titulo = "OIOIOI";

    echo (json_encode(array(
        'mtruim' => $val[1],
        'ruim' => $val[2],
        'neutro' => $val[3],
        'bom' => $val[4],
        'mtbom' => $val[5],
        'op' => $_POST['op'],
        'titulo' => $titulo
    )));
?>