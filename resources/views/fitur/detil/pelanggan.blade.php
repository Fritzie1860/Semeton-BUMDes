@extends('app')

@section('content')
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Master Data</a></li>
                            <li><a href="">Pelanggan</a></li>
                            <li class="active">Daftar Hutang</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Daftar Hutang</h3>

                        </div>

                        <div class="panel-body">
                            <div class="row mt-2">

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="container">
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="m-t-5">
                                                <form class="form" role="form">
                                                    <div class="form-group">
                                                        <label class="control-label">Total Hutang</label>
                                                        <div class="">
                                                            <input type="text" class="form-control" disabled="disabled"
                                                                style="font-style: italic; color: red;"
                                                                value="{{ 0 }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Nama Pelanggan</label>
                                                        <div class="">
                                                            <input type="text" class="form-control" disabled="disabled"
                                                                value="{{ $pelanggan->nama }}">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="m-t-5">
                                                <form class="form" role="form">
                                                    <div class="form-group">
                                                        <label class="control-label">Nomor Telepon</label>
                                                        <div class="">
                                                            <input type="text" class="form-control" disabled="disabled"
                                                                value="{{ $pelanggan->kontak }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Alamat Pelanggan</label>
                                                        <div class="">
                                                            <input type="text" class="form-control" disabled="disabled"
                                                                value="{{ $pelanggan->alamat }}">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <!-- <button class="btn btn-primary mb-2 pb-2" style="margin-bottom: 25px" data-toggle="modal" data-target="#tambah"> Tambah Hutang </button> -->
                                    <table id="datatable-responsive"
                                        class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">No</th>
                                                <th style="text-align: center;">Tanggal</th>
                                                <th style="text-align: center;">Nomor Transaksi</th>
                                                <th style="text-align: center;">Nama Usaha</th>
                                                <th style="text-align: center;">Hutang Pelanggan</th>
                                                <th style="text-align: center;">Catatan Transaksi</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="conbtn">
                                                        1
                                                    </div>
                                                </td>
                                                <td>
                                                    2 September 2022
                                                </td>
                                                <td>
                                                    11011101
                                                </td>
                                                <td>
                                                    Ruko BUMDes
                                                </td>
                                                <td>
                                                    Rp200,000
                                                </td>
                                                <td>
                                                    Kurang bayar
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- End Row -->


        </div> <!-- container -->
    </div> <!-- content -->
@endsection
