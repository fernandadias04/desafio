<?php 

    //estima-se que cada pessoa custa R$0.03 e 100 pessoas custam R$3.30;
    //estima-se que 12% das pessoas clicam nos anuncios;
    //estima-se que 15% das pessoas compartilham em suas redes sociais;
   
    $valorAnuncio = 120; //valor do anuncio
    $visualizacao = 0; //pessoas que viram o anuncio
    $visualizacaoGerada=0;//vizualizações geradas apartir de um compartilhamento
    $compartilhamentos = 0; //compartilhamentos que o anuncio teve
    $compartilhamentosGerado = 0; //compartilhamentos que o anuncio teve apartir de um compartilhamento
    $cliques = 0; //cliques que o anuncio teve 
    $cliquesGerado = 0; //cliques que o anuncio teve apartir de um compartilhamento

    function Visualizacao($visualizacao, $valorAnuncio){//visualizações geradas com base no valor investido
        $visualizacao = $valorAnuncio/0.03;

        return $visualizacao;
    }

    function Cliques($cliques, $visualizacao){//calculo dos cliques primarios
        $cliques = $visualizacao * (12 / 100); 

        return $cliques;
    }

    function Compartilhamento($compartilhamentos, $cliques){//calculo dos compartilhamentos primarios
        $compartilhamentos = $cliques * (15/100); 

        return $compartilhamentos;
    }

    function CliquesGerados($cliquesGerados, $visualizacaoGerada){//calculo dos cliques gerados apartir de um compartilhamento
        $cliquesGerados = $visualizacaoGerados * (12 / 100); 
        
        return  $cliquesGerados;
    }

    function CompartilhamentoGerados($compartilhamentosGerado, $cliquesGerado){//calculo dos compartilhamentos apartir de compartilhamento primario
        $compartilhamentosGerado = $cliquesGerado * (15/100); 

        return $compartilhamentosGerados;
    }

    function VisualizacaoGerada ($compartilhamentos, $visualizacaoGerada){//calculo das vizualizações geradas apartir de um compartilhamento
   
        if($compartilhamentos>=1){ 
            for ($i=0; $i < $compartilhamentos; $i++){
    
                $visualizacaoGerada+=40;
    
            }
        }

        return $visualizacaoGerada;

    }

        function Une(){
        
          CliquesGerados($cliquesGerados, $visualizacaoGerada);
          CompartilhamentoGerados($compartilhamentosGerado, $cliquesGerado);
          VisualizacaoGerada ($compartilhamentos, $visualizacaoGerada);     
        }

    
    //chamada das funções primarias
    
    Visualizacao($visualizacao, $valorAnuncio);
    Cliques($cliques, $visualizacao);
    Compartilhamento($compartilhamentos, $cliques);

    $CompartilhamentoGerados = $Compartilhamento; 
    $CliquesGerados = $cliques;

    //laço que executa as funções secundarias
    for ($i=0; $i<4; $i++){
        Une();
        
    }


    


    






    

