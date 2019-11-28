<?php
require 'config.php';
require 'class/paypalExpress.php';
if(!empty($_GET['paymentID']) && !empty($_GET['payerID']) && !empty($_GET['token']) && !empty($_GET['pid']) ){
    $paypalExpress = new paypalExpress();
    $paymentID = $_GET['paymentID'];
    $payerID = $_GET['payerID'];
    $token = $_GET['token'];
    $pid = $_GET['pid'];
    
    $paypalCheck=$paypalExpress->paypalCheck($paymentID, $pid, $payerID, $token);
    if($paypalCheck){
        header('Location:widget-default.php');
    }
}
else{
    header('Location:index.php');
}
?>