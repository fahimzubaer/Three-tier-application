<?php
/* Name:Fahim Zubaer
 Course: CNT 4714 – Fall 2017 
 Assignment title: A Three-Tier Distributed Web-Based Application Using PHP and Apache
 Due Date: December 3, 2017
*/



interface My_Database{
    function run_query($query);
    function run_update($query);
    function connect($URL,$username,$password,$database);
    function close_connection();
}

class Database implements My_Database{
    protected $connection; 
    public function _construct($id){}

    public function connect($URL,$username,$password,$database){
       $this->connection = new mysqli($URL,$username,$password,$database);
       if($this->connection->connect_errno){
           return die("Connection failed!".$this->connection->connect_error);
       }
    }
    public function close_connection(){
          $this->connection->close();    
    }

    public function run_query($query){
        $results = $this->connection->query($query);
        return ($results) ? $results : $this->connection->error;
    }

    public function run_update($query){
        $results = $this->connection->query($query);
        return ($results) ? $this->connection->affected_rows : $this->connection->error;    
    }
    public function thing(){
        return "Factories are fun!";
    }
    private function logEvent($message) {
    if ($message != '') {
        
        $message = date("Y/m/d H:i:s").': '.$message;
        $fp = fopen('message.log', 'a');
        fwrite($fp, $message."\n");
        fclose($fp);
    }
}
}

class Database_Factory{
    public static function create($id){
        return new Database($id);
    }
}
?>