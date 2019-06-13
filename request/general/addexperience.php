<?php


include "../../inc/inc.php";
$frame->RequestMethodPost();


if(
    isset($_POST['position'])
    &&
    isset($_POST['company'])
    &&
    isset($_POST['serve'])
    &&
    isset($_POST['fromex'])
    &&
    isset($_POST['toox'])
    &&
    isset($_POST['descriptionx'])
    &&

    !empty($_POST['position'])
    &&
    !empty($_POST['company'])
    &&
    !empty($_POST['fromex'])
    &&
    !empty($_POST['toox'])
    &&
    !empty($_POST['descriptionx'])


) {
    $position = $db->Real(($_POST['position']));
    $company = $db->Real(($_POST['company']));
    $serve = $db->Real(($_POST['serve']));
    $fromex = $db->Real(($_POST['fromex']));
    $toox = $db->Real(($_POST['toox']));
    $description = $db->Real(($_POST['descriptionx']));
    session_start();
    if (isset($_SESSION["login"]) && $_SESSION["login"] == true) {
        $freelancerid = $_SESSION["submitid"];
        $id = $db->Gid();
        $insertex = mysqli_query($db->connect(), "INSERT INTO workex(id, position, company,serve, fromex, toox, description, freelancer_id, status)
 VALUES ('$id','$position','$company','$serve','$fromex','$toox','$description','$freelancerid',0)");

        $query = mysqli_query($db->connect(), $insertex);

        $html = '';
        if($serve==1){
            $serve1 ="بلی";
        }else{
            $serve1="خیر";
        }
        $html = '
        <div class="col-md-5 col-lg-5 col-xs-12 col-sm-5" style="float: right;font-size: 18px">
           <label>سمت :</label> &nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">'.$position.'</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
           <label>نام شرکت :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">'.$company.'</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
           <label>در حال حاضر در اين سمت خدمت مي کنم :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">'.$serve1.'</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
           <label>از سال :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">'.$fromex.'</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
           <label>تا سال :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">'.$toox.'</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
           <label>توضیحات :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">'.$description.'</label> &nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><hr>
       </div>
        ';

        $call = array("error"=>false);
        $call["resultsex"]=$html;
        echo json_encode($call);
        return;
    }


}