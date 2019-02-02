<?php
class Db{
	private $conn;
	public function __construct($host,$user,$pass,$db){
			$this->conn=new mysqli($host,$user,$pass,$db);
			if($this->conn->connect_errno){
				die("Connection Fail: ".$this->conn->connect_error);
			}
	}

    public function getAll($table,$cols){
        $sql="SELECT $cols FROM $table";
        $result=$this->conn->query($sql);
        if($result->num_rows>0){
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return false;
    }
    public function getById($table,$cols,$condition){
        $sql="SELECT $cols FROM $table WHERE $condition";
        $result=$this->conn->query($sql);
        if($result->num_rows>0){
            return $result->fetch_assoc();
        }
        else{
            return false;
        }
    }
}

$db=new Db("localhost","root","","myshopbd");
//$allst=$db->getAll("students","*");

if(isset($_REQUEST['id'])){
	$id=$_REQUEST['id'];
print_r($db->getById("students","*","id=$id"));
}

?>