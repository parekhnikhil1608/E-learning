<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="book_img.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Home</title>

    <?php
    session_start();
    if($_SESSION["user_name"]==true){

    }else{
        echo '<script>
        window.location.href = "http://localhost/Education/Vinit_Patel/DIET/BE/login1.html";
        </script>';
    }
    

    ?>
    <style>

    .wp-flate{
        position: fixed;
        bottom: 40px;
        right: 50px;
    }   

    .footer-clean {
    padding:50px 0;
    background-color: #4B4C4D;
    color:#fff;
    }

    .footer-clean h3 {
    margin-top:0;
    margin-bottom:12px;
    font-weight:bold;
    font-size:16px;
    }

    .footer-clean ul {
    padding:0;
    list-style:none;
    line-height:1.6;
    font-size:14px;
    margin-bottom:0;
    }

    .footer-clean ul a {
    color:inherit;
    text-decoration:none;
    opacity:0.8;
    }

    .footer-clean ul a:hover {
    opacity:1;
    }

    .footer-clean .item.social {
    text-align:right;
    }

    @media (max-width:767px) {
    .footer-clean .item {
        text-align:center;
        padding-bottom:20px;
    }
    }

    @media (max-width: 768px) {
    .footer-clean .item.social {
        text-align:center;
    }
    }

    .footer-clean .item.social > a {
    font-size:24px;
    width:40px;
    height:40px;
    line-height:40px;
    display:inline-block;
    text-align:center;
    border-radius:50%;
    border:1px solid #ccc;
    margin-left:10px;
    margin-top:22px;
    color:inherit;
    opacity:0.75;
    }

    .footer-clean .item.social > a:hover {
    opacity:0.9;
    }

    @media (max-width:991px) {
    .footer-clean .item.social > a {
        margin-top:40px;
    }
    }

    @media (max-width:767px) {
    .footer-clean .item.social > a {
        margin-top:10px;
    }
    }

    .footer-clean .copyright {
    margin-top:14px;
    margin-bottom:0;
    font-size:13px;
    opacity:0.6;
    }

        .nav_img {
            height: 30px;
            margin-right: 10px;
        }

      .g-bg-bluegray--active.active {
        background-color: lightgrey !important;
    }
   
     ul li a{
         color: black;
     }
    
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Offcanvas template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/offcanvas/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">

    <style>
        .home1{
            background-image: "book_10.jpg";
        }
    </style>
</head>

<body class="bg-light">


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img class="nav_img" src="book_img.png" alt="error">
        <a class="navbar-brand" href="#">Education</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home </a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Video Link 
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://youtube.com/playlist?list=PLBlnK6fEyqRgMCUAG0XRw78UA8qnv6jEx" title="Computer Network">CN</a>
                        <a class="dropdown-item" href="https://youtube.com/playlist?list=PLBlnK6fEyqRiVhbXDGLXDk_OQAeuVcp2O" title="Operating System">OS</a>
                        <a class="dropdown-item" href="https://youtube.com/playlist?list=PL9zFgBale5fvLZEn6ahrwDC2tRRipZQK0" title="Discrete Mathematics">DM</a>
                        <a class="dropdown-item" href="https://youtube.com/playlist?list=PLxCzCOWd7aiHMonh3G6QNKq53C6oNXGrX" title="Computer Organization And Architecture">COA</a>
                        <a class="dropdown-item" href="https://youtube.com/playlist?list=PLPjSqITyvDeV84Qiruw4xVWGQPTctrlhg" title="Principle Of Economics And Management">PEM</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Courses 
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://www.youtube.com/watch?v=zkAr7P1S-c8">Information and Communication Technology</a>
                        <a class="dropdown-item" href="https://skill-lync.com/electrical-engineering-courses">Electrical Engineering</a>
                        <a class="dropdown-item" href="https://skill-lync.com/civil-engineering-courses">Civil Engineering</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="http://localhost/Education/Vinit_Patel/DIET/BE/profile.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="http://localhost/Education/Vinit_Patel/DIET/BE/OUR_CONTACTS.html">Contact Us</a>
                </li>
                
            </ul>
           
        </div>
        <div class="text-end">
            <a class="btn btn-warning" href="http://localhost/Education/logout.php">Logout</a>
          </div>   
    </nav>

    <div class="home1 p-4 p-md-5 mb-4 text-white bg-dark rounded" >
        <div class="col-md-6 px-0" >
          <h1 class="display-4 fst-italic">Online study materials for students </h1>
          <!--<p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
          <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>-->
        </div>
      </div>

    <main role="main" class="container g-bg-gray-light-v4">
        <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded box-shadow">
            <ul class="nav nav-tabs" role="tablist">
                <!--top level tabs-->
                <li class="nav-item">
                    <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-font-weight-600 g-bg-white--active g-bg-pink--hover g-color-main--active g-color-white--hover g-brd-white--active g-brd-bluegray--hover g-brd-gray-light-v3 active"
                        href="#navTab_Sem_12" data-toggle="tab">
                        Sem-<b>1 &amp; 2</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-font-weight-600 g-bg-white--active g-bg-bluegray--hover g-color-main--active g-color-white--hover g-brd-white--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                        href="#navTab_Sem_3" data-toggle="tab">
                        Sem-<b>3</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-font-weight-600 g-bg-white--active g-bg-bluegray--hover g-color-main--active g-color-white--hover g-brd-white--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                        href="#navTab_Sem_4" data-toggle="tab">
                        Sem-<b>4</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-font-weight-600 g-bg-white--active g-bg-bluegray--hover g-color-main--active g-color-white--hover g-brd-white--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                        href="#navTab_Sem_5" data-toggle="tab">
                        Sem-<b>5</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-font-weight-600 g-bg-white--active g-bg-bluegray--hover g-color-main--active g-color-white--hover g-brd-white--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                        href="#navTab_Sem_6" data-toggle="tab">
                        Sem-<b>6</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-font-weight-600 g-bg-white--active g-bg-bluegray--hover g-color-main--active g-color-white--hover g-brd-white--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                        href="#navTab_Sem_7" data-toggle="tab">
                        Sem-<b>7</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-font-weight-600 g-bg-white--active g-bg-bluegray--hover g-color-main--active g-color-white--hover g-brd-white--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                        href="#navTab_Sem_8" data-toggle="tab">
                        Sem-<b>8</b>
                    </a>
                </li>
            </ul>
        </div>

        <div class="tab-content ">
            <!--Semester Wise Tab Content-->
            <div id="navTab_Sem_12" class="tab-pane active">
                <div class="g-pa-20 g-pt-15 g-bg- d-shadow-v1 g-rounded-5"
                    style="border-top-left-radius: 0 !important;">

                    <!--inner tab list-->
                    <ul class="nav nav-tabs" id="all_tabs">

                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 active"
                                href="#navTab_Subject_3110003" data-toggle="tab"
                                title="Programming for Problem Solving">
                                <b>3110003</b> - PPS
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_3110005" data-toggle="tab" title="Basic Electrical Engineering">
                                <b>3110005</b> - BEE
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_3110006" data-toggle="tab" title="Basic Mechanical Engineering">
                                <b>3110006</b> - BME
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_3110007" data-toggle="tab" title="Environmental Science">
                                <b>3110007</b> - ES
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_3110011" data-toggle="tab" title="Physics Group - I">
                                <b>3110011</b> - PHY1
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_3110013" data-toggle="tab"
                                title="Engineering Graphics &amp; Design">
                                <b>3110013</b> - EGD
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_3110014" data-toggle="tab" title="Mathematics-I">
                                <b>3110014</b> - MAT1
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_3110015" data-toggle="tab" title="Mathematics-II">
                                <b>3110015</b> - MAT2
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_3110016" data-toggle="tab" title="Mathematics-II">
                                <b>3110016</b> - Basics Electrical
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_3110018" data-toggle="tab" title="Mathematics-II">
                                <b>3110018</b> - PHY2
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_3110002" data-toggle="tab" title="Mathematics-II">
                                <b>3110002</b> - English
                            </a>
                        </li>

                    </ul>

                    <div class="tab-content">
                        <!--inner tab content-->
                        <div id="navTab_Subject_3110003" class="tab-pane g-pt-10 g-px-5 active">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Programming for
                                Problem Solving (3110003)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <h2
                                    class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-deeporange">
                                    <i class="fa fa-file-powerpoint-o"></i>&nbsp;
                                    Presentations
                                </h2>
                            </div>
                            <ul class="list-unstyled">
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                        title="GTU Programming for Problem Solving (3110003) Study Material | Unit-1 Introduction to Computer And Programming">
                                        <b>Unit-1</b> &nbsp;|&nbsp;
                                        Introduction to Computer And Programming
                                        <a href="./pps/unit-1.pdf" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                        
                                    </a>
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left">
                                        <b>Unit-2</b> &nbsp;|&nbsp;
                                        Fundamentals of C
                                        <a 
                                         title="GTU Programming for Problem Solving (3110003) Study Material | Unit-2 Fundamentals of C" 
                                        href="C:\Users\Lenovo\Desktop\ps\unit-2.pdf" download>
                                            <button class="btn"><i class="fa fa-download"></i> Download</button>
                                        </a>
                                    </a>
                                </li>
                                <li class="g-mb-10">
                                    <a href="file:///C:/Users/Lenovo/Desktop/ps/unit-2.pdf"
                                    class="btn  d-block d-md-inline-block text-left">
                                        <b>Unit-3</b> &nbsp;|&nbsp;
                                        Decision Making In C
                                        <a href="./pps/unit-2.pdf" download="Unit-3.1">
                                            <button class="btn"><i class="fa fa-download"></i> Download</button>
                                        </a>
                                    </a>
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left">
                                        <b>Unit-3</b> &nbsp;|&nbsp;
                                        Looping
                                        <a title="GTU Programming for Problem Solving (3110003) Study Material | Unit-3 Looping"
                                         href="./pps/unit-3.pptx" download="Unit-3.2">
                                            <button class="btn"><i class="fa fa-download"></i> Download</button>
                                        </a>
                                    </a>
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn d-block d-md-inline-block text-left">
                                        <b>Unit-4</b> &nbsp;|&nbsp;
                                        Arrays &amp; Strings
                                        <a title="GTU Programming for Problem Solving (3110003) Study Material | Unit-4 Arrays &amp; Strings"
                                         href="./pps/unit-4.pdf" download>
                                            <button class="btn"><i class="fa fa-download"></i> Download</button>
                                        </a>
                                    </a>
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left">
                                        <b>Unit-5</b> &nbsp;|&nbsp;
                                        Functions
                                        <a title="GTU Programming for Problem Solving (3110003) Study Material | Unit-5 Functions"
                                         href="./pps/unit-5.pdf" download>
                                            <button class="btn"><i class="fa fa-download"></i> Download</button>
                                        </a>
                                    </a>
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn d-block d-md-inline-block text-left">
                                        <b>Unit-6</b> &nbsp;|&nbsp;
                                        Recursion
                                        <a title="GTU Programming for Problem Solving (3110003) Study Material | Unit-6 Recursion"
                                         href="./pps/unit-6.pdf" download>
                                            <button class="btn"><i class="fa fa-download"></i> Download</button>
                                        </a>
                                    </a>
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn d-block d-md-inline-block text-left">
                                        <b>Unit-7</b> &nbsp;|&nbsp;
                                        Pointer
                                    </a>
                                    <a title="GTU Programming for Problem Solving (3110003) Study Material | Unit-7 Pointer"
                                         href="./pps/unit-7.pdf" download>
                                            <button class="btn"><i class="fa fa-download"></i> Download</button>
                                        </a>
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                        
                                        title="GTU Programming for Problem Solving (3110003) Study Material | Unit-8 Structure [Part-1]">
                                        <b>Unit-8</b> &nbsp;|&nbsp;
                                        Structure [Part-1]
                                    </a>
                                    <a href="./pps/unit-5.pdf" download="Unit-8.1"><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                        
                                        title="GTU Programming for Problem Solving (3110003) Study Material | Unit-8 Union [Part-2]">
                                        <b>Unit-8</b> &nbsp;|&nbsp;
                                        Union [Part-2]
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                        
                                        title="GTU Programming for Problem Solving (3110003) Study Material | Unit-9 Dynamic Memory Allocation">
                                        <b>Unit-9</b> &nbsp;|&nbsp;
                                        Dynamic Memory Allocation
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                       
                                        title="GTU Programming for Problem Solving (3110003) Study Material | Unit-10 File Management">
                                        <b>Unit-10</b> &nbsp;|&nbsp;
                                        File Management
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    
                                </li>
                            </ul>

                        </div>
                        <div id="navTab_Subject_3110005" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Basic Electrical
                                Engineering (3110005)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                            <ul class="list-unstyled">
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                       
                                        title="GTU Basic Electrical Engineering (3110005) Study Material | Unit-1 D.C. Circuits">
                                        <b>Unit-1</b> &nbsp;|&nbsp;
                                        D.C. Circuits
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                        
                                        title="GTU Basic Electrical Engineering (3110005) Study Material | Unit-2 A.C. Circuits">
                                        <b>Unit-2</b> &nbsp;|&nbsp;
                                        A.C. Circuits
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                   
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                       
                                        title="GTU Basic Electrical Engineering (3110005) Study Material | Unit-3 Transformers">
                                        <b>Unit-3</b> &nbsp;|&nbsp;
                                        Transformers
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                       
                                        title="GTU Basic Electrical Engineering (3110005) Study Material | Unit-4 Electrical Machines">
                                        <b>Unit-4</b> &nbsp;|&nbsp;
                                        Electrical Machines
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                        
                                        title="GTU Basic Electrical Engineering (3110005) Study Material | Unit-5 Electrical Installation">
                                        <b>Unit-5</b> &nbsp;|&nbsp;
                                        Electrical Installation
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    
                                </li>
                            </ul>

                        </div>
                        <div id="navTab_Subject_3110006" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Basic Mechanical
                                Engineering (3110006)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                    e-Notes
                                </h2>
                            </div>
                    
                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-deeporange">
                                                    <i class="fa fa-question-circle-o"></i>&nbsp;
                                                    GTU Paper Analysis
                                                </h2> -->
                            </div>
                            <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                  
                                                                   title="GTU Basic Mechanical Engineering (3110006) Study Material | All Basic Mechanical Engineering (3110006)"
                                                                   >
                                                                    <b>All Units</b> &nbsp;|&nbsp;
                                                                    Basic Mechanical Engineering (3110006)
                                                                </a>
                                                                <a href="./Materials/Basic_Mechanical_Engineering.pdf" download><button class="btn"><i class="fa fa-download"></i> Download</button>
                                                            </a>
                                                            </li>
                                                </ul> 

                        </div>
                        <div id="navTab_Subject_3110007" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Environmental
                                Science (3110007)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                            <ul class="list-unstyled">
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                       
                                        title="GTU Environmental Science (3110007) Study Material | Chapter 1 Introduction">
                                        <b>Chapter 1</b> &nbsp;|&nbsp;
                                        Introduction
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                   
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                       
                                        title="GTU Environmental Science (3110007) Study Material | Chapter 2 Water Pollution">
                                        <b>Chapter 2</b> &nbsp;|&nbsp;
                                        Water Pollution
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                       
                                        title="GTU Environmental Science (3110007) Study Material | Chapter 3 Air Pollution">
                                        <b>Chapter 3</b> &nbsp;|&nbsp;
                                        Air Pollution
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                       
                                        title="GTU Environmental Science (3110007) Study Material | Chapter 4 Noise Pollution">
                                        <b>Chapter 4</b> &nbsp;|&nbsp;
                                        Noise Pollution
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn d-block d-md-inline-block text-left"
                                       
                                        title="GTU Environmental Science (3110007) Study Material | Chapter 5 &amp; 6 Solid Waste : Generation and Management">
                                        <b>Chapter 5 &amp; 6</b> &nbsp;|&nbsp;
                                        Solid Waste : Generation and Management
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                       
                                        title="GTU Environmental Science (3110007) Study Material | Chapter 7 E - Waste : Generation and Management">
                                        <b>Chapter 7</b> &nbsp;|&nbsp;
                                        E - Waste : Generation and Management
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn d-block d-md-inline-block text-left"
                                        
                                        title="GTU Environmental Science (3110007) Study Material | Chapter 8 Environmental Global Issues">
                                        <b>Chapter 8</b> &nbsp;|&nbsp;
                                        Environmental Global Issues
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn d-block d-md-inline-block text-left"
                                        
                                        title="GTU Environmental Science (3110007) Study Material | Chapter 9 Green Building and Smart Cities">
                                        <b>Chapter 9</b> &nbsp;|&nbsp;
                                        Green Building and Smart Cities
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    
                                    
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                       
                                        title="GTU Environmental Science (3110007) Study Material | Chapter 10 Concept of 4R&#39;S">
                                        <b>Chapter 10</b> &nbsp;|&nbsp;
                                        Concept of 4R&#39;S
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    
                                </li>
                            </ul>

                        </div>
                        <div id="navTab_Subject_3110011" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Physics - I
                                (3110011)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Physics Group - I (3110011) Study Material | All Physics Group-I"
                                                                   >
                                                                    <b>All</b> &nbsp;|&nbsp;
                                                                    Physics Group-I
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
                                                </ul> 

                        </div>
                        <div id="navTab_Subject_3110013" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Engineering
                                Graphics &amp; Design (3110013)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                            <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Engineering Graphics &amp; Design (3110013) Study Material | All Unit Engineering Graphics &amp; Design (3110013)"
                                                                   >
                                                                    <b>All Unit</b> &nbsp;|&nbsp;
                                                                    Engineering Graphics &amp; Design (3110013)
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
                                                </ul>
                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-deeporange">
                                                    <i class="fa fa-question-circle-o"></i>&nbsp;
                                                    GTU Paper Analysis
                                                </h2> -->
                            </div>
                            <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Engineering Graphics &amp; Design (3110013) Study Material | All Engineering Graphics &amp; Design (3110013)"
                                                                   >
                                                                    <b>All</b> &nbsp;|&nbsp;
                                                                    Engineering Graphics &amp; Design (3110013)
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
                                                </ul> 

                        </div>
                        <div id="navTab_Subject_3110014" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Mathematics-I
                                (3110014)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   title="GTU Mathematics-I (3110014) Study Material | ALL Mathematics - I"
                                                                   >
                                                                    <b>ALL</b> &nbsp;|&nbsp;
                                                                    Mathematics - I
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
                                                </ul>
                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-deeporange">
                                                    <i class="fa fa-file-powerpoint-o"></i>&nbsp;
                                                    Presentations
                                                </h2> -->
                            </div>
                            <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   title="GTU Mathematics-I (3110014) Study Material | Unit - 1 Indeterminate Forms ( Part - 1 )"
                                                                   >
                                                                    <b>Unit - 1</b> &nbsp;|&nbsp;
                                                                    Indeterminate Forms ( Part - 1 )
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   title="GTU Mathematics-I (3110014) Study Material | Unit - 1 Improper Integrals, Gamma Function and Beta Function ( Part - 2 )"
                                                                   >
                                                                    <b>Unit - 1</b> &nbsp;|&nbsp;
                                                                    Improper Integrals, Gamma Function and Beta Function ( Part - 2 )
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>     
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                title="GTU Mathematics-I (3110014) Study Material | Unit - 1 Application of Definite Integral ( Part - 3 )"
                                                                   >
                                                                    <b>Unit - 1</b> &nbsp;|&nbsp;
                                                                    Application of Definite Integral ( Part - 3 )
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   title="GTU Mathematics-I (3110014) Study Material | Unit - 2 Sequence"
                                                                   >
                                                                    <b>Unit - 2</b> &nbsp;|&nbsp;
                                                                    Sequence
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Mathematics-I (3110014) Study Material | Unit - 2 Series ( Part - 1 )"
                                                                   >
                                                                    <b>Unit - 2</b> &nbsp;|&nbsp;
                                                                    Series ( Part - 1 )
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                
                                                                   title="GTU Mathematics-I (3110014) Study Material | Unit - 2 Series ( Part - 2 )"
                                                                   >
                                                                    <b>Unit - 2</b> &nbsp;|&nbsp;
                                                                    Series ( Part - 2 )
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                  
                                                                   title="GTU Mathematics-I (3110014) Study Material | Unit - 3 Fourier Series ( Part - 1 )"
                                                                   >
                                                                    <b>Unit - 3</b> &nbsp;|&nbsp;
                                                                    Fourier Series ( Part - 1 )
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Mathematics-I (3110014) Study Material | Unit - 3 Fourier Series ( Part - 2 )"
                                                                   >
                                                                    <b>Unit - 3</b> &nbsp;|&nbsp;
                                                                    Fourier Series ( Part - 2 )
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                
                                                                   title="GTU Mathematics-I (3110014) Study Material | Unit - 3 Fourier Series ( Part - 3 )"
                                                                   >
                                                                    <b>Unit - 3</b> &nbsp;|&nbsp;
                                                                    Fourier Series ( Part - 3 )
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                  
                                                                   title="GTU Mathematics-I (3110014) Study Material | Unit - 4 Partial Derivatives ( Part - 1 )"
                                                                   >
                                                                    <b>Unit - 4</b> &nbsp;|&nbsp;
                                                                    Partial Derivatives ( Part - 1 )
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                        
                                                                   title="GTU Mathematics-I (3110014) Study Material | Unit - 4 Partial Derivatives ( Part - 2 )"
                                                                   >
                                                                    <b>Unit - 4</b> &nbsp;|&nbsp;
                                                                    Partial Derivatives ( Part - 2 )
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                        
                                                                   title="GTU Mathematics-I (3110014) Study Material | Unit - 4 Partial Derivatives ( Part - 3 )"
                                                                   >
                                                                    <b>Unit - 4</b> &nbsp;|&nbsp;
                                                                    Partial Derivatives ( Part - 3 )
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                
                                                                   title="GTU Mathematics-I (3110014) Study Material | Unit - 5 Multiple Integral ( Part - 1 )"
                                                                   >
                                                                    <b>Unit - 5</b> &nbsp;|&nbsp;
                                                                    Multiple Integral ( Part - 1 )
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                                </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Mathematics-I (3110014) Study Material | Unit - 5 Multiple Integral ( Part - 2 )"
                                                                   >
                                                                    <b>Unit - 5</b> &nbsp;|&nbsp;
                                                                    Multiple Integral ( Part - 2 )
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                 
                                                                   title="GTU Mathematics-I (3110014) Study Material | Unit - 5 Multiple Integral ( Part - 3 )"
                                                                   >
                                                                    <b>Unit - 5</b> &nbsp;|&nbsp;
                                                                    Multiple Integral ( Part - 3 )
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
    </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Mathematics-I (3110014) Study Material | Unit - 6 Matrices ( Part - 1 )"
                                                                   >
                                                                    <b>Unit - 6</b> &nbsp;|&nbsp;
                                                                    Matrices ( Part - 1 )
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                             
                                                                   title="GTU Mathematics-I (3110014) Study Material | Unit - 6 Matrices ( Part - 2 )"
                                                                   >
                                                                    <b>Unit - 6</b> &nbsp;|&nbsp;
                                                                    Matrices ( Part - 2 )
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                            
                                                                   title="GTU Mathematics-I (3110014) Study Material | Unit - 6 Matrices ( Part - 3 )"
                                                                   >
                                                                    <b>Unit - 6</b> &nbsp;|&nbsp;
                                                                    Matrices ( Part - 3 )
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
                                                </ul>

                        </div>
                        <div id="navTab_Subject_3110015" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Mathematics-II
                                (3110015)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                  
                                                                   title="GTU Mathematics-II (3110015) Study Material | All Units Mathematics - II (3110015)"
                                                                   >
                                                                    <b>All Units</b> &nbsp;|&nbsp;
                                                                    Mathematics - II (3110015)
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
                                                </ul>

                        </div>
                        <div id="navTab_Subject_3110015" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Mathematics-II
                                (3110015)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Mathematics-II (3110015) Study Material | All Units Mathematics - II (3110015)"
                                                                   >
                                                                    <b>All Units</b> &nbsp;|&nbsp;
                                                                    Mathematics - II (3110015)
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
                                                </ul> 

                        </div>
                        <div id="navTab_Subject_3110016" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Basics
                                ElectricalS (3110016)</h2>
                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                e-Notes
                                            </h2> -->
                            </div>
                            <ul class="list-unstyled">
