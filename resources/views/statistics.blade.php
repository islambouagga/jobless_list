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


    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

    <!--Theme custom css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}"/>

    <script src="{{asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/components2.min.css')}}" rel="stylesheet" type="text/css">
    {{--    <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>--}}
{{--    <script type="text/javascript" src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>--}}
    <script type="text/javascript" src="{{asset('assets/js/echarts.min.js')}}"></script>


    <style>

        .dataTables_wrapper {
            direction: ltr;
        }

        .dataTables_filter {
            width: 50%;
            float: right;
            text-align: right;
            direction: rtl;
        }
        .dt-buttons {
            width: 50%;
            float: left;
            text-align: left;
        }
    </style>


</head>

<body data-spy="scroll" data-target=".navbar-collapse">


<div class="culmn">
    <!--Home page style-->


    <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">


        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{route('login')}}">

                    <img src="{{asset('assets/images/logo.png')}}"
                         class="logo logo-display m-top-10 brand-image img-circle elevation-3"
                         style="opacity: .8;/* height: 129%; */width: 11%;" alt="">
                    <img src="{{asset('assets/images/logo.png')}}"
                         class="logo logo-scrolled brand-image img-circle elevation-3"
                         style="opacity: .8;/* height: 129%; */width: 11%;" alt="">

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
                        <a href="{{route('candidate.create')}}" class="btn btn-primary m-top-20">الولوج الى
                            استمارة</a>

                    </div>

                </div>
            </div><!--End off row-->
        </div><!--End off container -->
    </section> <!--End off Home Sections-->

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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="
    font-weight: bold;
    color: black;
">
                            <table id="example1" class="table table-bordered table-striped" style="direction: rtl; ">
                                <thead>
                                <tr>
                                    <th class="text-right">التخصص</th>
                                    <th>تقني سامي</th>
                                    <th>ليسانس</th>
                                    <th>ماستر</th>
                                    <th>دكتوراه</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>الصيدلة</td>
                                    <td>{{$الصيدلة1}}</td>
                                    <td>{{$الصيدلة2}}</td>
                                    <td>{{$الصيدلة3}}</td>
                                    <td>{{$الصيدلة4}}</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="
    font-weight: bold;
    color: black;
">
                            <table id="example2" class="table table-bordered table-striped" style="direction: rtl; ">
                                <thead>
                                <tr>
                                    <th class="text-right">المستوى الدراسي / فرع مكتب التشغيل </th>
                                    <th>ورقلة 1</th>
                                    <th>ورقلة 2</th>
                                    <th>ح.مسعود</th>
                                    <th>الرويسات</th>
                                    <th>س-خويلد</th>
                                    <th>النقوسة</th>
                                    <th>البرمة</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>تقني سامي</td>
                                    <td>{{$ouargla11}}</td>
                                    <td>{{$ouargla21}}</td>
                                    <td>{{$hassi1}}</td>
                                    <td>{{$rwissat1}}</td>
                                    <td>{{$sidi1}}</td>
                                    <td>{{$ngossa1}}</td>
                                    <td>{{$borma1}}</td>
                                </tr>
                                <tr>
                                    <td>ليسانس</td>
                                    <td>{{$ouargla12}}</td>
                                    <td>{{$ouargla22}}</td>
                                    <td>{{$hassi2}}</td>
                                    <td>{{$rwissat2}}</td>
                                    <td>{{$sidi2}}</td>
                                    <td>{{$ngossa2}}</td>
                                    <td>{{$borma2}}</td>
                                </tr>
                                <tr>
                                    <td>ماستر</td>
                                    <td>{{$ouargla13}}</td>
                                    <td>{{$ouargla23}}</td>
                                    <td>{{$hassi3}}</td>
                                    <td>{{$rwissat3}}</td>
                                    <td>{{$sidi3}}</td>
                                    <td>{{$ngossa3}}</td>
                                    <td>{{$borma3}}</td>
                                </tr>
                                <tr>
                                    <td>دكتوراه</td>
                                    <td>{{$ouargla14}}</td>
                                    <td>{{$ouargla24}}</td>
                                    <td>{{$hassi4}}</td>
                                    <td>{{$rwissat4}}</td>
                                    <td>{{$sidi4}}</td>
                                    <td>{{$ngossa4}}</td>
                                    <td>{{$borma4}}</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="
    font-weight: bold;
    color: black;
