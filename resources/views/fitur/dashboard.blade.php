@extends('app')

@section('css')
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href={{ asset('plugins/morris/morris.css') }}>
@endsection

@section('content')
    <!-- Start right Content here -->


    <!-- Start content -->
    <div class="content">
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Dashboard</h4>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- BAR Chart -->
                <div class="col-lg-6">
                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Pendapatan </h3>
                        </div>
                        <div class="panel-body">
                            <div id="morris-line-example" style="height: 300px"></div>
                        </div>
                    </div>
                </div> <!-- col -->

                <!--  Line Chart -->
                <div class="col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Unit Usaha</h3>

                        </div>

                        <div class="panel-body">
                            <div class="row mt-2" style="min-height: 300px">
                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                    <table class="table table-hover table-bordered nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">No</th>
                                                <th style="text-align: center;">Nama Usaha</th>
                                                <th style="text-align: center;">Jenis Usaha</th>
                                                <th style="text-align: center;">Akumulasi Penghasilan</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    Homestay BUMDes
                                                </td>
                                                <td>
                                                    Jasa
                                                </td>
                                                <td>
                                                    Rp2000000
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    Ruko BUMDes
                                                </td>
                                                <td>
                                                    Dagang
                                                </td>
                                                <td>
                                                    Rp3040000
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div> <!-- col -->
            </div> <!-- End row-->
            <hr>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="panel panel-primary text-center">
                        <div class="panel-heading">
                            <h4 class="panel-title">Hutang Pelanggan pada Usaha Jasa</h4>
                        </div>
                        <div class="panel-body">
                            <h3 class=""><b>Rp568000</b></h3>
                            {{-- <p class="text-muted"><b>48%</b> From Last 24 Hours</p> --}}
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="panel panel-primary text-center">
                        <div class="panel-heading">
                            <h4 class="panel-title">Hutang BUMDes pada Usaha Jasa</h4>
                        </div>
                        <div class="panel-body">
                            <h3 class=""><b>Rp368000</b></h3>
                            {{-- <p class="text-muted"><b>15%</b> Orders in Last 10 months</p> --}}
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="panel panel-primary text-center">
                        <div class="panel-heading">
                            <h4 class="panel-title">Pembayaran Beban Usaha Jasa</h4>
                        </div>
                        <div class="panel-body">
                            <h3 class=""><b>Rp248000</b></h3>
                            {{-- <p class="text-muted"><b>65%</b> From Last 24 Hours</p> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="panel panel-primary text-center">
                        <div class="panel-heading">
                            <h4 class="panel-title">Hutang Pelanggan pada Usaha Dagang</h4>
                        </div>
                        <div class="panel-body">
                            <h3 class=""><b>Rp256000</b></h3>
                            {{-- <p class="text-muted"><b>48%</b> From Last 24 Hours</p> --}}
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="panel panel-primary text-center">
                        <div class="panel-heading">
                            <h4 class="panel-title">Hutang BUMDes pada Usaha Dagang</h4>
                        </div>
                        <div class="panel-body">
                            <h3 class=""><b>Rp365000</b></h3>
                            {{-- <p class="text-muted"><b>15%</b> Orders in Last 10 months</p> --}}
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="panel panel-primary text-center">
                        <div class="panel-heading">
                            <h4 class="panel-title">Pembayaran Beban Usaha Dagang</h4>
                        </div>
                        <div class="panel-body">
                            <h3 class=""><b>Rp254000</b></h3>
                            {{-- <p class="text-muted"><b>65%</b> From Last 24 Hours</p> --}}
                        </div>
                    </div>
                </div>
            </div>


        </div> <!-- container -->

    </div> <!-- content -->
@endsection

@section('script')
    <!--Morris Chart-->
    <script src={{ asset('plugins/morris/morris.min.js') }}></script>
    <script src={{ asset('plugins/raphael/raphael-min.js') }}></script>
    <script src={{ asset('pages/morris.init.js') }}></script>
@endsection
