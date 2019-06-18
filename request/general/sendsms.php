<?php

include "../../inc/inc.php";
$frame->RequestMethodGet();
if (


    isset($_GET['mobile'])
    &&
    !empty($_GET['mobile'])){
    $tell = isset($_GET['mobile']);
    $code = rand(10000,90000);


    $db->sendsms($tell,$code);

    $call = array("error"=>false);
    $call["code"]=$code;
    echo json_encode($call);
    return;









}



?>