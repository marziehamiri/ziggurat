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
    isset($_POST['time'])
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
    !empty($_POST['time'])
    &&
    !empty($_POST['description'])
//    &&
//    !empty($_POST['imgaddress'])
//    &&
//    !empty($_POST['fileaddress'])


) {
    $title = $db->Real(($_POST['titleportofilo']));
    $skill = $db->Real(($_POST['skill']));
    $year = $db->Real(($_POST['year']));
    $time = $db->Real(($_POST['time']));
    $description = $db->Real(($_POST['description']));
    $imgaddress = $db->Real(($_POST['imgaddress']));
    $fileaddress = $db->Real(($_POST['fileaddress']));
    session_start();
    if (isset($_SESSION["login"]) && $_SESSION["login"] == true) {
        $freelancerid = $_SESSION["submitid"];
        $id=$db->Gid();
        $insertportofilo = mysqli_query($db->connect(), "INSERT INTO portofilo(id, title, skill, year, time, description, imgaddress, fileaddress, status, freelancer_id)
 VALUES ('$db','$title','$skill','$year','$time','$description','$imgaddress','$fileaddress',0,'$freelancerid')");

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