<?php
/* $student=["mamun","faysal","abdullah","santo","sajan"];
foreach ($student as $key=> $value) {
    echo $value ,$key ;
    echo "<br>";
}
*/
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


}

$db=new Db("localhost","root","","myshopbd");
$allst=$db->getAll("students","*");
//print_r($allst);


echo "<table border=\'2\' cellpadding=\'5\'>";
echo "<tr>";
	foreach ($allst[0] as $key=>$val) {
		echo "<th>".ucfirst($key)."</th>";
	}
    echo "</tr>";
    foreach($allst as $row){
		echo "<tr>";
	foreach($row as $value){
		echo "<td> $value </td>";
	}
	echo "</tr>";
	}

	echo "</table>";

?>
