<?php
/**
 * Created by PhpStorm.
 * User: mertcan
 * Date: 10.05.2016
 * Time: 16:14
 */
$dbhost = "localhost";
$dbname = "test";
$dbuser = "root";
$dbpswd = "muratcan55";

//Server Type
$server_name = "http://" . $_SERVER['HTTP_HOST'] . "/";


try {

    $db = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname, $dbuser, $dbpswd);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES UTF8');

} catch (PDOException $e) {
    throw new PDOException("HATA  : " . $e->getMessage());
}
