<?php
/**
 * Created by PhpStorm.
 * User: amiripc
 * Date: 2/15/2019
 * Time: 4:35 PM
 */

class myFrame
{
public function RequestMethodPost(){
    if($_SERVER['REQUEST_METHOD']=="POST")
    {

    }else
    {
        header("Location:../404.html");
    }
}
public function RequestMethodGet(){
        if($_SERVER['REQUEST_METHOD']=="GET")
        {

        }else
        {
            header("Location:../../404.html");
        }
    }
    public function checkMail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $data = array("error"=>true,"MSG"=>"ایمیل به درستی وارد نشده است");
            echo json_encode($data);

            return false;
        }else{
            return true;
        }
    }

}