">
                            <table id="example2" class="table table-bordered table-striped" style="direction: rtl; ">
                                <thead>
                                <tr>
                                    <th class="text-right"> فرع مكتب التشغيل </th>
                                    <th class="text-right">متوسط الاعمار</th>
                                    <th class="text-right">ذكر</th>
                                    <th class="text-right">انثى</th>
                                    <th class="text-right">تقني سامي</th>
                                    <th class="text-right">ليسانس</th>
                                    <th class="text-right">ماستر</th>
                                    <th class="text-right">دكتوراه</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>ورقلة 1</td>
                                    <td>{{$ageavrageouargla1}}</td>
                                    <td>{{$ouarglaman}}</td>
                                    <td>{{$ouarglawoman}}</td>
                                    <td>{{$ouargla11}}</td>
                                    <td>{{$ouargla12}}</td>
                                    <td>{{$ouargla13}}</td>
                                    <td>{{$ouargla14}}</td>
                                </tr>
                                <tr>
                                    <td>ورقلة 2</td>
                                    <td>{{$ageavrageouargla2}}</td>
                                    <td>{{$ouargla2man}}</td>
                                    <td>{{$ouargla2woman}}</td>
                                    <td>{{$ouargla21}}</td>
                                    <td>{{$ouargla22}}</td>
                                    <td>{{$ouargla23}}</td>
                                    <td>{{$ouargla24}}</td>
                                </tr>
                                <tr>
                                    <td>ح.مسعود</td>
                                    <td>{{$ageavragehassi}}</td>
                                    <td>{{$hassiman}}</td>
                                    <td>{{$hassiwoman}}</td>
                                    <td>{{$hassi1}}</td>
                                    <td>{{$hassi2}}</td>
                                    <td>{{$hassi3}}</td>
                                    <td>{{$hassi4}}</td>
                                </tr>
                                <tr>
                                    <td>الرويسات</td>
                                    <td>{{$ageavragerwissat}}</td>
                                    <td>{{$rwissatman}}</td>
                                    <td>{{$rwissatwoman}}</td>
                                    <td>{{$rwissat1}}</td>
                                    <td>{{$rwissat2}}</td>
                                    <td>{{$rwissat3}}</td>
                                    <td>{{$rwissat4}}</td>
                                </tr>
                                <tr>
                                    <td>س-خويلد</td>
                                    <td>{{$ageavragesidi}}</td>
                                    <td>{{$sidiman}}</td>
                                    <td>{{$sidiwoman}}</td>
                                    <td>{{$sidi1}}</td>
                                    <td>{{$sidi2}}</td>
                                    <td>{{$sidi3}}</td>
                                    <td>{{$sidi4}}</td>
                                </tr>
                                <tr>
                                    <td>النقوسة</td>
                                    <td>{{$ageavragengossa}}</td>
                                    <td>{{$ngossaman}}</td>
                                    <td>{{$ngossawoman}}</td>
                                    <td>{{$ngossa1}}</td>
                                    <td>{{$ngossa2}}</td>
                                    <td>{{$ngossa3}}</td>
                                    <td>{{$ngossa4}}</td>
                                </tr>
                                <tr>
                                    <td>البرمة</td>
                                    <td>{{$ageavrageborma}}</td>
                                    <td>{{$bormaman}}</td>
                                    <td>{{$bormawoman}}</td>
                                    <td>{{$borma1}}</td>
                                    <td>{{$borma2}}</td>
                                    <td>{{$borma3}}</td>
                                    <td>{{$borma4}}</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
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
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-xl-6" style="margin-top: 30px;">
                        <div class="card">
                            <div class="card-body">
                                <div class="chart-container">
                                    <div class="chart has-fixed-height" id="pie_basic"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-xl-6" style="margin-top: 30px;">
                        <div class="card">
                            <div class="card-body">
                                <div class="chart-container">
                                    <div class="chart has-fixed-height" id="pie_basic2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">how to create dynamic barchart in laravel - websolutionstuff.com</h1>
                    <div class="col-md-8 col-md-offset-2">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="chart-container">
                                        <div class="chart has-fixed-height" id="bars_basic"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--End off row-->
        </div><!--End off container -->
    </section> <!--End off Skill section -->


    <br/>
    <br/>
    <br/>
    <hr/>
    <br/>
    <br/>


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
                                        <textarea class="form-control" rows="6"></textarea>
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


