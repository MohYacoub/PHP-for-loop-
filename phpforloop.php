<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
    </style>
</head>
<body>

    
<?php 

//<!-- Question 1 -->

for($i=1; $i <= 10 ; $i++){
   
    if($i==10){
        echo $i ;
    }else{
        echo $i . "-";
    }
    
}

echo "<hr>";

//<!-- Question 2 -->

$sum = 0;
for($ii=0;$ii<=30;$ii++){
    $sum = $sum + $ii ;
}
echo "Total = " . $sum;


echo "<hr>";

//<!-- Question 3 -->

for($i=65;$i<=69;$i++){
    for($z=69;$z>$i;$z--){
        echo "A" . " ";
    }
    for($y=65;$y<=$i;$y++){
        echo chr($i) . " ";
    }
    echo "<br>";
}

echo "<hr>";

//<!-- Question 3b -->



for($i=1;$i<=5;$i++){
    for($z=5;$z>$i;$z--){
        echo 1 . " ";
    }
    for($y=1;$y<=$i;$y++){
        echo $i . " ";
    }
    echo "<br>";
}

echo "<hr>";

//<!-- Question 4 -->

for($i=1;$i<=5;$i++){
    for($z=1;$z<=5;$z++){
       if($z==$i){
           echo $z . " ";
       }
       else {
           echo "0 " ;
       }
    }
    echo "<br>";
}

echo "<hr>";

//<!-- Question 5 -->

function factorial($xx){
    $fact = 1;
    for($ii=$xx;$ii>=1;$ii--){
        $fact *= $ii ; 
    }
    return $fact;
    }

echo "Factorial of 5 = " . factorial(5);

echo "<hr>";

//<!-- Question 6 -->
function Fibonacci($inp){
    $num1 = 0; 
    $num2 = 1; 

    for($i=0;$i<=$inp;$i++) {  
        echo ' '.$num1;
        $num3 = $num2 + $num1; 
        $num1 = $num2; 
        $num2 = $num3; 
    }   
    
} 

echo Fibonacci(8);

echo "<hr>";

//<!-- Question 7 -->

$count = 0 ;
$str = "OrangcceAcademyc";
$split = str_split($str, 1);
for($tt=0;$tt<strlen($str);$tt++){
    if($split[$tt] == "c"){
        $count = $count + 1 ;
    }
}
echo "the num of C is " . $count;


echo "<hr>";

//<!-- Question 8 -->


echo "<table border = '1' border-collapse = 'collapse'>";

for($ii=1;$ii<=5;$ii++){
    echo "<tr>";
    for($td=1;$td<=6;$td++){
        $milty = $ii * $td ;
        echo "<td>$ii * $td = $milty </td>"; 
    }
    echo "</tr>";
}
echo "</table>";

?>


</body>
</html>
