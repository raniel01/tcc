<?php include('include_head_perfil_adm.php'); ?>

    <div class = "wrapper">
        
        <!-- Conteúdo da Página  -->
        <div id = "content">
            
            <style>
                
                .card-header{
                    font-weight: bold;
                    color: white;
                }
                
                .card-header:first-child {
                    border-radius: 0;
                }
                
                .dados span{
                    color: #6c757d;
                }
                
                .dados .row{
                    padding-top: 1rem;
                    padding-bottom: 1rem;
                }
                
                .dados{
                    display: none;
                }
                
            </style>
            
            <!-- Pedidos e dados da entrega -->
            <div class = "container">
                
                <div class = "row px-0">
                    
                    <div class = "col-12 px-0">
                        
                        <div class="breadcrumbs">
                            
                            <div class="col-sm-4">
                                
                                <div class="page-header float-left">
                                    
                                    <div class="page-title">
                                        
                                        <h1>Perfil</h1>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
                <div class = "row pt-4">
                    
                    <!-- Pedidos -->
                    <div class = "col-md-6 col-sm-12">
                            
                        <div class = "card bg-light">
                            
                            <!-- Topo do card -->
                            <div class = "card-header bg-dark">Pedidos</div>
                            <!-- Fim do topo do card -->
                            
                            <div style = "border: none; height: 24.5rem; overflow: scroll;">
                                
                                <style>
                                
                                .card{
                                    margin: 1rem 0;
                                    border-radius: 0;
                                }
                                
                                .img-card{
                                    width: 100%;
                                    text-align: center;
                                    padding: 1.5rem 0 0.2rem 0;
                                }
                                
                                .card-img-top{
                                    width:150px;
                                    height: 150px;
                                    object-fit: cover;
                                    border-radius: 50%;
                                }
                                
                                .info{
                                    position: absolute;
                                    right:15px;
                                    top:15px;
                                    font-size: 20px;
                                    color: #ff7800;
                                }
                                
                                .status{
                                    text-align: center;
                                    margin: 0.5rem 0;
                                }
                                
                                .title{
                                    font-size: 20px;
                                    font-weight: bold;
                                    display: block;
                                    margin-top: 0.5rem;
                                }
                                
                                .span-status{
                                    color: white;
                                    padding: 12px 16px;
                                    border-radius: 5px;
                                    font-weight: bold;
                                    margin-top: 0.5rem;
                                }
                            
                                </style>
                                
                                 <!-- Row -->
                                <div class = "row">
                                    
                                    <!-- Tamanho -->
                                    <div class = "col-8 mx-auto px-0">
                                        
                                        <!-- Card -->
                                        <div class = "card">
                                            
                                            <i class="fas fa-info-circle info" onclick = "hoverInfo()"></i>
                                            
                                            <div class = "img-card">
                                                
                                                <!-- Imagem do Crad -->
                                                <img class = "card-img-top" src = "images/fundo.png" alt="Card image cap">
                                                
                                            </div>
                                            
                                            <!-- Body Card -->
                                            <div class = "card-body">
                                                
                                                <!-- Título -->
                                                <h5 class = "text-center text-secondary">Nome de Usuário</h5>
                                                
                                                <!-- Email -->
                                                <h6 class = "text-center text-secondary">example@example.com</h6>
                                                
                                                <!-- Div Status -->
                                                <div class = "status">
                                                    
                                                    <label class = "title">Status</label>
                                                    
                                                    <span class = "span-status bg-success btn-block">Processando</span>
                                                    
                                                    <label class = "title">N° do pedido</label>
                                                    
                                                    <span class = "span-status bg-dark btn-block">99999999999</span>
                                                    
                                                </div>
                                                <!-- /Div status -->
                                                
                                            </div>
                                            <!-- /Body Card -->
                                        
                                        </div>
                                        <!-- /Card -->
                                        
                                    </div>
                                    <!-- /Tamanho -->
                                    
                                </div>
                                <!-- /Row -->
                                
                            </div>

                        </div>
                            
                    </div>
                        
                    <div class = "col-md-6 col-sm-12  mt-3 mt-md-0">
                            
                        <div class = "card bg-light">
                            
                            <div class = "card-header bg-dark">Dados da entrega</div>

                            <div class = "card-body" style = "height: 24.5rem;" id="g">
                                
                                <div class = "dados" id = "dados">
                                    
                                    <div class = "row">
                                        
                                        <div class = "col-6">
                                            
                                            <h6>Nome</h6>
                                            <span>Jhon</span>
                                            
                                        </div>
                                        
                                        <div class = "col-6">
                                            
                                            <h6>Sobrenome</h6>
                                            <span>Teodoresco</span>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                    <div class = "row">
                                        
                                        <div class = "col-12">
                                            
                                            <h6>E-mail</h6>
                                            <span>Jounin@example.com</span>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                    <div class = "row">
                                        
                                        <div class = "col-12">
                                            
                                            <h6>Endereço</h6>
                                            <span>Rua Joaquin Teixeira Neira, 890</span>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                    <div class = "row">
                                        
                                        <div class = "col-12">
                                            
                                            <h6>Produto</h6>
                                            <span>Celular MT LOKO</span>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                    
                        </div>  
                            
                    </div>
                        
                </div>
                
            </div>
            
        </div>
        
    </div>

<?php include('footer.php'); ?>