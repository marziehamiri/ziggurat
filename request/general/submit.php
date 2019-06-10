<?php
/**
 * Created by PhpStorm.
 * User: amiripc
 * Date: 2/15/2019
 * Time: 4:17 PM
 */
include "../../inc/inc.php";
$frame->RequestMethodPost();

if (
    isset($_POST['name'])
    &&
    isset($_POST['family'])
    &&
    isset($_POST['email'])
    &&
    isset($_POST['password'])
    &&
    isset($_POST['username'])
    &&
    isset($_POST['captcha'])
    &&


    !empty($_POST['name'])
    &&
    !empty($_POST['family'])
    &&
    !empty($_POST['email'])
    &&
    !empty($_POST['password'])
    &&
    !empty($_POST['username'])
    &&
    !empty($_POST['captcha'])


){

    $name = $db->Real(($_POST['name']));
    $family = $db->Real(($_POST['family']));
    $password = $db->hashPassword($db->Real($_POST['password']));
    $email = $db->Real(($_POST['email']));
    $username = $db->Real(($_POST['username']));


    // duplicate email
    $select = mysqli_query($db->connect(),"SELECT * from submit where submit.email = '$email'");

    if(mysqli_num_rows($select)==1)
    {
        $data = array("error"=>true,"MSG"=>"قبلا با این ایمیل ثبت نام کرده اید");
        echo json_encode($data);
        $db->endFile();
        return;
    }
  if(!$frame->checkMail($email)){
return;
  }

  $id=$db->Gid();
  $time = $db->Time();
  $date = $db->Date();



    $insert = mysqli_query($db->connect(),"INSERT INTO submit(id, name, family, email, password,username ,reg_date, reg_time) value ('$id','$name','$family','$email','$password','$username','$date','$time')");

     if($insert)

  {

      $data = array("error"=>false,"MSG"=>"ثبت نام با موفقیت انجام شد");
      echo json_encode($data);
header("location:../../freelancerlogin.php");
      $db->endFile();
      return;
  }else{
      $data = array("error"=>true,"MSG"=>"خطایی پیش آمده");
      echo json_encode($data);
      $db->endFile();
      return;

  }

}
else
{
    $message = "همه مقادیر را وارد کنید";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("location:../../continuelogin.php");
}
