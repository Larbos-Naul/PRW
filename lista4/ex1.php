<?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    $escolha = $_GET["opcao"];
        if($escolha=="soma"){
            echo $num1+$num2;
        }
        if($escolha=="subtracao"){
            echo $num1-$num2;
        }
        if($escolha=="divisao"){
            echo $num1/$num2;
        }
        if($escolha=="multiplicacao"){
                echo $num1*$num2;
        }
?>