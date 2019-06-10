<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>زیگورات</title>
    <script src="js/jq.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>    <script src="js/js.js"></script>
    <script src="js/myjs.js"></script>
    <script src="js/code.jq.js" type="text/javascript"></script>
    <link href="css/all.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">
    <script src="js/jq.min.js" type="text/javascript"></script>
    <link href="css/captcha.css" rel="stylesheet">


</head>
<?php
session_start();
?>
<body>
<!--header-->
<div class="col-lg-12 col-md-12 row" style="box-shadow: 0 0 4px 0 rgba(0,0,0,.08), 0 2px 4px 0 rgba(0,0,0,.12);background-color: white;margin-left: 0;z-index: 1;height: 80px">
    <p style="position: absolute;top: 35%;left: 3%">
        قبلاً ثبت نام کرده اید؟
        <a href="sign-in.php" style="color: #009900;cursor: pointer" >وارد شوید
        </a>
    </p>
    <a href="index.php">
    <img src="img/logo2.png" style="position: absolute;top: 15%;right: 3%">
    </a>
</div>
<!--header-->
<?php if($_GET['name']=="" || $_GET['family']=="" || $_GET['email']=="" ){
    header('location:login.php');

} ?>
<!--main-->

<div class="col-sm-12 col-lg-12 col-md-12 col-xs-12" style="background-color:#f2f2f2">
    <div class="col-md-offset-4 col-lg-offset-4 col-md-4 col-lg-4 col-sm-12 col-xs-12 boxlogin" >

        <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12" style="text-align: center;color: #999999;background-color: #e1e1e1;margin-bottom:4%">
            <h3>حساب کاربری خود را تکمیل کنید</h3>
            <h4>xxxx@email.com
            </h4>
        </div>
        <form  action="request/general/submit.php" method="post" name="form">

            <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12" style="width: 90%;margin-top: 3%;padding: 0;border-radius: 5px;background-color: #2196F3;text-align: center;margin-left: 5%">
            <input type="password" name="password" placeholder="رمز عبور" class="form-control " style="float: left;width: 92%">

            <i class="fas fa-lock iconlogin"  style="font-size: 20px;margin-top: 2%;color: #ffffff;"></i>
        </div>
            <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12" style="width: 90%;margin-top: 3%;padding: 0;border-radius: 5px;background-color: #2196F3;text-align: center;margin-left: 5%">
            <input type="text" name="username" placeholder="نام کاربری" class="form-control " style="float: left;width: 92%">
            <i class="fas fa-user-alt iconlogin"  style="font-size: 20px;margin-top: 2%;color: #ffffff;"></i>
        </div>

            <!--captcha-->
<!--            <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12" style="width: 90%;margin-top: 3%;padding: 0;border-radius: 5px;text-align: center;margin-left: 5%">-->
<!--                <br>-->
<!---->
<!---->
<!--                <img height="70" width="200" src="app8.php"/>-->
<!--                <span id="refresh-captcha"> 🔄 Refresh </span>-->
<!---->
<!--                    <p class="form-element">-->
<!--                        <input type="text" name="captcha" id="textcaptcha"/>-->
<!--                    </p>-->
<!--            </div>-->


            <p><img id="captcha" src="captchaa.php" width="160" height="45" border="1" alt="CAPTCHA">
                <small><a href="#" onclick="
    document.getElementById('captcha').src = 'captchaa.php?' + Math.random();
    document.getElementById('captcha_code_input').value = '';
    return false;
   ">refresh</a></small></p>
            <p><input id="captcha_code_input" type="text" name="captcha" size="6" maxlength="5" onkeyup="this.value = this.value.replace(/[^\d]+/g, '');"> </p>






            <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12" style=";margin-top: 3%">
                <input type="checkbox" style="float: right;margin-left: 2%" id="myCheck2" onclick="myFunction2()">
                <p style=";top: 35%;left: 3%">
                    شرایط و ضوابط زیگورات مارکت شامل
                    <a href="rules.php" style="color: #009900;cursor: pointer" >قوانین و حریم خصوصی
                    </a>
                    را خوانده ام و قبول دارم.
                </p>
            </div>

            <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12" style="text-align: center;margin-top: 5%;margin-bottom: 5%">
                <a >
                    <button onclick="return validateForm()" type="submit" name="submit" class="btn" disabled="disabled" id="text2"  style="background-color: #2196F3;color: white;width: 30%">ادامه</button>

                </a>
            </div>

            <input type="text" name="family" value="<?php echo $_GET['family']?>"   style="display:none">
            <input type="text" name="name" value="<?php echo $_GET['name']?>"  style="display:none">
            <input type="text" name="email" value="<?php echo $_GET['email']?>"  style="display:none">

        </form>



            <script>
                $(document).ready(function () {
                    $('#refresh-captcha').click(function () {
                        $("#captcha").attr("src", "app8.php?timestamp=" + new Date().getTime());
                    });
                });

            </script>

            <!--captcha-->




    </div>
</div>

<!--main-->
<?php
echo file_get_contents("inc/footerr.php")
?>
<!--footer-->




</body>

</html>