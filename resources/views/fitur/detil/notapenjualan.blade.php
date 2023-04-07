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
                            <li><a href="">Penjualan</a></li>
                            <li class="active">Nota Transaksi Penjualan</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

<<<<<<< HEAD
=======
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
>>>>>>> 4672e1bc9f215af5956cf02356c04364b2bdd3c0

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
                                                        <label class="control-label">Nama Pelanggan</label>
                                                        <div class="">
                                                            <input type="text" name="pelanggan" class="form-control"
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
<<<<<<< HEAD


                                            {{-- @isset($data[$loc]['nota'])
                                                @foreach ($data[$loc]['nota'] as $item)
                                                    <tr>
                                                        <td>
                                                            <div class="conbtn">
                                                                {{ $loop->index + 1 }}
                                                            </div>
                                                        </td>
                                                        <td>
                                                            {{ $data == null ? 'kosong' : $listbarang[$item['barang']]['nama'] }}
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
                                                                    onclick='edit_data(@json($item),{{ $item['barang'] }})'></button>
                                                                <button class="btn btn-danger center fa fa-trash"
                                                                    style="margin-left: 2%"></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset --}}

=======
                                            @foreach ($transaksi->jualbeli as $item)
                                                <tr>
                                                    <td>
                                                        <div class="conbtn">
                                                            {{ $loop->iteration }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        {{-- {{ $data == null ? 'kosong' : $listbarang[$item['barang']]['nama'] }} --}}
                                                        {{ $item->barang->nama }}
                                                    </td>
                                                    <td>
                                                        {{-- {{ $data == null ? 'kosong' : $item['harga'] }} --}}
                                                        {{ $harga = $item->barang->harga + $item->barang->untung }}
                                                    </td>
                                                    <td>
                                                        {{-- {{ $data == null ? 'kosong' : $item['jumlah'] }} --}}
                                                        {{ $item->kuantitas }}
                                                    </td>
                                                    <td>
                                                        {{ ($item->barang->harga + $item->barang->untung) * $item->kuantitas }}
                                                    </td>
                                                    <td>
                                                        <div class="conbtn">
                                                            <button class="btn btn-primary center fa fa-edit"
                                                                data-toggle="modal" data-target="#edit"
                                                                onclick="edit_data('{{ Route('jualbeli.update', ['jualbeli' => $item->id]) }}', '{{ $item->barang->nama }}', '{{ $harga }}', '{{ $item->kuantitas }}', '{{ $item->barang->stok }}')"></button>

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
>>>>>>> 4672e1bc9f215af5956cf02356c04364b2bdd3c0
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
<<<<<<< HEAD
                                            value="" required>
=======
                                            value="{{ $transaksi->jualbeli->sum('total') }}" required>
>>>>>>> 4672e1bc9f215af5956cf02356c04364b2bdd3c0
                                    </div>
                                </div>
                                <div class="col-md-8 m-t-5">
                                    <label class="col-md-3 control-label">Dibayarkan</label>
                                    <div class="col-md-5">
<<<<<<< HEAD
                                        <input id="totalbyr" data-parsley-type="number" type="text" class="form-control"
                                            placeholder="Total Pelanggan Membayar" required>
=======
                                        <input id="totalbyr" data-parsley-type="number" type="text"
                                            class="form-control" placeholder="Total Pelanggan Membayar" required>
>>>>>>> 4672e1bc9f215af5956cf02356c04364b2bdd3c0
                                    </div>

                                    <button class="btn btn-primary center m-l-5" style="display: inline;"
                                        data-target="#bayar" onclick="bayar()">Bayar</button>
                                </div>
                            </div>
                            <div style="width: 50%;">
                                <hr style="border-color: black;">
                            </div>
<<<<<<< HEAD



                            <div class="col-md-8">
                                <label class="col-md-3 control-label">Sisa </label>
                                <div class="col-md-5">
                                    <input id="hasil" data-parsley-type="number" type="text" disabled="disabled"
                                        class="form-control" placeholder="0" value="0" required>
                                </div>

                                <button class="btn btn-primary center m-l-5" style="display: inline;"
                                    data-target="#bayar" onclick="">Simpan</button>
=======
                            <div class="col-md-8">
                                <form action="{{ route('hutang.store') }}" method="post" class="form-horizontal"
                                    role="form">
                                    @csrf

                                    <input type="hidden" name="id_transaksi" value="{{ $transaksi->id }}">
                                    <input type="hidden" name="bayar" id="bayar" value="" required>

                                    <label class="col-md-3 control-label">Sisa </label>
                                    <div class="col-md-5">
                                        <input name="sisa" id="hasil" data-parsley-type="number" type="text"
                                            class="form-control" placeholder="0"
                                            value="{{ $transaksi->hutang->last()->sisa ?? 0 }}" required readonly>
                                    </div>

                                    <button class="btn btn-primary center m-l-5" style="display: inline;"
                                        data-target="#bayar" onclick="">Simpan</button>
                                </form>
>>>>>>> 4672e1bc9f215af5956cf02356c04364b2bdd3c0
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
                    <h4 class="modal-title" id="myModalLabel">Tambah Data Nota</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('jualbeli.store') }}" class="form-horizontal" role="form">
                        @csrf
