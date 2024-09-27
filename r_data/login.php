<?php
require_once('../connection.php');
$rs = "";
$uname = md5($_POST['uname']);
$pass = md5($_POST['pass']);

function validate($mysqli, $m){
    $m = htmlspecialchars($m);
    $m = trim($m);
    $m = mysqli_escape_string($mysqli, $m);
    return $m;
}

$uname = validate($mysqli, $uname);
$pass = validate($mysqli, $pass);
if (empty($uname) || empty($pass)) {
    $rs = "Please fill the details";
}
else{
    $huser = $uname;
    $hpass = $pass;
    $sql="select * from mlogin where uname='admin' AND pass='1234'";
    $res=mysqli_query($mysqli,$sql);
    $count=mysqli_num_rows($res);

    if($count==1)
    {   
        $row = mysqli_fetch_array($res);
        $iuid = md5($row['uname']);
        session_start();
        $_SESSION['loggg'] = $iuid;
        echo "<script>window.location.href='detail.php';</script>";

    }
    else
    {
        echo "Invalid Username Or Password"; 
    }
}
echo $rs;
?>