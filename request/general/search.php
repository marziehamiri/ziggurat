<?php
/**
 * Created by PhpStorm.
 * User: behi.n
 * Date: 3/4/2019
 * Time: 2:48 PM
 */
include "../../inc/inc.php";
$frame->RequestMethodPost();
if(
    isset($_POST['name'])
    &&
    !empty($_POST['name'])
) {
    $name = $db->Real(($_POST['name']));
    $selectf = mysqli_query($db->connect(),
        "SELECT username from freelancer,skill,subcat,cat where 
        freelancer.id=skill.freelancer_id and
       subcat.id=skill.subcat_id and
      cat.id=subcat.cat_id and 
      (subcat.name  like '%$name%' or cat.name  like '%$name%' )");
    $selectp = mysqli_query($db->connect(),
        "SELECT project.title 
       from project,skill,subcat,cat 
      where project.id=skill.project_id and
      subcat.id=skill.subcat_id and 
      cat.id=subcat.cat_id and 
      (subcat.name  like '%$name%'  or cat.name  like '%$name%')");
    if (mysqli_num_rows($selectp)==0 && mysqli_num_rows($selectf)==0) {
        $data = array("error" => true, "MSG" => "چیزی یافت نشد");
        echo json_encode($data);
        $db->endFile();

    } else {
        $username="";
        $title="";
while ($row = mysqli_fetch_assoc($selectf)){
    //$username[]=array("username"=>$row['username']);
    $username.= '<a href="">'.$row['username'].'</a><br><br>';

}

        while ($row1 = mysqli_fetch_assoc($selectp)){
           // $title[]=array("title"=>$row1['title']);
            $title.= '<a href="">'.$row1['title'].'</a><br><br>';

        }

        $call=array("ok"=>true);
$call["username"]=$username;
$call["title"]=$title;
echo json_encode($call);
$db->endFile();

    }
}