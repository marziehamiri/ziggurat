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
<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" onclick="faidoutsearch()" id="faidoutsearch" style="margin: 3% 0;color: #00aeef;text-align: center;font-size: 25px;direction: rtl">

    <!--radio2-->
    <label class="Radio-label containe">سالیانه (40% تخفیف)
        <input checked="checked" id="year" type="radio" onclick="tariff()" name="tariffs" value="year" class="Radio-input" >

        <span class="checkmark"></span></label>

    <div class="col-sm-12 col-lg-12 col-xs-12 col-sm-12" id="radio2" style="direction: rtl;text-align: center">

        <div class="col-sm-6 col-xs-6 col-md-3 ncol-lg-3 sub" style="color: #e2bc50" >
            <a href="#tariffs1">
                <div id="gold1" onclick="goldtariffs1()" class="col-sm-12 col-lg-12 col-xs-12 col-sm-12 vertical" style="border: 5px solid #e2bc50;">


                <?php
                $sql = "SELECT * from tariffsgold" ;
                $query = mysqli_query($db->connect(),$sql);
                while ( $results = mysqli_fetch_assoc( $query ) ){
                    echo '
                <h3 >مشترک طلایی</h3>
                <img src="'.$results["img"].'">
                <h4 style="margin-bottom: 14%">'.$results["description1"].'
                 تومان سالیانه
                 </h4>
                ';
                }
                ?>

            </div>
            </a>

            <p style="color: #00aeef;font-size: 18px;text-align: justify">
                – دریافت پروفایل با نشان طلایی
                <br>
                – بدون محدودیت در ارسال پیشنهاد
                <br>
                – تخفیف سه درصدی کمیسیون

            </p></div>
        <div class="col-sm-6 col-xs-6 col-md-3 ncol-lg-3 sub" style="color: #adadad" >
            <a href="#tariffs1">
            <div id="silver1" onclick="silvertariffs1()" class="col-sm-12 col-lg-12 col-xs-12 col-sm-12 vertical" style="border: 5px solid #adadad;">

                <?php
                $sql1 = "SELECT * from tariffssilver" ;
                $query1 = mysqli_query($db->connect(),$sql1);
                while ( $results1 = mysqli_fetch_assoc( $query1 ) ){
                    echo '
                <h3 >مشترک نقره ای</h3>
                <img src="'.$results1["img"].'">
                <h4 style="margin-bottom: 14%">'.$results1["description1"].'
                 تومان سالیانه
                 </h4>
                ';
                }
                ?>

            </div>
            </a>
            <p style="color: #00aeef;font-size: 18px;text-align: justify">
                – دریافت پروفایل با نشان نقره ای
                <br>
                – امکان ارسال 150 پیشنهاد در ماه
                <br>
                – تخفیف دو درصدی کمیسیون



            </p>
        </div>
        <div class="col-sm-6 col-xs-6 col-md-3 ncol-lg-3 sub" style="color: #d39f7b">
            <a href="#tariffs1">
            <div id="boronze1" onclick="boronzetariffs1()" class="col-sm-12 col-lg-12 col-xs-12 col-sm-12 vertical" style="border: 5px solid #d39f7b;">

                <?php

                $sql2 = "SELECT * from tariffsbronze" ;
                $query2 = mysqli_query($db->connect(),$sql2);
                while ( $results2 = mysqli_fetch_assoc( $query2 ) ){
                    echo '
               <h3 >مشترک برنزی</h3>
                <img src="'.$results2["img"].'">
                <h4 style="margin-bottom: 16%">'.$results2["description1"].'
                 تومان سالیانه
                 </h4>
                ';
                }


                ?>


            </div>
            </a><p style="color: #00aeef;font-size: 18px;text-align: justify">
                – دریافت پروفایل با نشان برنزی
                <br>
                – امکان ارسال 80 پیشنهاد در ماه
                <br>
                – تخفیف یک درصدی کمیسیون



            </p>
        </div>
        <div class="col-sm-6 col-xs-6 col-md-3 ncol-lg-3 sub" style="color: #d2c11c">
            <a href="#tariffs1">

            <div id="normal1" onclick="normaltariffs1()" class="col-sm-12 col-lg-12 col-xs-12 col-sm-12 vertical" style="padding: 19% 0;border: 5px solid #d2c11c;">
                <h3 >مشترک معمولی</h3>
                <img src="img/standard.png">
                <h4 style="margin-bottom: 16%">رایگان</h4>
            </div>
            </a>


        <p style="color: #00aeef;font-size: 18px;text-align: justify">
            امکان ارسال 10 پیشنهاد در ماه

        </p>
        </div>
        <div id="tariffs1" style="display: none" class="col-lg-offset-3 col-md-offset-3 col-xs-12 col-md-6 col-lg-6 col-sm-12">
            <hr style="border: 1px solid #c3c0c0;">
            <h5 style="color:#397ebb;text-align: right" id="tariffs1-1">مبلغ قابل پرداخت : &nbsp;
                0 ریال</h5>
            <br>
            <button style="width: 25%" class="btn Upgrade" >پرداخت</button>

        </div>

