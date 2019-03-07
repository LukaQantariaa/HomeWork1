<?php

include "includes/request.inc.php";
include "includes/response.inc.php";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>დავალება #1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php 
         $object = New Response("test data", 200, "application/jso");
         var_dump($object);
    ?>
</body>
</html>