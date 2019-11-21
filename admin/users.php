<?php
 
 include '../templates/header_File.php';
 include '../database/showUser.php';
 
 foreach($users as $user) {
     echo $user['username'] . "<br>";
     echo $user['password'] . "<br>";
 }