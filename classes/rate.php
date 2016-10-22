<?php

class Rate
{
//    private scope when you want your variable/function to be visible in its own class only.
    
     private $objDb    =   null;
     private $_dbhst   =  'localhost';
     private $_dbname  =  'thumbs';
     private $_dbuser  =  'root';
     private $_table_1 =  'password';
     private $_table_2 =  'ratings';
        
     public $_user;
    
// creating a __constructor now as we know constructor is executed when we create an instance of the class !!!
    
    
    public function __construct($user = null)
    {
        $this->_user = !empty($user) ? $user : getenv('REMOTE_ADDR');
    }
    
    private function connect()
    {
        try{
            
            $this->objDb = new PDO("")
            
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
            exit();
        }
    }
    
//    public function __construct ( $UserName, $Password, $DbName ) {
//    $this->userName = $UserName;
//    $this->password = $Password;
//    $this->dbName = $DbName;
//  }
//    
    
}



?>