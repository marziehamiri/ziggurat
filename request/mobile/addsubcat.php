<?php
/**
 * Created by PhpStorm.
 * User: behi.n
 * Date: 3/11/2019
 * Time: 12:24 PM
 */
if(isset($_POST['catId']) && !empty($_POST['catId'])){
    include "../../inc/inc.php";
    $catId = $db->Real($_POST['catId']);
    $selectSubCat = "SELECT * FROM subcat where subcat.cat_id='$catId'";
    $query= mysqli_query($db->connect(),$selectSubCat);
    $html=array();
    while ($rowSubCat = mysqli_fetch_assoc($query)){
        $json= array("id"=> $rowSubCat['id'],"name"=> $rowSubCat['name']);
        $html[]=json_encode($json);
///        $html[]='<tr><td><input name="'.$rowSubCat['id'].'" type="checkbox" >&nbsp;'.$rowSubCat['name'].'</td></tr>';

    }
    $call = array("error"=>false);
    $call["results11"]=$html;
    echo json_encode($call);
    return;
}
