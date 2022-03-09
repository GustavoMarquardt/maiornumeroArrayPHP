<?php
//encontrar o maior numero do array
$array = array();
$i=0;
    while($i< 20){
        $array[] = rand(0,100);
        $i++;
    }
    print_r($array);
    $maior = $array[0];
    $i=0;
    //tentar usar mais o foreach que é bem quente
    foreach($array as $n) {
        $i = $i+1;
        if($n > $maior) {
            $maior = $n;
            $posicao = $i;
        }
    }
    echo "<br><br><br><br><br>Maior: ".$maior.'<br>Na posicao: '.$posicao;
?>