<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php
if (isset($_REQUEST['btn1'])){
    $a = (int)($_REQUEST['a']);
    $b = (int)($_REQUEST['b']);
    $act = htmlspecialchars($_REQUEST['act']);

    calc($a, $b, $act);}
    else{
    showCalcForm();
        }

    function calc($a, $b, $act){
        switch ($act){
            case '+':
                echo "$a + $b = ";
                echo $a + $b;
                break;
            case '-':
                echo "$a - $b = ";
                echo $a-$b;
                break;
            case '*':
                echo "$a * $b = ";
                echo $a*$b;
                break;
            case '/':
                echo "$a / $b = ";
                echo $a/$b;
                break;
            default :echo "Чтото пошло не так )))";
        }
    }
    function showCalcForm(){
    echo '<form action="" method="post">
        <p>Введите первое число &nbsp;<input type="number" name="a"></p>
        <p>Введите второе число &nbsp;<input type="number" name="b"></p>
        <p>выберите действие : &nbsp;
            <select name="act" id="">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </p>
        <p><input type="submit" name="btn1" value="ok"></p>
    </form>';
    }
?>


</body>
</html>
