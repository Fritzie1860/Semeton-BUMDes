@extends('app')

@section('content')
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <ol class="breadcrumb pull-right">
                            {{-- <li><a href="#">Transaksi Jasa</a></li> --}}
                            <li><a href="{{ route('get.datahutang') }}">Data Hutang</a></li>
                            <li class="active">Nota Hutang Pelanggan</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Nota Hutang</h3>

                        </div>

                        <div class="panel-body">
                            <div class="row mt-2">

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="container">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="m-t-5">
                                                <form class="form" role="form">
                                                    <div class="form-group">
                                                        <label class="control-label">Nama Pelanggan</label>
                                                        <div class="">
                                                            <input type="text" name="nota" class="form-control"
                                                                disabled="disabled" value="{{ 'Halo' }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Hutang</label>
                                                        <div class="">
                                                            <input type="text" name="tanggal" class="form-control"
                                                                disabled="disabled" value="{{ 5000 }}">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="m-t-5">
                                                <form class="form" role="form">
                                                    <div class="form-group">
                                                        <label class="control-label">Alamat</label>
                                                        <div class="">
                                                            <input type="text" name="pelanggan" class="form-control"
                                                                disabled="disabled" value="Desa kuta">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">No Hp</label>
                                                        <div class="">
                                                            <input type="text" name="catatan" class="form-control"
                                                                disabled="disabled" value="084896857490">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            {{-- <div class="row mt-2">
                                <div class="col-md-8">
                                    <label class="col-md-3 control-label">Total Transaksi</label>
                                    <div class="col-md-5">
                                        <input id="totaltr" name="totaltransaksi" data-parsley-type="number"
                                            type="text" disabled="disabled" class="form-control" placeholder="0"
                                            value="" required>
                                    </div>
                                </div>
                                <div class="col-md-8 m-t-5">
                                    <label class="col-md-3 control-label">Dibayarkan</label>
                                    <div class="col-md-5">
                                        <input id="totalbyr" data-parsley-type="number" type="text" class="form-control"
                                            placeholder="Total Pelanggan Membayar" required>
                                    </div>

                                    <button class="btn btn-primary center m-l-5" style="display: inline;"
                                        data-target="#bayar" onclick="bayar()">Bayar</button>
                                </div>
                            </div>
                            <div style="width: 50%;">
                                <hr style="border-color: black;">
                            </div>


                            <div class="row mt-2">
                                <div class="col-md-8">
                                    <label class="col-md-3 control-label">Sisa </label>
                                    <div class="col-md-5">
                                        <input id="hasil" data-parsley-type="number" type="text"
                                            disabled="disabled" class="form-control" placeholder="0" value="0"
                                            required>
                                    </div>

                                    <button class="btn btn-primary center m-l-5" style="display: inline;"
                                        data-target="#bayar" onclick="">Simpan</button>
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>

            </div> <!-- End Row -->
            <div class="row">

                <div class="col-md-12">
                    <button class="btn btn-primary mb-2 pb-2" style="margin-bottom: 25px" data-toggle="modal"
                        data-target="#bayar">
                        Bayar </button>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"> Riwayat Hutang</h3>

                        </div>

                        <div class="panel-body">

                            <table id="datatable-responsive" class="table table-hover table-bordered dt-responsive nowrap"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">No</th>
                                        <th style="text-align: center;">No Transaksi</th>
                                        <th style="text-align: center;">Tanggal Transaksi</th>
                                        <th style="text-align: center;">Total Transaksi</th>
                                        <th style="text-align: center;">Hutang</th>
                                        {{-- <th style="text-align: center;">Aksi</th> --}}
                                    </tr>
                                </thead>


                                <tbody>

                                    <tr>
                                        <td style="text-align: center;">1</td>
                                        <td style="text-align: center;">14045</td>
                                        <td style="text-align: center;">03 Desember 2022</td>
                                        <td style="text-align: center;">70000</td>
                                        <td style="text-align: center;">25000</td>
                                        {{-- <td style="text-align: center;"><Button class="btn btn-primary">Bayar</Button></td> --}}
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"> Riwayat Bayar</h3>

                        </div>

                        <div class="panel-body">
                            <table id="datatable-responsive2" class="table table-hover table-bordered dt-responsive nowrap"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">No</th>
                                        <th style="text-align: center;">No Transaksi</th>
                                        <th style="text-align: center;">Tanggal Transaksi</th>
                                        <th style="text-align: center;">Total Transaksi</th>
                                        <th style="text-align: center;">Sisa Hutang</th>
                                        {{-- <th style="text-align: center;">Aksi</th> --}}
                                    </tr>
                                </thead>


                                <tbody>

                                    <tr>
                                        <td style="text-align: center;">1</td>
                                        <td style="text-align: center;">14045</td>
                                        <td style="text-align: center;">05 Desember 2022</td>
                                        <td style="text-align: center;">20000</td>
                                        <td style="text-align: center;">5000</td>
                                        {{-- <td style="text-align: center;"><Button class="btn btn-primary">Bayar</Button></td> --}}
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>




            </div>


        </div> <!-- container -->

    </div> <!-- content -->

    <!-- sample modal content -->
    <div id="bayar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Pembayaran</h4>
                </div>
                <div class="modal-body">
<<<<<<< HEAD
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Jumlah</label>
                            <div class="col-md-10">
                                <input name="kode" data-parsley-type="number" type="text" class="form-control"
=======
                    <form action="{{ route('hutang.store') }}" method="post" class="form-horizontal" role="form">
                        @csrf

                        <input type="hidden" name="id_transaksi" value="{{ $transaksi->id }}">
                        <input type="hidden" name="sisa_bayar" value="{{ $transaksi->hutang->last()->sisa }}">

                        <div class="form-group">
                            <label class="col-md-2 control-label">Jumlah</label>
                            <div class="col-md-10">
                                <input name="bayar" data-parsley-type="number" type="text" class="form-control"
>>>>>>> 4672e1bc9f215af5956cf02356c04364b2bdd3c0
                                    placeholder="Jumlah" data-parsley-maxlength="8" required />
                            </div>
                        </div>


                        <div class="modal-footer">
<<<<<<< HEAD

=======
>>>>>>> 4672e1bc9f215af5956cf02356c04364b2bdd3c0
                            <button type="button" class="btn btn-default waves-effect"
                                data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                        </div>
                    </form>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

@section('script')
    <script>
        function bayar() {
            totaltr = document.getElementById("totaltr").value;
            totalbyr = document.getElementById("totalbyr").value;
            document.getElementById("hasil").value = totalbyr - totaltr;
        }

        function edit_data(data, id) {
            document.getElementById("edit_id").value = id;
            document.getElementById("edit_jenis").value = data['jenis'];
            document.getElementById("edit_harga").value = data['harga'];
            document.getElementById("edit_jumlah").value = data['jumlah'];
        }
    </script>
@endsection
