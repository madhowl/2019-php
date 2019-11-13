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

    $message  = calc($a, $b, $act);
    showAlert($message);
    goUri('form.php');
}
    else{
        showCalcForm();
        }
?>


</body>
</html>
