<?php
$string = file_get_contents("text.txt");

$array = explode("\n",$string);
$array2= array();
$i=0;
$sum=0;

foreach($array as $item){
  $exp=explode("x",$item);
  array_push($array2,$exp);
  $i++;
}

foreach($array2 as $item){
  
  $oldal1=$item[0]*$item[1];
  $oldal2=$item[0]*$item[2];
  $oldal3=$item[1]*$item[2];
  $min=min($oldal1,$oldal2,$oldal3);
  $sum = $sum + 2*$oldal1+2*$oldal2+2*$oldal3+$min;
}
 
echo $sum;
?>

Feladat 2. része
-------------------------------------------------------------
<?php
$string = file_get_contents("text.txt");

$array = explode("\n",$string);
$array2= array();
$i=0;
$sum=0;
$szalag=0;

foreach($array as $item){
  $exp=explode("x",$item);
  sort($exp, SORT_NUMERIC);
  array_push($array2,$exp);
  $i++;
}

foreach($array2 as $item){
  $a=$item[0];
  $b=$item[1];
  $c=$item[2];
  $oldal1=$item[0]*$item[1];
  $oldal2=$item[0]*$item[2];
  $oldal3=$item[1]*$item[2];
  $min=min($oldal1,$oldal2,$oldal3);
  $sum = $sum + 2*$oldal1+2*$oldal2+2*$oldal3+$min;
  $szalag = ($szalag + $a + $a + $b + $b) + ($a * $b * $c);
}

 
echo $sum;
echo "<br>";
echo $szalag;

?>