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
    function savecover($base64img,$url,$name){
        $base64img = str_replace('data:image/jpeg;base64,', '', $base64img);
        $data = base64_decode($base64img);
        $file = $url .$name.'.jpg';
        file_put_contents($file, $data);
    }

    function sendsms($tell,$code){

        $client = new SoapClient("http://37.130.202.188/class/sms/wsdlservice/server.php?wsdl");
        $user = "amlak300";
        $pass = "amir5621";
        $fromNum = "+985000958";
        $toNum = $tell;
        $pattern_code = "128";
        $input_data = array("name"=>" زیگورات","verification-code"=>$code,);
        $client -> sendPatternSms($fromNum,$toNum,$user,$pass,$pattern_code,$input_data);

    }
}