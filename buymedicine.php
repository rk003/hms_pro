<?php
require("methods.php");
if(!isset($_SESSION["hms_medicines"])){header("location: login.php");}
$next = isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"]:'';
$next = isset($_GET['next'])?$_GET['next']:'';
$login = false;
if(islogin()){
   global $login;
   $login = true;
}
if(!isset($_SESSION["hms_medicines"])) return;
$uid = (int) $_SESSION["hms_user_id"];
$strmedicines =json_encode($_SESSION["hms_medicines"]);
$time = (int) time();
$price = (int) $_SESSION["hms_medicines_price"];
$paymentid = getRandomHex(80);
require("conn.php");
foreach($_SESSION["hms_medicines"] as $med){
    $id = $med['dataid'];
    $q = "SELECT * FROM pharmacy WHERE medicineid = '$id'";
    $q = $con->query($q);
    $info = mysqli_fetch_array($q)[4];
    $unit = (int) $info;
    $unit = $unit - $med["quantity"];
    $q = "UPDATE pharmacy SET unit=$unit WHERE medicineid='$id'";
    $con->query($q);
}
$q = "INSERT INTO medicines VALUES('',$time,$uid,'$strmedicines',$price,'$paymentid')";
if($con->query($q)){
    echo '{"success":"true","paymentid":"'.$paymentid.'"}';
}else{
    echo '{"success":"true"}';
}
unset($_SESSION["hms_medicines"]);
unset($_SESSION["hms_medicines_price"]);
function getRandomHex($num_bytes=4) {
    return bin2hex(openssl_random_pseudo_bytes($num_bytes));
  }
?>
