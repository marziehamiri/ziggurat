<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>زیگورات</title>
    <script src="js/jq.js"></script>
    <link rel="stylesheet" href="TimeCircles-master/timercss.css">
    <link rel="stylesheet" href="TimeCircles-master/inc/TimeCircles.css" />
    <script src="js/js.js"></script>
    <script src="js/myjs.js"></script>
    <script src="js/dropdowntopmenu.js"></script>
    <link href="css/dropdowntopmenu.css" rel="stylesheet">
    <link href="css/megamenu.css" rel="stylesheet">
    <script src="js/code.jq.js" type="text/javascript"></script>
    <script src="js/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>
    <link href="css/all.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">
    <script src="assets/js/script.js"></script>
    <script src="assets/countdown/jquery.countdown.js"></script>
    <link href="assets/countdown/jquery.countdown.css" rel="stylesheet">


    <script src="js/jq.min.js" type="text/javascript"></script>
    <script src="js/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>
    <link href="css/tabsearchindex.css" rel="stylesheet">


</head>
<body>
<!--header-->
<?php include "inc/headd.php"; ?>
<!--header-->
<!--main-->

<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" onclick="faidoutsearch()" id="faidoutsearch" style="background-color: #f2f2f2">

    <div class="col-md-offset-1 col-lg-offset-1 col-md-10 col-lg-10 col-sm-12 col-xs-12" style="margin-top: 8%;padding: 0;background-color: white; display: flex;   box-shadow: 0 0 4px 0 rgba(0,0,0,.08), 0 2px 4px 0 rgba(0,0,0,.12);margin-bottom: 5%">
        <div class="col-md-3 col-lg-3 col-xs-12 col-sm-3" style="border-right: 1px solid #dbd8d899;text-align: center;background-color: #F9F9F9;padding: 0">
    <a href="Project.php">
    <button class="btn" style="margin-top: 5%;background-color: #2196F3;color: white;box-shadow: 0 0 4px 0 rgba(0,0,0,.08), 0 2px 4px 0 rgba(0,0,0,.12);">تعریف پروژه جدید</button><br>
    </a>
    <button class="btn" style="margin-top: 5%;margin-bottom: 5%;background-color: white;color: #2196F3;box-shadow: 0 0 4px 0 rgba(0,0,0,.08), 0 2px 4px 0 rgba(0,0,0,.12);">ارسال یک پیشنهاد</button>
            <hr>
            <label style="color: #2196F3;">مبلغ پروژه</label>


    <!--bod-->

                    <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12" style="border-bottom: 1px solid #e8e0e0;background-color: #f9f9f9;" >
                     <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12" style="padding-left: 0" >



                      <!--timer-->
                      <div id="timer" class="col-md-12 col-xs-12 col-lg-12 col-sm-12 timdiv" style="padding: 0;margin-top: 3%;direction: ltr;line-height: 2;margin-bottom: 2%;text-align: center;">
                          زمان باقی مانده
                      <div id="countdown" style="direction: ltr"></div>
<!--		               <p id="note"></p>-->

                      </div>

                       <!--timer-->
                     </div>
                     <!--option-->
                     <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12" style="color: #FFFFFF;padding: 0">
                     
                     <label style="background-color: #e2c784;border-radius: 5px;margin: 5%;width: 90px;padding: 1%">ستاره دار</label>
                     <label style="background-color: #00b050;border-radius: 5px;margin: 5%;width: 90px;padding: 1%;">استخدامی</label>
                     <label style="background-color: #006666;border-radius: 5px;margin: 5%;width: 90px;padding: 1%;">شرکتی</label>
                     <label style="background-color: #ff7300;border-radius: 5px;margin: 5%;width: 90px;padding: 1%;">فوری</label>
                     <label style="background-color: #4774b7;border-radius: 5px;margin: 5%;width: 90px;padding: 1%;">برجسته</label>
                     <label style="background-color: #00b0f0;border-radius: 5px;margin: 5%;width: 90px;padding: 1%;">ویژه</label>
                     <label style="background-color: #afabab;border-radius: 5px;margin: 5%;width: 90px;padding: 1%;">محرمانه</label>
                     <label style="background-color: #595959;border-radius: 5px;margin: 5%;width: 90px;padding: 1%">عدم افشا</label>
                     
                     </div>
                     <!--option-->


                 </div>

    <!--bod-->


