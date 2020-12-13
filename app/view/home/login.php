    
    <div id="main" class="d-flex">
        <div class="bgimg"><a href="index"><img src="/assets/img/back.svg" alt=""></a></div>
        <div id="form-container" class="container-fluid">
            <form id="login" class="pb-md-5 mb-md-3" action="login" method="post">
                <div class="form-group">
                    <h2>Faça login para continuar</h2>

                    <?php 
                      if(isset($_SESSION['erroLogin'])){
                        unset($_SESSION['erroLogin']);
                        echo "<div style='color:red; margin-bottom:10px'> Credenciais incorretas </div>";
                      }
                    ?>

                    <label for="exampleInputEmail1">E-mail</label> 
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail" name="email">
                  </div>
                  <div class="form-group" style="margin-bottom: 8px;">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="senha"> 
                  </div>
                  <div class="form-check mb-4">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Manter logado</label>
                  </div>
                  <button type="submit" id="btn" class="btn btn-primary btn-lg btn-block" style="width: 380px;" name="login">Login</button>
                  </br>
                  <a href="cadastro">Não possui cadastro? Clique aqui</a>
            </form>
        </div>
    </div>