<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>زیگورات</title>
    <script src="js/jq.js"></script>
    <script src="js/js.js"></script>
    <script src="js/myjs.js"></script>
<!--    <script src="js/jqrange.js"></script>-->
<!--    <script src="js/jqrangemin.js"></script>-->

    <script src="js/dropdowntopmenu.js"></script>
    <link href="css/slide2.css" rel="stylesheet">
    <script src="js/slide2.js"></script>
<!--    <link rel="stylesheet" href="css/cssrange.css">-->
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

    <script>
        $(document).ready(function (e) {
        });
    </script>

</head>

<body>
<div style="overflow: hidden">
    <!--header-->
    <?php include "inc/headd.php"; ?>
    <!--header-->
<!--main-->

<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" onclick="faidoutsearch()" id="faidoutsearch" style="background: #f2f2f2;direction: rtl;">

<!--    <h3 style="color: #00aeef;direction: rtl;margin: 2%">-->
<!--        وب دیزاین (Web Design)-->
<!--    </h3>-->

    <!--div1-->
    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" style="margin: 2%;padding: 4%;">

        <!--left-->
        <div class="col-sm-7 col-md-9 col-lg-9 col-xs-7">

        <?php

            $sql = "SELECT img_address,freelancer.username as username,skill.id as fid,freelancer.description as description,COUNT(stars),COUNT(opinion.comment) as cnumber,COUNT(choise_freelancer.suggestion_id) as pnumber,subcat.name as subcatname from gallery,freelancer,rate,opinion,skill,cat,subcat,suggestion,choise_freelancer,project WHERE gallery.freelancer_id = freelancer.id and rate.freelancer_id = freelancer.id  and opinion.freelancer_id = freelancer.id and skill.freelancer_id = freelancer.id and skill.subcat_id = subcat.id and subcat.cat_id = cat.id and suggestion.freelancer_id = freelancer.id and suggestion.id = choise_freelancer.suggestion_id group by freelancer.id";
            $query = mysqli_query($db->connect(),$sql);
            while ( $results= mysqli_fetch_assoc( $query ) ){
                echo '<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" style=" background: white ;  box-shadow: 0 0 4px 0 rgba(0,0,0,.08), 0 2px 4px 0 rgba(0,0,0,.12);margin-bottom: 1%" >

               <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="col-sm-7 col-md-10 col-lg-10 col-xs-7">
                <a href="profile.php" style="color: #1b1b1b">
                 <h3 >'.$results["username"].' &nbsp; 
                 <img data-toggle="tooltip"  title="عضو طلایی" src="img/Gold_membership.png"  >
                 </h3>
                 </a>
                <p style="list-style-type: circle">'.$results["description"].'</p>
                </div>
                <div class="col-sm-5 col-md-2 col-lg-2 col-xs-5" style="margin-top: 3%"></div>
                  <img src="img/img_profile/'.$results["img_address"].'" >
               
                  </div>
               <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12" style="padding: 0;font-size: 14px;text-align: center">
               <p data-toggle="tooltip" title="درآمد تا الان در زيگورات">
               <span style="color: #00b050">xxxxx</span>پروژه تکمیل شده
               </p>
               </div>
               <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12" style="padding: 0;font-size: 14px;text-align: center">
               <p>
               <span style="color: #00b050">'.$results["pnumber"].'</span>پروژه تکمیل شده
               </p>
               </div>
               <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12" style="text-align: center;font-size: 14px;padding: 0">
               <p><span style="color: #00b050">'.$results["cnumber"].'</span>نظر</p></div>
                
                 <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12" style="padding: 0">

                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                      <p style="background-color: orange;float: left;color: white;text-align: center;width: 25%;border-radius: 12%">4.1</p>
                    </div>
               
                </div>
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="margin-top: 2%" >
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" style="padding: 0;font-size: 14px;text-align: center ;">
               <p >درصد موفقيت در انجام پروژه ها: 
               <span style="color: #00b050">xxxxx</span>
               </p>
               </div><div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" style="padding: 0;font-size: 14px;text-align: center;;">
               <p >نرخ در ساعت: 
               <span style="color: #00b050">30k تومان</span>
               </p>
               </div>
               </div>
               
                <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12 special" style="margin-right: 0;padding: 0">';

                            $idpro=$results["fid"];
                            $sqlip="SELECT subcat.name as sname  FROM freelancer,subcat,skill where  skill.subcat_id=subcat.id and freelancer.id=skill.freelancer_id and freelancer.id=$idpro";
                            $queryp = mysqli_query($db->connect(),$sqlip);
                            while ( $resultsp = mysqli_fetch_assoc( $queryp ) ){

                               echo' <p>'.$resultsp["sname"].' </p>';

                                }
 echo ' <br><br></div></div>';

            }
            ?>

    </div>
        <!--left-->
        <!--right-->
        <div class="col-sm-5 col-md-3 col-lg-3 col-xs-5" style="padding: 0;background-color: #f8f8f8 ;  box-shadow: 0 0 4px 0 rgba(0,0,0,.08), 0 2px 4px 0 rgba(0,0,0,.12);">
        <!--acardeon-->
        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
                    <h3>جستجوی فريلنسر
                    </h3>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse13"><span class="caret pull-left"></span>
                                        </span>میزان موفقیت در پروژه ها
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse13" class="panel-collapse collapse" style="text-align: right">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td style="border-top: none;">
                                                <input type="radio" name="td1-1">&nbsp;هر ميزان موفقيت

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="td1-1">&nbsp;80% به بالا

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="td1-1">&nbsp;90% به بالا

                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse14"><span class="caret pull-left"></span>
                                        </span>دسته بندی موضوعی
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse14" class="panel-collapse collapse" style="text-align: right">
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
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse15"><span class="caret pull-left"></span>
                                        </span>زیر دسته بندی ها</a>
                                </h4>
                            </div>
                            <div id="collapse15" class="panel-collapse collapse" style="text-align: right">
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
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse16"><span class="caret pull-left"></span>
                                        </span>ميزان درآمد در زيگورات
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse16" class="panel-collapse collapse" style="text-align: right">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td style="border-top: none;">
                                                <input type="checkbox" name="td1-2">هر مبلغی


                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="td1-2">&nbsp;100.000 تومان تا 1 ميليون تومان

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="td1-2">بين 1 ميليون تومان تا 5 ميليون تومان
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="td1-2">&nbsp;بين 5 ميليون تومان تا 10 ميليون تومان
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="td1-2">&nbsp;بين 10 ميليون تومان تا 20 ميليون تومان
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="td1-2">&nbsp;بين 20 ميليون تومان تا 30 ميليون تومان
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="td1-2">&nbsp;بين 30 ميليون تومان تا 40 ميليون تومان
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="td1-2">&nbsp;بين 40 ميليون تومان تا 50 ميليون تومان
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="td1-2">&nbsp;بين 50 ميليون تومان تا 60 ميليون تومان
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="td1-2">&nbsp;بيشتر از 60 ميليون تومان
                                            </td>
                                        </tr>



                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse17"><span class="caret pull-left"></span>
                                        </span>ميزان محبوبيت فريلنسر از نظر کارفرماها
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse17" class="panel-collapse collapse" style="text-align: right">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td style="border-top: none;">
                                                <input type="checkbox" name="td1-2">&nbsp;فرقی نمی کند
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="td1-2">&nbsp;فقط 5 ستاره ها
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="td1-2">&nbsp;4 ستاره به بالا (4 و 5 ستاره ها)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="td1-2">&nbsp;سه ستاره به بالا (3 و 4 و 5 ستاره ها)
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse18"><span class="caret pull-left"></span>
                                        </span>ميزان ساعت کارکرد در زيگورات (برای پروژه های ساعتی)
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse18" class="panel-collapse collapse" style="text-align: right">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td style="border-top: none;">
                                                <input type="checkbox" name="td1-2">&nbsp;هر ميزان کارکردی

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="td1-2">&nbsp;1 ساعت تا 100 ساعت

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="td1-2">&nbsp;100 ساعت تا 1000 ساعت

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="td1-2">&nbsp;1000 ساعت به بالا

                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse19"><span class="caret pull-left"></span>
                                        </span>نوع فريلنسر (ساعتی، قيمت مقطوع، شرکت ها و آژانس ها)
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse19" class="panel-collapse collapse" style="text-align: right">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td style="border-top: none;">
                                                <input type="checkbox" name="td1-2">&nbsp;هر فريلنسری
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="td1-2">فريلنسر ساعتی

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="td1-2">فريلنسری که پروژه قيمت مقطوع کار می کند

                                            </td>
                                        </tr>
                                        <tr  style="text-align: justify" >
                                            <td>
                                                <input type="checkbox" name="td1-2" >&nbsp;شرکت ها و آژانس های فريلنسری (کار در يک شرکت انجام خواهد شد). اين آپشن برای پروژه های خيلی بزرگ که يک نفر فريلنسر به لحاظ زمانی از عهده تمامی کار پروژه  برنمي آيد يا موقعی که پروژه در مراحل پيشرفت خود به تخصص های مختلفی نياز دارد مناسب است.
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse20"><span class="caret pull-left"></span>
                                        </span>سطح تبحر (بر اساس خود اظهاری فريلنسر)
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse20" class="panel-collapse collapse" style="text-align: right">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td style="border-top: none;">
                                                <input type="checkbox" name="td1-2">فرقی ندارد

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
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse21"><span class="caret pull-left"></span>
                                        </span>زبان خارجی
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse21" class="panel-collapse collapse" style="text-align: right">
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
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse22"><span class="caret pull-left"></span>
                                        </span>سطح زبان خارجی
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse22" class="panel-collapse collapse" style="text-align: right">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td style="border-top: none;">
                                                <input type="checkbox" name="td1-2">&nbsp;هر سطحی

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="td1-2">&nbsp;خواندن و نوشتن عالی ولی مکالمه روان نيست

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="td1-2">&nbsp;خواندن و نوشتن عالی و مکالمه کاملاً روان
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

    <!--div1-->

