<?php
include("function.php")
?>

<html>
	<head>
		<title>Dynamic Menu</title>
		<style>
#menu {
  display: flex;
  background-color: DodgerBlue;
}

#menu > div {
  background-color: #f1f1f1;
  margin: 5px;
  padding: 5px;
  font-size: 20px;
  cursor: pointer;
}
</style>
<script>
	function getData(menu_id) {
		var xhttp=new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if (this.readyState==4 && this.status==200) {
				document.getElementById("content").innerHTML=this.responseText; 
			}
		};
		xhttp.open("GET","process.php?menu_id="+menu_id,true);
		xhttp.send();
	}
</script>
	</head>
	<body>
		<div id="menu">
			<?php
			$allMenus=$db->getAllBycondition("menus","menu_id,name","status='Publish'");
			foreach($allMenus as $menu){
				extract($menu);
				?>
					<div onclick="getData(<?=$menu_id;?>)"><?=$name;?></div>
				<?php
			}
			?>
		</div>
		<div id="content"></div>
	</body>
</html>