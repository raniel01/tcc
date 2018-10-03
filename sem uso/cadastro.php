<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Cadastro</title>
    <style>
        body{
             background: url('../../imgs/fundocarrinho.jpg') no-repeat center center fixed;
        }
        .login{
            padding:100px;
        }
        .logo{
            width:100px;
            height:100px;

        }
        .transparente{
          background-color: rgba(255,255,255,0.4) ;
          border:3px solid rgba(255,255,255,0.6);
        }
        
        .config_btn{
        font-family: arial;
        font-size:14px;
        font-weight:500;
        text-transform: none;
        border-width:5px;
        border-color:black;
        border-style: outset;
        padding:10px;
        cursor: pointer;
        display:inline-block;
        text-decoration: none;
        background-color:#F2F2F2;
        color:black;
        }
        .a:hover {
        background-color: orangered;
        border-style: outset;
        border-color:white;
        border-width:2px;
        color:black;
        font-weight:bold;
        }
        .transition{
      transition-property: width;
      transition-duration: 3s;
      transition-timing-function: linear;
      transition-delay: 1s;
        }
       
    </style>
    
    <script type = "text/javascript">
    function formatar(mascara, documento){
      var i = documento.value.length;
      var saida = mascara.substring(0,1);
      var texto = mascara.substring(i)
  
      if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
      }
  
      }
    </script>
    
  </head>
  <body>
     
    <div class="row login">
        
    <div name = "espaço_vazio" class = "col-md-6"></div>

      <div class="col-md-10">
        <form action="index.html" method="post">
          <div class="jumbotron">
            
                    <img src="imgs/logocadastro.jpg" class="img-thumbnail logo" alt="logotipo">


                <div class="row">
                    <br>
                </div>
                
                
                <div class="form-group">
                    <label><h3>Cadastro</h3></label>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nome" name = "nome">
                </div>
                
                <div class="form-group form-inline">
                    <label class = ""><font color = "grey">Data de nascimento</font></label> &nbsp;
                    <input type="date" class = "form-control col-4">
                    
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Sobrenome" name = "sobrenome">
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email" name = "email">
                </div>
                
                 <div class="form-group">
                    <select name = "sexo" class = "form-control col-4">
                        <option value = "m">Masculino</option>
                        <option value = "f">Feminino</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="CPF" name = "cpf">
                </div>
                
                <div class="form-group form-inline">
                    <input type="text" class="form-control col-6" placeholder="Cidade" name = "cidade">
                    <label class = "col-1"></label>
                    <input type="text" class="form-control col-5" placeholder="Bairro" name = "bairro">
                </div>
                
                <div class = "form-group form-inline">
                    
                    <input type = "text" class ="form-control col-6" placeholder="Estado" name = "estado">
                    <label class = "col-1"></label>
                    <input type = "text" class= "form-control col-5" placeholder="CEP" name ="cep">
                    
                </div>
                
                <div class = "form-group">
                    
                    <input type = "text" class ="form-control" placeholder="Ponto de referência" name = "ponto_referencia">
                    
                </div>
                
                <div class="form-group form-inline">
                    <input type="text" class="form-control col-3 text-center" placeholder="DDD" name = "ddd">
                    <label class = "text-center col-2"></label>
                    <input type="text" class="form-control col-7 text-center" placeholder="Telefone" name = "tel">
                </div>
                
                <div class="form-group form-inline">
                    <input type="text" class="form-control col-8" placeholder="Número do cartão" name = "nm_cartao" maxlength="16">
                    <label class = "col-2"></label>
                    <input type = "text" class = "form-control col-2" placeholder="Código de seguranaça" name="cod_seg_cartao" maxlength="3">
                
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Senha" name = "senha">
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Confirmar senha" name = "conf_senha">
                </div>

                  <button type="button" class="btn btn-outline-dark float-right a config_btn transition" style="border:2px solid black" >Cadastrar</button>
                
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
