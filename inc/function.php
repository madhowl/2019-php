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