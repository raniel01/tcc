<?php include('include_head_perfil_adm.php'); ?>

<style>
    
    .orange-row{
        background-color: orange;
    }
    
    .orange-row p {
        font-size: 42px;
        color: white;
        line-height: 42px;
    }
    
    .text-first-row{
        padding: 5rem 4rem;
    }
    
    .icon-first-row{
        padding: 2rem 4rem;
        font-size: 168px;
        color: white;
    }
    
    .icone-60{
        font-size: 60px;
    }
    
    .redes-sociais-nomes{
        font-size: 20px;
        font-weight: bold;
    }
    
    .title-redes-sociais{
        margin: 1.5rem 0 1rem 0;
    }
    
    .icone-90{
        font-size: 150px;
        color: white;
    }
    
    .bg-black{
        background-color: rgb(10,10,10);
    }
    
    .last-row{
        padding-top: 3rem;
        padding-bottom: 2rem;
    }
    
    @media only screen and (max-width: 992px){
        
        .icon-first-row{
            padding: 2rem 4rem;
            font-size: 100px;
            color: white;
        }
        
        .orange-row p {
            font-size: 35px;
            color: white;
            line-height: 42px;
        }
        
        .text-first-row{
            padding: 0.5rem 2rem 2rem 2rem;
        }
        
    }
    
</style>

<!-- Container Principal -->
<div class = "container-fluid">
    
    <!-- Row -->
    <div class = "row orange-row">
        
        <!-- Tamanho - Celular -->
        <div class = "col-12 icon-first-row text-center d-lg-none">
            
            <!-- Ícone -->
            <i class="fas fa-cogs"></i>
            
        </div>
        <!-- /Tamanho -->
        
        <!-- Tamanho - Celular -->
        <div class = "col-12 text-center text-first-row d-lg-none">
            
            <!-- Texto -->
            <p>Para mais <b>Cruds</b>,tabelas ou <b>mais</b> alterações informe a <b>administração</b> do site</p>
            
        </div>
        <!-- /Tamanho -->
        
        <!-- Tamanho -->
        <div class = "col-lg-6 text-center text-first-row d-none d-lg-block">
            
            <!-- Texto -->
            <p>Para mais <b>Cruds</b>,tabelas ou <b>mais</b> alterações informe a <b>administração</b> do site</p>
            
        </div>
        <!-- /Tamanho -->
        
        <!-- Tamanho -->
        <div class = "col-lg-6 icon-first-row text-center d-none d-lg-block">
            
            <!-- Ícone -->
            <i class="fas fa-cogs"></i>
            
        </div>
        <!-- /Tamanho -->
        
    </div>
    <!-- /Row -->
    
    <!-- Row -->
    <div class = "row pb-4">
        
        <!-- Tamanho -->
        <div class = "col-12 text-center">
            
            <!-- Título -->
            <h2 class = "title-redes-sociais">Nos procure nas redes sociais</h2>
            
        </div>
        <!-- /Tamanho -->
        
        <!-- Tamanho -->
        <div class = "col-lg-4 col-12 text-center pt-5">
            
            <!-- Ícone -->
            <i class="fab fa-facebook icone-60"></i>
            
            <!-- Nome -->
            <p class = "redes-sociais-nomes pt-2">MeuCarrinho</p>
            
        </div>
        <!-- /Tamanho -->
        
        <!-- Tamanho -->
        <div class = "col-lg-4 col-12 text-center pt-2 pt-5">
            
            <!-- Ícone -->
            <i class="fab fa-twitter icone-60"></i>
            
            <!-- Nome -->
            <p class = "redes-sociais-nomes pt-2">MeuCarrinho</p>
            
        </div>
        <!-- /Tamanho -->
        
        <!-- Tamanho -->
        <div class = "col-lg-4 col-12 text-center pt-2 pt-5">
            
            <!-- Ícone -->
            <i class="fab fa-instagram icone-60"></i>
            
            <!-- Nome -->
            <p class = "redes-sociais-nomes pt-2">MeuCarrinho</p>
            
        </div>
        <!-- /Tamanho -->
        
    </div>
    <!-- /Row -->
    
    <!-- Row -->
    <div class = "row bg-black last-row text-center">
        
        <div class = "col-6">
            
            <i class="fas fa-bug icone-90"></i>
            
        </div>
        
        <div class = "col-6">
            
            <i class="fas fa-code icone-90"></i>
            
        </div>
        
        <div class = "col-12 pt-5">
            
            <h3 class = "text-white">Relato de bugs e mau funcionamento, nos contate.</h3>
            
        </div>
        
    </div>
    <!-- /Row -->
    
</div>

<?php include('footer.php'); ?>