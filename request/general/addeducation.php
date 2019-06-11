<?php


include "../../inc/inc.php";
$frame->RequestMethodPost();


if(
    isset($_POST['school'])
    &&
    isset($_POST['level'])
    &&
    isset($_POST['degree'])
    &&
    isset($_POST['frome'])
    &&
    isset($_POST['too'])
    &&
    isset($_POST['avg'])
    &&
    isset($_POST['description'])
    &&

    !empty($_POST['school'])
    &&
    !empty($_POST['level'])
    &&
    !empty($_POST['degree'])
    &&
    !empty($_POST['frome'])
    &&
    !empty($_POST['too'])
    &&
    !empty($_POST['avg'])
    &&
    !empty($_POST['description'])


) {
    $school = $db->Real(($_POST['school']));
    $level = $db->Real(($_POST['level']));
    $degree = $db->Real(($_POST['degree']));
    $from = $db->Real(($_POST['frome']));
    $to = $db->Real(($_POST['too']));
    $avg = $db->Real(($_POST['avg']));
    $description = $db->Real(($_POST['description']));
    session_start();
    if (isset($_SESSION["login"]) && $_SESSION["login"] == true) {
        $freelancerid = $_SESSION["submitid"];
        $id=$db->Gid();
        $insertedu = "INSERT INTO education(id, school, level, degree, frome, too, avg, description, status, freelancer_id)
         VALUES ('$id','$school','$level','$degree','$from','$to','$avg','$description','$freelancerid',0)";
        $query= mysqli_query($db->connect(),$insertedu);

    $html='';


        $html=' <div class="col-md-5 col-lg-5 col-xs-12 col-sm-5" style="float: right;font-size: 18px">
           <label>مدرسه/دانشگاه :</label> &nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">'.$school.'</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
           <label>مقطع تحصیلی :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">'.$level.'</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
           <label>مدرک تحصیلی :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">'.$degree.'</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
           <label>از سال :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">'.$from.'</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
           <label>تا سال :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">'.$to.'</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
           <label>معدل :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">'.$avg.'</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
           <label>توضیحات :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">'.$description.'</label> &nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><hr>
       </div>';


    $call = array("error"=>false);
    $call["resultsedu"]=$html;
    echo json_encode($call);
    return;

}





}