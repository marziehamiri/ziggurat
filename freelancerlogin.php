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
    <link href="css/all.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">
    <link href="css/dropdowntopmenu.css" rel="stylesheet">
    <link href="css/megamenu.css" rel="stylesheet">
    <script src="js/jq.min.js" type="text/javascript"></script>

</head>
<body>
<div  style="overflow: hidden">
<!--header-->
<?php include "inc/headd.php"; ?>
<!--header-->
<!--main-->

        <div>
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="direction: rtl;padding: 3%">
    <h3 style="color: #2196F3">به زيگورات مارکت خوش آمديد. لطفاً پروفايل خود را تکميل نماييد</h3>
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
        <h4 style="margin: 2% 0">پروفايل شما چه نوعي است؟
        </h4>
        <p style="font-size: 17px"><input type="radio" name="profil1" onclick="freeonly()">&nbsp;منحصراً فريلنسر هستم و فعاليت کارفرمايي نخواهم داشت </p>
        <p style="font-size: 17px"><input type="radio" name="profil1" onclick="emponly()">&nbsp; کارفرما هستم و فعاليت فريلنسري نخواهم داشت</p>
        <p style="font-size: 17px"><input type="radio" name="profil1" onclick="freevemp()">&nbsp; کارفرما هستم و هم فريلنسر</p>
        <p style="font-size: 17px"><input type="radio" name="profil1" onclick="freenoemp()">&nbsp; شرکت فريلنسری هستم که فعاليت کارفرمايي نخواهد داشت</p>
        <p style="font-size: 17px"><input type="radio" name="profil1" onclick="freeemp()">&nbsp; شرکت فريلنسری هستم که فعاليت کارفرمايي خواهد داشت</p>
    </div>
    <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12 col-md-offset-2 col-lg-offset-2" id="headpage" style="margin-top: 3%">
        <h3 style="background: #2196f3;
    color: white;
    padding: 1%;text-align: center;
    border-radius: 15px;">برای ادامه روند ثبت نام و تکمیل پروفایل ، یکی از گزینه های بالا را انتخاب کنید.</h3>
    </div>
</div>
    <!----freeonly---->
            <form action="request/general/addfreelancer.php" method="post">
<div id="freeonly1" class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="display: none;direction: rtl;padding: 3%">


    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center">
        <button type="button" class="btn btn-primary" style="background-color: #2196F3;width: 15%" onclick="profilemore()">ادامه</button>
    </div>
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" id="profilemore1" style="display: none;padding: 0;">
        <h4 style="margin: 2% 0">شرايط و ضوابط:
        </h4>
        <p style="text-align: justify">
            اطلاعات کلی فريلنسری شما که نشان دهنده فعاليت حرفه ای شماست، در وب سايت و اپليکيشن های موبايل زيگورات مارکت بصورت عمومی در اختيار بازديد کنندگان (شامل کارفرمايان، ساير فريلنسرها و شرکت های فريلنسری و هر بازديد کننده ديگر) پلتفرم های مذکور قرار خواهد گرفت ولی زيگورات مارکت اين اطمينان را به شما می دهد که ساير اطلاعات وارد شده توسط شما، به عنوان محرمانه تلقی شده و تحت هيچ شرايطی در اختيار شخص ثالثی قرار نخواهند گرفت. هنگامی که شما پروژه را برنده می شويد، از طريق سيستم پيام رسان زيگورات با کارفرمای آن پروژه در ارتباط خواهيد بود و اکيداً توصيه می شود تمامی اطلاعات رد و بدل شده وای توافقات انجام شده با کارفرما از طريق اين سيستم پيام رسان انجام گيرد تا چنانچه در حين يا بعد از انجام پروژه با کارفرما اختلافی پيش آيد، تيم داوری زيگورات به مستندات رجوع کرده و بر اساس آنها رای خود را صادر نمايد. چنانچه ناچار باشيد از طريق تلفن، ايميل يا هر وسيله ارتباطی ديگری مطلبی را برای کارفرما توضيح دهيد يا از کارفرما در موردی که ابهام داريد سوالاتی بپرسيد که به روند شفاف سازی هدف پروژه يا تسريع در روند انجام پروژه و يا بالا بردن کيفيت کار کمک می کند، توصيه اکيد می گردد که چنانچه توافقی بصورت شفاهی بين شما و کارفرما صورت پذيرفت، حتماً آن توافق را با استناد به مکاتبات شما در تاريخ و ساعت مورد نظر در سيستم پيام رسان زيگورات مستند سازی نماييد و از کارفرما بخواهيد که موافقت خود را در سيستم پيام رسان اعلام نمايد. بديهی است که در مواردی که يکی از طرفين دعوی ادعايي نمايند که در مستندات موجود در پيام رسان زيگورات وجود نداشته باشد، آن ادعا از طرف تيم داوری زيگورات بصورت خودکار رد می گردد هر چند که در جای ديگری غير از سيستم پيام رسان زيگورات ثبت شده باشد.

        </p>
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center">

            <label style="float: right"> <input type="checkbox" onclick="checkterm()" id="checkterm0" class="form-group">&nbsp; مذکور در شرايط و ضوابط را مطالعه نموده و موافقت خود را اعلام می نمايم.</label>
<br><br>
            <button type="button" class="btn btn-primary" disabled style="background-color: #2196F3;width: 15%" id="termbtn" onclick="term1()">ادامه</button>
        </div>
    </div>

    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="display: none;" id="khadamat">

    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
        <!--cat-->
        <h4 style="margin: 2% 0">چه خدماتي قادر هستيد به کارفرماها ارائه دهيد؟
        </h4>
        <div class="panel panel-default col-md-3 col-lg-3 col-xs-6 col-sm-6" style="padding: 0;float: right;">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><span class="caret pull-left"></span>
                        </span>دسته بندی موضوعی
                    </a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse" style="text-align: right">
                <div class="panel-body">
                    <table class="table" style="margin-bottom: 0">
                        <tr>
                            <td style="border-top: none;">
                                <input type="radio" name="td12" id="td12" onclick="funtd12()">&nbsp;همه دسته بندی ها

                            </td>
                        </tr>
                        <tr>
                            <td style="">
                                <input type="radio" name="td12" id="td22" onclick="funtd22()">&nbsp;انتخاب دسته بندی

                                <table class="table"  id="catinputx" style="display: none;margin-bottom: 0">
                                    <?php

                                    $sql = "SELECT * FROM cat";
                                    $query = mysqli_query($db->connect(), $sql);
                                    while ($results = mysqli_fetch_assoc($query)) {
                                        ?>

                                        <tr > <td><input name="position[]" type="checkbox" onclick="catput(<?php echo $results['id']; ?>)" value="<?php echo $results['id']; ?>">
                                                &nbsp;<?php echo $results['name']; ?><br></td></tr>
                                        <?php
                                    }

                                    ?></table>


                            </td>
                        </tr>




                    </table>
                </div>
            </div>
        </div>
        <script>
            function funtd22() {
                var td12=document.getElementById("td12");
                var td22=document.getElementById("td22");
                var catinputx=document.getElementById("catinputx");
                if (td22.checked ){
                    document.getElementById("catinputx") .style.display="block";

                }
            } function funtd12() {
                var td12=document.getElementById("td12");
                var td22=document.getElementById("td22");
                var catinputx=document.getElementById("catinputx");
                if (td12.checked ){
                    document.getElementById("catinputx") .style.display="none";

                }
            }
            function catput(id) {

                if(id==null){
                    return;
                }
                let subCat = document.getElementsByName(id);
                if(subCat.length > 0){
                    for(let index=0; index <= subCat.length ; index++){
                        // subCat[index].parentElement.removeChild(subCat[index]);
                        subCat[index].style.display = subCat[index].style.display=== 'none' ? 'block' :'none';
                    }
                }
                else{

                    $.ajax({
                        url: 'request/general/addsubcat.php',
                        data: {
                            catId: id
                        },
                        dataType: 'json',
                        type: 'POST',
                        success: function (data) {
                            $("#subinput").append(data['results11']);
                            console.log('datas',data);

                        }
                    });
                }
            }



        </script>
        <script>
            function subcatput() {

                var chkArray = [];

                /* look for all checkboes that have a class 'chk' attached to it and check if it was checked */
                $(".chk:checked").each(function() {
                    chkArray.push($(this).val());
                });

                /* we join the array separated by the comma */
                var selected;
                selected = chkArray.join(',') ;

                return selected;
            }


        </script>


        </div>
        <!--subcat--><br><br>
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="">
        <h4 class="show-on-hover " style="margin: 2% 0">در چه زمينه هايي مهارت داريد؟
            <i class="fas fa-info-circle dropdown-toggle" data-toggle="dropdown" style="color: red" ></i>
        <p class="dropdown-menu" style="top: 17%;text-align: justify;right: 20%;line-height: 2;padding: 1%" role="menu">
            تعداد مجاز مهارت ها براي عضويت استاندارد 12 مهارت، براي عضويت نقره اي 20 مهارت، براي عضويت برنزي 40 مهارت و براي عضويت طلايي نامحدود مي باشد. چنانچه مايل به انتخاب مهارت هاي بيشتري هستيد، مي توانيد عضويت خود را از
             <a href="Tariffs.php">اينجا</a>
            ارتقا دهيد

        </p></h4>
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="">

            <p style="background-color: #da4651;color: #ffffff;font-size: 18px;padding: 1%;border-radius: 5px;">
                با توجه به نوع عضويت شما، حداکثر XXX مهارت قابل انتخاب مي باشد. چنانچه مايل به انتخاب مهارت هاي بيشتري هستيد، عضويت خود را از
                <a href="Tariffs.php">اينجا </a>
                ارتقا دهيد

            </p>

        </div>
        <div class="panel panel-default col-md-3 col-lg-3 col-xs-6 col-sm-6" style="padding: 0;float: right;">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse31"><span class="caret pull-left"></span>
                        </span>زیر دسته بندی ها</a>
                </h4>
            </div>
            <div id="collapse31" class="panel-collapse collapse" style="text-align: right">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td  style="border-top: none;">
                                <input type="checkbox" name="td1-2">&nbsp;همه زیر دسته بندی ها
                                <hr>
                            </td>
                        </tr>
                        <tr id="subinput">

                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--tajrobe-->
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
            <h4 style="margin: 2% 0">تجربه کاري شما چگونه است؟
            </h4>
            <p style="font-size: 17px"><input type="radio" name="workexperience" value="0">&nbsp;مبتدي هستم و نياز به کسب مهارت در زمينه کاري خود هستم</p>
            <p style="font-size: 17px"><input type="radio" name="workexperience" value="1">&nbsp; تجربه متوسطي در زمينه کاري خود دارم</p>
            <p style="font-size: 17px"><input type="radio" name="workexperience" value="2">&nbsp; سال هاي زيادي تجربه کاري دارم و قادر به انجام پروژه هاي سنگين و پيچيده مي باشم</p>
        </div>
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center">
        <button type="button" class="btn btn-primary" style="background-color: #2196F3;width: 15%" onclick="uplcon()" >ادامه</button>
    </div>
    </div>



    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="display: none;" id="upl">

    <!--upload img profile-->
    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6">
                <div class="form-group">
                    <h4>عکس مناسبي را براي پروفايل خود انتخاب نماييد
                    <i class="fas fa-info-circle" data-toggle="tooltip" title="سعي نماييد يک عکس پرسنلي که صورت شما را بطور واضح نشان مي دهد براي پروفايل خود انتخاب نماييد. به تجربه ثابت شده است، فريلنسرهايي که عکس پرسنلي دارند، شانس بيشتري در جلب نظر کارفرمايان و دريافت پروژه دارند. توجه نماييد که آواتار قبل قبول نيست و عکس شما پس از تاييد بر روي پروفايل شما قرار خواهد گرفت." style="color: red" ></i>
                    </h4><p>(فرمت هاي قابل قبول jpg، jpeg و png با حجم حداکثر يک مگابايت)
                    </p>
                        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    آپلود عکس <input type="file" accept="image/png, image/jpeg, image/gif" id="imgInp" name="profileimgname">
                </span>
            </span>
                        <input id='urlname'type="text" class="form-control"  readonly style="">
                    </div>
                    <div style=" width: 18%;text-align: center; margin-right: 8% ; ">
                        <img  id='img-upload' >
                    </div>
                     <button id="clear" type="button" class="btn btn-default">حذف</button>


                </div>
             </div>


    <!--upload img background-->
    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6">
            <div class="form-group">
                <h4>تصوير مناسبي را براي پشت زمينه پروفايل خود انتخاب نماييد

                    <i class="fas fa-info-circle" data-toggle="tooltip" title="سعي نماييد يک عکس پرسنلي که صورت شما را بطور واضح نشان مي دهد براي پروفايل خود انتخاب نماييد. به تجربه ثابت شده است، فريلنسرهايي که عکس پرسنلي دارند، شانس بيشتري در جلب نظر کارفرمايان و دريافت پروژه دارند. توجه نماييد که آواتار قبل قبول نيست و عکس شما پس از تاييد بر روي پروفايل شما قرار خواهد گرفت." style="color: red" ></i>
                </h4><p>
                    (تصاوير با فرمت هاي jpg، jpeg و png و با حجم حداکثر يک مگابايت قابل قبول مي باشند. براي درست فيت شدن عکس به پشت زمينه پروفايل خود و جلوگيري از کشيدگي يا جمع شدگي آن، سعي نماييد تصوير مورد نظر خود را با اندازه هاي xxxx*yyyy پيکسل تهيه و آپلود نماييد). تصوير پشت زمينه پس از تاييد در پروفايل شما قرار خواهد گرفت.
                </p>
                <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="imgInp1">
                </span>
            </span>
                    <input id='urlname1' name="backgroundimgname" type="text" class="form-control" readonly>
                </div>
                <div >

                    <img id='img-upload2' style="width: 1200px;height: 372px;border: none;"></div>
            </div>
        <button id="clear1" class="btn btn-default">حذف</button>
        </div>
    <!--onvan-->
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">

        <h4>براي پروفايل خود يک عنوان حرفه اي انتخاب نماييد

            <i class="fas fa-star-of-life" style="color: red;font-size: 8px;" ></i>

        </h4><p>
            سعي نماييد عنواني کوتاه را انتخاب نماييد که شما را بصورت رسا و شفاف معرفي نمايد (مثلاً گرافيست حرفه اي در زمينه طراحي لوگو و برندينگ)
        </p>
        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6">

        <input type="text" class="form-control" name="shortdescription">
        </div>
    </div>
    <!--tozihat-->
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">

        <h4>تخصص و قابليت هاي خود را بصورت مفصل توضيح دهيد

            <i class="fas fa-star-of-life" style="color: red;font-size: 8px;" ></i>

        </h4><p>
            سعي نماييد تخصص ها، قابليت ها، تجارب و علايق خود را بصورت شفاف در اين قسمت ذکر نماييد تا کارفرماها به راحتي بتوانند در مورد شما
            <br>
            تصميم بگيرند. توجه نماييد که اين قسمت، مهمترين قسمت پروفايل شما مي باشد که بايستي بصورت حرفه اي تهيه گردد چون منعکس کننده
            <br>
            کل تجربه کاري و حرفه اي شماست.
        </p>
        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6">

            <textarea type="text" cols="4" rows="5" class="form-control" name="description"></textarea>
        </div>
    </div>
    <!--tahsil-->
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12"  style="margin: 3% 0" id="education">
        <h4>تحصیلات &nbsp;<button type="button" class="btn btn-primary" onclick="btnfreedu()">+</button></h4>


        <div class="col-md-5 col-lg-5 col-xs-12 col-sm-5" id="freedu" style="display: none;float: right;border: 1px solid darkgrey;border-radius: 10px;padding: 2%;">
            <label>تحصيلات خود را وارد نماييد</label>
            <i class="fas fa-times" style="float: left;margin: 1%"></i>
            <input style="margin: 2% 0" type="text" class="form-control" name="school" id="school" placeholder="مدرسه/دانشگاه">
           <input style="margin: 2% 0" type="text" class="form-control" name="level"  id="level" placeholder="مقطع تحصیلی">
           <input style="margin: 2% 0" type="text" class="form-control" name="degree" id="degree" placeholder="مدرک تحصیلی">
           <input style="margin: 2% 0" type="text" class="form-control" name="frome" id="frome" placeholder="از سال">

            <input style="margin: 2% 0" type="text" class="form-control" name="too" id="too" placeholder="تا سال (يا انتظار مي رود که در اين سال به پايان برسد)">
            <input style="margin: 2% 0" type="text" class="form-control" name="avg" id="avg" placeholder="معدل">
            <label>توضیحات :</label><br><textarea type="text" name="descriptionf" id="descriptionf" class="form-control"></textarea>
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center;margin: 2%">
                <button type="button" class="btn btn-success" style="width: 22%;text-align:center;" onclick="saveedu()">ذخیره</button>
                <button type="button" class="btn btn-danger" onclick="canclebtn()" style="width: 22%;margin-right: 26%;text-align:center;">لغو</button>
            </div>

        </div>
    </div>
        <script>
            function saveedu() {
                 var school = $("#school").val();
                var level = $("#level").val();
                var degree = $("#degree").val();
                var frome = $("#frome").val();
                var too = $("#too").val();
                var avg = $("#avg").val();
                var descriptionf = $("#descriptionf").val();
                var freedu=document.getElementById("freedu");
                $.ajax({
                    url: 'request/general/addeducation.php',
                    data: {
                        school: school,
                        level: level,
                        degree: degree,
                        frome: frome,
                        too : too,
                        avg : avg,
                        descriptionf : descriptionf
                    },
                    dataType: 'json',
                    type: 'POST',
                    success: function (data) {

                    $("#education").append(data['resultsedu']);
                        document.getElementById("freedu").style.display="none";
                    }
                });
            }
        </script>
    <!--tajrebekari-->
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12"  style="margin: 3% 0" id="experience">
        <h4>تجربه کاری &nbsp;<button type="button" class="btn btn-primary" onclick="btnfreeworkex()">+</button></h4>


        <div class="col-md-5 col-lg-5 col-xs-12 col-sm-5" id="freeworkex" style="display: none;float: right;border: 1px solid darkgrey;border-radius: 10px;padding: 2%;">
            <label>تجربه کاري خود را وارد نماييد</label>
            <i class="fas fa-times" style="float: left;margin: 1%"></i>
            <input style="margin: 2% 0" type="text" class="form-control" name="positionx" id="positionx" placeholder="سمت * ">
           <input style="margin: 2% 0" type="text" class="form-control" name="company" id="company" placeholder="نام شرکت">
           <input style="margin: 2% 0" type="checkbox" class="form-group-lg" name="serve" id="serve">&nbsp; در حال حاضر در اين سمت خدمت مي کنم
            <input style="margin: 2% 0" type="text" class="form-control" name="fromex" id="fromex" placeholder="تاریخ شروع">

            <input style="margin: 2% 0" type="text" class="form-control" name="toox" id="toox" placeholder="تا سال ">
            <label>توضیحات :</label><br><textarea name="descriptionx" id="descriptionx" type="text" class="form-control"></textarea>
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center;margin: 2%">
                <button type="button" class="btn btn-success" onclick="saveworkex()" style="width: 22%;text-align:center;">ذخیره</button>
                <button type="button" class="btn btn-danger" onclick="canclebtn()" style="width: 22%;margin-right: 26%;text-align:center;">لغو</button>
            </div>

        </div>
    </div>
        <script>
            function saveworkex() {
                var positionx = $("#positionx").val();
                var company = $("#company").val();
                var serve = $("#serve").val();
                var fromex = $("#fromex").val();
                var toox = $("#toox").val();
                var descriptionx = $("#descriptionx").val();
                var freeworkex=document.getElementById("freeworkex");
                $.ajax({
                    url: 'request/general/addexperience.php',
                    data: {
                        position: positionx,
                        company: company,
                        serve: serve,
                        fromex: fromex,
                        toox: toox,
                        descriptionx : descriptionx,
                            },
                    dataType: 'json',
                    type: 'POST',
                    success: function (data) {
                        $("#experience").append(data['resultsex']);
                        document.getElementById("freeworkex").style.display="none";
                    }
                });
            }
        </script>
   <!--zaban-->
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
        <h4>ميزان تسلط به زبان انگليسي </h4>

        <select class="form-group" name="language">
            <option disabled selected>ميزان تسلط خود به زبان انگليسي را انتخاب نماييد</option>
            <option value="0">ضعيف هستم
            </option>
            <option value="1">خوب مي نويسم و خوب مي خوانم ولي در صحبت کردن مشکل دارم
            </option>
            <option value="2">خوب مي نويسم و خوب مي خوانم و کاملاً روان صحبت مي کنم
            </option>
        </select>
    </div>
    <!--otherzaban-->
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
        <h4>آيا به زبان هاي ديگري غير از انگليسي تسلط کامل داريد؟
        </h4>

        <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12" style="float: right;padding: 0;border: 1px solid darkgrey;border-radius: 5px">
            <div class="panel panel-default" style="margin: 0;">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse11"><span class="caret pull-left"></span>
                            </span>زبان خارجی مورد نياز
                        </a>
                    </h4>
                </div>
                <div id="collapse11" style="text-align: right" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td style="border-top: none;">
                                    <input class="chk1"  type="checkbox" name="td1-2">&nbsp;نيازی نيست
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="chk1" onclick="otherlang()" type="checkbox" name="td1-2" value="فرانسوی">&nbsp;فرانسوی
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="chk1" onclick="otherlang()" type="checkbox" name="td1-2" value="اسپانیایی">&nbsp;اسپانیایی
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="chk1" onclick="otherlang()" type="checkbox" name="td1-2" value="آلمانی">&nbsp;آلمانی
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="chk1" onclick="otherlang()" type="checkbox" name="td1-2" value="ایتالیایی">&nbsp;ایتالیایی
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="chk1" onclick="otherlang()" type="checkbox" name="td1-2" value="ترکی">&nbsp;ترکی
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="chk1" onclick="otherlang()" type="checkbox" name="td1-2" value="چینی">&nbsp;چینی
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="chk1" onclick="otherlang()" type="checkbox" name="td1-2" value="عربی">&nbsp;عربی
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="chk1" onclick="otherlang()" type="checkbox" name="td1-2" value="پرتغالی">&nbsp;پرتغالی
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="chk1" onclick="otherlang()" type="checkbox" name="td1-2" value="لاتین">&nbsp;لاتین
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="chk1" onclick="otherlang()" type="checkbox" name="td1-2" value="روسی">&nbsp;روسی
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="chk1" onclick="otherlang()" type="checkbox" name="td1-2" value="ژاپنی">&nbsp;ژاپنی
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>

        <script>
            function otherlang() {

                var chk1Array = [];

                /* look for all checkboes that have a class 'chk' attached to it and check if it was checked */
                $(".chk1:checked").each(function() {
                    chk1Array.push($(this).val());
                });

                /* we join the array separated by the comma */
                var otherlanguage;
                otherlanguage = chk1Array.join(',') ;

                return otherlanguage;
            }


        </script>
    <!--dastmozd-->
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
        <h4>دستمزد ساعتي خود را براي پروژه هاي ساعتي مشخص نماييد
        </h4>
        <input type="text" class="form-group" name="timefee">تومان بر ساعت
    </div>
    <!--saat-->
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
        <h4>براي پروژه هاي  ساعتي، چند ساعت در هفته وقت داريد؟
        </h4>

        <select class="form-group" name="hours">
            <option disabled selected>ميزان ساعت در هفته را مشخص نماييد
            </option>
            <option value="0">کمتر از 40 ساعت در هفته
            </option>
            <option value="1">بيشتر از 40 ساعت در هفته
            </option>
            <option value="2">بر اساس توافق با کارفرما
            </option>
        </select>
    </div>
    <!--nemone kar-->
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12"  style="margin: 3% 0" id="portofilo">
        <h4>نمونه کارهاي خود را که قبلاً انجام داده ايد آپلود نماييد
            &nbsp;<button type="button" class="btn btn-primary" onclick="btnfreeportofilo()">+</button></h4>


        <div class="col-md-5 col-lg-5 col-xs-12 col-sm-5" id="freeportofilo" style="display: none;float: right;border: 1px solid darkgrey;border-radius: 10px;padding: 2%;direction: rtl">
            <label>نمونه کار خود را وارد نماييد
            </label>
            <i class="fas fa-times" style="float: left;margin: 1%"></i>
            <input style="margin: 2% 0" type="text" class="form-control" id="titleportofilo" name="titleportofilo" placeholder="عنوان کار*">
            <input style="margin: 2% 0" type="text" class="form-control" id="skill" name="skill" placeholder="مهارت های استفاده شده در اين کار *">
            <input style="margin: 2% 0" type="text" class="form-control" id="year" name="year" placeholder="سال انجام اين کار *">
            <input style="margin: 2% 0" type="text" class="form-control" id="time" name="time" placeholder="زمان صرف شده برای انجام اين کار *">
            <label>توضیحات :</label><br><textarea type="text" id="descriptionp" name="descriptionp" class="form-control"></textarea>
            <div style="margin:3% 0">


                <!--upload-->
                <label for="pwd">آپلود عکس نمونه کار</label>
                <i class="fas fa-info-circle" data-toggle="tooltip" title="فرمت های مورد قبول تصاوير:  jpg، jpeg، gif و png  و حداکثر حجم هر فايل: 10 مگابايت
