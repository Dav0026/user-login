<?php
$remember=$_POST["remember"];

//if ($remember =='on'){
//    var_dump('remember my active');
//}else{
//
//    var_dump('remember dont active');
//}
var_dump($_POST['remember']);
if(isset($_POST['remember']) )
{
    var_dump(" remember on.");
}
else
{
    echo "remember off.";
}