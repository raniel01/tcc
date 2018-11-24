<meta charset="utf-8">
<?php
    include('pagina.php');
        echo "<br>";
        
            
                //lendo o xml
                $xml= simplexml_load_file('produto_provisorio.xml');
                $a= $_GET['cat'];  
                //estilizando essas informaçoes

                echo '<div class="col-md-9">';
                    echo '<div class="row">';
                        echo '<div class="card-deck">';
                            
                                    //capturando informações com xml
                                    foreach ($xml -> produto as $produtos){
                                        //pegando por tipo de produto
                                        if ($produtos -> tipo == $a ){
                                            echo '<div class="card col-md-3">';
                                            echo '<br>';
                                            echo '<img class="card-img-top" src="'.$produtos -> imagem.'" style:"width:10%;">';
                                            echo '<div class="card-body">';
                                            echo '<h5 class="card-title">'.$produtos -> titulo.'</h5>';

                                            echo '<p class="card-text">'.$produtos -> preco.'</p>';
                                            echo '<br></div></div>';
                                        }
                                    }
                echo '</div></div></div></div></div>';
            echo '</body>';
        include('footer.php');
?>
