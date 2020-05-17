<?php 
$arr = array(1,2,3,4,5,6);
echo "<table border='6'>";
echo "<tr>";
echo "<th>Vector  =  </th>";
for ($i=0; $i <count($arr) ; $i++) { 	
   echo "<td colspan='2'>" . "<span>". $arr[$i] ."</span>". "</td>" . "   ";
} 
echo "</tr>";
echo "\n";
echo "<tr>";
echo "<th>El promedio es:   =  </th>";
echo "<td colspan='2'>" . "<span>". array_sum($arr)/count($arr)."</span>". "</td>"." ";
echo "</tr>";
echo "\n";
echo "<tr>";
echo "<th>El factorial es:   =  </th>";
   echo "<td colspan='2'>" . "<span>". array_product($arr)."</span>". "</td>" . "   ";
echo "</tr>";
echo "\n";
 ?>