<!DOCTYPE html>
<html lang='pt-br'>
<body>
    <header>
        <img id="logo" src="/assets/img/logoBase.png" width="50px" height="50px" style="margin: 10px">
        <div class="btns">
            <img src="/assets/img/mensagem.png">
            <img src="/assets/img/estrela.png">
            <img src="/assets/img/user.png">
        </div>
    </header>
    <div class="card">
        <div class="card-body">
            <div class="saldo">
                <h1>Saldo Atual</h1>
                <h2><?php echo($_GET['saldo']) ?></h2>
                <img align="right" id="clocker" src ="/assets/img/clocker.png">
                <h3 align="right">Pesquisas anteriores</h3>
                <img align="right" id="local" src ="/assets/img/local.png">
                <h3 align="right">Locais de retirada</h3>

            </div>
        </div>
    </div>

    <h1 style="margin-top: 60px; margin-left: 6vw;">Pesquisas ativas</h1>
    <div class="card" style="margin-top: 10px">
        <div class="card-body">
            <h1>Pequisas ativas</h1>
    </div>



</body>
</html>