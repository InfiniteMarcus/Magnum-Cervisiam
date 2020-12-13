<!DOCTYPE html>
<html lang='pt-br'>
<body>
    <script type="text/javascript">
        var selCard = 0;
    </script>
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
    <div class="card1" data-aos="zoom-in" data-aos-duration="1200" onClick="selCard = 1;" style="background-image: url('<?php ?>')">
        <div><?php echo("De " . $dataIni . " Até " . $dataFin); ?></div>
    </div>
    <div class="card2" data-aos="zoom-in" data-aos-duration="1200" onClick="selCard = 2;" style="background-image: url('<?php ?>')">
        <div><?php echo("De " . $dataIni . " Até " . $dataFin); ?></div>
    </div>
    </div>

    <div class="cardGrafico">
        <p>Nível de satisfação</p>
    </div>
    <div id="grafico"></div>

    <script type="text/javascript">
    $(".cards").click({
        var op = 1;
        var ajax = $.ajax({
            url:"mostrarGrafico.php",
            dataType: 'json',
            type: "POST",
            data: {mtbom: mtbom, bom: bom, neutro: neutro, ruim: ruim, mtruim: mtruim, titulo: titulo, op: op},
            success:function(result){
                var chart = new CanvasJS.Chart("grafico",
	            {
		            theme: "light2",
		            title:{
			        text: result.titulo
		        },		
		            data: [
		        {       
			        type: "pie",
			        showInLegend: true,
			        toolTipContent: "{y} pessoas - #percent %",
			        legendText: "{indexLabel}",
			        dataPoints: [
				            {  y: result.mtbom, indexLabel: "Muito bom" },
				            {  y: result.bom, indexLabel: "Bom" },
                            {  y: result.neutro, indexLabel: "Neutro" },
                            {  y: result.ruim, indexLabel: "Ruim" },
                            {  y: result.mtruim, indexLabel: "Muito Ruim" }
			            ]
		            }
		        ]
	            });
	            chart.render();
    })
    </script>
    <script>
        $(".cardGrafico").hide();
        $("#grafico").hide();
    </script>
</body>
</html>