حداقل و حداکثر رزولوشن مورد قبول برای هر تصويربه ترتيب
 xxxx*yyyy پيکسل و xxxx*yyyy
 پيکسل مي باشد." style="color: red;direction: rtl" ></i>
                <input type="file" class="form-control" id="file1">

                <!--upload-->

        </div>
            <br>
            <div style="margin:3% 0">
                <input type="checkbox" class="form-group" onclick="rezayat()" id="rezayat0">&nbsp;از کارفرمای خود رضايت نامه حسن انجام کار گرفته ام
                <br><br>
                <label for="pwd">آپلود فایل رضایت نامه</label>
            <i class="fas fa-info-circle" data-toggle="tooltip" title="فرمت های مورد قبول تصاوير:  jpg، jpeg، gif و png  و حداکثر حجم هر فايل: 10 مگابايت
حداقل و حداکثر رزولوشن مورد قبول برای هر تصويربه ترتيب
 xxxx*yyyy پيکسل و xxxx*yyyy
 پيکسل مي باشد." style="color: red;direction: rtl" ></i>
                <input type="file" class="form-control" id="file2" disabled>
        </div>
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center;margin: 2%">
                <button type="button" onclick="portofilo()" class="btn btn-success" style="width: 22%;text-align:center;">ذخیره</button>
                <button type="button" class="btn btn-danger" onclick="canclebtn()" style="width: 22%;margin-right: 26%;text-align:center;">لغو</button>
            </div>

        </div>
    </div>
        <script>
            function portofilo() {
                var titleportofilo = $("#titleportofilo").val();
                var skill = $("#skill").val();
                var year = $("#year").checked();
                var time = $("#time").val();
                var toox = $("#toox").val();
                var description = $("#descriptionp").val();
                var freeportofilo=document.getElementById("freeportofilo");
                $.ajax({
                    url: 'request/general/addexperience.php',
                    data: {
                        titleportofilo: titleportofilo,
                        skill: skill,
                        year: year,
                        time: time,
                        toox: toox,
                        descriptionp : descriptionp,
                    },
                    dataType: 'json',
                    type: 'POST',
                    success: function (data) {
                        $("#portofilo").append(data['resultsportofilo']);
                        document.getElementById("freeportofilo").style.display="none";
                    }
                });
            }
        </script>
    <!--tamayol-->
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
        <h4 style="margin: 2% 0">تمايل به انجام چه پروژه هايي داريد؟
        </h4>
        <p style="font-size: 17px"><input type="radio" name="projecttype" value="0">&nbsp;پروژه های کوتاه مدت (کمتر از سه ماه)</p>
        <p style="font-size: 17px"><input type="radio" name="projecttype" value="1">&nbsp;پروژه های بلند مدت (بيش از سه ماه)</p>
        <p style="font-size: 17px"><input type="radio" name="projecttype" value="2">&nbsp;هر دوحالت کوتاه مدت و بلند مدت</p>
    </div>
<!--dastresi-->
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
        <h4 style="margin: 2% 0">در دسترس بودن
        </h4>
        <p style="font-size: 17px"><input type="radio" name="available" value="0">&nbsp;انجام پروژه را تقبل می نمايم</p>
        <p style="font-size: 17px"><input type="radio" name="available" value="1">&nbsp;به خاطر لود کاری انجام پروژه را تا اطلاع ثانوی تقبل نمی کنم</p>
    </div>

    <!--modal-->
    <div class="container">
        <!-- Trigger the modal with a button -->
        <!--cont-->
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center">
            <button type="button" class="btn btn-primary" style="background-color: #2196F3;width: 15%" data-toggle="modal" data-target="#myModal11">ادامه</button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal11" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->

                <div class="modal-content">
                    <div class="modal-body" style="text-align: center">
                    <label class="modal-title">برای دريافت کد امنيتی، يک شماره موبايل معتبر وارد نماييد
                    </label>
                    <i class="fas fa-times" style="float: left;margin: 1%" class="close" data-dismiss="modal11"></i>

