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

<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="text-align: justify;font-size: 18px;direction: rtl"
     onclick="faidoutsearch()" id="faidoutsearch">
    <div class="container">
        <p style="margin: 5%">
            <b>mohammad
                کاربر گرامی،
                <br>
                لطفاً قبل از ثبت پروژه، شرایط زیر را مطالعه و در صورت تمایل قبول نمایید:
            </b><br><br>
            <img src="img/tick1.png">
            به ازای ثبت هر 5 پروژه یا مسابقه ایجاد شده توسط هر کاربری، هزینه ثبت پروژه های پنجم و ضرایب آن رایگان می
            باشند (پروژه های 5، 10، 15 و ...).
            <br><br>
            <img src="img/tick1.png">
            نتيجه کار را آنطور که انتظار داريد تحويل بگيريد، در غير اينصورت، به کمک
            <a href="#">
                سيستم گرو گذاري زيگورات
            </a>
            پول خود را تحويل بگيريد.

            <br><br>
            <img src="img/tick1.png">
            پس از اينکه کارفرما يک فريلنسر را برای انجام يک پروژه يا مسابقه انتخاب نمود، آن فريلنسر موظف خواهد بود تا
            30% مبلغ پروژه يا مسابقه را نزد زيگورات مارکت گرو گذاری نمايد تا چنانچه کار را نيمه کاره رها کرد، مبلغ گرو
            گذاری شده او به عنوان جريمه برای او در نظر گرفته شود و کارفرما پروژه يا مسابقه خود را بدون هزينه اضافه ای
            مجدداً ثبت نمايد. لذا اين اطمينان به کارفرما داده خواهد شد که کار او با کيفيت مورد قبول او و بدون داشتن
            دغدغه ای ناشی از رها سازی کار در اواسط پروژه يا مسابقه انجام خواهد گرفت.

            <br><br>
            <img src="img/tick1.png">
            درج هر گونه اطلاعات تماس بصورت عمومی و به همراه ثبت پروژه ممنوع است. اطلاعات تماس شما بصورت محرمانه در
            زیگورات مارکت باقی خواهد ماندو پس از انتخاب مجري پروژه شما، اين اطلاعات از طريق زيگورات مارکت در اختيار وي
            قرار خواهد گرفت.

            <br><br>
            <img src="img/tick1.png">
            در مورد پروژه يا مسابقه اي که قصد برون سپاري آن را داريد تا آنجا که امکان دارد بصورت شفاف و کافي توصيح دهيد
            تا مجريان بتوانند بر اساس توضيحات شما زمان انجام و قيمت مناسب پيشنهاد کنند. چنانچه لازم مي دانيد مي توانيد
            توضيحات تکميلي خود را در قالب يک فايل نوشتاري، تصويري يا ويديويي به همراه توضيحاتي که در سايت مي دهيد آپلود
            نماييد.
            <br><br>
            <img src="img/tick1.png">
            این شرایط در حال حاضر قابلیت اجرایی دارند و زیگورات مارکت با تغییر یا جایگزین کردن آنها با شرایط جدید مختار
            است.
        </p>
        <input id="myCheck" type="checkbox" onclick="myFunction1()" style="margin-right: 5%">
        <label id="sh">شرایط بالا را خواندم و قبول دارم</label>
        <a href="#sh">
            <button href="Project.php" class="btn btn-success" disabled="disabled" id="text" onclick="addproject()"
                    style="width: 16%;float: left;background-color: #2196F3;margin-bottom: 5%;border:1px solid #2196F3">ادامه
            </button>
        </a>
    </div>
