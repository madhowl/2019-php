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
require_once ("./inc/function.php");
$a=0;
$b=0;
if (isset($_REQUEST['btn1'])){
    $a = (int)($_REQUEST['a']);
    setcookie("a",$a);
    $b = (int)($_REQUEST['b']);
    setcookie("b",$b);
    $act = htmlspecialchars($_REQUEST['act']);

    calc($a, $b, $act);}
    else{
        showCalcForm();
        }

    function calc($a, $b, $act){
        $str='';
        switch ($act){
            case '+':
                $str= "$a + $b = ";
                $str.=$a + $b;
                break;
            case '-':
                $str= "$a - $b = ";
                $str.=$a-$b;
                break;
            case '*':
                $str= "$a * $b = ";
                $str.=$a*$b;
                break;
            case '/':
                $str= "$a / $b = ";
                $str.=$a/$b;
                break;
            default :$str=  "Чтото пошло не так )))";
        }
        showAlert($str);
        //echo '<p><a href="form.php">Вернутся к калькулятору</a></p>';
        goUri('form.php');
    }
    function showCalcForm(){
    $aa=0;
    $bb=0;
    if (isset($_COOKIE['a'])){
        $aa=$_COOKIE['a'];
    }
    if (isset($_COOKIE['b'])){
        $bb=$_COOKIE['b'];
    }
    echo '<form action="" method="post">
        <p>Введите первое число &nbsp;<input type="number" name="a" value="'.$aa.'"></p>
        <p>Введите второе число &nbsp;<input type="number" name="b" value="'.$bb.'"></p>
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
