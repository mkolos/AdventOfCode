<?php
$text= file_get_contents("Level5_text.txt");
$szoveg = explode("\n", $text);

$threeVowels = "[a]{3}";
$sum=0;

echo count($szoveg)."<br>";
foreach($szoveg as $item){
    $szo = $item;
    $joe1 = preg_match("/(.*[aeiou]){3}/",$szo);
    $joe2 = preg_match("/(.)\\1/",$szo);
    $joe3 = !preg_match("/(ab|cd|pq|xy)/",$szo);
    if($joe1 and $joe2 and $joe3){
        $sum++;
    }

}
echo $sum."<br>";
?>

A feladat 2. része
----------------------------------------------------

<?php
$text= file_get_contents("Level5_text.txt");
$szoveg = explode("\n", $text);

$threeVowels = "[a]{3}";
$sum=0;

echo count($szoveg)."<br>";
foreach($szoveg as $item){
    $szo = $item;
    $joe1 = preg_match("/(..).*\\1/",$szo);
    $joe2 = preg_match("/(.).\\1/",$szo);
    if($joe1 and $joe2){
        $sum++;
    }

}
echo $sum."<br>";
?>
