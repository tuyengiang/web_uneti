<?php
    if(isset($_GET["dangnhap"])){
        $user=$_GET["username"];
        $pass=$_GET["password"];
        echo "Ten: " . $user . "<br>";
        echo "Pass: ". $pass. "<br>";
    }

?>2