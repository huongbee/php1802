<?php
$arr4 = array(
    'key1'=>2,
    'key2'=> array(
        7,
        8, 
        'Hello',
        'Xin chao'
    ),
    2 => 12
);
$new = $arr4['key2'];
$dem = count($new); //4
for($i=0; $i < $dem; $i++){
    echo $new[$i];
    echo "<br>";
}


?>