<li class="g-mb-10">
                                                            <a class="btn  d-block d-md-inline-block text-left">
                                                                <b>All Units</b> &nbsp;|&nbsp;
                                                                Basic Electrical(3110016)
                                                            </a>
                                                            <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                        </li>
                                            </ul> 
                        </div>
                    </div>
                </div>
            </div>
            <div id="navTab_Sem_3" class="tab-pane ">
                <div class="g-pa-20 g-pt-15 g-bg-white d-shadow-v1 g-rounded-5"
                    style="border-top-left-radius: 0 !important;">

                    <!--inner tab list-->
                    <ul class="nav nav-tabs" id="all_tabs">

                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 active"
                                href="#navTab_Subject_3130004" data-toggle="tab"
                                title="Effective Technical Communication">
                                <b>3130004</b> - ETC
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_3130005" data-toggle="tab" title="Probability and Statistics">
                                <b>3130006</b> - PS
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_3130007" data-toggle="tab" title="Indian Constitution">
                                <b>3130007</b> - Indian Constitution
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_3131904" data-toggle="tab"
                                title="Material Science And Metallurgy">
                                <b>3130702</b> - DS
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_3131905" data-toggle="tab" title="Engineering Thermodynamics">
                                <b>3130703</b> - DBMS
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_3131906" data-toggle="tab"
                                title="Kinematics And Theory Of Machines">
                                <b>3130704</b> - DF
                            </a>
                        </li>

                    </ul>


                    <div class="tab-content">
                        <!--inner tab content-->
                        <div id="navTab_Subject_3130004" class="tab-pane g-pt-10 g-px-5 active">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Effective
                                Technical Communication (3130004)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                
                                                                   title="GTU Effective Technical Communication (3130004) Study Material | All-Units Effective Technical Communication (3130004)"
                                                                   >
                                                                    <b>All-Units</b> &nbsp;|&nbsp;
                                                                    Effective Technical Communication (3130004)
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
                                                </ul> 
                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-deeporange">
                                                    <i class="fa fa-file-powerpoint-o"></i>&nbsp;
                                                    Presentations
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                            
                                                                title="GTU Effective Technical Communication (3130004) Study Material | Unit 1 Dynamics of Communication"
                                                                   >
                                                                    <b>Unit 1</b> &nbsp;|&nbsp;
                                                                    Dynamics of Communication
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Effective Technical Communication (3130004) Study Material | Unit 2 Technical Writing"
                                                                   >
                                                                    <b>Unit 2</b> &nbsp;|&nbsp;
                                                                    Technical Writing
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Effective Technical Communication (3130004) Study Material | Unit 3 Technical Communication"
                                                                   >
                                                                    <b>Unit 3</b> &nbsp;|&nbsp;
                                                                    Technical Communication
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                
                                                                   title="GTU Effective Technical Communication (3130004) Study Material | Unit 4 Ethics in Engineering"
                                                                   >
                                                                    <b>Unit 4</b> &nbsp;|&nbsp;
                                                                    Ethics in Engineering
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                        
                                                                   title="GTU Effective Technical Communication (3130004) Study Material | Unit 5 Etiquettes"
                                                                   >
                                                                    <b>Unit 5</b> &nbsp;|&nbsp;
                                                                    Etiquettes
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"

                                                                   title="GTU Effective Technical Communication (3130004) Study Material | Unit 6 Self-development and Assessment"
                                                                   >
                                                                    <b>Unit 6</b> &nbsp;|&nbsp;
                                                                    Self-development and Assessment
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
                                                </ul> 
                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-teal">
                                                    <i class="fa fa-play-circle"></i>&nbsp;
                                                    Video Lectures
                                                </h2> -->
                            </div>
                            <div class="row">
                                <!-- <div class="col-md-6 col-lg-6 col-xl-4 g-mb-30">
                                                                <article class="g-rounded-5 u-shadow-v32 g-transition-0_3 d-shadow-v1--hover h-100">
                                                                    <a class="js-fancybox d-block u-block-hover g-pos-rel"
                                                                       href="javascript:;"
                                                                       data-src="https://www.youtube.com/embed/pNl-T-UH7-E?autoplay=0"
                                                                       data-caption="Single Image">
                                                                        <img class="img-fluid g-rounded-top-5" src="../../../i.ytimg.com/vi/pNl-T-UH7-E/hqdefault.jpg" alt="Image Description">
                                                                        <span class="u-icon-v3 u-icon-size--sm g-bg-white-opacity-0_7 g-bg-primary--hover g-color-black g-color-white--hover g-font-size-12 g-rounded-50x g-cursor-pointer g-absolute-centered">
                                                                            <i class="fa fa-play g-left-2"></i>
                                                                        </span>
                                                                    </a>
                                                                    <div class="row"
                                                                         title="GTU Effective Technical Communication (3130004) Video Lectures | 1.01 Dynamics of Communication (Introductory Session)">
                                                                        <div class="col-auto g-pl-30 g-py-10">
                                                                            <b>1.01</b>
                                                                        </div>
                                                                        <div class="col g-pr-30 g-py-10 g-font-weight-600">
                                                                            <a href="https://www.youtube.com/watch?v=pNl-T-UH7-E" target="_blank" title="Video lecture on Dynamics of Communication (Introductory Session) for the GTU Subject Effective Technical Communication (3130004)"
                                                                               class="g-color-main">
                                                                                Dynamics of Communication (Introductory Session)
                                                                            </a>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row g-brd-top g-brd-gray-light-v5 g-mx-15 text-center g-color-gray-dark-v4 g-font-size-11 align-items-end">
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-eye"></i>&nbsp; 2K
                                                                        </div>
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-like"></i>&nbsp; 59
                                                                        </div>
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-speech"></i>&nbsp; 1
                                                                        </div>
                                                                    </div>
                                                                </article>

                                                            </div> -->
                                <!--  <div class="col-md-6 col-lg-6 col-xl-4 g-mb-30">
                                                                <article class="g-rounded-5 u-shadow-v32 g-transition-0_3 d-shadow-v1--hover h-100">
                                                                    <a class="js-fancybox d-block u-block-hover g-pos-rel"
                                                                       href="javascript:;"
                                                                       data-src="https://www.youtube.com/embed/kPWbLk1SVuI?autoplay=0"
                                                                       data-caption="Single Image">
                                                                        <img class="img-fluid g-rounded-top-5" src="../../../i.ytimg.com/vi/kPWbLk1SVuI/hqdefault.jpg" alt="Image Description">
                                                                        <span class="u-icon-v3 u-icon-size--sm g-bg-white-opacity-0_7 g-bg-primary--hover g-color-black g-color-white--hover g-font-size-12 g-rounded-50x g-cursor-pointer g-absolute-centered">
                                                                            <i class="fa fa-play g-left-2"></i>
                                                                        </span>
                                                                    </a>
                                                                    <div class="row"
                                                                         title="GTU Effective Technical Communication (3130004) Video Lectures | 1.02 Process of Communication">
                                                                        <div class="col-auto g-pl-30 g-py-10">
                                                                            <b>1.02</b>
                                                                        </div>
                                                                        <div class="col g-pr-30 g-py-10 g-font-weight-600">
                                                                            <a href="https://www.youtube.com/watch?v=kPWbLk1SVuI" target="_blank" title="Video lecture on Process of Communication for the GTU Subject Effective Technical Communication (3130004)"
                                                                               class="g-color-main">
                                                                                Process of Communication
                                                                            </a>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row g-brd-top g-brd-gray-light-v5 g-mx-15 text-center g-color-gray-dark-v4 g-font-size-11 align-items-end">
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-eye"></i>&nbsp; 2K
                                                                        </div>
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-like"></i>&nbsp; 62
                                                                        </div>
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-speech"></i>&nbsp; 2
                                                                        </div>
                                                                    </div>
                                                                </article>

                                                            </div>
