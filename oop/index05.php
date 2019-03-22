<?php
/**
 * Tạo lớp Person với 2 thuộc tính name, age
 * Khởi tạo bạn Nam, Nữ
 * viết function so sánh tuổi của hai bạn
 */
// class Person{
//     public static $name;
//     public $age;
//     function __construct($name, $age){
//         Person::$name = $name;
//         $this->age = $age;
//     }
//     static function compare(Person $p1, Person $p2){
//         if($p1->age > $p2->age){ // p1>p2
//             return "Bạn ".$p1::$name." lớn hơn bạn ".$p2::$name;
//         }
//         else return "Bạn ".$p1::$name." nhỏ hơn bạn ".$p2::$name;
//     }
// }
// $boy = new Person('Nam', 20);
// echo $boy::$name;

// $girl = new Person('Nữ', 18);
// echo $boy::$name;
// echo Person::compare($boy, $girl);

class Person{
    public $name;
    public $age;
    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    function compare(Person $p1, Person $p2){
        if($p1->age > $p2->age){ // p1>p2
            return "Bạn ".$p1->name." lớn hơn bạn ".$p2->name;
        }
        else return "Bạn ".$p1->name." nhỏ hơn bạn ".$p2->name;
    }
    function getName(){
        echo $this->name;
    }
}
class Children extends Person{

    function sosanhTuoi(Person $p1, Person $p2){
        return parent::compare($p1,$p2);
        // parent
    }
    function layTen(){
        return $this->getName();
    }
    function compare($a ,$b){
        echo $a;
    }
    function getData($p1,$p2){
        // return self::compare(2,4); // compare line 54
        return parent::compare($p1, $p2); // of class Father
    }
}
$boy = new Children('Nam', 20);
$girl = new Person('Nữ', 18);
echo $boy->getData($boy,$girl);



// echo Children::compare($boy, $girl);



// $boy = new Person('Nam', 20);
// // echo $boy::$name;

// $girl = new Person('Nữ', 18);
// // echo $boy::$name;
// echo Person::compare($boy, $girl);



?>