<?php
session_start();
if($_REQUEST['btn']=="finish"){
    session_unset();
    session_destroy();
    echo 'session destroyed';
}
else{
    if(isset($_SESSION['cnt'])){
        $_SESSION['cnt']+=1;
}else{
    $_SESSION['cnt']=1;
}
$c=$_SESSION['cnt'];
echo "you click $c times";
?>
<?php include "firstcounter.php" ?>
<?php } ?>