<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<!--Designerd by: http://bootstrapthemes.co-->
<head>
    <meta charset="utf-8">
    <title>Rage Freebie HTML5 Landing page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <link rel="icon" type="image/png" href="favicon.ico">--}}

<!--Google Font link-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fonticons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootsnav.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/icofont/icofont.min.css')}}">


    <!--For Plugins external css-->
    <!--<link rel="stylesheet" href="assets/css/plugins.css" />-->

    <!--Theme custom css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}"/>

    <script src="{{asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>

<body data-spy="scroll" data-target=".navbar-collapse">


<!-- Preloader -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
        </div>
    </div>
</div><!--End off Preloader -->


<div class="culmn">
    <!--Home page style-->


    <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{route('login')}}">

                    <img src="{{asset('assets/images/logo.png')}}" class="logo logo-display m-top-10 brand-image img-circle elevation-3" style="opacity: .8;/* height: 129%; */width: 11%;" alt="">
                    <img src="{{asset('assets/images/logo.png')}}" class="logo logo-scrolled brand-image img-circle elevation-3" style="opacity: .8;/* height: 129%; */width: 11%;" alt="">

                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li><a href="#hello">مرحبا</a></li>
                    <li><a href="#about">من نحن</a></li>
                    <li><a href="#contact">اتصل بنا</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>


        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <div class="widget">
                <h6 class="title">Custom Pages</h6>
                <ul class="link">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="widget">
                <h6 class="title">Additional Links</h6>
                <ul class="link">
                    <li><a href="#">Retina Homepage</a></li>
                    <li><a href="#">New Page Examples</a></li>
                    <li><a href="#">Parallax Sections</a></li>
                    <li><a href="#">Shortcode Central</a></li>
                    <li><a href="#">Ultimate Font Collection</a></li>
                </ul>
            </div>
        </div>
        <!-- End Side Menu -->

    </nav>


    <!--Home Sections-->

    <section id="hello" class="home bg-mega">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="main_home">
                    <div class="home_text" style="text-align:right;">
                        <h1 class="text-white"> ورقلة <br/> تنسيقية حاملي الشهادات الجامعية</h1>
                    </div>

                    <div class="home_btns m-top-40" style="text-align:right;">
                        <a href="{{route('candidate.create')}}"  class="btn btn-primary m-top-20">الولوج الى
                            استمارة</a>

                    </div>

                </div>
            </div><!--End off row-->
        </div><!--End off container -->
    </section> <!--End off Home Sections-->


    <!--About Sections-->
    <section id="about" class="about roomy-100">
        <div class="container">
            <div class="row">
                <div class="main_about">
                    <div class="col-md-6">
                        <div class="about_accordion wow fadeIn">
                            <h2 class="text-right">اهدافنا</h2>
                            <div id="faq_main_content" class="faq_main_content " style="direction: rtl">
                                <h6 class="open" style="font-size: 140%;"><i class="fa fa-angle-right" style="margin-right: 0%"></i> الأولوية في التشغيل </h6>
                                <div class="open">
                                    <div class="content" style="text-align:right;">
                                        <p style="font-size: 130%">الأولوية في التشغيل لسكان الولاية وليس العكس (تطبيق
                                            تعليمة الوزير الأول رقم
                                            01 المؤرخة في 11 مارس 2013 القاضية بأولوية أبناء المنطقة في التشغيل). </p>

                                    </div>
                                </div> <!-- End off accordion item-1 -->

                                <h6 class="open" style="font-size: 140%;" class=""><i class="fa fa-angle-right" style="margin-right: 0%"></i> التوظيف عن طريق
                                    مكتب التشغيل</h6>
                                <div class="open">
                                    <div class="content" style="text-align:right;">
                                        <p style="font-size: 130%">إلزام الشركات الناشطة على مستوى تراب الولاية بالتوظيف
                                            عن طريق مكتب التشغيل
                                            فقط. </p>
                                    </div>
                                </div> <!-- End off accordion item-2 -->

                                <h6 class="open" style="font-size: 140%;"><i class="fa fa-angle-right" style="margin-right: 0%"></i> بطاقة إقامة</h6>
                                <div class="open">
                                    <div class="content" style="text-align:right;">
                                        <p style="font-size: 130%">بطاقة إقامة خاصة بملف التشغيل ممضية من طرف رئيس
                                            البلدية فقط. </p>
                                    </div>
                                </div> <!-- End off accordion item-3 -->

                                <h6 class="open" style="font-size: 140%;"><i class="fa fa-angle-right" style="margin-right: 0%"></i> الوسيط و الضمان الإجتماعي
                                </h6>
                                <div class="open">
                                    <div class="content">
                                        <p style="font-size: 130%">ربط نظام الوسيط بالصندوق الضمان الإجتماعي. </p>
                                    </div>
                                </div> <!-- End off accordion item-4 -->
                                <h6 class="open" style="font-size: 140%;"><i class="fa fa-angle-right" style="margin-right: 0%"></i> نظام الوسيط </h6>
                                <div class="open">
                                    <div class="content">
                                        <p style="font-size: 130%">تحيين نظام الوسيط الحالي.</p>
                                    </div>
                                </div> <!-- End off accordion item-4 -->
                                <h6 class="open" style="font-size: 140%;"><i class="fa fa-angle-right" style="margin-right: 0%"></i>إحصاء الإطارات </h6>
                                <div>
                                    <div class="content">
                                        <p style="font-size: 130%">إحصاء الإطارات البطالة وكذلك متابعة ومرافقة الإطار في
                                            عملية التشغيل.</p>
                                    </div>
                                </div> <!-- End off accordion item-4 -->

                                <h6 class="open" style="font-size: 140%;"><i class="fa fa-angle-right" style="margin-right: 0%"></i>إحصاء الإطارات </h6>
                                <div class="open">
                                    <div class="content">
                                        <p style="font-size: 130%">إحصاء الإطارات البطالة وكذلك متابعة ومرافقة الإطار في
                                            عملية التشغيل.</p>
                                    </div>
                                </div> <!-- End off accordion item-4 -->

                                <h6 class="open" style="font-size: 140%;"><i class="fa fa-angle-right" style="margin-right: 0%"></i>متابعة العروض </h6>
                                <div class="open">
                                    <div class="content">
                                        <p style="font-size: 130%">لجنة متابعة العروض الخاصة بالإطارات في جمبع بلديات
                                            ورقلة.</p>
                                    </div>
                                </div> <!-- End off accordion item-4 -->
                                <h6 class="open" style="font-size: 140%;"><i class="fa fa-angle-right" style="margin-right: 0%"></i>ضمان المصداقية والشفافية
                                </h6>
                                <div class="open">
                                    <div class="content">
                                        <p style="font-size: 130%">هيئة رقابية تراقب الفحص المهني على مستوى المؤسسات
                                            والشركات لضمان المصداقية
                                            والشفافية إلى أن يتم العقد بين الناجح و المؤسسة المعنية لتفادي
                                            التلاعبات.</p>
                                    </div>
                                </div> <!-- End off accordion item-4 -->


                                <h6 class="open" style="font-size: 140%;"><i class="fa fa-angle-right" style="margin-right: 0%"></i>ضمان المصداقية والشفافية
                                </h6>
                                <div class="open">
                                    <div class="content">
                                        <p style="font-size: 130%">هيئة رقابية تراقب الفحص المهني على مستوى المؤسسات
                                            والشركات لضمان المصداقية
                                            والشفافية إلى أن يتم العقد بين الناجح و المؤسسة المعنية لتفادي
                                            التلاعبات.</p>
                                    </div>
                                </div> <!-- End off accordion item-4 -->
                                <h6 class="open" style="font-size: 140%;"><i class="fa fa-angle-right" style="margin-right: 0%"></i>إظهار النتائج </h6>
                                <div class="open">
                                    <div class="content">
                                        <p style="font-size: 130%">هيئة رقابية تراقب الفحص المهني على مستوى المؤسسات
                                            والشركات لضمان المصداقية
                                            والشفافية إلى أن يتم العقد بين الناجح و المؤسسة المعنية لتفادي
                                            التلاعبات.</p>
                                    </div>
                                </div> <!-- End off accordion item-4 -->
                                <h6 class="open" style="font-size: 140%;"><i class="fa fa-angle-right" style="margin-right: 0%"></i>عروض العمل </h6>
                                <div class="open">
                                    <div class="content">
                                        <p style="font-size: 130%">المطالبة بعروض العمل الخاصة بالشركات الناشطة في تراب
                                            الولاية.</p>
                                    </div>
                                </div> <!-- End off accordion item-4 -->


                                <h6 class="open" style="font-size: 140%;"><i class="fa fa-angle-right" style="margin-right: 0%"></i>7000 منصب </h6>
                                <div class="open">
                                    <div class="content">
                                        <p style="font-size: 130%">توفير ازيد من 7000 منصب بالنسبة للإطارات (لكلا
                                            الجنسين) في أقرب الآجال
                                            للتخفيف من حدة الإحتقان في الشارع.</p>
                                    </div>
                                </div> <!-- End off accordion item-4 -->
                                <h6 class="open" style="font-size: 140%;"><i class="fa fa-angle-right" style="margin-right: 0%"></i>الشروط التعجزية </h6>
                                <div class="open">
                                    <div class="content">
                                        <p style="font-size: 130%">إلغاء الشروط التعجزية كالسن، المعدل والخبرة.</p>
                                    </div>
                                </div> <!-- End off accordion item-4 -->
                                <h6 class="open" style="font-size: 140%;"><i class="fa fa-angle-right" style="margin-right: 0%"></i>رفع التجميد </h6>
                                <div class="open">
                                    <div class="content">
                                        <p>رفع التجميد عن مناصب العمل على مستوى الإدارات والمديريات العمومية (من 2016
                                            منصب واحد كل عام) والأولوية للتوظيف الداخلي.</p>
                                    </div>
                                </div> <!-- End off accordion item-4 -->

                                <h6 class="open" style="font-size: 140%;"><i class="fa fa-angle-right" style="margin-right: 0%"></i>فتح تحقيق </h6>
                                <div class="open">
                                    <div class="content">
                                        <p style="font-size: 130%">فتح تحقيق معمق مع مسؤولي قطاع الشغل على مستوى وكالة
                                            ومدرية التشغيل في ولاية
                                            ورقلة فيما يخص التلاعب في مناصب التشغيل خاصة اخر 5 سنوات.
                                        </p>
                                    </div>
                                </div> <!-- End off accordion item-4 -->

                                <h6 class="open" style="font-size: 140%;"><i class="fa fa-angle-right" style="margin-right: 0%"></i>دور مفتشية العمل </h6>
                                <div class="open">
                                    <div class="content">
                                        <p style="font-size: 130%">تفعيل دور مفتشية العمل على مستوى ولاية ورقلة.
                                        </p>
                                    </div>
                                </div> <!-- End off accordion item-4 -->

                                <h6 class="open" style="font-size: 140%;"><i class="fa fa-angle-right" style="margin-right: 0%"></i>مكتب خاص بحاملي الشهادات
                                    الجامعية </h6>
                                <div class="open">
                                    <div class="content">
                                        <p style="font-size: 130%">فتح مكتب خاص بحاملي الشهادات الجامعية على مستوى
                                            الفروع المحلية للتشغيل.
                                        </p>
                                    </div>
                                </div> <!-- End off accordion item-4 -->

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about_content" style="text-align:right;">
                            <h2>من نحن</h2>
                            <div class="separator_left text-right"></div>

                            <p style="font-size: 153%;"> تنسيقية حاملي الشهادات الجامعية هي عبارة عن فكرة بسيطة قادها
                                مجموعة من الشباب منذ سنة 2018 اي قبل مسابقة سونطراك iap
                                2018.للتنسيقية مجموعة من الاهداف التي تسعى لتحقيقها من بينها استرجاع كرامة الاطار
                                الورڨلي (خريجي الجامعات)،فتح مكتب تشغيل خاص بالاطارات وفقط من تسيير اطار خريج جامعة ذو
                                كفاءة.مرافقة خريج الجامعة من بداية تسجيله في عرض العمل الى غاية حصوله على منصب العمل.
                                شعارنا «#تنسيقية_حاملي_الشهادات_الجامعية-ورقلة-» •ارادة•قوة•تحدي.
                            </p>
                        </div>
                    </div>
                </div>
            </div><!--End off row-->
        </div><!--End off container -->
        <br/>
        <br/>
        <br/>
        <br/>
        <hr/>
        <br/>
        <br/>
        <div class="container">
            <div class="row">
                <div class="about_bottom_content">
                    <div class="col-md-4">
                        <div class="about_bottom_item m-top-20">
                            <div class="ab_head">
                                <div class="ab_head_icon">
                                    <i class="icofont icofont-hand-power"></i>
                                </div>
                                <h4 class="m-top-20"> قوة</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="about_bottom_item m-top-20">
                            <div class="ab_head">
                                <div class="ab_head_icon">
                                    <i class="icofont icofont-goal-keeper"></i>
                                </div>
                                <h4 class="m-top-20">تحدي</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="about_bottom_item m-top-20">
                            <div class="ab_head">
                                <div class="ab_head_icon">
                                    <i class="icofont icofont-heart"></i>
                                </div>
                                <h4 class="m-top-20"> ارادة</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End off row-->
        </div><!--End off container -->
    </section> <!--End off About section -->



    <div class="featured_slider">
        <div>
            <div class="featured_img">
                <img src="{{asset('assets/images/fprojects/1.jpg')}}" alt=""/>
                <a href="{{asset('assets/images/fprojects/1.jpg')}}" class="popup-img"></a>
            </div>
        </div>
        <div>
            <div class="featured_img">
                <img src="{{asset('assets/images/fprojects/2.jpg')}}" alt=""/>
                <a href="{{asset('assets/images/fprojects/2.jpg')}}" class="popup-img"></a>
            </div>
        </div>
        <div>
            <div class="featured_img">
                <img src="{{asset('assets/images/fprojects/3.jpg')}}" alt=""/>
                <a href="{{asset('assets/images/fprojects/3.jpg')}}" class="popup-img"></a>
            </div>
        </div>
        <div>
            <div class="featured_img">
                <img src="{{asset('assets/images/fprojects/4.jpg')}}" alt=""/>
                <a href="{{asset('assets/images/fprojects/4.jpg')}}" class="popup-img"></a>
            </div>
        </div>
        <div>
            <div class="featured_img">
                <img src="{{asset('assets/images/fprojects/5.jpg')}}" alt=""/>
                <a href="{{asset('assets/images/fprojects/5.jpg')}}" class="popup-img"></a>
            </div>
        </div>
    </div><!-- End off featured slider -->



    <br/>
    <br/>
    <br/>
    <hr/>
    <br/>
    <br/>
    <!--Skill Sections-->
    <section id="skill" class="skill roomy-100">
        <div class="container">
            <div class="row">
                <div class="main_skill">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6 text-right">
                        <div class="skill_content wow fadeIn ">
                            <h2>احصائيات</h2>

                            <div class="separator_left " style="margin-left: 85%"></div>

                            <a href="{{route('statistics')}}" class="btn btn-primary">المزيد</a>


                        </div>
                    </div>
                </div>
            </div><!--End off row-->
        </div><!--End off container -->
        <br/>
        <br/>
        <br/>
        <hr/>
        <br/>
        <br/>
        <br/>
        <div class="container">
            <div class="row">
                <div class="skill_bottom_content text-center">
                    <div class="col-md-3">
                        <div class="skill_bottom_item">
                            <h2 class="statistic-counter">{{$techCandidates}}</h2>
                            <div class="separator_small"></div>
                            <h5><em>تقني سامي</em></h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="skill_bottom_item">
                            <h2 class="statistic-counter">{{$lisanceCandidates}}</h2>
                            <div class="separator_small"></div>
                            <h5><em>ليسانس</em></h5>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="skill_bottom_item">
                            <h2 class="statistic-counter">{{$masterCandidates}}</h2>
                            <div class="separator_small"></div>
                            <h5><em>ماستر</em></h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="skill_bottom_item">
                            <h2 class="statistic-counter">{{$doctoraCandidates}}</h2>
                            <div class="separator_small"></div>
                            <h5><em>دكتوراه</em></h5>
                        </div>
                    </div>
                </div>
            </div><!--End off row-->
        </div><!--End off container -->
    </section> <!--End off Skill section -->

    <!--Contact Us Section-->
    <section id="contact" class="contact bg-mega fix">
        <div class="container">
            <div class="row">
                <div class="main_contact roomy-100 text-white">
                    <div class="col-md-8 sm-m-top-30">
                        <form class="" action="subcribe.php">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group text-right">
                                        <label class="text-right">رقم الهاتف</label>
                                        <input id="phone" name="phone" type="text"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group text-right">
                                        <label class="text-right">اسم و اللقب</label>
                                        <input id="first_name" name="first_name" type="text"
                                               class="form-control" required="">
                                    </div>
                                </div>



                                <div class="col-sm-12">
                                    <div class="form-group text-right">
                                        <label class="text-right">الرسالة</label>
                                        <textarea class="form-control" rows="6" ></textarea>
                                    </div>
                                    <div class="form-group text-center">
                                        <a href="" class="btn btn-primary">ارسل رسالة</a>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="rage_widget">
                            <div class="widget_head">
                                <h3 class="text-white">اتصل بنا</h3>
                                <div class="separator_small"></div>
                            </div>

                            <div class="widget_socail m-top-30">
                                <ul class="list-inline">
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End off row -->
        </div><!--End off container -->
    </section><!--End off Contact Section-->


    <!-- scroll up-->
    <div class="scrollup">
        <a href="#"><i class="fa fa-chevron-up"></i></a>
    </div><!-- End off scroll up -->


    <footer id="footer" class="footer bg-black">
        <div class="container">
            <div class="row">
                <div class="main_footer text-center p-top-40 p-bottom-30">
                    <p class="wow fadeInRight" data-wow-duration="1s">
                        صنع
                        <i class="fa fa-heart"></i>
                        من طرف
                        تنسيقية حاملي الشهادات الجامعية
                        ورقلة
                    </p>
                </div>
            </div>
        </div>
    </footer>


</div>

<!-- JS includes -->

<script src="{{asset('assets/js/vendor/jquery-1.11.2.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.collapse.js')}}"></script>
<script src="{{asset('assets/js/bootsnav.js')}}"></script>


<!-- paradise slider js -->


<script src="http://maps.google.com/maps/api/js?key=AIzaSyD_tAQD36pKp9v4at5AnpGbvBUsLCOSJx8"></script>
<script src="{{asset('assets/js/gmaps.min.js')}}"></script>

<script>
    function showmap() {
        var mapOptions = {
            zoom: 8,
            scrollwheel: false,
            center: new google.maps.LatLng(-34.397, 150.644),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
        $('.mapheight').css('height', '350');
        $('.maps_text h3').hide();
    }
</script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
