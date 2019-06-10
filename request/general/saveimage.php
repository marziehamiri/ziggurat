<?php
include "../../inc/inc.php";
$frame->RequestMethodPost();

if (


    isset($_POST['uploader'])
    &&
    !empty($_POST['uploader']))
{
    $rand = rand(1, 22222222222222);

    $picture = mkdir("img_profile/" . $rand);
//??? ??? ?? ??????
    $picture = $_FILES['wwe']['name'];
//???? ??? ?? ??????
    $exp = explode(".", $picture);
    $end = end($exp);
//?? ??? ???? ?? ??? ????
    $new_name = rand() . "." . $end;
// ??? ?? ?? cache ?? ????? uploader ???????
    $from = $_FILES['wwe']['tmp_name'];
    $to = "img_profile/" . $rand . "/" . $new_name;
    move_uploaded_file($from, $to);

    session_start();
    if( isset($_SESSION["login"]) && $_SESSION["login"]==true ) {
        $freelancerid = $_SESSION["submitid"];
        $id = $db->Gid();


        $insert = mysqli_query($db->connect(),"INSERT INTO gallery (id, img_address, freelancer_id, employer_id, freeco_id, empco_id) VALUES
                                                                                              ( '$id','$to','$freelancerid','','','' )");
    }
}



?>