<div class="col-md-6 col-lg-6 col-xl-4 g-mb-30">
                                                                <article class="g-rounded-5 u-shadow-v32 g-transition-0_3 d-shadow-v1--hover h-100">
                                                                    <a class="js-fancybox d-block u-block-hover g-pos-rel"
                                                                       href="javascript:;"
                                                                       data-src="https://www.youtube.com/embed/GBI8iHq6TRw?autoplay=0"
                                                                       data-caption="Single Image">
                                                                        <img class="img-fluid g-rounded-top-5" src="../../../i.ytimg.com/vi/GBI8iHq6TRw/hqdefault.jpg" alt="Image Description">
                                                                        <span class="u-icon-v3 u-icon-size--sm g-bg-white-opacity-0_7 g-bg-primary--hover g-color-black g-color-white--hover g-font-size-12 g-rounded-50x g-cursor-pointer g-absolute-centered">
                                                                            <i class="fa fa-play g-left-2"></i>
                                                                        </span>
                                                                    </a>
                                                                    <div class="row"
                                                                         title="GTU Effective Technical Communication (3130004) Video Lectures | 1.03 Kinesics">
                                                                        <div class="col-auto g-pl-30 g-py-10">
                                                                            <b>1.03</b>
                                                                        </div>
                                                                        <div class="col g-pr-30 g-py-10 g-font-weight-600">
                                                                            <a href="https://www.youtube.com/watch?v=GBI8iHq6TRw" target="_blank" title="Video lecture on Kinesics for the GTU Subject Effective Technical Communication (3130004)"
                                                                               class="g-color-main">
                                                                                Kinesics
                                                                            </a>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row g-brd-top g-brd-gray-light-v5 g-mx-15 text-center g-color-gray-dark-v4 g-font-size-11 align-items-end">
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-eye"></i>&nbsp; 1K
                                                                        </div>
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-like"></i>&nbsp; 36
                                                                        </div>
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-speech"></i>&nbsp; 0
                                                                        </div>
                                                                    </div>
                                                                </article>

                                                            </div>
<div class="col-md-6 col-lg-6 col-xl-4 g-mb-30">
                                                                <article class="g-rounded-5 u-shadow-v32 g-transition-0_3 d-shadow-v1--hover h-100">
                                                                    <a class="js-fancybox d-block u-block-hover g-pos-rel"
                                                                       href="javascript:;"
                                                                       data-src="https://www.youtube.com/embed/pK-Umd3E934?autoplay=0"
                                                                       data-caption="Single Image">
                                                                        <img class="img-fluid g-rounded-top-5" src="../../../i.ytimg.com/vi/pK-Umd3E934/hqdefault.jpg" alt="Image Description">
                                                                        <span class="u-icon-v3 u-icon-size--sm g-bg-white-opacity-0_7 g-bg-primary--hover g-color-black g-color-white--hover g-font-size-12 g-rounded-50x g-cursor-pointer g-absolute-centered">
                                                                            <i class="fa fa-play g-left-2"></i>
                                                                        </span>
                                                                    </a>
                                                                    <div class="row"
                                                                         title="GTU Effective Technical Communication (3130004) Video Lectures | 1.04 Proxemics">
                                                                        <div class="col-auto g-pl-30 g-py-10">
                                                                            <b>1.04</b>
                                                                        </div>
                                                                        <div class="col g-pr-30 g-py-10 g-font-weight-600">
                                                                            <a href="https://www.youtube.com/watch?v=pK-Umd3E934" target="_blank" title="Video lecture on Proxemics for the GTU Subject Effective Technical Communication (3130004)"
                                                                               class="g-color-main">
                                                                                Proxemics
                                                                            </a>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row g-brd-top g-brd-gray-light-v5 g-mx-15 text-center g-color-gray-dark-v4 g-font-size-11 align-items-end">
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-eye"></i>&nbsp; 1K
                                                                        </div>
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-like"></i>&nbsp; 21
                                                                        </div>
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-speech"></i>&nbsp; 0
                                                                        </div>
                                                                    </div>
                                                                </article>

                                                            </div>
<div class="col-md-6 col-lg-6 col-xl-4 g-mb-30">
                                                                <article class="g-rounded-5 u-shadow-v32 g-transition-0_3 d-shadow-v1--hover h-100">
                                                                    <a class="js-fancybox d-block u-block-hover g-pos-rel"
                                                                       href="javascript:;"
                                                                       data-src="https://www.youtube.com/embed/DEKoULCaYs0?autoplay=0"
                                                                       data-caption="Single Image">
                                                                        <img class="img-fluid g-rounded-top-5" src="../../../i.ytimg.com/vi/DEKoULCaYs0/hqdefault.jpg" alt="Image Description">
                                                                        <span class="u-icon-v3 u-icon-size--sm g-bg-white-opacity-0_7 g-bg-primary--hover g-color-black g-color-white--hover g-font-size-12 g-rounded-50x g-cursor-pointer g-absolute-centered">
                                                                            <i class="fa fa-play g-left-2"></i>
                                                                        </span>
                                                                    </a>
                                                                    <div class="row"
                                                                         title="GTU Effective Technical Communication (3130004) Video Lectures | 1.05 Paralinguistics">
                                                                        <div class="col-auto g-pl-30 g-py-10">
                                                                            <b>1.05</b>
                                                                        </div>
                                                                        <div class="col g-pr-30 g-py-10 g-font-weight-600">
                                                                            <a href="https://www.youtube.com/watch?v=DEKoULCaYs0" target="_blank" title="Video lecture on Paralinguistics for the GTU Subject Effective Technical Communication (3130004)"
                                                                               class="g-color-main">
                                                                                Paralinguistics
                                                                            </a>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row g-brd-top g-brd-gray-light-v5 g-mx-15 text-center g-color-gray-dark-v4 g-font-size-11 align-items-end">
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-eye"></i>&nbsp; 910
                                                                        </div>
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-like"></i>&nbsp; 17
                                                                        </div>
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-speech"></i>&nbsp; 0
                                                                        </div>
                                                                    </div>
                                                                </article>

                                                            </div>
<div class="col-md-6 col-lg-6 col-xl-4 g-mb-30">
                                                                <article class="g-rounded-5 u-shadow-v32 g-transition-0_3 d-shadow-v1--hover h-100">
                                                                    <a class="js-fancybox d-block u-block-hover g-pos-rel"
                                                                       href="javascript:;"
                                                                       data-src="https://www.youtube.com/embed/yLOGW-S116U?autoplay=0"
                                                                       data-caption="Single Image">
                                                                        <img class="img-fluid g-rounded-top-5" src="../../../i.ytimg.com/vi/yLOGW-S116U/hqdefault.jpg" alt="Image Description">
                                                                        <span class="u-icon-v3 u-icon-size--sm g-bg-white-opacity-0_7 g-bg-primary--hover g-color-black g-color-white--hover g-font-size-12 g-rounded-50x g-cursor-pointer g-absolute-centered">
                                                                            <i class="fa fa-play g-left-2"></i>
                                                                        </span>
                                                                    </a>
                                                                    <div class="row"
                                                                         title="GTU Effective Technical Communication (3130004) Video Lectures | 1.06 Interpersonal and Intercultural Communication">
                                                                        <div class="col-auto g-pl-30 g-py-10">
                                                                            <b>1.06</b>
                                                                        </div>
                                                                        <div class="col g-pr-30 g-py-10 g-font-weight-600">
                                                                            <a href="https://www.youtube.com/watch?v=yLOGW-S116U" target="_blank" title="Video lecture on Interpersonal and Intercultural Communication for the GTU Subject Effective Technical Communication (3130004)"
                                                                               class="g-color-main">
                                                                                Interpersonal and Intercultural Communication
                                                                            </a>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row g-brd-top g-brd-gray-light-v5 g-mx-15 text-center g-color-gray-dark-v4 g-font-size-11 align-items-end">
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-eye"></i>&nbsp; 979
                                                                        </div>
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-like"></i>&nbsp; 21
                                                                        </div>
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-speech"></i>&nbsp; 0
                                                                        </div>
                                                                    </div>
                                                                </article>

                                                            </div>
<div class="col-md-6 col-lg-6 col-xl-4 g-mb-30">
                                                                <article class="g-rounded-5 u-shadow-v32 g-transition-0_3 d-shadow-v1--hover h-100">
                                                                    <a class="js-fancybox d-block u-block-hover g-pos-rel"
                                                                       href="javascript:;"
                                                                       data-src="https://www.youtube.com/embed/NBPLG_y0nMM?autoplay=0"
                                                                       data-caption="Single Image">
                                                                        <img class="img-fluid g-rounded-top-5" src="../../../i.ytimg.com/vi/NBPLG_y0nMM/hqdefault.jpg" alt="Image Description">
                                                                        <span class="u-icon-v3 u-icon-size--sm g-bg-white-opacity-0_7 g-bg-primary--hover g-color-black g-color-white--hover g-font-size-12 g-rounded-50x g-cursor-pointer g-absolute-centered">
                                                                            <i class="fa fa-play g-left-2"></i>
                                                                        </span>
                                                                    </a>
                                                                    <div class="row"
                                                                         title="GTU Effective Technical Communication (3130004) Video Lectures | 2.01 Report Writing">
                                                                        <div class="col-auto g-pl-30 g-py-10">
                                                                            <b>2.01</b>
                                                                        </div>
                                                                        <div class="col g-pr-30 g-py-10 g-font-weight-600">
                                                                            <a href="https://www.youtube.com/watch?v=NBPLG_y0nMM" target="_blank" title="Video lecture on Report Writing for the GTU Subject Effective Technical Communication (3130004)"
                                                                               class="g-color-main">
                                                                                Report Writing
                                                                            </a>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row g-brd-top g-brd-gray-light-v5 g-mx-15 text-center g-color-gray-dark-v4 g-font-size-11 align-items-end">
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-eye"></i>&nbsp; 1K
                                                                        </div>
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-like"></i>&nbsp; 30
                                                                        </div>
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-speech"></i>&nbsp; 0
                                                                        </div>
                                                                    </div>
                                                                </article>

                                                            </div>
