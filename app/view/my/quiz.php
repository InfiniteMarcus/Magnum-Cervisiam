    <div class="main">
        <div class="form-container">
            <h1 class="title">Questionário: </h1>
            <form action="index" method="post">
                <div id="form-wrapper">
                <?php $i = 0; $j = 1; while($i < $data['pesquisa']['qnt_Perguntas']){?>
                    <div class="card">
                            <h1 id="form-title">Questão <?=$i+1?>:</h1>
                            <h2 class="card-title"><?= $data['pesquisa']["Pergunta_" . ($i+1)] ?></h2>
                            <div id="debt-amount-slider">
                                <input type="radio" name="resposta<?=$i+1?>" id=<?=$j?> value="1" required>
                                <label for=<?=$j?>></label>
                                <input type="radio" name="resposta<?=$i+1?>" id=<?=$j+1?> value="2" required>
                                <label for=<?=$j+1?>></label>
                                <input type="radio" name="resposta<?=$i+1?>" id=<?=$j+2?> value="3" required>
                                <label for=<?=$j+2?>></label>
                                <input type="radio" name="resposta<?=$i+1?>" id=<?=$j+3?> value="4" required>
                                <label for=<?=$j+3?>></label>
                                <input type="radio" name="resposta<?=$i+1?>" id=<?=$j+4?> value="5" required>
                                <label for=<?=$j+4?>></label>
                                <div id="debt-amount-pos"></div>
                            </div>
                    </div>
                    <?php $j +=5; $i++;} ?>
                </div>
                <button type="submit" class="btn btn-outline-danger" id="send-button">Enviar</button>
            </form>
        </div>
    </div>    