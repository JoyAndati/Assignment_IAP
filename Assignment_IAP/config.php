<?php

$db_user ='root';
$db_pass ='';
$db_name ='users';
$db = new PDO('mysql:host=localhost;3307 ;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

spl_autoload_register('myAutoLoader');

function myAutoLoader($className){
    $path = 'classes/';
    $extension = '.class.php';
    $fileName = $path . $className . $extension;
   
    if (!file_exists($fileName)){
        return false;
    }
    include_once $path . $className . $extension;
}
