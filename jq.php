<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <div class="container">

            <p id="x" class=" text-center h1 p-3" >jquery 1st Class</p>
        <div class="inputf text-center">
            <span>Name:</span>
            <input type="text" name="name" value="">
        </div>
    </div>

   <script>
        $(document).ready(function(){

          /*  $("p").click(function(){
                $(this).hide();
            }); */
            $("#x").on({
                mouseenter:function(){
                    $(this).css("color","pink")
                },
                mouseleave:function(){
                    $(this).css("color","blue")
                },
            });
            $("p").click(function(){
                $(this).css("color","red");
            });


            //input field
            $("input").focus(function(){
                $(this).css("background-color","aquamarine");
            });
            $("input").blur(function(){
                $(this).css("background-color","white");
            });
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
