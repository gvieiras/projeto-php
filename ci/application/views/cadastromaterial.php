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
    
    .cadastro-material{
    width:40%;
    background-color:white;
    }
    
    .cadastro-material:first-child{
    margin-left:5%;
    float:left;
    margin-bottom:25%;
    }
    
    .cadastro-material:last-child{
    margin-right:5%;
    float:right;
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
            
        <div class="cadastro-material">
            <h1>Cadastrar material: <?=$artista[0]['nm_artista']?></h1>
            
            <form name="cadastro-material" action="/ci/MaterialCon/inserir" method="post">
                <input type="hidden" id="cd_artista" name="cd_artista" value="<?= $artista[0]['cd_artista'];?>"> 
                  <p>
                        <label for="nome-artista">Nome do material:</label> 
                        <input type="text" id="nome-nm_material" name="nm_material" required autofocus/>
                  </p>
                  
                  <p>
                        <label for="formato">Tipo de material:</label> 
                        <select name="ic_tipo">
                            <option value="LP">LP</option>
                            <option value="EP">EP</option>
                            <option value="Single">Single</option>
                            <option value="Outros">Outros</option>
                        </select>
                  </p>
                  
                  <p>
                        <label for="formato">Gênero musical do material:</label> 
                        <input type="text" id="ds_genero" name="ds_genero" placeholder="Rock, Hip-Hop, Eletrônica, etc..."/>
                  </p>
                  
                 <p>
                        <label for="duracao">Data de Lançamento:</label> 
                        <input type="date" id="dt_ano" name="dt_ano" required/>
                  </p>
                  
                  <p>
                        <input type="submit" id="botao_Enviar" name="cmdSend" value="enviar"/>
                  </p>
                  
            </form>
        </div>
        
        
        <!--editar info do artista-->
        <div class="cadastro-material">
            <h1>Editar informações: <?=$artista[0]['nm_artista']?></h1>
            
            <form name="cadastro-material" action="/ci/ArtistasCon/update_salvar" method="post">
                <input type="hidden" id="cd_artista" name="cd_artista" value="<?= $artista[0]['cd_artista'];?>"> 
                 <p>
                        <label for="nome-artista">Nome Artista/Banda:</label> 
                        <input type="text" id="nome-artista" name="nm_artista" value="<?=$artista[0]['nm_artista']?>" required autofocus/>
                  </p>
                  
                  <p>
                        <label for="nome-artista">Membros (separe-os por vírgula): </label> 
                        <input type="text" id="ds_membros" name="ds_membros" value="<?=$artista[0]['ds_membros']?>" autofocus/>
                  </p>
                  
                  <p>
                        <label for="genero">Genêro:</label> 
                        <input type="text" id="genero" name="ds_genero" value="<?=$artista[0]['ds_genero']?>" required autofocus/>
                  </p>
                  
                            
                  <p>
                        <label for="data-formacao">Data de Formacao:</label> 
                        <input type="date" id="data-formacao" name="dt_formacao" value="<?=$artista[0]['dt_formacao']?>" required/>
                  </p>
                  
                  <p>
                        <label for="link-facebook">Facebook:</label> 
                        <input type="text" id="link-facebook" name="ds_LinkFacebook" value="<?=$artista[0]['ds_LinkFacebook']?>" />
                  </p>
                            
                  <p>
                        <label for="link-youtube">Youtube:</label> 
                        <input type="text" id="link-youtube" name="ds_LinkYoutube" value="<?=$artista[0]['ds_LinkYoutube']?>" />
                  </p>
        
                          
                            
            
                  <p>
                        <input type="submit" id="botao_Enviar" name="cmdSend" value="enviar"/>
                  </p>
                </form>
                <form name="cadastro-material" action="/ci/ArtistasCon/excluir" method="post">
                <input type="hidden" id="cd_artista" name="cd_artista" value="<?= $artista[0]['cd_artista'];?>">
                  <p>
                        <input type="submit" id="botao_Enviar" name="cmdSend" value="excluir" onclick="return confirm('CONFIRMAR EXCLUSÃO DO ARTISTA?');" style="background-color:red;color:white"/>
                  </p>
                </form>
            
        </div>

        </div>
        <footer>
            &copy;Palco Caiçara  |  Desenvolvido por blablabla
        </footer>
        
    <script src="js/bootstrap.js"></script>  
    </body>
</html>