<?php
include "../../inc/inc.php";
$frame->RequestMethodPost();
if (
    isset($_POST['catname'])
    &&
    isset($_POST['subcatname'])
    &&
    isset($_POST['profileimg'])
    &&
    isset($_POST['backgroundimg'])
    &&
    isset($_POST['language'])
    &&
    isset($_POST['profileimgname'])
    &&
    isset($_POST['backgroundimgname'])
    &&

    !empty($_POST['catname'])
    &&
    !empty($_POST['subcatname'])
    &&
    !empty($_POST['profileimg'])
    &&
    !empty($_POST['backgroundimg'])
    &&
    !empty($_POST['language'])
    &&
    !empty($_POST['profileimgname'])
    &&
    !empty($_POST['backgroundimgname'])

){
    $catname = $db->Real(($_POST['catname']));
    $subcatname = $db->Real(($_POST['subcatname']));
    $profileimg= $db->Real(($_POST['profileimg']));
    $backgroundimg = $db->Real(($_POST['backgroundimg']));
    $language = $db->Real(($_POST['language']));
    $profileimgname = $db->Real(($_POST['profileimgname']));
    $backgroundimgname = $db->Real(($_POST['backgroundimgname']));
    session_start();
    if( isset($_SESSION["login"]) && $_SESSION["login"]==true ) {
        $employerid= $_SESSION["submitid"];
        $select = mysqli_query($db->connect(),"SELECT * from submit where id=$employerid");
        $result = mysqli_fetch_assoc($select);
        $name=$result['name'];
        $family=$result['family'];
        $email=$result['email'];
        $username=$result['username'];
        $password=$result['password'];
        $insertemp = mysqli_query($db->connect(), "INSERT INTO employer (id, name, family, email, password, reg_date, reg_time, username, language)
                                                     VALUE ('$employerid','$name','$family','$email','$password','','','$username','$language')");


        $insertimgprofile=  mysqli_query($db->connect(),"INSERT INTO gallery(id, img_address, freelancer_id, employer_id, freeco_id, empco_id) value ('','$profileimgname','','$employerid','','')");
        $insertimgbackground=  mysqli_query($db->connect(),"INSERT INTO gallery(id, img_address, freelancer_id, employer_id, freeco_id, empco_id) value ('','$backgroundimgname','','$employerid','','')");
        $insertskill=mysqli_query($db->connect(),"INSERT INTO skill(freelancer_id, subcat_id, project_id, employer_id)
                                                             value ('','$subcatid','','$employerid')");
    }


}



?>