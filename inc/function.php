<?php
function goUri($uri){
    echo '<script language="JavaScript">
        document.location.href = \''.$uri.'\'</script>';
}
function showAlert($text){
    echo '<script language="JavaScript">
    alert( \''.$text.'\' );
</script>';
}
function calc($a, $b, $act){
    $str="";
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
    return $str;
}