<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>


<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset("plugins/pdfmake/pdfmake.min.js")}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>


<script>
    $(function () {
        $("#example1").DataTable({
            "language": {

                "emptyTable": "No data available in table",
                "info": "إظهار _START_ إلى _END_ من أصل _TOTAL_ مُدخل",
                "infoEmpty": "يعرض 0 إلى 0 من أصل 0 سجلّ",
                "infoFiltered": "(منتقاة من مجموع _MAX_ مُدخل)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu":  "أظهر مُدخلات _MENU_",
                "loadingRecords": "جاري التحميل...",
                "processing": "جاري التحميل...",
                "search": "ابحث:",
                "paginate": {
                    "first": "الأول",
                    "last": "الأخير",
                    "next": "التالي",
                    "previous": "السابق",
                }
            },
            "responsive": true, "lengthChange": false, "autoWidth": false, "sLengthMenu": false,
            "buttons": [ "excel",]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $("#example2").DataTable({
            "language": {

                "emptyTable": "No data available in table",
                "info": "إظهار _START_ إلى _END_ من أصل _TOTAL_ مُدخل",
                "infoEmpty": "يعرض 0 إلى 0 من أصل 0 سجلّ",
                "infoFiltered": "(منتقاة من مجموع _MAX_ مُدخل)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu":  "أظهر مُدخلات _MENU_",
                "loadingRecords": "جاري التحميل...",
                "processing": "جاري التحميل...",
                "search": "ابحث:",
                "paginate": {
                    "first": "الأول",
                    "last": "الأخير",
                    "next": "التالي",
                    "previous": "السابق",
                }
            },
            "responsive": true, "lengthChange": false, "autoWidth": false, "sLengthMenu": false,
            "buttons": [ "excel", ]
        }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');

    });
</script>
</body>
</html>


<script type="text/javascript">
    var pie_basic_element = document.getElementById('pie_basic');
    if (pie_basic_element) {
        var pie_basic = echarts.init(pie_basic_element);
        pie_basic.setOption({
            color: [
                '#1abc9c','#2ecc71','#3498db','#9b59b6','#34495e',
                '#16a085','#27ae60','#2980b9','#8e44ad','#2c3e50',
                '#f1c40f','#e67e22','#e74c3c','#ecf0f1','#95a5a6',
                '#f39c12','#d35400','#c0392b','#bdc3c7','#7f8c8d'
            ],

            textStyle: {
                fontFamily: 'Roboto, Arial, Verdana, sans-serif',
                fontSize: 13
            },

            title: {
                text: 'Pie Chart Example',
                left: 'center',
                textStyle: {
                    fontSize: 17,
                    fontWeight: 500
                },
                subtextStyle: {
                    fontSize: 12
                }
            },

            tooltip: {
                trigger: 'item',
                backgroundColor: 'rgba(0,0,0,0.75)',
                padding: [10, 15],
                textStyle: {
                    fontSize: 13,
                    fontFamily: 'Roboto, sans-serif'
                },
                formatter: "{a} <br/>{b}: {c} ({d}%)"
            },

            legend: {
                orient: 'horizontal',
                bottom: '0%',
                left: 'center',
                data: ['Fruit', 'Vegitable','Grains'],
                itemHeight: 8,
                itemWidth: 8
            },

            series: [{
                name: 'Product Type',
                type: 'pie',
                radius: '70%',
                center: ['50%', '50%'],
                itemStyle: {
                    normal: {
                        borderWidth: 1,
                        borderColor: '#fff'
                    }
                },
                data: [
                    {value: {{$techCandidates}}, name: 'تقني سامي'},
                    {value: {{$lisanceCandidates}}, name: 'ليسانس'},
                    {value: {{$masterCandidates}}, name: 'ماستر'},
                    {value: {{$doctoraCandidates}}, name: 'دكتوراه'}
                ]
            }]
        });
    }
</script>
<script type="text/javascript">
    var pie_basic2_element = document.getElementById('pie_basic2');
    if (pie_basic2_element) {
        var pie_basic2 = echarts.init(pie_basic2_element);
        pie_basic2.setOption({
            color: [
                '#1abc9c','#2ecc71','#3498db','#9b59b6','#34495e',
                '#16a085','#27ae60','#2980b9','#8e44ad','#2c3e50',
                '#f1c40f','#e67e22','#e74c3c','#ecf0f1','#95a5a6',
                '#f39c12','#d35400','#c0392b','#bdc3c7','#7f8c8d'
            ],

            textStyle: {
                fontFamily: 'Roboto, Arial, Verdana, sans-serif',
                fontSize: 13
            },

            title: {
                text: 'Pie Chart Example',
                left: 'center',
                textStyle: {
                    fontSize: 17,
                    fontWeight: 500
                },
                subtextStyle: {
                    fontSize: 12
                }
            },

            tooltip: {
                trigger: 'item',
                backgroundColor: 'rgba(0,0,0,0.75)',
                padding: [10, 15],
                textStyle: {
                    fontSize: 13,
                    fontFamily: 'Roboto, sans-serif'
                },
                formatter: "{a} <br/>{b}: {c} ({d}%)"
            },

            legend: {
                orient: 'horizontal',
                bottom: '0%',
                left: 'center',
                data: ['Fruit', 'Vegitable','Grains'],
                itemHeight: 8,
                itemWidth: 8
            },

            series: [{
                name: 'Product Type',
                type: 'pie',
                radius: '70%',
                center: ['50%', '50%'],
                itemStyle: {
                    normal: {
                        borderWidth: 1,
                        borderColor: '#fff'
                    }
                },
                data: [
                    {value: {{$ouargla1}}, name:  ' مسجل في ورقلة 1 = ' +{{$ouargla1}}},
                    {value: {{$ouargla2}}, name: 'مسجل في ورقلة 2 ='+{{$ouargla2}}},
                    {value: {{$hassi}}, name: ' مسجل في ح.مسعود ='+{{$hassi}}},
                    {value: {{$rwissat}}, name:  'مسجل في الرويسات = '+{{$rwissat}}},
                    {value: {{$sidi}}, name: 'مسجل في س-خويلد ='+{{$sidi}}},
                    {value: {{$ngossa}}, name: 'مسجل في النقوسة ='+{{$ngossa}}},
                    {value: {{$borma}}, name: 'مسجل في البرمة ='+{{$borma}}}
                ]
            }]
        });
    }
</script>
<script type="text/javascript">
    var bars_basic_element = document.getElementById('bars_basic');
    if (bars_basic_element) {
        var bars_basic = echarts.init(bars_basic_element);
        bars_basic.setOption({
            color: ['#3398DB'],
            tooltip: {
                trigger: 'axis',
                axisPointer: {
                    type: 'shadow'
                }
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis: [
                {
                    type: 'category',
                    data: ['تقني سامي', 'ليسانس','ماستر','دكتوراه'],
                    axisTick: {
                        alignWithLabel: true
                    }
                }
            ],
            yAxis: [
                {
                    type: 'value'
                }
            ],
            series: [
                {
                    name: 'Total Products',
                    type: 'bar',
                    barWidth: '20%',
                    data: [
                        {{$ageavragetech}},
                        {{$ageavragelisance}},
                        {{$ageavragematser}},
                        {{$ageavragedoctora}},

                    ]
                }
            ]
        });
    }
</script>