<br><br><br>
                        <input type="text" id="tell" class="form-control" name="mobile" placeholder="+9809xxxxxxxx" style="direction: ltr">
                        <br><p>به خاطر امنيت بيشتر، يک شماره موبايل معتبر وارد نماييد تا کد امنيتی خود را بر روی آن شماره دريافت نماييد.
                        </p>
                  <br>
                        <button type="button" onclick="sendsms1()" class="btn btn-success" data-dismiss="modal11" data-toggle="modal" data-target="#myModal12">تایید شماره </button>
                    </div>
                </div>


                <script>
                    function sendsms1() {
                        var mobile = $("#mobile").val();
                        $.ajax({
                            url: 'request/general/sendsms.php',
                            data: {
                                mobile: mobile
                            },
                            dataType: 'json',
                            type: 'GET',
                            success: function (data) {

                                 $("#lablacode1").append(data['code']);
                            }
                        });
                    }

                </script>

            </div>
        </div>
        <!--2-->
        <div class="modal fade" id="myModal12" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body" style="text-align: center">
                        <label class="modal-title">کد امنيتی فرستاده شده بر روی شماره موبايل خود را وارد نماييد
                        </label>
                        <i class="fas fa-times" style="float: left;margin: 1%" class="close" data-dismiss="modal1"></i>

                        <br><br><br>
                       <label id="lablacode1" style="display:none;" ></label>
                        <input type="text" id="code1" class="form-control" placeholder="کد را وارد کنید"  style="direction: ltr">
                        <script>
                            function checkcode() {
                                var lablacode1 = document.getElementById("lablacode1").innerText;
                                var code = document.getElementById("code1").innerText;
                                if(code === lablacode1 )
                                {
                                    document.getElementById("final").style.display = "block";
                                    document.getElementById("final1").style.display = "none";
                                }

                            }
                        </script>
                        <br>
                        <br>
                        <a href="">
                            <button id="final1" type="button" onclick="checkcode()"  class="btn btn-success" data-dismiss="modal1" data-toggle="modal" data-target="#myModal12">تایید کد </button>

                            <button id="final" type="submit" style="display: none" class="btn btn-success" data-dismiss="modal1" data-toggle="modal" data-target="#myModal12">ثبت پروفایل </button>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!--2-->

    </div>
    <!--modal-->
    </div>





    </div>
            </form>
    <!----freeonly---->

    <!----emponly---->
    <div id="emponly1" class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="display: none;direction: rtl;padding: 3%">

        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center">
            <button class="btn btn-primary" style="background-color: #2196F3;width: 15%" onclick="profilemore1()">ادامه</button>
        </div>
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" id="profilemore11" style="display: none;padding: 0;">
            <h4 style="margin: 2% 0">شرايط و ضوابط:
            </h4>
            <p style="text-align: justify">
                اطلاعات کلی فريلنسری شما که نشان دهنده فعاليت حرفه ای شماست، در وب سايت و اپليکيشن های موبايل زيگورات مارکت بصورت عمومی در اختيار بازديد کنندگان (شامل کارفرمايان، ساير فريلنسرها و شرکت های فريلنسری و هر بازديد کننده ديگر) پلتفرم های مذکور قرار خواهد گرفت ولی زيگورات مارکت اين اطمينان را به شما می دهد که ساير اطلاعات وارد شده توسط شما، به عنوان محرمانه تلقی شده و تحت هيچ شرايطی در اختيار شخص ثالثی قرار نخواهند گرفت. هنگامی که شما پروژه را برنده می شويد، از طريق سيستم پيام رسان زيگورات با کارفرمای آن پروژه در ارتباط خواهيد بود و اکيداً توصيه می شود تمامی اطلاعات رد و بدل شده وای توافقات انجام شده با کارفرما از طريق اين سيستم پيام رسان انجام گيرد تا چنانچه در حين يا بعد از انجام پروژه با کارفرما اختلافی پيش آيد، تيم داوری زيگورات به مستندات رجوع کرده و بر اساس آنها رای خود را صادر نمايد. چنانچه ناچار باشيد از طريق تلفن، ايميل يا هر وسيله ارتباطی ديگری مطلبی را برای کارفرما توضيح دهيد يا از کارفرما در موردی که ابهام داريد سوالاتی بپرسيد که به روند شفاف سازی هدف پروژه يا تسريع در روند انجام پروژه و يا بالا بردن کيفيت کار کمک می کند، توصيه اکيد می گردد که چنانچه توافقی بصورت شفاهی بين شما و کارفرما صورت پذيرفت، حتماً آن توافق را با استناد به مکاتبات شما در تاريخ و ساعت مورد نظر در سيستم پيام رسان زيگورات مستند سازی نماييد و از کارفرما بخواهيد که موافقت خود را در سيستم پيام رسان اعلام نمايد. بديهی است که در مواردی که يکی از طرفين دعوی ادعايي نمايند که در مستندات موجود در پيام رسان زيگورات وجود نداشته باشد، آن ادعا از طرف تيم داوری زيگورات بصورت خودکار رد می گردد هر چند که در جای ديگری غير از سيستم پيام رسان زيگورات ثبت شده باشد.

            </p>
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center">

                <label style="float: right"> <input type="checkbox" onclick="checkterm1()" id="checkterm01" class="form-group">&nbsp; مذکور در شرايط و ضوابط را مطالعه نموده و موافقت خود را اعلام می نمايم.</label>
                <br><br>
                <button class="btn btn-primary" disabled style="background-color: #2196F3;width: 15%" id="termbtn1" onclick="term21()">ادامه</button>
            </div>
        </div>
        <!--khadamat1-->
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0;display: none" id="khadamat1">
            <h4 style="margin: 2% 0">به چه خدماتي نياز داريد؟</h4>
            <!--cat-->
            <div class="panel panel-default col-md-3 col-lg-3 col-xs-6 col-sm-6" style="padding: 0;float: right;">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse21"><span class="caret pull-left"></span>
                            </span>دسته بندی موضوعی
                        </a>
                    </h4>
                </div>
                <div id="collapse21" class="panel-collapse collapse" style="text-align: right">
                    <div class="panel-body">
                        <table class="table" style="margin-bottom: 0">
                            <tr>
                                <td style="border-top: none;">
                                    <input type="radio" name="td12" id="td121" onclick="funtd121()">&nbsp;همه دسته بندی ها

                                </td>
                            </tr>
                            <tr>
                                <td style="">
                                    <input type="radio" name="td12" id="td221" onclick="funtd221()">&nbsp;اتنخاب دسته بندی

                                    <table class="table" id="catinputx1" style="display: none;margin-bottom: 0">
                                        <?php

                                        $sql1 = "SELECT * FROM cat";
                                        $query1 = mysqli_query($db->connect(), $sql1);
                                        while ($results1 = mysqli_fetch_assoc($query1)) {
                                            ?>

                                            <tr > <td><input name="position1[]" type="checkbox" onclick="catput1(<?php echo $results1['id']; ?>)" value="<?php echo $results1['id']; ?>">
                                                    &nbsp;<?php echo $results1['name']; ?><br></td></tr>
                                            <?php
                                        }

                                        ?></table>



                                </td>
                            </tr>




                        </table>
                    </div>
                </div>
            </div>
            <script>
                function funtd221() {
                    var td121=document.getElementById("td121");
                    var td221=document.getElementById("td221");
                    var catinputx1=document.getElementById("catinputx1");
                    if (td221.checked ){
                        document.getElementById("catinputx1") .style.display="block";

                    }
                } function funtd121() {
                    var td121=document.getElementById("td121");
                    var td221=document.getElementById("td221");
                    var catinputx1=document.getElementById("catinputx1");
                    if (td121.checked ){
                        document.getElementById("catinputx1") .style.display="none";

                    }
                }
                function catput1(id) {
                    if(id==null){
                        return;
                    }
                    let subCat = document.getElementsByName(id);
                    if(subCat.length > 0){
                        for(let index=0; index <= subCat.length ; index++){
                            // subCat[index].parentElement.removeChild(subCat[index]);
                            subCat[index].style.display = subCat[index].style.display=== 'none' ? 'block' :'none';
                        }
                    }
                    else{

                        $.ajax({
                            url: 'request/general/addsubcat.php',
                            data: {
                                catId: id
                            },
                            dataType: 'json',
                            type: 'POST',
                            success: function (data) {
                                $("#subinput1").append(data['results11']);
                                console.log('datas',data);

                            }
                        });
                    }
                }

            </script>
            <!--cat-->
            <br><br><br><br><br>
            <!--subcat-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="direction: rtl;padding: 0">
            <div class=" affix-sidebar col-md-3 col-lg-3 col-sm-6 col-xs-6" style="border: 1px solid #e7e4e4;float: right">
                <div class="panel panel-default" style="margin: 0;">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse11-6"><span class="caret pull-left"></span>
                                </span>زیر دسته بندی
                            </a>
                        </h4>
                    </div>
                    <div id="collapse11-6" style="text-align: right" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td  style="border-top: none;">
                                        <input type="checkbox" name="td1-2">&nbsp;همه زیر دسته بندی ها
                                    </td>
                                </tr>
                                <tr id="subinput1">
                                    <td>
                                        <input type="checkbox" name="td1-2">&nbsp;همه زیر دسته بندی ها
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!--subcat-->
            <br><br>
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center;margin: 3% 0">
                <button class="btn btn-primary" style="background-color: #2196F3;width: 15%" onclick="uplcon1()" >ادامه</button>
            </div>
        </div>
        <!--khadamat1-->

        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="display: none;" id="upl1">
            <!--upload img profile-->
            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6">
                <div class="form-group">
                    <h4>عکس مناسبي را براي پروفايل خود انتخاب نماييد
                        <i class="fas fa-info-circle" data-toggle="tooltip" title="سعي نماييد يک عکس پرسنلي که صورت شما را بطور واضح نشان مي دهد براي پروفايل خود انتخاب نماييد. عکس آپلود شده پس از تاييد بر روی پروفايل شما درج خواهد شد." style="color: red" ></i>
                    </h4><p>(فرمت هاي قابل قبول jpg، jpeg و png با حجم حداکثر يک مگابايت)
                    </p>
                    <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    آپلود عکس <input type="file" accept="image/png, image/jpeg, image/gif" id="imgInp3">
                </span>
            </span>
                        <input id='urlname3'type="text" class="form-control" readonly style="">
                    </div>
                    <div style=" width: 18%;text-align: center; margin-right: 8% ; ">
                        <img  id='img-upload3'/>
                    </div><button id="clear3" class="btn btn-default">حذف</button>
                </div>
            </div>
            <!--upload back-->
            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6">
                <div class="form-group">
                    <h4>تصوير مناسبي را براي پشت زمينه پروفايل خود انتخاب نماييد

                        <i class="fas fa-info-circle" data-toggle="tooltip" title="سعي نماييد يک عکس پرسنلي که صورت شما را بطور واضح نشان مي دهد براي پروفايل خود انتخاب نماييد. به تجربه ثابت شده است، فريلنسرهايي که عکس پرسنلي دارند، شانس بيشتري در جلب نظر کارفرمايان و دريافت پروژه دارند. توجه نماييد که آواتار قبل قبول نيست و عکس شما پس از تاييد بر روي پروفايل شما قرار خواهد گرفت." style="color: red" ></i>
                    </h4><p>(تصاوير با فرمت هاي jpg، jpeg و png و با حجم حداکثر يک مگابايت قابل قبول مي باشند. براي درست فيت شدن عکس به پشت زمينه پروفايل خود و جلوگيري از کشيدگي يا جمع شدگي آن، سعي نماييد تصوير مورد نظر خود را با اندازه هاي xxxx*yyyy پيکسل تهيه و آپلود نماييد). تصوير پشت زمينه پس از تاييد در پروفايل شما قرار خواهد گرفت.

                    </p>
                    <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    آپلود عکس <input type="file" accept="image/png, image/jpeg, image/gif" id="imgInp4">
                </span>
            </span>
                        <input id='urlname4'type="text" class="form-control" readonly style="">
                    </div>
                    <div style=" width: 18%;text-align: center; margin-right: 8% ; ">
                        <img  id='img-upload4'/>
                    </div><button id="clear4" class="btn btn-default">حذف</button>
                </div>
            </div>
            <!--tahsil-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12"  style="margin: 3% 0">
                <h4>تحصیلات &nbsp;<button type="button" class="btn btn-primary">+</button></h4>

                <div class="col-md-5 col-lg-5 col-xs-12 col-sm-5" style="float: right;font-size: 18px">
                    <label>مدرسه/دانشگاه :</label> &nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxx</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
                    <label>مقطع تحصیلی :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxxx</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
                    <label>مدرک تحصیلی :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxxx</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
                    <label>از سال :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxxxxxxxx</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
                    <label>تا سال :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxxxxxxxx</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
                    <label>معدل :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxxxxxxxxxxx</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
                    <label>توضیحات :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxxxxxxxxxxxx</label> &nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><hr>
                </div>
                <div class="col-md-5 col-lg-5 col-xs-12 col-sm-5" style="float: right;border: 1px solid darkgrey;border-radius: 10px;padding: 2%;">
                    <label>تحصيلات خود را وارد نماييد</label>
                    <i class="fas fa-times" style="float: left;margin: 1%"></i>
                    <input style="margin: 2% 0" type="text" class="form-control" placeholder="مدرسه/دانشگاه">
                    <input style="margin: 2% 0" type="text" class="form-control" placeholder="مقطع تحصیلی">
                    <input style="margin: 2% 0" type="text" class="form-control" placeholder="مدرک تحصیلی">
                    <input style="margin: 2% 0" type="text" class="form-control" placeholder="از سال">

                    <input style="margin: 2% 0" type="text" class="form-control" placeholder="تا سال (يا انتظار مي رود که در اين سال به پايان برسد)">
                    <input style="margin: 2% 0" type="text" class="form-control" placeholder="معدل">
                    <label>توضیحات :</label><br><textarea type="text" class="form-control"></textarea>
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center;margin: 2%">
                        <button type="button" class="btn btn-success" style="width: 22%;text-align:center;">ذخیره</button>
                        <button type="button" class="btn btn-danger" style="width: 22%;margin-right: 26%;text-align:center;">لغو</button>
                    </div>

                </div>
            </div>
            <!--tajrebekari-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12"  style="margin: 3% 0">
                <h4>تجربه کاری &nbsp;<button type="button" class="btn btn-primary">+</button></h4>

                <div class="col-md-5 col-lg-5 col-xs-12 col-sm-5" style="float: right;font-size: 18px">
                    <label>سمت :</label> &nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxx</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
                    <label>نام شرکت :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxxx</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
                    <label>در حال حاضر در اين سمت خدمت مي کنم :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxxx</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
                    <label>از سال :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxxxxxxxx</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
                    <label>تا سال :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxxxxxxxx</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
                    <label>توضیحات :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxxxxxxxxxxxx</label> &nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><hr>
                </div>
                <div class="col-md-5 col-lg-5 col-xs-12 col-sm-5" style="float: right;border: 1px solid darkgrey;border-radius: 10px;padding: 2%;">
                    <label>تجربه کاري خود را وارد نماييد</label>
                    <i class="fas fa-times" style="float: left;margin: 1%"></i>
                    <input style="margin: 2% 0" type="text" class="form-control" placeholder="سمت * ">
                    <input style="margin: 2% 0" type="text" class="form-control" placeholder="نام شرکت">
                    <input style="margin: 2% 0" type="checkbox" class="form-group-lg">&nbsp; در حال حاضر در اين سمت خدمت مي کنم
                    <input style="margin: 2% 0" type="text" class="form-control" placeholder="تاریخ شروع">

                    <input style="margin: 2% 0" type="text" class="form-control" placeholder="تا سال ">
                    <label>توضیحات :</label><br><textarea type="text" class="form-control"></textarea>
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center;margin: 2%">
                        <button type="button" class="btn btn-success" style="width: 22%;text-align:center;">ذخیره</button>
                        <button type="button" class="btn btn-danger" style="width: 22%;margin-right: 26%;text-align:center;">لغو</button>
                    </div>

                </div>
            </div>
            <!--zaban-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
                <h4>ميزان تسلط به زبان انگليسي </h4>

                <select class="form-group">
                    <option disabled selected>ميزان تسلط خود به زبان انگليسي را انتخاب نماييد</option>
                    <option>ضعيف هستم
                    </option>
                    <option>خوب مي نويسم و خوب مي خوانم ولي در صحبت کردن مشکل دارم
                    </option>
                    <option>خوب مي نويسم و خوب مي خوانم و کاملاً روان صحبت مي کنم
                    </option>
                </select>
            </div>
            <!--otherzaban-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
                <h4>آيا به زبان هاي ديگري غير از انگليسي تسلط کامل داريد؟
                </h4>

                <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12" style="float: right;padding: 0;border: 1px solid darkgrey;border-radius: 5px">
                    <div class="panel panel-default" style="margin: 0;">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse11-1"><span class="caret pull-left"></span>
                                    </span>زبان خارجی مورد نياز
                                </a>
                            </h4>
                        </div>
                        <div id="collapse11-1" style="text-align: right" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td style="border-top: none;">
                                            <input type="checkbox" name="td1-2">&nbsp;نيازی نيست
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="checkbox" name="td1-2">&nbsp;فرانسوی
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="td1-2">&nbsp;اسپانیایی
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="td1-2">&nbsp;آلمانی
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="td1-2">&nbsp;ایتالیایی
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="td1-2">&nbsp;ترکی
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="td1-2">&nbsp;چینی
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="td1-2">&nbsp;عربی
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="td1-2">&nbsp;پرتغالی
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="td1-2">&nbsp;لاتین
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="td1-2">&nbsp;روسی
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="td1-2">&nbsp;ژاپنی
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!--modal-->
            <div class="container">
                <!-- Trigger the modal with a button -->
                <!--cont-->
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center">
                    <button class="btn btn-primary" style="background-color: #2196F3;width: 15%" data-toggle="modal" data-target="#myModal3">ادامه</button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="myModal3" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-body" style="text-align: center">
                                <label class="modal-title">برای دريافت کد امنيتی، يک شماره موبايل معتبر وارد نماييد
                                </label>
                                <i class="fas fa-times" style="float: left;margin: 1%" class="close" data-dismiss="modal3"></i>

                                <br><br><br>
                                <input type="text" class="form-control" placeholder="+9809xxxxxxxx" style="direction: ltr">
                                <br><p>به خاطر امنيت بيشتر، يک شماره موبايل معتبر وارد نماييد تا کد امنيتی خود را بر روی آن شماره دريافت نماييد.
                                </p>
                                <br>
                                <button type="button" class="btn btn-success" data-dismiss="modal3" data-toggle="modal" data-target="#myModal32">تایید شماره </button>
                            </div>
                        </div>

                    </div>
                </div>
                <!--2-->
                <div class="modal fade" id="myModal32" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-body" style="text-align: center">
                                <label class="modal-title">کد امنيتی فرستاده شده بر روی شماره موبايل خود را وارد نماييد
                                </label>
                                <i class="fas fa-times" style="float: left;margin: 1%" class="close" data-dismiss="modal32"></i>

                                <br><br><br>
                                <input type="text" class="form-control" placeholder="+9809xxxxxxxx" style="direction: ltr">
                                <br>
                                <br>
                                <a href="">
                                    <button type="button" class="btn btn-success" data-dismiss="modal32" data-toggle="modal" data-target="#myModal32">ثبت پروفایل </button>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <!--2-->

            </div>
            <!--modal-->


        </div>

    </div>
    <!----emponly---->

    <!----freevemp---->
    <div id="freevemp1" class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="display: none;direction: rtl;padding: 3%">

        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center">
            <button class="btn btn-primary" style="background-color: #2196F3;width: 15%" onclick="profilemore2()">ادامه</button>
        </div>
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" id="profilemore12" style="display: none;padding: 0;">
            <h4 style="margin: 2% 0">شرايط و ضوابط:
            </h4>
            <p style="text-align: justify">
                اطلاعات کلی فريلنسری شما که نشان دهنده فعاليت حرفه ای شماست، در وب سايت و اپليکيشن های موبايل زيگورات مارکت بصورت عمومی در اختيار بازديد کنندگان (شامل کارفرمايان، ساير فريلنسرها و شرکت های فريلنسری و هر بازديد کننده ديگر) پلتفرم های مذکور قرار خواهد گرفت ولی زيگورات مارکت اين اطمينان را به شما می دهد که ساير اطلاعات وارد شده توسط شما، به عنوان محرمانه تلقی شده و تحت هيچ شرايطی در اختيار شخص ثالثی قرار نخواهند گرفت. هنگامی که شما پروژه را برنده می شويد، از طريق سيستم پيام رسان زيگورات با کارفرمای آن پروژه در ارتباط خواهيد بود و اکيداً توصيه می شود تمامی اطلاعات رد و بدل شده وای توافقات انجام شده با کارفرما از طريق اين سيستم پيام رسان انجام گيرد تا چنانچه در حين يا بعد از انجام پروژه با کارفرما اختلافی پيش آيد، تيم داوری زيگورات به مستندات رجوع کرده و بر اساس آنها رای خود را صادر نمايد. چنانچه ناچار باشيد از طريق تلفن، ايميل يا هر وسيله ارتباطی ديگری مطلبی را برای کارفرما توضيح دهيد يا از کارفرما در موردی که ابهام داريد سوالاتی بپرسيد که به روند شفاف سازی هدف پروژه يا تسريع در روند انجام پروژه و يا بالا بردن کيفيت کار کمک می کند، توصيه اکيد می گردد که چنانچه توافقی بصورت شفاهی بين شما و کارفرما صورت پذيرفت، حتماً آن توافق را با استناد به مکاتبات شما در تاريخ و ساعت مورد نظر در سيستم پيام رسان زيگورات مستند سازی نماييد و از کارفرما بخواهيد که موافقت خود را در سيستم پيام رسان اعلام نمايد. بديهی است که در مواردی که يکی از طرفين دعوی ادعايي نمايند که در مستندات موجود در پيام رسان زيگورات وجود نداشته باشد، آن ادعا از طرف تيم داوری زيگورات بصورت خودکار رد می گردد هر چند که در جای ديگری غير از سيستم پيام رسان زيگورات ثبت شده باشد.

            </p>
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center">

                <label style="float: right"> <input type="checkbox" onclick="checkterm2()" id="checkterm02" class="form-group">&nbsp; مذکور در شرايط و ضوابط را مطالعه نموده و موافقت خود را اعلام می نمايم.</label>
                <br><br>
                <button class="btn btn-primary" disabled style="background-color: #2196F3;width: 15%" id="termbtn2" onclick="term31()">ادامه</button>
            </div>
        </div>
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="display: none;" id="khadamat2">
            <!--cat-->
            <div class="panel panel-default col-md-3 col-lg-3 col-xs-6 col-sm-6" style="padding: 0;float: right;">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse22"><span class="caret pull-left"></span>
                            </span>دسته بندی موضوعی
                        </a>
                    </h4>
                </div>
                <div id="collapse22" class="panel-collapse collapse" style="text-align: right">
                    <div class="panel-body">
                        <table class="table" style="margin-bottom: 0">
                            <tr>
                                <td style="border-top: none;">
                                    <input type="radio" name="td12" id="td122" onclick="funtd122()">&nbsp;همه دسته بندی ها

                                </td>
                            </tr>
                            <tr>
                                <td style="">
                                    <input type="radio" name="td12" id="td222" onclick="funtd222()">&nbsp;اتنخاب دسته بندی

                                    <table class="table" onclick="catput2()" id="catinputx2" style="display: none;margin-bottom: 0">
                                        <?php

                                        $sql2 = "SELECT * FROM cat";
                                        $query2 = mysqli_query($db->connect(), $sql2);
                                        while ($results2 = mysqli_fetch_assoc($query)) {
                                            ?>

                                            <tr > <td><input name="position2[]" type="checkbox" onclick="catput2(<?php echo $results2['id']; ?>)" value="<?php echo $results2['id']; ?>">
                                                    &nbsp;<?php echo $results2['name']; ?><br></td></tr>
                                            <?php
                                        }

                                        ?></table>


                                </td>
                            </tr>




                        </table>
                    </div>
                </div>
            </div>
            <script>
                function funtd222() {
                    var td122=document.getElementById("td122");
                    var td222=document.getElementById("td222");
                    var catinputx2=document.getElementById("catinputx2");
                    if (td222.checked ){
                        document.getElementById("catinputx2") .style.display="block";

                    }
                } function funtd122() {
                    var td122=document.getElementById("td122");
                    var td222=document.getElementById("td222");
                    var catinputx2=document.getElementById("catinputx2");
                    if (td122.checked ){
                        document.getElementById("catinputx2") .style.display="none";

                    }
                }
                function catput2(id) {
                    if(id==null){
                        return;
                    }
                    let subCat = document.getElementsByName(id);
                    if(subCat.length > 0){
                        for(let index=0; index <= subCat.length ; index++){
                            // subCat[index].parentElement.removeChild(subCat[index]);
                            subCat[index].style.display = subCat[index].style.display === 'none' ? 'block' :'none';
                        }
                    }
                    else{

                        $.ajax({
                            url: 'request/general/addsubcat.php',
                            data: {
                                catId: id
                            },
                            dataType: 'json',
                            type: 'POST',
                            success: function (data) {
                                $("#subinput2").append(data['results11']);
                                console.log('datas',data);

                            }
                        });
                    }
                }
            </script>
            <!--subcat--><br><br>
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="padding: 0;">
                <h4 class="show-on-hover " style="margin: 2% 0">در چه زمينه هايي مهارت داريد؟
                    <i class="fas fa-info-circle dropdown-toggle" data-toggle="dropdown" style="color: red" ></i>
                    <p class="dropdown-menu" style="top: 17%;text-align: justify;right: 20%;line-height: 2;padding: 1%" role="menu">
                        تعداد مجاز مهارت ها براي عضويت استاندارد 12 مهارت، براي عضويت نقره اي 20 مهارت، براي عضويت برنزي 40 مهارت و براي عضويت طلايي نامحدود مي باشد. چنانچه مايل به انتخاب مهارت هاي بيشتري هستيد، مي توانيد عضويت خود را از
                        <a href="Tariffs.php">اينجا</a>
                        ارتقا دهيد

                    </p></h4>
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="">

                    <p style="background-color: #da4651;color: #ffffff;font-size: 18px;padding: 1%;border-radius: 5px;">
                        با توجه به نوع عضويت شما، حداکثر XXX مهارت قابل انتخاب مي باشد. چنانچه مايل به انتخاب مهارت هاي بيشتري هستيد، عضويت خود را از
                        <a href="Tariffs.php">اينجا </a>
                        ارتقا دهيد

                    </p>

                </div>
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="direction: rtl;padding: 0">
                    <div class=" affix-sidebar col-md-3 col-lg-3 col-sm-6 col-xs-6" style="border: 1px solid #e7e4e4;float: right">
                        <div class="panel panel-default" style="margin: 0;">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse11-7"><span class="caret pull-left"></span>
                                        </span>زیر دسته بندی
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse11-7" style="text-align: right" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td  style="border-top: none;">
                                                <input type="checkbox" name="td1-2" id="check11" >&nbsp;همه زیر دسته بندی ها
                                            </td>
                                        </tr>
                                        <tr id="subinput2">

                                        </tr>


                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!--khadamatniyaz-->
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="padding: 0">
            <!--cat-->

            <h4 class="show-on-hover " style="margin: 2% 0">به چه خدماتی نیاز دارید؟
                <i class="fas fa-info-circle dropdown-toggle" data-toggle="dropdown" style="color: red" ></i>
                <p class="dropdown-menu" style="top: 17%;text-align: justify;right: 20%;line-height: 2;padding: 1%" role="menu">
                    تعداد مجاز مهارت ها براي عضويت استاندارد 12 مهارت، براي عضويت نقره اي 20 مهارت، براي عضويت برنزي 40 مهارت و براي عضويت طلايي نامحدود مي باشد. چنانچه مايل به انتخاب مهارت هاي بيشتري هستيد، مي توانيد عضويت خود را از
                    <a href="Tariffs.php">اينجا</a>
                    ارتقا دهيد

                </p>
            </h4>

            <div class="panel panel-default col-md-3 col-lg-3 col-xs-6 col-sm-6" style="padding: 0;float: right;">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse23"><span class="caret pull-left"></span>
                            </span>دسته بندی موضوعی
                        </a>
                    </h4>
                </div>
                <div id="collapse23" class="panel-collapse collapse" style="text-align: right">
                    <div class="panel-body">
                        <table class="table" style="margin-bottom: 0">
                            <tr>
                                <td style="border-top: none;">
                                    <input type="radio" name="td12" id="td123" onclick="funtd123()">&nbsp;همه دسته بندی ها

                                </td>
                            </tr>
                            <tr>
                                <td style="">
                                    <input type="radio" name="td12" id="td223" onclick="funtd223()">&nbsp;اتنخاب دسته بندی

                                    <table class="table" onclick="catput3()" id="catinputx3" style="display: none;margin-bottom: 0">
                                        <?php

                                        $sql3 = "SELECT * FROM cat";
                                        $query3 = mysqli_query($db->connect(), $sql3);
                                        while ($results3 = mysqli_fetch_assoc($query3)) {
                                            ?>

                                            <tr > <td><input name="position3[]" type="checkbox" onclick="catput3(<?php echo $results3['id']; ?>)" value="<?php echo $results3['id']; ?>">
                                                    &nbsp;<?php echo $results3['name']; ?><br></td></tr>
                                            <?php
                                        }

                                        ?></table>


                                </td>
                            </tr>




                        </table>
                    </div>
                </div>
            </div>
            <script>
                function funtd223() {
                    var td123=document.getElementById("td123");
                    var td223=document.getElementById("td223");
                    var catinputx3=document.getElementById("catinputx3");
                    if (td223.checked ){
                        document.getElementById("catinputx3") .style.display="block";

                    }
                } function funtd123() {
                    var td123=document.getElementById("td123");
                    var td223=document.getElementById("td223");
                    var catinputx3=document.getElementById("catinputx3");
                    if (td123.checked ){
                        document.getElementById("catinputx3") .style.display="none";

                    }
                }
                function catput3(id) {
                    if(id==null){
                        return;
                    }
                    let subCat = document.getElementsByName(id);
                    if(subCat.length > 0){
                        for(let index=0; index <= subCat.length ; index++){
                            // subCat[index].parentElement.removeChild(subCat[index]);
                            subCat[index].style.display = subCat[index].style.display === 'none' ? 'block' :'none';
                        }
                    }
                    else{

                        $.ajax({
                            url: 'request/general/addsubcat.php',
                            data: {
                                catId: id
                            },
                            dataType: 'json',
                            type: 'POST',
                            success: function (data) {
                                $("#subinput3").append(data['results11']);
                                console.log('datas',data);

                            }
                        });
                    }
                }

            </script>

    </div>
    <!--subcat--><br><br>
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="direction: rtl;padding: 0">
                <div class=" affix-sidebar col-md-3 col-lg-3 col-sm-6 col-xs-6" style="border: 1px solid #e7e4e4;float: right">
                    <div class="panel panel-default" style="margin: 0;">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse11-8"><span class="caret pull-left"></span>
                                    </span>زیر دسته بندی
                                </a>
                            </h4>
                        </div>
                        <div id="collapse11-8" style="text-align: right" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td  style="border-top: none;">
                                            <input type="checkbox" name="td1-2" id="check11" >&nbsp;همه زیر دسته بندی ها
                                        </td>
                                    </tr>
                                    <tr id="subinput3">

                                    </tr>


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--khadamatniyaz-->
            <!--tajrobe-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
                <h4 style="margin: 2% 0">تجربه کاري شما چگونه است؟
                </h4>
                <p style="font-size: 17px"><input type="radio" name="profil2">&nbsp;مبتدي هستم و نياز به کسب مهارت در زمينه کاري خود هستم</p>
                <p style="font-size: 17px"><input type="radio" name="profil2">&nbsp; تجربه متوسطي در زمينه کاري خود دارم</p>
                <p style="font-size: 17px"><input type="radio" name="profil2">&nbsp; سال هاي زيادي تجربه کاري دارم و قادر به انجام پروژه هاي سنگين و پيچيده مي باشم</p>
            </div>
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center">
                <button class="btn btn-primary" style="background-color: #2196F3;width: 15%" onclick="uplcon2()" >ادامه</button>
            </div>
        </div>



        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="display: none;" id="upl2">

            <!--upload img profile-->
            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6">
                <div class="form-group">
                    <h4>عکس مناسبي را براي پروفايل خود انتخاب نماييد
                        <i class="fas fa-info-circle" data-toggle="tooltip" title="سعي نماييد يک عکس پرسنلي که صورت شما را بطور واضح نشان مي دهد براي پروفايل خود انتخاب نماييد. به تجربه ثابت شده است، فريلنسرهايي که عکس پرسنلي دارند، شانس بيشتري در جلب نظر کارفرمايان و دريافت پروژه دارند. توجه نماييد که آواتار قبل قبول نيست و عکس شما پس از تاييد بر روي پروفايل شما قرار خواهد گرفت." style="color: red" ></i>
                    </h4><p>(فرمت هاي قابل قبول jpg، jpeg و png با حجم حداکثر يک مگابايت)
                    </p>
                    <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    آپلود عکس <input type="file" accept="image/png, image/jpeg, image/gif" id="imgInp5">
                </span>
            </span>
                        <input id='urlname5'type="text" class="form-control" readonly style="">
                    </div>
                    <div style=" width: 18%;text-align: center; margin-right: 8% ; ">
                        <img  id='img-upload5'/>
                    </div><button id="clear5" class="btn btn-default">حذف</button>
                </div>
            </div>
            <!--upload img background-->
            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6">
                <div class="form-group">
                    <h4>تصوير مناسبي را براي پشت زمينه پروفايل خود انتخاب نماييد

                        <i class="fas fa-info-circle" data-toggle="tooltip" title="سعي نماييد يک عکس پرسنلي که صورت شما را بطور واضح نشان مي دهد براي پروفايل خود انتخاب نماييد. به تجربه ثابت شده است، فريلنسرهايي که عکس پرسنلي دارند، شانس بيشتري در جلب نظر کارفرمايان و دريافت پروژه دارند. توجه نماييد که آواتار قبل قبول نيست و عکس شما پس از تاييد بر روي پروفايل شما قرار خواهد گرفت." style="color: red" ></i>
                    </h4><p>
                        (تصاوير با فرمت هاي jpg، jpeg و png و با حجم حداکثر يک مگابايت قابل قبول مي باشند. براي درست فيت شدن عکس به پشت زمينه پروفايل خود و جلوگيري از کشيدگي يا جمع شدگي آن، سعي نماييد تصوير مورد نظر خود را با اندازه هاي xxxx*yyyy پيکسل تهيه و آپلود نماييد). تصوير پشت زمينه پس از تاييد در پروفايل شما قرار خواهد گرفت.
                    </p>
                    <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="imgInp6">
                </span>
            </span>
                        <input id='urlname6' type="text" class="form-control" readonly>
                    </div>
                    <img id='img-upload6'/>
                </div><button id="clear6" class="btn btn-default">حذف</button>
            </div>
            <!--onvan-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">

                <h4>براي پروفايل خود يک عنوان حرفه اي انتخاب نماييد

                    <i class="fas fa-star-of-life" style="color: red;font-size: 8px;" ></i>

                </h4><p>
                    سعي نماييد عنواني کوتاه را انتخاب نماييد که شما را بصورت رسا و شفاف معرفي نمايد (مثلاً گرافيست حرفه اي در زمينه طراحي لوگو و برندينگ)
                </p>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6">

                    <input type="text" class="form-control">
                </div>
            </div>
            <!--tozihat-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">

                <h4>تخصص و قابليت هاي خود را بصورت مفصل توضيح دهيد

                    <i class="fas fa-star-of-life" style="color: red;font-size: 8px;" ></i>

                </h4><p>
                    سعي نماييد تخصص ها، قابليت ها، تجارب و علايق خود را بصورت شفاف در اين قسمت ذکر نماييد تا کارفرماها به راحتي بتوانند در مورد شما
                    <br>
                    تصميم بگيرند. توجه نماييد که اين قسمت، مهمترين قسمت پروفايل شما مي باشد که بايستي بصورت حرفه اي تهيه گردد چون منعکس کننده
                    <br>
                    کل تجربه کاري و حرفه اي شماست.
                </p>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6">

                    <textarea type="text" cols="4" rows="5" class="form-control"></textarea>
                </div>
            </div>
            <!--tahsil-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12"  style="margin: 3% 0">
                <h4>تحصیلات &nbsp;<button type="button" class="btn btn-primary">+</button></h4>

                <div class="col-md-5 col-lg-5 col-xs-12 col-sm-5" style="float: right;font-size: 18px">
                    <label>مدرسه/دانشگاه :</label> &nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxx</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
                    <label>مقطع تحصیلی :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxxx</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
                    <label>مدرک تحصیلی :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxxx</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
                    <label>از سال :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxxxxxxxx</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
                    <label>تا سال :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxxxxxxxx</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
                    <label>معدل :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxxxxxxxxxxx</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
                    <label>توضیحات :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxxxxxxxxxxxx</label> &nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><hr>
                </div>
                <div class="col-md-5 col-lg-5 col-xs-12 col-sm-5" style="float: right;border: 1px solid darkgrey;border-radius: 10px;padding: 2%;">
                    <label>تحصيلات خود را وارد نماييد</label>
                    <i class="fas fa-times" style="float: left;margin: 1%"></i>
                    <input style="margin: 2% 0" type="text" class="form-control" placeholder="مدرسه/دانشگاه">
                    <input style="margin: 2% 0" type="text" class="form-control" placeholder="مقطع تحصیلی">
                    <input style="margin: 2% 0" type="text" class="form-control" placeholder="مدرک تحصیلی">
                    <input style="margin: 2% 0" type="text" class="form-control" placeholder="از سال">

                    <input style="margin: 2% 0" type="text" class="form-control" placeholder="تا سال (يا انتظار مي رود که در اين سال به پايان برسد)">
                    <input style="margin: 2% 0" type="text" class="form-control" placeholder="معدل">
                    <label>توضیحات :</label><br><textarea type="text" class="form-control"></textarea>
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center;margin: 2%">
                        <button type="button" class="btn btn-success" style="width: 22%;text-align:center;">ذخیره</button>
                        <button type="button" class="btn btn-danger" style="width: 22%;margin-right: 26%;text-align:center;">لغو</button>
                    </div>

                </div>
            </div>
            <!--tajrebekari-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12"  style="margin: 3% 0">
                <h4>تجربه کاری &nbsp;<button type="button" class="btn btn-primary">+</button></h4>

                <div class="col-md-5 col-lg-5 col-xs-12 col-sm-5" style="float: right;font-size: 18px">
                    <label>سمت :</label> &nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxx</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
                    <label>نام شرکت :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxxx</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
                    <label>در حال حاضر در اين سمت خدمت مي کنم :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxxx</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
                    <label>از سال :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxxxxxxxx</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
                    <label>تا سال :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxxxxxxxx</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
                    <label>توضیحات :</label>&nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxxxxxxxxxxxx</label> &nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><hr>
                </div>
                <div class="col-md-5 col-lg-5 col-xs-12 col-sm-5" style="float: right;border: 1px solid darkgrey;border-radius: 10px;padding: 2%;">
                    <label>تجربه کاري خود را وارد نماييد</label>
                    <i class="fas fa-times" style="float: left;margin: 1%"></i>
                    <input style="margin: 2% 0" type="text" class="form-control" placeholder="سمت * ">
                    <input style="margin: 2% 0" type="text" class="form-control" placeholder="نام شرکت">
                    <input style="margin: 2% 0" type="checkbox" class="form-group-lg">&nbsp; در حال حاضر در اين سمت خدمت مي کنم
                    <input style="margin: 2% 0" type="text" class="form-control" placeholder="تاریخ شروع">

                    <input style="margin: 2% 0" type="text" class="form-control" placeholder="تا سال ">
                    <label>توضیحات :</label><br><textarea type="text" class="form-control"></textarea>
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center;margin: 2%">
                        <button type="button" class="btn btn-success" style="width: 22%;text-align:center;">ذخیره</button>
                        <button type="button" class="btn btn-danger" style="width: 22%;margin-right: 26%;text-align:center;">لغو</button>
                    </div>

                </div>
            </div>
            <!--zaban-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
                <h4>ميزان تسلط به زبان انگليسي </h4>

                <select class="form-group">
                    <option disabled selected>ميزان تسلط خود به زبان انگليسي را انتخاب نماييد</option>
                    <option>ضعيف هستم
                    </option>
                    <option>خوب مي نويسم و خوب مي خوانم ولي در صحبت کردن مشکل دارم
                    </option>
                    <option>خوب مي نويسم و خوب مي خوانم و کاملاً روان صحبت مي کنم
                    </option>
                </select>
            </div>
            <!--otherzaban-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
                <h4>آيا به زبان هاي ديگري غير از انگليسي تسلط کامل داريد؟
                </h4>

                <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12" style="float: right;padding: 0;border: 1px solid darkgrey;border-radius: 5px">
                    <div class="panel panel-default" style="margin: 0;">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse11-2"><span class="caret pull-left"></span>
                                    </span>زبان خارجی مورد نياز
                                </a>
                            </h4>
                        </div>
                        <div id="collapse11-2" style="text-align: right" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td style="border-top: none;">
                                            <input type="checkbox" name="td1-2">&nbsp;نيازی نيست
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="td1-2">&nbsp;فرانسوی
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="td1-2">&nbsp;اسپانیایی
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="td1-2">&nbsp;آلمانی
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="td1-2">&nbsp;ایتالیایی
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="td1-2">&nbsp;ترکی
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="td1-2">&nbsp;چینی
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="td1-2">&nbsp;عربی
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="td1-2">&nbsp;پرتغالی
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="td1-2">&nbsp;لاتین
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="td1-2">&nbsp;روسی
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="td1-2">&nbsp;ژاپنی
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!--dastmozd-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
                <h4>دستمزد ساعتي خود را براي پروژه هاي ساعتي مشخص نماييد
                </h4>
                <input type="text" class="form-group">تومان بر ساعت
            </div>
            <!--saat-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
                <h4>براي پروژه هاي  ساعتي، چند ساعت در هفته وقت داريد؟
                </h4>

                <select class="form-group">
                    <option disabled selected>ميزان ساعت در هفته را مشخص نماييد
                    </option>
                    <option>کمتر از 40 ساعت در هفته
                    </option>
                    <option>بيشتر از 40 ساعت در هفته
                    </option>
                    <option>بر اساس توافق با کارفرما
                    </option>
                </select>
            </div>
            <!--tahsil-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12"  style="margin: 3% 0">
                <h4>نمونه کارهاي خود را که قبلاً انجام داده ايد آپلود نماييد
                    &nbsp;<button type="button" class="btn btn-primary">+</button></h4>

                <div class="col-md-5 col-lg-5 col-xs-12 col-sm-5" style="float: right;font-size: 18px">
                    <label>نمونه کار 1</label> &nbsp;<label style="border-bottom: 1px solid rgba(169,169,169,0.6)">xxxxxxxxxx</label>&nbsp;<i class="fas fa-pen" style="margin-right: 5%;color: #8CBFF3"></i>&nbsp;&nbsp;<i class="far fa-trash-alt" style="color: #b05b5a"></i><br>
                </div>
                <div class="col-md-5 col-lg-5 col-xs-12 col-sm-5" style="float: right;border: 1px solid darkgrey;border-radius: 10px;padding: 2%;direction: rtl">
                    <label>نمونه کار خود را وارد نماييد
                    </label>
                    <i class="fas fa-times" style="float: left;margin: 1%"></i>
                    <input style="margin: 2% 0" type="text" class="form-control" placeholder="عنوان کار*">
                    <input style="margin: 2% 0" type="text" class="form-control" placeholder="مهارت های استفاده شده در اين کار *">
                    <input style="margin: 2% 0" type="text" class="form-control" placeholder="سال انجام اين کار *">
                    <input style="margin: 2% 0" type="text" class="form-control" placeholder="زمان صرف شده برای انجام اين کار *">
                    <label>توضیحات :</label><br><textarea type="text" class="form-control"></textarea>
                    <div style="margin:3% 0">
                        <button class="btn btn-default" onclick="$('#uploadFile').click()">آپلود عکس نمونه کار</button>
                        <i class="fas fa-info-circle" data-toggle="tooltip" title="فرمت های مورد قبول تصاوير:  jpg، jpeg، gif و png  و حداکثر حجم هر فايل: 10 مگابايت
