<?php

    //altura e peso da pessoa adquiridos pelo formulário html
    $altura = $_GET['altura'];
    $peso = $_GET['peso'];

    //cáluclo do imc armazenado em sua respectiva ariável
    $imc = $peso / ($altura*$altura);
    
    //Exibição da classificação do imc calculado

    if($imc < 17)
        echo 'Muito abaixo do peso';

    elseif($imc >= 17 and $imc <= 18.49)
        echo 'Abaixo do peso';

    elseif($imc >= 18.5 and $imc <= 24.99)
        echo 'Peso normal';

    elseif($imc >= 25 and $imc <= 29.99)
        echo 'Acima do peso';

    elseif($imc >= 30 and $imc <= 34.99)
        echo 'Obesidade I';

    elseif($imc >= 35 and $imc <= 39.99)
        echo 'Obesidade II (Severa)';

    elseif($imc > 40)
        echo 'Obesidade III (Mórbida)';
?>