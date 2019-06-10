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

</head>
<body>

<!--header-->
<div class="col-lg-12 col-md-12 row" style="background-color: white;margin-left: 0;z-index: 1">

    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" style="text-align: center;margin-top: 2%;margin-bottom: 2%" >

        <ul class="topmenu">
            <a href="Project.php">
                <li>
                    <button href="Project.php" class="btn btn-success" style=";background-color: #009900">تعریف پروژه</button>
                </li>
            </a>
            <a href="login.php"><li>ورود/ثبت نام </li></a>
            <a href="Tariffs.php"><li>تعرفه ها</li></a>
            <a href="rules.php"><li>قوانین</li></a>
            <a href="howwork.php"><li>روش کار</li></a>
        </ul>
    </div>
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" style="text-align: center;margin-top: 2%;margin-bottom: 2%">
        <div class="dropdown1" style="width: 100%">
            <i class="fas fa-search" style="margin-top: 3%;cursor: pointer;font-size: 23px;color: #838b75;margin: 2%;float: right"></i>
            <input type="search" style="width: 80%;text-align: center;" placeholder="جستجوی پروژه ها و متخصصین" id="myInput" onkeyup="filterFunction()">
            <i class="fas fa-sort-down " style="cursor: pointer;color: #838b75;margin: 2%;font-size: 23px;float: left" onclick="myFunction()"></i>
            <div id="myDropdown" class="dropdown-content1" style="width: 100%">

                <a href="#about">About</a>
                <a href="#base">Base</a>
                <a href="#blog">Blog</a>
                <a href="#contact">Contact</a>
                <a href="#custom">Custom</a>
                <a href="#support">Support</a>
                <a href="#tools">Tools</a>
            </div>
        </div>

    </div>
</div>
<!--header-->
<!--mainmenu-->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header navbar-right" >
            <button style="float: left" type="button"  class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand navbar-right navlogo"  style="margin-right: 8%;float: right" href="index.php" >
                <img src="img/logo2.png" style="margin-top: -15px;background-color: white"></a>

        </div>

        <div class="collapse navbar-collapse navbar-right" id="myNavbar">
            <ul class="nav navbar-nav" style="float: right;">

                <li ><a href="#">کسب در آمد</a></li>

                <li><a href="BuySell.php">خرید و فروش</a></li>
                <li><a href="projectmenu.php">پروژه ها</a></li>

                <!--megamenu-->
                <div class="dropdown2" style="float: right;">
                    <button style="direction: rtl" class="dropbtn2">دسته بندی
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content2">

                        <div class="row2">
                            <div class="column">

                                <a href="#">پزشکی</a>
                                <a href="#">استخدام</a>
                                <a href="#">نیروی کار بومی</a>
                                <a href="#">توریسم</a>
                                <a href="#">وکالت و حقوقی</a>
                                <a href="#">کپی رایت</a>
                                <a href="#">مقاله و پتنت</a>

                            </div>
                            <div class="column">

                                <a href="#">مد و لباس</a>
                                <a href="#">خودرو</a>
                                <a href="#">بیمه و مالیات</a>
                                <a href="#">ثبت شرکت</a>
                                <a href="#">تغذیه</a>
                                <a href="#">بازارهای مالی</a>
                                <a href="#">پول های مجازی</a>

                            </div>
                            <div class="column">

                                <a href="#">موسیقی</a>
                                <a href="#">ورزش</a>
                                <a href="#">آشپزی</a>
                                <a href="#">تدریس</a>
                                <a href="#">عیب یابی</a>
                                <a href="#">ورود اطلاعات</a>
                                <a href="#">شبکه</a>

                            </div>
                            <div class="column">

                                <a href="#">صنعت</a>
                                <a href="#">حسابداری</a>
                                <a href="#">تایپ متون</a>
                                <a href="#">تولید محتوا</a>
                                <a href="#">دستیار مجازی</a>
                                <a href="#">انیمیشن</a>
                                <a href="#">تبلیغات و بازاریابی</a>

                            </div>
                            <div class="column">

                                <a href="#">وب سایت</a>
                                <a href="#">اپلیکیشن های موبایل</a>
                                <a href="#">نرم افزارهای فنی</a>
                                <a href="#">رباتیک و هوش مصنوعی</a>
                                <a href="#">طراحی،گرافیک وهنر</a>
                                <a href="#">معماری و مهندسی</a>
                                <a href="#">صوتی و تصویری</a>

                            </div>
                            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center;margin-bottom: 2%">
                                <a href="allcat.php">همه دسته بندی ها</a>
                            </div>
                        </div>

                    </div>
                </div>


                <div style="padding:16px">

                </div>

                <!--megamenu-->
            </ul>

        </div>
    </div>
