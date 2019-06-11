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


</head>
<body>
<!--header-->
<div class="col-lg-12 col-md-12 row" style="box-shadow: 0 0 4px 0 rgba(0,0,0,.08), 0 2px 4px 0 rgba(0,0,0,.12);background-color: white;margin-left: 0;z-index: 1;height: 80px">
    <p style="position: absolute;top: 35%;left: 3%">
        قبلاً ثبت نام کرده اید؟
        <a href="sign-in.php" style="color: #009900;cursor: pointer" >وارد شوید
        </a>
    </p>
    <a href="index.php">
    <img src="img/Logoart.png" style="position: absolute;top: 15%;right: 3%">
    </a>
</div>
<!--header-->

<!--main-->

<div class="col-sm-12 col-lg-12 col-md-12 col-xs-12" style="background-color:#f2f2f2">
    <div class="col-md-offset-4 col-lg-offset-4 col-md-4 col-lg-4 col-sm-12 col-xs-12 boxlogin" >

        <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12" style="text-align: center;color: #999999;background-color: #e1e1e1;margin-bottom:4%">
            <h3>ثبت نام</h3>
        </div>
        <form method="get" action="continuelogin.php">


            <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12" style="width: 90%;margin-top: 3%;padding: 0;border-radius: 5px;background-color: #2196F3;text-align: center;margin-left: 5%">
                <input type="text" name="family" class="form-control" placeholder="نام خانوادگی"  style="float: left;width: 92%">
            <i class="fas fa-user iconlogin"  style="font-size: 20px;margin-top: 2%;color: #ffffff;"></i>
            </div>
            <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12" style="width: 90%;margin-top: 3%;padding: 0;border-radius: 5px;background-color: #2196F3;text-align: center;margin-left: 5%">
                <input type="text" name="name" class="form-control " placeholder="نام "  style="float: left;width: 92%" >
                <i class="fas fa-user iconlogin" style="font-size: 20px;margin-top: 2%;color: #ffffff;"></i>

            </div>


        <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12" style="width: 90%;margin-top: 3%;padding: 0;border-radius: 5px;background-color: #2196F3;text-align: center;margin-left: 5%">
            <input type="email" name="email" placeholder="ایمیل" class="form-control " style="float: left;width: 92%">
            <i class="fas fa-envelope iconlogin" style="font-size: 20px;margin-top: 2%;color: #ffffff;"></i>
        </div>
        <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12" style="text-align: center;margin-top: 5%;margin-bottom: 5%">
           <a>
               <button class="btn" style="background-color: #2196F3;color: white;width: 30%">ادامه</button>

           </a>
        </div>
        <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12" style="text-align: center;margin-bottom: 5%">
            <p>ثبت نام از طریق</p>
            <a href="#">
                <i class="fab fa-facebook-square " style="font-size: 25px;color: #3e5a97"></i>
            </a>
            <a href="#">
                <i class="fab fa-twitter-square" style="font-size: 25px;color: #0c8de2"></i>
            </a>
            <a href="#">
                <i class="fab fa-google-plus-square" style="font-size: 25px;color: #dc4c3c"></i>
            </a>
            <a href="#">
                <i class="fab fa-linkedin" style="font-size: 25px;color:#0077b5 "></i>
            </a>

        </div>

</form>
    </div>
</div>

<!--main-->
<!--footer-->
<?php
echo file_get_contents("inc/footerr.php")
?>
<!--footer-->




</body>
</html>