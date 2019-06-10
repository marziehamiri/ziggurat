<?php
/**
 * Created by PhpStorm.
 * User: behi.n
 * Date: 3/11/2019
 * Time: 12:24 PM
 */
if(isset($_POST['provinceId']) && !empty($_POST['provinceId'])){
    include "../../inc/inc.php";
    $provinceId = $db->Real($_POST['provinceId']);
    $selectcity = "SELECT * FROM city where city.province_id='$provinceId'";
    $query1= mysqli_query($db->connect(),$selectcity);
    $html=" ";
    while ($rowcity = mysqli_fetch_assoc($query1)){
        $html='<option value="'.$rowcity['id'].'">'.$rowcity['name'].'</option>';
    }
    $call = array("error"=>false);
    $call["result2"]=$html;
    echo json_encode($call);
    $db->endFile();

}