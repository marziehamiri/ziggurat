<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>زیگورات</title>
    <script src="js/jq.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/js.js"></script>
    <script src="js/myjs.js"></script>
    <script src="js/dropdowntopmenu.js"></script>
    <link href="css/slide2.css" rel="stylesheet">
    <script src="js/slide2.js"></script>

    <link href="css/csscounter.css" rel="stylesheet" id="bootstrap-css">
    <script src="js/jscounter.js"></script>
    <script src="js/jqcounter.js"></script>

    <script src="js/code.jq.js" type="text/javascript"></script>
    <script src="js/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>
    <link href="css/all.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">
    <link href="css/dropdowntopmenu.css" rel="stylesheet">
    <link href="css/megamenu.css" rel="stylesheet">
    <script src="js/jq.min.js" type="text/javascript"></script>
    <script src="js/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>
    <script src="js/jqslide1.js" type="text/javascript"></script>
    <link href="css/styleslide1.css" rel="stylesheet" type="text/css">
    <link href="css/counter.css" rel="stylesheet">
    <link href="css/tabsearchindex.css" rel="stylesheet">



</head>
<body>

<!--header-->
<?php include "inc/headd.php"; ?>
<!--header-->
<!--main-->
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" onclick="faidoutsearch()" id="faidoutsearch" style="padding: 3%">
    <h2 style="text-align: center;margin-bottom: 4%">انتخاب فریلنسرهای حرفه ای بر اساس فهرست موضوعی
    </h2>
    <!--cat1-->


       <?php

       $sql = "SELECT cat.id as cid,cat.name as cname from cat" ;
       $query = mysqli_query($db->connect(),$sql);
       while ( $results = mysqli_fetch_assoc( $query ) ){
          echo '<a><img src="img/leaf1.png" style="float: right;margin-left: 1%"><h3 style="color: #009900;direction: rtl">'.$results["cname"].'</h3></a><hr style="border-color: #ED7D31">';
       echo'<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 allcat" style="direction: rtl">';

       $cid=$results["cid"];
       $sql2= "SELECT subcat.name as sname from cat,subcat where subcat.cat_id=cat.id and subcat.cat_id=$cid" ;
       $query2 = mysqli_query($db->connect(),$sql2);
       while ( $results2 = mysqli_fetch_assoc( $query2 ) ){
      echo'<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12" style="direction: rtl"><ul><a href="#"><li>'.$results2["sname"].'</li></a></ul></div>';

}
      echo '</div>';

       }
       ?>










</div>
<!--main-->
<?php
echo file_get_contents("inc/footerr.php")
?>
<!--footer-->




</body>
<script>
    $(document).ready(function (e) {
        $("#flash").hover(function () {
                $(this).find('.fa-caret-down').css('display','none');
                $(this).find('.fa-caret-up').css('display','block');

            },
            function () {
                $(this).find('.fa-caret-down').css('display','block');
                $(this).find('.fa-caret-up').css('display','none');

            }
        )
    })
</script>
<!--tabsearch-->
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
<!--tabsearch-->




<script>

    $('#myInput').on("keyup keydown keypress paste",function (e) {
        var name = $('#myInput').val();

        if(name===""){
            $('#display').hide();
            $("#London").html("");
            $("#Paris").html("");

            return;
        }
        $.ajax({
            url: 'request/general/search.php',
            data: {
                name:name
            },
            dataType: 'json',
            type: 'POST',
            success: function (data) {
                $("#display").show();

                $("#London").html(data["username"]);
                $("#Paris").html(data["title"]);
                // $("#display").append(data["username"]);


            }
        });

    });

</script>
<script>
    $(document).ready(function (e) {
        $("#flash").hover(function () {
                $(this).find('.fa-caret-down').css('display','none');
                $(this).find('.fa-caret-up').css('display','block');

            },
            function () {
                $(this).find('.fa-caret-down').css('display','block');
                $(this).find('.fa-caret-up').css('display','none');

            }
        )
    })
</script>
</html>