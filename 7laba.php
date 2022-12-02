<?php

            if (isset($_POST['nums'])){
            $n1 = $_POST['number1'];
            $n2 = $_POST['number2'];
            
            for($w = 0; $w <= $n2; $w++)
            {
                
                $e = pow(-1,($n1+1))/(2*$n1+1) * pow($n2,2*$n1+1);
            }
            
            $r = M_PI/2 + $e;
            echo($r);  
            }
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

<form method="post" action="">
    <input name="number1" type="text">
    <input name="number2" type="text">
    <input type="submit" name="nums" value="Нажми на меня">
    
    </form>
</body>
</html>