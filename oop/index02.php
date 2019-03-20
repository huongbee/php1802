<?php
class SinhVien{
    private $name; 
    public $age = 0;

    public function setName(string $ten){
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
// $sv1->name = 'Teo'; // false vì protected
$sv1->setName('Teo');
echo $sv1->getName();




/**
 * public 
 * protected: friend
 * privated: 
 */
?>