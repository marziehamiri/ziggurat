
<?php
ini_set('display_errors', 1);
ini_set('log_errors',1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include "../../inc/inc.php";
$frame->RequestMethodPost();
if (


    isset($_POST['selected'])
    &&
    isset($_POST['workexperience'])
    &&
    isset($_POST['otherlanguage'])
    &&

    isset($_POST['shortdescription'])
    &&
    isset($_POST['description'])
    &&
    isset($_POST['language'])
    &&
    isset($_POST['timefee'])
    &&
    isset($_POST['hours'])
    &&
    isset($_POST['projecttype'])
    &&
    isset($_POST['available'])
    &&
    isset($_POST['mobile'])
    &&
    isset($_POST['profileimgname'])
    &&
    isset($_POST['backgroundimgname'])
    &&


    !empty($_POST['selected'])
    &&
    !empty($_POST['workexperience'])

    &&
    !empty($_POST['shortdescription'])
    &&
    !empty($_POST['description'])
    &&
    !empty($_POST['language'])
    &&
    !empty($_POST['timefee'])
    &&
    !empty($_POST['hours'])
    &&
    !empty($_POST['projecttype'])
    &&
    !empty($_POST['available'])
    &&
    !empty($_POST['mobile'])


){



    $subcatId = $db->Real(($_POST['selected']));
    $subcatId1= explode(",",$subcatId);

    $sotherlanguage = $db->Real(($_POST['otherlanguage']));
    $sotherlanguage1= explode(",",$sotherlanguage);

    $workexperience = $db->Real($_POST['workexperience']);
//    $profileimg= $db->Real($_POST['profileimg']);
//    $backgroundimg = $db->Real($_POST['backgroundimg']);
    $description = $db->Real($_POST['description']);
    $shortdescription = $db->Real($_POST['shortdescription']);
    $language = $db->Real($_POST['language']);
    $timefee = $db->Real($_POST['timefee']);
    $hours = $db->Real($_POST['hours']);
    $projecttype = $db->Real($_POST['projecttype']);
    $available = $db->Real($_POST['available']);
    $mobile = $db->Real($_POST['mobile']);
    $profileimgname = $db->Real($_POST['profileimgname']);
    $backgroundimgname = $db->Real($_POST['backgroundimgname']);
    $rand = rand(1, 22222222);

    $picture = mkdir("img_profile/" . $rand);
//??? ??? ?? ??????
    $picture = $_FILES[ $profileimgname]['name'];
//???? ??? ?? ??????
    $exp = explode(".", $picture);
    $end = end($exp);
//?? ??? ???? ?? ??? ????
    $new_name = rand() . "." . $end;
// ??? ?? ?? cache ?? ????? uploader ???????
    $from = $_FILES[ $profileimgname]['tmp_name'];
    $to = "img_profile/" . $rand . "/" . $new_name;
    move_uploaded_file($from, $to);

    session_start();
    if( isset($_SESSION["login"]) && $_SESSION["login"]==true ) {
        $freelancerid = $_SESSION["submitid"];
        $id = $db->Gid();


        $insert = mysqli_query($db->connect(),"INSERT INTO gallery (id, img_address, freelancer_id, employer_id, freeco_id, empco_id) VALUES
                                                                                              ( '$id','$to','$freelancerid','','','' )");
    }
session_start();
    if( isset($_SESSION["login"]) && $_SESSION["login"]==true ) {
        $freelancerid= $_SESSION["submitid"];
        $select = mysqli_query($db->connect(),"SELECT * from submit where id=$freelancerid");
        $result = mysqli_fetch_assoc($select);
        $name=$result['name'];
        $family=$result['family'];
        $email=$result['email'];
        $username=$result['username'];
        $password=$result['password'];


        $insertfree = mysqli_query($db->connect(), "INSERT INTO freelancer (id, name, family, email, password, shortdescription, description, reg_date, reg_time, username, timefee, projecttype, available, mobile, workexperience, language, hours)
                                                                     VALUES ('$freelancerid','$name','$family','$email','$password','$shortdescription','$description','','','$username','$timefee','$projecttype','$available','$mobile','$workexperience','$language','$hours')");
        $id1=$db->Gid();
        $insertimgprofile=  mysqli_query($db->connect(),"INSERT INTO gallery(id, img_address, freelancer_id, employer_id, freeco_id, empco_id) VALUES ('$id1','$profileimgname','$freelancerid','','','')");
        $id2=$db->Gid();
        $insertimgbackground=  mysqli_query($db->connect(),"INSERT INTO gallery(id, img_address, freelancer_id, employer_id, freeco_id, empco_id) VALUES ('$id2','$backgroundimgname','$freelancerid','','','')");

        foreach($subcatId1 as $name => $value) {
            $id=$db->Gid();
            $insertskill=mysqli_query($db->connect(),"
          INSERT INTO skill(id,freelancer_id, subcat_id, project_id, employer_id)

                                                             VALUES ($id,'$freelancerid','$value','','')");

        }

        foreach($sotherlanguage1 as $name => $value1) {
            $id=$db->Gid();
            $insertslanguages=mysqli_query($db->connect(),"
          INSERT INTO languages (id, freelancer_id, employer_id, freelancerco_id, employerco_id, language) VALUES ('$id','$freelancerid','','','','$value1')");

        }

        if( $insertfree and $insertimgprofile and $insertimgbackground and $insertskill)

        {

            $data = array("error"=>false,"MSG"=>"ثبت با موفقیت انجام شد");
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




