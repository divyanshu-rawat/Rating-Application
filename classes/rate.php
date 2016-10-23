<?php

class Rate
{
//    private scope when you want your variable/function to be visible in its own class only.
    
     private $objDb    =    null;
     private $_dbhost   =   'localhost';
     private $_dbname  =   'comments';
     private $_dbuser  =   'root';
     private $_dbpass  =   '';
     private $_table_1 =   'texts';
     private $_table_2 =   'ratings';
        
     public $_user;
    
// creating a __constructor now as we know constructor is executed when we create an instance of the class !!!
    
    
    public function __construct($user = null)
    {
        $this->_user = !empty($user) ? $user : getenv('REMOTE_ADDR');
    }
    

    // . The persistent connection cache allows you to avoid the overhead of establishing a new connection every time a script needs to talk to a database, resulting in a faster web application.
    private function connect()
    {
        try{
            
            $this->objDb = new PDO("mysql:host={$this-> _dbhost};dbname={$this->_dbname}",$this->_dbuser,$this->_dbpass,
                                    array(PDO::ATTR_PERSISTENT => true));
            
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
            exit();
        }
    }
    


    public function getPosts(){

        if($this->objDb == null)
        {
            $this->connect();
        }

        $sql = "SELECT *,DATE_FORMAT(date,'%d/%m/%Y') AS date_formatted FROM {$this->_table_1} WHERE active = 1 ORDER BY date DESC";
        
        $sql = "SELECT * FROM texts";
        $statement= $this->objDb->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;


    }
    

    public function getPost( $id = null)
    {
        if(!empty($id) && !empty($this->_user))
        {
            if($this->objDb === null)
            {
                $this->connect();
            }


            $sql = "SELECT * FROM {$this->_table_1} WHERE id = '$id'";
            $statement= $this->objDb->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;

        }
    }



        public function getByUser( $id = null)
    {
        if(!empty($id))
        {
            if($this->objDb === null)
            {
                $this->connect();
            }


            $sql = "SELECT * FROM {$this->_table_2} WHERE id = '$id' AND item = '$this->_user' ";
            $statement= $this->objDb->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;

        }
    }







}



?>