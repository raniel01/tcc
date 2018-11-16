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
                
            </style>
            
            <!-- Pedidos e dados da entrega -->
            <div class = "container">
                
                <div class = "row">
                    
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

                                <iframe id = "frames" src = "cards.php" style = "border: none; height: 24.5rem;"></iframe>

                                <!-- Cards dos pedidos - cards.html -->
                                
                                </iframe>
                                
                        </div>
                            
                    </div>
                        
                    <div class = "col-md-6 col-sm-12  mt-3 mt-md-0">
                            
                        <div class = "card bg-light">
                            
                            <div class = "card-header bg-dark">Dados da entrega</div>

                            <div class = "card-body" id = "dados" style = "height: 24.5rem;">
                                
                            </div>
                    
                        </div>  
                            
                    </div>
                        
                </div>
                
            </div>
            
        </div>
        
    </div>

<?php include('footer.php'); ?>