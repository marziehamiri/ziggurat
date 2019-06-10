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
    <link href="css/all.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">
    <script src="assets/js/script.js"></script>
    <script src="assets/countdown/jquery.countdown.js"></script>
    <link href="assets/countdown/jquery.countdown.css" rel="stylesheet">

    <script src="js/jq.min.js" type="text/javascript"></script>
    <script src="js/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>
    <link href="css/tabsearchindex.css" rel="stylesheet">
    <link href="css/projectmenucss.css" rel="stylesheet">
</head>
<body>

<!--header-->
<?php include "inc/headd.php"; ?>
<!--header-->
<!--main-->

<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" onclick="faidoutsearch()" id="faidoutsearch" style="padding: 0;direction: rtl ;text-align: center;background-color: #f2f2f2;   ">

    <!--radio1-->
    <label class="Radio-label containe" style="margin-top: 2%">پروژه ها و مسابقات  باز
        <input checked="checked" id="year" type="radio" onclick="tariffp()" name="tariffs" value="year" class="Radio-input" >

        <span class="checkmark"></span></label>

    <div class="col-sm-12 col-lg-12 col-xs-12 col-sm-12" id="radio2" style="direction: rtl;text-align: center">
        <!--tab-->
        <div class="container">
            <div class="row"  style="margin-top:20px;">
                <div class=" well well-sm  bg-white borderZero"  uib-dropdown >
                    <div class="btn-group date-block btn-group-justified font-small dropdown" data-toggle="buttons" style="width: 100%;">
                        <label id="home1" href="#home" data-toggle="tab" class="btn btn-primary  next font-small semiBold in"  style="font-size:12px; border-radius:0;">
                            نتيجه جستجو

                        </label>
                        <label  href="#profile" data-toggle="tab" class="btn btn-primary previous text-right font-small semiBold"  style="font-size:12px;">
                            جستجوهای ذخيره شده

                        </label>
                        <label href="#contact" data-toggle="tab" class="btn date-buttons btn-primary text-right semiBold" style="font-size:12px;" >
                            پروژه ها و مسابقات ذخيره شده

                        </label>



                    </div>

                </div>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="home">
                        <!--left-->
                        <!--openproject-->
                        <div class="col-md-9 col-lg-9 col-xs-7 col-sm-7" style="margin-bottom: 5%;padding: 0;background-color: #f8f8f8 ;  box-shadow: 0 0 4px 0 rgba(0,0,0,.08), 0 2px 4px 0 rgba(0,0,0,.12);">
                         <!--head-->
                        <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12" style="border-bottom: 1px solid #e8e0e0;background-color: #f9f9f9;box-shadow: 0 0 4px 0 rgba(0,0,0,.08), 0 2px 4px 0 rgba(0,0,0,.12)" id="filters">

                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="direction: rtl;padding: 0;border-bottom: 1px solid #e8e0e0;background-color: #f9f9f9;margin-top: 2%">
                                <div class="col-md-6 col-lg-6 col-xs-6 col-sm-6" style="padding: 0" >
                                    <select  style="float: left;width: 30%">
                                        <option class="active">1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select><label style="float: left" >مرتب سازی :&nbsp;</label>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3" >
                                    <a style="color: #2196F3">
                                        <i class="fas fa-plus-circle"></i>&nbsp;<label>دخیره نتایج جستجو </label>

                                    </a>


                                </div>

                                <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3" >
                                    <p style="float: right"> شغل پیدا شده<label>841</label></p>

                                </div>
                            </div>
                        </div>
                        <!--head-->
                        <!--body-->
                        <?php

                        $sql = "SELECT project.id as fid,title,project.fee as fee,project.type as type,count(suggestion.freelancer_id) as countfree,project.description as description,project.timer as timer from project,suggestion where project.id=suggestion.project_id group by project.id";

                        $query = mysqli_query($db->connect(),$sql);
                        while ( $results = mysqli_fetch_assoc( $query) ){
                            $timer=$results["timer"];
                            echo '
                    <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 1%;border-bottom: 1px solid #e8e0e0;background-color: #f9f9f9;box-shadow: 0 0 4px 0 rgba(0,0,0,.08), 0 2px 4px 0 rgba(0,0,0,.12);" >
                     <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12" style="padding-left: 0" >
                      <div class="col-xs-6 col-md-3 col-sm-6 col-lg-3" style="padding: 0;float: right">

                             <a href="detailproject.php">
                                 <h3 style="color: #009900;float: right;margin-bottom: 2%;">'.$results["title"].'</h3>
                             </a>
                             
                         </div>
                      
                      <div class="col-md-3 col-lg-3 col-xs-6 col-sm-6" style="float: left;margin-top: 2%">
                         
                         <label style="color: #00b0f0;margin: 5%">نشان کردن</label>
            <i style="color: #3297dc;margin: 2%" class="fas fa-thumbtack"></i><br>
                         </div>
                      <!--timer-->
                      <div id="timer" class="col-md-6 col-xs-12 col-lg-6 col-sm-12 timdiv" style="margin-top: 3%;direction: ltr;line-height: 2;margin-bottom: 2%;text-align: center;">

                      <div id="countdown" style="direction: ltr"></div>
		                  زمان باقی مانده
                       </div>
                       <!--timer-->
                     </div>
                     <!--option-->
                     <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12" style="color: #FFFFFF;padding: 0">
                    
                              <label style="color: #2196F3;float: right;font-size: 18px">مبلغ پروژه</label> 
                      <br><br>
                     <label style="background-color: #e2c784;border-radius: 5px;margin-left: 1%;width: 90px;padding: 1%">ستاره دار</label>
                     <label style="background-color: #00b050;border-radius: 5px;margin-left: 1%;width: 90px;padding: 1%;">استخدامی</label>
                     <label style="background-color: #006666;border-radius: 5px;margin-left: 1%;width: 90px;padding: 1%;">شرکتی</label>
                     <label style="background-color: #ff7300;border-radius: 5px;margin-left: 1%;width: 90px;padding: 1%;">فوری</label>
                     <label style="background-color: #4774b7;border-radius: 5px;margin-left: 1%;width: 90px;padding: 1%;">برجسته</label>
                     <label style="background-color: #00b0f0;border-radius: 5px;margin-left: 1%;width: 90px;padding: 1%;">ویژه</label>
                     <label style="background-color: #afabab;border-radius: 5px;margin-left: 1%;width: 90px;padding: 1%;">محرمانه</label>
                     <label style="background-color: #595959;border-radius: 5px;width: 90px;padding: 1%">عدم افشا</label>
                     
                     </div>
                     <!--option-->
                     <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12" style="padding: 0;margin-top: 4%">
                     <label style=""   data-toggle="tooltip" title="ميزان محبوبيت کارفرما از نظر فريلنسرها ">
                     <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                
                    </label><span style="margin-left: 3%;color: white;background: orange;border-radius: 3px;padding: 0% 1%;">4.57</span>
                     <label style="margin-left: 3%">مبلغ :&nbsp;'.$results["fee"].'</label>
                    <label style="margin-left: 3%">نوع پرداخت :&nbsp; '.$results["type"].'</label> 
                     <label style="margin-left: 3%">فریلنسر معمولی</label>
                     
                     <label style="margin-left: 3%">تعداد پیشنهاد :&nbsp;'.$results["countfree"].'</label>
                     <label style="margin-left: 3%">میانگین قیمت پیشنهاد </label>
                     </div>
                     
                 <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12" style="padding: 1%">

                     <p style="text-align: justify">'.$results["description"].'<span id="dots3">...</span><span id="more3" style="display: none">
                         کتابهای زیادی در شصت و سه درصد گذشته،
                         حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                     </span>
                         <a onclick="moreskill3()" id="myBtn3" style="cursor: pointer">بیشتر</a>

                     </p>';
                            echo '<div class="col-sm-12 col-lg-12 col-md-12 col-xs-12 special" style="margin-right: 0;padding: 0">';

                            $idpro=$results["fid"];
                            $sqlip="SELECT subcat.name as sname  FROM project,subcat,skill where  skill.subcat_id=subcat.id and project.id=skill.project_id and project.id=$idpro";
                            $queryp = mysqli_query($db->connect(),$sqlip);
                            while ( $resultsp = mysqli_fetch_assoc( $queryp ) ){
                                echo '<p>'.$resultsp["sname"].' </p>';}

                            echo ' <br><br></div> </div>
                 </div>
                    ';
                        }
                        ?>

                        <!--body-->
                        </div>

                        <!--openproject-->
                        <!--left-->
                        <!--right-->

     <div class="col-sm-5 col-md-3 col-lg-3 col-xs-5" style="padding: 0;background-color: #f8f8f8 ;  box-shadow: 0 0 4px 0 rgba(0,0,0,.08), 0 2px 4px 0 rgba(0,0,0,.12);">
     <!--acardeon-->

     <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
       <h3>جستجوی پروژه/ مسابقه
       </h3>
       <div class="panel-group" id="accordion">


        <div class="panel panel-default">
        <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><span class="caret pull-left"></span>
        </span>پروژه ها و/يا مسابقات
        </a>
        </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse" style="text-align: right">
                   <div class="panel-body">
         <table class="table">
                           <tr>
                               <td style="border-top: none;">
                                   <input type="radio" name="td1-1">&nbsp; فقط پروژه ها
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <input type="radio" name="td1-1">&nbsp; فقط مسابقات
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <input type="radio" name="td1-1">&nbsp;هم پروژه ها و هم مسابقات
                               </td>
                           </tr>

                       </table>
                   </div>
               </div>
        </div>
        <div class="panel panel-default">
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

                                <table class="table" onclick="catput()" id="catinputx" style="display: none;margin-bottom: 0">
                                    <?php

                                    $sql = "SELECT * FROM cat";
                                    $query = mysqli_query($db->connect(), $sql);
                                    while ($results = mysqli_fetch_assoc($query)) {
                                        ?>

                                        <tr > <td><input type="checkbox" onclick="catput(<?php echo $results['id']; ?>)" value="<?php echo $results['id']; ?>">
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
                               $("#subinput").append(data['results11']);
                               console.log('datas',data);

                           }
                       });
                   }
               }


           </script>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><span class="caret pull-left"></span>
                        </span>زیر دسته بندی ها</a>
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse" style="text-align: right">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td  style="border-top: none;">
                                <input type="checkbox" name="td1-2" id="check11" onclick="myfunction11()">&nbsp;همه زیر دسته بندی ها
                            </td>
                        </tr>
                        <tr id="subinput">

                        </tr>


                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><span class="caret pull-left"></span>
                        </span>نوع پروژه/مسابقه (فوری، ويژه، برجسته، استخدامی و ...)
                    </a>
                </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse" style="text-align: right">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td style="border-top: none;">
                                <input type="checkbox" name="td1-2">&nbsp;فرقی ندارد

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;فوری
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;برجسته
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;ويژه

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;محرمانه

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;محرمانه با قرارداد عدم افشا

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;ستاره دار

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;شرکتی

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;استخدامی

                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5"><span class="caret pull-left"></span>
                        </span>مدت زمان مورد نياز انجام پروژه/مسابقه
                    </a>
                </h4>
            </div>
            <div id="collapse5" class="panel-collapse collapse" style="text-align: right">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td style="border-top: none;">
                                <input type="checkbox" name="td1-2">&nbsp;فرقی ندارد
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;چند ساعت تا چند روز


                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;چند هفته

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;چند ماه

                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse6"><span class="caret pull-left"></span>
                        </span>نحوه کار با کارفرما (ساعتی و/يا مقطوع)
                    </a>
                </h4>
            </div>
            <div id="collapse6" class="panel-collapse collapse" style="text-align: right">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td style="border-top: none;">
                                <input type="checkbox" name="td1-2">&nbsp;فرقی ندارد
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;ساعتی
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;مقطوع
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse7"><span class="caret pull-left"></span>
                        </span>ميزان ساعات کار در هفته (مخصوص پروژه های ساعتی)
                    </a>
                </h4>
            </div>
            <div id="collapse7" class="panel-collapse collapse" style="text-align: right">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td style="border-top: none;">
                                <input type="checkbox" name="td1-2">&nbsp;توافقی
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;کمتر از 10 ساعت
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;بين 10 تا 20 ساعت
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;بين 20 تا 30 ساعت

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;بين 30 تا 40 ساعت

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;بيش از 40 ساعت

                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse8"><span class="caret pull-left"></span>
                        </span>تناسب با تبحر فريلنسر
                    </a>
                </h4>
            </div>
            <div id="collapse8" class="panel-collapse collapse" style="text-align: right">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td style="border-top: none;">
                                <input type="checkbox" name="td1-2">&nbsp;فرقی ندارد
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;فريلنسر حداقل تک ستاره باشد
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;فريلنسر حداقل دو ستاره باشد
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;فريلنسر حداقل سه ستاره باشد
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;فريلنسر حداقل چهار ستاره باشد
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;فريلنسر پنج ستاره باشد
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse9"><span class="caret pull-left"></span>
                        </span>سابقه برون سپاری کارفرما
                    </a>
                </h4>
            </div>
            <div id="collapse9" class="panel-collapse collapse" style="text-align: right">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td style="border-top: none;">
                                <input type="checkbox" name="td1-2">&nbsp;فرقی ندارد

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;تا حالا برون سپاری در زيگورات نداشته

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;1 تا 5 برون سپاری در زيگورات داشته
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;6 تا 10 برون سپاری در زيگورات داشته

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;بيشتر از 10 برون سپاری در زيگورات داشته

                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse10"><span class="caret pull-left"></span>
                        </span>ميزان محبوبيت کارفرما از نظر فريلنسرها
                    </a>
                </h4>
            </div>
            <div id="collapse10" class="panel-collapse collapse" style="text-align: right">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td style="border-top: none;">
                                <input type="checkbox" name="td1-2">&nbsp;فرقی نمی کند
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;فقط 5 ستاره
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;4 ستاره به بالا (4 و 5 ستاره)
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;سه ستاره به بالا (3 و 4 و 5 ستاره)
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
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
                                <input type="checkbox" name="td1-2">&nbsp;نيازی نيست
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="td1-2">&nbsp;انگلیسی
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


     <!--acardeon-->

    </div>

                        <!--right-->

                    </div>
                    <div class="tab-pane fade" id="profile">
                        <p class="text-center">

                     <div   id="timer" class="col-md-6 col-xs-12 col-lg-6 col-sm-12 timdiv" style="direction: ltr;line-height: 2;margin-top: 2%;margin-bottom: 2%;text-align: center;">

                           <div>
                          <div class="col-xs-3 col-md-3 col-sm-3 col-lg-3" style="text-align: center;width: 10%;margin-right: 3px" id="days"></div>
                          <div class="col-xs-3 col-md-3 col-sm-3 col-lg-3"  style="text-align: center;margin-right: 3px;width: 10%"  id="hours"></div>
                          <div  class="col-xs-3 col-md-3 col-sm-3 col-lg-3" style="text-align: center;margin-right: 3px;width: 10%"  id="minutes"></div>
                          <div  class="col-xs-3 col-md-3 col-sm-3 col-lg-3"  style="text-align: center;margin-right: 3px;width: 10%" id="seconds"></div>
                           </div>
                     </div>


                        </p>
                    </div>
                    <div class="tab-pane fade" id="contact">
                        <p class="text-center">
