<?php

    $host= "localhost";
    $user= "root";
    $pass= "";
    $db_name= "curd";

    $connet = new mysqli($host,$user,$pass,$db_name);
    if($connet-> connect_error){
        die("erorr" .$connet-> conneect_error);
    }
    

?>