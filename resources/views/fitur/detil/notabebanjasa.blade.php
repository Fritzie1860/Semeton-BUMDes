@extends('app')

@section('content')
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Transaksi Jasa</a></li>
                            <li><a href="{{ route('get.bebanjasa') }}">Beban</a></li>
                            <li class="active">Nota Transaksi Beban</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Nota Transaksi</h3>

                        </div>

                        <div class="panel-body">
                            <div class="row mt-2">

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="container">
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="m-t-5">
                                                <form class="form" role="form">
                                                    <div class="form-group">
                                                        <label class="control-label">Nomor Transaksi</label>
                                                        <div class="">
                                                            <input type="text" name="nota" class="form-control"
                                                                disabled="disabled" value="{{ 001 }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Tanggal Transaksi</label>
                                                        <div class="">
                                                            <input type="text" name="tanggal" class="form-control"
                                                                disabled="disabled"
                                                                value="{{ $bebanjasa[$loc]['tanggal'] }}">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="m-t-5">
                                                <form class="form" role="form">
                                                    <div class="form-group">
                                                        <label class="control-label">Nama Transaksi Beban</label>
                                                        <div class="">
                                                            <input type="text" name="namabeban" class="form-control"
                                                                disabled="disabled"
                                                                value="{{ $bebanjasa[$loc]['namabeban'] }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Catatan Transaksi</label>
                                                        <div class="">
                                                            <input type="text" name="catatan" class="form-control"
                                                                disabled="disabled"
                                                                value="{{ $bebanjasa[$loc]['catatan'] }}">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <button class="btn btn-primary mb-2 pb-2" style="margin-bottom: 25px"
                                        data-toggle="modal" data-target="#tambah"> Tambah Transaksi </button>
                                    <table id="datatable-responsive"
                                        class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">No</th>
                                                <th style="text-align: center;">Nama/Jenis Beban</th>
                                                <th style="text-align: center;">Harga</th>
                                                <th style="text-align: center;">Jumlah</th>
                                                <th style="text-align: center;">Total Harga</th>
                                                <th style="text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>


                                        <tbody>


                                            @isset($data[$loc]['nota'])
                                                @foreach ($data[$loc]['nota'] as $item)
                                                    <tr>
                                                        <td>
                                                            <div class="conbtn">
                                                                {{ $loop->index + 1 }}
                                                            </div>
                                                        </td>
                                                        <td>
                                                            {{ $data == null ? 'kosong' : $item['jenis'] }}
                                                        </td>
                                                        <td>
                                                            {{ $data == null ? 'kosong' : $item['harga'] }}
                                                        </td>
                                                        <td>
                                                            {{ $data == null ? 'kosong' : $item['jumlah'] }}
                                                        </td>
                                                        <td>

                                                            {{ $item['total'] }}

                                                        </td>
                                                        <td>
                                                            <div class="conbtn">
                                                                <button class="btn btn-primary center fa fa-edit"
                                                                    data-toggle="modal" data-target="#edit"
                                                                    onclick='edit_data(@json($item),{{ $loop->index }})'></button>
                                                                <button class="btn btn-danger center fa fa-trash"
                                                                    style="margin-left: 2%"></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset

                                        </tbody>
                                    </table>
                                </div>


                            </div>
                            <hr>

                            <div class="row mt-2">
                                <div class="col-md-8">
                                    <label class="col-md-3 control-label">Total Transaksi</label>
                                    <div class="col-md-5">
                                        <input id="totaltr" name="totaltransaksi" data-parsley-type="number"
                                            type="text" disabled="disabled" class="form-control" placeholder="0"
                                            value="{{ $total }}" required>
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



                            <div class="col-md-8">
                                <label class="col-md-3 control-label">Sisa </label>
                                <div class="col-md-5">
                                    <input id="hasil" data-parsley-type="number" type="text" disabled="disabled"
                                        class="form-control" placeholder="0" value="0" required>
                                </div>

                                <button class="btn btn-primary center m-l-5" style="display: inline;"
                                    data-target="#bayar" onclick="">Simpan</button>
                            </div>

                        </div>
                    </div>
                </div>

            </div> <!-- End Row -->


        </div> <!-- container -->

    </div> <!-- content -->

    <!-- sample modal content -->
    <div id="tambah" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Beban</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('post.notabebanjasa') }}" class="form-horizontal"
                        role="form">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Jenis Beban</label>
                            <div class="col-sm-8">
                                <select name="jenis" class="form-control" required>

                                    <option value="Listrik Toko A">Listrik Toko A</option>
                                    <option value="Air PAM Toko B">Air PAM Toko B</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Harga</label>
                            <div class="col-md-8">
                                <input name="harga" data-parsley-type="number" type="text" class="form-control"
                                    placeholder="Harga Beban" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Jumlah</label>
                            <div class="col-md-8">
                                <input name="jumlah" data-parsley-type="number" type="text" class="form-control"
                                    placeholder="Jumlah Beban" required>
                            </div>
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-default waves-effect m-l-5"
                                data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                        </div>
                    </form>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- sample modal content -->
    <div id="edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Edit Nota Transaksi Jasa</h4>
                </div>
                <div class="modal-body">
                    <form action="{{ route('post.editnotabebanjasa') }}" method="POST" class="form-horizontal"
                        role="form" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" id="edit_id">

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Jenis Usaha Jasa</label>
                            <div class="col-sm-8">
                                <select id="edit_jenis" name="jenis" class="form-control" required>

                                    <option value="Listrik Toko A">Listrik Toko A</option>
                                    <option value="Air PAM Toko B">Air PAM Toko B</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Harga</label>
                            <div class="col-md-8">
                                <input name="harga" data-parsley-type="number" type="text" class="form-control"
                                    placeholder="Harga Jasa" id="edit_harga" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Jumlah</label>
                            <div class="col-md-8">
                                <input name="jumlah" data-parsley-type="number" type="text" class="form-control"
                                    placeholder="Jumlah atau Berapa Kali Jasa" id="edit_jumlah" required>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect m-l-5"
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
            // document.getElementById("edit_jenis").value = data['jenis'];
            document.getElementById("edit_harga").value = data['harga'];
            document.getElementById("edit_jumlah").value = data['jumlah'];
        }
    </script>
@endsection
