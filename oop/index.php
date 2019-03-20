<?php

class SinhVien{
    public $name; // property
    var $age = 0;

    function setName(string $ten){// action
        $this->name = $ten;
    } 
    function getName(){
        return $this->name; 
    }
    function sayHello(){
        return "Hello, $this->name";
    }
}

$sv1 = new SinhVien;
// $sv1->name = 'Teo';
// echo $sv1->name;
$sv1->setName('Ti'); 
// echo $sv1->getName();
echo $sv1->sayHello();



// print_r($sv1);

// $arrSv1 = (array)$sv1;




// $sv2 = new SinhVien;

// if($sv1 === $sv2){
//     echo 'bang nhau';
// }
// else{ 
//     echo 'khac nhau';
// }

// var_dump($sv1);
// var_dump($sv2);



?>