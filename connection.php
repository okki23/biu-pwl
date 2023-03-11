<?php 
class Config {

    protected $host;
    protected $username;
    protected $password;
    protected $db;


    public function ConnectDB($host,$username,$password,$db)
    {
        return $this->host = $host;
        return $this->username = $username;
        return $this->password = $password;
        return $this->db = $db;
    }

   
}
?>