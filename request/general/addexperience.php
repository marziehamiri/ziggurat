<?php


include "../../inc/inc.php";
$frame->RequestMethodPost();


if(
    isset($_POST['position'])
    &&
    isset($_POST['company'])
    &&
    isset($_POST['from'])
    &&
    isset($_POST['to'])
    &&
    isset($_POST['description'])
    &&

    !empty($_POST['position'])
    &&
    !empty($_POST['company'])
    &&
    !empty($_POST['from'])
    &&
    !empty($_POST['to'])
    &&
    !empty($_POST['description'])


) {
    $position = $db->Real(($_POST['position']));
    $company = $db->Real(($_POST['company']));
    $from = $db->Real(($_POST['from']));
    $to = $db->Real(($_POST['to']));
    $description = $db->Real(($_POST['description']));
    session_start();
    if (isset($_SESSION["login"]) && $_SESSION["login"] == true) {
        $freelancerid = $_SESSION["submitid"];

        $insertedu = mysqli_query($db->connect(), "INSERT INTO workex(id, position, company, `from`, `to`, description, freelancer_id, status)
 VALUES ('','$position','$company','$from','$to','$description','$freelancerid',0)");
        if($insertedu){
            $data = array("error"=>false,"MSG"=>"ثبت فریلنسر با موفقیت انجام شد");
            echo json_encode($data);
            $db->endFile();
            return;

        }else{
            $data = array("error"=>true,"MSG"=>"خطایی پیش آمده");
            echo json_encode($data);
            $db->endFile();
            return;
        }


    }


}