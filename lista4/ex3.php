<?php
    $var = $_GET['estado'];
    $estado =  strtolower($var); //Coloca todas as letras da palavra em minúsculo pra comparação

    //Verificações do estado apresentado, para exibir sua respectiva capital

    if($estado =="acre")
        echo " A Capital de: ". $var . " é: ". "  Rio Branco";
    
    elseif($estado =="alagoas")
        echo " A Capital de: ". $var . " é: ". "  Maceió";
    
    elseif($estado =="amapa")
        echo " A Capital de: ". $var . " é: ". "  Macapá";
    
    elseif($estado =="amazonas")
        echo " A Capital de: ". $var . " é: ". "  Manaus";
    
    elseif($estado =="bahia")
        echo " A Capital de: ". $var . " é: ". "  Salvador";
    
    elseif($estado =="ceara")
        echo " A Capital de: ". $var . " é: ". "  Fortaleza";
    
    elseif($estado =="espirito santo")
        echo " A Capital de: ". $var . " é: ". "  Vitória";
    
    elseif($estado =="goias")
        echo " A Capital de: ". $var . " é: ". "  Goiania";
    
    elseif($estado =="maranhao")
        echo " A Capital de: ". $var . " é: ". "  Sao Luis";
    
    elseif($estado =="mato grosso")
        echo " A Capital de: ". $var . " é: ". "  cuiaba";
    
    elseif($estado =="mato grosso do sul")
        echo " A Capital de: ". $var . " é: ". " campo grande";
    
    elseif($estado =="minas gerais")
        echo " A Capital de: ". $var . " é: ". "  belo horizonte";
    
    elseif($estado =="para")
        echo " A Capital de: ". $var . " é: ". "  Belem";
    
    elseif($estado =="paraiba")
        echo " A Capital de: ". $var . " é: ". "  joao pessoa";
    
    elseif($estado =="parana")
        echo " A Capital de: ". $var . " é: ". "  Curitiba";
    
    elseif($estado =="pernambuco")
        echo " A Capital de: ". $var . " é: ". "  Recife";
    
    elseif($estado =="piaui")
        echo " A Capital de: ". $var . " é: ". "  Teresina";
    
    elseif($estado =="rio de janeiro")
        echo " A Capital de: ". $var . " é: ". "  rio de janeiro";
    
    elseif($estado =="rio grande do norte")
        echo " A Capital de: ". $var . " é: ". "  Natal";
    
    elseif($estado =="rio grande do sul")
        echo " A Capital de: ". $var . " é: ". "  porto alegre";
    
    elseif($estado =="rondonia")
        echo " A Capital de: ". $var . " é: ". "  Porto Velho";
    
    elseif($estado =="roraima")
        echo " A Capital de: ". $var . " é: ". "  boa vista";
    
    elseif($estado =="santa catarina")
        echo " A Capital de: ". $var . " é: ". "  Florianopolis";
    
    elseif($estado =="sao paulo")
        echo " A Capital de: ". $var . " é: ". "  São Paulo";
    
    elseif($estado =="sergipe")
        echo " A Capital de: ". $var . " é: ". "  aracaju";
    
    elseif($estado =="tocantins")
        echo " A Capital de: ". $var . " é: ". "  Palmas";
    
    elseif($estado =="distrito federal")
        echo " A Capital de: ". $var . " é: ". "  Brasilia";
    

?>