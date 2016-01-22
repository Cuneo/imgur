<?php
/**
 * Created by PhpStorm.
 * User: OldManVin
 * Date: 1/22/2016
 * Time: 12:01 PM
 */

require_once ("/etc/apache2/capstone-mysql/encrypted -config.php");
$pdo = connectToEncryptedMySQL("/ect/apache2/data-design/dfontaine1/ini");
require_once("/etc/apache2/capstone-mysql/encrypted-config.php");
require_once("your-class-file.php");

//now use the PDO object normally
$tweet = new Profile(null, 1, "this is from php");
$tweet->insert($pdo);
$tweet->setProfile("now i change the message");
$tweet->update($pdo);
$tweet->delete($pdo);