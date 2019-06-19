<link rel="stylesheet" href="css/animate.css">
<!------ Include the above in your HEAD tag ---------->

<!--header-->
<div class="col-lg-12 col-md-12 row" style="background-color: white;margin-left: 0;z-index: 2">
    <div class="col-lg-2 col-md-2 hidden-sm hidden-xs " onclick="brandheader()" style="float: right;margin-top:2%;margin-bottom: 1%;padding: 0">
        <img src="img/Logoart.png">
    </div>
    <div class="hidden-md hidden-lg col-sm-12 col-xs-12 " onclick="brandheader()" style="text-align: center;margin-top:2%;margin-bottom: 1%;padding: 0">
        <img src="img/Logoart.png">
    </div>

    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" onclick="ulheader()" id="ulheader" style="padding: 0;text-align: center;margin-top: 2%;margin-bottom: 2%" >

        <ul class="topmenu">
            <a href="Project.php">
                <li style="margin-left: 0">
                <button href="Project.php" class="btn btn-success" style=";background-color: #009900">تعریف پروژه</button>
                </li>
            </a>



<!--            <a href="../request/web/exituser.php" id="signout" name="sign-out"  >-->
<!--                <li>خروج</li>-->
<!--            </a>-->



            <?php
            include "inc.php";
            session_start();

            if( isset($_SESSION["login"]) && $_SESSION["login"]==true )
            {
                echo '<a  id="username" name="username" href="http://127.0.0.1/ziggurat/request/web/exituser.php" >
                <li >خروج</li>
            </a>';
            }else{
                echo ' <a href="sign-in.php" id="username" name="username"  >
                <li>ورود/ثبت نام</li>
                
            </a>';
            }

            ?>



           <a href="Tariffs.php"><li>تعرفه ها</li></a>
            <a href="rules.php"><li>قوانین</li></a>

        </ul>
    </div>

    <!--search-->
    <div class="col-lg-4 col-md-4 hidden-sm hidden-xs" style="margin-top:2%;font-size: 24px;padding: 0;margin-bottom: 2%">
        <i class="fas fa-search" onclick="showsearch()" id="showsearchi" style="
    margin-top: 4%;
    color: #62565b;"></i>
        <div id="showsearch"  style=";display: none">
            <div id="showsearch" class="dropdown1" style="margin-top: 2%;width: 100%;border-radius: 6px">
                <a href="specialists.php">
                    <i class="fas fa-search iconlogin" style="    font-size: 28px;
    margin-top: 0%;
    color: #ffffff;
    background-color: #2196F3;
    float: left;
    padding: 1%;" onclick="myFunction()"></i>
                </a>
                <input type="search" class="form-control placeholder1"   placeholder="جستجوی پروژه ها و متخصصین" id="myInput" onkeypress="searchslil()" onkeyup="filterFunction()"
                       style="width: 89%;direction: rtl;background: #2196F3">

