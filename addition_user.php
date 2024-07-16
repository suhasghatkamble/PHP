<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function showtable($num){

        for ($i=1; $i<=10;$i++){
            echo "$num * $i \n"." = ".($num*$i)."<br>";
        }
                
    }

    function factorial($num){
        $fact=1;
        for ($i=1; $i<=$num; $i++){
            $fact=$fact*$i;
        }
        return $fact;
    }

    $a=$_GET['num1'];
    $b=$_GET['num2'];
    $btn=$_GET['btn'];

    // if($btn == "add"){
    //     echo "Addition : ".($a+$b);
    // }else{
    //     if($btn == "sub"){
    //         echo "Substraction : ".($a-$b);
    //     }
    //     elseif($btn == "mul"){
    //         echo "Multiplication : ".($a*$b);
    //     }
    //     else{
    //         echo "Division : ".($a/$b);
    //     }
    // }


    switch($btn){
        case "add":
            echo "Addition : ".($a+$b);
            break;

    case "sub":
            echo "Substraction : ".($a-$b);
            break;
            
    case "mul":
            echo "Multiplication : ".($a*$b);
            break;

    case "div":
            echo "Division  : ".($a/$b);
            break;

    case "table":
        showtable($a);
        showtable($b);
        break;
  
    case "fact":
        $f=factorial($a);
        echo "Factorial : ".$f;
        break;
    }
    ?>
</body>
</html>