<div class="col-md-6 col-lg-6 col-xl-4 g-mb-30">
                                                                <article class="g-rounded-5 u-shadow-v32 g-transition-0_3 d-shadow-v1--hover h-100">
                                                                    <a class="js-fancybox d-block u-block-hover g-pos-rel"
                                                                       href="javascript:;"
                                                                       data-src="https://www.youtube.com/embed/-6n2lsiC7BM?autoplay=0"
                                                                       data-caption="Single Image">
                                                                        <img class="img-fluid g-rounded-top-5" src="../../../i.ytimg.com/vi/-6n2lsiC7BM/hqdefault.jpg" alt="Image Description">
                                                                        <span class="u-icon-v3 u-icon-size--sm g-bg-white-opacity-0_7 g-bg-primary--hover g-color-black g-color-white--hover g-font-size-12 g-rounded-50x g-cursor-pointer g-absolute-centered">
                                                                            <i class="fa fa-play g-left-2"></i>
                                                                        </span>
                                                                    </a>
                                                                    <div class="row"
                                                                         title="GTU Effective Technical Communication (3130004) Video Lectures | 2.02 Proposal Writing">
                                                                        <div class="col-auto g-pl-30 g-py-10">
                                                                            <b>2.02</b>
                                                                        </div>
                                                                        <div class="col g-pr-30 g-py-10 g-font-weight-600">
                                                                            <a href="https://www.youtube.com/watch?v=-6n2lsiC7BM" target="_blank" title="Video lecture on Proposal Writing for the GTU Subject Effective Technical Communication (3130004)"
                                                                               class="g-color-main">
                                                                                Proposal Writing
                                                                            </a>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row g-brd-top g-brd-gray-light-v5 g-mx-15 text-center g-color-gray-dark-v4 g-font-size-11 align-items-end">
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-eye"></i>&nbsp; 1K
                                                                        </div>
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-like"></i>&nbsp; 24
                                                                        </div>
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-speech"></i>&nbsp; 0
                                                                        </div>
                                                                    </div>
                                                                </article>

                                                            </div>
<div class="col-md-6 col-lg-6 col-xl-4 g-mb-30">
                                                                <article class="g-rounded-5 u-shadow-v32 g-transition-0_3 d-shadow-v1--hover h-100">
                                                                    <a class="js-fancybox d-block u-block-hover g-pos-rel"
                                                                       href="javascript:;"
                                                                       data-src="https://www.youtube.com/embed/mdI0eO8KQuA?autoplay=0"
                                                                       data-caption="Single Image">
                                                                        <img class="img-fluid g-rounded-top-5" src="../../../i.ytimg.com/vi/mdI0eO8KQuA/hqdefault.jpg" alt="Image Description">
                                                                        <span class="u-icon-v3 u-icon-size--sm g-bg-white-opacity-0_7 g-bg-primary--hover g-color-black g-color-white--hover g-font-size-12 g-rounded-50x g-cursor-pointer g-absolute-centered">
                                                                            <i class="fa fa-play g-left-2"></i>
                                                                        </span>
                                                                    </a>
                                                                    <div class="row"
                                                                         title="GTU Effective Technical Communication (3130004) Video Lectures | 2.03 Technical Description">
                                                                        <div class="col-auto g-pl-30 g-py-10">
                                                                            <b>2.03</b>
                                                                        </div>
                                                                        <div class="col g-pr-30 g-py-10 g-font-weight-600">
                                                                            <a href="https://www.youtube.com/watch?v=mdI0eO8KQuA" target="_blank" title="Video lecture on Technical Description for the GTU Subject Effective Technical Communication (3130004)"
                                                                               class="g-color-main">
                                                                                Technical Description
                                                                            </a>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row g-brd-top g-brd-gray-light-v5 g-mx-15 text-center g-color-gray-dark-v4 g-font-size-11 align-items-end">
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-eye"></i>&nbsp; 780
                                                                        </div>
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-like"></i>&nbsp; 18
                                                                        </div>
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-speech"></i>&nbsp; 0
                                                                        </div>
                                                                    </div>
                                                                </article>

                                                            </div>
<div class="col-md-6 col-lg-6 col-xl-4 g-mb-30">
                                                                <article class="g-rounded-5 u-shadow-v32 g-transition-0_3 d-shadow-v1--hover h-100">
                                                                    <a class="js-fancybox d-block u-block-hover g-pos-rel"
                                                                       href="javascript:;"
                                                                       data-src="https://www.youtube.com/embed/30qSqOZcQRI?autoplay=0"
                                                                       data-caption="Single Image">
                                                                        <img class="img-fluid g-rounded-top-5" src="../../../i.ytimg.com/vi/30qSqOZcQRI/hqdefault.jpg" alt="Image Description">
                                                                        <span class="u-icon-v3 u-icon-size--sm g-bg-white-opacity-0_7 g-bg-primary--hover g-color-black g-color-white--hover g-font-size-12 g-rounded-50x g-cursor-pointer g-absolute-centered">
                                                                            <i class="fa fa-play g-left-2"></i>
                                                                        </span>
                                                                    </a>
                                                                    <div class="row"
                                                                         title="GTU Effective Technical Communication (3130004) Video Lectures | 2.04 Letter Writing (Part 1)">
                                                                        <div class="col-auto g-pl-30 g-py-10">
                                                                            <b>2.04</b>
                                                                        </div>
                                                                        <div class="col g-pr-30 g-py-10 g-font-weight-600">
                                                                            <a href="https://www.youtube.com/watch?v=30qSqOZcQRI" target="_blank" title="Video lecture on Letter Writing (Part 1) for the GTU Subject Effective Technical Communication (3130004)"
                                                                               class="g-color-main">
                                                                                Letter Writing (Part 1)
                                                                            </a>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row g-brd-top g-brd-gray-light-v5 g-mx-15 text-center g-color-gray-dark-v4 g-font-size-11 align-items-end">
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-eye"></i>&nbsp; 644
                                                                        </div>
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-like"></i>&nbsp; 12
                                                                        </div>
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-speech"></i>&nbsp; 0
                                                                        </div>
                                                                    </div>
                                                                </article>

                                                            </div>
<div class="col-md-6 col-lg-6 col-xl-4 g-mb-30">
                                                                <article class="g-rounded-5 u-shadow-v32 g-transition-0_3 d-shadow-v1--hover h-100">
                                                                    <a class="js-fancybox d-block u-block-hover g-pos-rel"
                                                                       href="javascript:;"
                                                                       data-src="https://www.youtube.com/embed/ErCwcvP3KpE?autoplay=0"
                                                                       data-caption="Single Image">
                                                                        <img class="img-fluid g-rounded-top-5" src="../../../i.ytimg.com/vi/ErCwcvP3KpE/hqdefault.jpg" alt="Image Description">
                                                                        <span class="u-icon-v3 u-icon-size--sm g-bg-white-opacity-0_7 g-bg-primary--hover g-color-black g-color-white--hover g-font-size-12 g-rounded-50x g-cursor-pointer g-absolute-centered">
                                                                            <i class="fa fa-play g-left-2"></i>
                                                                        </span>
                                                                    </a>
                                                                    <div class="row"
                                                                         title="GTU Effective Technical Communication (3130004) Video Lectures | 2.05 Letter Writing (Part 2)">
                                                                        <div class="col-auto g-pl-30 g-py-10">
                                                                            <b>2.05</b>
                                                                        </div>
                                                                        <div class="col g-pr-30 g-py-10 g-font-weight-600">
                                                                            <a href="https://www.youtube.com/watch?v=ErCwcvP3KpE" target="_blank" title="Video lecture on Letter Writing (Part 2) for the GTU Subject Effective Technical Communication (3130004)"
                                                                               class="g-color-main">
                                                                                Letter Writing (Part 2)
                                                                            </a>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row g-brd-top g-brd-gray-light-v5 g-mx-15 text-center g-color-gray-dark-v4 g-font-size-11 align-items-end">
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-eye"></i>&nbsp; 523
                                                                        </div>
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-like"></i>&nbsp; 9
                                                                        </div>
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-speech"></i>&nbsp; 0
                                                                        </div>
                                                                    </div>
                                                                </article>

                                                            </div>
<div class="col-md-6 col-lg-6 col-xl-4 g-mb-30">
                                                                <article class="g-rounded-5 u-shadow-v32 g-transition-0_3 d-shadow-v1--hover h-100">
                                                                    <a class="js-fancybox d-block u-block-hover g-pos-rel"
                                                                       href="javascript:;"
                                                                       data-src="https://www.youtube.com/embed/bKqSTMNoU-w?autoplay=0"
                                                                       data-caption="Single Image">
                                                                        <img class="img-fluid g-rounded-top-5" src="../../../i.ytimg.com/vi/bKqSTMNoU-w/hqdefault.jpg" alt="Image Description">
                                                                        <span class="u-icon-v3 u-icon-size--sm g-bg-white-opacity-0_7 g-bg-primary--hover g-color-black g-color-white--hover g-font-size-12 g-rounded-50x g-cursor-pointer g-absolute-centered">
                                                                            <i class="fa fa-play g-left-2"></i>
                                                                        </span>
                                                                    </a>
                                                                    <div class="row"
                                                                         title="GTU Effective Technical Communication (3130004) Video Lectures | 2.06 Agenda and Minutes of meeting">
                                                                        <div class="col-auto g-pl-30 g-py-10">
                                                                            <b>2.06</b>
                                                                        </div>
                                                                        <div class="col g-pr-30 g-py-10 g-font-weight-600">
                                                                            <a href="https://www.youtube.com/watch?v=bKqSTMNoU-w" target="_blank" title="Video lecture on Agenda and Minutes of meeting for the GTU Subject Effective Technical Communication (3130004)"
                                                                               class="g-color-main">
                                                                                Agenda and Minutes of meeting
                                                                            </a>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row g-brd-top g-brd-gray-light-v5 g-mx-15 text-center g-color-gray-dark-v4 g-font-size-11 align-items-end">
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-eye"></i>&nbsp; 855
                                                                        </div>
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-like"></i>&nbsp; 12
                                                                        </div>
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-speech"></i>&nbsp; 1
                                                                        </div>
                                                                    </div>
                                                                </article>

                                                            </div>
