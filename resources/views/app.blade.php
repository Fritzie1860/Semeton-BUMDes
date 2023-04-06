<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Semeton BUMDes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href={{ asset('images/favicon.ico') }}>
    {{-- <link rel="shortcut icon" href="/images/favicon.png"> --}}
    {{-- <link rel="icon" href={{ asset('images/favicon.png') }}> --}}

    <!-- DataTables -->
    <link href={{ asset('plugins/datatables/jquery.dataTables.min.css') }} rel="stylesheet" type="text/css" />
    <link href={{ asset('plugins/datatables/responsive.bootstrap.min.css') }} rel="stylesheet" type="text/css" />
    <link href={{ asset('plugins/datatables/dataTables.bootstrap.min.css') }} rel="stylesheet" type="text/css" />

    {{-- date picker --}}
    <link href={{ asset("plugins/timepicker/bootstrap-timepicker.min.css") }} rel="stylesheet">
    <link href={{ asset("plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css") }} rel="stylesheet">
    <link href={{ asset("plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css") }} rel="stylesheet">
    <link href={{ asset("plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css") }} rel="stylesheet" />



    <link href={{ asset('css/bootstrap.min.css') }} rel="stylesheet" type="text/css">
    <link href={{ asset('css/icons.css') }} rel="stylesheet" type="text/css">
    <link href={{ asset('css/style.css') }} rel="stylesheet" type="text/css">

    @yield('css');

</head>


<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        @include('template.header')

        @include('template.sidebar')




        <div class="content-page">

            @yield('content') {{-- //konten --}}
            @include('template.footer')
        </div>

    </div>
    <!-- END wrapper -->


    <!-- jQuery  -->
    <script src={{ asset('js/jquery.min.js') }}></script>
    <script src={{ asset('js/bootstrap.min.js') }}></script>
    <script src={{ asset('js/modernizr.min.js') }}></script>
    <script src={{ asset('js/detect.js') }}></script>
    <script src={{ asset('js/fastclick.js') }}></script>
    <script src={{ asset('js/jquery.slimscroll.js') }}></script>
    <script src={{ asset('js/jquery.blockUI.js') }}></script>
    <script src={{ asset('js/waves.js') }}></script>
    <script src={{ asset('js/wow.min.js') }}></script>
    <script src={{ asset('js/jquery.nicescroll.js') }}></script>
    <script src={{ asset('js/jquery.scrollTo.min.js') }}></script>

    <script src={{ asset('plugins/jquery-sparkline/jquery.sparkline.min.js') }}></script>


    <!-- Datatables-->
    <script src={{ asset('plugins/datatables/jquery.dataTables.min.js') }}></script>
    <script src={{ asset('plugins/datatables/dataTables.bootstrap.js') }}></script>
    <script src={{ asset('plugins/datatables/dataTables.buttons.min.js') }}></script>
    <script src={{ asset('plugins/datatables/buttons.bootstrap.min.js') }}></script>
    <script src={{ asset('plugins/datatables/jszip.min.js') }}></script>
    <script src={{ asset('plugins/datatables/pdfmake.min.js') }}></script>
    <script src={{ asset('plugins/datatables/vfs_fonts.js') }}></script>
    <script src={{ asset('plugins/datatables/buttons.html5.min.js') }}></script>
    <script src={{ asset('plugins/datatables/buttons.print.min.js') }}></script>
    <script src={{ asset('plugins/datatables/dataTables.fixedHeader.min.js') }}></script>
    <script src={{ asset('plugins/datatables/dataTables.keyTable.min.js') }}></script>
    <script src={{ asset('plugins/datatables/dataTables.responsive.min.js') }}></script>
    <script src={{ asset('plugins/datatables/responsive.bootstrap.min.js') }}></script>
    <script src={{ asset('plugins/datatables/dataTables.scroller.min.js') }}></script>

    {{-- sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

    <!-- Datatable init js -->
    <script src={{ asset('pages/datatables.init.js') }}></script>

    <script src={{ asset('pages/dashborad.js') }}></script>

    <script src={{ asset('js/app.js') }}></script>

    <!-- Parsleyjs -->
    <script type="text/javascript" src="plugins/parsleyjs/parsley.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>

    <!-- Plugins js -->
    <script src={{ asset('plugins/timepicker/bootstrap-timepicker.js') }}></script>
    <script src={{ asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}></script>
    <script src={{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}></script>
    <script src={{ asset('plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }} type="text/javascript"></script>
    <script src={{ asset('plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }} type="text/javascript"></script>

    <!-- Plugins Init js -->
    <script src={{ asset('pages/form-advanced.js') }}></script>
    
    <script>
        function validateFile() {
            var input = document.getElementById("file");
            if (input.files.length > 0) {
                var file = input.files[0];
                if (file.type.match(/image\/.*/)) {
                    if (file.size <= (1048576 * 2)) {
                        // file is a valid image and its size is under 1MB
                    } else {
                        // alert("Ukuran file terlalu besar. Maksimum ukuran 2MB.");
                        Swal.fire({
                        title: "File Anda terlalu besar",
                        text: "Ukuran gambar tidak boleh lebih dari 2MB",
                        icon: "warning",
                        // showCancelButton: true,
                        // confirmButtonColor: "#3085d6",
                        // cancelButtonColor: "#d33",
                        confirmButtonText: "Baiklah"
                    })
                    }
                } else {
                    // alert("Tipe file tidak valid, tolong masukan file gambar.");
                    Swal.fire({
                        title: "Format file salah",
                        text: "Harap masukkan file berupa gambar",
                        icon: "warning",
                        // showCancelButton: true,
                        // confirmButtonColor: "#3085d6",
                        // cancelButtonColor: "#d33",
                        confirmButtonText: "Baiklah"
                    })
                }
            } else {
                alert("Harap memilih file.");
            }
        }
    </script>
    <script>
        function store(){
            
        }
    </script>

    @yield('script')
</body>

</html>