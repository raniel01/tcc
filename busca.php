<!-- AVISO! Algumas tags estão com o style modificado diretamente por este documento devido aos bugs do Cloud 9 em linkar o style.css (João sabe do que eu estou falando) -->

<!-- Navbar -->
<?php 

include('header_navbar.php');

?>

    <!-- Compensando o espaço vazio deixado pela Navbar -->
    <div class = "vazio" style = "height: 4.2rem;"></div>
    <!-- Compensando o espaço vazio deixado pela Navbar -->

<!-- Navbar -->

<!-- Conteúdo principal da página -->
<div class = "container-fluid">
    
    <!-- Row principal da página -->
    <div class = "row">
        
        <!-- Formulário de busca -->
        <div class = "col-md-3 pt-3">
            
            <!-- div para espaçamento - NÃO MEXER -->
            <div class = "p-1">
        
                <!-- Card de busca(usado para organizar dentro de um bloco) -->
                <div class = "card">
                    
                    <!-- conteúdo do formulário de busca -->
                    <div class = "card-body">
                    
                        <!-- Row Título -->
                        <div class = "row">
                            
                            <!-- Tamanho -->
                            <div class = "col-md-12">
                            
                                <!-- Título -->
                                <h3 class = "card-title text-center">Buscar Avançada</h3>
                                
                            </div>
                            <!-- Tamanho -->
                            
                        </div>
                        <!-- Row Título -->
                        
                        <!-- Row Título -->
                        <div class = "row">
                                
                            <!-- Tamanho -->
                            <div class = "col-md-12">
                            
                                <!-- Subtítulo -->
                                <h5 class = "text-center">Categoria</h5>
                                
                            </div>
                            <!-- tamanho -->
                                
                        </div>
                        <!-- Row Título -->
                        
                        <!-- Row Buscador -->
                        <div class = "row">
                                
                            <!-- Tamanho -->
                            <div class = "col-md-12">
                                
                                <!-- Buscador -->
                                <form class = "form-inline pt-2">
                		          	
                		          	<!-- Conteúdo Form -->
                        			<div class = "input-group mx-auto">
                        				
                        				<!-- Campo de pesquisa -->
                          			    <input type = "text" class = "form-control" placeholder = "Pesquisar">
                          			  
                                        <!-- Botão -->
                          				<div class = "input-group-append">
                          				
                            			  <button class = "btn btn-secondary" type = "button" id = "button-addon2">Busca</button>
                            			  
                          				</div>
                          				<!-- Botão -->
                          				
                        			</div>
                        			<!-- Conteúdo Form -->
                        			
                                </form>
                                <!-- Buscador -->
                                
                            </div>
            	            
                        </div>
                        <!-- Row Buscador -->
                        
                        <!-- Row Checkbox -->
                        <div class = "row">
                            
                            <!-- Tamanho -->
                            <div class = "col-md-12 pl-5">
                                
                                <!-- Checkbox - Alimentos Básicos -->
                                <div class = "form-group form-check">
                                    
                                    <!-- Checkbox -->
                                    <input type = "checkbox" class = "form-check-input" id = "#">
                                    
                                    <!-- Nome -->
                                    <label class = "form-check-label" for = "Alimentos Básicos">Alimentos Básicos</label>
                                    
                                </div>
                                <!-- Checkbox - Alimentos Básicos -->
                                
                                <!-- Checkbox - Carnes, aves e peixes -->
                                <div class = "form-group form-check">
                                    
                                    <!-- Checkbox -->
                                    <input type = "checkbox" class = "form-check-input" id = "#">
                                    
                                    <!-- Nome -->
                                    <label class = "form-check-label" for = "Carnes, aves e peixes">Carnes, aves e peixes</label>
                                    
                                </div>
                                <!-- Checkbox - Carnes, aves e peixes -->
                                
                            </div>
                            <!--Tamanho -->
                            
                        </div>
                        <!-- Row Checkbox -->
            	            
                    </div>
                    <!-- conteúdo do formulário de busca -->
                        
                </div>
                <!-- Card de busca -->
                
            </div>
            <!-- div para espaçamento - não mexer -->
            
        </div>
        <!-- Formulário de busca -->
        
        <div class = "col-md-9 bg-secondary pt-5">

            
            
        </div>
        
    </div>
    <!-- Row principal da página -->
    
</div>
<!-- Conteúdo principal da página -->