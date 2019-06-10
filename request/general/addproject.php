<?php
/**
 * Created by PhpStorm.
 * User: behi.n
 * Date: 3/10/2019
 * Time: 12:13 PM
 */
include "../../inc/inc.php";
$frame->RequestMethodPost();

if (
    isset($_POST['title'])
    &&
    isset($_POST['description'])
    &&
    isset($_POST['fee'])
    &&
    isset($_POST['type'])
    &&
    isset($_POST['subcat'])
    &&
    isset($_POST['city_id'])
    &&
    isset($_POST['bold'])
&&
    isset($_POST['quick'])
&&
    !empty($_POST['title'])
    &&
    !empty($_POST['description'])
    &&
    !empty($_POST['fee'])
    &&
    !empty($_POST['type'])
    &&
    !empty($_POST['subcat'])
    &&
    !empty($_POST['city_id'])
) {
    $title = $db->Real(($_POST['title']));
    $description = $db->Real(($_POST['description']));
    $fee=$db->Real(($_POST['fee']));
    $type = $db->Real(($_POST['type']));
    $subcat = $db->Real(($_POST['subcat']));
    $city_id = $db->Real(($_POST['city_id']));
    $bold = $db->Real(($_POST['bold']));
    $quick = $db->Real(($_POST['quick']));
    session_start();
    if( isset($_SESSION["login"]) && $_SESSION["login"]==true ) {
        $employer_id = $_SESSION["submitid"];


        $id = $db->Gid();


        $insert = mysqli_query($db->connect(), "INSERT INTO project (id, timer, employer_id, type, description, fee, title, quick, bold)  VALUE ('$id','','$employer_id','$type','$description','$fee','$title','$quick','$bold')");
        $insertskill = mysqli_query($db->connect(), "INSERT INTO skill(id, freelancer_id, subcat_id, project_id, employer_id) VALUE ('$id','','$subcat','$id','')");
        if ($insert) {
            $data = array("error" => false, "MSG" => "پروژه با موفقیت اضافه شود");
            echo json_encode($data);
            //header("location:../../dargah");
            $db->endFile();
            return;
        }
    }
    else{
        echo "ok";
    }

}
