<?php
$arr4 = array(
    'key1'=>2,
    'key2'=> array(
        'key_1' =>  7,
                    8, 
        'key_3' =>  'Hello',
            4   =>  'Xin chao',
                   'Xin chao'
    ),
    2 => 12
);
$new = $arr4['key2'];
// print_r($new);
foreach($new as $khoa=>$giatri){
    echo $khoa. ' : '.$giatri;
    echo "<br>";
}
/**
 * v1 = khoa : 'key_1',  giatri: 7 
 * v2 = khoa : 0,  giatri: 8
 * v3 
 * ... 
 * v5 = khoa : 5,  giatri: Xin chao
 */

// print_r($arr4);



$arr = array('Nguyen', 'Van', 'Ngoc');
foreach($arr as $value){
    echo $value;
    echo "<br>";
}
