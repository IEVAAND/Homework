<?php
    $cities3 = ['Tokijas'=> [13.6,1868,'Japonija'],
                'Vasingtonas'=> [0.6,1790,'JAV'],
                'Maskva'=>[11.5,1147,'Rusija']
               ];
    $cities3['Londonas'] = [8.6,43,'Anglija'];

    $metai = 1774;

if($metai>=$cities3['Vasingtonas'][1]){
    echo 'Vašingtonas yra' .$cities3['Vasingtonas'][2].' sostinė.';
    }elseif($metai=1774){
    echo $cities3['Vasingtonas'][2].' sostinė vis dar Filadelfijoje.';
    }else{
    echo 'Liko '.($cities3['Vasingtonas'][1]-$metai). ' metai(-ų) iki Vašingtono įkūrimo.';
    }

if($metai>=$cities3['Vasingtonas'][1]){
    echo 'Vašingtonas yra' .$cities3['Vasingtonas'][2].' sostinė.';
    }elseif($metai<1774){
    echo $cities3['Vasingtonas'][2].' sostinė vis dar Filadelfijoje.';
    }else{
    echo 'Liko '.($cities3['Vasingtonas'][1]-$metai). ' metai(-ų) iki Vašingtono įkūrimo.';
    }
?>
