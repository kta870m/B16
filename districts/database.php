<?php
    function get_connection(){
        global $conn;
        if(!$conn){
            $host='localhost';
            $user='root';
            $password='';
            $db_name='city';
            $conn=new mysqli($host, $user, $password, $db_name);
        }
    }
?>