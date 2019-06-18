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
    isset($_POST['subcat'])
    &&
    isset($_POST['budget'])
    &&
    isset($_POST['minbudget'])
    &&
    isset($_POST['maxbudget'])
    &&
    isset($_POST['mintime'])
    &&
    isset($_POST['maxtime'])
    &&
    isset($_POST['fee'])
    &&
    isset($_POST['minfee'])
    &&
    isset($_POST['maxfee'])
    &&
    isset($_POST['day'])
    &&
    isset($_POST['hour'])
    &&


    !empty($_POST['title'])
    &&
    !empty($_POST['description'])
    &&

    !empty($_POST['subcat'])

) {
    $title = $db->Real(($_POST['title']));
    $description = $db->Real(($_POST['description']));
    $subcat = $db->Real(($_POST['subcat']));

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
