<?php include_once('include_head_perfil_adm.php'); ?>

 <div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Perfil</h1>
            </div>
        </div>
    </div>
</div>

<style>
    
    .top{
        width: 100%;
        background-color: rgba(245, 245, 245, 0.8);
        
    }
    .top img{
        object-fit: cover;
        height: 170px;
        width: 170px;
        border-radius: 50%;
    }
    .font-p{
        font-size: 15px;
    }
    .border-gray{
        border: 1px solid rgba(214, 214, 214, 1);
    }
    
    .div-coisas{
        border: 1px solid rgba(220,220,220,1);
    }
    
    .min-height-perfil{
            min-height: 533px;
    }
    
    @media only screen and (max-width: 960px){
    
        .min-height-perfil{
            min-height: 0;
        }
    
    }
    
</style>

<div class = "container-fluid">

    <!-- Row Conteúdo -->
    <div class = "pt-3 row">
         <?php 
                  if(isset($_SESSION['id'])){
                     $a = $_SESSION['id'];
                  }
                  $usuarios = ListarUsuarioCerto($a);
                  while ($b = $usuarios->fetch_array()){
                  ?> 
        
        <!-- Tamanho -->
        <div class = "col-12 col-lg-4">
            
            <!-- Div Shadow -->
            <div class = "div-coisas bg-white min-height-perfil">
        
                <!-- Div Top -->
                <div class = "top bg-top text-center pb-3">
                    
                    <!-- Imagem de perfil -->
                    <img src = "<?php echo "../".$_SESSION['foto']; ?>" class = "mt-4 mb-2">
                    
                    <!-- Nome -->
                    <p class = "text-dark mb-1"><?php echo $_SESSION['nome']. '&nbsp;' .$b['NM_SOBRENOME']; ?></p>
                    
                    <!-- Endereço -->
                    <small><?php echo $b['NM_ENDERECO'];?></small>
                    
                </div>
                <!-- Div Top -->
                
                <!-- Line -->
                <div class = "line mt-0"></div>
                <!-- Line -->
                
                <!-- Div Middle -->
                <div class = "middle pl-3 pb-1">
                    
                    <!-- Indicador -->
                    <small class = "text-secondary">Email</small>
                    
                    <!-- Email -->
                    <p class = "font-p text-dark"><?php echo $b['DS_EMAIL'];?></p>
                    
                    <!-- Indicador -->
                    <small class = "text-secondary">Telefone</small>
                    
                    <!-- Email -->
                    <p class = "font-p text-dark"><?php echo $b['NR_CELULAR'];?></p>
                    
                    <!-- Indicador -->
                    <small class = "text-secondary">Endereço</small>
                    
                    <!-- Email -->
                    <p class = "font-p text-dark"><?php echo $b['NM_ENDERECO'];?></p>
                    
                </div>
                <!-- Div Middle -->
                
            </div>
            <!-- Div Shadow -->
        <?php
                  }
        ?>
        </div>
        <!-- Tamanho -->
        
        <!-- Tamanho -->
        <div class = "col-12 col-lg-8 my-2 my-lg-0">
            
            <!-- Div Shadow -->
            <div class = "div-coisas bg-white">
                
                <!-- Middle -->
                <div class = "w-100 pt-4 px-4">
                    
                    <!-- Form -->
                    <form>
                        
                        <!-- Form group -->
                        <div class = "form-group">
                            
                            <!-- Nome e Sobrenome -->
                            <div class = "row">
                                
                                <!-- Nome -->
                                <div class = "col-12 col-md-6">
                                    
                                    <!-- Indicador -->
                                    <label class = "mb-1">Nome</label>
                            
                                    <!-- Input -->
                                    <input type = "text" class = "form-control border-gray mb-3" name="nome" id="nome" >
                                    
                                </div>
                                <!-- Nome -->
                                
                                <!-- Sobrenome -->
                                <div class = "col-12 col-md-6">
                                    
                                    <!-- Indicador -->
                                    <label class = "mb-1">Sobrenome</label>
                            
                                    <!-- Input -->
                                    <input type = "text" class = "form-control border-gray mb-3" name="sobrenome" id="sobrenome">
                                    
                                </div>
                                <!-- Sobrenome -->
                                
                            </div>
                            <!-- Nome e Sobrenome -->
                            
                            <!-- Indicador -->
                            <label class = "mb-1">Email</label>
                            
                            <!-- Input -->
                            <input type = "email" class = "form-control border-gray mb-3" name="email" id="email">
                            
                            <!-- Indicador -->
                            <label class = "mb-1">Senha</label>
                            
                            <!-- Input -->
                            <input type = "password" class = "form-control border-gray mb-3" placeholder="Digite Sua Senha" name="senha" required>
                            
                            <!-- Indicador -->
                            <label class = "mb-1">Telefone</label>
                            
                            <!-- Input -->
                            <input type = "text" class = "form-control border-gray mb-3" name="tel" id="celular">
                            
                            <!-- Indicador -->
                            <label class = "mb-1">Endereço</label>
                            
                            <!-- Input -->
                            <input type = "text" class = "form-control border-gray mb-2" name="endereco" id="endereco">
                            
                            <!-- Div pra alinhar botão -->
                            <div class = "text-right pt-3 pb-4">
                            
                                <!-- Botão -->
                                <input type = "button" class = "btn btn-lg btn-dark right rounded atualizar" Value = "Ver Informações">
                                <!-- Botão -->
                                 <!-- Botão -->
                                <input type = "submit" class = "btn btn-lg btn-success right rounded" Value = "Atualizar">
                                <!-- Botão -->
                                
                            </div>
                            <!-- Div pra alinhar botão -->
                            
                            <!-- Div pra alinhar os cards -->
                            <div style = "height: 0.05rem;"></div>
                            <!-- Div para alinhar os cards -->
                            
                        </div>
                        <!-- Form group -->
                        
                    </form>
                    <!-- Form -->
                    
                </div>
                <!-- Middle -->
                
            </div>
            <!-- Div Shadow -->
            
        </div>
        <!-- Tamanho -->
        
    </div>
    <!-- Row Conteúdo -->

</div>

<?php include('footer.php'); ?>