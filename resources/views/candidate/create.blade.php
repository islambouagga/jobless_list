<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Top Navigation</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
        <div class="container">
            <a href="../../index3.html" class="navbar-brand">
                <img src="{{asset('img/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                     style="opacity: .8">
            </a>
        </div>
    </nav>
    <!-- /.navbar -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- /.content-header -->
        <!-- Trigger the modal with a button -->

        <!-- Main content -->
        <div class="content">
            <div class="row text-right h-100 justify-content-center align-items-center">
                <div class="col-md-6">
                    <h1 class="text-right">??????????????</h1>
                    <p>
                        ?????? ?????????? ?????????? ?????? ?????? ???????? ?????? ???? ?????????????? ?????????????? ?????????? ???? ?????????? ???????????? ???? ?????????????? ?????? ??????????
                        ??????????????
                        ???????? ???? ?????? ???????? ?????????????? ???? ???????????? ???????? ????????????. ?????????? ?????? ?????????????? ?????????? ?????????? ???????????? ?????????? ????????
                        ??????????????
                        ?????????????? -?????? ???? ????- ???????????? ?????????? ???? ?????????????? "?????? ???????? ?????????? ???????? ?????? ???????? ?????????? ??????" ??????????????
                        ???????? (????
                        ????????????) ???????????? ???? ??????????. ???????????? ???? ?????????? ?????????? ?????????????? ???????????? ?????????? ?????????? ?????????? ???????????? ??????????
                        ???????????? ????????
                        ?????????????? ???????????? ???? ?????????? ???????? ?????? ???????????? "lorem ipsum" ???? ???? ???????? ?????? ?????????? ???????????? ???? ??????????????
                        ??????????????
                        ?????????? ???? ?????????? ??????????. ?????? ?????? ???????????? ???????? ?????? ?????????? ?????????????? ???? ???? ?????????? ?????????????? ?????????????? ???? ????????
                        ??????????????
                        ???????????????? ???? ?????? ???????????? ?????? ???????????????? ???????????????? ??????????.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset('svg/fill_form.svg')}}" width="500" height="400">
                </div>

            </div>
            <div class="row  h-100 justify-content-center align-items-center mt-5">
                <div class="col-10">

                    <div class="card card-warning">
                        <!-- /.card-header -->
                        <form action="{{route('candidate.store')}}" method="post" enctype="multipart/form-data">
                            <div class="card-body">

                                @csrf
                                <div class="row d-flex justify-content-start">
                                    <div class="col-sm-3">
                                        <div class="form-group text-right">
                                            <label>?????? ?? ??????????</label>
                                            <input type="text" name="name"
                                                   class="form-control @error('name') is-invalid @enderror"
                                                   placeholder="??????????">
                                            @error('name')
                                            <span class="invalid-feedback">
                                       {{ $message }}
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <!-- textarea -->
                                        <div class="form-group text-right">
                                            <label>?????????? ????????????????</label>
                                            <input type="date"
                                                   class="form-control @error('birthday') is-invalid @enderror"
                                                   name="birthday"
                                                   placeholder="?????????? ????????????????">
                                            @error('birthday')
                                            <span class="invalid-feedback">
                                       {{ $message }}
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div style="margin-right: 2%" class="col-sm-2 text-right">
                                        <!-- radio -->
                                        <label class="">??????????</label>
                                        <div
                                            class="form-group row text-right @error('sexe') is-invalid @enderror "
                                            style="    margin-left: 12.5%;">
                                            <div class="custom-control custom-radio" style="    margin-left: 12.5%;">
                                                <input checked
                                                       class="custom-control-input custom-control-input-danger custom-control-input-outline "
                                                       type="radio" id="customRadio1"
                                                       value="??????" name="sexe">
                                                <label for="customRadio1" class="custom-control-label">??????</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input
                                                    class="custom-control-input custom-control-input-danger custom-control-input-outline "
                                                    type="radio" id="customRadio2"
                                                    value="????????" name="sexe">
                                                <label for="customRadio2" class="custom-control-label">????????</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <!-- textarea -->
                                        <div class="form-group text-right">
                                            <label>???????? ???? ?????????? ?????????????? </label>
                                            <input type="file" name="verification_card"
                                                   class="form-control @error('verification_card') is-invalid @enderror">
                                            @error('verification_card')
                                            <span class="invalid-feedback">
                                       {{ $message }}
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <hr style="border-top: 1px solid #d3d3d7; width:40%">

                                <div class="row d-flex justify-content-start">
                                    <div class="col-sm-4">
                                        <div class="form-group text-right">
                                            <label>?????? ????????????</label>
                                            <input type="text" name="phone"
                                                   class="form-control @error('phone') is-invalid @enderror"
                                                   placeholder="?????? ????????????">
                                            @error('phone')
                                            <span class="invalid-feedback">
                                       {{ $message }}
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <!-- text input -->
                                        <div class="form-group text-right">
                                            <label>?????????????? ??????????</label>
                                            <input type="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email"
                                                   placeholder="?????????????? ??????????">
                                            @error('email')
                                            <span class="invalid-feedback">
                                       {{ $message }}
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <hr style="border-top: 1px solid #d3d3d7; width:40%">

                                <div class="row  d-flex justify-content-start">
                                    <div class="col-sm-4">
                                        <!-- select -->
                                        <div class="form-group text-right">
                                            <label>???????? ?????????????? ??????????????</label>
                                            <select
                                                class="form-control select2 select2-danger  @error('district_id') is-invalid @enderror"
                                                data-dropdown-css-class="select2-danger"
                                                name="district_id" style="width: 100%;">
                                                @foreach($districts as $district)
                                                    <option  value="{{$district->id}}">{{$district->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('district_id')
                                            <span class="invalid-feedback">
                                       {{ $message }}
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <!-- select -->
                                        <div class="form-group text-right">
                                            <label>??????????????</label>
                                            <select class="form-control @error('commune') is-invalid @enderror"
                                                    name="commune">
                                                @foreach (communes($wilaya_id = 30, $withWilaya = true, 'arabic_name') as $id => $commune)
                                                    <option value="{{ $id }}">{{ $commune }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <!-- textarea -->
                                        <div class="form-group text-right">
                                            <label>???????? ???? ???????????? ????????????????\ ??????????</label>
                                            <span class="text-red" style="margin-right: 2%;font-weight: bold">

                                     (?????????????? )
                                            <a class="btn text-red" data-toggle="modal" data-target="#Electricity_bill"><i
                                                    class="fas fa-info-circle"></i></a>
                                    </span>
                                            <input type="file" name="Electricity_bill"
                                                   class="form-control ">

                                        </div>
                                    </div>
                                </div>

                                <hr style="border-top: 1px solid #d3d3d7; width:40%">


                                <div class="row d-flex justify-content-start">
                                    <div class="col-sm-4">
                                        <!-- textarea -->
                                        <div class="form-group text-right">
                                            <label>?????? ???????? ?????????????? </label>
                                            <select id="edit_select"
                                                    class="form-control select2 select2-danger  @error('Anem') is-invalid @enderror"
                                                    data-dropdown-css-class="select2-danger"
                                                    name="Anem" style="width: 100%;">
                                                <option value="?????????? 1">?????????? 1</option>
                                                <option value="?????????? 2">?????????? 2</option>
                                                <option value="??.??????????">??.??????????</option>
                                                <option value="????????????????">????????????????</option>
                                                <option value="??-??????????">??-??????????</option>
                                                <option value="??????????????">??????????????</option>
                                                <option value="????????????">????????????</option>
                                            </select>
                                            @error('Anem')
                                            <span class="invalid-feedback">
                                       {{ $message }}
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <!-- textarea -->
                                        <div class="form-group text-right">
                                            <label>?????? ???????????? </label>
                                            <input type="number"
                                                   class="form-control @error('wassit') is-invalid @enderror"
                                                   name="wassit"
                                                   placeholder="?????? ????????????">
                                            @error('wassit')
                                            <span class="invalid-feedback">
                                       {{ $message }}
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <hr style="border-top: 1px solid #d3d3d7; width:40%">

                                <div class="row d-flex justify-content-start">
                                    <div class="col-sm-4">
                                        <!-- select -->
                                        <div class="form-group text-right">
                                            <label>????????????</label>
                                            <select
                                                class="form-control select2 select2-danger  @error('feild_id') is-invalid @enderror"
                                                data-dropdown-css-class="select2-danger"
                                                name="feild_id" style="width: 100%;">
                                                @foreach($feilds as $feild)
                                                    <option  value="{{$feild->id}}">{{$feild->title}}</option>
                                                @endforeach
                                            </select>
                                            @error('feild_id')
                                            <span class="invalid-feedback">
                                       {{ $message }}
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div style="margin-right: 2%" class="col-sm-4 text-right">
                                        <!-- radio -->
                                        <label class="">?????????????? ??????????????</label> <span class="text-red"
                                                                                      style="margin-right: 8%;font-weight: bold">

                                     ???????? ?????????????? ???????????? ??????????????.

                                    </span>
                                        <div
                                            class="form-group row text-right @error('Study_level') is-invalid @enderror ">
                                            <div class="custom-control custom-radio" style="margin-left: 9.5%;">
                                                <input
                                                    class="custom-control-input custom-control-input-danger custom-control-input-outline "
                                                    type="radio" id="customRadio3"
                                                    value="???????? ????????" name="Study_level">
                                                <label for="customRadio3" class="custom-control-label">???????? ????????</label>
                                            </div>
                                            <div class="custom-control custom-radio" style="margin-left: 9.5%;">
                                                <input
                                                    class="custom-control-input custom-control-input-danger custom-control-input-outline "
                                                    type="radio" id="customRadio4"
                                                    value="????????????" name="Study_level">
                                                <label for="customRadio4" class="custom-control-label">????????????</label>
                                            </div>
                                            <div class="custom-control custom-radio" style="margin-left: 9.5%;">
                                                <input
                                                    class="custom-control-input custom-control-input-danger custom-control-input-outline "
                                                    type="radio" id="customRadio5"
                                                    value="??????????" name="Study_level">
                                                <label for="customRadio5" class="custom-control-label">??????????</label>
                                            </div>
                                            <div class="custom-control custom-radio" style="margin-left: -9.5%;">
                                                <input
                                                    class="custom-control-input custom-control-input-danger custom-control-input-outline "
                                                    type="radio"
                                                    id="customRadio6" value="??????????????" name="Study_level">
                                                <label for="customRadio6" class="custom-control-label">??????????????</label>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <!-- textarea -->
                                        <div class="form-group text-right ">
                                            <label>???????? ???? ??????????????\ ????????????????</label>
                                            <span class="text-red" style="margin-right: 2%;font-weight: bold">

                                     (?????????????? )
                                        <a class="btn text-red" data-toggle="modal" data-target="#Certificate"><i
                                                class="fas fa-info-circle"></i></a>
                                    </span>
                                            <input type="file" name="Certificate"
                                                   class="form-control ">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-default btn-lg float-right"
                                        style="background-color: #D14149; color: #ffffff">??????????
                                </button>
                                <a type="button" href="/"  class="btn btn-default btn-lg ">??????????</a>
                            </div>
                        </form>
                    </div>


                </div>
            </div>

        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Modal -->
    <div id="Electricity_bill" class="modal fade " role="dialog" style="direction: rtl">
        <div class="modal-dialog modal-dialog-centered  ">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-right">?????????? ???????? ???? ???????????? ????????????????\ ??????????</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div id="Certificate" class="modal fade " role="dialog" style="direction: rtl">
        <div class="modal-dialog modal-dialog-centered  ">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-right">?????????? ???????? ???? ??????????????\ ????????????????</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('sweetalert::alert')
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
        $('#edit_select').select2({
            theme: 'bootstrap4',
            dropdownParent: $("edit_modal_branch"),
            ajax: ajaxSelect2
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'})
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', {'placeholder': 'mm/dd/yyyy'})
        //Money Euro
        $('[data-mask]').inputmask()

        //Date picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });

        //Date and time picker
        $('#reservationdatetime').datetimepicker({icons: {time: 'far fa-clock'}});

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
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
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

        $('.my-colorpicker2').on('colorpickerChange', function (event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        })

        $("input[data-bootstrap-switch]").each(function () {
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

    myDropzone.on("addedfile", function (file) {
        // Hookup the start button
        file.previewElement.querySelector(".start").onclick = function () {
            myDropzone.enqueueFile(file)
        }
    })

    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function (progress) {
        document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
    })

    myDropzone.on("sending", function (file) {
        // Show the total progress bar when upload starts
        document.querySelector("#total-progress").style.opacity = "1"
        // And disable the start button
        file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
    })

    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("queuecomplete", function (progress) {
        document.querySelector("#total-progress").style.opacity = "0"
    })

    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
    document.querySelector("#actions .start").onclick = function () {
        myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
    }
    document.querySelector("#actions .cancel").onclick = function () {
        myDropzone.removeAllFiles(true)
    }
    // DropzoneJS Demo Code End
</script>
</body>
</html>