</div>
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 " id="myproject"
         style="margin-top: 5%;margin-bottom: 5%;text-align: justify;font-size: 18px;direction: rtl;display: none;">
        <div class="container">
            <label style="color: #2196f3;">عنوان پروژه یا مسابقه :</label>
            <br>
            <input placeholder="عنوان پروژه يا مسابقه خود را بصورت مختصر و مفيد ذکر نماييد"
                   name="title" id="title" type="text" class="form-group" style="width: 70%;">
            <br><br>
            <label style="color: #2196f3;">دسته بندی : </label>
            <br>
            <select name="cat" id="cat" onchange="selectSubCat()" class="form-group" style="width: 70%;">
                <option id="cat" selected="selected" disabled="disabled">انتخاب دسته بندی</option>
                <?php

                $sql = "SELECT * FROM cat";
                $query = mysqli_query($db->connect(), $sql);
                while ($results = mysqli_fetch_assoc($query)) {
                    ?>

                    <option value="<?php echo $results['id']; ?>">
                        <?php echo $results['name']; ?></option>

                    <?php
                }

                ?>
            </select>


            <script>
                function selectSubCat() {
                    var catId = $("#cat").val();
                    $.ajax({
                        url: 'request/general/getSubcat.php',
                        data: {
                            catId: catId
                        },
                        dataType: 'json',
                        type: 'POST',
                        success: function (data) {
                            $("#subcat").html(data['results']);
                        }
                    });

                }
            </script>
            <br><br>

            <label style="color: #2196f3;">زیر دسته بندی : </label>
            <br>
            <select name="subcat" class="form-group" style="width: 70%;" id="subcat">
                <option value="" disabled="disabled" selected="selected">ابتدا دسته بندی را انتخاب کنید</option>

            </select>


            <script>
                $(".cattrans").hide();
                $("#cat").change(function () {
                    if ($(this).val() === "9") {
                        $(".cattrans").show();
                    } else {
                        $(".cattrans").hide();
                    }


                });
            </script>
            <br><br>
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 cattrans" style="display: none">
                <input type="checkbox" id="checkinput24" onclick="myFunction24()">
                <label class="label1">پروژه ترجمه بصورت محرمانه مي باشد و نمي خواهم هر مترجمي به محتواي متن آن دسترسي
                    داشته باشد.
                    <br>
                    در چنين حالتي، ترجمه توسط اشخاص و موسساتي که توافقنامه محرمانه با ما بصورت کتبي امضا نموده اند
                    <br>
                    اجرا خواهد شد. توجه نماييد که انتخاب اين آپشن، در قيمت تمام شده هزينه ثبت پروژه تاثيرگذار است.
                </label>
                <br><br>
            </div>

            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="padding: 0">
                <label style="color: #2196f3;">
                    تشریح پروژه یا مسابقه :
                    <p></p>
                </label>
                <br>
                <textarea
                        placeholder="در مورد پروژه يا مسابقه خود توضيح دهيد. هر چقدر توضيحات شما کامل تر و شفاف تر باشد، در پروژه ها، فريلنسرهاي حرفه اي قيمت و زمان نزديک تر به واقعيت به شما پيشنهاد خواهند داد و در مسابقات نيز نتايجي را به شما تحويل خواهند داد که بيشتر مورد انتظارتان مي باشد."
                        name="description" id="description" type="text" cols="50" rows="8" class="form-group"
                        style="width: 70%"></textarea>

            </div>
            <br><br>
            <!--upload-->
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <label style="color: #2196f3;">
                    آپلود فایل :
                    <p>
                        آيا نياز داريد براي تشريح بهتر پروژه خود، فايلي ضميمه نماييد؟
                    </p>
                </label>

                <div class="col-md-12 col-lg-12 hidden-sm hidden-xs upload"
                     style="width: 70%;border:1px dashed rgb(169, 169, 169);float: right;">
                    <div class="col-md-7 col-lg-7 col-xs-7 col-sm-7">
                        <p>
                            فايل، تصوير يا ويديويي که علاوه بر توضيحات شما در مورد پروژه، به مجري (فريلنسر) کمک مي کند
                            تا ديد بهتري از پروژه مورد نظر شما داشته باشد را در اينجا درگ نماييد يا آپلود کنيد.
                            حداکثر تعداد فايل: 5 فايل با حداکثر حجم 10 مگابايت براي هر کدام
                            فرمت هاي مورد قبول: zip، rar، Word و pdf

                        </p>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3 uploadimg">
                        <img src="img/upload1.png" style="padding: 12%">
                    </div>


                    <div class="col-md-2 col-lg-2 col-xs-2 col-sm-2">
                        <button class="btn" style="margin: 54% 0;background-color: #00aeef;color: #ffffff;"
                                onclick="$('#uploadFile').click()">آپلود فایل
                        </button>
                        <input type="file" style="margin-right: 14%;display: none" id="uploadFile">
                    </div>
                </div>
                <div class="hidden-md hidden-lg col-xs-12 col-sm-12 upload"
                     style="border:1px dashed rgb(169, 169, 169);float: right;">
                    <div class="col-md-7 col-lg-7 col-xs-7 col-sm-7">
                        <p>
                            فايل، تصوير يا ويديويي که علاوه بر توضيحات شما در مورد پروژه، به مجري (فريلنسر) کمک مي کند
                            تا ديد بهتري از پروژه مورد نظر شما داشته باشد را در اينجا درگ نماييد يا آپلود کنيد.
                            حداکثر تعداد فايل: 5 فايل با حداکثر حجم 10 مگابايت براي هر کدام
                            فرمت هاي مورد قبول: zip، rar، Word و pdf

                        </p>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3 uploadimg">
                        <img src="img/upload1.png" style="padding: 12%">
                    </div>

                    <div class="col-md-2 col-lg-2 col-xs-2 col-sm-2">
                        <button class="btn" style="margin: 54% 0;background-color: #00aeef;color: #ffffff;"
                                onclick="$('#uploadFile').click()">آپلود فایل
                        </button>
                        <input type="file" style="margin-right: 14%;display: none" id="uploadFile">
                    </div>
                </div>
            </div>
            <!--upload-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                <br>
                <label style="color: #2196F3">مهارت هاي مورد نياز:</label>
                <p>چه مهارت هايي براي انجام پروژه تان فکر مي کنيد مورد نياز است؟ فريلنسرها بر اساس اين مهارت ها، پروژه
                    هاي
                    <br>
                    متناسب با بيشترين توانايي و علاقه خود را پيدا خواهند کرد (انتخاب حداقل يک مهارت و حداکثر 5 مهارت که
                    <br>
                    بهترين تعريف از پروژه شما را منعکس مي کنند الزامي است).
                </p>
                <input name="skills" id="skills" class="form-group" style="width: 70%;" type="text"
                       placeholder="مهارت هاي مورد نظر خود را اينجا وارد نماييد (مثلاً Web Design)">
                <p style="font-size: 16px">مهارت هاي پيشنهادي:
                    <span style="color: #2196F3">Web Design، HTML، PHP، ASP.NET، JAVA</span></p>
                <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12 col-md-offset-3 col-lg-offset-3 form-group"
                     style="border: 1px solid darkgrey;margin-left: 30%;width: 70%;">
                    <div class="tag_list_wrapper">
                        <div class="tag_list" id="job_details_more_1" data-id='1'>HTML<span>X</span></div>
                        <div class="tag_list" id="job_details_more_2" data-id='2'>WEB DESIGN<span>X</span></div>
                        <div class="tag_list" id="job_details_more_3" data-id='3'>PHP<span>X</span></div>
                        <div class="tag_list" id="job_details_more_4" data-id='4'>ASP.NET<span>X</span></div>
                        <div class="tag_list" id="job_details_more_5" data-id='5'>JAVA<span>X</span></div>
                    </div>
                </div>
            </div>

            <!-- continue-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">

                <button onclick="sabtpro()" class="btn btn-success"  style="width: 16%;float: left;background-color: #2196F3;margin: 5% 0;border: 1px solid #2196F3">ادامه
                </button>

            </div>
            <!-- continue-->

            <div  class="col-md-12 col-lg-12 col-xs-12 col-sm-12 prop11" style="margin-bottom: 3%;display: none;">

                <label style="color: #2196F3">نحوه ثبت بصورت پروژه يا مسابقه:</label>
                <p style="background-color: #e2f0d9;border: 1px solid #b5caa7;width: 70%">
                    بر اساس اطلاعاتي که شما وارد کرده ايد، پيشنهاد ما اين است که پروژه خود را بصورت "مسابقه" ثبت نماييد،
                    <br>
                    هر چند که شما مختار هستيد بصورت "پروژه" نيز ادامه دهيد.
                </p>
            </div>
            <script>
                $(".prop11").hide();
                $("#cat").change(function () {
                    if ($(this).val() === "1") {
                        $(".prop11").show();
                    } else {
                        $(".prop11").hide();
                    }
                });
            </script>
            <!-- register-->


            <div id="regist" class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin-left: 6%;padding: 0;margin-bottom: 3%;display: none">
                <ul class="nav nav-pills nav-fill navtop" style="float: right">
                    <li class="nav-item">
                        <a href="#features2" class="btntab" data-toggle="tab"
                           style="height:230px;width: 434px;padding: 0;margin-right: 9%;border-radius: 5px">
                            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12"
                                 style="border: 1px solid #2196F3;padding: 4%;border-radius: 5px">
                                <div>
                                    <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3" style="">
                                        <img style="" src="img/pishnahad1.png">

                                    </div>

                                    <div class="col-md-7 col-lg-7 col-xs-7 col-sm-7" style="">
                                        <p><b>ثبت بصورت مسابقه</b></p>
                                        <p style="font-size: 15px">
                                            مناسب برای زمانی که پروژه شما طبيعت بصري دارد (مانند لوگو، گرافيک، جلد کتاب
                                            و ...). به اين ترتيب طرح هاي مختلفي از طرف فريلنسرهاي مختلف دريافت مي کنيد و
                                            بر اساس آنها تصميم گيري مي نماييد.
                                        </p>
                                    </div>
                                    <div class="col-md-2 col-lg-2 col-xs-2 col-sm-2" style="float: right;">
                                        <img src="img/NewProject1.png" style="">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#prices2" class="btntab" data-toggle="tab"
                           style="height:230px;width: 434px;padding: 0;margin-right: 9%;border-radius: 5px">
                            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12"
                                 style="border: 1px solid #2196F3;padding: 4%;border-radius: 5px">
                                <div>
                                    <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3" style="">
                                        <img style="" src="img/pishnahad1.png">

                                    </div>

                                    <div class="col-md-7 col-lg-7 col-xs-7 col-sm-7" style="">
                                        <p><b>ثبت بصورت پروژه</b></p>
                                        <p style="font-size: 15px">
                                            مناسب براي زماني که ايده خاصي داريد، پروژه شما طبيعت بصري ندارد و یا پيچيده
                                            مي باشد. به اين ترتيب پيشنهادهاي مختلفي از طرف فريلنسرهاي مختلف دريافت مي
                                            کنيد و بر اساس آنها تصميم گيري مي نماييد
                                        </p>
                                    </div>
                                    <div class="col-md-2 col-lg-2 col-xs-2 col-sm-2" style="float: right;">
                                        <img src="img/NewProject.png" style="">
                                    </div>
                                </div>
                            </div>
                        </a>

                    </li>
                </ul>


                <br>
                <div class="tab-content col-md-12 col-lg-12 col-xs-12 col-sm-12">
                    <div class="tab-pane" id="prices2">
                        <br><br><br><br>
                        <p style="color: #2196F3;margin-right: 5%" class="lead">نحوه پرداخت به فريلنسر :</p>

                        <!-----register project----->

                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="direction: rtl;float: right;">
                            <ul class="nav nav-pills nav-fill navtop" style="float: right">
                                <li class="nav-item">
                                    <a class="nav-link " href="#menu1" data-toggle="tab"
                                       style="height:291px;width: 434px;padding: 0;;border-radius: 5px">
                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12"
                                             style="border: 1px solid #2196F3;padding: 4%;border-radius: 5px">
                                            <div>
                                                <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3" style="">
                                                    <img style="" src="img/pishnahad1.png">

                                                </div>

                                                <div class="col-md-7 col-lg-7 col-xs-7 col-sm-7" style="">

                                                    <p><b>پرداخت بصورت ساعتي
                                                        </b></p>
                                                    <p style="font-size: 15px">
                                                        در حال حاضر، پرداخت ساعتي فقط براي فريلنسرهايي امکان دارد که
                                                        حاضر باشند بصورت فيزيکي در دفتر کار کارفرما در ساعاتي که با
                                                        کارفرما توافق مي کنند حضور يابند. اين گزينه براي انجام پروژه هاي
                                                        در حال انجام يا پروژه هايي که به مدت زمان زيادي براي تکميل شدن
                                                        نياز دارند مناسب مي باشد.
                                                    </p>

                                                </div>
                                                <div class="col-md-2 col-lg-2 col-xs-2 col-sm-2" style="float: right;">
                                                    <img src="img/NewProject3.png" style="">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#menu2" data-toggle="tab"
                                       style="height: 291px;width: 434px;padding: 0;border-radius: 5px">

                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                             style="border: 1px solid #2196F3;padding: 4%;border-radius: 5px">
                                            <div>
                                                <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3" style="">
                                                    <img style="" src="img/pishnahad1.png">

                                                </div>

                                                <div class="col-md-7 col-lg-7 col-xs-7 col-sm-7" style="">
                                                    <p><b>پرداخت به صورت مقطوع</b></p>
                                                    <p style="font-size: 15px;margin-bottom: 25%">

                                                        مناسب براي زماني که ايده خاصي داريد، پروژه شما طبيعت بصري ندارد
                                                        و يا پروژه شما پيچيده مي باشد. به اين ترتيب پيشنهادهاي مختلفي از
                                                        طرف فريلنسرهاي مختلف دريافت مي کنيد و بر اساس آنها تصميم گيري مي
                                                        نماييد.


                                                    </p>
                                                </div>
                                                <div class="col-md-2 col-lg-2 col-xs-2 col-sm-2" style="float: right;">
                                                    <img src="img/NewProject2.png" style="">
                                                </div>
                                            </div>
                                        </div>

                                    </a>
                                </li>

                            </ul>
                            <div class="tab-content float-right col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                <div class="tab-pane col-md-12 col-lg-12 col-xs-12 col-sm-12" role="tabpanel" id="menu1"
                                     style="">

                                    <select class="form-group" id="area-dropdown2" name="fee">
                                        <option>فريلنسر با سطح مهارت مقدماتي (ساعتي 10 تا 15 هزار)</option>
                                        <option>فريلنسر با سطح مهارت متوسط (ساعتي 15 تا 20 هزار)</option>
                                        <option>فريلنسر با سطح مهارت استاندارد (ساعتي 20 تا 30 هزار)</option>
                                        <option>فريلنسر با سطح مهارت ماهر (ساعتي 30 تا 40 هزار)</option>
                                        <option>فريلنسر با سطح مهارت خبره (ساعتي 40 هزار به بالا)</option>

                                        <option value="area2">انتخاب دستي</option>

                                    </select>
                                    <script>
                                        $(".routedropdown2").hide();
                                        $("#area-dropdown2").change(function () {
                                            if ($(this).val() === "area2") {
                                                $(".routedropdown2").show();
                                            } else {
                                                $(".routedropdown2").hide();
                                            }


                                        });
                                    </script>
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 routedropdown2"
                                         style="width: 70%;float: right;margin-bottom: 3%;display: none">
                                        <input type="text" style="margin-top: 2%" class="form-control" name="minfee"
                                               placeholder="حداقل دستمزد مورد نظر بر حسب تومان (نبايد کمتر از 10 هزار تومان باشد)">
                                        <input type="text" style="margin-top: 2%" class="form-control" name="maxfee"
                                               placeholder="حداکثر دستمزد مورد نظر بر حسب تومان (نبايد کمتر از حداقل دستمزد باشد)">

                                    </div>
                                    <br><br><br><br>
                                    <select class="form-group" id="area-dropdown1" name="hour">
                                        <option disabled="disabled">چند ساعت در هفته به خدمات فريلنسر نياز داريد؟
                                        </option>
                                        <option>توافقی</option>
                                        <option>کمتر از 10 ساعت</option>
                                        <option>بين 10 تا 20 ساعت</option>
                                        <option>بين 20 تا 30 ساعت</option>
                                        <option>بين 30 تا 40 ساعت</option>
                                        <option>بيش از 40 ساعت</option>

                                        <option value="area1">انتخاب دستي</option>

                                    </select>
                                    <script>
                                        $(".routedropdown1").hide();
                                        $("#area-dropdown1").change(function () {
                                            if ($(this).val() === "area1") {
                                                $(".routedropdown1").show();
                                            } else {
                                                $(".routedropdown1").hide();
                                            }


                                        });
                                    </script>

                                    <br>
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 routedropdown1"
                                         style="width: 70%;float: right;margin-bottom: 3%;display: none">
                                        <label>روز</label>
                                        <input type="text" class="form-group" name="day">
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="direction: ltr">

                                            <button onclick="bojeanjambtn()" class="btn btn-success"style="width: 16%;background-color: #2196F3;margin: 5% 0;border:1px solid #2196F3">ادامه</button>

                                    </div>
                                    <!--bojeanjam-->
                                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="display: none;" id="bojeanjam">
                                        <p style="color: #2196F3;">بودجه انجام پروژه :</p>
                                        <p>بودجه مورد نظر شما (بر حسب تومان) جهت انجام پروژه چقدر است؟ با توجه به دسته
                                            بندي استاندارد پروژه ها بر اساس سايز آنها، زيگورات مارکت محدوده قيمتي
                                            استاندارد هر پروژه را جهت دادن ايده اوليه به کارفرما پيشنهاد مي کند، هر چند
                                            که وي مختار است بودجه مورد نظر خود را بصورت دستي نيز وارد نمايد. انتخاب يکي
                                            از قيمت هاي استاندارد توسط کارفرما، براي فريلنسرهاي حرفه اي جذابيت بيشتري
                                            جهت فرستادن پيشنهاد معقولانه دارد. به اين ترتيب، کارفرما با علم به حداقل و
                                            حداکثر بودجه استاندارد انتخابي، با پيشنهادات نامعقول مواجه نخواهد شد و
                                            پيشنهادات نزديک به واقعيت بيشتري دريافت خواهد کرد (با توجه به رزومه فريلنسر،
                                            قيمت پيشنهادي او و زمان انجام پروژه). در مورد نکات مربوط به برآورد بودجه در
                                            <a href="#">
                                                اينجا
                                            </a>
                                            بيشتر بدانيد.</p>
                                        <br>
                                        <br>
                                        <select class="form-group" id="area-dropdownn" name="budget">
                                            <option>ميکرو پروژه (بين 100 تا 350 هزار)</option>
                                            <option>پروژه ساده (350 تا 700 هزار)</option>
                                            <option>پروژه خيلي کوچک (700 هزار تا 2 ميليون)</option>
                                            <option>پروژه کوچک (2 ميلِيون تا 4 ميليون)</option>
                                            <option>پروژه متوسط (4 ميليون تا 8 ميليون)</option>
                                            <option>پروژه بزرگ (8 ميليون</option>
                                            <option>پروژه بزرگ تر (16 ميليون تا 25 ميليون)</option>
                                            <option>مگا پروژه (بيشتر از 25 ميليون)</option>

                                            <option id="manuale" value="arean">انتخاب دستي</option>

                                        </select>

                                        <script>
                                            $(".routedropdownn").hide();
                                            $("#area-dropdownn").change(function () {
                                                if ($(this).val() === "arean") {
                                                    $(".routedropdownn").show();
                                                } else {
                                                    $(".routedropdownn").hide();
                                                }


                                            });
                                        </script>

                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 routedropdownn"
                                             style="display: none" id="selection3">
                                            <input type="text" style="margin-top: 2%;width: 70%" class="form-control" name="minbudget"
                                                   placeholder="حداقل بودجه مورد نظر بر حسب تومان (نبايد کمتر از 100 هزار تومان باشد)">
                                            <input type="text" style="margin-top: 2%;width: 70%;" class="form-control" name="maxbudget"
                                                   placeholder="حداکثر بودجه مورد نظر بر حسب تومان (نبايد کمتر از حداقل بودجه باشد)">
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="direction: ltr">

                                                <button class="btn btn-success" onclick="zamanbtn()"
                                                        style="width: 16%;background-color: #2196F3;margin: 5% 0;border: 1px solid #2196F3;">ادامه
                                                </button>

                                        </div>
                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" id="zaman" style="display: none">

                                            <p style="color: #2196F3">زمان :</p>
                                            <br>
                                            <p>زمان مورد نظر شما (بر حسب روز) جهت انجام پروژه چقدر است؟</p>
                                            <input type="text" id="timesele13" style="width: 70%;"
                                                   onkeypress="timsele3()" class="form-control" name="mintime"
                                                   placeholder="زمان مقطوع مورد نظر بر حسب روز">
                                            <br> <input type="text" id="timesele23" style="width: 70%;"
                                                        onkeypress="timsele33()" class="form-control" name="maxtime"
                                                        placeholder="حداکثر زمان مورد نظر بر حسب روز">
                                            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="direction: ltr;padding: 0">

                                                <button class="btn btn-success" onclick="pardakhtbtn()"
                                                        style="width: 16%;background-color: #2196F3;margin: 5% 0;border: 1px solid #2196F3;">ادامه
                                                </button>

                                            </div>
                                        </div>

                                        <div id="pardakht" class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="display: none;">
                                            <p style="color: #2196F3;">
                                                هزينه تعريف پروژه و آپشن هاي مختلف (به منظور دستيابي به بهترين بازدهي
                                                مورد نظر)

                                            </p>
                                            <br>
                                            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="padding: 0;">
                                                <!--left-->

                                                <div class="col-md-3 col-lg-3 col-xs-12 col-sm-12"
                                                     style=";font-size: 14px;margin-left: -1%;background-color: #f4f4f4;border: 1px solid darkgrey;border-radius: 5px">
                                                    <p style="color: #2196F3;margin-top: 6%;;text-align: center">خلاصه
                                                        هزينه آپشن هاي ثبت پروژه</p>
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%">
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align: left">12،000 تومان
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;">تعریف پروژه
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%;display: none" id="privateproject">
                                                        <?php
                                                        $sql23 = "SELECT * FROM cost order by ID DESC ";
                                                        $query23 = mysqli_query($db->connect(), $sql23);
                                                        $results23 = mysqli_fetch_assoc($query23);
                                                        echo '
                                                        
                                                         <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align:left">
                                                           '.$results23["private"].' تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;">پروژه خصوصی
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%;display: none" id="secretproject">
                                                        <?php
                                                        $sql24= "SELECT * FROM cost order by ID DESC ";
                                                        $query24 = mysqli_query($db->connect(), $sql24);
                                                        $results24 = mysqli_fetch_assoc($query24);
                                                        echo '
                                                        
                                                         <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align:left">
                                                           '.$results24["secret"].' تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;">پروژه محرمانه
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%;display: none" id="boldproject">
                                                        <?php
                                                        $sql25 = "SELECT * FROM cost order by ID DESC ";
                                                        $query25 = mysqli_query($db->connect(), $sql25);
                                                        $results25 = mysqli_fetch_assoc($query25);
                                                        echo '
                                                        
                                                         <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align:left">
                                                           '.$results25["bold"].' تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;">پروژه برجسته
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%;display: none" id="fastproject">
                                                        <?php
                                                        $sql26 = "SELECT * FROM cost order by ID DESC ";
                                                        $query26 = mysqli_query($db->connect(), $sql26);
                                                        $results26 = mysqli_fetch_assoc($query26);
                                                        echo '
                                                        
                                                         <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align:left">
                                                           '.$results26["fast"].' تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;">پروژه فوری
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%;display: none" id="specialproject">
                                                        <?php
                                                        $sql27 = "SELECT * FROM cost order by ID DESC ";
                                                        $query27 = mysqli_query($db->connect(), $sql27);
                                                        $results27 = mysqli_fetch_assoc($query27);
                                                        echo '
                                                        
                                                         <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align:left">
                                                           '.$results27["special"].' تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;">پروژه ویژه
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%;display: none" id="starproject">
                                                        <?php
                                                        $sql28 = "SELECT * FROM cost order by ID DESC ";
                                                        $query28 = mysqli_query($db->connect(), $sql28);
                                                        $results28 = mysqli_fetch_assoc($query28);
                                                        echo '
                                                        
                                                         <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align:left">
                                                           '.$results28["star"].' تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;">پروژه ستاره دار
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%;display: none" id="recruitmentproject">
                                                        <?php
                                                        $sql29 = "SELECT * FROM cost order by ID DESC ";
                                                        $query29 = mysqli_query($db->connect(), $sql29);
                                                        $results29 = mysqli_fetch_assoc($query29);
                                                        echo '
                                                        
                                                         <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align:left">
                                                           '.$results29["recruitment"].' تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;">پروژه استخدامی
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%;display: none" id="firmproject">
                                                        <?php
                                                        $sql30 = "SELECT * FROM cost order by ID DESC ";
                                                        $query30 = mysqli_query($db->connect(), $sql30);
                                                        $results30 = mysqli_fetch_assoc($query30);
                                                        echo '
                                                        
                                                         <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align:left">
                                                           '.$results30["firm"].' تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;">پروژه شرکتی
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%;display: none" id="secret2project">
                                                        <?php
                                                        $sql31 = "SELECT * FROM cost order by ID DESC ";
                                                        $query31 = mysqli_query($db->connect(), $sql31);
                                                        $results31 = mysqli_fetch_assoc($query31);
                                                        echo '
                                                        
                                                         <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align:left">
                                                           '.$results31["secret2"].' تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;">پروژه محرمانه با عدم افشا
                                                        </div>
                                                    </div>




                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%">
                                                        <hr style="border-top: 1px solid darkgray;">
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align:left">12،000 تومان
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;">جمع کل
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%">
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align:center">
                                                            <button type="button" class="btn btn1"
                                                                    style="color: #6d6d6d;background-color: #FFFFFF;border:2px solid darkgrey">
                                                                اعمال کد
                                                            </button>
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;">
                                                            <input type="text" class="form-control"
                                                                   style="border-radius: 5PX;" placeholder="کد تخفیف">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%">
                                                        <hr style="border-top: 1px solid darkgray;">
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align:left">12،000 تومان
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align: right">جمع کل قابل پرداخت
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%">
                                                        <hr style="border-top: 1px solid darkgray;">
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align: center">
                                                            <button class="btn btn-success"
                                                                    style="font-size: 10px;background-color: #009900;border-color: #009900">
                                                                پرداخت و ثبت پروژه
                                                            </button>
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;">
                                                            <button class="btn btn-success"
                                                                    style="font-size: 10px;background-color: #00aeef;border-color: #00aeef">
                                                                ذخیره پیش نویس
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="text-align: center;padding: 0 31%">

                                                        <img src="img/NewProject6.png" id="image14"
                                                             onmouseenter="hoverbrand4()">
                                                        <img src="img/NewProject7.png" id="image24"
                                                             onmouseleave="hoverbrand41()" style="display: none;">
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="text-align: center;">
                                                        <p style="color: #2196F3;"><b>ضمانت بازگشت وجه</b></p>
                                                        <p style="text-align: justify">نتيجه کار را آنطور که مد نظرتان
                                                            است تحويل بگيريد در غير اينصورت به کمک سيستم گروگذاري
                                                            زيگورات پول خود را پس بگيريد.</p>
                                                        <a href="#">
                                                            <p style="color: #2196F3">سياست برگشت پول زيگورات را
                                                                ببينيد</p>
                                                        </a>
                                                    </div>


                                                </div>
                                                <!--left-->
                                                <!--right-->
                                                <div class="col-md-9 col-lg-9 col-xs-12 col-sm-12">
                                                    <!-- 1 -->
                                                    <div style="margin-left: 1%;padding:2% 0;background-color: #dcdcdc;border: 1px solid #bfbfbf;border-radius: 5px;margin-bottom: 2%"
                                                         class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3"
                                                             style="padding: 3% 3%">
                                                            <button type="button" class="btn"
                                                                    style="background-color: #7f7f7f;color: #FFFFFF">
                                                                اضافه شده
                                                            </button>
                                                        </div>
                                                        <div style="padding: 3% 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                            12،000
                                                            تومان
                                                        </div>
                                                        <div class="col-md-8 col-lg-8 col-xs-5 col-sm-5">
                                                            <p>تعریف پروژه</p>
                                                            <p style="font-size: 14px">پروژه ايجاد شده براي تمامي
                                                                فريلنسرها (مجرياني) که تخصص آنها با تخصص هاي مورد نياز
                                                                انتخاب شده در تعريف پروژه مطابقت دارد فرستاده خواهد
                                                                شد.</p>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xs-2 col-sm-2"
                                                             style="padding:3% 1%">
                                                            <img src="img/NewProject.png">
                                                        </div>
                                                    </div>
                                                    <!-- 1 -->
                                                    <!-- 2 -->
                                                    <div id="pripro01"
                                                         style="margin-left: 1%;padding:2% 0;border: 1px solid #bfbfbf;border-radius: 5px;margin-bottom: 2%"
                                                         class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <p style="margin-right: 11%">پروژه خصوصی
                                                        </p>
                                                        <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3"
                                                             style="padding: 3% 3%">
                                                            <button type="button" class="btn"
                                                                    style="background-color: #FFFFFF;color: #7f7f7f;border: 1px solid #7f7f7f;"
                                                                    onclick="proproject01()" id="pproject01">اضافه شود
                                                            </button>
                                                            <button type="button" class="btn"
                                                                    style="background-color: #7f7f7f;color: #FFFFFF;display: none"
                                                                    onclick="proproject101()" id="pproject101">اضافه شده
                                                            </button>


                                                        </div>
                                                    <?php
                                                    $sql1 = "SELECT * FROM cost order by ID DESC ";
                                                    $query1 = mysqli_query($db->connect(), $sql1);
                                                    $results1 = mysqli_fetch_assoc($query1);
                                                        echo '
                                                        
                                                        <div style="padding: 3% 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                           '.$results1["private"].'
                                                            تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-8 col-lg-8 col-xs-5 col-sm-5">

                                                            <p style="font-size: 14px">
                                                                چنانچه بخواهيد پروژه را براي مجري يا مجريان خاصي تعريف
                                                                نماييد. در اينصورت فقط مجري يا مجرياني که شما انتخاب
                                                                کرده ايد پروژه را خواهند ديد و براي ساير مجريان ارسال
                                                                نمي گردد. اين آپشن زماني کاربرد دارد که يک مجري يا
                                                                مجرياني را از قبل مي شناسيد و ترجيح مي دهيد که با آنها
                                                                کار نماييد. چنانچه پروژه اي بصورت خصوصي تعريف شود.
                                                            </p>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xs-2 col-sm-2"
                                                             style="padding:3% 1%">
                                                            <img src="img/NewProject8.png">
                                                        </div>
                                                    </div>
                                                    <!-- 2 -->


                                                    <!-- 3 -->
                                                    <div id="secret01"
                                                         style="margin-left: 1%;padding:2% 0;border: 1px solid #bfbfbf;border-radius: 5px;margin-bottom: 2%"
                                                         class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <p style="margin-right: 11%">پروژه محرمانه
                                                        </p>
                                                        <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3"
                                                             style="padding: 3% 3%">
                                                            <button type="button" class="btn"
                                                                    style="background-color: #FFFFFF;color: #7f7f7f;border: 1px solid #7f7f7f;"
                                                                    onclick="secretproject01()" id="secproject01">اضافه شود
                                                            </button>
                                                            <button type="button" class="btn"
                                                                    style="background-color: #7f7f7f;color: #FFFFFF;display: none"
                                                                    onclick="secretproject101()" id="secproject101">اضافه
                                                                شده
                                                            </button>
                                                        </div>
                                                        <?php
                                                        $sql2 = "SELECT * FROM cost order by ID DESC ";
                                                        $query2 = mysqli_query($db->connect(), $sql2);
                                                        $results2 = mysqli_fetch_assoc($query2);
                                                        echo '
                                                        
                                                        <div style="padding: 3% 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                           '.$results2["secret"].'
                                                            تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-8 col-lg-8 col-xs-5 col-sm-5">

                                                            <p style="font-size: 14px">
                                                                پروژه خود را از ديد موتورهاي جستجو، رقيبان و کارفرمايان
                                                                خود مخفي نماييد.
                                                            </p>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xs-2 col-sm-2"
                                                             style="padding:3% 1%">
                                                            <img src="img/NewProject9.png">
                                                        </div>
                                                    </div>
                                                    <!-- 3 -->
                                                    <!-- 4 -->
                                                    <div id="bold01"
                                                         style="margin-left: 1%;padding:2% 0;border: 1px solid #bfbfbf;border-radius: 5px;margin-bottom: 2%"
                                                         class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <p style="margin-right: 11%">پروژه برجسته
                                                        </p>
                                                        <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3"
                                                             style="padding: 3% 3%">
                                                            <button type="button" id="bproject01" onclick="boldproject01()"
                                                                    class="btn"
                                                                    style="background-color: #FFFFFF;color: #7f7f7f;border: 1px solid #7f7f7f;">
                                                                اضافه شود
                                                            </button>
                                                            <button type="button" id="bproject101"
                                                                    onclick="boldproject101()" class="btn"
                                                                    style="background-color: #7f7f7f;color: #FFFFFF;display: none">
                                                                اضافه شده
                                                            </button>
                                                        </div>
                                                        <?php
                                                        $sql3 = "SELECT * FROM cost order by ID DESC ";
                                                        $query3 = mysqli_query($db->connect(), $sql3);
                                                        $results3 = mysqli_fetch_assoc($query3);
                                                        echo '
                                                        
                                                        <div style="padding: 3% 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                           '.$results3["bold"].'
                                                            تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-8 col-lg-8 col-xs-5 col-sm-5">

                                                            <p style="font-size: 14px">
                                                                با ثبت پروژه بصورت برجسته، يک برچسب "برجسته" بر روي
                                                                درخواست درج مي گردد و پروژه به مدت سه شبانه روز در ليست
                                                                پروژه هاي باز موجود در اسلايدر صفحه اصلي سايت و همچنين
                                                                در صفحه اول ليست پروژه هاي باز موجود در سايت باقي خواهد
                                                                ماند و رنگ پيش زمينه آن نيز متفاوت خواهد بود. پروژه
                                                                برجسته شانس بيشتري در جلب توجه مجريان (فريلنسرهاي) حرفه
                                                                اي خواهد داشت.</p>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xs-2 col-sm-2"
                                                             style="padding:3% 1%">
                                                            <img src="img/NewProject10.png">
                                                        </div>
                                                    </div>
                                                    <!-- 4 -->
                                                    <!-- 5 -->
                                                    <div id="quick01"
                                                         style="margin-left: 1%;padding:2% 0;border: 1px solid #bfbfbf;border-radius: 5px;margin-bottom: 2%"
                                                         class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <p style="margin-right: 11%">پروژه فوري
                                                        </p>
                                                        <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3"
                                                             style="padding: 3% 3%">
                                                            <button type="button" onclick="quickproject01()" class="btn"
                                                                    style="background-color: #FFFFFF;color: #7f7f7f;border: 1px solid #7f7f7f;">
                                                                اضافه شود
                                                            </button>
                                                        </div>
                                                        <?php
                                                        $sql4 = "SELECT * FROM cost order by ID DESC ";
                                                        $query4= mysqli_query($db->connect(), $sql4);
                                                        $results4= mysqli_fetch_assoc($query4);
                                                        echo '
                                                        
                                                        <div style="padding: 3% 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                           '.$results4["fast"].'
                                                            تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-8 col-lg-8 col-xs-5 col-sm-5">

                                                            <p style="font-size: 14px">
                                                                با ثبت پروژه بصورت فوري، يک برچسب "فوري" بر روي درخواست
                                                                درج مي گردد و به مجريان اطلاع داده خواهد شد که کارفرما
                                                                براي شروع پروژه زمان کمي دارد تا پيشنهاد خود را سريع تر
                                                                ارسال کنند.</p>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xs-2 col-sm-2"
                                                             style="padding:3% 1%">
                                                            <img src="img/NewProject11.png">
                                                        </div>
                                                    </div>
                                                    <!-- 5 -->
                                                    <!-- 5-1 -->
                                                    <div id="quick101"
                                                         style="margin-left: 1%;padding:2% 0;border: 1px solid #bfbfbf;border-radius: 5px;margin-bottom: 2%;background-color: #dcdcdc;display: none"
                                                         class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <p style="margin-right: 11%">پروژه فوري
                                                        </p>
                                                        <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3"
                                                             style="padding: 3% 3%">
                                                            <button onclick="quickproject101()" type="button" class="btn"
                                                                    style="background-color: #7f7f7f;color: #FFFFFF;">
                                                                اضافه شده
                                                            </button>
                                                        </div>
                                                        <?php
                                                        $sql5 = "SELECT * FROM cost order by ID DESC ";
                                                        $query5= mysqli_query($db->connect(), $sql5);
                                                        $results5= mysqli_fetch_assoc($query5);
                                                        echo '
                                                        
                                                        <div style="padding: 3% 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                           '.$results5["fast"].'
                                                            تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-8 col-lg-8 col-xs-5 col-sm-5">

                                                            <p style="font-size: 14px">
                                                                با ثبت پروژه بصورت فوري، يک برچسب "فوري" بر روي درخواست
                                                                درج مي گردد و به مجريان اطلاع داده خواهد شد که کارفرما
                                                                براي شروع پروژه زمان کمي دارد تا پيشنهاد خود را سريع تر
                                                                ارسال کنند.</p>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xs-2 col-sm-2"
                                                             style="padding:3% 1%">
                                                            <img src="img/NewProject11.png">
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12"
                                                             style="padding: 0 11%;font-size: 16px;">
                                                            <hr>
                                                            <label>حداکثر زمان مورد نياز تحويل پروژه :</label>
                                                            <select>
                                                                <option>1 روز</option>
                                                                <option>2 روز</option>
                                                                <option>3 روز</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- 5-1 -->
                                                    <!-- 6 -->
                                                    <div id="special01"
                                                         style="margin-left: 1%;padding:2% 0;border: 1px solid #bfbfbf;border-radius: 5px;margin-bottom: 2%"
                                                         class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <p style="margin-right: 11%">پروژه ویژه
                                                        </p>
                                                        <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3"
                                                             style="padding: 3% 3%">
                                                            <button id="speproject01" onclick="specialproject01()"
                                                                    type="button" class="btn"
                                                                    style="background-color: #FFFFFF;color: #7f7f7f;border: 1px solid #7f7f7f;">
                                                                اضافه شود
                                                            </button>
                                                            <button id="speproject101" onclick="specialproject101()"
                                                                    type="button" class="btn"
                                                                    style="background-color: #7f7f7f;color: #FFFFFF;display: none">
                                                                اضافه شده
                                                            </button>

                                                        </div>
                                                        <?php
                                                        $sql6 = "SELECT * FROM cost order by ID DESC ";
                                                        $query6= mysqli_query($db->connect(), $sql6);
                                                        $results6= mysqli_fetch_assoc($query6);
                                                        echo '
                                                        
                                                        <div style="padding: 3% 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                           '.$results6["special"].'
                                                            تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-8 col-lg-8 col-xs-5 col-sm-5">

                                                            <p style="font-size: 14px">
                                                                با ثبت پروژه بصورت ويژه، يک برچسب "ويژه" بر روي درخواست
                                                                درج مي گردد. علاوه بر آن، پروژه در کل طول مدت اعتبار، در
                                                                ليست پروژه هاي باز موجود در اسلايدر صفحه اصلي سايت و
                                                                همچنين در صفحه اول ليست پروژه هاي باز موجود در سايت باقي
                                                                خواهد ماند و رنگ پيش زمينه آن نيز متفاوت خواهد بود. با
                                                                توجه به قرارگيري پروژه در اسلايدر و صفحه اول ليست پروژه
                                                                ها در طول مدت اعتبار آن و متمايز بودن رنگ پيش زمينه آن،
                                                                شانس خيلي بيشتري (تا 200%) در جلب توجه مجريان
                                                                (فريلنسرهاي) حرفه اي خواهد داشت.</p>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xs-2 col-sm-2"
                                                             style="padding:3% 1%">
                                                            <img src="img/NewProject12.png">
                                                        </div>
                                                    </div>
                                                    <!-- 6 -->
                                                    <!-- 7 -->
                                                    <div id="starss01"
                                                         style="margin-left: 1%;padding:2% 0;border: 1px solid #bfbfbf;border-radius: 5px;margin-bottom: 2%"
                                                         class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <p style="margin-right: 11%">پروژه ستاره دار
                                                        </p>
                                                        <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3"
                                                             style="padding: 3% 3%">
                                                            <button id="stproject01" onclick="starsproject01()"
                                                                    type="button" class="btn"
                                                                    style="background-color: #FFFFFF;color: #7f7f7f;border: 1px solid #7f7f7f;">
                                                                اضافه شود
                                                            </button>
                                                        </div>
                                                        <?php
                                                        $sql7 = "SELECT * FROM cost order by ID DESC ";
                                                        $query7= mysqli_query($db->connect(), $sql7);
                                                        $results7= mysqli_fetch_assoc($query7);
                                                        echo '
                                                        
                                                        <div style="padding: 3% 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                           '.$results7["star"].'
                                                            تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-8 col-lg-8 col-xs-5 col-sm-5">

                                                            <p style="font-size: 14px">
                                                                با ثبت پروژه بصورت ستاره دار، کارفرما اعلام مي کند که
                                                                براي انجام پروژه اش به مجرياني (فريلنسرهايي) نياز خواهد
                                                                داشت که حداقل داراي تعداد معيني ستاره (امتياز) باشند.
                                                                مثلاً اعلام مي کند که فقط مجرياني پيشنهاد قيمت بفرستند
                                                                که حداقل داراي 4 ستاره هستند. ثبت پروژه در اين حالت نشان
                                                                مي دهد که کيفيت انجام کار براي کارفرما از اهميت بالايي
                                                                برخوردار است.
                                                                با انتخاب اين مورد، علاوه بر برخورداري از مزاياي ثبت
                                                                پروژه بصورت ويژه، تعداد ستاره هاي مورد نياز براي انجام
                                                                پروژه بصورت يک برچسب بر روي درخواست درج مي گردد. با توجه
                                                                به اين امتيازات، شانس خيلي بيشتري در جلب توجه مجريان
                                                                (فريلنسرهاي) حرفه اي وجود خواهد داشت و همچنين شانس
                                                                موفقيت پروژه و در نتيجه و رضايت کارفرما خيلي بالا خواهد
                                                                بود.
                                                                بايد توجه داست که هر چقدر تعداد ستاره هاي درخواستي براي
                                                                مجريان بالاتر باشد، تعداد مجرياني که پيشنهاد قيمت خواهند
                                                                فرستاد محدودتر خواهد بود که در اينصورت کارفرما بايستي
                                                                انتظار پيشنهاد قيمت هاي بالاتر ولي نزديک به واقعيت از
                                                                طرف مجريان حرفه اي داشته باشد.</p>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xs-2 col-sm-2"
                                                             style="padding:3% 1%">
                                                            <img src="img/NewProject13.png">
                                                        </div>
                                                    </div>
                                                    <!-- 7 -->
                                                    <!-- 7-1 -->
                                                    <div id="starss101"
                                                         style="background-color: #dcdcdc;display: none;margin-left: 1%;padding:2% 0;border: 1px solid #bfbfbf;border-radius: 5px;margin-bottom: 2%"
                                                         class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <p style="margin-right: 11%">پروژه ستاره
                                                        </p>
                                                        <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3"
                                                             style="padding: 3% 3%">
                                                            <button id="stproject101" onclick="starsproject101()"
                                                                    type="button" class="btn"
                                                                    style="background-color: #7f7f7f;color: #FFFFFF;">
                                                                اضافه شود
                                                            </button>
                                                        </div>
                                                        <?php
                                                        $sql8 = "SELECT * FROM cost order by ID DESC ";
                                                        $query8= mysqli_query($db->connect(), $sql8);
                                                        $results8= mysqli_fetch_assoc($query8);
                                                        echo '
                                                        
                                                        <div style="padding: 3% 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                           '.$results8["star"].'
                                                            تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-8 col-lg-8 col-xs-5 col-sm-5">

                                                            <p style="font-size: 14px">
                                                                با ثبت پروژه بصورت ستاره دار، کارفرما اعلام مي کند که
                                                                براي انجام پروژه اش به مجرياني (فريلنسرهايي) نياز خواهد
                                                                داشت که حداقل داراي تعداد معيني ستاره (امتياز) باشند.
                                                                مثلاً اعلام مي کند که فقط مجرياني پيشنهاد قيمت بفرستند
                                                                که حداقل داراي 4 ستاره هستند. ثبت پروژه در اين حالت نشان
                                                                مي دهد که کيفيت انجام کار براي کارفرما از اهميت بالايي
                                                                برخوردار است.
                                                                با انتخاب اين مورد، علاوه بر برخورداري از مزاياي ثبت
                                                                پروژه بصورت ويژه، تعداد ستاره هاي مورد نياز براي انجام
                                                                پروژه بصورت يک برچسب بر روي درخواست درج مي گردد. با توجه
                                                                به اين امتيازات، شانس خيلي بيشتري در جلب توجه مجريان
                                                                (فريلنسرهاي) حرفه اي وجود خواهد داشت و همچنين شانس
                                                                موفقيت پروژه و در نتيجه و رضايت کارفرما خيلي بالا خواهد
                                                                بود.
                                                                بايد توجه داست که هر چقدر تعداد ستاره هاي درخواستي براي
                                                                مجريان بالاتر باشد، تعداد مجرياني که پيشنهاد قيمت خواهند
                                                                فرستاد محدودتر خواهد بود که در اينصورت کارفرما بايستي
                                                                انتظار پيشنهاد قيمت هاي بالاتر ولي نزديک به واقعيت از
                                                                طرف مجريان حرفه اي داشته باشد.</p>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xs-2 col-sm-2"
                                                             style="padding:3% 1%">
                                                            <img src="img/NewProject13.png">
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12"
                                                             style="padding: 0 11%;font-size: 16px">
                                                            <hr>
                                                            <label>حداقل تعداد ستاره های مورد نياز برای فريلنسر را
                                                                انتخاب نماييد
                                                                :</label>
                                                            <select>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- 7-1 -->
                                                    <!-- 8 -->
                                                    <div id="services01"
                                                         style="margin-left: 1%;padding:2% 0;border: 1px solid #bfbfbf;border-radius: 5px;margin-bottom: 2%"
                                                         class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <p style="margin-right: 11%">پروژه استخدامي
                                                        </p>
                                                        <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3"
                                                             style="padding: 3% 3%">
                                                            <button id="serproject01" onclick="servicesproject01()"
                                                                    type="button" class="btn"
                                                                    style="background-color: #FFFFFF;color: #7f7f7f;border: 1px solid #7f7f7f;">
                                                                اضافه شود
                                                            </button>
                                                            <button id="serproject101" onclick="servicesproject101()"
                                                                    type="button" class="btn"
                                                                    style="background-color: #7f7f7f;color: #FFFFFF;display: none">
                                                                اضافه شده
                                                            </button>

                                                        </div>

                                                        <?php
                                                        $sql9 = "SELECT * FROM cost order by ID DESC ";
                                                        $query9= mysqli_query($db->connect(), $sql9);
                                                        $results9= mysqli_fetch_assoc($query9);
                                                        echo '
                                                        
                                                        <div style="padding: 3% 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                           '.$results9["recruitment"].'
                                                            تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-8 col-lg-8 col-xs-5 col-sm-5">

                                                            <p style="font-size: 14px">
                                                                با ثبت پروژه استخدامي، کارفرما اعلام مي کند که براي
                                                                انجام پروژه اش به مجرياني (فريلنسرهايي) نياز خواهد داشت
                                                                که بصورت حضوري)تمام وقت يا ساعتي( براي آنها يک کار معيني
                                                                را انجام بدهند. پروژه هاي بازاريابي نيز بايد به اين صورت
                                                                ثبت سفارش شوند. در ثبت پروژه هاي حضوري، هم کارفرما و هم
                                                                مجري نياز به ارائه اطلاعات شخصي و تماس خود مي باشند.</p>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xs-2 col-sm-2"
                                                             style="padding:3% 1%">
                                                            <img src="img/NewProject14.png">
                                                        </div>
                                                    </div>
                                                    <!-- 8 -->
                                                    <!-- 9 -->
                                                    <div id="sectranslate01"
                                                         style="display: none;margin-left: 1%;padding:2% 0;border: 1px solid #bfbfbf;border-radius: 5px;margin-bottom: 2%"
                                                         class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <p style="margin-right: 11%;padding-left: 6%">پروژه محرمانه با
                                                            قرارداد عدم افشا
                                                            <b style="color: #2196F3;font-size: 12px">
                                                                (اين آپشن بصورت خودکار پس از اينکه تيک محرمانه بودن
                                                                پروژه ترجمه زده شد فعال مي گردد. چنانچه تمايل به پرداخت
                                                                اين هزينه نمي باشيد و پروژه شما محرمانه نيست، در قسمت
                                                                ثبت پروژه تيک محرمانه بودن پروژه را حذف نماييد)

                                                            </b>

                                                        </p>
                                                        <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3"
                                                             style="padding: 3% 3%">
                                                            <button id="sectraproject01" onclick="sectranslateproject01()"
                                                                    type="button" class="btn"
                                                                    style="background-color: #FFFFFF;color: #7f7f7f;border: 1px solid #7f7f7f;">
                                                                اضافه شود
                                                            </button>
                                                            <button id="sectraproject101" onclick="sectranslateproject101()"
                                                                    type="button" class="btn"
                                                                    style="background-color: #7f7f7f;color: #FFFFFF;display: none">
                                                                اضافه شده
                                                            </button>

                                                        </div>
                                                        <?php
                                                        $sql10 = "SELECT * FROM cost order by ID DESC ";
                                                        $query10= mysqli_query($db->connect(), $sql10);
                                                        $results10= mysqli_fetch_assoc($query10);
                                                        echo '
                                                        
                                                        <div style="padding: 3% 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                           '.$results10["secret2"].'
                                                            تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-8 col-lg-8 col-xs-5 col-sm-5">

                                                            <p style="font-size: 14px">
                                                                با ثبت پروژه بصورت محرمانه با قرارداد عدم افشا که بيشتر
                                                                براي پروژه هاي ترجمه اسناد محرمانه اشخاص کاربرد دارد،
                                                                کارفرما تمايل دارد که هر مترجمي به محتواي متن او دسترسي
                                                                نداشته باشد و انحصاراً ترجمه توسط اشخاص و موسساتي که
                                                                توافقنامه محرمانه با زيگورات مارکت بصورت کتبي امضا نموده
                                                                اند انجام شود. در صورتي که مجري انجام پروژه از قانون
                                                                محرمانه بودن پروژه را نقض نمايد، تخلف او از طريق مراجع
                                                                قانوني قابل پيگرد خواهد بود. اين مورد براي ساير پروژه ها
                                                                نيز در صورت تمايل کارفرما، قابل اجرا خواهد بود.
                                                            </p>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xs-2 col-sm-2"
                                                             style="padding:3% 1%">
                                                            <img src="img/NewProject15.png">
                                                        </div>
                                                    </div>
                                                    <!-- 9 -->
                                                    <!-- 11 -->
                                                    <div id="company01"
                                                         style="margin-left: 1%;padding:2% 0;border: 1px solid #bfbfbf;border-radius: 5px;margin-bottom: 2%"
                                                         class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <p style="margin-right: 11%">پروژه شرکتی
                                                        </p>
                                                        <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3"
                                                             style="padding: 3% 3%">
                                                            <button id="compproject01" onclick="companyproject01()"
                                                                    type="button" class="btn"
                                                                    style="background-color: #FFFFFF;color: #7f7f7f;border: 1px solid #7f7f7f;">
                                                                اضافه شود
                                                            </button>
                                                            <button id="compproject101" onclick="companyproject101()"
                                                                    type="button" class="btn"
                                                                    style="background-color: #7f7f7f;color: #FFFFFF;display: none">
                                                                اضافه شده
                                                            </button>

                                                        </div>
                                                        <?php
                                                        $sql11 = "SELECT * FROM cost order by ID DESC ";
                                                        $query11= mysqli_query($db->connect(), $sql11);
                                                        $results11= mysqli_fetch_assoc($query11);
                                                        echo '
                                                        
                                                        <div style="padding: 3% 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                           '.$results11["firm"].'
                                                            تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-8 col-lg-8 col-xs-5 col-sm-5">

                                                            <p style="font-size: 14px">
                                                                با ثبت پروژه شرکتی، کارفرما اعلام مي کند که براي انجام
                                                                پروژه اش به يک شرکت فريلنسری نياز دارد تا پروژه را انجام
                                                                دهد. اين آپشن برای زمانی مفيد است که پروژه سنگين باشد و
                                                                يک فريلنسر قادر به انجام کامل آن در بازه زمانی مشخص شده
                                                                توسط کارفرما نباشد و همچنين در مواردی که پروژه از بخش
                                                                های مختلفی تشکيل شده باشد بطوريکه برای اجرای آن به تخصص
                                                                های مختلف نياز باشد که در يک جا مستقر شده باشند تا
                                                                بتوانند در قالب يک تيم پروژه را جلو ببرند و اگر هر تخصصی
                                                                از تخصصی ديگر سوالی در مورد پروژه داشته باشد در کمترين
                                                                زمان و بصورت فيزيکی و از نزديک سوال خود را پرسيده و
                                                                مرتفع سازد.</p>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xs-2 col-sm-2"
                                                             style="padding:3% 1%">
                                                            <img src="img/NewProject17.png">
                                                        </div>
                                                    </div>
                                                    <!-- 11 -->
                                                    <br><br><br><br>
                                                    <button  type="button" id="text3"
                                                            class="btn  btn-block"
                                                            style="font-size: 22px;width: 90%;background-color: #009900;color: #ffffff;">
                                                        پرداخت و ایجاد پروژه
                                                    </button>

                                                </div>
                                                <!--right-->
                                            </div>

                                        </div>

                                    </div>
                                    <!--bojeanjam-->

                                </div>
                                <div class="tab-pane col-md-12 col-lg-12 col-xs-12 col-sm-12" role="tabpanel"
                                     id="menu2">
                                    <br><br><br>
                                    <!--bojeanjam-->
                                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" >
                                        <p style="color: #2196F3;">بودجه انجام پروژه :</p>
                                        <p>بودجه مورد نظر شما (بر حسب تومان) جهت انجام پروژه چقدر است؟ با توجه به دسته
                                            بندي استاندارد پروژه ها بر اساس سايز آنها، زيگورات مارکت محدوده قيمتي
                                            استاندارد هر پروژه را جهت دادن ايده اوليه به کارفرما پيشنهاد مي کند، هر چند
                                            که وي مختار است بودجه مورد نظر خود را بصورت دستي نيز وارد نمايد. انتخاب يکي
                                            از قيمت هاي استاندارد توسط کارفرما، براي فريلنسرهاي حرفه اي جذابيت بيشتري
                                            جهت فرستادن پيشنهاد معقولانه دارد. به اين ترتيب، کارفرما با علم به حداقل و
                                            حداکثر بودجه استاندارد انتخابي، با پيشنهادات نامعقول مواجه نخواهد شد و
                                            پيشنهادات نزديک به واقعيت بيشتري دريافت خواهد کرد (با توجه به رزومه فريلنسر،
                                            قيمت پيشنهادي او و زمان انجام پروژه). در مورد نکات مربوط به برآورد بودجه در
                                            <a href="#">
                                                اينجا
                                            </a>
                                            بيشتر بدانيد.</p>
                                        <br>
                                        <br>
                                        <select class="form-group" id="area-dropdown" name="budget">
                                            <option>ميکرو پروژه (بين 100 تا 350 هزار)</option>
                                            <option>پروژه ساده (350 تا 700 هزار)</option>
                                            <option>پروژه خيلي کوچک (700 هزار تا 2 ميليون)</option>
                                            <option>پروژه کوچک (2 ميلِيون تا 4 ميليون)</option>
                                            <option>پروژه متوسط (4 ميليون تا 8 ميليون)</option>
                                            <option>پروژه بزرگ (8 ميليون</option>
                                            <option>پروژه بزرگ تر (16 ميليون تا 25 ميليون)</option>
                                            <option>مگا پروژه (بيشتر از 25 ميليون)</option>

                                            <option id="manuale" value="area">انتخاب دستي</option>

                                        </select>

                                        <script>
                                            $(".routedropdown").hide();
                                            $("#area-dropdown").change(function () {
                                                if ($(this).val() === "area") {
                                                    $(".routedropdown").show();
                                                } else {
                                                    $(".routedropdown").hide();
                                                }


                                            });
                                        </script>

                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 routedropdown"
                                             style="display: none" id="selection3">
                                            <input type="text" style="margin-top: 2%;width: 70%" class="form-control" name="minbudget"
                                                   placeholder="حداقل بودجه مورد نظر بر حسب تومان (نبايد کمتر از 100 هزار تومان باشد)">
                                            <input type="text" style="margin-top: 2%;width: 70%;" class="form-control" name="maxbudget"
                                                   placeholder="حداکثر بودجه مورد نظر بر حسب تومان (نبايد کمتر از حداقل بودجه باشد)">
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="direction: ltr">

                                                <button class="btn btn-success" onclick="zaman2btn()"
                                                        style="width: 16%;background-color: #2196F3;margin: 5% 0;border: 1px solid #2196F3;">ادامه
                                                </button>

                                        </div>
                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" id="zaman2" style="display: none;">

                                            <p style="color: #2196F3">زمان :</p>
                                            <br>
                                            <p>زمان مورد نظر شما (بر حسب روز) جهت انجام پروژه چقدر است؟</p>
                                            <input type="text" id="timesele1" style="width: 70%;" name="mintime"
                                                   onkeypress="timsele1()"  class="form-control"
                                                   placeholder="زمان مقطوع مورد نظر بر حسب روز">
                                            <br> <input type="text" id="timesele2" style="width: 70%;" name="maxtime"
                                                        onkeypress="timsele2()" class="form-control"
                                                        placeholder="حداکثر زمان مورد نظر بر حسب روز">
                                            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="direction: ltr;padding: 0">

                                                <button class="btn btn-success"  onclick="pardakhtbtn2()"
                                                        style="width: 16%;background-color: #2196F3;margin: 5% 0;border: 1px solid #2196F3;">ادامه
                                                </button>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" id="pardakht2" style="display: none">
                                            <p style="color: #2196F3;">
                                                هزينه تعريف پروژه و آپشن هاي مختلف (به منظور دستيابي به بهترين بازدهي
                                                مورد نظر)

                                            </p>
                                            <br>
                                            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="padding: 0;">
                                                <!--left-->

                                                <div class="col-md-3 col-lg-3 col-xs-12 col-sm-12"
                                                     style=";font-size: 14px;margin-left: -1%;background-color: #f4f4f4;border: 1px solid darkgrey;border-radius: 5px">
                                                    <p style="color: #2196F3;margin-top: 6%;;text-align: center">خلاصه
                                                        هزينه آپشن هاي ثبت پروژه</p>
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%">
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align: left">12،000 تومان
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;">تعریف پروژه
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%;display: none" id="privateproject1">
                                                        <?php
                                                        $sql33 = "SELECT * FROM cost order by ID DESC ";
                                                        $query33 = mysqli_query($db->connect(), $sql33);
                                                        $results33 = mysqli_fetch_assoc($query33);
                                                        echo '
                                                        
                                                         <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align:left">
                                                           '.$results33["private"].' تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;">پروژه خصوصی
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%;display: none" id="secretproject1">
                                                        <?php
                                                        $sql34 = "SELECT * FROM cost order by ID DESC ";
                                                        $query34 = mysqli_query($db->connect(), $sql34);
                                                        $results34 = mysqli_fetch_assoc($query34);
                                                        echo '
                                                        
                                                         <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align:left">
                                                           '.$results34["secret"].' تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;">پروژه محرمانه
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%;display: none" id="boldproject1">
                                                        <?php
                                                        $sql35 = "SELECT * FROM cost order by ID DESC ";
                                                        $query35 = mysqli_query($db->connect(), $sql35);
                                                        $results35 = mysqli_fetch_assoc($query35);
                                                        echo '
                                                        
                                                         <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align:left">
                                                           '.$results35["bold"].' تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;">پروژه برجسته
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%;display: none" id="fastproject1">
                                                        <?php
                                                        $sql36 = "SELECT * FROM cost order by ID DESC ";
                                                        $query36 = mysqli_query($db->connect(), $sql36);
                                                        $results36 = mysqli_fetch_assoc($query36);
                                                        echo '
                                                        
                                                         <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align:left">
                                                           '.$results36["fast"].' تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;">پروژه فوری
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%;display: none" id="specialproject1">
                                                        <?php
                                                        $sql37 = "SELECT * FROM cost order by ID DESC ";
                                                        $query37 = mysqli_query($db->connect(), $sql27);
                                                        $results37 = mysqli_fetch_assoc($query37);
                                                        echo '
                                                        
                                                         <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align:left">
                                                           '.$results37["special"].' تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;">پروژه ویژه
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%;display: none" id="starproject1">
                                                        <?php
                                                        $sql38 = "SELECT * FROM cost order by ID DESC ";
                                                        $query38 = mysqli_query($db->connect(), $sql38);
                                                        $results38 = mysqli_fetch_assoc($query38);
                                                        echo '
                                                        
                                                         <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align:left">
                                                           '.$results38["star"].' تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;">پروژه ستاره دار
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%;display: none" id="recruitmentproject1">
                                                        <?php
                                                        $sql39 = "SELECT * FROM cost order by ID DESC ";
                                                        $query39 = mysqli_query($db->connect(), $sql39);
                                                        $results39 = mysqli_fetch_assoc($query39);
                                                        echo '
                                                        
                                                         <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align:left">
                                                           '.$results39["recruitment"].' تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;">پروژه استخدامی
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%;display: none" id="firmproject1">
                                                        <?php
                                                        $sql40 = "SELECT * FROM cost order by ID DESC ";
                                                        $query40 = mysqli_query($db->connect(), $sql40);
                                                        $results40 = mysqli_fetch_assoc($query40);
                                                        echo '
                                                        
                                                         <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align:left">
                                                           '.$results40["firm"].' تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;">پروژه شرکتی
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%;display: none" id="secret2project1">
                                                        <?php
                                                        $sql41 = "SELECT * FROM cost order by ID DESC ";
                                                        $query41 = mysqli_query($db->connect(), $sql41);
                                                        $results41 = mysqli_fetch_assoc($query41);
                                                        echo '
                                                        
                                                         <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align:left">
                                                           '.$results41["secret2"].' تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;">پروژه محرمانه با عدم افشا
                                                        </div>
                                                    </div>




                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%">
                                                        <hr style="border-top: 1px solid darkgray;">
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align:left">12،000 تومان
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;">جمع کل
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%">
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align:center">
                                                            <button type="button" class="btn btn1"
                                                                    style="color: #6d6d6d;background-color: #FFFFFF;border:2px solid darkgrey">
                                                                اعمال کد
                                                            </button>
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;">
                                                            <input type="text" class="form-control"
                                                                   style="border-radius: 5PX;" placeholder="کد تخفیف">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%">
                                                        <hr style="border-top: 1px solid darkgray;">
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align:left">12،000 تومان
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align: right">جمع کل قابل پرداخت
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="padding: 0;margin-bottom: 3%">
                                                        <hr style="border-top: 1px solid darkgray;">
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;text-align: center">
                                                            <button class="btn btn-success"
                                                                    style="font-size: 10px;background-color: #009900;border-color: #009900">
                                                                پرداخت و ثبت پروژه
                                                            </button>
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                             style="padding: 0;">
                                                            <button class="btn btn-success"
                                                                    style="font-size: 10px;background-color: #00aeef;border-color: #00aeef">
                                                                ذخیره پیش نویس
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="text-align: center;padding: 0 31%">

                                                        <img src="img/NewProject6.png" id="image1"
                                                             onmouseenter="hoverbrand()">
                                                        <img src="img/NewProject7.png" id="image2"
                                                             onmouseleave="hoverbrand1()" style="display: none;">
                                                    </div>




                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                         style="text-align: center;">
                                                        <p style="color: #2196F3;"><b>ضمانت بازگشت وجه</b></p>
                                                        <p style="text-align: justify">نتيجه کار را آنطور که مد نظرتان
                                                            است تحويل بگيريد در غير اينصورت به کمک سيستم گروگذاري
                                                            زيگورات پول خود را پس بگيريد.</p>
                                                        <a href="#">
                                                            <p style="color: #2196F3">سياست برگشت پول زيگورات را
                                                                ببينيد</p>
                                                        </a>
                                                    </div>


                                                </div>
                                                <!--left-->
                                                <!--right-->
                                                <div class="col-md-9 col-lg-9 col-xs-12 col-sm-12">
                                                    <!-- 1 -->
                                                    <div style="margin-left: 1%;padding:2% 0;background-color: #dcdcdc;border: 1px solid #bfbfbf;border-radius: 5px;margin-bottom: 2%"
                                                         class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3"
                                                             style="padding: 3% 3%">
                                                            <button type="button" class="btn"
                                                                    style="background-color: #7f7f7f;color: #FFFFFF">
                                                                اضافه شده
                                                            </button>
                                                        </div>
                                                        <div style="padding: 3% 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                            12،000
                                                            تومان
                                                        </div>
                                                        <div class="col-md-8 col-lg-8 col-xs-5 col-sm-5">
                                                            <p>تعریف پروژه</p>
                                                            <p style="font-size: 14px">پروژه ايجاد شده براي تمامي
                                                                فريلنسرها (مجرياني) که تخصص آنها با تخصص هاي مورد نياز
                                                                انتخاب شده در تعريف پروژه مطابقت دارد فرستاده خواهد
                                                                شد.</p>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xs-2 col-sm-2"
                                                             style="padding:3% 1%">
                                                            <img src="img/NewProject.png">
                                                        </div>
                                                    </div>
                                                    <!-- 1 -->
                                                    <!-- 2 -->

                                                    <div id="pripro"
                                                         style="margin-left: 1%;padding:2% 0;border: 1px solid #bfbfbf;border-radius: 5px;margin-bottom: 2%"
                                                         class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <p style="margin-right: 11%">پروژه خصوصی
                                                        </p>
                                                        <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3"
                                                             style="padding: 3% 3%">
                                                            <button type="button" class="btn"
                                                                    style="background-color: #FFFFFF;color: #7f7f7f;border: 1px solid #7f7f7f;"
                                                                    onclick="proproject()" id="pproject">اضافه شود
                                                            </button>
                                                            <button type="button" class="btn"
                                                                    style="background-color: #7f7f7f;color: #FFFFFF;display: none"
                                                                    onclick="proproject1()" id="pproject1">اضافه شده
                                                            </button>


                                                        </div>
                                                        <?php
                                                        $sql12 = "SELECT * FROM cost order by ID DESC ";
                                                        $query12= mysqli_query($db->connect(), $sql12);
                                                        $results12= mysqli_fetch_assoc($query12);
                                                        echo '
                                                        
                                                        <div style="padding: 3% 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                           '.$results12["private"].'
                                                            تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-8 col-lg-8 col-xs-5 col-sm-5">

                                                            <p style="font-size: 14px">
                                                                چنانچه بخواهيد پروژه را براي مجري يا مجريان خاصي تعريف
                                                                نماييد. در اينصورت فقط مجري يا مجرياني که شما انتخاب
                                                                کرده ايد پروژه را خواهند ديد و براي ساير مجريان ارسال
                                                                نمي گردد. اين آپشن زماني کاربرد دارد که يک مجري يا
                                                                مجرياني را از قبل مي شناسيد و ترجيح مي دهيد که با آنها
                                                                کار نماييد. چنانچه پروژه اي بصورت خصوصي تعريف شود.
                                                            </p>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xs-2 col-sm-2"
                                                             style="padding:3% 1%">
                                                            <img src="img/NewProject8.png">
                                                        </div>
                                                    </div>

                                                    <!-- 2 -->
                                                    <!-- 3 -->

                                                    <div id="secret"
                                                         style="margin-left: 1%;padding:2% 0;border: 1px solid #bfbfbf;border-radius: 5px;margin-bottom: 2%"
                                                         class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <p style="margin-right: 11%">پروژه محرمانه
                                                        </p>
                                                        <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3"
                                                             style="padding: 3% 3%">
                                                            <button type="button" class="btn"
                                                                    style="background-color: #FFFFFF;color: #7f7f7f;border: 1px solid #7f7f7f;"
                                                                    onclick="secretproject()" id="secproject">اضافه شود
                                                            </button>
                                                            <button type="button" class="btn"
                                                                    style="background-color: #7f7f7f;color: #FFFFFF;display: none"
                                                                    onclick="secretproject1()" id="secproject1">اضافه
                                                                شده
                                                            </button>
                                                        </div>
                                                        <?php
                                                        $sql13 = "SELECT * FROM cost order by ID DESC ";
                                                        $query13= mysqli_query($db->connect(), $sql13);
                                                        $results13= mysqli_fetch_assoc($query13);
                                                        echo '
                                                        
                                                        <div style="padding: 3% 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                           '.$results13["secret"].'
                                                            تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-8 col-lg-8 col-xs-5 col-sm-5">

                                                            <p style="font-size: 14px">
                                                                پروژه خود را از ديد موتورهاي جستجو، رقيبان و کارفرمايان
                                                                خود مخفي نماييد.
                                                            </p>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xs-2 col-sm-2"
                                                             style="padding:3% 1%">
                                                            <img src="img/NewProject9.png">
                                                        </div>
                                                    </div>


                                                    <!-- 3 -->
                                                    <!-- 4 -->

                                                    <div id="bold"
                                                         style="margin-left: 1%;padding:2% 0;border: 1px solid #bfbfbf;border-radius: 5px;margin-bottom: 2%"
                                                         class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <p style="margin-right: 11%">پروژه برجسته
                                                        </p>
                                                        <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3"
                                                             style="padding: 3% 3%">
                                                            <button type="button" id="bproject" onclick="boldproject()"
                                                                    class="btn"
                                                                    style="background-color: #FFFFFF;color: #7f7f7f;border: 1px solid #7f7f7f;">
                                                                اضافه شود
                                                            </button>
                                                            <button type="button" id="bproject1"
                                                                    onclick="boldproject1()" class="btn"
                                                                    style="background-color: #7f7f7f;color: #FFFFFF;display: none">
                                                                اضافه شده
                                                            </button>
                                                        </div>
                                                        <?php
                                                        $sql14 = "SELECT * FROM cost order by ID DESC ";
                                                        $query14= mysqli_query($db->connect(), $sql14);
                                                        $results14= mysqli_fetch_assoc($query14);
                                                        echo '
                                                        
                                                        <div style="padding: 3% 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                           '.$results14["bold"].'
                                                            تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-8 col-lg-8 col-xs-5 col-sm-5">

                                                            <p style="font-size: 14px">
                                                                با ثبت پروژه بصورت برجسته، يک برچسب "برجسته" بر روي
                                                                درخواست درج مي گردد و پروژه به مدت سه شبانه روز در ليست
                                                                پروژه هاي باز موجود در اسلايدر صفحه اصلي سايت و همچنين
                                                                در صفحه اول ليست پروژه هاي باز موجود در سايت باقي خواهد
                                                                ماند و رنگ پيش زمينه آن نيز متفاوت خواهد بود. پروژه
                                                                برجسته شانس بيشتري در جلب توجه مجريان (فريلنسرهاي) حرفه
                                                                اي خواهد داشت.</p>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xs-2 col-sm-2"
                                                             style="padding:3% 1%">
                                                            <img src="img/NewProject10.png">
                                                        </div>
                                                    </div>

                                                    <!-- 4 -->
                                                    <!-- 5 -->

                                                    <div id="quick"
                                                         style="margin-left: 1%;padding:2% 0;border: 1px solid #bfbfbf;border-radius: 5px;margin-bottom: 2%"
                                                         class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <p style="margin-right: 11%">پروژه فوري
                                                        </p>
                                                        <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3"
                                                             style="padding: 3% 3%">
                                                            <button type="button" onclick="quickproject()" class="btn"
                                                                    style="background-color: #FFFFFF;color: #7f7f7f;border: 1px solid #7f7f7f;">
                                                                اضافه شود
                                                            </button>
                                                        </div>
                                                        <?php
                                                        $sql15 = "SELECT * FROM cost order by ID DESC ";
                                                        $query15= mysqli_query($db->connect(), $sql15);
                                                        $results15= mysqli_fetch_assoc($query15);
                                                        echo '
                                                        
                                                        <div style="padding: 3% 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                           '.$results15["fast"].'
                                                            تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-8 col-lg-8 col-xs-5 col-sm-5">

                                                            <p style="font-size: 14px">
                                                                با ثبت پروژه بصورت فوري، يک برچسب "فوري" بر روي درخواست
                                                                درج مي گردد و به مجريان اطلاع داده خواهد شد که کارفرما
                                                                براي شروع پروژه زمان کمي دارد تا پيشنهاد خود را سريع تر
                                                                ارسال کنند.</p>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xs-2 col-sm-2"
                                                             style="padding:3% 1%">
                                                            <img src="img/NewProject11.png">
                                                        </div>
                                                    </div>

                                                    <!-- 5 -->
                                                    <!-- 5-1 -->

                                                    <div id="quick1"
                                                         style="margin-left: 1%;padding:2% 0;border: 1px solid #bfbfbf;border-radius: 5px;margin-bottom: 2%;background-color: #dcdcdc;display: none"
                                                         class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <p style="margin-right: 11%">پروژه فوري
                                                        </p>
                                                        <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3"
                                                             style="padding: 3% 3%">
                                                            <button onclick="quickproject1()" type="button" class="btn"
                                                                    style="background-color: #7f7f7f;color: #FFFFFF;">
                                                                اضافه شده
                                                            </button>
                                                        </div>
                                                        <?php
                                                        $sql16 = "SELECT * FROM cost order by ID DESC ";
                                                        $query16= mysqli_query($db->connect(), $sql16);
                                                        $results16= mysqli_fetch_assoc($query16);
                                                        echo '
                                                        
                                                        <div style="padding: 3% 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                           '.$results16["fast"].'
                                                            تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-8 col-lg-8 col-xs-5 col-sm-5">

                                                            <p style="font-size: 14px">
                                                                با ثبت پروژه بصورت فوري، يک برچسب "فوري" بر روي درخواست
                                                                درج مي گردد و به مجريان اطلاع داده خواهد شد که کارفرما
                                                                براي شروع پروژه زمان کمي دارد تا پيشنهاد خود را سريع تر
                                                                ارسال کنند.</p>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xs-2 col-sm-2"
                                                             style="padding:3% 1%">
                                                            <img src="img/NewProject11.png">
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12"
                                                             style="padding: 0 11%;font-size: 16px;">
                                                            <hr>
                                                            <label>حداکثر زمان مورد نياز تحويل پروژه :</label>
                                                            <select>
                                                                <option>1 روز</option>
                                                                <option>2 روز</option>
                                                                <option>3 روز</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- 5-1 -->
                                                    <!-- 6 -->

                                                    <div id="special"
                                                         style="margin-left: 1%;padding:2% 0;border: 1px solid #bfbfbf;border-radius: 5px;margin-bottom: 2%"
                                                         class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <p style="margin-right: 11%">پروژه ویژه
                                                        </p>
                                                        <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3"
                                                             style="padding: 3% 3%">
                                                            <button id="speproject" onclick="specialproject()"
                                                                    type="button" class="btn"
                                                                    style="background-color: #FFFFFF;color: #7f7f7f;border: 1px solid #7f7f7f;">
                                                                اضافه شود
                                                            </button>
                                                            <button id="speproject1" onclick="specialproject1()"
                                                                    type="button" class="btn"
                                                                    style="background-color: #7f7f7f;color: #FFFFFF;display: none">
                                                                اضافه شده
                                                            </button>

                                                        </div>
                                                        <?php
                                                        $sql17 = "SELECT * FROM cost order by ID DESC ";
                                                        $query17= mysqli_query($db->connect(), $sql17);
                                                        $results17= mysqli_fetch_assoc($query17);
                                                        echo '
                                                        
                                                        <div style="padding: 3% 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                           '.$results17["special"].'
                                                            تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-8 col-lg-8 col-xs-5 col-sm-5">

                                                            <p style="font-size: 14px">
                                                                با ثبت پروژه بصورت ويژه، يک برچسب "ويژه" بر روي درخواست
                                                                درج مي گردد. علاوه بر آن، پروژه در کل طول مدت اعتبار، در
                                                                ليست پروژه هاي باز موجود در اسلايدر صفحه اصلي سايت و
                                                                همچنين در صفحه اول ليست پروژه هاي باز موجود در سايت باقي
                                                                خواهد ماند و رنگ پيش زمينه آن نيز متفاوت خواهد بود. با
                                                                توجه به قرارگيري پروژه در اسلايدر و صفحه اول ليست پروژه
                                                                ها در طول مدت اعتبار آن و متمايز بودن رنگ پيش زمينه آن،
                                                                شانس خيلي بيشتري (تا 200%) در جلب توجه مجريان
                                                                (فريلنسرهاي) حرفه اي خواهد داشت.</p>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xs-2 col-sm-2"
                                                             style="padding:3% 1%">
                                                            <img src="img/NewProject12.png">
                                                        </div>
                                                    </div>

                                                    <!-- 6 -->
                                                    <!-- 7 -->

                                                    <div id="starss"
                                                         style="margin-left: 1%;padding:2% 0;border: 1px solid #bfbfbf;border-radius: 5px;margin-bottom: 2%"
                                                         class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <p style="margin-right: 11%">پروژه ستاره
                                                        </p>
                                                        <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3"
                                                             style="padding: 3% 3%">
                                                            <button id="stproject" onclick="starsproject()"
                                                                    type="button" class="btn"
                                                                    style="background-color: #FFFFFF;color: #7f7f7f;border: 1px solid #7f7f7f;">
                                                                اضافه شود
                                                            </button>
                                                        </div>
                                                        <?php
                                                        $sql18 = "SELECT * FROM cost order by ID DESC ";
                                                        $query18= mysqli_query($db->connect(), $sql18);
                                                        $results18= mysqli_fetch_assoc($query18);
                                                        echo '
                                                        
                                                        <div style="padding: 3% 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                           '.$results18["star"].'
                                                            تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-8 col-lg-8 col-xs-5 col-sm-5">

                                                            <p style="font-size: 14px">
                                                                با ثبت پروژه بصورت ستاره دار، کارفرما اعلام مي کند که
                                                                براي انجام پروژه اش به مجرياني (فريلنسرهايي) نياز خواهد
                                                                داشت که حداقل داراي تعداد معيني ستاره (امتياز) باشند.
                                                                مثلاً اعلام مي کند که فقط مجرياني پيشنهاد قيمت بفرستند
                                                                که حداقل داراي 4 ستاره هستند. ثبت پروژه در اين حالت نشان
                                                                مي دهد که کيفيت انجام کار براي کارفرما از اهميت بالايي
                                                                برخوردار است.
                                                                با انتخاب اين مورد، علاوه بر برخورداري از مزاياي ثبت
                                                                پروژه بصورت ويژه، تعداد ستاره هاي مورد نياز براي انجام
                                                                پروژه بصورت يک برچسب بر روي درخواست درج مي گردد. با توجه
                                                                به اين امتيازات، شانس خيلي بيشتري در جلب توجه مجريان
                                                                (فريلنسرهاي) حرفه اي وجود خواهد داشت و همچنين شانس
                                                                موفقيت پروژه و در نتيجه و رضايت کارفرما خيلي بالا خواهد
                                                                بود.
                                                                بايد توجه داست که هر چقدر تعداد ستاره هاي درخواستي براي
                                                                مجريان بالاتر باشد، تعداد مجرياني که پيشنهاد قيمت خواهند
                                                                فرستاد محدودتر خواهد بود که در اينصورت کارفرما بايستي
                                                                انتظار پيشنهاد قيمت هاي بالاتر ولي نزديک به واقعيت از
                                                                طرف مجريان حرفه اي داشته باشد.</p>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xs-2 col-sm-2"
                                                             style="padding:3% 1%">
                                                            <img src="img/NewProject13.png">
                                                        </div>
                                                    </div>

                                                    <!-- 7 -->
                                                    <!-- 7-1 -->

                                                    <div id="starss1"
                                                         style="background-color: #dcdcdc;display: none;margin-left: 1%;padding:2% 0;border: 1px solid #bfbfbf;border-radius: 5px;margin-bottom: 2%"
                                                         class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <p style="margin-right: 11%">پروژه ستاره
                                                        </p>
                                                        <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3"
                                                             style="padding: 3% 3%">
                                                            <button id="stproject1" onclick="starsproject1()"
                                                                    type="button" class="btn"
                                                                    style="background-color: #7f7f7f;color: #FFFFFF;">
                                                                اضافه شود
                                                            </button>
                                                        </div>
                                                        <?php
                                                        $sql19 = "SELECT * FROM cost order by ID DESC ";
                                                        $query19= mysqli_query($db->connect(), $sql19);
                                                        $results19= mysqli_fetch_assoc($query19);
                                                        echo '
                                                        
                                                        <div style="padding: 3% 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                           '.$results19["star"].'
                                                            تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-8 col-lg-8 col-xs-5 col-sm-5">

                                                            <p style="font-size: 14px">
                                                                با ثبت پروژه بصورت ستاره دار، کارفرما اعلام مي کند که
                                                                براي انجام پروژه اش به مجرياني (فريلنسرهايي) نياز خواهد
                                                                داشت که حداقل داراي تعداد معيني ستاره (امتياز) باشند.
                                                                مثلاً اعلام مي کند که فقط مجرياني پيشنهاد قيمت بفرستند
                                                                که حداقل داراي 4 ستاره هستند. ثبت پروژه در اين حالت نشان
                                                                مي دهد که کيفيت انجام کار براي کارفرما از اهميت بالايي
                                                                برخوردار است.
                                                                با انتخاب اين مورد، علاوه بر برخورداري از مزاياي ثبت
                                                                پروژه بصورت ويژه، تعداد ستاره هاي مورد نياز براي انجام
                                                                پروژه بصورت يک برچسب بر روي درخواست درج مي گردد. با توجه
                                                                به اين امتيازات، شانس خيلي بيشتري در جلب توجه مجريان
                                                                (فريلنسرهاي) حرفه اي وجود خواهد داشت و همچنين شانس
                                                                موفقيت پروژه و در نتيجه و رضايت کارفرما خيلي بالا خواهد
                                                                بود.
                                                                بايد توجه داست که هر چقدر تعداد ستاره هاي درخواستي براي
                                                                مجريان بالاتر باشد، تعداد مجرياني که پيشنهاد قيمت خواهند
                                                                فرستاد محدودتر خواهد بود که در اينصورت کارفرما بايستي
                                                                انتظار پيشنهاد قيمت هاي بالاتر ولي نزديک به واقعيت از
                                                                طرف مجريان حرفه اي داشته باشد.</p>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xs-2 col-sm-2"
                                                             style="padding:3% 1%">
                                                            <img src="img/NewProject13.png">
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12"
                                                             style="padding: 0 11%;font-size: 16px">
                                                            <hr>
                                                            <label>حداقل تعداد ستاره های مورد نياز برای فريلنسر را
                                                                انتخاب نماييد
                                                                :</label>
                                                            <select>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- 7-1 -->
                                                    <!-- 8 -->

                                                    <div id="services"
                                                         style="margin-left: 1%;padding:2% 0;border: 1px solid #bfbfbf;border-radius: 5px;margin-bottom: 2%"
                                                         class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <p style="margin-right: 11%">پروژه استخدامي
                                                        </p>
                                                        <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3"
                                                             style="padding: 3% 3%">
                                                            <button id="serproject" onclick="servicesproject()"
                                                                    type="button" class="btn"
                                                                    style="background-color: #FFFFFF;color: #7f7f7f;border: 1px solid #7f7f7f;">
                                                                اضافه شود
                                                            </button>
                                                            <button id="serproject1" onclick="servicesproject1()"
                                                                    type="button" class="btn"
                                                                    style="background-color: #7f7f7f;color: #FFFFFF;display: none">
                                                                اضافه شده
                                                            </button>

                                                        </div>
                                                        <?php
                                                        $sql20 = "SELECT * FROM cost order by ID DESC ";
                                                        $query20= mysqli_query($db->connect(), $sql20);
                                                        $results20= mysqli_fetch_assoc($query20);
                                                        echo '
                                                        
                                                        <div style="padding: 3% 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                           '.$results20["recruitment"].'
                                                            تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-8 col-lg-8 col-xs-5 col-sm-5">

                                                            <p style="font-size: 14px">
                                                                با ثبت پروژه استخدامي، کارفرما اعلام مي کند که براي
                                                                انجام پروژه اش به مجرياني (فريلنسرهايي) نياز خواهد داشت
                                                                که بصورت حضوري)تمام وقت يا ساعتي( براي آنها يک کار معيني
                                                                را انجام بدهند. پروژه هاي بازاريابي نيز بايد به اين صورت
                                                                ثبت سفارش شوند. در ثبت پروژه هاي حضوري، هم کارفرما و هم
                                                                مجري نياز به ارائه اطلاعات شخصي و تماس خود مي باشند.</p>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xs-2 col-sm-2"
                                                             style="padding:3% 1%">
                                                            <img src="img/NewProject14.png">
                                                        </div>
                                                    </div>

                                                    <!-- 8 -->
                                                    <!-- 9 -->

                                                    <div id="sectranslate"
                                                         style="display: none;margin-left: 1%;padding:2% 0;border: 1px solid #bfbfbf;border-radius: 5px;margin-bottom: 2%"
                                                         class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <p style="margin-right: 11%;padding-left: 6%">پروژه محرمانه با
                                                            قرارداد عدم افشا
                                                            <b style="color: #2196F3;font-size: 12px">
                                                                (اين آپشن بصورت خودکار پس از اينکه تيک محرمانه بودن
                                                                پروژه ترجمه زده شد فعال مي گردد. چنانچه تمايل به پرداخت
                                                                اين هزينه نمي باشيد و پروژه شما محرمانه نيست، در قسمت
                                                                ثبت پروژه تيک محرمانه بودن پروژه را حذف نماييد)

                                                            </b>

                                                        </p>
                                                        <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3"
                                                             style="padding: 3% 3%">
                                                            <button id="sectraproject" onclick="sectranslateproject()"
                                                                    type="button" class="btn"
                                                                    style="background-color: #FFFFFF;color: #7f7f7f;border: 1px solid #7f7f7f;">
                                                                اضافه شود
                                                            </button>
                                                            <button id="sectraproject1" onclick="sectranslateproject1()"
                                                                    type="button" class="btn"
                                                                    style="background-color: #7f7f7f;color: #FFFFFF;display: none">
                                                                اضافه شده
                                                            </button>

                                                        </div>
                                                        <?php
                                                        $sql21 = "SELECT * FROM cost order by ID DESC ";
                                                        $query21= mysqli_query($db->connect(), $sql21);
                                                        $results21= mysqli_fetch_assoc($query21);
                                                        echo '
                                                        
                                                        <div style="padding: 3% 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                           '.$results21["secret2"].'
                                                            تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-8 col-lg-8 col-xs-5 col-sm-5">

                                                            <p style="font-size: 14px">
                                                                با ثبت پروژه بصورت محرمانه با قرارداد عدم افشا که بيشتر
                                                                براي پروژه هاي ترجمه اسناد محرمانه اشخاص کاربرد دارد،
                                                                کارفرما تمايل دارد که هر مترجمي به محتواي متن او دسترسي
                                                                نداشته باشد و انحصاراً ترجمه توسط اشخاص و موسساتي که
                                                                توافقنامه محرمانه با زيگورات مارکت بصورت کتبي امضا نموده
                                                                اند انجام شود. در صورتي که مجري انجام پروژه از قانون
                                                                محرمانه بودن پروژه را نقض نمايد، تخلف او از طريق مراجع
                                                                قانوني قابل پيگرد خواهد بود. اين مورد براي ساير پروژه ها
                                                                نيز در صورت تمايل کارفرما، قابل اجرا خواهد بود.
                                                            </p>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xs-2 col-sm-2"
                                                             style="padding:3% 1%">
                                                            <img src="img/NewProject15.png">
                                                        </div>
                                                    </div>

                                                    <!-- 9 -->

                                                    <!-- 11 -->

                                                    <div id="company"
                                                         style="margin-left: 1%;padding:2% 0;border: 1px solid #bfbfbf;border-radius: 5px;margin-bottom: 2%"
                                                         class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <p style="margin-right: 11%">پروژه شرکتی
                                                        </p>
                                                        <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3"
                                                             style="padding: 3% 3%">
                                                            <button id="compproject" onclick="companyproject()"
                                                                    type="button" class="btn"
                                                                    style="background-color: #FFFFFF;color: #7f7f7f;border: 1px solid #7f7f7f;">
                                                                اضافه شود
                                                            </button>
                                                            <button id="compproject1" onclick="companyproject1()"
                                                                    type="button" class="btn"
                                                                    style="background-color: #7f7f7f;color: #FFFFFF;display: none">
                                                                اضافه شده
                                                            </button>

                                                        </div>
                                                        <?php
                                                        $sql22 = "SELECT * FROM cost order by ID DESC ";
                                                        $query22= mysqli_query($db->connect(), $sql22);
                                                        $results22= mysqli_fetch_assoc($query22);
                                                        echo '
                                                        
                                                        <div style="padding: 3% 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                           '.$results22["firm"].'
                                                            تومان
                                                        </div>
                                                      
                                                        ';
                                                        ?>
                                                        <div class="col-md-8 col-lg-8 col-xs-5 col-sm-5">

                                                            <p style="font-size: 14px">
                                                                با ثبت پروژه شرکتی، کارفرما اعلام مي کند که براي انجام
                                                                پروژه اش به يک شرکت فريلنسری نياز دارد تا پروژه را انجام
                                                                دهد. اين آپشن برای زمانی مفيد است که پروژه سنگين باشد و
                                                                يک فريلنسر قادر به انجام کامل آن در بازه زمانی مشخص شده
                                                                توسط کارفرما نباشد و همچنين در مواردی که پروژه از بخش
                                                                های مختلفی تشکيل شده باشد بطوريکه برای اجرای آن به تخصص
                                                                های مختلف نياز باشد که در يک جا مستقر شده باشند تا
                                                                بتوانند در قالب يک تيم پروژه را جلو ببرند و اگر هر تخصصی
                                                                از تخصصی ديگر سوالی در مورد پروژه داشته باشد در کمترين
                                                                زمان و بصورت فيزيکی و از نزديک سوال خود را پرسيده و
                                                                مرتفع سازد.</p>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xs-2 col-sm-2"
                                                             style="padding:3% 1%">
                                                            <img src="img/NewProject17.png">
                                                        </div>
                                                    </div>

                                                    <!-- 11 -->
                                                    <br><br><br><br>
                                                    <button  type="button" id="text3"
                                                            class="btn  btn-block"
                                                            style="font-size: 22px;width: 90%;background-color: #009900;color: #ffffff;">
                                                        پرداخت و ایجاد پروژه
                                                    </button>


                                                </div>
                                                <!--right-->
                                            </div>

                                        </div>

                                    </div>
                                    <!--bojeanjam-->

                                </div>
                            </div>
                        </div>

                        <!-----register project----->

                    </div>
                    <div class="tab-pane" id="features2">
                        <br><br><br><br>
                        <p style="color: #2196F3;margin-right: 5%" class="lead">آيا زمان انجام مسابقه مهم است (مسابقه
                            فوری)؟</p>

                        <!-----register match----->
                        <div style="direction: rtl;float: right;">
                            <div id="tab" class="btn-group" data-toggle="buttons-radio">

                                <ul class="nav nav-pills nav-fill navtop">
                                    <li class="nav-item">
                                        <a onclick="tabshow()" class="nav-link" href="#menu1" data-toggle="tab"
                                           style="height:159px;width: 434px;padding: 0;;border-radius: 5px">
                                            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12"
                                                 style="border: 1px solid #2196F3;padding: 4%;border-radius: 5px">
                                                <div>


                                                    <div class="col-md-9 col-lg-9 col-xs-9 col-sm-9" style="">

                                                        <p style="color: red"><b>فوری است (24 ساعت)</b></p>
                                                        <p style="font-size: 15px;">
                                                            در مدت زمان يک روز، نتايج متنوع از فريلنسرهاي مختلف دريافت
                                                            کنيد.
                                                        </p>
                                                        <p style="color: red;font-size: 17px">250 هزار تومان </p>


                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3"
                                                         style="float: right;">
                                                        <img src="img/NewProject5.png" style="">

                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a onclick="tabshow1()" class="nav-link" href="#menu2" data-toggle="tab"
                                           style="height: 159px;width: 434px;padding: 0;border-radius: 5px">

                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                                 style="border: 1px solid #2196F3;padding: 4%;border-radius: 5px">
                                                <div>

                                                    <div class="col-md-9 col-lg-9 col-xs-9 col-sm-9"
                                                         style="margin-bottom: 3%">
                                                        <p><b>فوری نيست (2 روز تا 10 روز)</b></p>
                                                        <p style="font-size: 15px;">

                                                            با دادن وقت کافي به فريلنسرها، به آنها اجازه دهيد تا خلاقيت
                                                            خود را به کار گيرند ونتايج با کيفيت بالايي به شما تحويل
                                                            دهند.


                                                        </p>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3"
                                                         style="float: right;">
                                                        <img src="img/NewProject4.png" style="">
                                                    </div>
                                                </div>
                                            </div>

                                        </a>
                                    </li>

                                </ul>
                            </div>


                            <div class="tab-content float-right">

                                <div class="tab-pane " role="tabpanel" id="menu11111">

                                    <!--fori-->
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <p style="color: #2196F3;">بودجه انجام مسابقه :</p>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12"
                                         style="border: 1px solid darkgrey;padding: 0;border-radius: 5px">
                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12"
                                             id="headspan"  style="background-color: #dedede;text-align: center">
                                            <h3 style="">نتايج قابل قبول</h3>
                                            <p>انتظار دريافت حدود 5 نتيجه را داشته باشيد</p>

                                        </div>
                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                            <!--rang-->
                                            <div class="row">
                                                <div class="col-md-12 board">
                                                    <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                                                    <div class="board-inner">
                                                        <ul class="nav nav-tabs" id="myTab">
                                                            <div class="liner"></div>
                                                            <li class="active" style="text-align: center">
                                                                <a href="#home" onclick="spanhome()"  aria-controls="home" role="tab"data-toggle="tab" title="User Experience">
                                                <span class="round-tabs one">
                                                <i class="icon icon-profile-male"></i>
                                                </span>
                                                                </a>
                                                                <span style="color: #000;">
                                                         1.3<br>میلیون تومان
                                                    </span>
                                                            </li>
                                                            <li style="text-align: center"><a href="#profile" onclick="spanprofile()" aria-controls="profile"role="tab" data-toggle="tab" title="Sketch">
                                                <span class="round-tabs two">
                                                    <i class="icon icon-pencil"></i>
                                                </span>
                                                                </a>
                                                                <span style="color: #000;">
                                                        3.9<br>میلیون تومان
                                                    </span>
                                                            </li>
                                                            <li style="text-align: center"><a href="#prototyping"  onclick="spanprototyping()" aria-controls="prototyping" role="tab" data-toggle="tab" title="Prototyping">
                                                <span class="round-tabs three">
                                                     <i class="icon icon-layers"></i>
                                                </span> </a>
                                                                <span style="color: #000;">
                                                         6.5<br>میلیون تومان
                                                    </span>
                                                            </li>
                                                            <li style="text-align: center;"><a href="#uidesign"  onclick="spanuidesign()" aria-controls="uidesign"role="tab" data-toggle="tab" title="UI Design">
                                                <span class="round-tabs four">
                                                         <i class="icon icon-aperture"></i>
                                                </span>
                                                                </a>
                                                                <span style="color: #000;">
                                                         9.1<br>میلیون تومان
                                                    </span>
                                                            </li>
                                                            <li style="text-align: center"><a href="#doner"  onclick="spandoner()" aria-controls="doner" role="tab" data-toggle="tab" title="Development">
                                                <span class="round-tabs five">
                                                     <i class="icon icon-tools-2"></i>
                                                </span> </a>
                                                                <span style="color: #000;">
                                                        بیش از 9.1<br>میلیون تومان
                                                    </span>
                                                            </li>

                                                        </ul>
                                                    </div>


                                                </div>
                                            </div>
                                            <!--rang-->
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center;margin: 7% 0">

                                            <label>انتخاب دستی :</label>
                                            <input  type="text" placeholder="مبلغ به تومان">
                                        </div>


                                    </div>


                                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="direction: ltr">

                                        <button onclick="ejrabtn3()" class="btn btn-success" style="width: 16%;background-color: #2196F3;margin: 5% 0;border: 1px solid #2196F3;">ادامه
                                        </button>

                                </div>
                                <!--left-->

                                <div class="col-md-offset-3 col-lg-offset-3 col-md-6 col-lg-6 col-xs-12 col-sm-12" id="ejra3"
                                     style="display: none;font-size: 14px;background-color: #f4f4f4;border: 1px solid darkgrey;border-radius: 5px">
                                    <p style="color: #2196F3;margin-top: 6%;;text-align: center">خلاصه
                                        هزينه آپشن هاي ثبت پروژه</p>
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                         style="padding: 0;margin-bottom: 3%">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                             style="padding: 0;text-align: left">رایگان
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                             style="padding: 0;">تعریف مسابقه
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                         style="padding: 0;margin-bottom: 3%">
                                        <?php
                                        $sql23 = "SELECT * FROM cost order by ID DESC ";
                                        $query23= mysqli_query($db->connect(), $sql23);
                                        $results23= mysqli_fetch_assoc($query23);
                                        echo '
                                                        
                                                        <div style="padding: 0 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                           '.$results23["matchtime"].'   تومان  
                                                        </div>
                                                      
                                                        ';
                                        ?>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                             style="padding: 0;float: right">هزينه زمان انجام مسابقه
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                         style="padding: 0;margin-bottom: 3%">
                                        <?php
                                        $sql24 = "SELECT * FROM cost order by ID DESC ";
                                        $query24= mysqli_query($db->connect(), $sql24);
                                        $results24= mysqli_fetch_assoc($query24);
                                        echo '
                                                        
                                                        <div style="padding: 0 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                           '.$results24["feegarantee"].'   تومان  
                                                        </div>
                                                      
                                                        ';
                                        ?>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                             style="padding: 0;float: right">مبلغ گروگذاري

                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                         style="padding: 0;margin-bottom: 3%">
                                        <hr style="border-top: 1px solid darkgray;">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                             style="padding: 0;text-align:left">12،000 تومان
                                        </div>

                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                             style="padding: 0;">جمع کل
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                         style="padding: 0;margin-bottom: 3%">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                             style="padding: 0;">
                                            <button type="button" class="btn btn1"
                                                    style="color: #6d6d6d;background-color: #FFFFFF;border:2px solid darkgrey">
                                                اعمال کد
                                            </button>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                             style="padding: 0;">
                                            <input type="text" class="form-control"
                                                   style="border-radius: 5PX;" placeholder="کد تخفیف">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                         style="padding: 0;margin-bottom: 3%">
                                        <hr style="border-top: 1px solid darkgray;">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                             style="padding: 0;text-align:left">12،000 تومان
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                             style="padding: 0;text-align: right">جمع کل قابل پرداخت
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                         style="padding: 0;margin-bottom: 3%">
                                        <hr style="border-top: 1px solid darkgray;">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                             style="padding: 0;text-align: left">
                                            <button class="btn btn-success"
                                                    style="font-size: 10px;background-color: #009900;border-color: #009900">
                                                پرداخت و ثبت پروژه
                                            </button>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                             style="padding: 0;">
                                            <button class="btn btn-success"
                                                    style="font-size: 10px;background-color: #00aeef;border-color: #00aeef">
                                                ذخیره پیش نویس
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                         style="text-align: center;padding: 0 42%">

                                        <img src="img/NewProject6.png" id="ima11"
                                             onmouseenter="hoverbrand2()">
                                        <img src="img/NewProject7.png" id="ima21"
                                             onmouseleave="hoverbrand21()" style="display: none;">
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                         style="text-align: center;">
                                        <p style="color: #2196F3;"><b>ضمانت بازگشت وجه</b></p>
                                        <p style="text-align: justify">نتيجه کار را آنطور که مد نظرتان
                                            است تحويل بگيريد در غير اينصورت به کمک سيستم گروگذاري
                                            زيگورات پول خود را پس بگيريد.</p>
                                        <a href="#">
                                            <p style="color: #2196F3">سياست برگشت پول زيگورات را
                                                ببينيد</p>
                                        </a>
                                    </div>


                                </div>
                                <!--left-->
                                <!--fori-->

                                </div>
                                <div class=" col-md-12 col-lg-12 col-sm-12 col-xs-12 tab-pane" role="tabpanel"
                                     id="menu22222">
                                    <br><br><br>

                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="margin-right: 2%">

                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                                            <select id="area-dropdown222" name="day">
                                                <option disabled="disabled" selected>روز</option>
                                                <option value="area222">2</option>
                                                <option value="area223">3</option>
                                                <option value="area224">4</option>
                                                <option value="area225">5</option>
                                                <option value="area226">6</option>
                                                <option value="area227">7</option>
                                                <option value="area228">8</option>
                                                <option value="area229">9</option>
                                                <option value="area220">10</option>
                                            </select>&nbsp&nbsp
                                            <label class="routedropdown222" style="display: none">180 هزار تومان</label>
                                            <label class="routedropdown223" style="display: none">110 هزار تومان</label>
                                            <label class="routedropdown224" style="display: none">رایگان</label>
                                        </div>
                                        <script>
                                            $(".routedropdown224").hide();
                                            $("#area-dropdown222").change(function () {
                                                if ($(this).val() === "area224" || "area225" || "area226" || "area227" || "area228" || "area229" || "area220") {
                                                    $(".routedropdown224").show();
                                                } else {
                                                    $(".routedropdown224").hide();
                                                }

                                            });

                                            $(".routedropdown222").hide();
                                            $("#area-dropdown222").change(function () {
                                                if ($(this).val() === "area222") {
                                                    $(".routedropdown222").show();
                                                    $(".routedropdown224").hide();
                                                } else {
                                                    $(".routedropdown222").hide();
                                                }

                                            });

                                            $(".routedropdown223").hide();
                                            $("#area-dropdown222").change(function () {
                                                if ($(this).val() === "area223") {
                                                    $(".routedropdown223").show();
                                                    $(".routedropdown224").hide();
                                                } else {
                                                    $(".routedropdown223").hide();
                                                }

                                            });
                                        </script>

                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                                            <p style="color: #2196F3;">براي اجراي مسابقه، چند روز وقت مي دهيد؟</p>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="direction: ltr">

                                                <button class="btn btn-success" onclick="ejrabtn()"
                                                        style="width: 16%;background-color: #2196F3;border: 1px solid #2196F3;margin: 5% 0">ادامه
                                                </button>

                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="display: none;" id="ejra">
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                            <p style="color: #2196F3;">بودجه انجام مسابقه :</p>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12"
                                             style="border: 1px solid darkgrey;padding: 0;border-radius: 5px">
                                            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12"
                                               id="headspan3"  style="background-color: #dedede;text-align: center">
                                                <h3 style="">نتايج قابل قبول</h3>
                                                <p>انتظار دريافت حدود 5 نتيجه را داشته باشيد</p>

                                            </div>
                                            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                                <!--rang-->
                                                <div class="row">
                                                <div class="col-md-12 board">
                                                        <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                                                <div class="board-inner">
                                                  <ul class="nav nav-tabs" id="myTab">
                                                <div class="liner"></div>
                                                <li class="active" style="text-align: center">
                                                <a href="#home3" onclick="spanhome3()"  aria-controls="home" role="tab"data-toggle="tab" title="User Experience">
                                                <span class="round-tabs one">
                                                <i class="icon icon-profile-male"></i>
                                                </span>
                                                </a>
                                                    <span style="color: #000;">
                                                         1.3<br>میلیون تومان
                                                    </span>
                                                </li>
                                                <li style="text-align: center"><a href="#profile3" onclick="spanprofile3()" aria-controls="profile"role="tab" data-toggle="tab" title="Sketch">
                                                <span class="round-tabs two">
                                                    <i class="icon icon-pencil"></i>
                                                </span>
                                                </a>
                                                    <span style="color: #000;">
                                                        3.9<br>میلیون تومان
                                                    </span>
                                                </li>
                                                <li style="text-align: center"><a href="#prototyping3"  onclick="spanprototyping3()" aria-controls="prototyping" role="tab" data-toggle="tab" title="Prototyping">
                                                <span class="round-tabs three">
                                                     <i class="icon icon-layers"></i>
                                                </span> </a>
                                                    <span style="color: #000;">
                                                         6.5<br>میلیون تومان
                                                    </span>
                                                </li>
                                                <li style="text-align: center;"><a href="#uidesign3"  onclick="spanuidesign3()" aria-controls="uidesign"role="tab" data-toggle="tab" title="UI Design">
                                                <span class="round-tabs four">
                                                         <i class="icon icon-aperture"></i>
                                                </span>
                                                 </a>
                                                    <span style="color: #000;">
                                                         9.1<br>میلیون تومان
                                                    </span>
                                                </li>
                                                      <li style="text-align: center"><a href="#doner3"  onclick="spandoner3()" aria-controls="doner" role="tab" data-toggle="tab" title="Development">
                                                <span class="round-tabs five">
                                                     <i class="icon icon-tools-2"></i>
                                                </span> </a>
                                                          <span style="color: #000;">
                                                        بیش از 9.1<br>میلیون تومان
                                                    </span>
                                                      </li>

                                                  </ul>
                                                </div>
                                                </div>
                                                </div>
                                                <!--rang-->
                                            </div>
                                            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center;margin: 7% 0">

                                                <label>انتخاب دستی :</label>
                                                <input  type="text" placeholder="مبلغ به تومان">
                                            </div>


                                        </div>
                                            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="direction: ltr">

                                                <button class="btn btn-success" onclick="ejrabtn2()"
                                                        style="width: 16%;background-color: #2196F3;margin: 5% 0;border: 1px solid #2196F3;">ادامه
                                                </button>

                                            </div>
                                    </div>

                                    </div>
                                    <!--left-->

                                    <div id="ejra2" class="col-md-offset-3 col-lg-offset-3 col-md-6 col-lg-6 col-xs-12 col-sm-12"
                                         style="display: none;font-size: 14px;background-color: #f4f4f4;border: 1px solid darkgrey;border-radius: 5px">
                                        <p style="color: #2196F3;margin-top: 6%;;text-align: center">خلاصه
                                            هزينه آپشن هاي ثبت پروژه</p>
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                             style="padding: 0;margin-bottom: 3%">
                                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                 style="padding: 0;text-align: left">رایگان
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                 style="padding: 0;">تعریف مسابقه
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                             style="padding: 0;margin-bottom: 3%">
                                            <?php
                                            $sql25 = "SELECT * FROM cost order by ID DESC ";
                                            $query25= mysqli_query($db->connect(), $sql25);
                                            $results25= mysqli_fetch_assoc($query25);
                                            echo '
                                                        
                                                        <div style="padding: 0 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                           '.$results25["matchtime"].'تومان  
                                                        </div>
                                                      
                                                        ';
                                            ?>
                                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                 style="padding: 0;float: right">هزينه زمان انجام مسابقه
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                             style="padding: 0;margin-bottom: 3%">
                                            <?php
                                            $sql26 = "SELECT * FROM cost order by ID DESC ";
                                            $query26= mysqli_query($db->connect(), $sql26);
                                            $results26= mysqli_fetch_assoc($query26);
                                            echo '
                                                        
                                                        <div style="padding: 0 1%"
                                                             class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
                                                           '.$results26["feegarantee"].'تومان  
                                                        </div>
                                                      
                                                        ';
                                            ?>
                                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                 style="padding: 0;float: right">مبلغ گروگذاري

                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                             style="padding: 0;margin-bottom: 3%">
                                            <hr style="border-top: 1px solid darkgray;">
                                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                 style="padding: 0;text-align:left">12،000 تومان
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                 style="padding: 0;">جمع کل
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                             style="padding: 0;margin-bottom: 3%">
                                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                 style="padding: 0;">
                                                <button type="button" class="btn btn1"
                                                        style="color: #6d6d6d;background-color: #FFFFFF;border:2px solid darkgrey">
                                                    اعمال کد
                                                </button>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                 style="padding: 0;">
                                                <input type="text" class="form-control"
                                                       style="border-radius: 5PX;" placeholder="کد تخفیف">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                             style="padding: 0;margin-bottom: 3%">
                                            <hr style="border-top: 1px solid darkgray;">
                                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                 style="padding: 0;text-align:left">12،000 تومان
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                 style="padding: 0;text-align: right">جمع کل قابل پرداخت
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                             style="padding: 0;margin-bottom: 3%">
                                            <hr style="border-top: 1px solid darkgray;">
                                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                 style="padding: 0;text-align: left">
                                                <button class="btn btn-success"
                                                        style="font-size: 10px;background-color: #009900;border-color: #009900">
                                                    پرداخت و ثبت پروژه
                                                </button>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"
                                                 style="padding: 0;">
                                                <button class="btn btn-success"
                                                        style="font-size: 10px;background-color: #00aeef;border-color: #00aeef">
                                                    ذخیره پیش نویس
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                             style="text-align: center;padding: 0 42%">

                                            <img src="img/NewProject6.png" id="ima31"
                                                 onmouseenter="hoverbrand3()">
                                            <img src="img/NewProject7.png" id="ima32"
                                                 onmouseleave="hoverbrand31()" style="display: none;">
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"
                                             style="text-align: center;">
                                            <p style="color: #2196F3;"><b>ضمانت بازگشت وجه</b></p>
                                            <p style="text-align: justify">نتيجه کار را آنطور که مد نظرتان
                                                است تحويل بگيريد در غير اينصورت به کمک سيستم گروگذاري
                                                زيگورات پول خود را پس بگيريد.</p>
                                            <a href="#">
                                                <p style="color: #2196F3">سياست برگشت پول زيگورات را
                                                    ببينيد</p>
                                            </a>
                                        </div>


                                    </div>
                                    <!--left-->



                                </div>
                            </div>
                        </div>


                        <!-----register match----->

                    </div>
                </div>
            </div>
            <!-- register-->


        </div>
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
                $(this).find('.fa-caret-down').css('display', 'none');
                $(this).find('.fa-caret-up').css('display', 'block');

            },
            function () {
                $(this).find('.fa-caret-down').css('display', 'block');
                $(this).find('.fa-caret-up').css('display', 'none');

            }
        )
    })
</script>
<script>
    $(document).ready(function () {
        $('.tag_list').click(function () {
            var id = $(this).data('id');
            $(this).addClass('tag_list_hide');
        });
    });

</script>

</html>