<<<<<<< HEAD
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Nama/Jenis Barang</label>
                            <div class="col-sm-8">
                                <select name="barang" class="form-control" required>
                                    {{-- @foreach ($filteredData as $item)
                                        <option value="{{ $loop->index }}">{{ $item['nama'] }}
                                            ({{ $item['harga'] + $item['untung'] }})
                                        </option>
                                    @endforeach --}}
                                </select>

=======

                        <input type="hidden" name="id_transaksi" value="{{ $transaksi->id }}">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Nama/Jenis Barang</label>
                            <div class="col-sm-8">
                                <select name="id_barang" class="form-control" required>
                                    @foreach ($barang as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}
                                            ({{ $item->harga + $item->untung }})
                                            (stok: {{ $item->stok }})
                                        </option>
                                    @endforeach
                                </select>
>>>>>>> 4672e1bc9f215af5956cf02356c04364b2bdd3c0
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Jumlah</label>
                            <div class="col-md-8">
<<<<<<< HEAD
                                <input name="jumlah" data-parsley-type="number" type="text" class="form-control"
=======
                                <input name="kuantitas" data-parsley-type="number" type="text" class="form-control"
>>>>>>> 4672e1bc9f215af5956cf02356c04364b2bdd3c0
                                    placeholder="Jumlah Barang" required>
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
                    <h4 class="modal-title" id="myModalLabel">Edit Nota Penjualan</h4>
                </div>
                <div class="modal-body">
                    <form action="" id="edit_url" method="POST" class="form-horizontal" role="form"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf

<<<<<<< HEAD
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Nama/Jenis Barang</label>
                            <div class="col-sm-8">
                                <select id="edit_barang" name="barang" class="form-control" required>
                                    {{-- @foreach ($filteredData as $item)
                                        <option value="{{ $loop->index }}">{{ $item['nama'] }}
                                            ({{ $item['harga'] + $item['untung'] }})
                                        </option>
                                    @endforeach --}}
                                </select>

=======
                        <input type="hidden" id="edit_harga" name="harga">

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Nama/Jenis Barang</label>
                            <div class="col-sm-8">
                                <input id="edit_barang" data-parsley-type="number" type="text" class="form-control"
                                    placeholder="Nama Barang" required disabled>
>>>>>>> 4672e1bc9f215af5956cf02356c04364b2bdd3c0
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Jumlah</label>
                            <div class="col-md-8">
<<<<<<< HEAD
                                <input id="edit_jumlah" name="jumlah" data-parsley-type="number" type="text"
=======
                                <input id="edit_jumlah" name="kuantitas" data-parsley-type="number" type="text"
>>>>>>> 4672e1bc9f215af5956cf02356c04364b2bdd3c0
                                    class="form-control" placeholder="Jumlah Barang" required>
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
<<<<<<< HEAD
            document.getElementById("hasil").value = totalbyr - totaltr;
        }

        function edit_data(data, id) {
            console.log("ini idnya: " + id);
            document.getElementById("edit_id").value = id;
            document.getElementById("edit_barang").value = data['barang'];
            document.getElementById("edit_jumlah").value = data['jumlah'];
=======
            document.getElementById("bayar").value = totalbyr;
            document.getElementById("hasil").value = totalbyr - totaltr;
        }

        function edit_data(url, barang, harga, kuantitas, stok) {
            document.getElementById("edit_url").action = url;
            document.getElementById("edit_barang").value = barang + ' (stok: ' + stok + ')';
            document.getElementById("edit_jumlah").value = kuantitas;
            document.getElementById("edit_harga").value = harga;
>>>>>>> 4672e1bc9f215af5956cf02356c04364b2bdd3c0
        }
    </script>
@endsection
