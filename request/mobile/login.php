<?php
/**
 * Created by PhpStorm.
 * User: behi.n
 * Date: 2/19/2019
 * Time: 2:06 PM
 */
if (

    isset($_POST['username'])
    &&
    isset($_POST['password'])

    &&
    !empty($_POST['username'])
    &&
    !empty($_POST['password'])
)
{

    include "../../inc/inc.php";
    $password = $db->hashPassword($db->Real($_POST['password']));
    $username = $db->Real(($_POST['username']));
    $select = mysqli_query($db->connect(),"SELECT * from submit where submit.username = '$username' AND submit.password='$password'");
    if(mysqli_num_rows($select)==1){
        $login=true;


    }else{
        $login=false;

    }
    $call=array("login"=>$login);
    echo json_encode($call);
    $db->endFile();


}else{
    header('location:../../sign-in.php');
}
