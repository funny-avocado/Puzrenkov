<?php
    $massive = [];

    for($i = 0; $i < 10; $i++){
        $massive[$i] = rand(-100,100);
    }

    echo print_r($massive), "<br>";

    $countOtr = 0;

    for($i = 0; $i < count($massive); $i++){
        if($massive[$i] < 0) $countOtr++;
    }

    echo "В массиве $countOtr отрицательных чисел <br>";

    $indexMin = 0;
    $numbMin = $massive[0]; 

    for($i = 0; $i < count($massive); $i++){ 
        $n = $massive[$i]; 
        if($n < 0) $n *= -1;
            if($numbMin > $n) {
                $numbMin = $n;
                $indexMin = $i;
            }
    }
    
    $indexMin++;
    $sum = 0;

    for($i = $indexMin; $i < count($massive); $i++){ 
        $n = $massive[$i];
        if($n < 0) $n *= -1;

        $sum += $n;
    }

    echo "Сумма модулей чисел после минимального числа = $sum <br>";

    for($i = 0; $i < count($massive); $i++){
        $massive[$i] *= $massive[$i];
    }

    echo "Все возведённые в квадрат элементы массива: ", print_r($massive), "<br>";

    $t = 0;

    for($i = 0; $i < count($massive); $i++){
        for($z = 0; $z < count($massive) - 1; $z++){
            if($massive[$z] > $massive[$z+1]){
              $t = $massive[$z];
              $massive[$z] = $massive[$z+1];
              $massive[$z+1] = $t;  
            }
        }
    }

    echo "Все отсортированные элементы: ", print_r($massive);
    
?>