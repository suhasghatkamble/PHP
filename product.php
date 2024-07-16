<?php
session_start();
echo "button: ".$_REQUEST['btn']."<br>";
if($_REQUEST['btn']=="close"){
    session_unset();
    session_destroy();
    echo 'session destroyed';
}

else{
    $product=array("lays"=>40,"maggie"=>60,"parleg"=>50);
    $findproduct=$_GET['pname'];

    $flag=1;
    foreach($product as $key => $val){
        if($key==$findproduct){
            $flag=0;
            echo "<h3> Product Exist </h3>";
            echo "price is $val";
            break;
        }
    }

    if($flag==1){
        echo "Product not found";
    }
}
?>
<?php include "productform.php" ?>