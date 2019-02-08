<?php
include("function.php");
if(isset($_REQUEST['menu_id'])){
	$menu_id=$_REQUEST['menu_id'];
$allContent=$db->getById("menus","*","menu_id='$menu_id'");
echo "<h2>".$allContent['name']."</h2>";
echo "<p>".$allContent['content']."</p>";
}
?>