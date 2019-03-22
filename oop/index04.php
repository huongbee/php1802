<?php
class SinhVien{
    public $name = 'Admin';
    private $age = 40;
    protected $height = 160;

    function __construct(){
        echo 'constructor is running ';
    }
    function getName(){
        return $this->name;
    }
}
class HocSinh extends SinhVien{

    function getHeight(){
        return $this->height;
    }
    function getAge(){
        return $this->age; // false
    }
}
class HocSinh02 extends HocSinh{

    function getHeight(){
        return $this->height;
    }
    function getAge(){
        return $this->age; // false
    }
}

// $hsA = new HocSinh();
// echo $hsA->getAge();
// print_r($hsA);

class DB extends PDO{
    // function
}
// $db = new DB('mysql:dbname=shop_2509;host=localhost','root','');
// print_r($db);


// 
// Error 
// ..

?>