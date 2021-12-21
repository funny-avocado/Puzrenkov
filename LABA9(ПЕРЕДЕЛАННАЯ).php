<form action="" method="post">
    <input type="text" name="item1" placeholder="Введите x">
    <input type="text" name="item2" placeholder="Введите n шагов">
    <input type="submit" name="buttom" value="Посчитать">
</form>

<?php
    if (isset($_POST['buttom'])) {
        $x = $_POST['item1']; 
        $n = $_POST['item2'];
        $p; 
        $c=0; 
        $s=0; 
        
        if($n<=0){ 
        echo 'Введено неккоректное число ходов'; 
        } 
        else{ 
            for($i = 1; $i <= $n; $i++){ 
                if($c % 2 != 0) $c--; // Чтобы с была снова чётной 
                if($c == 0) $c = 1; // Чтобы избежать infinity при дилении на 0 
                    $p = (($x**$c)/($c)); 
                    $s = $s + $p; 
                    $c = $c + 2; 
                } 
            $s = $s * (-1); 
            echo $s; 
        }
        }
?>