<div class="col-md-6 col-lg-6 col-xl-4 g-mb-30">
                                                                <article class="g-rounded-5 u-shadow-v32 g-transition-0_3 d-shadow-v1--hover h-100">
                                                                    <a class="js-fancybox d-block u-block-hover g-pos-rel"
                                                                       href="javascript:;"
                                                                       data-src="https://www.youtube.com/embed/30PzNqmu41E?autoplay=0"
                                                                       data-caption="Single Image">
                                                                        <img class="img-fluid g-rounded-top-5" src="../../../i.ytimg.com/vi/30PzNqmu41E/hqdefault.jpg" alt="Image Description">
                                                                        <span class="u-icon-v3 u-icon-size--sm g-bg-white-opacity-0_7 g-bg-primary--hover g-color-black g-color-white--hover g-font-size-12 g-rounded-50x g-cursor-pointer g-absolute-centered">
                                                                            <i class="fa fa-play g-left-2"></i>
                                                                        </span>
                                                                    </a>
                                                                    <div class="row"
                                                                         title="GTU Effective Technical Communication (3130004) Video Lectures | 2.07 Resume Writing">
                                                                        <div class="col-auto g-pl-30 g-py-10">
                                                                            <b>2.07</b>
                                                                        </div>
                                                                        <div class="col g-pr-30 g-py-10 g-font-weight-600">
                                                                            <a href="https://www.youtube.com/watch?v=30PzNqmu41E" target="_blank" title="Video lecture on Resume Writing for the GTU Subject Effective Technical Communication (3130004)"
                                                                               class="g-color-main">
                                                                                Resume Writing
                                                                            </a>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row g-brd-top g-brd-gray-light-v5 g-mx-15 text-center g-color-gray-dark-v4 g-font-size-11 align-items-end">
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-eye"></i>&nbsp; 755
                                                                        </div>
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-like"></i>&nbsp; 8
                                                                        </div>
                                                                        <div class="col g-py-5">
                                                                            <i class="icon-speech"></i>&nbsp; 0
                                                                        </div>
                                                                    </div>
                                                                </article>

                                                            </div> -->
                            </div> 

                        </div>
                        <div id="navTab_Subject_3130005" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Probability and
                                Statistics(3130006)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   href=""
                                                                   title="GTU Complex Variables and Partial Differential Equations (3130005) Study Material | Unit - 1 Complex Functions and Conformal Mapping"
                                                                   >
                                                                    <b>Unit - 1</b> &nbsp;|&nbsp;
                                                                    Complex Functions and Conformal Mapping
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   href=""
                                                                   title="GTU Complex Variables and Partial Differential Equations (3130005) Study Material | Unit - 2 Complex Integral, Sequence and Series"
                                                                   >
                                                                    <b>Unit - 2</b> &nbsp;|&nbsp;
                                                                    Complex Integral, Sequence and Series
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   href=""
                                                                   title="GTU Complex Variables and Partial Differential Equations (3130005) Study Material | Unit - 3 Laurent&#39;s Series and Residues"
                                                                   >
                                                                    <b>Unit - 3</b> &nbsp;|&nbsp;
                                                                    Laurent&#39;s Series and Residues
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   href=""
                                                                   title="GTU Complex Variables and Partial Differential Equations (3130005) Study Material | Unit - 4 First order partial differential Equation"
                                                                   >
                                                                    <b>Unit - 4</b> &nbsp;|&nbsp;
                                                                    First order partial differential Equation
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   href=""
                                                                   title="GTU Complex Variables and Partial Differential Equations (3130005) Study Material | Unit - 5 Higher order partial differential Equation"
                                                                   >
                                                                    <b>Unit - 5</b> &nbsp;|&nbsp;
                                                                    Higher order partial differential Equation
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
                                                </ul> 
                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-deeporange">
                                                    <i class="fa fa-file-powerpoint-o"></i>&nbsp;
                                                    Presentations
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Complex Variables and Partial Differential Equations (3130005) Study Material | Unit - 1 Complex Functions and Conformal Mapping"
                                                                   >
                                                                    <b>Unit - 1</b> &nbsp;|&nbsp;
                                                                    Complex Functions and Conformal Mapping
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Complex Variables and Partial Differential Equations (3130005) Study Material | Unit - 2 Complex Integral, Sequence and Series"
                                                                   >
                                                                    <b>Unit - 2</b> &nbsp;|&nbsp;
                                                                    Complex Integral, Sequence and Series
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Complex Variables and Partial Differential Equations (3130005) Study Material | Unit - 3 Laurent&#39;s Series and Residues"
                                                                   >
                                                                    <b>Unit - 3</b> &nbsp;|&nbsp;
                                                                    Laurent&#39;s Series and Residues
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                
                                                                   title="GTU Complex Variables and Partial Differential Equations (3130005) Study Material | Unit - 4 First Order Partial Differential Equation"
                                                                   >
                                                                    <b>Unit - 4</b> &nbsp;|&nbsp;
                                                                    First Order Partial Differential Equation
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Complex Variables and Partial Differential Equations (3130005) Study Material | Unit - 5 Higher Order Partial Differential Equation"
                                                                   >
                                                                    <b>Unit - 5</b> &nbsp;|&nbsp;
                                                                    Higher Order Partial Differential Equation
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
                                                </ul> 

                        </div>
                        <div id="navTab_Subject_3130007" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Indian
                                Constitution (3130007)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                
                                                                   title="GTU Indian Constitution (3130007) Study Material | Unit-1 Meaning of the constitution"
                                                                   >
                                                                    <b>Unit-1</b> &nbsp;|&nbsp;
                                                                    Meaning of the constitution
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                
                                                                   title="GTU Indian Constitution (3130007) Study Material | Unit-2 History of Indian Constitution"
                                                                   >
                                                                    <b>Unit-2</b> &nbsp;|&nbsp;
                                                                    History of Indian Constitution
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                
                                                                   title="GTU Indian Constitution (3130007) Study Material | Unit-3 Salient features and Characteristics of the Constitution of India"
                                                                   >
                                                                    <b>Unit-3</b> &nbsp;|&nbsp;
                                                                    Salient features and Characteristics of the Constitution of India
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                
                                                                   title="GTU Indian Constitution (3130007) Study Material | Unit-4 Fundamental Rights"
                                                                   >
                                                                    <b>Unit-4</b> &nbsp;|&nbsp;
                                                                    Fundamental Rights
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                
                                                                   title="GTU Indian Constitution (3130007) Study Material | Unit-5 Right to Equality"
                                                                   >
                                                                    <b>Unit-5</b> &nbsp;|&nbsp;
                                                                    Right to Equality
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                
                                                                   title="GTU Indian Constitution (3130007) Study Material | Unit-6 Right to Certain Freedom"
                                                                   >
                                                                    <b>Unit-6</b> &nbsp;|&nbsp;
                                                                    Right to Certain Freedom
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                
                                                                   title="GTU Indian Constitution (3130007) Study Material | Unit-7 Liberty under Article 21"
                                                                   >
                                                                    <b>Unit-7</b> &nbsp;|&nbsp;
                                                                    Liberty under Article 21
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                
                                                                   title="GTU Indian Constitution (3130007) Study Material | Unit-8 Fundamental duties and its Legal Status"
                                                                   >
                                                                    <b>Unit-8</b> &nbsp;|&nbsp;
                                                                    Fundamental duties and its Legal Status
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                
                                                                   title="GTU Indian Constitution (3130007) Study Material | Unit-9 The Directive Principles of State Policy"
                                                                   >
                                                                    <b>Unit-9</b> &nbsp;|&nbsp;
                                                                    The Directive Principles of State Policy
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Indian Constitution (3130007) Study Material | Unit-10 Federal Structure"
                                                                   >
                                                                    <b>Unit-10</b> &nbsp;|&nbsp;
                                                                    Federal Structure
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Indian Constitution (3130007) Study Material | Unit-11 Parliamentary form of Government in India"
                                                                   >
                                                                    <b>Unit-11</b> &nbsp;|&nbsp;
                                                                    Parliamentary form of Government in India
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Indian Constitution (3130007) Study Material | Unit-12 Powers and Procedure of Amendment In Indian Constitutional"
                                                                   >
                                                                    <b>Unit-12</b> &nbsp;|&nbsp;
                                                                    Powers and Procedure of Amendment In Indian Constitutional
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Indian Constitution (3130007) Study Material | Unit-13 History of Amendment"
                                                                   >
                                                                    <b>Unit-13</b> &nbsp;|&nbsp;
                                                                    History of Amendment
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Indian Constitution (3130007) Study Material | Unit-14 Emergency Provisions"
                                                                   >
                                                                    <b>Unit-14</b> &nbsp;|&nbsp;
                                                                    Emergency Provisions
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Indian Constitution (3130007) Study Material | Unit-15 Local SeIf Government Constitutional Scheme in India"
                                                                   >
                                                                    <b>Unit-15</b> &nbsp;|&nbsp;
                                                                    Local SeIf Government Constitutional Scheme in India
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
                                                </ul>
                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-deeporange">
                                                    <i class="fa fa-file-powerpoint-o"></i>&nbsp;
                                                    Presentations
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Indian Constitution (3130007) Study Material | ALL Constitution of India"
                                                                   >
                                                                    <b>ALL</b> &nbsp;|&nbsp;
                                                                    Constitution of India
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Indian Constitution (3130007) Study Material | ALL Features"
                                                                   >
                                                                    <b>ALL</b> &nbsp;|&nbsp;
                                                                    Features
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Indian Constitution (3130007) Study Material | ALL Federal Structure"
                                                                   >
                                                                    <b>ALL</b> &nbsp;|&nbsp;
                                                                    Federal Structure
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Indian Constitution (3130007) Study Material | ALL Fundamental Duties"
                                                                   >
                                                                    <b>ALL</b> &nbsp;|&nbsp;
                                                                    Fundamental Duties
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Indian Constitution (3130007) Study Material | ALL Fundamental Rights"
                                                                   >
                                                                    <b>ALL</b> &nbsp;|&nbsp;
                                                                    Fundamental Rights
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Indian Constitution (3130007) Study Material | ALL Parliamentary form &amp; The President"
                                                                   >
                                                                    <b>ALL</b> &nbsp;|&nbsp;
                                                                    Parliamentary form &amp; The President
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Indian Constitution (3130007) Study Material | ALL Amendments"
                                                                   >
                                                                    <b>ALL</b> &nbsp;|&nbsp;
                                                                    Amendments
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Indian Constitution (3130007) Study Material | ALL Directive Principles of State Policy"
                                                                   >
                                                                    <b>ALL</b> &nbsp;|&nbsp;
                                                                    Directive Principles of State Policy
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
                                                </ul>

                        </div>
                        <div id="navTab_Subject_3131904" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Data Structure
                                (3130702)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Material Science And Metallurgy (3131904) Study Material | Unit-1 Introduction to Material Science and Metallurgy"
                                                                   >
                                                                    <b>Unit-1</b> &nbsp;|&nbsp;
                                                                    Introduction to Material Science and Metallurgy
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Material Science And Metallurgy (3131904) Study Material | Unit-2 Crystal Geometry"
                                                                   >
                                                                    <b>Unit-2</b> &nbsp;|&nbsp;
                                                                    Crystal Geometry
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Material Science And Metallurgy (3131904) Study Material | Unit-3 Metallic Materials"
                                                                   >
                                                                    <b>Unit-3</b> &nbsp;|&nbsp;
                                                                    Metallic Materials
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Material Science And Metallurgy (3131904) Study Material | Unit-4 Phase and Phase Equilibrium"
                                                                   >
                                                                    <b>Unit-4</b> &nbsp;|&nbsp;
                                                                    Phase and Phase Equilibrium
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Material Science And Metallurgy (3131904) Study Material | Unit-5 Allotropy of Iron"
                                                                   >
                                                                    <b>Unit-5</b> &nbsp;|&nbsp;
                                                                    Allotropy of Iron
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Material Science And Metallurgy (3131904) Study Material | unit-6 Heat Treatment of Steels"
                                                                   >
                                                                    <b>unit-6</b> &nbsp;|&nbsp;
                                                                    Heat Treatment of Steels
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Material Science And Metallurgy (3131904) Study Material | Unit-7 Theory of Alloys"
                                                                   >
                                                                    <b>Unit-7</b> &nbsp;|&nbsp;
                                                                    Theory of Alloys
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Material Science And Metallurgy (3131904) Study Material | Unit-8 Powder Metallurgy"
                                                                   >
                                                                    <b>Unit-8</b> &nbsp;|&nbsp;
                                                                    Powder Metallurgy
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Material Science And Metallurgy (3131904) Study Material | Unit-9 Non Destructive Testing"
                                                                   >
                                                                    <b>Unit-9</b> &nbsp;|&nbsp;
                                                                    Non Destructive Testing
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Material Science And Metallurgy (3131904) Study Material | Unit-10 Corrosion of Metal and Alloys"
                                                                   >
                                                                    <b>Unit-10</b> &nbsp;|&nbsp;
                                                                    Corrosion of Metal and Alloys
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
                                                </ul>

                        </div>
                        <div id="navTab_Subject_3131905" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Database
                                Management System(3130703)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                            <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Engineering Thermodynamics (3131905) Study Material | Unit-1 Basic Concepts"
                                                                   >
                                                                    <b>Unit-1</b> &nbsp;|&nbsp;
                                                                    Basic Concepts
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Engineering Thermodynamics (3131905) Study Material | Unit-2 First law of Thermodynamics"
                                                                   >
                                                                    <b>Unit-2</b> &nbsp;|&nbsp;
                                                                    First law of Thermodynamics
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Engineering Thermodynamics (3131905) Study Material | Unit-3 Second law of Thermodynamics"
                                                                   >
                                                                    <b>Unit-3</b> &nbsp;|&nbsp;
                                                                    Second law of Thermodynamics
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Engineering Thermodynamics (3131905) Study Material | Unit-4 Entropy"
                                                                   >
                                                                    <b>Unit-4</b> &nbsp;|&nbsp;
                                                                    Entropy
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Engineering Thermodynamics (3131905) Study Material | Unit-5 Energy"
                                                                   >
                                                                    <b>Unit-5</b> &nbsp;|&nbsp;
                                                                    Energy
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Engineering Thermodynamics (3131905) Study Material | Unit-6 Vapour Power Cycles"
                                                                   >
                                                                    <b>Unit-6</b> &nbsp;|&nbsp;
                                                                    Vapour Power Cycles
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Engineering Thermodynamics (3131905) Study Material | Unit-7 Gas Power Cycles"
                                                                   >
                                                                    <b>Unit-7</b> &nbsp;|&nbsp;
                                                                    Gas Power Cycles
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Engineering Thermodynamics (3131905) Study Material | Unit-8 Refrigeration Cycles"
                                                                   >
                                                                    <b>Unit-8</b> &nbsp;|&nbsp;
                                                                    Refrigeration Cycles
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Engineering Thermodynamics (3131905) Study Material | Unit-9 Combustion"
                                                                   >
                                                                    <b>Unit-9</b> &nbsp;|&nbsp;
                                                                    Combustion
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
                                                </ul>

                        </div>
                        <div id="navTab_Subject_3131906" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Digital
                                Fundamentals (3130704)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Kinematics And Theory Of Machines (3131906) Study Material | Unit-1 Introduction"
                                                                   >
                                                                    <b>Unit-1</b> &nbsp;|&nbsp;
                                                                    Introduction
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Kinematics And Theory Of Machines (3131906) Study Material | Unit-2 Graphical and Analytical Linkage Synthesis"
                                                                   >
                                                                    <b>Unit-2</b> &nbsp;|&nbsp;
                                                                    Graphical and Analytical Linkage Synthesis
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Kinematics And Theory Of Machines (3131906) Study Material | Unit-3 Velocity and Acceleration Analysis"
                                                                   >
                                                                    <b>Unit-3</b> &nbsp;|&nbsp;
                                                                    Velocity and Acceleration Analysis
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Kinematics And Theory Of Machines (3131906) Study Material | Unit-4 Cams"
                                                                   >
                                                                    <b>Unit-4</b> &nbsp;|&nbsp;
                                                                    Cams
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Kinematics And Theory Of Machines (3131906) Study Material | Unit-5 Belt, Ropes and Chains"
                                                                   >
                                                                    <b>Unit-5</b> &nbsp;|&nbsp;
                                                                    Belt, Ropes and Chains
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Kinematics And Theory Of Machines (3131906) Study Material | Unit-6 Friction, Clutch and Brake"
                                                                   >
                                                                    <b>Unit-6</b> &nbsp;|&nbsp;
                                                                    Friction, Clutch and Brake
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Kinematics And Theory Of Machines (3131906) Study Material | Unit-7 Gears and Gear Trains"
                                                                   >
                                                                    <b>Unit-7</b> &nbsp;|&nbsp;
                                                                    Gears and Gear Trains
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
                                                </ul> 

                        </div>
                    </div>
                </div>
            </div>
            <div id="navTab_Sem_4" class="tab-pane ">
                <div class="g-pa-20 g-pt-15 g-bg-white d-shadow-v1 g-rounded-5"
                    style="border-top-left-radius: 0 !important;">

                    <!--inner tab list-->
                    <ul class="nav nav-tabs" id="all_tabs">

                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 active"
                                href="#navTab_Subject_3141901" data-toggle="tab"
                                title="Mechanical Measurement and Metrology">
                                <b>3140702</b> - OS
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_3141906" data-toggle="tab"
                                title="Fluid Mechanics and Hydraulic Machines">
                                <b>3140707</b> - COA
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_3141907" data-toggle="tab" title="Fundamentals of Machine Design">
                                <b>3140708</b> - DM
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_3141908" data-toggle="tab" title="Manufacturing Processes">
                                <b>3143201</b> - DCN
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                            href="#navTab_Subject_PEM" data-toggle="tab" title="Data Communication & Computer Networks">
                                <b>3140709</b> - PEM
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <!--inner tab content-->
                        <div id="navTab_Subject_3141901" class="tab-pane g-pt-10 g-px-5 active">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Operating System
                                (3140702)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                            <ul class="list-unstyled">
                                <li class="g-mb-10">
                                    <a class="btn d-block d-md-inline-block text-left"
                                        
                                    title="Operating Systems Lecture Notes" target="_blank">
                                        <b></b> &nbsp;|&nbsp;
                                        Operating Systems Lecture Notes

                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    <!-- <small class="g-color-gray-light-v1" style="white-space: nowrap;">&nbsp;&nbsp; Updated on 06-04-2020</small> -->
                                </li>
                                <br>
                                <li class="g-mb-10">
                                    <a class="btn d-block d-md-inline-block text-left"
                                        

                                        title="Modern Operating System - Tanenbaum" target="_blank">
                                        <b></b> &nbsp;|&nbsp;
                                        Modern Operating System - Tanenbaum
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    <!-- <small class="g-color-gray-light-v1" style="white-space: nowrap;">&nbsp;&nbsp; Updated on 06-04-2020</small> -->
                                </li>
                                <br>
                                <li class="g-mb-10">
                                    <a class="btn d-block d-md-inline-block text-left"
                                        
                                    
                                        title="Andrew S. Tanenbaum - Operating Systems. Design and Implementation"
                                        target="_blank">
                                        <b></b> &nbsp;|&nbsp;
                                        Andrew S. Tanenbaum - Operating Systems. Design and Implementation
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    <!-- <small class="g-color-gray-light-v1" style="white-space: nowrap;">&nbsp;&nbsp; Updated on 18-03-2020</small> -->
                                </li>
                                <br>

                            </ul>

                        </div>
                        <div id="navTab_Subject_3141906" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Computer
                                Organization & Architecture (3140707)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                            <ul class="list-unstyled">
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                         
                                        title="Fundamentals of computer organisation and architecture" target="_blank">
                                        <b></b> &nbsp;|&nbsp;
                                        Computer Organisation and Architecture
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    <!-- <small class="g-color-gray-light-v1" style="white-space: nowrap;">&nbsp;&nbsp; Updated on 06-04-2020</small> -->
                                </li>
                                <br>
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                        >
                                        <b></b> &nbsp;|&nbsp;
                                        Computer Organisation and Architecture
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    <!-- <small class="g-color-gray-light-v1" style="white-space: nowrap;">&nbsp;&nbsp; Updated on 03-04-2021</small> -->
                                </li>
                                <br>
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                        
                                        title="DCAP206_INTRODUCTION_TO_COMPUTER_ORGANIZATION_AND_ARCHITECTURE_DCAP502_COMPUTER_ORGANIZATION_AND_ARCHITECTURE"
                                        target="_blank">
                                        <b></b> &nbsp;|&nbsp;
                                        DCAP206_INTRODUCTION_TO_COMPUTER_ORGANIZATION_AND_ARCHITECTURE_DCAP502_COMPUTER_ORGANIZATION_AND_ARCHITECTURE
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    <!-- <small class="g-color-gray-light-v1" style="white-space: nowrap;">&nbsp;&nbsp; Updated on 06-04-2020</small> -->
                                </li>
                                <br>
                            </ul>

                        </div>
                        <div id="navTab_Subject_3141907" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Discrete
                                Mathematics (3140708)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                            <ul class="list-unstyled">
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                        
                                        title="Discrete Mathematics and Its Applications Seventh Edition Kenneth Rosen"
                                        target="_blank">
                                        <b></b> &nbsp;|&nbsp;
                                        Discrete Mathematics and Its Applications Seventh Edition Kenneth Rosen
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    <!-- <small class="g-color-gray-light-v1" style="white-space: nowrap;">&nbsp;&nbsp; Updated on 06-04-2020</small> -->
                                </li>
                                <br>
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                         title="DREW_ARMSTRONG" target="_blank">
                                        <b></b> &nbsp;|&nbsp;
                                        DREW_ARMSTRONG
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    <!-- <small class="g-color-gray-light-v1" style="white-space: nowrap;">&nbsp;&nbsp; Updated on 06-04-2020</small> -->
                                </li>
                                <br>


                            </ul>

                        </div>
                        <div id="navTab_Subject_3141908" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Data
                                Communication and Computer Networks(3143201)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                            <ul class="list-unstyled">
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                        
                                        title="Communication-Networks-And-Computer-Systems-Communications-and-Signal-Processing"
                                        target="_blank">
                                        <b></b> &nbsp;|&nbsp;
                                        Communication-Networks-And-Computer-Systems-Communications-and-Signal-Processing
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                </li>
                                <br>



                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                        
                                        title="GTU Fundamentals of Machine Design (3141907) Study Material | Unit-2 Moment of inertia of planar cross-section"
                                        target="_blank">
                                        <b></b> &nbsp;|&nbsp;
                                        Data Communications and Networking (5th Edition) - Behrouz A. Forouzan
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    <!-- <small class="g-color-gray-light-v1" style="white-space: nowrap;">&nbsp;&nbsp; Updated on 06-04-2020</small> -->
                                </li>
                                <br>
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                        
                                        title="GTU Fundamentals of Machine Design (3141907) Study Material | Unit-3 Flexural stresses"
                                        target="_blank">
                                        <b></b> &nbsp;|&nbsp;
                                        Digital Communications - Fundamentals and Applications 2E (Bernard Sklar)
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    <!-- <small class="g-color-gray-light-v1" style="white-space: nowrap;">&nbsp;&nbsp; Updated on 06-04-2020</small> -->
                                </li>

                            </ul>


                        </div>
                        <div id="navTab_Subject_PEM" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">PME</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                            <ul class="list-unstyled">
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                        
                                        title="Communication-Networks-And-Computer-Systems-Communications-and-Signal-Processing"
                                        target="_blank">
                                        <b></b> &nbsp;|&nbsp;
                                        Unit-1
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                </li>
                                <br>



                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                        
                                        title="GTU Fundamentals of Machine Design (3141907) Study Material | Unit-2 Moment of inertia of planar cross-section"
                                        target="_blank">
                                        <b></b> &nbsp;|&nbsp;
                                        Data Communications and Networking (5th Edition) - Behrouz A. Forouzan
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    <!-- <small class="g-color-gray-light-v1" style="white-space: nowrap;">&nbsp;&nbsp; Updated on 06-04-2020</small> -->
                                </li>
                                <br>
                                <li class="g-mb-10">
                                    <a class="btn  d-block d-md-inline-block text-left"
                                        
                                        title="GTU Fundamentals of Machine Design (3141907) Study Material | Unit-3 Flexural stresses"
                                        target="_blank">
                                        <b></b> &nbsp;|&nbsp;
                                        Digital Communications - Fundamentals and Applications 2E (Bernard Sklar)
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                    <!-- <small class="g-color-gray-light-v1" style="white-space: nowrap;">&nbsp;&nbsp; Updated on 06-04-2020</small> -->
                                </li>

                            </ul>


                        </div>

                    </div>
                </div>
            </div>
            <div id="navTab_Sem_5" class="tab-pane ">
                <div class="g-pa-20 g-pt-15 g-bg-white d-shadow-v1 g-rounded-5"
                    style="border-top-left-radius: 0 !important;">

                    <!--inner tab list-->
                    <ul class="nav nav-tabs" id="all_tabs">

                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 active"
                                href="#navTab_Subject_3151909" data-toggle="tab" title="Heat Transfer">
                                <b>2150708</b> - SP
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_3151910" data-toggle="tab" title="Operation Research">
                                <b>2150703</b> - ADA
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_3151911" data-toggle="tab" title="Dynamics of Machinery">
                                <b>2150704</b> - OOP
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_3151912" data-toggle="tab" title="Manufacturing Technology">
                                <b>2153202</b> - SE
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_3151913" data-toggle="tab"
                                title="Oil Hydraulics and Pneumatics (Open Elective-1)">
                                <b>2150002</b> - IE-CS
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_3151913" data-toggle="tab"
                                title="Oil Hydraulics and Pneumatics (Open Elective-1)">
                                <b>2150003</b> - IE-DM
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <!--inner tab content-->
                        <div id="navTab_Subject_3151909" class="tab-pane g-pt-10 g-px-5 active">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">System
                                Programming (2150708)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                            <ul class="list-unstyled">
                                <li class="g-mb-10">
                                    <a class="btn d-block d-md-inline-block text-left"
                                        
                                        title="GTU Heat Transfer (3151909) Study Material | Unit-1 Introduction">
                                        <b>Unit-1</b> &nbsp;|&nbsp;
                                        Introduction
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn d-block d-md-inline-block text-left"
                                        
                                        title="GTU Heat Transfer (3151909) Study Material | Unit-2 Steady State Heat Conduction">
                                        <b>Unit-2</b> &nbsp;|&nbsp;
                                        Steady State Heat Conduction
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn d-block d-md-inline-block text-left"
                                        
                                        title="GTU Heat Transfer (3151909) Study Material | Unit-3 Heat Transfer from Extended Surfaces">
                                        <b>Unit-3</b> &nbsp;|&nbsp;
                                        Heat Transfer from Extended Surfaces
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn d-block d-md-inline-block text-left"
                                        
                                        title="GTU Heat Transfer (3151909) Study Material | Unit-4 Transient Heat Conduction">
                                        <b>Unit-4</b> &nbsp;|&nbsp;
                                        Transient Heat Conduction
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn d-block d-md-inline-block text-left"
                                        
                                        title="GTU Heat Transfer (3151909) Study Material | Unit-5 Radiation Process and Properties">
                                        <b>Unit-5</b> &nbsp;|&nbsp;
                                        Radiation Process and Properties
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn d-block d-md-inline-block text-left"
                                        
                                        title="GTU Heat Transfer (3151909) Study Material | Unit-6 Radiation Heat Transfer">
                                        <b>Unit-6</b> &nbsp;|&nbsp;
                                        Radiation Heat Transfer
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn d-block d-md-inline-block text-left"
                                        
                                        title="GTU Heat Transfer (3151909) Study Material | Unit-7 Convection">
                                        <b>Unit-7</b> &nbsp;|&nbsp;
                                        Convection
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn d-block d-md-inline-block text-left"
                                        
                                        title="GTU Heat Transfer (3151909) Study Material | Unit-8 Boiling and Condensation">
                                        <b>Unit-8</b> &nbsp;|&nbsp;
                                        Boiling and Condensation
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                </li>
                                <li class="g-mb-10">
                                    <a class="btn d-block d-md-inline-block text-left"
                                        
                                        title="GTU Heat Transfer (3151909) Study Material | Unit-9 Heat Exchangers">
                                        <b>Unit-9</b> &nbsp;|&nbsp;
                                        Heat Exchangers
                                    </a>
                                    <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                </li>
                            </ul>

                        </div>
                        <div id="navTab_Subject_3151910" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Analysis and
                                Design of Algorithms(2150703)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Operation Research (3151910) Study Material | Unit-1 Operartion Research"
                                                                   >
                                                                    <b>Unit-1</b> &nbsp;|&nbsp;
                                                                    Operartion Research
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Operation Research (3151910) Study Material | Unit-2 Transportation and Assignment"
                                                                   >
                                                                    <b>Unit-2</b> &nbsp;|&nbsp;
                                                                    Transportation and Assignment
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   title="GTU Operation Research (3151910) Study Material | Unit-3 Queuing Theory"
                                                                   >

                                                                    <b>Unit-3</b> &nbsp;|&nbsp;
                                                                    Queuing Theory
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Operation Research (3151910) Study Material | Unit-4 Replacement Models"
                                                                   >
                                                                    <b>Unit-4</b> &nbsp;|&nbsp;
                                                                    Replacement Models
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Operation Research (3151910) Study Material | Unit-5 Game Theory"
                                                                   >
                                                                    <b>Unit-5</b> &nbsp;|&nbsp;
                                                                    Game Theory
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Operation Research (3151910) Study Material | Unit-6 Decision Theory"
                                                                   >
                                                                    <b>Unit-6</b> &nbsp;|&nbsp;
                                                                    Decision Theory
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Operation Research (3151910) Study Material | Unit-7 Project Management"
                                                                   >
                                                                    <b>Unit-7</b> &nbsp;|&nbsp;
                                                                    Project Management
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
                                                </ul>

                        </div>
                        <div id="navTab_Subject_3151911" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Object Oriented
                                Programming using Java(2150704)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                            
                                                                   title="GTU Dynamics of Machinery (3151911) Study Material | Unit-1 Dynamics of Force Analysis of Mechanisms"
                                                                   >
                                                                    <b>Unit-1</b> &nbsp;|&nbsp;
                                                                    Dynamics of Force Analysis of Mechanisms
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                            
                                                                   title="GTU Dynamics of Machinery (3151911) Study Material | Unit-2 Flywheel"
                                                                   >
                                                                    <b>Unit-2</b> &nbsp;|&nbsp;
                                                                    Flywheel
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                            
                                                                   title="GTU Dynamics of Machinery (3151911) Study Material | Unit-3 Balancing"
                                                                   >
                                                                    <b>Unit-3</b> &nbsp;|&nbsp;
                                                                    Balancing
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                            
                                                                   title="GTU Dynamics of Machinery (3151911) Study Material | Unit-4 Gyroscope"
                                                                   >
                                                                    <b>Unit-4</b> &nbsp;|&nbsp;
                                                                    Gyroscope
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                            
                                                                   title="GTU Dynamics of Machinery (3151911) Study Material | Unit-5 Vibrations"
                                                                   >
                                                                    <b>Unit-5</b> &nbsp;|&nbsp;
                                                                    Vibrations
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
                                                </ul>

                        </div>
                        <div id="navTab_Subject_3151912" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Softwaer
                                Engineering (2153202)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Manufacturing Technology (3151912) Study Material | Unit-1 Manufacturing Technology"
                                                                   >
                                                                    <b>Unit-1</b> &nbsp;|&nbsp;
                                                                    Manufacturing Technology
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Manufacturing Technology (3151912) Study Material | Unit-2 Metal Casting Processes"
                                                                   >
                                                                    <b>Unit-2</b> &nbsp;|&nbsp;
                                                                    Metal Casting Processes
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Manufacturing Technology (3151912) Study Material | Unit-3 Metal Joining Processes"
                                                                   >
                                                                    <b>Unit-3</b> &nbsp;|&nbsp;
                                                                    Metal Joining Processes
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Manufacturing Technology (3151912) Study Material | Unit-4 Metal Shaping and Forming"
                                                                   >
                                                                    <b>Unit-4</b> &nbsp;|&nbsp;
                                                                    Metal Shaping and Forming
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Manufacturing Technology (3151912) Study Material | Unit-5 Sheet Metal Forming"
                                                                   >
                                                                    <b>Unit-5</b> &nbsp;|&nbsp;
                                                                    Sheet Metal Forming
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Manufacturing Technology (3151912) Study Material | Unit-6 Plastic Technology"
                                                                   >
                                                                    <b>Unit-6</b> &nbsp;|&nbsp;
                                                                    Plastic Technology
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
                                                </ul>

                        </div>
                        <div id="navTab_Subject_3151913" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Institute
                                Elective-Cyber Security ()</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Oil Hydraulics and Pneumatics (Open Elective-1) (3151913) Study Material | Unit-1 Introduction"
                                                                   >
                                                                    <b>Unit-1</b> &nbsp;|&nbsp;
                                                                    Introduction
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Oil Hydraulics and Pneumatics (Open Elective-1) (3151913) Study Material | Unit-2 Hydraulic Oils, Fluid Properties and Filter"
                                                                   >
                                                                    <b>Unit-2</b> &nbsp;|&nbsp;
                                                                    Hydraulic Oils, Fluid Properties and Filter
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Oil Hydraulics and Pneumatics (Open Elective-1) (3151913) Study Material | Unit-3 Hydraulic Pumps, Motors, Valves and Actuators"
                                                                   >
                                                                    <b>Unit-3</b> &nbsp;|&nbsp;
                                                                    Hydraulic Pumps, Motors, Valves and Actuators
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Oil Hydraulics and Pneumatics (Open Elective-1) (3151913) Study Material | Unit-4 Air Preparation and Service Unit"
                                                                   >
                                                                    <b>Unit-4</b> &nbsp;|&nbsp;
                                                                    Air Preparation and Service Unit
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Oil Hydraulics and Pneumatics (Open Elective-1) (3151913) Study Material | Unit-5 Pneumatic Cylinders, Motors and Valves"
                                                                   >
                                                                    <b>Unit-5</b> &nbsp;|&nbsp;
                                                                    Pneumatic Cylinders, Motors and Valves
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Oil Hydraulics and Pneumatics (Open Elective-1) (3151913) Study Material | Unit-6 Circuit Design"
                                                                   >
                                                                    <b>Unit-6</b> &nbsp;|&nbsp;
                                                                    Circuit Design
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Oil Hydraulics and Pneumatics (Open Elective-1) (3151913) Study Material | Unit-7 Automation and Simulation of Hydraulics and Pneumatics"
                                                                   >
                                                                    <b>Unit-7</b> &nbsp;|&nbsp;
                                                                    Automation and Simulation of Hydraulics and Pneumatics
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
                                                </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div id="navTab_Sem_6" class="tab-pane ">
                <div class="g-pa-20 g-pt-15 g-bg-white d-shadow-v1 g-rounded-5"
                    style="border-top-left-radius: 0 !important;">

                    <!--inner tab list-->
                    <ul class="nav nav-tabs" id="all_tabs">

                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 active"
                                href="#navTab_Subject_2161901" data-toggle="tab" title="Dynamics of Machinery">
                                <b>216704</b> - TOC
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_2161902" data-toggle="tab" title="Internal Combustion Engines">
                                <b>2160707</b> - Adv.JAVA
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_2161903" data-toggle="tab" title="Computer Aided Design">
                                <b>2160708</b> - WT
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_2161907" data-toggle="tab" title="Industrial Engineering">
                                <b>3160704</b> - TOC
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_2161908" data-toggle="tab"
                                title="Refrigeration and Airconditioning">
                                <b>3160707</b> - AJAVA
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_2161909" data-toggle="tab" title="Production Technology">
                                <b>3160712</b> - MPI
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_3161910" data-toggle="tab" title="Applied Thermodynamics">
                                <b>3160713</b> - WP
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_3161917" data-toggle="tab"
                                title="Computer Aided Manufacturing (Professional Elective - II)">
                                <b>3160714</b> - DM
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_3161926" data-toggle="tab"
                                title="Industry 4.0 (Open Elective -II)">
                                <b>3160716</b> - IOT
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <!--inner tab content-->
                        <div id="navTab_Subject_2161901" class="tab-pane g-pt-10 g-px-5 active">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Theory of
                                Computation (2160704)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                            <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Dynamics of Machinery (2161901) Study Material | All-Units Dynamics of Machinery (2161901)"
                                                                   >
                                                                    <b>All-Units</b> &nbsp;|&nbsp;
                                                                    Dynamics of Machinery (2161901)
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
                                                </ul>
                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-deeporange">
                                                    <i class="fa fa-question-circle-o"></i>&nbsp;
                                                    GTU Paper Analysis
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Dynamics of Machinery (2161901) Study Material | All GTU PAPER ANALYSIS"
                                                                   >
                                                                    <b>All</b> &nbsp;|&nbsp;
                                                                    GTU PAPER ANALYSIS
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
                                                </ul>

                        </div>
                        <div id="navTab_Subject_2161902" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Advanced Java
                                (2160707)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn  d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Internal Combustion Engines (2161902) Study Material | All-Units Internal Combustion Engines (2161902)"
                                                                   >
                                                                    <b>All-Units</b> &nbsp;|&nbsp;
                                                                    Internal Combustion Engines (2161902)
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a> 
                                                            </li>
                                                </ul>
                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-deeporange">
                                                    <i class="fa fa-question-circle-o"></i>&nbsp;
                                                    GTU Paper Analysis
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
                                 <li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Internal Combustion Engines (2161902) Study Material | All Internal Combustion Engines (2161902)"
                                                                   >
                                                                    <b>All</b> &nbsp;|&nbsp;
                                                                    Internal Combustion Engines (2161902)
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
                                                </ul>

                        </div>
                        <div id="navTab_Subject_2161903" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Web Technology
                                (2160708)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Computer Aided Design (2161903) Study Material | All-Units Computer Aided Design (2161903)"
                                                                   >
                                                                    <b>All-Units</b> &nbsp;|&nbsp;
                                                                    Computer Aided Design (2161903)
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
                                                </ul>
                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-deeporange">
                                                    <i class="fa fa-question-circle-o"></i>&nbsp;
                                                    GTU Paper Analysis
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Computer Aided Design (2161903) Study Material | ALL GTU Paper Analysis"
                                                                   >
                                                                    <b>ALL</b> &nbsp;|&nbsp;
                                                                    GTU Paper Analysis
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
                                                </ul>

                        </div>
                        <div id="navTab_Subject_2161907" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Theory of
                                Computation (3160704)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Industrial Engineering (2161907) Study Material | All-Units Industrial Engineering (2161907)"
                                                                   >
                                                                    <b>All-Units</b> &nbsp;|&nbsp;
                                                                    Industrial Engineering (2161907)
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
                                                </ul>
                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-deeporange">
                                                    <i class="fa fa-question-circle-o"></i>&nbsp;
                                                    GTU Paper Analysis
                                                </h2> -->
                            </div>
                            <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Industrial Engineering (2161907) Study Material | All Industrial Engineering (2161907)"
                                                                   >
                                                                    <b>All</b> &nbsp;|&nbsp;
                                                                    Industrial Engineering (2161907)
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
                                                </ul>

                        </div>
                        <div id="navTab_Subject_2161908" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Advance java
                                Programming (3160707)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                            <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Refrigeration and Airconditioning (2161908) Study Material | All-Units Refrigeration and Airconditioning (2161908)"
                                                                   >
                                                                    <b>All-Units</b> &nbsp;|&nbsp;
                                                                    Refrigeration and Airconditioning (2161908)
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                   
                                                            </li>
                                                </ul>
                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-deeporange">
                                                    <i class="fa fa-question-circle-o"></i>&nbsp;
                                                    GTU Paper Analysis
                                                </h2> -->
                            </div>
                            <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Refrigeration and Airconditioning (2161908) Study Material | All Refrigeration and Airconditioning (2161908)"
                                                                   >
                                                                    <b>All</b> &nbsp;|&nbsp;
                                                                    Refrigeration and Airconditioning (2161908)
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
                                                </ul>

                        </div>
                        <div id="navTab_Subject_2161909" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Microprocessor
                                and Interfacing (3160712)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Production Technology (2161909) Study Material | All-Units Production Technology (2161908)"
                                                                   >
                                                                    <b>All-Units</b> &nbsp;|&nbsp;
                                                                    Production Technology (2161908)
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                   
                                                            </li>
                                                </ul>
                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-deeporange">
                                                    <i class="fa fa-question-circle-o"></i>&nbsp;
                                                    GTU Paper Analysis
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                title="GTU Production Technology (2161909) Study Material | All Production Technology (2161908)"
                                                                   >
                                                                    <b>All</b> &nbsp;|&nbsp;
                                                                    Production Technology (2161908)
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
                                                </ul>

                        </div>
                        <div id="navTab_Subject_3161910" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">WEB Programming
                                (3160713)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                  
                                                                   title="GTU Applied Thermodynamics (3161910) Study Material | Unit-3 Refrigerant and Refrigeration Cycles"
                                                                   >
                                                                    <b>Unit-3</b> &nbsp;|&nbsp;
                                                                    Refrigerant and Refrigeration Cycles
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Applied Thermodynamics (3161910) Study Material | Unit-4 Fuel Air and Actual Cycles"
                                                                   >
                                                                    <b>Unit-4</b> &nbsp;|&nbsp;
                                                                    Fuel Air and Actual Cycles
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                   
                                                            </li>
                                                </ul>

                        </div>
                        <div id="navTab_Subject_3161917" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Data Mining
                                (3160714)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Computer Aided Manufacturing (Professional Elective - II) (3161917) Study Material | Unit-1 Computer Aided Manufacturing"
                                                                   >
                                                                    <b>Unit-1</b> &nbsp;|&nbsp;
                                                                    Computer Aided Manufacturing
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Computer Aided Manufacturing (Professional Elective - II) (3161917) Study Material | Unit-4 GT and CAPP"
                                                                   >
                                                                    <b>Unit-4</b> &nbsp;|&nbsp;
                                                                    GT and CAPP
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Computer Aided Manufacturing (Professional Elective - II) (3161917) Study Material | Unit-5 Flexible Manufacturing System"
                                                                   >
                                                                    <b>Unit-5</b> &nbsp;|&nbsp;
                                                                    Flexible Manufacturing System
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>        
                                                            </li>
                                                </ul>

                        </div>
                        <div id="navTab_Subject_3161926" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">IOT and
                                Applications (3160716)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Industry 4.0 (Open Elective -II) (3161926) Study Material | Unit-1 Introduction to Industry 4.0"
                                                                   >
                                                                    <b>Unit-1</b> &nbsp;|&nbsp;
                                                                    Introduction to Industry 4.0
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                   
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Industry 4.0 (Open Elective -II) (3161926) Study Material | Unit-4 Advances in Robotics in the Era of Industry 4.0"
                                                                   >
                                                                    <b>Unit-4</b> &nbsp;|&nbsp;
                                                                    Advances in Robotics in the Era of Industry 4.0
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Industry 4.0 (Open Elective -II) (3161926) Study Material | Unit-5 The Role of Augmented Reality in the Age of Industry 4.0"
                                                                   >
                                                                    <b>Unit-5</b> &nbsp;|&nbsp;
                                                                    The Role of Augmented Reality in the Age of Industry 4.0
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                  
                                                                   title="GTU Industry 4.0 (Open Elective -II) (3161926) Study Material | Unit-6 Obstacles and Framework Conditions for Industry 4.0"
                                                                   >
                                                                    <b>Unit-6</b> &nbsp;|&nbsp;
                                                                    Obstacles and Framework Conditions for Industry 4.0
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
                                                </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div id="navTab_Sem_7" class="tab-pane ">
                <div class="g-pa-20 g-pt-15 g-bg-white d-shadow-v1 g-rounded-5"
                    style="border-top-left-radius: 0 !important;">

                    <!--inner tab list-->
                    <ul class="nav nav-tabs" id="all_tabs">

                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 active"
                                href="#navTab_Subject_2171901" data-toggle="tab" title="Operation Research">
                                <b>2170701</b> - CD
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_2171903" data-toggle="tab" title="Computer Aided Manufacturing">
                                <b>2170709</b> - INS
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_2171909" data-toggle="tab" title="Machine Design">
                                <b>2170710</b> - MCWC
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_2171910" data-toggle="tab" title="Power Plant Engineering">
                                <b>2170715</b> - DMBI
                            </a>
                        </li>

                    </ul>

                    <div class="tab-content">
                        <!--inner tab content-->
                        <div id="navTab_Subject_2171901" class="tab-pane g-pt-10 g-px-5 active">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Complier Design
                                (2170701)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Operation Research (2171901) Study Material | Unit 1 Introduction to Operation Research"
                                                                   >
                                                                    <b>Unit 1</b> &nbsp;|&nbsp;
                                                                    Introduction to Operation Research
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Operation Research (2171901) Study Material | Unit-2 Linear Programming Problem"
                                                                   >
                                                                    <b>Unit-2</b> &nbsp;|&nbsp;
                                                                    Linear Programming Problem
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                  
                                                                   title="GTU Operation Research (2171901) Study Material | Unit-3 Transportation and Assignment"
                                                                   >
                                                                    <b>Unit-3</b> &nbsp;|&nbsp;
                                                                    Transportation and Assignment
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                   </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                
                                                                   title="GTU Operation Research (2171901) Study Material | Unit-4 Queuing Theory"
                                                                   >
                                                                    <b>Unit-4</b> &nbsp;|&nbsp;
                                                                    Queuing Theory
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                
                                                                   title="GTU Operation Research (2171901) Study Material | Unit-5 Inventory Control"
                                                                   >
                                                                    <b>Unit-5</b> &nbsp;|&nbsp;
                                                                    Inventory Control
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                
                                                                   title="GTU Operation Research (2171901) Study Material | Unit-6 Replacement Models"
                                                                   >
                                                                    <b>Unit-6</b> &nbsp;|&nbsp;
                                                                    Replacement Models
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                
                                                                   title="GTU Operation Research (2171901) Study Material | Unit-7 Game Theory"
                                                                   >
                                                                    <b>Unit-7</b> &nbsp;|&nbsp;
                                                                    Game Theory
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                
                                                                   title="GTU Operation Research (2171901) Study Material | Unit-8 Decision Theory"
                                                                   >
                                                                    <b>Unit-8</b> &nbsp;|&nbsp;
                                                                    Decision Theory
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                
                                                                   title="GTU Operation Research (2171901) Study Material | Unit-9 Project Management"
                                                                   >
                                                                    <b>Unit-9</b> &nbsp;|&nbsp;
                                                                    Project Management
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
                                                </ul>
                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-deeporange">
                                                    <i class="fa fa-question-circle-o"></i>&nbsp;
                                                    GTU Paper Analysis
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Operation Research (2171901) Study Material | All Operation Research (2171901)"
                                                                   >
                                                                    <b>All</b> &nbsp;|&nbsp;
                                                                    Operation Research (2171901)
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
                                                </ul>

                        </div>
                        <div id="navTab_Subject_2171903" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Information and
                                Network Security (2170709)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                            <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                  
                                                                   title="GTU Computer Aided Manufacturing (2171903) Study Material | All-Units Computer Aided Manufacturing (2171903)"
                                                                   >
                                                                    <b>All-Units</b> &nbsp;|&nbsp;
                                                                    Computer Aided Manufacturing (2171903)
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
                                                </ul>
                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-deeporange">
                                                    <i class="fa fa-question-circle-o"></i>&nbsp;
                                                    GTU Paper Analysis
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   title="GTU Computer Aided Manufacturing (2171903) Study Material | All Computer Aided Manufacturing (2171903)"
                                                                   >
                                                                    <b>All</b> &nbsp;|&nbsp;
                                                                    Computer Aided Manufacturing (2171903)
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
                                                </ul>

                        </div>
                        <div id="navTab_Subject_2171909" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Mobile Computing
                                and Wireless Communication (2170710)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                        <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Machine Design (2171909) Study Material | All-Units Machine Design (2171909)"
                                                                   >
                                                                    <b>All-Units</b> &nbsp;|&nbsp;
                                                                    Machine Design (2171909)
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
                                                </ul>
                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-deeporange">
                                                    <i class="fa fa-question-circle-o"></i>&nbsp;
                                                    GTU Paper Analysis
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Machine Design (2171909) Study Material | ALL Machine Design (2171909)"
                                                                   >
                                                                    <b>ALL</b> &nbsp;|&nbsp;
                                                                    Machine Design (2171909)
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
                                                </ul>

                        </div>
                        <div id="navTab_Subject_2171910" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Data Mining and
                                Business Intelligence (2170715)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                            <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   title="GTU Power Plant Engineering (2171910) Study Material | Unit-1 Introduction to Thermal Power Plant"
                                                                   >
                                                                    <b>Unit-1</b> &nbsp;|&nbsp;
                                                                    Introduction to Thermal Power Plant
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Power Plant Engineering (2171910) Study Material | Unit-2 High Pressure Boiler"
                                                                   >
                                                                    <b>Unit-2</b> &nbsp;|&nbsp;
                                                                    High Pressure Boiler
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Power Plant Engineering (2171910) Study Material | Unit-3 Coal and Ash Handling"
                                                                   >
                                                                    <b>Unit-3</b> &nbsp;|&nbsp;
                                                                    Coal and Ash Handling
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                
                                                                   title="GTU Power Plant Engineering (2171910) Study Material | Unit-4 Draught Systems"
                                                                   >
                                                                    <b>Unit-4</b> &nbsp;|&nbsp;
                                                                    Draught Systems
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                
                                                                   title="GTU Power Plant Engineering (2171910) Study Material | Unit-5 Steam Nozzle"
                                                                   >
                                                                    <b>Unit-5</b> &nbsp;|&nbsp;
                                                                    Steam Nozzle
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                
                                                                   title="GTU Power Plant Engineering (2171910) Study Material | Unit-6 Steam Turbine"
                                                                   >
                                                                    <b>Unit-6</b> &nbsp;|&nbsp;
                                                                    Steam Turbine
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                
                                                                   title="GTU Power Plant Engineering (2171910) Study Material | Unit-7 Condensers and Cooling Tower"
                                                                   >
                                                                    <b>Unit-7</b> &nbsp;|&nbsp;
                                                                    Condensers and Cooling Tower
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                
                                                                   title="GTU Power Plant Engineering (2171910) Study Material | Unit-8 Feed Water Treatment"
                                                                   >
                                                                    <b>Unit-8</b> &nbsp;|&nbsp;
                                                                    Feed Water Treatment
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                
                                                                   title="GTU Power Plant Engineering (2171910) Study Material | Unit-9 Gas Turbine"
                                                                   >
                                                                    <b>Unit-9</b> &nbsp;|&nbsp;
                                                                    Gas Turbine
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Power Plant Engineering (2171910) Study Material | Unit-10 Nuclear Power Plant"
                                                                   >
                                                                    <b>Unit-10</b> &nbsp;|&nbsp;
                                                                    Nuclear Power Plant
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Power Plant Engineering (2171910) Study Material | Unit-11 Jet Propulsion"
                                                                   >
                                                                    <b>Unit-11</b> &nbsp;|&nbsp;
                                                                    Jet Propulsion
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Power Plant Engineering (2171910) Study Material | Unit-12 Economics of Power Generation"
                                                                   >
                                                                    <b>Unit-12</b> &nbsp;|&nbsp;
                                                                    Economics of Power Generation
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    
                                                            </li>
                                                </ul>
                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-deeporange">
                                                    <i class="fa fa-question-circle-o"></i>&nbsp;
                                                    GTU Paper Analysis
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   title="GTU Power Plant Engineering (2171910) Study Material | All Units GTU Paper Analysis"
                                                                   >
                                                                    <b>All Units</b> &nbsp;|&nbsp;
                                                                    GTU Paper Analysis
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                    </li>
                                                </ul>

                        </div>
                        <div id="navTab_Subject_2171912" class="tab-pane g-pt-10 g-px-5 ">
                            <!-- <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Oil Hydraulics and Pneumatics (2171912)</h2> -->


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                            <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Oil Hydraulics and Pneumatics (2171912) Study Material | All-Units Oil Hydraulics &amp; Pneumatics (2171912)"
                                                                   >
                                                                    <b>All-Units</b> &nbsp;|&nbsp;
                                                                    Oil Hydraulics &amp; Pneumatics (2171912)
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
                                                </ul>
                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-deeporange">
                                                    <i class="fa fa-question-circle-o"></i>&nbsp;
                                                    GTU Paper Analysis
                                                </h2> -->
                            </div>
                             <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Oil Hydraulics and Pneumatics (2171912) Study Material | All-Units Oil Hydraulics &amp; Pneumatics (2171912)"
                                                                   >
                                                                    <b>All-Units</b> &nbsp;|&nbsp;
                                                                    Oil Hydraulics &amp; Pneumatics (2171912)
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
                                                </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div id="navTab_Sem_8" class="tab-pane ">
                <div class="g-pa-20 g-pt-15 g-bg-white d-shadow-v1 g-rounded-5"
                    style="border-top-left-radius: 0 !important;">

                    <!--inner tab list-->
                    <ul class="nav nav-tabs" id="all_tabs">

                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 active"
                                href="#navTab_Subject_2181910" data-toggle="tab" title="Renewable Energy Engineering">
                                <b>2180703</b> - AI
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_2181913" data-toggle="tab"
                                title="Product Design and Value Engineering (Departmental Elective II)">
                                <b>2180712</b> - CIS
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_2181914" data-toggle="tab"
                                title="Rapid Prototyping (Departmental Elective II)">
                                <b>2180713</b> - WDM
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_2181920" data-toggle="tab"
                                title="Quality Engineering (Departmental Elective II)">
                                <b>2180714</b> - iOS Prg
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-rounded-top-5 g-mr-5 g-mt-5 g-py-5 g-font-weight-600 g-bg-bluegray--active g-bg-gray-light-v4--hover g-color-white--active g-color-main--hover g-brd-bluegray--active g-brd-bluegray--hover g-brd-gray-light-v3 "
                                href="#navTab_Subject_2180715" data-toggle="tab"
                                title="Android Programming(Departmental Elective II)">
                                <b>2180715</b> - Android Prg
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <!--inner tab content-->
                        <div id="navTab_Subject_2181910" class="tab-pane g-pt-10 g-px-5 active">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Artificial
                                Intelligence (2180703)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                                    e-Notes
                                                </h2> -->
                            </div>
                            <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Renewable Energy Engineering (2181910) Study Material | All-Units Renewable Energy Engineering (2181910)"
                                                                   >
                                                                    <b>All-Units</b> &nbsp;|&nbsp;
                                                                    Renewable Energy Engineering (2181910)
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>

                                                                   
                                                            </li>
                                                </ul>
                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <!-- <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-deeporange">
                                                    <i class="fa fa-question-circle-o"></i>&nbsp;
                                                    GTU Paper Analysis
                                                </h2> -->
                            </div>
                            <ul class="list-unstyled">