حداقل و حداکثر رزولوشن مورد قبول برای هر تصويربه ترتيب
 xxxx*yyyy پيکسل و xxxx*yyyy
 پيکسل مي باشد." style="color: red;direction: rtl" ></i>
                        <p style="font-size: 20px">
                            <input type="file" style="margin-right: 14%;display: none" id="uploadFile" >

                        </p>
                    </div>
                    <div style="margin:3% 0">
                        <input type="checkbox" class="form-group" onclick="rezayat()" id="rezayat0">&nbsp;از کارفرمای خود رضايت نامه حسن انجام کار گرفته ام
                        <br><br><button class="btn btn-default" id="rezayatname" disabled onclick="$('#uploadFile').click()">آپلود فايل رضايت نامه
                        </button>
                        <i class="fas fa-info-circle" data-toggle="tooltip" title="فرمت های مورد قبول تصاوير:  jpg، jpeg، gif و png  و حداکثر حجم هر فايل: 10 مگابايت
حداقل و حداکثر رزولوشن مورد قبول برای هر تصويربه ترتيب
 xxxx*yyyy پيکسل و xxxx*yyyy
 پيکسل مي باشد." style="color: red;direction: rtl" ></i>
                        <p style="font-size: 20px">
                            <input type="file" style="margin-right: 14%;display: none" id="uploadFile" >

                        </p>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center;margin: 2%">
                        <button type="button" class="btn btn-success" style="width: 22%;text-align:center;">ذخیره</button>
                        <button type="button" class="btn btn-danger" style="width: 22%;margin-right: 26%;text-align:center;">لغو</button>
                    </div>

                </div>
            </div>
            <!--tamayol-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
                <h4 style="margin: 2% 0">تمايل به انجام چه پروژه هايي داريد؟
                </h4>
                <p style="font-size: 17px"><input type="radio" name="tamayol">&nbsp;پروژه های کوتاه مدت (کمتر از سه ماه)</p>
                <p style="font-size: 17px"><input type="radio" name="tamayol">&nbsp;پروژه های بلند مدت (بيش از سه ماه)</p>
                <p style="font-size: 17px"><input type="radio" name="tamayol">&nbsp;هر دوحالت کوتاه مدت و بلند مدت</p>
            </div>
            <!--dastresi-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
                <h4 style="margin: 2% 0">در دسترس بودن
                </h4>
                <p style="font-size: 17px"><input type="radio" name="dastresi">&nbsp;انجام پروژه را تقبل می نمايم</p>
                <p style="font-size: 17px"><input type="radio" name="dastresi">&nbsp;به خاطر لود کاری انجام پروژه را تا اطلاع ثانوی تقبل نمی کنم</p>
            </div>

            <!--modal-->
            <div class="container">
                <!-- Trigger the modal with a button -->
                <!--cont-->
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center">
                    <button class="btn btn-primary" style="background-color: #2196F3;width: 15%" data-toggle="modal" data-target="#myModal4">ادامه</button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="myModal4" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-body" style="text-align: center">
                                <label class="modal-title">برای دريافت کد امنيتی، يک شماره موبايل معتبر وارد نماييد
                                </label>
                                <i class="fas fa-times" style="float: left;margin: 1%" class="close" data-dismiss="modal4"></i>

                                <br><br><br>
                                <input type="text" class="form-control" placeholder="+9809xxxxxxxx" style="direction: ltr">
                                <br><p>به خاطر امنيت بيشتر، يک شماره موبايل معتبر وارد نماييد تا کد امنيتی خود را بر روی آن شماره دريافت نماييد.
                                </p>
                                <br>
                                <button type="button" class="btn btn-success" data-dismiss="modal4" data-toggle="modal" data-target="#myModal35">تایید شماره </button>
                            </div>
                        </div>

                    </div>
                </div>
                <!--2-->
                <div class="modal fade" id="myModal35" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-body" style="text-align: center">
                                <label class="modal-title">کد امنيتی فرستاده شده بر روی شماره موبايل خود را وارد نماييد
                                </label>
                                <i class="fas fa-times" style="float: left;margin: 1%" class="close" data-dismiss="modal35"></i>

                                <br><br><br>
                                <input type="text" class="form-control" placeholder="+9809xxxxxxxx" style="direction: ltr">
                                <br>
                                <br>
                                <a href="">
                                    <button type="button" class="btn btn-success" data-dismiss="modal35" data-toggle="modal" data-target="#myModal35">ثبت پروفایل </button>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <!--2-->

            </div>
            <!--modal-->
        </div>

