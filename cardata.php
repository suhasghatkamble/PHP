<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   $car=array("VOLVO","BMW","SANTRO","CIVIC");
   $cnm=$_GET["cname"];
   echo "you entered  ".$_GET["cname"]."<br>";
   echo "you entered  ".$_REQUEST["cname"]."<br>";
   $flag=1;
   foreach($car as $val){
    if($val==$cnm){
        $flag=0;
        echo "<h3>Car found</h3>";
        break;
    }
   }
   if($flag==1){
    echo "<br> car not found and added successfully <br> <br>";
    #add new car in the array
    array_push($car,$cnm)."<br>";
   }
   for ($i=0; $i <count($car); $i++){
    echo $car[$i]."<br>"; 
   }
   ?>
</body>
</html>