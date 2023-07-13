<?php

$con = new mysqli('localhost', 'root', '1234','crudoperation' );

if(!$con){
    die(mysqli_error($con));
}


?>