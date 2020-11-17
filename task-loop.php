<?php 

//--------first solution  --------

/* function loop($x){ */
    
 /*    $char = "A";
    $z = "";
    $y = "";

for ($d = 1 ; $d < 27 ; $d++){

    for($id = 0 ; $id < $d ; $id++)
    {
        $z .= $d ;        
    };

    for($ii = 0 ; $ii < $d  ; $ii++){
        $y .= $char ;
    };
    
    echo $z . $y ;
    echo "<hr>";
    ++$char ;
};
 */

function loop($x){
    
    $char = "A";
    $z = "";
    $y = "";
    for ($i = 0 ; $i < $x  ; $i++){
        $z = $z . $x;
        $y = $y . $char;
        ++$char ;
    }
    echo $z . $y ;
}

for ($d = 1 ; $d < 27 ; $d++){
    loop($d);
    echo "<hr>";
}
/* for ($d = 1 ; $d < 27 ; $d++){
    loop($d);
    echo "<hr>";
}
 */
//--------second solution  --------

/* 
<table border="3">
<tr>
	<td>ID</td>
	<td>Letter</td>
	<td>Pattern</td>
</tr>

$x = 'a';
for ($i=1; $i < 27; $i++) {
	echo "<tr>";
	echo "<td>$i</td>";
	echo "<td>$x</td>";
	echo "<td>".str_repeat($i, $i).str_repeat($x, $i)."</td>";
	echo "</tr>";
	$x++;	
}

</table>
 */

//--------star task --------


$star = "*";

for($ii = 0 ; $ii <5 ; $ii++){
    
    echo $star;
    echo "<br>" ;
    $star .= "*";
}
echo "<br>" ;

$star2 = "*****";

for($iii = 0 ; $iii < 5 ; $iii++){
        echo $star2;
        echo "<br>" ;
        $star2 = substr($star2, 0, -1);
    }

for ($outter = 0; $outter <= 9; $outter++) {
        for ($inner = 0; $inner <= $outter; $inner++) {
           echo "*";
        }
        echo "<br>";
     }

     "<br>";
     "<br>";


     for ($outter = 9; $outter >= 0; $outter--) {
        for ($inner = $outter; $inner >= 0; $inner--) {
           echo "*";
        }
        echo "<br>";
     }

    
?>