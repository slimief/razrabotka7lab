<?php

            if (isset($_POST['nums'])) {
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            
            for(var w = 0; w <= t; w++)
            {
                var e = Math.pow(-1,(w+1))/(2*q+1) * Math.pow(q,(2*t+1));
            }
            var r = Math.PI/2 + e;
            result.innerHTML = r;
            
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
    <input id="number" type="text">
    <input id="number1" type="text">
    <input type="button" name="nums" value="Нажми на меня" onclick="lab()">
    <p id="result"></p>
    </form>
</body>
</html>