<!DOCTYPE html>
<html lang='pt-br'>
<body>
    <?php
        $_SESSION['adminNome'] = "Michel Cuba";
        $dataIni = "13/02/2020";
        $dataFin = "15/07/2020";
    ?>
    <nav>
        <ul>
            <li id="tituloNavBar">Painel</li>
            <li><img src="/assets/img/user.png" width="70px" height="70px" style="margin-top: 15px"></li>
            <li id="nomeAdmin"><?php echo ($_SESSION['adminNome']); ?></li>
            <div class="btnsNavbar">
            <li id="home">Home</li>
            <li id="pesquisar">Pesquisar</li>
            <li id="suporte">Suporte</li>
            </div>
        </ul>
    </nav>
    <div class="cards">
    <div class="card1" data-aos="zoom-in" data-aos-duration="1200" style="background-image: url('<?php ?>')">
        <div><?php echo("De " . $dataIni . " Até " . $dataFin); ?></div>
    </div>
    <div class="card2" data-aos="zoom-in" data-aos-duration="1200" style="background-image: url('<?php ?>')">
        <div><?php echo("De " . $dataIni . " Até " . $dataFin); ?></div>
    </div>
    </div>

    <div class="cardGrafico">
        <p>Nível de satisfação</p>
    </div>
    <div id="grafico"></div>

    <script>
        $(".cardGrafico").hide();
        $("#grafico").hide();
    </script>
    <script>
    $("#pesquisar").click(function() {
        var mtbom = 52;
        var bom = 73;
        var neutro = 20;
        var ruim = 15;
        var mtruim = 33;
        var titulo = "Satisfação da Skol";
        var chart = new CanvasJS.Chart("grafico",
	            {
		            theme: "light2",
		            title:{
			        text: titulo
		        },		
		            data: [
		        {       
			        type: "pie",
			        showInLegend: true,
			        toolTipContent: "{y} pessoas - #percent %",
			        legendText: "{indexLabel}",
			        dataPoints: [
				            {  y: mtbom, indexLabel: "Muito bom" },
				            {  y: bom, indexLabel: "Bom" },
                            {  y: neutro, indexLabel: "Neutro" },
                            {  y: ruim, indexLabel: "Ruim" },
                            {  y: mtruim, indexLabel: "Muito Ruim" }
			            ]
		            }
		        ]
            });
        $(".card1").fadeOut(500);
        $(".card2").fadeOut(500);
        $(".cardGrafico").fadeIn(500);
        $("#grafico").fadeIn(500);
        chart.render();
    });
    </script>
</body>
</html>