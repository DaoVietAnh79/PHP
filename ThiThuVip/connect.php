<?php
    function connection() {
        $localhost = 'localhost';
        $user = 'root';
        $pass = '';
        $db_name = 'db_plane';
        $conn = new PDO ("mysql:host=$localhost;dbname=$db_name",$user, $pass);
        return $conn;
        
        
    }
    

?>