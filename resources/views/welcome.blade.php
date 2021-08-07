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

    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="main_featured m-top-100">-->
    <!--                <div class="col-sm-12">-->
    <!--                    <div class="head_title text-center">-->
    <!--                        <h2>FEATURED WORK</h2>-->
    <!--                        <div class="separator_auto"></div>-->
    <!--                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,-->
    <!--                            sed diam nonummy nibh euismod nostrud exerci tation ullamcorper-->
    <!--                            suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->

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


    <!--    &lt;!&ndash;Service Section&ndash;&gt;-->
    <!--    <section id="service" class="service">-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="main_service roomy-100">-->
    <!--                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">-->
    <!--                        <div class="head_title text-center">-->
    <!--                            <h2>OUR SERVICES</h2>-->
    <!--                            <div class="separator_auto"></div>-->
    <!--                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,-->
    <!--                                sed diam nonummy nibh euismod nostrud exerci tation ullamcorper-->
    <!--                                suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>-->
    <!--                        </div>-->
    <!--                    </div>-->

    <!--                    <div class="col-md-4">-->
    <!--                        <div class="service_item">-->
    <!--                            <i class="icofont icofont-light-bulb"></i>-->
    <!--                            <h6 class="m-top-30">BRANDING</h6>-->
    <!--                            <div class="separator_small"></div>-->
    <!--                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,-->
    <!--                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore-->
    <!--                                magna aliquam erat volutpat. </p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-4">-->
    <!--                        <div class="service_item">-->
    <!--                            <i class="icofont icofont-imac"></i>-->
    <!--                            <h6 class="m-top-30">BRANDING</h6>-->
    <!--                            <div class="separator_small"></div>-->
    <!--                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,-->
    <!--                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore-->
    <!--                                magna aliquam erat volutpat. </p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-4">-->
    <!--                        <div class="service_item">-->
    <!--                            <i class="icofont icofont-video"></i>-->
    <!--                            <h6 class="m-top-30">BRANDING</h6>-->
    <!--                            <div class="separator_small"></div>-->
    <!--                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,-->
    <!--                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore-->
    <!--                                magna aliquam erat volutpat. </p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>&lt;!&ndash;End off row &ndash;&gt;-->
    <!--        </div>&lt;!&ndash;End off container &ndash;&gt;-->
    <!--    </section> &lt;!&ndash;End off Featured section&ndash;&gt;-->


    <!--    &lt;!&ndash;Impress section&ndash;&gt;-->
    <!--    <section id="impress" class="impress roomy-100">-->
    <!--        <div class="overlay"></div>-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="main_impress text-center">-->
    <!--                    <div class="col-sm-8 col-sm-offset-2">-->
    <!--                        <h2 class="text-white text-uppercase">Impressed? Let’s work together</h2>-->
    <!--                        <p class="m-top-40 text-white">At vero eos et accusamus et iusto odio dignissimos ducimus qui-->
    <!--                            ditqs praesentium-->
    <!--                            voluptatum deleniti atque corrupti quos dolores et quas molestias</p>-->

    <!--                        <div class="impress_btns m-top-30">-->
    <!--                            <a href="" class="btn btn-primary m-top-20">HIRE US</a>-->
    <!--                            <a href="" class="btn btn-default m-top-20">HIRE US</a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>&lt;!&ndash;End off row &ndash;&gt;-->
    <!--        </div>&lt;!&ndash;End off container &ndash;&gt;-->
    <!--    </section>&lt;!&ndash; End off Impress section&ndash;&gt;-->


    <!--    &lt;!&ndash;Portfolio Section&ndash;&gt;-->
    <!--    <section id="portfolio" class="portfolio lightbg">-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="main_portfolio roomy-100">-->
    <!--                    <div class="col-md-8 col-md-offset-2">-->
    <!--                        <div class="head_title text-center">-->
    <!--                            <h2>OUR PORTOFLIO</h2>-->
    <!--                            <div class="separator_auto"></div>-->
    <!--                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,-->
    <!--                                sed diam nonummy nibh euismod nostrud exerci tation ullamcorper-->
    <!--                                suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>-->
    <!--                        </div>-->
    <!--                    </div>-->

    <!--                    <div class="portfolio_content">-->
    <!--                        <div class="col-md-8">-->
    <!--                            <div class="row">-->
    <!--                                <div class="col-md-12">-->
    <!--                                    <div class="portfolio_item">-->
    <!--                                        <img src="assets/images/Portfolio/2.jpg" alt=""/>-->
    <!--                                        <div class="portfolio_hover text-center">-->
    <!--                                            <h6 class="text-uppercase text-white">Title</h6>-->
    <!--                                            <p class=" text-white">Lorem ipsum dolor sit amet</p>-->
    <!--                                            <div class="portfolio_hover_icon">-->
    <!--                                                <a href="assets/images/Portfolio/2.jpg" class="popup-img"><i-->
    <!--                                                        class="fa fa-expand"></i></a>-->
    <!--                                                <a href=""><i class="fa fa-search"></i></a>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                                <div class="col-md-6 m-top-30">-->
    <!--                                    <div class="portfolio_item portfolio_item2">-->
    <!--                                        <img src="assets/images/Portfolio/3.jpg" alt=""/>-->
    <!--                                        <div class="portfolio_hover text-center">-->
    <!--                                            <h6 class="text-uppercase text-white">Title</h6>-->
    <!--                                            <p class=" text-white">Lorem ipsum dolor sit amet</p>-->
    <!--                                            <div class="portfolio_hover_icon">-->
    <!--                                                <a href="assets/images/Portfolio/3.jpg" class="popup-img"><i-->
    <!--                                                        class="fa fa-expand"></i></a>-->
    <!--                                                <a href=""><i class="fa fa-search"></i></a>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                                <div class="col-md-6 m-top-30">-->
    <!--                                    <div class="portfolio_item portfolio_item2">-->
    <!--                                        <img src="assets/images/Portfolio/5.jpg" alt=""/>-->
    <!--                                        <div class="portfolio_hover text-center">-->
    <!--                                            <h6 class="text-uppercase text-white">Title</h6>-->
    <!--                                            <p class=" text-white">Lorem ipsum dolor sit amet</p>-->
    <!--                                            <div class="portfolio_hover_icon">-->
    <!--                                                <a href="assets/images/Portfolio/5.jpg" class="popup-img"><i-->
    <!--                                                        class="fa fa-expand"></i></a>-->
    <!--                                                <a href=""><i class="fa fa-search"></i></a>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->

    <!--                        <div class="col-md-4">-->
    <!--                            <div class="portfolio_item portfolio_item3 sm-m-top-30">-->
    <!--                                <img src="assets/images/Portfolio/1.jpg" alt=""/>-->
    <!--                                <div class="portfolio_hover text-center">-->
    <!--                                    <h6 class="text-uppercase text-white">Title</h6>-->
    <!--                                    <p class=" text-white">Lorem ipsum dolor sit amet</p>-->
    <!--                                    <div class="portfolio_hover_icon">-->
    <!--                                        <a href="assets/images/Portfolio/1.jpg" class="popup-img"><i-->
    <!--                                                class="fa fa-expand"></i></a>-->
    <!--                                        <a href=""><i class="fa fa-search"></i></a>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-md-4 m-top-30">-->
    <!--                            <div class="portfolio_item portfolio_item2">-->
    <!--                                <img src="assets/images/Portfolio/6.jpg" alt=""/>-->
    <!--                                <div class="portfolio_hover text-center">-->
    <!--                                    <h6 class="text-uppercase text-white">Title</h6>-->
    <!--                                    <p class=" text-white">Lorem ipsum dolor sit amet</p>-->
    <!--                                    <div class="portfolio_hover_icon">-->
    <!--                                        <a href="assets/images/Portfolio/6.jpg" class="popup-img"><i-->
    <!--                                                class="fa fa-expand"></i></a>-->
    <!--                                        <a href=""><i class="fa fa-search"></i></a>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-md-8 m-top-30">-->
    <!--                            <div class="portfolio_item">-->
    <!--                                <img src="assets/images/Portfolio/4.jpg" alt=""/>-->
    <!--                                <div class="portfolio_hover text-center">-->
    <!--                                    <h6 class="text-uppercase text-white">Title</h6>-->
    <!--                                    <p class=" text-white">Lorem ipsum dolor sit amet</p>-->
    <!--                                    <div class="portfolio_hover_icon">-->
    <!--                                        <a href="assets/images/Portfolio/4.jpg" class="popup-img"><i-->
    <!--                                                class="fa fa-expand"></i></a>-->
    <!--                                        <a href=""><i class="fa fa-search"></i></a>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->

    <!--                </div>-->
    <!--            </div>&lt;!&ndash;End off row &ndash;&gt;-->
    <!--        </div>&lt;!&ndash;End off container &ndash;&gt;-->
    <!--    </section>&lt;!&ndash; End off Portfolio section&ndash;&gt;-->
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
                        <div class="skill_content wow fadeIn">
                            <h2>احصائيات</h2>
                            <div class="separator_left"></div>

                            <!--                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,-->
                            <!--                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore-->
                            <!--                                magna aliquam erat volutpat. Ut wisi enim ad minim veniam,-->
                            <!--                                quis nostrud exerci tation ullamcorper suscipit lobortis-->
                            <!--                                nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor-->
                            <!--                                sit amet, consectetuer adipiscing elit, sed diam nonummy nibh-->
                            <!--                                euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.-->
                            <!--                                Ut wisi enim ad minim veniam, quis nostrud exerci tation-->
                            <!--                                ullamcorper suscipit lobortis nisl ut aliquip-->
                            <!--                                ex ea commodo consequat. </p>-->

                        </div>
                    </div>
                    <!--                    <div class="col-md-6">-->
                    <!--                        <div class="skill_bar sm-m-top-50">-->
                    <!--                            <div class="teamskillbar clearfix m-top-20" data-percent="80%">-->
                    <!--                                <h6>GRAPHIC DESIGN</h6>-->
                    <!--                                <div class="teamskillbar-bar"></div>-->
                    <!--                            </div> &lt;!&ndash; End Skill Bar &ndash;&gt;-->

                    <!--                            <div class="teamskillbar clearfix m-top-50" data-percent="75%">-->
                    <!--                                <h6>TYPOGRAPHY</h6>-->
                    <!--                                <div class="teamskillbar-bar"></div>-->
                    <!--                            </div> &lt;!&ndash; End Skill Bar &ndash;&gt;-->

                    <!--                            <div class="teamskillbar clearfix m-top-50" data-percent="90%">-->
                    <!--                                <h6>HTML / CSS</h6>-->
                    <!--                                <div class="teamskillbar-bar"></div>-->
                    <!--                            </div> &lt;!&ndash; End Skill Bar &ndash;&gt;-->
                    <!--                        </div>-->
                    <!--                    </div>-->
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
                            <h2 class="statistic-counter">3468</h2>
                            <div class="separator_small"></div>
                            <h5><em>تقني سامي</em></h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="skill_bottom_item">
                            <h2 class="statistic-counter">4638</h2>
                            <div class="separator_small"></div>
                            <h5><em>ليسانس</em></h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="skill_bottom_item">
                            <h2 class="statistic-counter">3468</h2>
                            <div class="separator_small"></div>
                            <h5><em>ماستر</em></h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="skill_bottom_item">
                            <h2 class="statistic-counter">3468</h2>
                            <div class="separator_small"></div>
                            <h5><em>دكتوراه</em></h5>
                        </div>
                    </div>
                </div>
            </div><!--End off row-->
        </div><!--End off container -->
    </section> <!--End off Skill section -->


    <!--    &lt;!&ndash;Testimonial Section&ndash;&gt;-->
    <!--    <section id="testimonial" class="testimonial fix">-->
    <!--        <div class="overlay"></div>-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="main_testimonial roomy-100">-->
    <!--                    <div class="head_title text-center">-->
    <!--                        <h2 class="text-white">OUR TESTIMONIALS</h2>-->
    <!--                    </div>-->
    <!--                    <div class="testimonial_slid text-center">-->
    <!--                        <div class="testimonial_item">-->
    <!--                            <div class="col-sm-10 col-sm-offset-1">-->
    <!--                                <p class="text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam-->
    <!--                                    nonummy-->
    <!--                                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.-->
    <!--                                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper-->
    <!--                                    suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>-->

    <!--                                <div class="test_authour m-top-30">-->
    <!--                                    <h6 class="text-white m-bottom-20">JOHN DOE - THEMEFOREST USER</h6>-->
    <!--                                    <i class="fa fa-star"></i>-->
    <!--                                    <i class="fa fa-star"></i>-->
    <!--                                    <i class="fa fa-star"></i>-->
    <!--                                    <i class="fa fa-star"></i>-->
    <!--                                    <i class="fa fa-star"></i>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="testimonial_item">-->
    <!--                            <div class="col-sm-10 col-sm-offset-1">-->
    <!--                                <p class="text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam-->
    <!--                                    nonummy-->
    <!--                                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.-->
    <!--                                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper-->
    <!--                                    suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>-->

    <!--                                <div class="test_authour m-top-30">-->
    <!--                                    <h6 class="text-white m-bottom-20">JOHN DOE - THEMEFOREST USER</h6>-->
    <!--                                    <i class="fa fa-star"></i>-->
    <!--                                    <i class="fa fa-star"></i>-->
    <!--                                    <i class="fa fa-star"></i>-->
    <!--                                    <i class="fa fa-star"></i>-->
    <!--                                    <i class="fa fa-star"></i>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="testimonial_item">-->
    <!--                            <div class="col-sm-10 col-sm-offset-1">-->
    <!--                                <p class="text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam-->
    <!--                                    nonummy-->
    <!--                                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.-->
    <!--                                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper-->
    <!--                                    suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>-->

    <!--                                <div class="test_authour m-top-30">-->
    <!--                                    <h6 class="text-white m-bottom-20">JOHN DOE - THEMEFOREST USER</h6>-->
    <!--                                    <i class="fa fa-star"></i>-->
    <!--                                    <i class="fa fa-star"></i>-->
    <!--                                    <i class="fa fa-star"></i>-->
    <!--                                    <i class="fa fa-star"></i>-->
    <!--                                    <i class="fa fa-star"></i>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="testimonial_item">-->
    <!--                            <div class="col-sm-10 col-sm-offset-1">-->
    <!--                                <p class="text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam-->
    <!--                                    nonummy-->
    <!--                                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.-->
    <!--                                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper-->
    <!--                                    suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>-->

    <!--                                <div class="test_authour m-top-30">-->
    <!--                                    <h6 class="text-white m-bottom-20">JOHN DOE - THEMEFOREST USER</h6>-->
    <!--                                    <i class="fa fa-star"></i>-->
    <!--                                    <i class="fa fa-star"></i>-->
    <!--                                    <i class="fa fa-star"></i>-->
    <!--                                    <i class="fa fa-star"></i>-->
    <!--                                    <i class="fa fa-star"></i>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>&lt;!&ndash;End off row&ndash;&gt;-->
    <!--        </div>&lt;!&ndash;End off container &ndash;&gt;-->
    <!--    </section> &lt;!&ndash;End off Testimonial section &ndash;&gt;-->


    <!--    &lt;!&ndash;Pricing Section&ndash;&gt;-->
    <!--    <section id="pricing" class="pricing lightbg">-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="main_pricing roomy-100">-->
    <!--                    <div class="col-md-8 col-md-offset-2 col-sm-12">-->
    <!--                        <div class="head_title text-center">-->
    <!--                            <h2>OUR PRICING</h2>-->
    <!--                            <div class="separator_auto"></div>-->
    <!--                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,-->
    <!--                                sed diam nonummy nibh euismod tincidunt tation ullamcorper-->
    <!--                                suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>-->
    <!--                        </div>-->
    <!--                    </div>-->

    <!--                    <div class="col-md-4 col-sm-12">-->
    <!--                        <div class="pricing_item">-->
    <!--                            <div class="pricing_head p-top-30 p-bottom-100 text-center">-->
    <!--                                <h3 class="text-uppercase">STARTER</h3>-->
    <!--                            </div>-->
    <!--                            <div class="pricing_price_border text-center">-->
    <!--                                <div class="pricing_price">-->
    <!--                                    <h3 class="text-white">$19</h3>-->
    <!--                                    <p class="text-white">per month</p>-->
    <!--                                </div>-->
    <!--                            </div>-->

    <!--                            <div class="pricing_body bg-white p-top-110 p-bottom-60">-->
    <!--                                <ul>-->
    <!--                                    <li><i class="fa fa-check-circle text-primary"></i> <span>10</span> user</li>-->
    <!--                                    <li class="disabled"><i class="fa fa-times-circle"></i> Unlimited Bandwidth</li>-->
    <!--                                    <li class="disabled"><i class="fa fa-times-circle"></i> Full Statistics</li>-->

    <!--                                </ul>-->
    <!--                                <div class="pricing_btn text-center m-top-40">-->
    <!--                                    <a href="" class="btn btn-primary">CHOOSE PLAN</a>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>&lt;!&ndash; End off col-md-4 &ndash;&gt;-->

    <!--                    <div class="col-md-4 col-sm-12">-->
    <!--                        <div class="pricing_item sm-m-top-30">-->
    <!--                            <div class="pricing_top_border"></div>-->
    <!--                            <div class="pricing_head p-top-30 p-bottom-100 text-center">-->
    <!--                                <h3 class="text-uppercase">PREMIUM</h3>-->
    <!--                            </div>-->
    <!--                            <div class="pricing_price_border text-center">-->
    <!--                                <div class="pricing_price">-->
    <!--                                    <h3 class="text-white">$39</h3>-->
    <!--                                    <p class="text-white">per month</p>-->
    <!--                                </div>-->
    <!--                            </div>-->

    <!--                            <div class="pricing_body bg-white p-top-110 p-bottom-60">-->
    <!--                                <ul>-->
    <!--                                    <li><i class="fa fa-check-circle text-primary"></i> <span>50</span> user</li>-->
    <!--                                    <li><i class="fa fa-check-circle text-primary"></i> Unlimited Bandwidth</li>-->
    <!--                                    <li class="disabled"><i class="fa fa-times-circle"></i> Full Statistics</li>-->
    <!--                                </ul>-->
    <!--                                <div class="pricing_btn text-center m-top-40">-->
    <!--                                    <a href="" class="btn btn-primary">CHOOSE PLAN</a>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>&lt;!&ndash; End off col-md-4 &ndash;&gt;-->

    <!--                    <div class="col-md-4 col-sm-12">-->
    <!--                        <div class="pricing_item sm-m-top-30">-->
    <!--                            <div class="pricing_head p-top-30 p-bottom-100 text-center">-->
    <!--                                <h3 class="text-uppercase">bUSINESS</h3>-->
    <!--                            </div>-->
    <!--                            <div class="pricing_price_border text-center">-->
    <!--                                <div class="pricing_price">-->
    <!--                                    <h3 class="text-white">$99</h3>-->
    <!--                                    <p class="text-white">per month</p>-->
    <!--                                </div>-->
    <!--                            </div>-->

    <!--                            <div class="pricing_body bg-white p-top-110 p-bottom-60">-->
    <!--                                <ul>-->
    <!--                                    <li><i class="fa fa-check-circle text-primary"></i> Unlimited Users</li>-->
    <!--                                    <li><i class="fa fa-check-circle text-primary"></i> Unlimited Bandwidth</li>-->
    <!--                                    <li><i class="fa fa-check-circle text-primary"></i> Full Statistics</li>-->
    <!--                                </ul>-->
    <!--                                <div class="pricing_btn text-center m-top-40">-->
    <!--                                    <a href="" class="btn btn-primary">CHOOSE PLAN</a>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>&lt;!&ndash; End off col-md-4 &ndash;&gt;-->

    <!--                </div>-->
    <!--            </div>&lt;!&ndash;End off row&ndash;&gt;-->
    <!--        </div>&lt;!&ndash;End off container &ndash;&gt;-->
    <!--    </section> &lt;!&ndash;End off Pricing section &ndash;&gt;-->


    <!--    &lt;!&ndash;client brand section&ndash;&gt;-->
    <!--    <section id="cbrand" class="cbrand">-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="main_cbrand text-center roomy-100">-->
    <!--                    <div class="col-md-2 col-sm-4 col-xs-6">-->
    <!--                        <div class="cbrand_item m-bottom-10">-->
    <!--                            <a href=""><img src="assets/images/clients/1.jpg" alt=""/></a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-2 col-sm-4 col-xs-6">-->
    <!--                        <div class="cbrand_item m-bottom-10">-->
    <!--                            <a href=""><img src="assets/images/clients/2.jpg" alt=""/></a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-2 col-sm-4 col-xs-6">-->
    <!--                        <div class="cbrand_item m-bottom-10">-->
    <!--                            <a href=""><img class="" src="assets/images/clients/5.jpg" alt=""/></a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-2 col-sm-4 col-xs-6">-->
    <!--                        <div class="cbrand_item m-bottom-10">-->
    <!--                            <a href=""><img src="assets/images/clients/4.jpg" alt=""/></a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-2 col-sm-4 col-xs-6">-->
    <!--                        <div class="cbrand_item m-bottom-10">-->
    <!--                            <a href=""><img src="assets/images/clients/3.jpg" alt=""/></a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-2 col-sm-4 col-xs-6">-->
    <!--                        <div class="cbrand_item m-bottom-10">-->
    <!--                            <a href=""><img src="assets/images/clients/1.jpg" alt=""/></a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>&lt;!&ndash; End off row &ndash;&gt;-->
    <!--        </div>&lt;!&ndash; End off container &ndash;&gt;-->
    <!--    </section>&lt;!&ndash; End off Cbrand section &ndash;&gt;-->


    <!--    &lt;!&ndash;Subscribe section&ndash;&gt;-->
    <!--    <section id="subscribe" class="subscribe roomy-100 fix">-->
    <!--        <div class="overlay"></div>-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="main_subscribe text-center">-->
    <!--                    <div class="col-sm-8 col-sm-offset-2">-->
    <!--                        <h2 class="text-white">SUBSCRIBE US</h2>-->
    <!--                        <p class="m-top-30 text-white">At vero eos et accusamus et iusto odio dignissimos-->
    <!--                            ducimus qui blanditiis praesentium</p>-->
    <!--                    </div>-->
    <!--                    <div class="col-sm-10 col-sm-offset-1">-->
    <!--                        <div class="subscribe_btns m-top-40">-->

    <!--                            <form class="form-inline">-->
    <!--                                <div class="form-group">-->
    <!--                                    <input type="email" class="form-control" id="inputEmail2"-->
    <!--                                           placeholder="Email Address">-->
    <!--                                </div>-->
    <!--                                <button type="submit" class="btn btn-primary">SUBSCRIBE</button>-->
    <!--                            </form>-->
    <!--                        </div>-->
    <!--                    </div>-->

    <!--                </div>-->
    <!--            </div>&lt;!&ndash;End off row &ndash;&gt;-->
    <!--        </div>&lt;!&ndash;End off container &ndash;&gt;-->
    <!--    </section>&lt;!&ndash; End off Impress section&ndash;&gt;-->


    <!--    &lt;!&ndash;Blog Section&ndash;&gt;-->
    <!--    <section id="blog" class="blog">-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="main_blog text-center roomy-100">-->
    <!--                    <div class="col-sm-8 col-sm-offset-2">-->
    <!--                        <div class="head_title text-center">-->
    <!--                            <h2>RECENT BLOGS</h2>-->
    <!--                            <div class="separator_auto"></div>-->
    <!--                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,-->
    <!--                                sed diam nonummy nibh euismod tincidunt tation ullamcorper-->
    <!--                                suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-4">-->
    <!--                        <div class="blog_item m-top-20">-->
    <!--                            <div class="blog_item_img">-->
    <!--                                <img src="assets/images/Blog/1.jpg" alt=""/>-->
    <!--                            </div>-->
    <!--                            <div class="blog_text roomy-40">-->
    <!--                                <h6>PLEASUARE WITHOUT CONSCIENCE</h6>-->
    <!--                                <p><em><a href="">May 15, 2016</a> /<a href="">admin</a>/<a href=""> Co-working</a></em>-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-4">-->
    <!--                        <div class="blog_item m-top-20">-->
    <!--                            <div class="blog_item_img">-->
    <!--                                <img src="assets/images/Blog/2.jpg" alt=""/>-->
    <!--                            </div>-->
    <!--                            <div class="blog_text roomy-40">-->
    <!--                                <h6>PLEASUARE WITHOUT CONSCIENCE</h6>-->
    <!--                                <p><em><a href="">May 15, 2016</a> /<a href="">admin</a>/<a href=""> Co-working</a></em>-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-4">-->
    <!--                        <div class="blog_item m-top-20">-->
    <!--                            <div class="blog_item_img">-->
    <!--                                <img src="assets/images/Blog/3.jpg" alt=""/>-->
    <!--                            </div>-->
    <!--                            <div class="blog_text roomy-40">-->
    <!--                                <h6>PLEASUARE WITHOUT CONSCIENCE</h6>-->
    <!--                                <p><em><a href="">May 15, 2016</a> /<a href="">admin</a>/<a href=""> Co-working</a></em>-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>&lt;!&ndash;End off row &ndash;&gt;-->
    <!--        </div>&lt;!&ndash;End off container &ndash;&gt;-->
    <!--    </section>&lt;!&ndash; End off Blog section&ndash;&gt;-->


    <!--    &lt;!&ndash;Maps Section&ndash;&gt;-->
    <!--    <div class="main_maps text-center fix">-->
    <!--        <div class="overlay"></div>-->
    <!--        <div class="maps_text">-->
    <!--            <h3 class="text-white" onclick="showmap()">FIND US ON THE MAP <i class="fa fa-angle-down"></i></h3>-->
    <!--            <div id="map_canvas" class="mapheight"></div>-->
    <!--        </div>-->
    <!--    </div>&lt;!&ndash; End off Maps Section&ndash;&gt;-->


    <!--Contact Us Section-->
    <section id="contact" class="contact bg-mega fix">
        <div class="container">
            <div class="row">
                <div class="main_contact roomy-100 text-white">
                    <div class="col-md-8 sm-m-top-30">
                        <form class="" action="subcribe.php">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input id="first_name" name="first_name" type="text" placeholder="اسم و اللقب"
                                               class="form-control" required="">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input id="phone" name="phone" type="text" placeholder="رقم الهاتف"
                                               class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="6" placeholder=الرسالة"></textarea>
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
                            <!--                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,-->
                            <!--                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore-->
                            <!--                                magna aliquam erat volutpat. Ut wisi enim ad minim veniam,-->
                            <!--                                quis nostrud exerci tation ullamcorper suscipit lobortis nisl-->
                            <!--                                ut aliquip ex ea commodo consequat. </p>-->

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
