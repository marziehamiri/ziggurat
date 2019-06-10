<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>زیگورات</title>
    <script src="js/jq.js"></script>
    <script src="js/js.js"></script>
    <script src="js/modaljq.js"></script>
    <script src="js/modaljs.js"></script>

    <script src="js/myjs.js"></script>

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


</head>
<body>
<!--header-->
<div class="col-lg-12 col-md-12 row" style="box-shadow: 0 0 4px 0 rgba(0,0,0,.08), 0 2px 4px 0 rgba(0,0,0,.12);background-color: white;margin-left: 0;z-index: 1;height: 80px">

    <a href="index.php">

        <img src="img/logo2.png" style="position: absolute;top: 15%;right: 3%">
    </a>
</div>
<!--header-->

<!--main-->

<div class="col-sm-12 col-lg-12 col-md-12 col-xs-12" style="background-color:#f2f2f2">
    <div class="col-md-offset-4 col-lg-offset-4 col-md-4 col-lg-4 col-sm-12 col-xs-12 boxlogin" >

        <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12" style="text-align: center;color: #999999;;margin-bottom:4%">
            <h3>بازیابی رمز عبور</h3>
        </div>

        <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12">
            <label>نام کاربری یا ایمیل</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12" style="margin-top: 3%;margin-bottom: 3%">
            <label>کد زیر را وارد کنید</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12">

        </div>


        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="background-color: #f9f9f9;;text-align: center;border-top: 1px solid #ebebeb">

            <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12" style="text-align: center;margin-top: 5%;margin-bottom: 5%">
                <a >
                    <button class="btn" data-toggle="modal" data-target="#myModal" style="background-color: #009900;color: white;width: 46%">ارسال ایمیل بازیابی رمز عبور</button>

                </a>
            </div>
        </div>
    </div>
</div>

<!--main-->
<!--footer-->
<?php
echo file_get_contents("inc/footerr.php")
?>
<!--footer-->

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="direction: rtl">

            <div class="modal-body" style="padding: 5%">
                <p style="text-align: justify">ایمیلی به نشانی شما فرستاده شده است. این ایمیل حاوی لینکی است که برای فعال سازی باید روی آن کلیک کنید.
                    لطفا توجه کنید که در هر 2 ساعت تنها یک بار می توانید درخواست کلمه عبور جدید ارسال کنید.

                    اگر ایمیلی با این مشخصات در باکس خود دریافت نکردید، لطفا پوشه اسپم خود را چک کرده و یا مجددا تلاش کنید.</p>
            </div>
            <div class="modal-footer" style="text-align: center;">
                <a href="index.php">
                <button type="button" class="btn btn-default"  style="color: white;background-color: #009900">بازگشت به صفحه اصلی</button>
                </a>
            </div>
        </div>

    </div>
</div>



</body>
</html>