</div>
    <!--radio2-->
    <!--radio1-->
    <label  class="Radio-label containe" >1 ماهه
        <input id="month" onclick="tariff()" type="radio" name="tariffs" value="month" class="Radio-input"  >

        <span class="checkmark"></span></label>

    <div class="col-sm-12 col-lg-12 col-xs-12 col-sm-12" id="radio1" style="display: none;direction: rtl;text-align: center">

        <div class="col-sm-6 col-xs-6 col-md-3 ncol-lg-3 sub" style="color: #e2bc50" >
            <a href="#tariffs2">
                <div id="gold2" onclick="goldtariffs2()" class="col-sm-12 col-lg-12 col-xs-12 col-sm-12 vertical" style="border: 5px solid #e2bc50;">

                <?php
                $sql9 = "SELECT * from tariffsgold" ;
                $query9 = mysqli_query($db->connect(),$sql9);
                while ( $results9 = mysqli_fetch_assoc( $query9 ) ){
                    echo '
                <h3 >مشترک طلایی</h3>
                <img src="'.$results9["img"].'">
                <h4 style="margin-bottom: 14%">'.$results9["description2"].'
                 تومان 1 ماهه
                 </h4>
                ';
                }
                ?>
            </div>
            </a>
            <p style="color: #00aeef;font-size: 18px;text-align: justify">
                – دریافت پروفایل با نشان طلایی
                <br>
                – بدون محدودیت در ارسال پیشنهاد
                <br>
                – تخفیف سه درصدی کمیسیون

            </p></div>
        <div class="col-sm-6 col-xs-6 col-md-3 ncol-lg-3 sub" style="color: #adadad" >
            <a href="#tariffs2">
                <div id="silver2" onclick="silvertariffs2()" class="col-sm-12 col-lg-12 col-xs-12 col-sm-12 vertical" style="border: 5px solid #adadad;">

                <?php
                $sql6 = "SELECT * from tariffssilver" ;
                $query6 = mysqli_query($db->connect(),$sql6);
                while ( $results6 = mysqli_fetch_assoc( $query6 ) ){
                    echo '
                <h3 >مشترک نقره ای</h3>
                <img src="'.$results6["img"].'">
                <h4 style="margin-bottom: 14%">'.$results6["description2"].'
                 تومان 1 ماهه
                 </h4>
                ';
                }
                ?>

            </div>

            </a>
            <p style="color: #00aeef;font-size: 18px;text-align: justify">
                – دریافت پروفایل با نشان نقره ای
                <br>
                – امکان ارسال 150 پیشنهاد در ماه
                <br>
                – تخفیف دو درصدی کمیسیون



            </p>
        </div>
        <div class="col-sm-6 col-xs-6 col-md-3 ncol-lg-3 sub" style="color: #d39f7b">
            <a href="#tariffs2">
                <div id="boronze2" onclick="boronzetariffs2()" class="col-sm-12 col-lg-12 col-xs-12 col-sm-12 vertical" style="border: 5px solid #d39f7b;">


                <?php
                $sql3 = "SELECT * from tariffsbronze" ;
                $query3 = mysqli_query($db->connect(),$sql3);
                while ( $results3 = mysqli_fetch_assoc( $query3 ) ){
                    echo '
               <h3 >مشترک برنزی</h3>
                <img src="'.$results3["img"].'">
                <h4 style="margin-bottom: 16%">'.$results3["description2"].'
                 تومان 1 ماهه
                 </h4>
                ';
                }
                ?>

            </div>
            </a>
                <p style="color: #00aeef;font-size: 18px;text-align: justify">
                – دریافت پروفایل با نشان برنزی
                <br>
                – امکان ارسال 80 پیشنهاد در ماه
                <br>
                – تخفیف یک درصدی کمیسیون



            </p>
        </div>
        <div class="col-sm-6 col-xs-6 col-md-3 ncol-lg-3 sub" style="color: #d2c11c">
            <a href="#tariffs2">
                <div id="normal2" onclick="normaltariffs2()" class="col-sm-12 col-lg-12 col-xs-12 col-sm-12 vertical" style="padding: 19% 0;border: 5px solid #d2c11c;">
                <h3 >مشترک معمولی</h3>
                <img src="img/standard.png">
                <h4 style="margin-bottom: 16%">رایگان</h4>
            </div>
            </a>


            <p style="color: #00aeef;font-size: 18px;text-align: justify">
                امکان ارسال 10 پیشنهاد در ماه

            </p>
        </div>
        <div id="tariffs2" style="display: none" class="col-lg-offset-3 col-md-offset-3 col-xs-12 col-md-6 col-lg-6 col-sm-12">
            <hr style="border: 1px solid #c3c0c0;">
            <h5 style="color:#397ebb;text-align: right">مبلغ قابل پرداخت : &nbsp;
                0 ریال</h5>
            <br>
            <button style="width: 25%" class="btn Upgrade" >پرداخت</button>

        </div>
    </div>
    <!--radio1-->
    <!--radio3-->
    <label  class="Radio-label containe" >3 ماهه
        <input id="month3" onclick="tariff()" type="radio" name="tariffs" value="month3" class="Radio-input"  >

        <span class="checkmark"></span></label>

    <div class="col-sm-12 col-lg-12 col-xs-12 col-sm-12" id="radio3" style="display: none;direction: rtl;text-align: center">

        <div class="col-sm-6 col-xs-6 col-md-3 ncol-lg-3 sub" style="color: #e2bc50" >
            <a href="#tariffs3">
                <div id="gold3" onclick="goldtariffs3()" class="col-sm-12 col-lg-12 col-xs-12 col-sm-12 vertical" style="border: 5px solid #e2bc50;">

                <?php
                $sql10 = "SELECT * from tariffsgold" ;
                $query10 = mysqli_query($db->connect(),$sql10);
                while ( $results10 = mysqli_fetch_assoc( $query10 ) ){
                    echo '
                <h3 >مشترک طلایی</h3>
                <img src="'.$results10["img"].'">
                <h4 style="margin-bottom: 14%">'.$results10["description3"].'
                 تومان 3 ماهه
                 </h4>
                ';
                }
                ?>
            </div>
            </a>
            <p style="color: #00aeef;font-size: 18px;text-align: justify">
                – دریافت پروفایل با نشان طلایی
                <br>
                – بدون محدودیت در ارسال پیشنهاد
                <br>
                – تخفیف سه درصدی کمیسیون

            </p></div>
        <div class="col-sm-6 col-xs-6 col-md-3 ncol-lg-3 sub" style="color: #adadad" >
            <a href="#tariffs3">
                <div id="silver3" onclick="silvertariffs3()"  class="col-sm-12 col-lg-12 col-xs-12 col-sm-12 vertical" style="border: 5px solid #adadad;">


                <?php
                $sql7 = "SELECT * from tariffssilver" ;
                $query7 = mysqli_query($db->connect(),$sql7);
                while ( $results7 = mysqli_fetch_assoc( $query7 ) ){
                    echo '
                        <h3 >مشترک نقره ای</h3>
                <img src="'.$results7["img"].'">
                <h4 style="margin-bottom: 14%">'.$results7["description3"].'
                 تومان 3 ماهه
                 </h4>
                ';
                }
                ?>

            </div>
            </a><p style="color: #00aeef;font-size: 18px;text-align: justify">
                – دریافت پروفایل با نشان نقره ای
                <br>
                – امکان ارسال 150 پیشنهاد در ماه
                <br>
                – تخفیف دو درصدی کمیسیون



            </p>
        </div>
        <div class="col-sm-6 col-xs-6 col-md-3 ncol-lg-3 sub" style="color: #d39f7b">
            <a href="#tariffs3">
                <div id="boronze3" onclick="boronzetariffs3()"  class="col-sm-12 col-lg-12 col-xs-12 col-sm-12 vertical" style="border: 5px solid #d39f7b;">


                <?php
                $sql4 = "SELECT * from tariffsbronze" ;
                $query4 = mysqli_query($db->connect(),$sql4);
                while ( $results4 = mysqli_fetch_assoc( $query4 ) ){
                    echo '
                  <h3 >مشترک برنزی</h3>
                <img src="'.$results4["img"].'">
                <h4 style="margin-bottom: 16%">'.$results4["description3"].'
                 تومان 3 ماهه
                 </h4>
                ';
                }
                ?>

            </div>
            </a><p style="color: #00aeef;font-size: 18px;text-align: justify">
                – دریافت پروفایل با نشان برنزی
                <br>
                – امکان ارسال 80 پیشنهاد در ماه
                <br>
                – تخفیف یک درصدی کمیسیون



            </p>
        </div>
        <div class="col-sm-6 col-xs-6 col-md-3 ncol-lg-3 sub" style="color: #d2c11c">

            <a href="#tariffs3">
                <div id="normal3" onclick="normaltariffs3()"  class="col-sm-12 col-lg-12 col-xs-12 col-sm-12 vertical" style="padding: 19% 0;border: 5px solid #d2c11c;">
                <h3 >مشترک معمولی</h3>
                <img src="img/standard.png">
                <h4 style="margin-bottom: 16%">رایگان</h4>
            </div>

            </a>

            <p style="color: #00aeef;font-size: 18px;text-align: justify">
                امکان ارسال 10 پیشنهاد در ماه

            </p>
        </div>
        <div id="tariffs3" style="display: none" class="col-lg-offset-3 col-md-offset-3 col-xs-12 col-md-6 col-lg-6 col-sm-12">
            <hr style="border: 1px solid #c3c0c0;">
            <h5 style="color:#397ebb;text-align: right">مبلغ قابل پرداخت : &nbsp;
                0 ریال</h5>
            <br>
            <button style="width: 25%" class="btn Upgrade" >پرداخت</button>

        </div>
    </div>
    <!--radio3-->
    <!--radio4-->
    <label  class="Radio-label containe" >6 ماهه
        <input id="month6" onclick="tariff()" type="radio" name="tariffs" value="month6" class="Radio-input"  >

        <span class="checkmark"></span></label>

    <div class="col-sm-12 col-lg-12 col-xs-12 col-sm-12" id="radio4" style="display: none;direction: rtl;text-align: center">

        <div class="col-sm-6 col-xs-6 col-md-3 ncol-lg-3 sub" style="color: #e2bc50" >
            <a href="#tariffs4">
                <div  id="gold4" onclick="goldtariffs4()"  class="col-sm-12 col-lg-12 col-xs-12 col-sm-12 vertical" style="border: 5px solid #e2bc50;">

                <?php
                $sql11 = "SELECT * from tariffsgold" ;
                $query11 = mysqli_query($db->connect(),$sql11);
                while ( $results11 = mysqli_fetch_assoc( $query11 ) ){
                    echo '
                       <h3 >مشترک طلایی</h3>
                <img src="'.$results11["img"].'">
                <h4 style="margin-bottom: 14%">'.$results11["description4"].'
                 تومان 6 ماهه
                 </h4>
                ';
                }
                ?>
            </div>
            </a>
            <p style="color: #00aeef;font-size: 18px;text-align: justify">
                – دریافت پروفایل با نشان طلایی
                <br>
                – بدون محدودیت در ارسال پیشنهاد
                <br>
                – تخفیف سه درصدی کمیسیون

            </p></div>
        <div class="col-sm-6 col-xs-6 col-md-3 ncol-lg-3 sub" style="color: #adadad" >
            <a href="#tariffs4">
                <div  id="silver4" onclick="silvertariffs4()"  class="col-sm-12 col-lg-12 col-xs-12 col-sm-12 vertical" style="border: 5px solid #adadad;">

                <?php
                $sql8 = "SELECT * from tariffssilver" ;
                $query8 = mysqli_query($db->connect(),$sql8);
                while ( $results8 = mysqli_fetch_assoc( $query8 ) ){
                    echo '
                       <h3 >مشترک نقره ای</h3>
                <img src="'.$results8["img"].'">
                <h4 style="margin-bottom: 14%">'.$results8["description4"].'
                 تومان 1 ماهه
                 </h4>
                ';
                }
                ?>

            </div>
            </a>
                <p style="color: #00aeef;font-size: 18px;text-align: justify">
                – دریافت پروفایل با نشان نقره ای
                <br>
                – امکان ارسال 150 پیشنهاد در ماه
                <br>
                – تخفیف دو درصدی کمیسیون



            </p>
        </div>
        <div class="col-sm-6 col-xs-6 col-md-3 ncol-lg-3 sub" style="color: #d39f7b">
            <a href="#tariffs4">
                <div id="boronze4" onclick="boronzetariffs4()"   class="col-sm-12 col-lg-12 col-xs-12 col-sm-12 vertical" style="border: 5px solid #d39f7b;">


                <?php
                $sql5 = "SELECT * from tariffsbronze" ;
                $query5 = mysqli_query($db->connect(),$sql5);
                while ( $results5 = mysqli_fetch_assoc( $query5 ) ){
                    echo '
                 <h3 >مشترک برنزی</h3>
                <img src="'.$results5["img"].'">
                <h4 style="margin-bottom: 16%">'.$results5["description4"].'
                 تومان 6 ماهه
                 </h4>
                ';
                }
                ?>

            </div>
            </a><p style="color: #00aeef;font-size: 18px;text-align: justify">
                – دریافت پروفایل با نشان برنزی
                <br>
                – امکان ارسال 80 پیشنهاد در ماه
                <br>
                – تخفیف یک درصدی کمیسیون



            </p>
        </div>
        <div class="col-sm-6 col-xs-6 col-md-3 ncol-lg-3 sub" style="color: #d2c11c">
            <a href="#tariffs4">
                <div  id="normal4" onclick="normaltariffs4()"  class="col-sm-12 col-lg-12 col-xs-12 col-sm-12 vertical" style="padding: 19% 0;border: 5px solid #d2c11c;">
                <h3 >مشترک معمولی</h3>
                <img src="img/standard.png">
                <h4 style="margin-bottom: 16%">رایگان</h4>
            </div>
            </a>


            <p style="color: #00aeef;font-size: 18px;text-align: justify">
                امکان ارسال 10 پیشنهاد در ماه

            </p>
        </div>
        <div id="tariffs4" style="display: none" class="col-lg-offset-3 col-md-offset-3 col-xs-12 col-md-6 col-lg-6 col-sm-12">
            <hr style="border: 1px solid #c3c0c0;">
            <h5 style="color:#397ebb;text-align: right">مبلغ قابل پرداخت : &nbsp;
                0 ریال</h5>
            <br>
            <button style="width: 25%" class="btn Upgrade" >پرداخت</button>

        </div>
    </div>
    <!--radio4-->
    </div>
<!--main-->
<!--footer-->
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
</html>