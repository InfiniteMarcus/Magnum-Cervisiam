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
                <div style="margin-left: auto; width: 26vw;">
                    <div class="d-flex">
                        <img id="clocker" src ="/assets/img/clocker.png">
                        <h3>Pesquisas anteriores</h3>
                    </div>
                    <div class="d-flex">
                        <img id="local" src ="/assets/img/local.png">
                        <h3>Locais de retirada</h3>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="pesquisas-title"><h2> Pesquisas Ativas</h2></div>
    

    <div class="card" id="card1">
        <img class="card-img-top" src="/assets/img/banner1.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Cerveja Skol - lata</h5>
            <p class="card-text"> Responda um questionário simples compartilhando sua experiência com a cerveja skol - Em lata</p>
            <a href="#" class="btn btn-primary">Responder agora</a>
        </div>
    </div>

    <div class="card" id="card2">
        <img class="card-img-top" src="/assets/img/banner2.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"> Guaraná Black - lata</h5>
            <p class="card-text">Responda um questionário simples compartilhando sua experiência com o guaraná antartica Black - Em lata</p>
            <a href="#" class="btn btn-primary">Responder agora</a>
        </div>
    </div>


</body>
</html>