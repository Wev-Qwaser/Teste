<?php

$dias=date('w');

switch($dias){
    case 0:
        echo 'Hoje é domingo';
            break;

    case 1:
        echo 'Hoje é segunda feira';
          break;
    
    case 2:
        echo 'Hoje é terça-feira';
            break;

    case 3:
        echo 'Hoje é quarta-feira';
            break;

    case 4:
        echo 'Hoje é quinta-feira';
            break;

    case 5:
        echo 'Hoje é sexta-feira';
            break;

    case 6:
        echo 'Hoje é sábado';
}





?>