<?php
    include("function.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body style="width: 960px; align-content: center; " >
Select a student:
    <select onchange="load2(this.value)">
        <?php
        $all = $db->getAll("students", "*");
        foreach ($all as $student) {
        ?>
        <option value=" <?= $student['id']; ?>">
            <?= $student['Name']; ?>
        </option>
        <?php } ?>  
    </select>

    <p id="demo" ></p>






    <script>
        function load2(student_id) {
            // alert(student_id);

            var xhttp=new XMLHttpRequest();
            xhttp.onreadystatechange=function(){
                if (this.readyState==4 && this.status==200) {
                    document.getElementById("demo").innerHTML=this.responseText;             
                }
            };
            xhttp.open("GET","function.php?id="+student_id,true);
            xhttp.send();
        }
    </script>
</body>
</html>