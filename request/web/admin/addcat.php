<?php
/**
 * Created by PhpStorm.
 * User: behi.n
 * Date: 2/25/2019
 * Time: 2:52 PM
 */
if(isset($_POST['name'])&&!empty($_POST['name'])) {
    include "../../../inc/inc.php";
    $name = $db->Real($_POST['name']);
    $id = $db->Gid();
    if ($_POST['model'] == "subcat") {
        if (isset($_POST['cat_id']) && !empty($_POST['cat_id'])) {
            $cat_id = $db->real($_POST['cat_id']);
            $select = mysqli_query($db->connect(), "SELECT * FROM cat WHERE id='$cat_id' ");
            if (mysqli_num_rows($select) == 1) {
                $insert = mysqli_query($db->connect(), "INSERT INTO subcat(id, name,cat_id) VALUE ('$id','$name','$cat_id')");

            }
            if ($insert) {
                $call = array("error" => false, "MSG" => "درج زیر دسته بندی انجام شد");
            } else {
                $call = array("error" => true, "MSG" => "لطفا دوباره تلاش کنید");

            }


        }


    }
    if ($_POST['model'] == "cat") {
        $insert = mysqli_query($db->connect(), "INSERT INTO cat(id, name) VALUE ('$id','$name')");

        if ($insert) {
            $call = array("error" => false, "MSG" => "درج دسته بندی انجام شد");
        } else {
            $call = array("error" => true, "MSG" => "لطفا دوباره تلاش کنید");

        }
    }

    echo json_encode($call);
}