<!--            <i class="fas  fa-sort-down" style="margin-top: 2%;cursor: pointer;font-size: 18px;color: #ffffff;margin: 2%;float: right" onclick="sortdown()"></i>-->
            <div id="display" style="display: none;position: absolute;width: 100%">

                <!--tap-->
                <div class="tab" >
                    <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">متخصصین</button>
                    <button class="tablinks" onclick="openCity(event, 'Paris')">پروژه ها</button>

                </div>

                <div id="London" class="tabcontent" style="font-size: 14px">
                    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                    <br><br> <h3>متخصصین</h3>



                </div>

                <div id="Paris" class="tabcontent" style="font-size: 14px">
                    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                    <br><br> <h3>پروژه ها</h3>

                </div>
                <!--tap-->
            </div>


            </div></div>
    </div>
    <div class="hidden-md hidden-lg col-sm-10 col-xs-10" style="margin-top:2%;font-size: 24px;padding: 0;margin-bottom: 2%;text-align: center">
        <i class="fas fa-search" onclick="showsearch()" id="showsearchi1" style="
    margin-top: 4%;
    color: #62565b;"></i>
        <div id="showsearch1"  style=";display: none">
            <div id="showsearch1" class="dropdown1" style="margin-top: 2%;width: 100%;border-radius: 6px">
                <a href="specialists.php">
                    <i class="fas fa-search iconlogin" style="    font-size: 28px;
    margin-top: 0%;
    color: #ffffff;
    background-color: #2196F3;
    float: left;
    padding: 1%;" onclick="myFunction()"></i>
                </a>
                <input type="search" class="form-control "  placeholder="جستجوی پروژه ها و متخصصین" id="myInput1" onkeypress="searchslil()" onkeyup="filterFunction()"
                       style="width: 89%;direction: rtl;">
                <!--            <i class="fas  fa-sort-down" style="margin-top: 2%;cursor: pointer;font-size: 18px;color: #ffffff;margin: 2%;float: right" onclick="sortdown()"></i>-->
                <div id="display1" style="display: none;position: absolute;width: 100%">
                    <!--tap-->
                    <div class="tab" >
                        <button class="tablinks" onclick="openCity(event, 'London1')" id="defaultOpen1">متخصصین</button>
                        <button class="tablinks" onclick="openCity(event, 'Paris1')">پروژه ها</button>
                    </div>
                    <div id="London1" class="tabcontent" style="font-size: 14px">
                        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                        <br><br> <h3>متخصصین</h3>
                    </div>
                    <div id="Paris1" class="tabcontent" style="font-size: 14px">
                        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                        <br><br> <h3>پروژه ها</h3>
                    </div>
                    <!--tap-->
                </div>
            </div></div>
    </div>
    <br>
    <script>
        function showsearch() {
            var showsearch=document.getElementById("showsearch");
            var showsearch1=document.getElementById("showsearch1");
            var showsearchi=document.getElementById("showsearchi");
            var showsearchi1=document.getElementById("showsearchi1");

            document.getElementById("showsearch").style.display="block";
            document.getElementById("showsearch1").style.display="block";
            document.getElementById("showsearchi").style.display="none";
            document.getElementById("showsearchi1").style.display="none";

        }
        function hidesearch() {
            var hidesearch=document.getElementById("hidesearch");
            var hidesearch1=document.getElementById("hidesearch1");
            var hidesearchi=document.getElementById("hidesearchi");
            var hidesearchi1=document.getElementById("hidesearchi1");

            document.getElementById("showsearch").style.display="none";
            document.getElementById("showsearchi").style.display="block";
            document.getElementById("display").style.display="none";
            document.getElementById("showsearch1").style.display="none";
            document.getElementById("showsearchi1").style.display="block";
            document.getElementById("display1").style.display="none";


        }
        function faidoutsearch() {
            var faidoutsearch=document.getElementById("showsearchi");
            var sear=document.getElementById("showsearch");

            document.getElementById("showsearch").style.display="none";
            document.getElementById("showsearchi").style.display="block";
            document.getElementById("display").style.display="none";
            document.getElementById("showsearch1").style.display="none";
            document.getElementById("showsearchi1").style.display="block";
            document.getElementById("display1").style.display="none";



        }
        function brandheader() {
            document.getElementById("showsearch").style.display="none";
            document.getElementById("showsearchi").style.display="block";
            document.getElementById("display").style.display="none";
 document.getElementById("showsearch1").style.display="none";
            document.getElementById("showsearchi1").style.display="block";
            document.getElementById("display1").style.display="none";



        }
        function ulheader() {
            document.getElementById("showsearch").style.display="none";
            document.getElementById("showsearchi").style.display="block";
            document.getElementById("display").style.display="none";
            document.getElementById("showsearch1").style.display="none";
            document.getElementById("showsearchi1").style.display="block";
            document.getElementById("display1").style.display="none";

        }


    </script>


    </div>
<!--header-->
<!--mainmenu-->
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"  onclick="faidoutsearch()" id="faidoutsearch" style="padding: 0;z-index: 1">
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
            <img src="img/buyimage.png" style="margin-left: 1%;display: none">



        <div class="navbar-header navbar-right" >

            <button style="float: left" type="button"  class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand navbar-right navlogo"  style="    margin-right: 44%;
    margin-left: 43px;" href="index.php" >
                <img src="img/home.png" style="margin-top: -7px;">
            </a>

        </div>

        <div class="collapse navbar-collapse navbar-right" id="myNavbar">

            <ul class="nav navbar-nav" style="float: right;">
                <li><a href="howwork.php">روش کار</a></li>
                <li ><a href="#income">کسب در آمد</a></li>

                <li><a href="BuySell.php">خرید و فروش</a></li>
                <li><a href="projectmenu.php">پروژه ها</a></li>

                <!--megamenu-->
                <div class="dropdown2" style="float: right;z-index: 100;" id="flash">

                    <button style="direction: rtl" class="dropbtn2" >
                        <span >دسته بندی
                              &nbsp;&nbsp;
                        <i style="display: block;float: left;font-size: 18px;margin-top: 3%" class="fa fa-caret-down"></i>
                        <i style="display: none;float: left;font-size: 18px;margin-top: 3%" class="fa fa-caret-up"></i>
                        </span>
                    </button>
                    <div class="dropdown-content2" style="position: absolute" >
                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align: center;margin-bottom: 2%;margin-top: 2%">
                            <a href="allcat.php">همه دسته بندی ها</a>

                        </div>
                            <?php

                            $sql3 = "SELECT name from cat limit 16" ;
                            $query3 = mysqli_query($db->connect(),$sql3);
                            while ( $results3 = mysqli_fetch_assoc( $query3 ) ){
                                echo '<div class="col-md-3 col-lg-3 col-xs-6 col-sm-6" >';
                                echo '<div class="column" style="padding: 0;direction: rtl;float: right;">';
                                echo '<a href="#">'.$results3["name"].'</a>';
                                echo ' </div>';
                                echo ' </div>';
                            }
                            ?>




                    </div>
                </div>




                <!--megamenu-->
            </ul>

        </div>
    </div>
</nav>
</div>
<!--mainmenu-->
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

    $('#myInput').on("keyup keydown keypress paste delete",function (e) {
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

    $('#myInput1').on("keyup keydown keypress paste delete",function (e) {
        var name = $('#myInput1').val();

        if(name===""){
            $('#display1').hide();
            $("#London1").html("");
            $("#Paris1").html("");

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
                $("#display1").show();

                $("#London1").html(data["username"]);
                $("#Paris1").html(data["title"]);
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

