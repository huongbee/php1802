<?php
// function sum(int $a, float $b){
//     return $a+$b;
// }

// $s = sum(4, 3);
// echo $s;

// function sayHello(string $name="user"){
//     return "Hello, $name";
// }
// $name = 'Teo';
// echo sayHello($name);

// echo number_format(40000);
/**
 * cho min = 10 , max = 30
 * in ra man hinh cac so chia het cho 2 
 * in ra man hinh cac so khong chia het cho 2 
 * in ra man hinh cac so chia het cho 3 dư 1 
 */

function inSo($soChia, $soDu){
    $min = 10;
    $max = 30;
    $s1 = '';
    for($i=$min; $i<=$max; $i++){
        if($i%$soChia==$soDu) $s1 .= $i.' ';
    }
    return $s1;
}
// echo inSo(2,0);  // cac so chia het cho 2
inSo(2,1);  // cac so ko chia het cho 2
inSo(3,1);  // cac so chia het cho 3 dư 1 
inSo(3,2);  // cac so chia het cho 3 dư 2

// n = 50
// In ra man hinh day cac so nguyen to tu 1->n
// In ra man hinh day cac so chinh phuong tu 1->n
// 2,3,5,7,11,...
function checkSNT($n){
    for($i=2; $i <= sqrt($n); $i++){
        if($n%$i==0) return false;
    }
    return true;
}
function checkSCP($n){
    if((int)sqrt($n) == sqrt($n)) return true;
    // if((int)sqrt($n) * (int)sqrt($n) == $n) return true;
    return false;
}
$s = "Day cac SCP la: ";
for($i=2; $i<=50; $i++){
    if(checkSCP($i)){
        $s.="$i ";
    }
}
echo $s;

// var_dump(checkSCP(131));

// 9 => 3 * 3 
// 10 => (int)3.01 * (int)3.01



?>