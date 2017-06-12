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
                        <a href="https://php-yolatengo.c9users.io/ci/artistas"><li style="margin:0">artistas  <span class="glyphicon glyphicon-sunglasses"></span></li></a>
                    </div>
                        
                    <div class="col-md-2" style="text-align:center"> 
                        <a href="https://php-yolatengo.c9users.io/ci/eventos"><li style="margin:0">eventos  <span class="glyphicon glyphicon-calendar"></span></li></a>
                    </div>
                    
                    <div class="col-md-2">
                        <a href="https://php-yolatengo.c9users.io/ci/cadastrousuario"><li>[cadastro / login] <span class="glyphicon glyphicon-user"></span></span></li></a>
                    </div>
                </div>
                </ul>
        </header>

        <div id="corpo">
            
        <main id="formulario-cadastro-artista">
            <h1>Cadastre-se</h1>
            
            <form name="cadastro-artista" action="/ci/ArtistasCon/inserir" method="post">
                  <p>
                        <label for="nome-artista">Nome Artista/Banda:</label> 
                        <input type="text" id="nome-artista" name="nm_artista" required autofocus/>
                  </p>
                  
                  <p>
                        <label for="nome-artista">Membros (separe-os por vírgula): </label> 
                        <input type="text" id="ds_membros" name="ds_membros" autofocus/>
                  </p>
                  
                  <p>
                        <label for="genero">Genêro:</label> 
                        <input type="text" id="genero" name="ds_genero" required autofocus/>
                  </p>
                  
                            
                  <p>
                        <label for="data-formacao">Data de Formacao:</label> 
                        <input type="date" id="data-formacao" name="dt_formacao" required/>
                  </p>
                  
                  <p>
                        <label for="link-facebook">Facebook:</label> 
                        <input type="text" id="link-facebook" name="ds_LinkFacebook" />
                  </p>
                            
                  <p>
                        <label for="link-youtube">Youtube:</label> 
                        <input type="text" id="link-youtube" name="ds_LinkYoutube" />
                  </p>
        
                          
                            
            
                  <p>
                        <input type="submit" id="botao_Enviar" name="cmdSend" value="enviar"/>
                  </p>
            </form>
                        
        </main>
        
       
        <br><br><br><br><br><br><br>
        </div>
        <footer>
            &copy;Palco Caiçara  |  Desenvolvido por blablabla
        </footer>
        
    <script src="js/bootstrap.js"></script>  
    </body>
</html>
