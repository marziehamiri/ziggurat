<?php
/**
 * Created by PhpStorm.
 * User: behi.n
 * Date: 3/11/2019
 * Time: 12:24 PM
 */
if(isset($_POST['countryId']) && !empty($_POST['countryId'])){
    include "../../inc/inc.php";
    $countryId = $db->Real($_POST['countryId']);
    $selectprovince = "SELECT * FROM province where province.country_id='$countryId'";
    $query4= mysqli_query($db->connect(),$selectprovince);
    $html="";
    while ($rowprovince = mysqli_fetch_assoc($query4)){
        $html='<option value="'.$rowprovince['id'].'">'.$rowprovince['name'].'</option>';
    }
    $call = array("error"=>false);
    $call["result4"]=$html;
    echo json_encode($call);
    $db->endFile();
    return;
}