</nav>
<!--mainmenu-->
<!--main-->

<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="text-align: justify;font-size: 18px;direction: rtl">
    <div class="container">
    <p style="margin: 5%">
        <b>
            کاربر گرامی،
            <br>
            لطفاً قبل از ثبت پروژه، شرایط زیر را مطالعه و در صورت تمایل قبول نمایید:
        </b><br><br>
        - به ازای ثبت هر 5 پروژه یا مسابقه ایجاد شده توسط هر کاربری، هزینه ثبت پروژه های پنجم و ضرایب آن رایگان می باشند (پروژه های 5، 10، 11 و ...).
        <br><br>
        - درج هر گونه اطلاعات تماس بصورت عمومی و به همراه ثبت پروژه ممنوع است. اطلاعات تماس شما بصورت محرمانه در زیگورات مارکت باقی خواهد ماند.
        <br><br>
        - در مورد پروژه یا مسابقه ای که قصد برون سپاری آن را دارید تا آنجا که امکان دارد بصورت شفاف و کافی توصیج دهید تا مجریان بتوانند بر اساس توضیحات شما زمان انجام و قیمت مناسب پیشنهاد کنند. چنانچه لازم می دانید می توانید توضیحات تکمیلی خود را در قالب یک فایل نوشتاری، تصویری یا ویدیویی به همراه توضیحاتی که در سایت می دهید آپلود نمایید.
       <br><br>
        - این شرایط در حال حاضر قابلیت اجرایی دارند و زیگورات مارکت با تغییر یا جایگزین کردن آنها با شرایط جدید مختار است.
    </p>
    <input id="myCheck" type="checkbox" onclick="myFunction1()" style="margin-right: 5%">
    <label id="sh">شرایط بالا را خواندم و قبول دارم</label>
        <a href="#sh">
    <button href="Project.php" class="btn btn-success"  disabled="disabled" id="text" onclick="addproject()" style="float: left;background-color: #009900;margin-bottom: 5%">ادامه</button>
        </a>
    </div>
</div>
<form action="request/general/addproject.php" method="post">
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 " id="myproject" style="margin-top: 5%;margin-bottom: 5%;text-align: justify;font-size: 18px;direction: rtl;display: none;">
  <div class="container">
    <label>عنوان :</label>
      <br>
<input id="title" type="text" class="form-group" style="width: 70%;">
      <br>
      <label>دسته بندی : </label>
      <br>
      <select name="cat" id="cat" onchange="selectSubCat()" class="form-group" style="width: 70%">
          <option value="" selected="selected" disabled="disabled">انتخاب دسته بندی</option>
      <?php
      include "inc/inc.php";

      $sql = "SELECT * FROM cat";
      $query = mysqli_query($db->connect(),$sql);
      while ( $results = mysqli_fetch_assoc( $query ) ){?>

          <option value="<?php echo $results['id'];?>">
              <?php echo $results['name']; ?></option>
          <?php
      }?>

      </select>
      <script>
          function selectSubCat() {
              var catId = $("#cat").val();

              $.ajax({
                  url: "request/general/getsubcat.php",
                  data: {

                      catId: catId

                  },
                  dataType:'json',
                  type: "POST",

                  success: function(data) {
                      $("#subcat").html(data['result']);




                  }
              });


          }
      </script>



      <br>
      <label>زیر دسته بندی : </label>
      <br>
      <select id="subcat" name="subcat" class="form-group" style="width: 70%;">
          <option value="" selected="selected" disabled="disabled">ابتدا دسته بندی را انتخاب کنید</option>

      </select>

      <br>

      <label>
          توضیحات :
          <p >
              در مورد پروژه خود توضیح دهید. هر چقدر توضیحات شما کامل تر باشد، مجری (فریلنسر) قیمت و زمان نزدیک به واقعیت به شما پیشنهاد خواهد داد.
          </p>
      </label>

      <textarea name="description" id="description"  type="text" cols="50" rows="4" class="form-group" style="width: 70%"></textarea>
<br>


      <label style="margin-top: 3%">بودجه شما چقدر است؟</label>
      <br>
      <input placeholder="مبلغ مورد نظر را وارد کنید" id="fee" name="fee" class="form-group" style="width: 20%">

      <select name="type" id="type"  class="form-group" style="width: 50%">
          <option class="active">انتخاب بصورت دستی</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>

      </select>
      <br>
     <!-- <label>حداقل</label>
      <label style="margin-right: 24%">حداکثر</label>

      <br>
      <input type="text" style="width: 25%" class="form-group">

      <span class="input-group-lg" style="    background-color: #ccc;border: 2px solid #aeadad;margin-right: -6px;font-size: 17px;">ریال</span>

      <input type="text" style="width: 25%" class="form-group">

      <span class="input-group-lg" style="    background-color: #ccc;border: 2px solid #aeadad;margin-right: -6px;font-size: 17px;">ریال</span>-->