</div>

    <!----freevemp---->

    <!----freenoemp---->
    <div id="freenoemp1" class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="display: none;direction: rtl;padding: 3%">

        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center">
            <button class="btn btn-primary" style="background-color: #2196F3;width: 15%" onclick="profilemore3()">ادامه</button>
        </div>
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" id="profilemore13" style="display: none;padding: 0;">
            <h4 style="margin: 2% 0">شرايط و ضوابط:
            </h4>
            <p style="text-align: justify">
                اطلاعات کلی فريلنسری شما که نشان دهنده فعاليت حرفه ای شماست، در وب سايت و اپليکيشن های موبايل زيگورات مارکت بصورت عمومی در اختيار بازديد کنندگان (شامل کارفرمايان، ساير فريلنسرها و شرکت های فريلنسری و هر بازديد کننده ديگر) پلتفرم های مذکور قرار خواهد گرفت ولی زيگورات مارکت اين اطمينان را به شما می دهد که ساير اطلاعات وارد شده توسط شما، به عنوان محرمانه تلقی شده و تحت هيچ شرايطی در اختيار شخص ثالثی قرار نخواهند گرفت. هنگامی که شما پروژه را برنده می شويد، از طريق سيستم پيام رسان زيگورات با کارفرمای آن پروژه در ارتباط خواهيد بود و اکيداً توصيه می شود تمامی اطلاعات رد و بدل شده وای توافقات انجام شده با کارفرما از طريق اين سيستم پيام رسان انجام گيرد تا چنانچه در حين يا بعد از انجام پروژه با کارفرما اختلافی پيش آيد، تيم داوری زيگورات به مستندات رجوع کرده و بر اساس آنها رای خود را صادر نمايد. چنانچه ناچار باشيد از طريق تلفن، ايميل يا هر وسيله ارتباطی ديگری مطلبی را برای کارفرما توضيح دهيد يا از کارفرما در موردی که ابهام داريد سوالاتی بپرسيد که به روند شفاف سازی هدف پروژه يا تسريع در روند انجام پروژه و يا بالا بردن کيفيت کار کمک می کند، توصيه اکيد می گردد که چنانچه توافقی بصورت شفاهی بين شما و کارفرما صورت پذيرفت، حتماً آن توافق را با استناد به مکاتبات شما در تاريخ و ساعت مورد نظر در سيستم پيام رسان زيگورات مستند سازی نماييد و از کارفرما بخواهيد که موافقت خود را در سيستم پيام رسان اعلام نمايد. بديهی است که در مواردی که يکی از طرفين دعوی ادعايي نمايند که در مستندات موجود در پيام رسان زيگورات وجود نداشته باشد، آن ادعا از طرف تيم داوری زيگورات بصورت خودکار رد می گردد هر چند که در جای ديگری غير از سيستم پيام رسان زيگورات ثبت شده باشد.

            </p>
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center">

                <label style="float: right"> <input type="checkbox" onclick="checkterm3()" id="checkterm03" class="form-group">&nbsp; مذکور در شرايط و ضوابط را مطالعه نموده و موافقت خود را اعلام می نمايم.</label>
                <br><br>
                <button class="btn btn-primary" disabled style="background-color: #2196F3;width: 15%" id="termbtn3" onclick="term33()">ادامه</button>
            </div>
        </div>
        <!--onvanesherkat-->
        <div  class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="display: none;" id="onvancomp">

            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">

                <h4>نام شرکت<i class="fas fa-star-of-life" style="color: red;font-size: 8px;" ></i></h4>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6" style="margin-bottom: 3%">
                    <input type="text" class="form-control">
                </div>
                <h4>شماره ثبت شرکت<i class="fas fa-star-of-life" style="color: red;font-size: 8px;" ></i></h4>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6" style="margin-bottom: 3%">
                    <input type="text" class="form-control">
                </div>
                <h4>شناسه ملی شرکت<i class="fas fa-star-of-life" style="color: red;font-size: 8px;" ></i></h4>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6" style="margin-bottom: 3%">
                    <input type="text" class="form-control">
                </div>


            </div>
            <!--khadamat-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
                <!--cat-->
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                    <h4 style="margin: 2% 0">چه خدماتي قادر هستيد به کارفرماها ارائه دهيد؟
                    </h4>
                    <div class="panel panel-default col-md-3 col-lg-3 col-xs-6 col-sm-6" style="padding: 0;float: right;">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse24"><span class="caret pull-left"></span>
                                    </span>دسته بندی موضوعی
                                </a>
                            </h4>
                        </div>
                        <div id="collapse24" class="panel-collapse collapse" style="text-align: right">
                            <div class="panel-body">
                                <table class="table" style="margin-bottom: 0">
                                    <tr>
                                        <td style="border-top: none;">
                                            <input type="radio" name="td12" id="td124" onclick="funtd124()">&nbsp;همه دسته بندی ها

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="">
                                            <input type="radio" name="td12" id="td224" onclick="funtd224()">&nbsp;اتنخاب دسته بندی

                                            <table class="table" onclick="catput4()" id="catinputx4" style="display: none;margin-bottom: 0">
                                                <?php

                                                $sql4 = "SELECT * FROM cat";
                                                $query4 = mysqli_query($db->connect(), $sql4);
                                                while ($results4 = mysqli_fetch_assoc($query4)) {
                                                    ?>

                                                    <tr > <td><input name="position4[]" type="checkbox" onclick="catput4(<?php echo $results4['id']; ?>)" value="<?php echo $results4['id']; ?>">
                                                            &nbsp;<?php echo $results4['name']; ?><br></td></tr>
                                                    <?php
                                                }

                                                ?></table>


                                        </td>
                                    </tr>




                                </table>
                            </div>
                        </div>
                    </div>
                    <script>
                        function funtd224() {
                            var td124=document.getElementById("td124");
                            var td224=document.getElementById("td224");
                            var catinputx4=document.getElementById("catinputx4");
                            if (td224.checked ){
                                document.getElementById("catinputx4") .style.display="block";

                            }
                        } function funtd124() {
                            var td124=document.getElementById("td124");
                            var td224=document.getElementById("td224");
                            var catinputx4=document.getElementById("catinputx4");
                            if (td124.checked ){
                                document.getElementById("catinputx4") .style.display="none";

                            }
                        }
                        function catput4(id) {
                            if(id==null){
                                return;
                            }
                            let subCat = document.getElementsByName(id);
                            if(subCat.length > 0){
                                for(let index=0; index <= subCat.length ; index++){
                                    // subCat[index].parentElement.removeChild(subCat[index]);
                                    subCat[index].style.display = subCat[index].style.display === 'none' ? 'block' :'none';
                                }
                            }
                            else{

                                $.ajax({
                                    url: 'request/general/addsubcat.php',
                                    data: {
                                        catId: id
                                    },
                                    dataType: 'json',
                                    type: 'POST',
                                    success: function (data) {
                                        $("#subinput4").append(data['results11']);
                                        console.log('datas',data);

                                    }
                                });
                            }
                        }


                    </script>

                </div>
                <!--subcat--><br><br>
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="">
                    <h4 class="show-on-hover " style="margin: 2% 0">در چه زمينه هايي مهارت داريد؟
                        <i class="fas fa-info-circle dropdown-toggle" data-toggle="dropdown" style="color: red" ></i>
                        <p class="dropdown-menu" style="top: 17%;text-align: justify;right: 20%;line-height: 2;padding: 1%" role="menu">
                            تعداد مجاز مهارت ها براي عضويت استاندارد 12 مهارت، براي عضويت نقره اي 20 مهارت، براي عضويت برنزي 40 مهارت و براي عضويت طلايي نامحدود مي باشد. چنانچه مايل به انتخاب مهارت هاي بيشتري هستيد، مي توانيد عضويت خود را از
                            <a href="Tariffs.php">اينجا</a>
                            ارتقا دهيد

                        </p></h4>
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="">

                        <p style="background-color: #da4651;color: #ffffff;font-size: 18px;padding: 1%;border-radius: 5px;">
                            با توجه به نوع عضويت شما، حداکثر XXX مهارت قابل انتخاب مي باشد. چنانچه مايل به انتخاب مهارت هاي بيشتري هستيد، عضويت خود را از
                            <a href="Tariffs.php">اينجا </a>
                            ارتقا دهيد

                        </p>

                    </div>
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="direction: rtl;padding: 0">
                        <div class=" affix-sidebar col-md-3 col-lg-3 col-sm-6 col-xs-6" style="border: 1px solid #e7e4e4;float: right">
                            <div class="panel panel-default" style="margin: 0;">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse11-9"><span class="caret pull-left"></span>
                                            </span>زیر دسته بندی
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse11-9" style="text-align: right" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr>
                                                <td  style="border-top: none;">
                                                    <input type="checkbox" name="td1-2" id="check11" onclick="myfunction11()">&nbsp;همه زیر دسته بندی ها
                                                </td>
                                            </tr>
                                            <tr id="subinput4">

                                            </tr>


                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--tajrobe-->
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
                    <h4 style="margin: 2% 0">تجربه کاري شما چگونه است؟
                    </h4>
                    <p style="font-size: 17px"><input type="radio" name="profil2">&nbsp;مبتدي هستم و نياز به کسب مهارت در زمينه کاري خود هستم</p>
                    <p style="font-size: 17px"><input type="radio" name="profil2">&nbsp; تجربه متوسطي در زمينه کاري خود دارم</p>
                    <p style="font-size: 17px"><input type="radio" name="profil2">&nbsp; تلفيقی از نفرات دارای تجربه کاري زياد با توانايي انجام پروژه هاي سنگين و پيچيده، نفرات دارای تجربه متوسط و نفرات مبتدی</p>
                </div>
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center">
                    <button class="btn btn-primary" style="background-color: #2196F3;width: 15%" onclick="uplcon3()" >ادامه</button>
                </div>
            </div>
            <!--khadamat-->
            </div>
        <!--onvanesherkat-->
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" id="upl3" style="display: none">
    <!--upload img freecomp-->
    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6">
        <div class="form-group">
            <h4>لوگوی شرکت خود را براي پروفايل انتخاب نماييد
                <i class="fas fa-info-circle" data-toggle="tooltip" title="سعي نماييد لوگوی شرکت خود را به عنوان عکس مورد نظر آپلود نماييد. توجه نماييد که آواتار قبل قبول نيست و تصوير ارسالی پس از تاييد بر روي پروفايل شما قرار خواهد گرفت." style="color: red" ></i>
            </h4><p>(فرمت هاي قابل قبول jpg، jpeg و png با حجم حداکثر يک مگابايت)
            </p>
            <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    آپلود عکس <input type="file" accept="image/png, image/jpeg, image/gif" id="imgInp7">
                </span>
            </span>
                <input id='urlname7'type="text" class="form-control" readonly style="">
            </div>
            <div style=" width: 18%;text-align: center; margin-right: 8% ; ">
                <img  id='img-upload7'/>
            </div><button id="clear7" class="btn btn-default">حذف</button>
        </div>
    </div>

    <!--upload back freecomp-->
    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6">
        <div class="form-group">
            <h4>تصوير مناسبي را براي پشت زمينه پروفايل شرکت خود انتخاب نماييد
            </h4><p>(تصاوير با فرمت هاي jpg، jpeg و png و با حجم حداکثر يک مگابايت قابل قبول مي باشند. براي درست فيت شدن عکس به پشت زمينه پروفايل خود و جلوگيري از کشيدگي يا جمع شدگي آن، سعي نماييد تصوير مورد نظر خود را با اندازه هاي xxxx*yyyy پيکسل تهيه و آپلود نماييد). تصوير پشت زمينه پس از تاييد در پروفايل شما قرار خواهد گرفت.
            </p>
            <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    آپلود عکس <input type="file" accept="image/png, image/jpeg, image/gif" id="imgInp8">
                </span>
            </span>
                <input id='urlname8'type="text" class="form-control" readonly style="">
            </div>
            <div style=" width: 18%;text-align: center; margin-right: 8% ; ">
                <img  id='img-upload8'/>
            </div><button id="clear8" class="btn btn-default">حذف</button>
        </div>
    </div>
    <!--upload-->
    <!--onvanherfeii-->
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">

        <h4>براي پروفايل شرکت خود يک عنوان حرفه اي انتخاب نماييد
            <i class="fas fa-star-of-life" style="color: red;font-size: 8px;" ></i></h4>
        <p>سعي نماييد عنواني کوتاه را انتخاب نماييد که شما را بصورت رسا و شفاف معرفي نمايد (مثلاً شرکت گرافيکی حرفه اي<br> در زمينه طراحي لوگو و برندينگ)
        </p>
        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6" style="margin-bottom: 3%">
            <input type="text" class="form-control">
        </div>
    </div>
    <!--onvanherfeii-->
    <!--takhasos-->
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">

        <h4>تخصص و قابليت هاي شرکت خود را بصورت مفصل توضيح دهيد
            <i class="fas fa-star-of-life" style="color: red;font-size: 8px;" ></i></h4>
        <p>سعي نماييد تخصص ها، قابليت ها، تجارب و علايق خود را بصورت شفاف در اين قسمت ذکر نماييد تا کارفرماها به راحتي
            <br>
            بتوانند در مورد شما تصميم بگيرند. توجه نماييد که اين قسمت، مهمترين قسمت پروفايل شما مي باشد که بايستي بصورت
            <br>
            حرفه اي تهيه گردد چون منعکس کننده کل تجربه کاري و حرفه اي شماست.
        </p>
        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6" style="margin-bottom: 3%">
            <textarea type="text" class="form-control"></textarea>
        </div>
    </div>
    <!--takhasos-->
    <!--email-->
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">

        <h4>آدرس اينترنتی شرکت خود را وارد نماييد
            <i class="fas fa-star-of-life" style="color: red;font-size: 8px;" ></i></h4>
        <p>داشتن يک وب سايت حرفه ای که توانايي ها، خدمات قابل ارائه و همچنين رزومه افراد فنی شرکت شما را منعکس می کند
            <br>
            باعث می شود که کارفرماهای بيشتری به کار با شما تمايل پيدا کنند.
        </p>
        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6" style="margin-bottom: 3%">
            <input type="text" class="form-control">
        </div>
    </div>
    <!--email-->
    <!--moshakhasatfard-->
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
        <h4>مشخصات يک نفر از پرسنل شرکت خود به عنوان رابط با زيگورات مارکت را وارد نماييد
            <i class="fas fa-star-of-life" style="color: red;font-size: 8px;" ></i></h4>
        <p>مراودات شرکت شما با زيگورات مارکت از طريق اين شخص پيگيری خواهد شد
        </p>
        <h4>نام و نام خانوادگی<i class="fas fa-star-of-life" style="color: red;font-size: 8px;" ></i></h4>
        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6" style="margin-bottom: 3%">
            <input type="text" class="form-control">
        </div>
        <h4>تلفن شرکت<i class="fas fa-star-of-life" style="color: red;font-size: 8px;" ></i></h4>
        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6" style="margin-bottom: 3%">
            <input type="text" class="form-control">
        </div>
        <h4>شماره موبايل<i class="fas fa-star-of-life" style="color: red;font-size: 8px;" ></i></h4>
        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6" style="margin-bottom: 3%">
            <input type="text" class="form-control">
        </div>
        <h4>ايميل<i class="fas fa-star-of-life" style="color: red;font-size: 8px;" ></i></h4>
        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6" style="margin-bottom: 3%">
            <input type="text" class="form-control">
        </div>
    </div>
    <!--moshakhasatfard-->
    <!--upload agahi freecomp-->
    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6">
        <div class="form-group">
            <h4>تصوير آخرين آگهی معتبر تغييرات مديران شرکت و روزنامه رسمی مربوطه (مدت تغييرات و حق امضا)
            </h4><p>(تصاوير با فرمت هاي jpg، jpeg و png و با حجم حداکثر يک مگابايت قابل قبول مي باشند. براي درست فيت شدن عکس به پشت زمينه پروفايل خود و جلوگيري از کشيدگي يا جمع شدگي آن، سعي نماييد تصوير مورد نظر خود را با اندازه هاي xxxx*yyyy پيکسل تهيه و آپلود نماييد). تصوير پشت زمينه پس از تاييد در پروفايل شما قرار خواهد گرفت.
            </p>
            <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    آپلود عکس <input type="file" accept="image/png, image/jpeg, image/gif" id="imgInp9">
                </span>
            </span>
                <input id='urlname9'type="text" class="form-control" readonly style="">
            </div>
            <div style=" width: 18%;text-align: center; margin-right: 8% ; ">
                <img  id='img-upload9'/>
            </div><button id="clear9" class="btn btn-default">حذف</button>
        </div>
    </div>
    <!--upload agahi freecomp-->
    <!--upload rezome freecomp-->
    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6">
        <div class="form-group">
            <h4>رزومه افراد شرکت را به منظور درج در پروفايل شرکت آپلود نماييد.
            </h4><p>( فرمت pdf و با حجم حداکثر يک دو  قابل قبول مي باشد)
            </p>
            <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    آپلود عکس <input type="file" accept="image/png, image/jpeg, image/gif" id="imgInp10">
                </span>
            </span>
                <input id='urlname10'type="text" class="form-control" readonly style="">
            </div>
            <div style=" width: 18%;text-align: center; margin-right: 8% ; ">
                <img  id='img-upload10'/>
            </div><button id="clear10" class="btn btn-default">حذف</button>
        </div>
    </div>
    <!--upload rezome freecomp-->
    <!--dastmozd-->
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
        <h4>دستمزد ساعتي خود را براي پروژه هاي ساعتي مشخص نماييد
        </h4>
        <input type="text" class="form-group">تومان بر ساعت
    </div>
    <!--dastmozd-->
    <!--saat-->
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
        <h4>براي پروژه هاي  ساعتي، چند ساعت در هفته وقت داريد؟
        </h4>

        <select class="form-group">
            <option disabled selected>ميزان ساعت در هفته را مشخص نماييد
            </option>
            <option>کمتر از 40 ساعت در هفته
            </option>
            <option>بيشتر از 40 ساعت در هفته
            </option>
            <option>بر اساس توافق با کارفرما
            </option>
        </select>
    </div>
    <!--saat-->
    <!--tamayol-->
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
        <h4 style="margin: 2% 0">تمايل به انجام چه پروژه هايي داريد؟
        </h4>
        <p style="font-size: 17px"><input type="radio" name="tamayol">&nbsp;پروژه های کوتاه مدت (کمتر از سه ماه)</p>
        <p style="font-size: 17px"><input type="radio" name="tamayol">&nbsp;پروژه های بلند مدت (بيش از سه ماه)</p>
        <p style="font-size: 17px"><input type="radio" name="tamayol">&nbsp;هر دوحالت کوتاه مدت و بلند مدت</p>
    </div>
    <!--tamayol-->
    <!--dastresi-->
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
        <h4 style="margin: 2% 0">در دسترس بودن
        </h4>
        <p style="font-size: 17px"><input type="radio" name="dastresi">&nbsp;انجام پروژه را تقبل می نمايم</p>
        <p style="font-size: 17px"><input type="radio" name="dastresi">&nbsp;به خاطر لود کاری انجام پروژه را تا اطلاع ثانوی تقبل نمی کنم</p>
    </div>
    <!--dastresi-->
    <!--modal-->
    <div class="container">
        <!-- Trigger the modal with a button -->
        <!--cont-->
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center">
            <button class="btn btn-primary" style="background-color: #2196F3;width: 15%" data-toggle="modal" data-target="#myModal444">ادامه</button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal444" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body" style="text-align: center">
                        <label class="modal-title">برای دريافت کد امنيتی، يک شماره موبايل معتبر وارد نماييد
                        </label>
                        <i class="fas fa-times" style="float: left;margin: 1%" class="close" data-dismiss="modal444"></i>

                        <br><br><br>
                        <input type="text" class="form-control" placeholder="+9809xxxxxxxx" style="direction: ltr">
                        <br><p>به خاطر امنيت بيشتر، يک شماره موبايل معتبر وارد نماييد تا کد امنيتی خود را بر روی آن شماره دريافت نماييد.
                        </p>
                        <br>
                        <button type="button" class="btn btn-success" data-dismiss="modal444" data-toggle="modal" data-target="#myModal445">تایید شماره </button>
                    </div>
                </div>

            </div>
        </div>
        <!--2-->
        <div class="modal fade" id="myModal445" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body" style="text-align: center">
                        <label class="modal-title">کد امنيتی فرستاده شده بر روی شماره موبايل خود را وارد نماييد
                        </label>
                        <i class="fas fa-times" style="float: left;margin: 1%" class="close" data-dismiss="modal445"></i>

                        <br><br><br>
                        <input type="text" class="form-control" placeholder="+9809xxxxxxxx" style="direction: ltr">
                        <br>
                        <br>
                        <a href="">
                            <button type="button" class="btn btn-success" data-dismiss="modal445" data-toggle="modal" data-target="#myModal445">ثبت پروفایل </button>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!--2-->

    </div>
    <!--modal-->
