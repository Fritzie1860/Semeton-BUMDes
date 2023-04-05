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
                            <li><a href="">Data Hutang</a></li>
                            <li class="active">Nota Hutang BUMDes</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

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
                                                        <label class="control-label">Pemasok</label>
                                                        <div class="">
                                                            <input type="text" name="nota" class="form-control"
                                                                disabled="disabled" value="{{ $transaksi->orang->nama }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Hutang</label>
                                                        <div class="">
                                                            <input type="text" name="tanggal" class="form-control"
                                                                disabled="disabled"
                                                                value="{{ $transaksi->hutang->last()->sisa }}">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="m-t-5">
                                                <form class="form" role="form">
                                                    <div class="form-group">
                                                        <label class="control-label">Alamat</label>
                                                        <div class="">
                                                            <input type="text" name="pelanggan" class="form-control"
                                                                disabled="disabled" value="{{ $transaksi->orang->alamat }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Nomor HP</label>
                                                        <div class="">
                                                            <input type="text" name="catatan" class="form-control"
                                                                disabled="disabled" value="{{ $transaksi->orang->kontak }}">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Riwayat Hutang</h3>

                        </div>

                        <div class="panel-body">

                            <table id="datatable-responsive" class="table table-hover table-bordered dt-responsive nowrap"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">No</th>
                                        <th style="text-align: center;">Tanggal Transaksi</th>
                                        <th style="text-align: center;">Total Transaksi</th>
                                        <th style="text-align: center;">Hutang</th>
                                        {{-- <th style="text-align: center;">Aksi</th> --}}
                                    </tr>
                                </thead>


                                <tbody>
                                    @foreach ($transaksi->hutang as $item)
                                        <tr>
                                            <td style="text-align: center;">{{ $loop->iteration }}</td>
                                            <td style="text-align: center;">{{ $item->created_at }}</td>
                                            <td style="text-align: center;">{{ $item->bayar }}</td>
                                            <td style="text-align: center;">{{ $item->sisa }}</td>
                                            {{-- <td style="text-align: center;"><Button class="btn btn-primary">Bayar</Button></td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div> <!-- container -->

    </div> <!-- content -->
    <!-- sample modal content -->
    <div id="bayar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Pembayaran</h4>
                </div>
                <div class="modal-body">
                    <form action="{{ route('hutang.store') }}" method="post" class="form-horizontal" role="form">
                        @csrf

                        <input type="hidden" name="id_transaksi" value="{{ $transaksi->id }}">
                        <input type="hidden" name="sisa_bayar" value="{{ $transaksi->hutang->last()->sisa }}">

                        <div class="form-group">
                            <label class="col-md-2 control-label">Jumlah</label>
                            <div class="col-md-10">
                                <input name="bayar" data-parsley-type="number" type="text" class="form-control"
                                    placeholder="Jumlah" data-parsley-maxlength="8" required />
                            </div>
                        </div>


                        <div class="modal-footer">
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
