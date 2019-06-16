<?php


include "../../inc/inc.php";
$frame->RequestMethodPost();


if(
    isset($_POST['titleportofilo'])
    &&
    isset($_POST['skill'])
    &&
    isset($_POST['year'])
    &&
    isset($_POST['timeportofilo'])
    &&
    isset($_POST['description'])
    &&
    isset($_POST['imgaddress'])
    &&
    isset($_POST['fileaddress'])
    &&


    !empty($_POST['titleportofilo'])
    &&
    !empty($_POST['skill'])
    &&
    !empty($_POST['year'])
    &&
    !empty($_POST['timeportofilo'])
    &&
    !empty($_POST['description'])


) {
    $title = $db->Real(($_POST['titleportofilo']));
    $skill = $db->Real(($_POST['skill']));
    $year = $db->Real(($_POST['year']));
    $time = $db->Real(($_POST['timeportofilo']));
    $description = $db->Real(($_POST['description']));
    $imgaddress = $db->Real(($_POST['imgaddress']));
    $fileaddress = $db->Real(($_POST['fileaddress']));

    $rand = rand(1, 22222222);
    $picture = mkdir("img_portofilo/" . $rand);
//??? ??? ?? ??????
    $picture = $_FILES[$imgaddress]['name'];
//???? ??? ?? ??????
    $exp = explode(".", $picture);
    $end = end($exp);
//?? ??? ???? ?? ??? ????
    $new_name = rand() . "." . $end;
// ??? ?? ?? cache ?? ????? uploader ???????
    $from = $_FILES[$fileaddress]['tmp_name'];
    $to = "img_portofilo/" . $rand . "/" . $new_name;
    move_uploaded_file($fileaddress, $to);

    $rand2 = rand(1, 22222222);
    $picture2 = mkdir("file_portofilo/" . $rand2);
//??? ??? ?? ??????
    $picture2 = $_FILES[ $fileaddress]['name'];
//???? ??? ?? ??????
    $exp2 = explode(".", $picture2);
    $end2 = end($exp2);
//?? ??? ???? ?? ??? ????
    $new_name2 = rand() . "." . $end2;
// ??? ?? ?? cache ?? ????? uploader ???????
    $from2 = $_FILES[ $fileaddress]['tmp_name'];
    $to2 = "file_portofilo/" . $rand2 . "/" . $new_name2;
    move_uploaded_file($fileaddress, $to2);

    session_start();
    if (isset($_SESSION["login"]) && $_SESSION["login"] == true) {
        $freelancerid = $_SESSION["submitid"];
        $id=$db->Gid();
        $insertportofilo = mysqli_query($db->connect(), "INSERT INTO portofilo(id, title, skill, year, time, description, imgaddress, fileaddress, status, freelancer_id)
VALUES ('$id','$title','$skill','$year','$time','$description','$imgaddress','$fileaddress',0,'$freelancerid')");

        $query= mysqli_query($db->connect(),$insertportofilo);

        $html='';

        $html='<div class="col-md-5 col-lg-5 col-xs-12 col-sm-5" style="float: right;font-size: 18px">
            <label>عنوان کار:</label> &nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">'.$title.'</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
            <label>مهارت های استفاده شده در اين کار:</label> &nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">'.$skill.'</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
            <label>سال انجام اين کار:</label> &nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">'.$year.'</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
            <label>زمان صرف شده برای انجام اين کار:</label> &nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">'.$time.'</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
            <label>توضیحات :</label> &nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">'.$description.'</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
            <label>نمونه کار:</label> &nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">'.$imgaddress.'</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
            <label>رضايت نامه حسن انجام کار:</label> &nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">'.$fileaddress.'</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
            </div>
        ';


        $call = array("error"=>false);
        $call["resultsportofilo"]=$html;
        echo json_encode($call);
        return;



    }


}