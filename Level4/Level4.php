<?php
$szam=0;
$kod="iwrupvqb";
$talalt=false;

do{
   $ossz=$kod.$szam;
   $result=md5($ossz);
   $elsoot = substr($result,0,5);
  if($elsoot==="00000"){
     $talalt=true;      
    }
  else {
    $szam++;
    }

} while($talalt==false);

echo $szam;
echo "<br>".$result;
?>

A feladat 2. része
----------------------------------------------------------------------------------
<?php
$szam=0;
$kod="iwrupvqb";
$talalt=false;

do{
   $ossz=$kod.$szam;
   $result=md5($ossz);
   $elsoot = substr($result,0,6);
  if($elsoot==="000000"){
     $talalt=true;      
    }
  else {
    $szam++;
    }

} while($talalt==false);

echo $szam;
echo "<br>".$result;
?>