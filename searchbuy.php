<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="js/jq.js"></script>
    <script src="js/js.js"></script>
    <script src="js/myjs.js"></script>
    <script src="js/dropdowntopmenu.js"></script>

    <link href="css/Buydropcss.css" rel="stylesheet" id="bootstrap-css">
    <script src="js/Buydropjq.js"></script>

    <link href="css/all.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">
    <link href="css/dropdowntopmenu.css" rel="stylesheet">
    <link href="css/megamenu.css" rel="stylesheet">
    <link href="css/BuySell.css" rel="stylesheet">
    <link href="css/BuySelldropdown1.css">
    <link href="css/tabsearchindex.css" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


</head>
<body>
<!--header-->
<?php include "inc/headd.php"; ?>
<!--header-->

<!--main-->

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" onclick="faidoutsearch()" id="faidoutsearch" style="text-align: center;direction: rtl">

<hr style="border-color: #2196F3;margin-top: 3%">

    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" >

        <div class="col-md-2 col-lg-2 col-xs-2 col-sm-2 dropdown" style="float: right">
            <img src="img/file.png">
            <a class=" dropdown-toggle" style="cursor: pointer;color: black" type="button" data-toggle="dropdown">دسته بندی
                <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#">HTML</a></li>
                <li><a href="#">CSS</a></li>
                <li><a href="#">JavaScript</a></li>
            </ul>
        </div>


    </div>
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="background-color: whitesmoke;border-radius: 5px;border: 1px solid #e6e2e2;padding: 3%">

<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="width: 90%;margin: 0 6%;direction: rtl;background-color: white;border-radius: 5px;padding: 2%;margin-bottom: 2%">
    <div class="col-md-7 col-lg-7 col-xs-12 col-sm-12">
<p style="text-align: right">دسته بندی ها :
<span>نام دسته بندی</span>
        <span style="color: green;float: left;font-size: 20px"><b> xxxxتومان</b></span>
</p>
        <h3 style="text-align: right;color: #5c5a5a">عنوان پروژه.....</h3>
        <br>
        <br>
        <br>

        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: right">
            <p>ویژگی ها : <span> ویژگی</span></p>
            <p>فروشنده: <span> نام فروشنده</span></p>
        </div>

    </div>
    <div class="col-md-5 col-lg-5 col-xs-12 col-sm-12" style="padding: 0;">
        <img src="img/ultra1.png" style="width: 90%">

    </div>

</div>

        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="width: 90%;margin: 0 6%;direction: rtl;background-color: white;border-radius: 5px;padding: 2%">
            <div class="col-md-7 col-lg-7 col-xs-12 col-sm-12">
                <p style="text-align: right">دسته بندی ها :
                    <span>نام دسته بندی</span>
                    <span style="color: green;float: left;font-size: 20px"><b> xxxxتومان</b></span>
                </p>
                <h3 style="text-align: right;color: #5c5a5a">عنوان پروژه.....</h3>
                <br>
                <br>
                <br>

                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: right">
                    <p>ویژگی ها : <span> ویژگی</span></p>
                    <p>فروشنده: <span> نام فروشنده</span></p>
                </div>

            </div>
            <div class="col-md-5 col-lg-5 col-xs-12 col-sm-12" style="padding: 0;">
                <img src="img/ultra1.png" style="width: 90%">

            </div>

        </div>




    </div>





</div>

<!--main-->
<?php
echo file_get_contents("inc/footerr.php")
?>
<!--footer-->

<!--tab-->
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
</script>
<!--tab-->

<!--slider-->
<script>
    $(document).ready(function() {
        $('#media').carousel({
            pause: true,
            interval: false,
        });
    });
</script>

<!--slider-->

<!--slider1-->
<script>
    $(document).ready(function() {
        $('#media1').carousel({
            pause: true,
            interval: false,
        });
        $("#flash").hover(function () {
                $(this).find('.caret-down').css('display','none');
                $(this).find('.caret-up').css('display','block');

            },
            function () {
                $(this).find('.caret-down').css('display','block');
                $(this).find('.caret-up').css('display','none');

            }
        )
    });
</script>

<!--slider1-->

</body>

</html>