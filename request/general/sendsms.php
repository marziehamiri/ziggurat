<?php

include "../../inc/inc.php";
$frame->RequestMethodGet();
if (


    isset($_GET['mobile'])
    &&
    !empty($_GET['mobile'])){
    $tell = isset($_GET['mobile']);
    $code = rand(10000,90000);
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
    $call = array("error"=>false);
    $call["code"]=$code;
    echo json_encode($call);
    return;









}



?>