</div>
        <div class="col-md-9 col-lg-9 col-xs-12 col-sm-9" style="padding: 0;">
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style=";background-color: #F9F9F9;border-bottom: 1px solid #dbd8d899;padding: 0">
                <h4 style="float: right;margin: 3%">جزییات پروژه</h4>

            </div>
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: right;">

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="float: right">
                <a href="#">
                <h3 style="color: #009900;">عنوان پروژه</h3>
                </a>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-6 col-sm-6" style="margin-top: 4%;text-align: left;">

                    <label style="color: #00b0f0;">نشان کردن</label>
                    <i style="color: #3297dc;" class="fas fa-thumbtack"></i><br>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <p style="margin: 1%;line-height: 2">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد..
                </p>
                </div>
                <hr>


                    <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12 special" style="margin-right: 0;padding: 0">
                        <p >تخصص</p>
                        <p >  تخصص</p>
                        <p > تخصص</p>
                        <p > تخصص</p>
                        <br><br>
                        <hr >
                    </div>
                <!--option-->

                <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12" style="padding: 0;margin-top: 4%;direction: rtl">
                    <label style="margin-left: 3%;max-width: none"   data-toggle="tooltip" title="ميزان محبوبيت کارفرما از نظر فريلنسرها ">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span style="color: white;background: orange;border-radius: 3px;padding: 0% 1%;font-size: 13px">4.57</span>
                    </label>
                    <label style="margin-left: 3%">مبلغ :&nbsp;xxxx</label>
                    <label style="margin-left: 3%">نوع پرداخت :&nbsp; xxxx</label>
                    <label style="margin-left: 3%">فریلنسر معمولی</label>

                    <label style="margin-left: 1%">تعداد پیشنهاد :&nbsp;xxxx</label>
                    <label style="margin-left: 3%">میانگین قیمت پیشنهاد </label>
                </div>
                <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12" style="padding: 0;margin-top: 4%;direction: rtl">

                    <label style="margin-left: 3%">کارفرما برای انجام پروژه به فريلنسرهای متوسط به بالا نياز دارد
                        </label>
                    <label style="margin-left: 3%">کارفرما به فريلنسرهای با ميزان موفقيت حداقل 80% نياز دارد
                    </label>
                </div>
                <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12" style="padding: 0;margin-top: 4%;direction: rtl">

                    <label style="margin-left: 3%">فایل های ضمیمه :
                    </label>
                   <br> 1<br>2
                </div>

                <!--option-->




                <div class="col-md-8 col-lg-8 col-xs-8 col-sm-8 col-md-offset-2 col-lg-offset-2 col-sm-offset-2 col-xs-offset-2" style="direction: rtl;padding: 0;text-align: center;margin-bottom: 3%">
                    <hr> <img src="img/empabout.png">
                <h3 style="margin: 1%;">در مورد کارفرما</h3>
                    <p style="margin-bottom: 2%;font-size: 15px"><span style="direction: rtl">محبوبيت کارفرما بر اساس نظر فريلنسرها:</span><span>
                            (6 نظر ثبت شده)
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                            <span style="color: white;background: orange;border-radius: 3px;padding: 0% 1%;">4.57</span>
                        </span>&nbsp; </p>
                    <p style="margin-bottom: 2%;font-size: 15px"><span style="direction: rtl">تاريخ عضويت کارفرما در زيگورات: </span><span style="color: #2196F3">20 اسفند 1397</span>&nbsp; </p>
                    <p style="margin-bottom: 2%;font-size: 15px"><span style="direction: rtl">تعداد پروژه ها و مسابقات ثبت شده تا الان: </span><span style="color: #2196F3">2</span>&nbsp; </p>
                    <p style="margin-bottom: 2%;font-size: 15px"><span style="direction: rtl">مقدار پول هزينه کرده تا الان:</span><span  style="color: #2196F3">3 ميليون تومان</span>&nbsp; </p>

                </div>
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

<script type="text/javascript" src="TimeCircles-master/inc/TimeCircles.js"></script>


<script type="text/javascript" src="TimeCircles-master/jstimer.js"></script>


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
<!-- JavaScript includes -->
<script src="assets/countdown/jquery.countdown.js"></script>
</html>