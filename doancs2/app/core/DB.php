
<?php
class DB{
   
    public  $conn;
    protected $servername = '';
    protected $username = 'root';
    protected $password = '';
    protected $dbname = 'shopdienthoai';
function __construct(){
   
$this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
}
}
?>