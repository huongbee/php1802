<?php
class SinhVien{
    public $name; 
    public $age;
    function __construct($ten='chua co ten',$tuoi=0){
        echo __CLASS__.__FUNCTION__." da duoc goi";
        echo "<br>";
        $this->name = $ten;
        $this->age = $tuoi;
    }
}

$teo = new SinhVien;
$teo->__construct('Teo',10);
print_r($teo);

// $ti = new SinhVien('ti', 20);



?>