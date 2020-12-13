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
    <div class="saldo">
        <h1>Saldo Atual</h1>
        <h2><?php echo($_GET['saldo']) ?></h2>
    </div>
</body>
</html>