</div>
</div>
<!--main-->
    <!--footer-->
    <?php
    echo file_get_contents("inc/footerr.php")
    ?>
    <!--footer-->
</div>

<!--tabsearch-->
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

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
<!--tabsearch-->

</body>
<script>

    $('#myInput').on("keyup keydown keypress paste",function (e) {
        var name = $('#myInput').val();

        if(name===""){
            $('#display').hide();
            $("#London").html("");
            $("#Paris").html("");

            return;
        }
        $.ajax({
            url: 'request/general/search.php',
            data: {
                name:name
            },
            dataType: 'json',
            type: 'POST',
            success: function (data) {
                $("#display").show();

                $("#London").html(data["username"]);
                $("#Paris").html(data["title"]);
                // $("#display").append(data["username"]);


            }
        });

    });

</script>
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
<!--tabsearch-->
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

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
<!--tabsearch-->




<script>

    $('#myInput').on("keyup keydown keypress paste",function (e) {
        var name = $('#myInput').val();

        if(name===""){
            $('#display').hide();
            $("#London").html("");
            $("#Paris").html("");

            return;
        }
        $.ajax({
            url: 'request/general/search.php',
            data: {
                name:name
            },
            dataType: 'json',
            type: 'POST',
            success: function (data) {
                $("#display").show();

                $("#London").html(data["username"]);
                $("#Paris").html(data["title"]);
                // $("#display").append(data["username"]);


            }
        });

    });

</script>
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