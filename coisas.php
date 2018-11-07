<?php include('head_perfil.php') ?>

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
    .sobras{
        height: 2px;
    }
    
</style>

<!-- Row Título -->
<div class = "row">
    
    <!-- Tamanho -->
    <div class = "col-12">
        
        <!-- Título -->
        <label class = "h3 text-secondary pb-2">Perfil</label>
        
    </div>
    <!-- Tamanho -->
    
</div>
<!-- Row Título -->

<!-- Row Conteúdo -->
<div class = "row">
    
    <!-- Tamanho -->
    <div class = "col-4">
        
        <!-- Div Shadow -->
        <div class = "shadow">
    
            <!-- Div Top -->
            <div class = "top bg-top text-center pb-3">
                
                <!-- Imagem de perfil -->
                <img src = "imgs/fundo.png" class = "mt-4 mb-2">
                
                <!-- Nome -->
                <p class = "text-dark mb-1">Gilberto Borges</p>
                
                <!-- Sei lá -->
                <small>Rua Maria das Dores, 356</small>
                
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
                <p class = "font-p text-dark">exemplo@email.com</p>
                
                <!-- Indicador -->
                <small class = "text-secondary">Telefone</small>
                
                <!-- Email -->
                <p class = "font-p text-dark">(13) 99675-9098</p>
                
                <!-- Indicador -->
                <small class = "text-secondary">Endereço</small>
                
                <!-- Email -->
                <p class = "font-p text-dark">Rua Maria das Dores, 356</p>
                
            </div>
            <!-- Div Middle -->
            
        </div>
        <!-- Div Shadow -->
    
    </div>
    <!-- Tamanho -->
    
    <!-- Tamanho -->
    <div class = "col-8">
        
        <!-- Div Shadow -->
        <div class = "shadow">
            
            <!-- Middle -->
            <div class = "w-100 pt-4 px-4">
                
                <!-- Form -->
                <form>
                    
                    <!-- Form group -->
                    <div class = "form-group">
                        
                        <!-- Nome e Sobrenome -->
                        <div class = "row">
                            
                            <!-- Nome -->
                            <div class = "col-6">
                                
                                <!-- Indicador -->
                                <label class = "mb-1">Nome</label>
                        
                                <!-- Input -->
                                <input type = "text" class = "form-control border-gray mb-3" placeholder = "Gilberto">
                                
                            </div>
                            <!-- Nome -->
                            
                            <!-- Sobrenome -->
                            <div class = "col-6">
                                
                                <!-- Indicador -->
                                <label class = "mb-1">Sobrenome</label>
                        
                                <!-- Input -->
                                <input type = "text" class = "form-control border-gray mb-3" placeholder = "Borges">
                                
                            </div>
                            <!-- Sobrenome -->
                            
                        </div>
                        <!-- Nome e Sobrenome -->
                        
                        <!-- Indicador -->
                        <label class = "mb-1">Email</label>
                        
                        <!-- Input -->
                        <input type = "email" class = "form-control border-gray mb-3" placeholder = "exemplo@email.com">
                        
                        <!-- Indicador -->
                        <label class = "mb-1">Senha</label>
                        
                        <!-- Input -->
                        <input type = "password" class = "form-control border-gray mb-3" placeholder = "Senha">
                        
                        <!-- Indicador -->
                        <label class = "mb-1">Telefone</label>
                        
                        <!-- Input -->
                        <input type = "text" class = "form-control border-gray mb-3" placeholder = "(13) 99675 9098">
                        
                        <!-- Indicador -->
                        <label class = "mb-1">Endereço</label>
                        
                        <!-- Input -->
                        <input type = "text" class = "form-control border-gray mb-2" placeholder = "Rua Maria das Dores, 356">
                        
                        <!-- Div pra alinhar botão -->
                        <div class = "text-right pt-3 pb-4">
                        
                            <!-- Botão -->
                            <input type = "button" class = "btn btn-lg btn-success right" Value = "Atualizar">
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