<br>
      <label>
          استان:
      </label>
      <br>
      <select onchange="selectCity()" id="province" name="province" class="form-group" style="width: 25%">
          <option value="" selected="selected" disabled="disabled" >استان مورد نظر را وارد کنید</option>
          <?php

          $sql1 = "SELECT * FROM province";
          $query1 = mysqli_query($db->connect(),$sql1);
          while ( $results1 = mysqli_fetch_assoc( $query1 ) ){?>

              <option value="<?php echo $results1['id'];?>">
                  <?php echo $results1['name']; ?></option>
              <?php
          }?>

      </select>

      <script>
          function selectCity() {
              var provinceId = $("#province").val();
              $.ajax({



                  url: "request/general/getcity.php",

                  data: {

                      provinceId: provinceId

                  },
                  dataType:'json',
                  type: "POST",

                  success: function(data) {
                      $("#city_id").html(data['result2']);




                  }
              });


          }
      </script>


      <label>
          شهر:
      </label>
      <select id="city_id" name="city_id" class="form-group" style="width: 25%">
          <option value="" selected disabled>شهر مورد نظر را وارد کنید</option>

      </select>
      <br><br>
      <label>بیشترین نتیجه را از پروژه خود بگیرید</label>
      <br><br>
      <table style="font-size: 15px;width: 90%" class="table">
          <tr class="table">
              <td><input type="checkbox" id="make" name="make" id="myCheck3" onclick="myFunction3()" style="margin-top: 137%"></td>
              <td></td>
              <td>
                  <h4>ایجاد پروژه</h4>

                  <p>
                      پروژه شما برای هزاران فریلنسر که مهارت انجام پروژه شما را دارند از طریق ایمیل ارسال میشود.
                  </p>
              </td>
              <td style="width: 15%">150،000 ریال</td>
          </tr>


        <!--  <tr class="table">
              <td><input type="checkbox" style="margin-top: 137%"></td>
              <td>
                  <div class="col-md-12"
                       style="line-height: 2;border: 2px solid #eea236;border-radius: 5px;
                       text-align: center;color: #6c6969;margin-top: 9%;height: 35px">برجسته</div>
              </td>
              <td>
                  <p>پروژه برجسته به دلیل برجسته بودن بیشتر مورد توجه فریلنسرهای حرفه ای قرار میگیرد و فریلنسرهای بیشتری در پروژه شرکت خواهند کرد.</p>
              </td>
              <td style="width: 15%">1،000،000 ریال</td>
          </tr>-->

          <tr class="table">
              <td><input  type="checkbox" name="bold" id="bold" onclick="boldfunction()" style="margin-top: 137%"></td>
              <td>
                  <div class="col-md-12"
                       style="line-height: 2;border: 2px solid #00aeef;
                       border-radius: 5px;text-align: center;
                       color: #6c6969;margin-top: 9%;height: 35px">
                      برجسته
                  </div>

              </td>
              <td>
                  <p>                      پروژه فوری نشانگر عجله کارفرما برای انجام هرچه سریع تر پروژه است و مورد توجه فریلنسرهای حرفه ای که علاقه دارند زودتر پروژه دریافت کنند قرار می گیرد</p>
              </td>
              <td style="width: 15%">300،000 ریال</td>
          </tr>


          <tr class="table">
              <td><input type="checkbox" name="quick" id="quick" onclick="quickfunction()" style="margin-top: 137%"></td>
              <td>
                  <div class="col-md-12"
                       style="line-height: 2;border: 2px solid #00aeef;
                       border-radius: 5px;text-align: center;
                       color: #6c6969;margin-top: 9%;height: 35px">
                      فوری
                  </div>
              </td>
              <td>
                  <p>                      با انتخاب این قسمت توضیحات پروژه شما فقط به کاربرانی که وارد سایت شده اند نمایش داده می شود و پروژه به موتور های جستجو معرفی نمی شود.</p>

              </td>
              <td style="width: 15%">300،000 ریال</td>
          </tr>


     <!--     <tr class="table">
              <td><input type="checkbox" style="margin-top: 137%"></td>
              <td>
                  <div class="col-md-12"
                       style="line-height: 2;border: 2px solid #eea236;
                       border-radius: 5px;text-align: center;
                       color: #6c6969;margin-top: 9%;height: 35px">
                      تمام وقت
                  </div>
              </td>
              <td>
                  <p>در پروژه تمام وقت از کارفرما و فریلنسر تا سقف 50,000,000ریال کمیسیون دریافت نمی شود. پروژه های بازاریابی و استخدامی و حضوری می بایست بصورت تمام وقت ایجاد شود.</p>
              </td>
              <td style="width: 15%">2،000،000 ریال</td>
          </tr>-->

         <!-- <tr class="table">
              <td><input type="checkbox" style="margin-top: 137%"></td>
              <td>
                  <div class="col-md-12"
                       style="line-height: 2;border: 2px solid #eea236;
                       border-radius: 5px;text-align: center;
                       color: #6c6969;margin-top: 9%;height: 35px">
                      ممتاز
                  </div>
              </td>
              <td>
                  <p>
                      رنگ پیش زمینه پروژه شما در فهرست پروژه ها متمایز از بقیه پروژه ها خواهد بود. این کار باعث می شود فریلنسرهای بیشتری به پروژه شما توجه کنند.
                  </p>
              </td>
              <td style="width: 15%">300،000 ریال</td>
          </tr>-->

          <tr class="table">
              <td></td>
              <td></td>
              <td>
                  <p style="float: left">مبلغ قابل پرداخت</p>
              </td>
              <td>
                   150،000 ریال
              </td>
          </tr>
      </table>
      <button type="button" class="btn btn-block" disabled="disabled" id="text3" style="font-size: 22px;width: 90%;background-color: #009900;color: white" onclick="fun3()">پرداخت و ایجاد پروژه</button>
      <script>
          function fun3() {
              var title = $("#title").val();
              var cat = $("#cat").val();
              var subcat = $("#subcat").val();
              var description = $("#description").val();
              var fee = $("#fee").val();
              var type = $("#type").val();
              var province = $("#province").val();
              var city_id = $("#city_id").val();
              var make = $("#make").val();
              // var bold = $("#bold").val();
              // var quick = $("#quick").val();
              var bold = document.getElementById("bold");
              if (bold.checked) {
                  bold.value = 1;
              } else {
                  bold.value = 0;
              }

              var quick = document.getElementById("quick");
              if(quick.checked){
                  quick.value = 1;
              }else{
                  quick.value = 0;
              }







              $.ajax({


                  url: 'request/general/addproject.php',

                  data: {

                      title: title,
                      cat:cat,
                      subcat:subcat,
                      description:description,
                      fee:fee,
                      type:type,
                      province:province,
                      city_id:city_id,
                      make:make,
                      bold:bold.value,
                      quick:quick.value,

                  },
                  dataType: 'json',
                  type: "POST",

                  success: function (data) {
                      alert("ok")

                  }
              });

          }
      </script>
