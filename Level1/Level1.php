<?php
$floor = 0;
$text= file_get_contents("text.txt");
$array = str_split($text);
print_r($array);

foreach($array as $i){
    if($i=="("){
        $floor++;
    }
    else if($i==")"){
        $floor--;
    }
}

echo $floor;

?>

A feladat 2. része
-----------------------------------------
<?php
$floor = 0;
$text= file_get_contents("text.txt");
$array = str_split($text);
$pos=0;

foreach($array as $i){
    if($i=="("){
        $floor++;
        $pos++;
    }
    else if($i==")"){
        $floor--;
        $pos++;
    }
  if($floor == -1){
    break;
    }
}


echo $pos;
?>

