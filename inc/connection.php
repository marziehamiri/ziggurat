<?php
/**
 * Created by PhpStorm.
 * User: amiripc
 * Date: 2/15/2019
 * Time: 3:22 PM
 */

class connection
{
 private $userName="zig";
 private $password="nIjlrkE7I3UQAxb9";
 private $dbName="ziggurat";

 public function __construct()
 {
     date_default_timezone_set("Asia/Tehran");
 }

    public  function connect(){
     $db = mysqli_connect("localhost",$this->userName,$this->password,$this->dbName);
     mysqli_set_charset($db,"utf8");
     return $db;
 }

 public function hashPassword($password){

     $va_password = hash("md5",$password);
     $va_password = hash("SHA256",$va_password);
     $va_password = hash("SHA512",$va_password);
     return $va_password;

 }

 public function Real($realString)
 {
     return mysqli_real_escape_string($this->connect(),$realString);
 }

 public function Gid()
 {
     $id = date("ymdHis");
     $id = $id.rand(100000,999999);
     return $id;
 }
 public function Date(){
     $date = date("Y/m/d");
     return $date;
}
 public function Time()
 {
     $time = date("H:i:s");
     return $time;
 }
 public function endFile()
 {
     mysqli_close($this->connect());
     return;
 }


}