<?php
$mycounter = 1;
$mystring = "Hello PHP";
$myarray = array("One", "Two", "Three");
$associative_array=array('one'=>1,'tow'=>2,'three'=>"3",'4'=>"four");
$multidi_array=array($myarray,$associative_array); 

echo $myarray[1];
echo "<br>";
echo $mystring;
echo "<br>";
echo $mycounter."<br>";

for($i=0;$i<3;$i++) {
    echo "array[".$i."] = ". $myarray[$i]."<br>";
    $j=$i;
}
echo $j;
foreach($myarray as $item) {
    echo $item."<br>";
}

foreach($associative_array as $item=>$des) {
    echo $item." : ". $des."<br>";
}

foreach($multidi_array as $item) {
    foreach($item as $array) {

    echo $array."<br>";
    }
}
?>