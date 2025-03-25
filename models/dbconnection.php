<?php

function create_connection(){
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "paminawa";
        
    return new mysqli($host,$username,$password,$database);
}