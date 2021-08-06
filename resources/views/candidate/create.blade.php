<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Top Navigation</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="{{asset('plugins/bs-stepper/css/bs-stepper.min.css')}}}">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="{{asset('plugins/dropzone/min/dropzone.min.css')}}">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
        <div class="container">
            <a href="../../index3.html" class="navbar-brand">
                <img src="{{asset('img/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            </a>
        </div>
    </nav>
    <!-- /.navbar -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
    <div class="row text-right h-100 justify-content-center align-items-center">
        <div class="col-md-4">
            <img src="{{asset('svg/fill_form.svg')}}" width="500" height="400">
        </div>
        <div class="col-md-6">
            <h1 class="text-right">استمارة</h1>
            <p>
                ناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي
                للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ
                طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي
                الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل
                إفتراضي كنموذج عن النص، وإذا قمت بإدخال "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة
                العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة،
                وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.
            </p>
        </div>
    </div>
    <div class="row  h-100 justify-content-center align-items-center mt-5">
        <div class="col-10">

            <div class="card card-warning">
                <!-- /.card-header -->
                <form action="{{route('candidate.store')}}" method="post" enctype="multipart/form-data">
                <div class="card-body">

                        @csrf
                        <div class="row">
                            <div class="col-sm-4">
                                <!-- text input -->
                                <div class="form-group text-right">
                                    <label>الايميل الخاص</label>
                                    <input type="email" class="form-control" name="email" placeholder="الايميل الخاص">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group text-right">
                                    <label>رقم الهاتف</label>
                                    <input type="text" name="phone" class="form-control" placeholder="رقم الهاتف">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group text-right">
                                    <label>اسم و اللقب</label>
                                    <input type="text" name="name" class="form-control" placeholder="اللقب">
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <!-- textarea -->
                                <div class="form-group text-right">
                                    <label>نسخة من بطاقة التعريف </label>
                                    <input type="file" name="verification_card" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <!-- textarea -->
                                <div class="form-group text-right">
                                    <label>مكان الازدياد</label>
                                    <input type="text" class="form-control" name="birthplace" placeholder="مكان الازدياد">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <!-- textarea -->
                                <div class="form-group text-right">
                                    <label>تاريخ الإزدياد</label>
                                    <input type="date" class="form-control" name="birthday" placeholder="تاريخ الإزدياد">

                                </div>


                            </div>
                            <div class="row">
                            </div>    <div class="col-sm-4">
                                <!-- textarea -->
                                <div class="form-group text-right">
                                    <label>نسخة من فاتورة الكهرباء\ الماء</label>
                                    <input type="file" name="Electricity_bill" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <!-- select -->
                                <div class="form-group text-right">
                                    <label>البلدية</label>
                                    <select class="form-control" name="commune">
                                        @foreach (communes($wilaya_id = 30, $withWilaya = true, 'arabic_name') as $id => $commune)
                                            <option value="{{ $id }}">{{ $commune }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group text-right">
                                    <label>مكان الإقامة الحالية</label>
                                    <input type="text" class="form-control" name="residence" placeholder="الإقامة الحالية">
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <!-- textarea -->
                                <div class="form-group text-right">
                                    <label>نسخة من الشهادة\ الديبلوم</label>
                                    <input type="file" name="Certificate" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4 text-right">
                                <!-- radio -->
                                <label class="">المستوى الدراسي</label>
                                <div class="form-group row text-right " style="    margin-left: 40%;">
                                    <div class="custom-control custom-radio" style="    margin-left: -50%;">
                                        <input class="custom-control-input" type="radio"  id="customRadio1"
                                            value="تقني سامي"   name="Study_level">
                                        <label for="customRadio1" class="custom-control-label">تقني سامي</label>
                                    </div>
                                    <div class="custom-control custom-radio" style="    margin-left: 12.5%;">
                                        <input class="custom-control-input" type="radio" id="customRadio2"
                                               value="ليسانس"   name="Study_level" checked>
                                        <label for="customRadio2" class="custom-control-label">ليسانس</label>
                                    </div>
                                    <div class="custom-control custom-radio" style="    margin-left: 12.5%;">
                                        <input class="custom-control-input" type="radio" id="customRadio3"
                                               value="ماستر"   name="Study_level">
                                        <label for="customRadio3" class="custom-control-label">ماستر</label>
                                    </div>
                                    <div class="custom-control custom-radio" style="margin-left: 12.5%;">
                                        <input class="custom-control-input custom-control-input-danger" type="radio"
                                               id="customRadio4" value="دكتوراه"   name="Study_level">
                                        <label for="customRadio4" class="custom-control-label">دكتوراه</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <!-- select -->
                                <div class="form-group text-right">
                                    <label>التخصص</label>
                                    <select class="form-control select2 " name="field" style="width: 100%;">
                                        <option selected="selected" value="الصيدلة">الصيدلة</option>
                                        <option value="محروقات">محروقات</option>
                                        <option value="الهندسة البيوطبية">الهندسة البيوطبية</option>
                                        <option value="كمياء">كمياء</option>
                                        <option value="بصريات و ميكانيك الضبط"> بصريات و ميكانيك الضبط</option>
                                        <option value="الهندسة البحرية">الهندسة البحرية</option>
                                        <option value="تعدين">تعدين</option>
                                        <option value="ري">ري</option>
                                        <option value="الطب">الطب</option>
                                        <option value="اتصالات سلكية و لا سلكية">اتصالات سلكية و لا سلكية</option>
                                        <option value="جيولوجيا و محيط">جيولوجيا و محيط</option>
                                        <option value="كهروميكانيك">كهروميكانيك</option>
                                        <option value="علوم التمريض">علوم التمريض</option>
                                        <option value="جيومتر طوبوغراف">جيومتر طوبوغراف</option>
                                        <option value="مناجم">مناجم</option>
                                        <option value="علوم فلاحية">علوم فلاحية</option>
                                        <option value="هندسة الطرائق">هندسة الطرائق</option>
                                        <option value="هندسة صناعية">هندسة صناعية</option>
                                        <option value="العلوم الإسلامية">العلوم الإسلامية</option>
                                        <option value="علوم البيطرة">علوم البيطرة</option>
                                        <option value="علوم سياسية">علوم سياسية</option>
                                        <option value="تكنولوجيا">تكنولوجيا</option>
                                        <option value="حقوق">حقوق</option>
                                        <option value="نظافة و أمن صناعي">نظافة و أمن صناعي</option>
                                        <option value="أشغال عمومية">أشغال عمومية</option>
                                        <option value="الطيران">الطيران</option>
                                        <option value="طب الأسنان">طب الأسنان</option>
                                        <option value="ميدان تكوين فنون">ميدان تكوين فنون</option>
                                        <option value="بيولوجيا وتكنولوجيا تربية النحل">بيولوجيا وتكنولوجيا تربية النحل</option>
                                        <option value="تسيير المؤسسات و الإدارات">تسيير المؤسسات و الإدارات</option>
                                        <option value=" طاقات متجددة"> طاقات متجددة</option>
                                        <option value="كهروتقني"> كهروتقني</option>
                                        <option value="هندسة المياه">هندسة المياه</option>
                                        <option value="هندسة المبلورات">هندسة المبلورات</option>
                                        <option value="لغة و ثقافة أمازيغية">لغة و ثقافة أمازيغية</option>
                                        <option value="تغذية و تكنولوجيا زراعية غذائية">تغذية و تكنولوجيا زراعية غذائية</option>
                                        <option value="الهندسة الميكانيكية">الهندسة الميكانيكية</option>
                                        <option value="تسيير التقنيات الحضرية">تسيير التقنيات الحضرية</option>
                                        <option value="علوم و تقنيات النشاطات البدنية و الرياضية">علوم و تقنيات النشاطات البدنية و الرياضية</option>
                                        <option value="علوم اقتصادية التسيير و ع.تجارية">علوم اقتصادية التسيير و ع.تجارية</option>
                                        <option value="علوم إنسانية">علوم إنسانية</option>
                                        <option value="علوم الطبيعة و الحياة">علوم الطبيعة و الحياة</option>
                                        <option value="اللغات الأجنبية">اللغات الأجنبية</option>
                                        <option value="صناعات بتروكميائية">صناعات بتروكميائية</option>
                                        <option value="الهندسة المعمارية و العمران">الهندسة المعمارية و العمران</option>
                                        <option value="هندسة كهربائية">هندسة كهربائية</option>
                                        <option value="الكترونيك"> الكترونيك</option>
                                        <option value="تغليف و جودة">تغليف و جودة</option>
                                        <option value="علم النفس العيادي">علم النفس العيادي</option>
                                        <option value="قيادة عملياتية للمشاريع">قيادة عملياتية للمشاريع</option>
                                        <option value="علوم البيئة و المحيط"> علوم البيئة و المحيط</option>
                                        <option value="علوم الغابات">علوم الغابات</option>
                                        <option value="رياضيات">رياضيات</option>
                                        <option value="إعلام آلي">إعلام آلي</option>
                                        <option value="تخصص ترجمة">تخصص ترجمة</option>
                                        <option value="علوم المادة">علوم المادة</option>
                                        <option value="علوم اجتماعية">علوم اجتماعية</option>
                                        <option value="علوم الأرض و الكون">علوم الأرض و الكون</option>
                                        <option value="الهندسة المدنية">الهندسة المدنية</option>
                                        <option value="طب الأسنان">طب الأسنان</option>
                                        <option value="لغة و أدب عربي<">لغة و أدب عربي</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-default float-right" style="background-color: #D14149; color: #ffffff">إرسال</button>
                    <button type="button" class="btn btn-default ">إلغاء</button>
                </div>
                </form>
            </div>


        </div>
    </div>

    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('dist/js/demo.js')}}"></script>
    <!-- bs-custom-file-input -->
    <script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <!-- Select2 -->
    <script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="{{asset('plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
    <!-- InputMask -->
    <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('plugins/inputmask/jquery.inputmask.min.js')}}"></script>
    <!-- date-range-picker -->
    <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- bootstrap color picker -->
    <script src="{{asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Bootstrap Switch -->
    <script src="{{asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
    <!-- BS-Stepper -->
    <script src="{{asset('plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
    <!-- dropzonejs -->
    <script src="{{asset('plugins/dropzone/min/dropzone.min.js')}}"></script>
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker(
                {
                    ranges   : {
                        'Today'       : [moment(), moment()],
                        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate  : moment()
                },
                function (start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function(){
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function () {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
    </script>
    </body>
    </html>