</div>

    </div>
    <!----freenoemp---->

    <!----freeemp---->
    <div id="freeemp1" class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="display: none;direction: rtl;padding: 3%">

        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center">
            <button class="btn btn-primary" style="background-color: #2196F3;width: 15%" onclick="profilemore4()">ادامه</button>
        </div>
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" id="profilemore14" style="display: none;padding: 0;">
            <h4 style="margin: 2% 0">شرايط و ضوابط:
            </h4>
            <p style="text-align: justify">
                اطلاعات کلی فريلنسری شما که نشان دهنده فعاليت حرفه ای شماست، در وب سايت و اپليکيشن های موبايل زيگورات مارکت بصورت عمومی در اختيار بازديد کنندگان (شامل کارفرمايان، ساير فريلنسرها و شرکت های فريلنسری و هر بازديد کننده ديگر) پلتفرم های مذکور قرار خواهد گرفت ولی زيگورات مارکت اين اطمينان را به شما می دهد که ساير اطلاعات وارد شده توسط شما، به عنوان محرمانه تلقی شده و تحت هيچ شرايطی در اختيار شخص ثالثی قرار نخواهند گرفت. هنگامی که شما پروژه را برنده می شويد، از طريق سيستم پيام رسان زيگورات با کارفرمای آن پروژه در ارتباط خواهيد بود و اکيداً توصيه می شود تمامی اطلاعات رد و بدل شده وای توافقات انجام شده با کارفرما از طريق اين سيستم پيام رسان انجام گيرد تا چنانچه در حين يا بعد از انجام پروژه با کارفرما اختلافی پيش آيد، تيم داوری زيگورات به مستندات رجوع کرده و بر اساس آنها رای خود را صادر نمايد. چنانچه ناچار باشيد از طريق تلفن، ايميل يا هر وسيله ارتباطی ديگری مطلبی را برای کارفرما توضيح دهيد يا از کارفرما در موردی که ابهام داريد سوالاتی بپرسيد که به روند شفاف سازی هدف پروژه يا تسريع در روند انجام پروژه و يا بالا بردن کيفيت کار کمک می کند، توصيه اکيد می گردد که چنانچه توافقی بصورت شفاهی بين شما و کارفرما صورت پذيرفت، حتماً آن توافق را با استناد به مکاتبات شما در تاريخ و ساعت مورد نظر در سيستم پيام رسان زيگورات مستند سازی نماييد و از کارفرما بخواهيد که موافقت خود را در سيستم پيام رسان اعلام نمايد. بديهی است که در مواردی که يکی از طرفين دعوی ادعايي نمايند که در مستندات موجود در پيام رسان زيگورات وجود نداشته باشد، آن ادعا از طرف تيم داوری زيگورات بصورت خودکار رد می گردد هر چند که در جای ديگری غير از سيستم پيام رسان زيگورات ثبت شده باشد.

            </p>
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center">

                <label style="float: right"> <input type="checkbox" onclick="checkterm4()" id="checkterm04" class="form-group">&nbsp; مذکور در شرايط و ضوابط را مطالعه نموده و موافقت خود را اعلام می نمايم.</label>
                <br><br>
                <button class="btn btn-primary" disabled style="background-color: #2196F3;width: 15%" id="termbtn4" onclick="term34()">ادامه</button>
            </div>
        </div>
        <!--onvanesherkat-->
        <div  class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="display: none;" id="onvancomp4">

            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">

                <h4>نام شرکت<i class="fas fa-star-of-life" style="color: red;font-size: 8px;" ></i></h4>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6" style="margin-bottom: 3%">
                    <input type="text" class="form-control">
                </div>
                <h4>شماره ثبت شرکت<i class="fas fa-star-of-life" style="color: red;font-size: 8px;" ></i></h4>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6" style="margin-bottom: 3%">
                    <input type="text" class="form-control">
                </div>
                <h4>شناسه ملی شرکت<i class="fas fa-star-of-life" style="color: red;font-size: 8px;" ></i></h4>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6" style="margin-bottom: 3%">
                    <input type="text" class="form-control">
                </div>


            </div>
            <!--khadamat-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
                <!--cat-->
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                    <h4 style="margin: 2% 0">چه خدماتي قادر هستيد به کارفرماها ارائه دهيد؟
                    </h4>
                    <div class="panel panel-default col-md-3 col-lg-3 col-xs-6 col-sm-6" style="padding: 0;float: right;">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse25"><span class="caret pull-left"></span>
                                    </span>دسته بندی موضوعی
                                </a>
                            </h4>
                        </div>
                        <div id="collapse25" class="panel-collapse collapse" style="text-align: right">
                            <div class="panel-body">
                                <table class="table" style="margin-bottom: 0">
                                    <tr>
                                        <td style="border-top: none;">
                                            <input type="radio" name="td12" id="td125" onclick="funtd125()">&nbsp;همه دسته بندی ها

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="">
                                            <input type="radio" name="td12" id="td225" onclick="funtd225()">&nbsp;اتنخاب دسته بندی

                                            <table class="table" onclick="catput5()" id="catinputx5" style="display: none;margin-bottom: 0">
                                                <?php

                                                $sql5 = "SELECT * FROM cat";
                                                $query5 = mysqli_query($db->connect(), $sql5);
                                                while ($results5 = mysqli_fetch_assoc($query5)) {
                                                    ?>

                                                    <tr > <td><input name="position5[]" type="checkbox" onclick="catput5(<?php echo $results5['id']; ?>)" value="<?php echo $results5['id']; ?>">
                                                            &nbsp;<?php echo $results5['name']; ?><br></td></tr>
                                                    <?php
                                                }

                                                ?></table>

                                        </td>
                                    </tr>




                                </table>
                            </div>
                        </div>
                    </div>
                    <script>
                        function funtd225() {
                            var td125=document.getElementById("td125");
                            var td225=document.getElementById("td225");
                            var catinputx5=document.getElementById("catinputx5");
                            if (td225.checked ){
                                document.getElementById("catinputx5") .style.display="block";

                            }
                        } function funtd125() {
                            var td125=document.getElementById("td125");
                            var td225=document.getElementById("td225");
                            var catinputx5=document.getElementById("catinputx5");
                            if (td125.checked ){
                                document.getElementById("catinputx5") .style.display="none";

                            }
                        }
                        function catput5(id) {
                            if(id==null){
                                return;
                            }
                            let subCat = document.getElementsByName(id);
                            if(subCat.length > 0){
                                for(let index=0; index <= subCat.length ; index++){
                                    // subCat[index].parentElement.removeChild(subCat[index]);
                                    subCat[index].style.display = subCat[index].style.display === 'none' ? 'block' :'none';
                                }
                            }
                            else{

                                $.ajax({
                                    url: 'request/general/addsubcat.php',
                                    data: {
                                        catId: id
                                    },
                                    dataType: 'json',
                                    type: 'POST',
                                    success: function (data) {
                                        $("#subinput5").append(data['results11']);
                                        console.log('datas',data);

                                    }
                                });
                            }
                        }


                    </script>
                </div>
                <!--subcat--><br><br>
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="">
                    <h4 class="show-on-hover " style="margin: 2% 0">در چه زمينه هايي مهارت داريد؟
                        <i class="fas fa-info-circle dropdown-toggle" data-toggle="dropdown" style="color: red" ></i>
                        <p class="dropdown-menu" style="top: 17%;text-align: justify;right: 20%;line-height: 2;padding: 1%" role="menu">
                            تعداد مجاز مهارت ها براي عضويت استاندارد 12 مهارت، براي عضويت نقره اي 20 مهارت، براي عضويت برنزي 40 مهارت و براي عضويت طلايي نامحدود مي باشد. چنانچه مايل به انتخاب مهارت هاي بيشتري هستيد، مي توانيد عضويت خود را از
                            <a href="Tariffs.php">اينجا</a>
                            ارتقا دهيد

                        </p></h4>
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="">

                        <p style="background-color: #da4651;color: #ffffff;font-size: 18px;padding: 1%;border-radius: 5px;">
                            با توجه به نوع عضويت شما، حداکثر XXX مهارت قابل انتخاب مي باشد. چنانچه مايل به انتخاب مهارت هاي بيشتري هستيد، عضويت خود را از
                            <a href="Tariffs.php">اينجا </a>
                            ارتقا دهيد

                        </p>

                    </div>
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="direction: rtl;padding: 0">
                        <div class=" affix-sidebar col-md-3 col-lg-3 col-sm-6 col-xs-6" style="border: 1px solid #e7e4e4;float: right">
                            <div class="panel panel-default" style="margin: 0;">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse11-10"><span class="caret pull-left"></span>
                                            </span>زیر دسته بندی
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse11-10" style="text-align: right" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr>
                                                <td  style="border-top: none;">
                                                    <input type="checkbox" name="td1-2" id="check11" onclick="myfunction11()">&nbsp;همه زیر دسته بندی ها
                                                </td>
                                            </tr>
                                            <tr id="subinput5">

                                            </tr>


                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--niaz-->
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
                    <!--cat-->
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="padding: 0;">
                        <h4 style="margin: 2% 0">به چه خدماتي نياز داريد؟
                        </h4>
                        <div class="panel panel-default col-md-3 col-lg-3 col-xs-6 col-sm-6" style="padding: 0;float: right;">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse26"><span class="caret pull-left"></span>
                                        </span>دسته بندی موضوعی
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse26" class="panel-collapse collapse" style="text-align: right">
                                <div class="panel-body">
                                    <table class="table" style="margin-bottom: 0">
                                        <tr>
                                            <td style="border-top: none;">
                                                <input type="radio" name="td12" id="td126" onclick="funtd126()">&nbsp;همه دسته بندی ها

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="">
                                                <input type="radio" name="td12" id="td226" onclick="funtd226()">&nbsp;اتنخاب دسته بندی

                                                <table class="table" onclick="catput6()" id="catinputx6" style="display: none;margin-bottom: 0">
                                                    <?php

                                                    $sql6 = "SELECT * FROM cat";
                                                    $query6 = mysqli_query($db->connect(), $sql6);
                                                    while ($results6 = mysqli_fetch_assoc($query6)) {
                                                        ?>

                                                        <tr > <td><input name="position6[]" type="checkbox" onclick="catput6(<?php echo $results6['id']; ?>)" value="<?php echo $results6['id']; ?>">
                                                                &nbsp;<?php echo $results6['name']; ?><br></td></tr>
                                                        <?php
                                                    }

                                                    ?></table>


                                            </td>
                                        </tr>




                                    </table>
                                </div>
                            </div>
                        </div>
                        <script>
                            function funtd226() {
                                var td126=document.getElementById("td126");
                                var td226=document.getElementById("td226");
                                var catinputx6=document.getElementById("catinputx6");
                                if (td226.checked ){
                                    document.getElementById("catinputx6") .style.display="block";

                                }
                            } function funtd126() {
                                var td126=document.getElementById("td126");
                                var td226=document.getElementById("td226");
                                var catinputx6=document.getElementById("catinputx6");
                                if (td126.checked ){
                                    document.getElementById("catinputx6") .style.display="none";

                                }
                            }
                            function catput6(id) {
                                if(id==null){
                                    return;
                                }
                                let subCat = document.getElementsByName(id);
                                if(subCat.length > 0){
                                    for(let index=0; index <= subCat.length ; index++){
                                        // subCat[index].parentElement.removeChild(subCat[index]);
                                        subCat[index].style.display = subCat[index].style.display === 'none' ? 'block' :'none';
                                    }
                                }
                                else{

                                    $.ajax({
                                        url: 'request/general/addsubcat.php',
                                        data: {
                                            catId: id
                                        },
                                        dataType: 'json',
                                        type: 'POST',
                                        success: function (data) {
                                            $("#subinput6").append(data['results11']);
                                            console.log('datas',data);

                                        }
                                    });
                                }
                            }

                        </script>
                    </div>
                    <!--subcat--><br><br>
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="direction: rtl;padding: 0">
                        <div class=" affix-sidebar col-md-3 col-lg-3 col-sm-6 col-xs-6" style="border: 1px solid #e7e4e4;float: right">
                            <div class="panel panel-default" style="margin: 0;">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse11-11"><span class="caret pull-left"></span>
                                            </span>زیر دسته بندی
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse11-11" style="text-align: right" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr>
                                                <td  style="border-top: none;">
                                                    <input type="checkbox" name="td1-2" id="check11" onclick="myfunction11()">&nbsp;همه زیر دسته بندی ها
                                                </td>
                                            </tr>
                                            <tr id="subinput6">

                                            </tr>


                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                <!--niaz-->

                <!--tajrobe-->
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
                    <h4 style="margin: 2% 0">تجربه کاري شما چگونه است؟
                    </h4>
                    <p style="font-size: 17px"><input type="radio" name="profil2">&nbsp;مبتدي هستم و نياز به کسب مهارت در زمينه کاري خود هستم</p>
                    <p style="font-size: 17px"><input type="radio" name="profil2">&nbsp; تجربه متوسطي در زمينه کاري خود دارم</p>
                    <p style="font-size: 17px"><input type="radio" name="profil2">&nbsp; تلفيقی از نفرات دارای تجربه کاري زياد با توانايي انجام پروژه هاي سنگين و پيچيده، نفرات دارای تجربه متوسط و نفرات مبتدی</p>
                </div>
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center">
                    <button class="btn btn-primary" style="background-color: #2196F3;width: 15%" onclick="uplcon4()" >ادامه</button>
                </div>
            </div>
            <!--khadamat-->
        </div>
        <!--onvanesherkat-->
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" id="upl4" style="display: none">
            <!--upload img freecomp-->
            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6">
                <div class="form-group">
                    <h4>لوگوی شرکت خود را براي پروفايل انتخاب نماييد
                        <i class="fas fa-info-circle" data-toggle="tooltip" title="سعي نماييد لوگوی شرکت خود را به عنوان عکس مورد نظر آپلود نماييد. توجه نماييد که آواتار قبل قبول نيست و تصوير ارسالی پس از تاييد بر روي پروفايل شما قرار خواهد گرفت." style="color: red" ></i>
                    </h4><p>(فرمت هاي قابل قبول jpg، jpeg و png با حجم حداکثر يک مگابايت)
                    </p>
                    <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    آپلود عکس <input type="file" accept="image/png, image/jpeg, image/gif" id="imgInp11">
                </span>
            </span>
                        <input id='urlname11'type="text" class="form-control" readonly style="">
                    </div>
                    <div style=" width: 18%;text-align: center; margin-right: 8% ; ">
                        <img  id='img-upload11'/>
                    </div><button id="clear11" class="btn btn-default">حذف</button>
                </div>
            </div>

            <!--upload back freecomp-->
            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6">
                <div class="form-group">
                    <h4>تصوير مناسبي را براي پشت زمينه پروفايل شرکت خود انتخاب نماييد
                    </h4><p>(تصاوير با فرمت هاي jpg، jpeg و png و با حجم حداکثر يک مگابايت قابل قبول مي باشند. براي درست فيت شدن عکس به پشت زمينه پروفايل خود و جلوگيري از کشيدگي يا جمع شدگي آن، سعي نماييد تصوير مورد نظر خود را با اندازه هاي xxxx*yyyy پيکسل تهيه و آپلود نماييد). تصوير پشت زمينه پس از تاييد در پروفايل شما قرار خواهد گرفت.
                    </p>
                    <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    آپلود عکس <input type="file" accept="image/png, image/jpeg, image/gif" id="imgInp12">
                </span>
            </span>
                        <input id='urlname12'type="text" class="form-control" readonly style="">
                    </div>
                    <div style=" width: 18%;text-align: center; margin-right: 8% ; ">
                        <img  id='img-upload12'/>
                    </div><button id="clear12" class="btn btn-default">حذف</button>
                </div>
            </div>
            <!--upload-->
            <!--onvanherfeii-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">

                <h4>براي پروفايل شرکت خود يک عنوان حرفه اي انتخاب نماييد
                    <i class="fas fa-star-of-life" style="color: red;font-size: 8px;" ></i></h4>
                <p>سعي نماييد عنواني کوتاه را انتخاب نماييد که شما را بصورت رسا و شفاف معرفي نمايد (مثلاً شرکت گرافيکی حرفه اي<br> در زمينه طراحي لوگو و برندينگ)
                </p>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6" style="margin-bottom: 3%">
                    <input type="text" class="form-control">
                </div>
            </div>
            <!--onvanherfeii-->
            <!--takhasos-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">

                <h4>تخصص و قابليت هاي شرکت خود را بصورت مفصل توضيح دهيد
                    <i class="fas fa-star-of-life" style="color: red;font-size: 8px;" ></i></h4>
                <p>سعي نماييد تخصص ها، قابليت ها، تجارب و علايق خود را بصورت شفاف در اين قسمت ذکر نماييد تا کارفرماها به راحتي
                    <br>
                    بتوانند در مورد شما تصميم بگيرند. توجه نماييد که اين قسمت، مهمترين قسمت پروفايل شما مي باشد که بايستي بصورت
                    <br>
                    حرفه اي تهيه گردد چون منعکس کننده کل تجربه کاري و حرفه اي شماست.
                </p>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6" style="margin-bottom: 3%">
                    <textarea type="text" class="form-control"></textarea>
                </div>
            </div>
            <!--takhasos-->
            <!--email-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">

                <h4>آدرس اينترنتی شرکت خود را وارد نماييد
                    <i class="fas fa-star-of-life" style="color: red;font-size: 8px;" ></i></h4>
                <p>داشتن يک وب سايت حرفه ای که توانايي ها، خدمات قابل ارائه و همچنين رزومه افراد فنی شرکت شما را منعکس می کند
                    <br>
                    باعث می شود که کارفرماهای بيشتری به کار با شما تمايل پيدا کنند.
                </p>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6" style="margin-bottom: 3%">
                    <input type="text" class="form-control">
                </div>
            </div>
            <!--email-->
            <!--moshakhasatfard-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
                <h4>مشخصات يک نفر از پرسنل شرکت خود به عنوان رابط با زيگورات مارکت را وارد نماييد
                    <i class="fas fa-star-of-life" style="color: red;font-size: 8px;" ></i></h4>
                <p>مراودات شرکت شما با زيگورات مارکت از طريق اين شخص پيگيری خواهد شد
                </p>
                <h4>نام و نام خانوادگی<i class="fas fa-star-of-life" style="color: red;font-size: 8px;" ></i></h4>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6" style="margin-bottom: 3%">
                    <input type="text" class="form-control">
                </div>
                <h4>تلفن شرکت<i class="fas fa-star-of-life" style="color: red;font-size: 8px;" ></i></h4>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6" style="margin-bottom: 3%">
                    <input type="text" class="form-control">
                </div>
                <h4>شماره موبايل<i class="fas fa-star-of-life" style="color: red;font-size: 8px;" ></i></h4>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6" style="margin-bottom: 3%">
                    <input type="text" class="form-control">
                </div>
                <h4>ايميل<i class="fas fa-star-of-life" style="color: red;font-size: 8px;" ></i></h4>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6" style="margin-bottom: 3%">
                    <input type="text" class="form-control">
                </div>
            </div>
            <!--moshakhasatfard-->
            <!--upload agahi freecomp-->
            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6">
                <div class="form-group">
                    <h4>تصوير آخرين آگهی معتبر تغييرات مديران شرکت و روزنامه رسمی مربوطه (مدت تغييرات و حق امضا)
                    </h4><p>(تصاوير با فرمت هاي jpg، jpeg و png و با حجم حداکثر يک مگابايت قابل قبول مي باشند. براي درست فيت شدن عکس به پشت زمينه پروفايل خود و جلوگيري از کشيدگي يا جمع شدگي آن، سعي نماييد تصوير مورد نظر خود را با اندازه هاي xxxx*yyyy پيکسل تهيه و آپلود نماييد). تصوير پشت زمينه پس از تاييد در پروفايل شما قرار خواهد گرفت.
                    </p>
                    <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    آپلود عکس <input type="file" accept="image/png, image/jpeg, image/gif" id="imgInp13">
                </span>
            </span>
                        <input id='urlname13'type="text" class="form-control" readonly style="">
                    </div>
                    <div style=" width: 18%;text-align: center; margin-right: 8% ; ">
                        <img  id='img-upload13'/>
                    </div><button id="clear13" class="btn btn-default">حذف</button>
                </div>
            </div>
            <!--upload agahi freecomp-->
            <!--upload rezome freecomp-->
            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 col-md-offset-6 col-lg-offset-6">
                <div class="form-group">
                    <h4>رزومه افراد شرکت را به منظور درج در پروفايل شرکت آپلود نماييد.
                    </h4><p>( فرمت pdf و با حجم حداکثر يک دو  قابل قبول مي باشد)
                    </p>
                    <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    آپلود عکس <input type="file" accept="image/png, image/jpeg, image/gif" id="imgInp14">
                </span>
            </span>
                        <input id='urlname14'type="text" class="form-control" readonly style="">
                    </div>
                    <div style=" width: 18%;text-align: center; margin-right: 8% ; ">
                        <img  id='img-upload14'/>
                    </div><button id="clear14" class="btn btn-default">حذف</button>
                </div>
            </div>
            <!--upload rezome freecomp-->
            <!--dastmozd-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
                <h4>دستمزد ساعتي خود را براي پروژه هاي ساعتي مشخص نماييد
                </h4>
                <input type="text" class="form-group">تومان بر ساعت
            </div>
            <!--dastmozd-->
            <!--saat-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
                <h4>براي پروژه هاي  ساعتي، چند ساعت در هفته وقت داريد؟
                </h4>

                <select class="form-group">
                    <option disabled selected>ميزان ساعت در هفته را مشخص نماييد
                    </option>
                    <option>کمتر از 40 ساعت در هفته
                    </option>
                    <option>بيشتر از 40 ساعت در هفته
                    </option>
                    <option>بر اساس توافق با کارفرما
                    </option>
                </select>
            </div>
            <!--saat-->
            <!--tamayol-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
                <h4 style="margin: 2% 0">تمايل به انجام چه پروژه هايي داريد؟
                </h4>
                <p style="font-size: 17px"><input type="radio" name="tamayol">&nbsp;پروژه های کوتاه مدت (کمتر از سه ماه)</p>
                <p style="font-size: 17px"><input type="radio" name="tamayol">&nbsp;پروژه های بلند مدت (بيش از سه ماه)</p>
                <p style="font-size: 17px"><input type="radio" name="tamayol">&nbsp;هر دوحالت کوتاه مدت و بلند مدت</p>
            </div>
            <!--tamayol-->
            <!--dastresi-->
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin: 3% 0">
                <h4 style="margin: 2% 0">در دسترس بودن
                </h4>
                <p style="font-size: 17px"><input type="radio" name="dastresi">&nbsp;انجام پروژه را تقبل می نمايم</p>
                <p style="font-size: 17px"><input type="radio" name="dastresi">&nbsp;به خاطر لود کاری انجام پروژه را تا اطلاع ثانوی تقبل نمی کنم</p>
            </div>
            <!--dastresi-->
            <!--modal-->
            <div class="container">
                <!-- Trigger the modal with a button -->
                <!--cont-->
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center">
                    <button class="btn btn-primary" style="background-color: #2196F3;width: 15%" data-toggle="modal" data-target="#myModal555">ادامه</button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="myModal555" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-body" style="text-align: center">
                                <label class="modal-title">برای دريافت کد امنيتی، يک شماره موبايل معتبر وارد نماييد
                                </label>
                                <i class="fas fa-times" style="float: left;margin: 1%" class="close" data-dismiss="modal555"></i>

                                <br><br><br>
                                <input type="text" class="form-control" placeholder="+9809xxxxxxxx" style="direction: ltr">
                                <br><p>به خاطر امنيت بيشتر، يک شماره موبايل معتبر وارد نماييد تا کد امنيتی خود را بر روی آن شماره دريافت نماييد.
                                </p>
                                <br>
                                <button type="button" class="btn btn-success" data-dismiss="modal555" data-toggle="modal" data-target="#myModal556">تایید شماره </button>
                            </div>
                        </div>

                    </div>
                </div>
                <!--2-->
                <div class="modal fade" id="myModal556" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-body" style="text-align: center">
                                <label class="modal-title">کد امنيتی فرستاده شده بر روی شماره موبايل خود را وارد نماييد
                                </label>
                                <i class="fas fa-times" style="float: left;margin: 1%" class="close" data-dismiss="modal556"></i>

                                <br><br><br>
                                <input type="text" class="form-control" placeholder="+9809xxxxxxxx" style="direction: ltr">
                                <br>
                                <br>
                                <a href="">
                                    <button type="button" class="btn btn-success" data-dismiss="modal556" data-toggle="modal" data-target="#myModal556">ثبت پروفایل </button>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <!--2-->

            </div>
            <!--modal-->
        </div>

    </div>
    <!----freeemp---->

        </div>


    <!--main-->
<!--footer-->
<?php
echo file_get_contents("inc/footerr.php")
?>
<!--footer-->
</div>

</body>

</html>