<li class="g-mb-10">
                                                                <a class="btn d-block d-md-inline-block text-left"
                                                                   
                                                                   title="GTU Renewable Energy Engineering (2181910) Study Material | All Renewable Energy Engineering (2181910)"
                                                                   >
                                                                    <b>All</b> &nbsp;|&nbsp;
                                                                    Renewable Energy Engineering (2181910)
                                                                </a>
                                                                <a href="#" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                                            </li>
                                                </ul>

                        </div>
                        <div id="navTab_Subject_2181913" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Cloud
                                Infrastructure and Services (2180712)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                    e-Notes
                                </h2>
                            </div>
                            <ul class="list-unstyled">
                                <li class="g-mb-10">
                                    <a class="btn d-block d-md-inline-block text-left"
                                        title="GTU Cloud_Infrastructure_and_Services (Departmental Elective II) (2180712) Study Material | All-Units Product Design and Value Engineering (Dept. Elect - II) (2181913)">
                                        <b>All-Units</b> &nbsp;|&nbsp;
                                        Cloud_Infrastructure_and_Services(2180712)
                                    </a>
                                    <a href="./Materials/Cloud_Infrastructure_and_Services.pdf" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                </li>
                            </ul>

                        </div>
                        <div id="navTab_Subject_2181914" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Web Data
                                Management (2180713)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                    e-Notes
                                </h2>
                            </div>
                            <ul class="list-unstyled">
                                <li class="g-mb-10">
                                    <a class="btn d-block d-md-inline-block text-left"
                                        title="GTU Rapid Prototyping (Departmental Elective II) (2181914) Study Material | All-Units Rapid Prototyping (Dept. Elect - II) (2181914)">
                                        <b>All-Units</b> &nbsp;|&nbsp;
                                        Rapid Prototyping (Dept. Elect - II) (2181914)
                                    </a>
                                    <a href="./Materials/Web_data_management.pdf" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                </li>
                            </ul>

                        </div>
                        <div id="navTab_Subject_2181920" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">iOS Programming
                                (2180714)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                    e-Notes
                                </h2>
                            </div>
                            <ul class="list-unstyled">
                                <li class="g-mb-10">
                                    <a class="btn d-block d-md-inline-block text-left"
                                        title="GTU Quality Engineering (Departmental Elective II) (2181920) Study Material | All-Units Quality Engineering (Dept. Elect - II) (2181920)">
                                        <b>All-Units</b> &nbsp;|&nbsp;
                                        Quality Engineering (Dept. Elect - II) (2181920)
                                    </a>
                                    <a href="./Materials/ios.pdf" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                </li>
                            </ul>

                        </div>

                        <div id="navTab_Subject_2180715" class="tab-pane g-pt-10 g-px-5 ">
                            <h2 class="h4 g-font-weight-400 w-100 g-mb-10 g-mb-0--md g-font-secondary">Android
                                Programming(2180715)</h2>


                            <div class="u-heading-v1-6 g-bg-main g-brd-gray-light-v2 g-mt-20 g-mb-10">
                                <h2 class="h5 u-heading-v1__title g-font-weight-600 g-font-secondary g-color-indigo">
                                    <i class="fa fa-file-pdf-o"></i>&nbsp;
                                    e-Notes
                                </h2>
                            </div>
                            <ul class="list-unstyled">
                                <li class="g-mb-10">
                                    <a class="btn d-block d-md-inline-block text-left"
                                        title="Android Programming(Departmental Elective II) (2181920) Study Material | All-Units Quality Engineering (Dept. Elect - II) (2181920)">
                                        <b>All-Units</b> &nbsp;|&nbsp;
                                        Android Programming (Dept. Elect - II) (2180715)
                                    </a>
                                    <a href="./Materials/Android_Programming.pdf" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </main>

    <diV class="wp-flate">
  <a href="https://wa.me/916352793463" target="_blank">
  <img src="what_img.png" width="50px"></a>
