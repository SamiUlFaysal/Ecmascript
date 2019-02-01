
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
<body>
    


    <button onclick="load()" >LOAD</button>
    <button onclick="unload()" >UNLOAD</button>
    <input type="text" onkeyup="load2(this.value)">
<p id="demo" ></p>
    <script>
    

function load() {
     var xhttp=new XMLHttpRequest();
     xhttp.onreadystatechange=function(){
         if (this.readyState==4 && this.status==200) {
            document.getElementById("demo").innerHTML=this.responseText;             
         }
     };
     xhttp.open("GET","function.php",true);
     xhttp.send();
}
function load2(student_id) {
     var xhttp=new XMLHttpRequest();
     xhttp.onreadystatechange=function(){
         if (this.readyState==4 && this.status==200) {
            document.getElementById("demo").innerHTML=this.responseText;             
         }
     };
     xhttp.open("GET","function.php?id="+student_id,true);
     xhttp.send();
}
function unload() {
     var xhttp=new XMLHttpRequest();
     xhttp.onreadystatechange=function(){
         if (this.readyState==4 && this.status==200) {
            document.getElementById("demo").innerHTML="";             
         }
     };
     xhttp.open("GET","function.php",true);
     xhttp.send();
}
    </script>
</body>
</html>
