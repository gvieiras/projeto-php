<!DOCTYPE html>
<html lang="br">
    <head>
    <meta charset="UTF-8" />
    <title>Palco Caiçara - Home</title>   
    
    
    <!--styles-->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/default-style.css" />
    
    <script src="js/jquery-3.1.1.min.js"></script>
    <style>
    .row{
        width:100%;
    }    
    </style>
    </head>
    
    <body>
        <!--HEADER-->
        <header>
            <ul>
                <div class="row">
                <div class="col-md-3">
                    <li><h1><a href="home.html">
                        <span class="glyphicon glyphicon-cd" aria-hidden="true"></span> palco <span id="text-caicara">caiçara</span></a>
                        </h1></li>
                </div>
                    
                <!--tirar css inline dps-->    
                <div class="col-md-2" style="text-align:right">
                    <li style="margin:0"><a href="artistas.html">artistas</a></li>
                </div>
                    
                <div class="col-md-2" style="text-align:center"> 
                    <li style="margin:0"><a href="eventos.html">eventos</a></li>
                </div>
                    
                <div class="col-md-3" style="text-align:left">
                    <li style="margin:0"><a href="em_alta.html">em alta</a></li>
                </div>
                
                <div class="col-md-2">
                    <li><a href="cadastro-usuario.html">Cadastre-se!</a></li>
                </div>
                </div>
                </ul>
        </header>

        <div id="corpo">
            
        <!--ULTIMOS ARTISTAS SELECIONADOS-->
        <main id="formulario-cadastrar">
            <h1>Cadastre-se</h1>
            
            <form name="cadastro" action="/ci/dbnome/inserir" method="post">
                  <p>
                        <label for="nome-completo">Nome completo:</label> 
                        <input type="text" id="nome-completo" name="nm_completousuario" required autofocus/>
                  </p>
                            
                  <p>
                        <label for="nome-usuario">Nome de usuário:</label> 
                        <input type="text" id="nome-usuario" name="nm_usuario" required/>
                  </p>
                  
                  <p>
                        <label for="email-usuario">E-mail:</label> 
                        <input type="email" id="email-usuario" name="ds_email" required/>
                  </p>
                            
                  <p>
                        <label for="senha">Senha:</label> 
                        <input type="password" id="senha" name="ds_senha" required/>
                  </p>
                            
                  <p>
                        <label for="re-senha">Insira sua senha novamente:</label>
                        <input type="password" id="re-senha" name="reinserirsenhausuario" required/>
                  </p>
                           
                  <p>
                        <fieldset>
                        <legend>Sexo:</legend>
                              <input type="radio" value="M" name="ic_sexo" required>
                              <label for="masculino">Masculino</label>
                              
                              <input type="radio" value="F" name="ic_sexo" required>
                              <label for="feminino">Feminino</label>
                        </fieldset>
                  </p>
                            
                  <p>
                        <label for="data">Data de nascimento:</label>
                        <input type="date" id="data" name="dt_nascimento" required/>
                  </p>
            
                  <p>
                        <input type="submit" id="botao_Enviar" name="cmdSend" value="enviar" />
                  </p>
            </form>


            
           
        </main>
        
        <!--PROXIMOS EVENTOS-->
        <br><br><br><br><br><br><br>
        </div>
        <footer>
            &copy;Palco Caiçara  |  Desenvolvido por blablabla
        </footer>
        
    <script src="js/bootstrap.js"></script>  
    </body>
</html>