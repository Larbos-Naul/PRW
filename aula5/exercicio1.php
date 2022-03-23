<?php

    $n1 = 900;
    $n2 = 80;
    $n3 = 1;

    if ($n1 > $n2 and $n1 > $n3) //verifica se é o maior de todos
        if($n2 > $n3)
            echo 'A ordem decrescente correta é: ' .$n1 .', ' .$n2 .', ' .$n3;
        else
            echo 'A ordem decrescente correta é: ' .$n1 .', ' .$n3 .', ' .$n2;

    elseif($n2 > $n1 and $n2 > $n3) //verifica se é o maior de todos
        if($n1 > $n3)
            echo 'A ordem decrescente correta é: ' .$n2 .', ' .$n1 .', ' .$n3;
        else
            echo 'A ordem decrescente correta é: ' .$n2 .', ' .$n3 .', ' .$n1;
            
    elseif($n3 > $n1 and $n3 > $n2) //verifica se é o maior de todos
        if($n1 > $n2)
            echo 'A ordem decrescente correta é: ' .$n3 .', ' .$n1 .', ' .$n2;
        else
            echo 'A ordem decrescente correta é: ' .$n3 .', ' .$n2 .', ' .$n1;

?>