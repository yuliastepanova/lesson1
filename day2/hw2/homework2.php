<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php  
 1.    
 $array = array("i love php", "nice event", "green eyes");
 function showP ($arr) {
    foreach ($arr as $string) {
        echo '<p>'.$string.'</p>';
        $i++;
        }
        return $arr;
     }
     showP($array);
  
2.   
function showAll($arr, $operator){
    $res = $arr[0];
    for ($value = 1; $value < count($arr); $value++) {    
    switch ($operator) {
    case "+":
        $res += $arr[$value];
        break;
    case "-":
        $res -= $arr[$value];
        break;
    case "*":
        $res *= $arr[$value];
        break;
    case "/":
        $res /= $arr[$value];
        break;

    }
    }
    return $res;
}
     
echo showAll([2,4,6], "*");
  
     

3.
function tryHard (){
    $arr = array_slice(func_get_args(),1); 
    $operator = func_get_arg(0);
    $res = $arr[0];
    for ($value = 1; $value < count($arr); $value++) {    
    switch ($operator) {
    case "+":
        $res += $arr[$value];
        break;
    case "-":
        $res -= $arr[$value];
        break;
    case "*":
        $res *= $arr[$value];
        break;
    case "/":
        $res /= $arr[$value];
        break;

    }
    }
    return $res;
    }
echo tryHard("*", 5, 7);

4.
    function tabl($rows, $cols){
    	echo "<table>";
    	for($row = 1; $row <= $rows; $row++) {
    		echo "<tr>";
        for($col = 1; $col <= $cols; $col++) {
            echo "<td>" . $col * $row . "</td>";
    }
    		echo "</tr>";
    	}
    	    echo "</table>";
    }
tabl(4,3);

 
5.
function sort_arr ($arr) {
    sort ($arr);
    foreach ($arr as $key => $val) {
        echo "arr[" . $key . "] = " . $val . "\n";
    }
}
echo sort_arr ([1,22,5,66,3,57]);

6.
	function showN($arg1, $arg2) {
	    if ($arg1 <= $arg2) {
	        if ($arg1 % 2 != 0) {
	            echo $arg1 . ' ';
	            showN($arg1 + 2, $arg2);
	        } else {
	            showN($arg1 + 1, $arg2);
	        }
	    }
	}
echo showN(10,35);

7.
     function palindrom ($str) {
         $strrev=strrev($str);
           if ($str==$strrev) {
               echo "TRUE";
           }
           else {
               echo "FALSE";
           }
     }
palindrom("absder");

     
  ?>         
 </body>
</html>