</diV>

    <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>FOR STUDENT / PARENTS</h3>
                        <ul>
                            <li><a href="https://www.gtu.ac.in/">GTU Website</a></li>
                            <li><a href="https://www.gtu.ac.in/result.aspx">GTU Result Website</a></li>
                            <li><a href="https://www.gtu.ac.in/Circular.aspx">GTU Circular</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>FOR PROGRAMMER</h3>
                        <ul>
                            <li><a href="https://www.w3schools.com/html/">HTML Tutorial</a></li>
                            <li><a href="https://www.w3schools.com/sql/">SQL Tutorial</a></li>
                            <li><a href="https://www.programiz.com/c-programming">Learn C Programming</a></li>
                            <li><a href="https://www.programiz.com/java-programming">Learn Java Programming</a></li>
                            <li><a href="https://www.w3schools.com/css/default.asp">CSS Tutorial</a></li>
                            <li><a href="https://www.w3schools.com/python/default.asp">Python Tutorial</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>OUR CONTACTS</h3>
                        <ul>
                            <li><a>(+91) 6352793463</a></li>
                            <li><a>parekhnikhil1608@gmail.com</a></li>
                            <li><a></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social">
                        <a href="#"><i class="icon ion-social-facebook"></i></a>
                        <a href="#"><i class="icon ion-social-twitter"></i></a>
                        <a href="#"><i class="icon ion-social-snapchat"></i></a>
                        <a href="#"><i class="icon ion-social-instagram"></i></a>
                        <p class="copyright">Education © 2022</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script src="offcanvas.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>