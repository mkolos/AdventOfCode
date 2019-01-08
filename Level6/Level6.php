<?php
$text= file_get_contents("text.txt");
$array=  explode("\n", $text);
$carray=array();
$tomb2d= array();
$count=0;

for($i=0;$i<1000;$i++){
    for($j=0;$j<1000;$j++){
        $tomb2d[$i][$j]=0;
    }
}


foreach($array as $item){
    $on = substr_count($item, "turn on");
    $off = substr_count($item, "turn off");
    $toggle = substr_count($item, "toggle");
    $kod; // 0-off 1-on 2-toggle

    if($on==1){$kod=1;}
    if($off==1){$kod=0;}
    if($toggle==1){$kod=2;}

    switch($kod){
        case 0: 
            $item = substr_replace($item, '', 0, 9);
            break;
        case 1: 
            $item = substr_replace($item, '', 0, 8);
            break;
        case 2: 
            $item = substr_replace($item, '', 0, 7);
            break;
    }
    $tisztit = explode(" ",$item);
    $firstcoo= explode(",",$tisztit[0]);
    $seccoo= explode(",",$tisztit[2]);
    $ax=$firstcoo[0];
    $ay=$firstcoo[1];
    $bx=$seccoo[0];
    $by=$seccoo[1];
    $sor = array($kod,$ax,$ay,$bx,$by);
    array_push($carray,$sor);
    

}

foreach($carray as $item){
    if($item[0]==0){
        for($x=$item[1];$x<=$item[3];$x++){
            for($y=$item[2];$y<=$item[4];$y++){
                $tomb2d[$x][$y]=0;
            }
        }
    }
    if($item[0]==1){
        for($x=$item[1];$x<=$item[3];$x++){
            for($y=$item[2];$y<=$item[4];$y++){
                $tomb2d[$x][$y]=1;
            }
        }
    }
    if($item[0]==2){
        for($x=$item[1];$x<=$item[3];$x++){
            for($y=$item[2];$y<=$item[4];$y++){
                if($tomb2d[$x][$y]==0){
                    $tomb2d[$x][$y]=1;
                }
                else if($tomb2d[$x][$y]==1){
                    $tomb2d[$x][$y]=0;
                }
                
            }
        }
    }
}

for($i=0;$i<1000;$i++){
    for($j=0;$j<1000;$j++){
        if($tomb2d[$i][$j]==1){
            $count++;
        }
    }
}

echo "Ennyi izzó ég: ".$count."<br>";

//A feladat 2. része:
//---------------------------------------------------------

$text= file_get_contents("text.txt");
$array=  explode("\n", $text);
$carray=array();
$tomb2d= array();
$count=0;

for($i=0;$i<1000;$i++){
    for($j=0;$j<1000;$j++){
        $tomb2d[$i][$j]=0;
    }
}


foreach($array as $item){
    $on = substr_count($item, "turn on");
    $off = substr_count($item, "turn off");
    $toggle = substr_count($item, "toggle");
    $kod; // 0-off 1-on 2-toggle

    if($on==1){$kod=1;}
    if($off==1){$kod=0;}
    if($toggle==1){$kod=2;}

    switch($kod){
        case 0: 
            $item = substr_replace($item, '', 0, 9);
            break;
        case 1: 
            $item = substr_replace($item, '', 0, 8);
            break;
        case 2: 
            $item = substr_replace($item, '', 0, 7);
            break;
    }
    $tisztit = explode(" ",$item);
    $firstcoo= explode(",",$tisztit[0]);
    $seccoo= explode(",",$tisztit[2]);
    $ax=$firstcoo[0];
    $ay=$firstcoo[1];
    $bx=$seccoo[0];
    $by=$seccoo[1];
    $sor = array($kod,$ax,$ay,$bx,$by);
    array_push($carray,$sor);
    

}

foreach($carray as $item){
    if($item[0]==0){
        for($x=$item[1];$x<=$item[3];$x++){
            for($y=$item[2];$y<=$item[4];$y++){
                if($tomb2d[$x][$y]>0){
                    $tomb2d[$x][$y]=$tomb2d[$x][$y]-1;
                }
            }
        }
    }
    if($item[0]==1){
        for($x=$item[1];$x<=$item[3];$x++){
            for($y=$item[2];$y<=$item[4];$y++){
                $tomb2d[$x][$y]=$tomb2d[$x][$y]+1;
            }
        }
    }
    if($item[0]==2){
        for($x=$item[1];$x<=$item[3];$x++){
            for($y=$item[2];$y<=$item[4];$y++){
                $tomb2d[$x][$y]=$tomb2d[$x][$y]+2;               
            }
        }
    }
}

for($i=0;$i<1000;$i++){
    for($j=0;$j<1000;$j++){
            $count=$count+$tomb2d[$i][$j];
    }
}

echo "A fényesség ennyi: ".$count;
?>