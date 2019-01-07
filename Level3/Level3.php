<?php
$text= file_get_contents("text.txt");

$array = str_split($text);
$list = array("0:0");


$actx=0;
$acty=0;
$nx=0;
$ny=0;

foreach($array as $item){
switch($item){
      case "^":
         $ny=$acty+1;
         $acty=$ny;
  break;
      case "<":
         $nx=$actx-1;
         $actx=$nx;
  break;
      case "v":
         $ny=$acty-1;
         $acty=$ny;
  break;
      case ">":
         $nx=$actx+1;
         $actx=$nx;
  break;
    }
  
  $koord = $actx.":".$acty;
  array_push($list,$koord);

}

//print_r($list);
$result=array_unique($list);

print "</br>";

echo count($result); 
?>

A feladat 2. része:
-------------------------------------------
<?php
$text= file_get_contents("text.txt");

$array = str_split($text);
$santa = array();
$rsanta = array();
$list = array("0:0");
$rlist = array("0:0");

for($i=1;$i<=count($array);$i++){
  $lepes=$array[$i-1];
  if($i%2==0){      
      array_push($rsanta,$lepes);
    }
  else {
     array_push($santa,$lepes);
    }
}

$actx=0;
$acty=0;
$nx=0;
$ny=0;
$ractx=0;
$racty=0;
$rnx=0;
$rny=0;

foreach($santa as $item){
switch($item){
      case "^":
         $ny=$acty+1;
         $acty=$ny;
  break;
      case "<":
         $nx=$actx-1;
         $actx=$nx;
  break;
      case "v":
         $ny=$acty-1;
         $acty=$ny;
  break;
      case ">":
         $nx=$actx+1;
         $actx=$nx;
  break;
    }
  
  $koord = $actx.":".$acty;
  array_push($list,$koord);
}

foreach($rsanta as $item){
switch($item){
      case "^":
         $rny=$racty+1;
         $racty=$rny;
  break;
      case "<":
         $rnx=$ractx-1;
         $ractx=$rnx;
  break;
      case "v":
         $rny=$racty-1;
         $racty=$rny;
  break;
      case ">":
         $rnx=$ractx+1;
         $ractx=$rnx;
  break;
    }
  
  $koord = $ractx.":".$racty;
  array_push($rlist,$koord);
}

$merged = array_merge($list,$rlist);
$result=array_unique($merged);
echo count($result)."<br>";

?>
