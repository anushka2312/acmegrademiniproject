<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        .parentmenu {
            display: flex;
            justify-content: start;
            gap: 30px;
            background-image: linear-gradient(to bottom right, #0D091E, #5E3C58 );

        }
        .parentmenu div{
            padding: 10px;
        }

        .parentmenu a{
            color: #F7E2C9;
            text-decoration: none;
            font-family: 'Courier New', Courier, monospace;
        }
        .parentmenu a:hover{
            background-color: #F7E2C9;
            border-radius: 10px;
            padding: 10px;
            color: #0D091E;
            font-weight: bolder;
            
        }
        
    </style>
    <title>Document</title>
</head>

<body>

    <div class="parentmenu p-4 text-white">

        <div class="ml-4">
            <a href='index.php'>Upload Product</a>

        </div>
        <div>
            <a href='view.php'>View Product</a>

        </div>
        <div>
            <a href="order.php">View Orders</a>

        </div>

    </div>

</body>

</html>


<?php

?>