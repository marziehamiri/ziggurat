<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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
<div class="col-sm-12 col-xs-12 col-md-12 col-lg-12" onclick="faidoutsearch()" id="faidoutsearch" style="text-align: center;direction: rtl">
    <h3 style="color: #00aeef;">ضمانت حسن انجام کار(سیستم گروگذاری)</h3>
    <p style="text-align: justify;font-size: 18px;margin: 5%">
        سیستم ضمانت حسن انجام کار زیگورات مارکت (سیستم گروگذاری) به این منظور طراحی شده تا کارفرما و مجری هر دو با خیالی آسوده با هم کار کنند بطوریکه کارفرما هیچ گونه نگرانی از پایین آمدن کیفیت انجام کار توسط مجری را ندارد و مجری هم خیالش از بابت پرداخت به موقع حق الزحمه اش توسط کارفرما راحت است. نحوه کارکرد این سیستم به این صورت است که بعد از آنکه یک کارفرما پیشنهاد قیمت یک مجری را پذیرفت، می‌بایست مبلغ پیشنهاد شده توسط مجری را از طریق پرداخت آنلاین به حساب زیگورات مارکت واریز نماید و به این طریق این مبلغ را نزد زیگورات مارکت گروگذاری نماید. پس از اتمام پروژه و تحویل گرفتن نتایج توسط کارفرما، تنها در صورت تایید و چراغ سبز او وجه گروگذاری شده به حساب مجری واریز خواهد شد. با این روش، مجری خود را موظف می بیند تا کار را با بهترین کیفیت ممکن انجام دهد و به این ترتیب حسن انجام کار توسط مجری تضمین می شود.
        پس از اتمام پروژه و تحویل گرفتن نتایج توسط کارفرما، چنانچه او از نتایج راضی نباشد، توصیه می گردد با مجری وارد مذاکره شود و از او بخواهد در صورت امکان نظرات او را به کار انجام شده اعمال نماید تا اینکه نتایج بدست آمده باب میل او باشد. در مواردی که کارفرما و مجری بر روی نتایج به توافق نرسند، کارفرما با ثبت یک تیکت داوری در سیستم زیگورات مارکت، تقاضای داوری بین خود و مجری را می دهد که در صورتی که تیم فنی زیگورات مارکت حق را به کارفرما بدهد، پول گروگذاری شده نزد زیگورات مارکت پس از کسر هزینه های نقل و انتقال بین بانکی به پیمانکار برگشت داده خواهد شد. اگر پس از داوری زیگورات مارکت، هر کدام از طرفین دعوی از رای صادر شده توسط زیگورات مارکت ناراضی باشند، شخص ناراضی می تواند از طریق دادگاه های صالحه مستقر در شهر اهواز شکایت خود را ثبت نماید و لازم به ذکر است که طبق قرارداد زیگورات مارکت با کارفرمایان و مجریان، به این گونه پرونده ها تنها در شعب دادگاه های صالحه شهر اهواز قابل پیگیری می باشند و در شهرهای دیگر امکان پذیر نمی باشد.
        <b style="color: #00aeef">
            چنانچه به هر دلیلی و در هر مرحله ای از داوری حق به جانب مجری باشد، کارفرما می تواند بدون پرداخت هزینه پروژه خود را در زیگورات مارکت مجدداً ثبت نمايد.
        </b>

    </p>
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