</div>
</div>
</form>
<!--main-->
<!--footer-->
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="background-color: #616161;font-size: 20px;color: white;direction: rtl">


    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6" style="margin-top: 4%">
        <ul style="list-style-type: none" >
            <img src="img/sibapp.png" style="margin-bottom:10%">
            <br>
            <img src="img/cafebazar.png">
        </ul>
    </div>
    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6" style="margin-top: 4%">
        <ul style="list-style-type: none" class="ulfooter">
            <li>کسب درآمد</li>
            <li>قوانین</li>
            <li>تماس با ما</li>
        </ul>
    </div>
    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6" style="margin-top: 4%">
        <ul style="list-style-type: none" class="ulfooter">
            <li>پروژه ها </li>
            <li>متخصصین</li>
            <li>خرید و فروش آثار</li>
        </ul>
    </div>
    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6" style="margin-top: 4%">
        <ul style="list-style-type: none" class="ulfooter">
            <li>درباره ما</li>
            <li>روش کار</li>
            <li>تعرفه ها </li>
        </ul>
    </div>

    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <p style="color: white;border-top: 1px solid white;margin-top: 4%;text-align: center;font-size: 12px;padding: 1%;">
            ©
            زیگورات مارکت - هر گونه کپی برداری از ظاهر سایت ممنوع می باشد و پیگرد قانونی دارد
        </p>
    </div>

    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="text-align: center;font-size: 25px;border-radius: 10%">
        <a style="color: white" href="#"><i class="fab fa-facebook"></i></a>
        <a style="color:white " href="#"><i class="fab fa-twitter-square"></i></a>
        <a style="color: white" href="#"><i class="fab fa-google-plus-square"></i></a>
        <a style="color: white" href="#"><i class="fab fa-pinterest-square"></i></a>

    </div>


</div>
<!--footer-->
</div>

</body>
</html>