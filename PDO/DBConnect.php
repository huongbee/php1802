<?php
 
class DBConnect{
    private $options = [];
    private $connect = null;
    /**
     * Connect to database
     */
    function __construct($dbName='php1802_shopping',$username='root', $password=''){
        try{
            $this->connect = new PDO("mysql:dbname=$dbName;host=127.0.0.1",$username,$password,$this->options);
            $this->connect->exec('set names utf8');
        }
        catch(PDOException $e){
            echo $e->getMessage();
            die('Connect fail!');
        }
    }

    /**
     * Use for INSERT | UPDATE | DELETE
     * @param string $sql
     * @param array $values = []
     * @return bool
     */
    function executeQuery(string $sql, array $values=[]){
        $stmt = $this->connect->prepare($sql);
        for($i=1; $i<=count($values); $i++){
            $stmt->bindValue($i,$values[$i-1]);
        }
        return $stmt->execute();
    }

}

?>