erujzsrtfggggggggggggggggggggggggggggggggggggggggggggggggggg

                    </p>
                    </div>


                </div>
            </div>
        </div>

        <!--tab-->


    </div>
    <!--radio1-->
    <!--radio2-->
    <label  class="Radio-label containe" style="margin-top: 2%" >پروژه ها و مسابقات  تکميل شده
        <input id="month" onclick="tariffp()" type="radio" name="tariffs" value="month" class="Radio-input"  >

        <span class="checkmark"></span></label>

    <div class="col-sm-12 col-lg-12 col-xs-12 col-sm-12" id="radio1" style="display: none;direction: rtl;text-align: center">


        <div class="hidden-sm col-md-6 hidden-xs col-lg-6" style="padding: 0;margin-top: 2%;margin-bottom: 2%;direction: ltr;width: 66%">
                                           <div id="DateCountdown" data-date=""style=";width: 500px; height: 125px; padding: 0px; box-sizing: border-box; ">

                                         </div>
                            </div>




    </div>
    <!--radio2-->

</div>

<!--left-->



<!--left-->
<!--main-->
<!--footer-->
<?php
echo file_get_contents("inc/footerr.php")
?>
<!--footer-->

<script type="text/javascript" src="TimeCircles-master/inc/TimeCircles.js"></script>


<script type="text/javascript" src="TimeCircles-master/jstimer.js"></script>


</body>
<!-- JavaScript includes -->
<script src="assets/countdown/jquery.countdown.js"></script>

</html>