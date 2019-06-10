<?php


include "../../inc/inc.php";
$frame->RequestMethodPost();


if(
    isset($_POST['title'])
    &&
    isset($_POST['skill'])
    &&
    isset($_POST['year'])
    &&
    isset($_POST['time'])
    &&
    isset($_POST['description'])
    &&
    isset($_POST['imgaddress'])
    &&
    isset($_POST['fileaddress'])
    &&

    !empty($_POST['title'])
    &&
    !empty($_POST['skill'])
    &&
    !empty($_POST['year'])
    &&
    !empty($_POST['time'])
    &&
    !empty($_POST['description'])
    &&
    !empty($_POST['imgaddress'])
    &&
    !empty($_POST['fileaddress'])


) {
    $title = $db->Real(($_POST['title']));
    $skill = $db->Real(($_POST['skill']));
    $year = $db->Real(($_POST['year']));
    $time = $db->Real(($_POST['time']));
    $description = $db->Real(($_POST['description']));
    $imgaddress = $db->Real(($_POST['imgaddress']));
    $fileaddress = $db->Real(($_POST['fileaddress']));
    session_start();
    if (isset($_SESSION["login"]) && $_SESSION["login"] == true) {
        $freelancerid = $_SESSION["submitid"];

        $insertedu = mysqli_query($db->connect(), "INSERT INTO portofilo(id, title, skill, year, time, description, imgaddress, fileaddress, status, freelancer_id)
 VALUES ('','$title','$skill','$year','$time','$description','$imgaddress','$fileaddress','$freelancerid',0)");
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