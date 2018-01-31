<?php
$formsumbit = $_POST["sumbit"];
$eqution = $_POST["typeofequstion"];
$firstnumber = $_POST["numberone"];
$secoundnumber = $_POST["secoundnumber"];
if ($formsumbit!=""){
    if($eqution =="plus"){
        $awnswer = $firstnumber + $secoundnumber;
    }elseif ($eqution == "minus"){
        $awnswer = $firstnumber - $secoundnumber;
    }elseif ($eqution =="multiply"){
        $awnswer = $firstnumber * $secoundnumber;
    }elseif ($eqution =="divide"){
        $awnswer = $firstnumber / $secoundnumber;
    }
    die("No equation given!");
}
die("Your awnser is $awnswer:");
?>

