@extends('app')

@section('content')
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Transaksi Dagang</a></li>
                            <li><a href="">Pembelian</a></li>
                            <li class="active">Nota Transaksi Pembelian</li>
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
                                                                disabled="disabled" value="{{ $transaksi->id }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Tanggal Transaksi</label>
                                                        <div class="">
                                                            <input type="text" name="tanggal" class="form-control"
                                                                disabled="disabled" value="{{ $transaksi->tanggal }}">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="m-t-5">
                                                <form class="form" role="form">
                                                    <div class="form-group">
                                                        <label class="control-label">Nama Pemasok</label>
                                                        <div class="">
                                                            <input type="text" name="pemasok" class="form-control"
                                                                disabled="disabled" value="{{ $transaksi->orang->nama }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Catatan Transaksi</label>
                                                        <div class="">
                                                            <input type="text" name="catatan" class="form-control"
                                                                disabled="disabled" value="{{ $transaksi->keterangan }}">
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
                                                <th style="text-align: center;">Nama/Jenis Barang</th>
                                                <th style="text-align: center;">Harga</th>
                                                <th style="text-align: center;">Jumlah</th>
                                                <th style="text-align: center;">Total Harga</th>
                                                <th style="text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>


                                        <tbody>

                                            @foreach ($transaksi->jualbeli as $item)
                                                <tr>
                                                    <td>
                                                        <div class="conbtn">
                                                            {{ $loop->iteration }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        {{-- {{ $data == null ? 'kosong' : $item['nama'] }} --}}
                                                        {{ $item->barang->nama }}
                                                    </td>
                                                    <td>
                                                        {{-- {{ $data == null ? 'kosong' : $item['harga'] }} --}}
                                                        {{ $item->harga }}
                                                    </td>
                                                    <td>
                                                        {{-- {{ $data == null ? 'kosong' : $item['jumlah'] }} --}}
                                                        {{ $item->kuantitas }}
                                                    </td>
                                                    <td>
                                                        {{ $item->total }}
                                                    </td>
                                                    <td>
                                                        <div class="conbtn">
                                                            <button class="btn btn-primary center fa fa-edit"
                                                                data-toggle="modal" data-target="#edit"
                                                                onclick="edit_data('{{ Route('jualbeli.update', ['jualbeli' => $item->id]) }}', '{{ $item->barang->nama }}', '{{ $item->harga }}', '{{ $item->kuantitas }}')"></button>

                                                            <form method="POST"
                                                                action="{{ route('jualbeli.destroy', ['jualbeli' => $item->id]) }}"
                                                                class="form-horizontal" role="form">
                                                                @method('delete')
                                                                @csrf
                                                                <button class="btn btn-danger center fa fa-trash"
                                                                    style="margin-left: 2%"></button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                            <hr>
                            <div class="row mt-2">
                                <div class="col-md-8">
                                    <label class="col-md-3 control-label">Total Transaksi</label>
                                    <div class="col-md-5">
                                        <input id="totaltr" data-parsley-type="number" type="text" disabled="disabled"
                                            class="form-control" placeholder="0"
                                            value="{{ $transaksi->jualbeli->sum('total') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-8 m-t-5">
                                    <label class="col-md-3 control-label">Dibayarkan</label>
                                    <div class="col-md-5">
                                        <input id="totalbyr" data-parsley-type="number" type="text"
                                            class="form-control" placeholder="Total BUMDes Membayar" required>
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
                                    <form action="{{ route('hutang.store') }}" method="post" class="form-horizontal"
                                        role="form">
                                        @csrf

                                        <input type="hidden" name="id_transaksi" value="{{ $transaksi->id }}">
                                        <input type="hidden" name="bayar" id="bayar" value="" required>

                                        <label class="col-md-3 control-label">Sisa </label>
                                        <div class="col-md-5">
                                            <input name="sisa" id="hasil" data-parsley-type="number"
                                                type="text" class="form-control" placeholder="0"
                                                value="{{ $transaksi->hutang->last()->sisa ?? 0 }}" required readonly>
                                        </div>

                                        <button class="btn btn-primary center m-l-5"
                                            style="display: inline;">Simpan</button>

                                    </form>
                                </div>
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
                    <h4 class="modal-title" id="myModalLabel">Tambah Barang</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ Route('jualbeli.store') }}" class="form-horizontal" role="form">
                        @csrf
                        <input type="hidden" name="id_transaksi" value="{{ $transaksi->id }}">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Jenis/Nama Barang</label>
                            <div class="col-sm-8">
                                <select name="id_barang" class="form-control" required>
                                    @if (count($barang) > 0)
                                        @foreach ($barang as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endforeach
                                    @else
                                        <option>Barang kosong</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Harga</label>
                            <div class="col-md-8">
                                <input name="harga" data-parsley-type="number" type="text" class="form-control"
                                    placeholder="Harga Barang" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Jumlah</label>
                            <div class="col-md-8">
                                <input name="kuantitas" data-parsley-type="number" type="text" class="form-control"
                                    placeholder="Jumlah Barang" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <form action="" method="post" class="form-horizontal" role="form">
                                @csrf

                                <button type="button" class="btn btn-default waves-effect m-l-5"
                                    data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                            </form>
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
                    <form action="" id="edit_url" method="POST" class="form-horizontal" role="form"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Jenis Usaha Jasa</label>
                            <div class="col-sm-8">
                                <select id="edit_jenis" class="form-control" required disabled>
                                    @foreach ($barang as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Harga</label>
                            <div class="col-md-8">
                                <input name="harga" id="edit_harga" data-parsley-type="number" type="text"
                                    class="form-control" placeholder="Harga Jasa" id="edit_harga" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Jumlah</label>
                            <div class="col-md-8">
                                <input name="kuantitas" data-parsley-type="number" type="text" class="form-control"
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
            document.getElementById("bayar").value = totalbyr;
            document.getElementById("hasil").value = totalbyr - totaltr;
        }

        function edit_data(url, barang, harga, kuantitas) {
            document.getElementById("edit_url").action = url;
            document.getElementById("edit_jumlah").value = kuantitas;
            document.getElementById("edit_harga").value = harga;
            var selbarang = document.getElementById("edit_jenis");
            setSelectedValue(selbarang, barang);
        }

        function setSelectedValue(selectObj, valueToSet) {
            for (var i = 0; i < selectObj.options.length; i++) {
                if (selectObj.options[i].text == valueToSet) {
                    selectObj.options[i].selected = true;
                    return;
                }
            }
        }
    </script>
@endsection
