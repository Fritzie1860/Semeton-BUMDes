@extends('app')

@section('content')
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Persediaan Barang</h4>
                        {{-- <ol class="breadcrumb pull-right">
                        <li class="active">Dashboard</li>
                    </ol> --}}
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                @isset($alert)
                    <div class="alert alert-danger fade in">
                        <h4>Stok Barang </h4>
                        <p>Stok barang hampir habis</p>
                        <ul>
                            <li>
                                Gas
                            </li>
                            <li>
                                Minyak
                            </li>
                        </ul>
                        <p class="flex justify-content-right">
                            <button type="button" onclick="window.location.href='{{ route('get.pembelian') }}'"
                                class="btn btn-sm btn-danger waves-effect waves-light" style="border-radius: 10px">Beli</button>
                        </p>
                    </div>
                @endisset

                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Daftar Persediaan Barang</h3>

                        </div>

                        <div class="panel-body">
                            <div class="row mt-2">
                                <button class="btn btn-primary mb-2 pb-2" style="margin-bottom: 25px" data-toggle="modal"
                                    data-target="#tambah"> Tambah Barang </button>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable-responsive"
                                        class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center; vertical-align: middle;">No</th>
                                                <th style="text-align: center; vertical-align: middle;">Nama Barang</th>
                                                <th style="text-align: center; vertical-align: middle;">Jumlah<br>Barang
                                                </th>
                                                <th style="text-align: center; vertical-align: middle;">
                                                    Persediaan<br>Minimum</th>
                                                <th style="text-align: center; vertical-align: middle;">Status Barang</th>
                                                <th style="text-align: center; vertical-align: middle;">Harga Jual</th>
                                                <th style="text-align: center; vertical-align: middle;">Aksi</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach ($barang as $item)
                                                <tr>
                                                    <td>
                                                        <div class="conbtn">
                                                            {{ $loop->iteration }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        {{ $item->nama }}
                                                    </td>
                                                    <td>
                                                        {{ $item->stok }}
                                                    </td>
                                                    <td>
                                                        {{ $item->minimum }}
                                                    </td>
                                                    <td>
                                                        {{ $item->status }}
                                                    </td>
                                                    <td>
                                                        {{ $item->harga + $item->untung }}
                                                    </td>
                                                    <td>
                                                        <div class="conbtn">
                                                            <button class="btn btn-primary center fa fa-edit"
                                                                data-toggle="modal" data-target="#edit"
                                                                onclick="edit('{{ route('barang.update', ['barang' => $item->id]) }}', '{{ $item->nama }}', '{{ $item->minimum }}', '{{ $item->untung }}', '{{ $item->status }}')"></button>

                                                            <form method="POST"
                                                                action="{{ route('barang.destroy', ['barang' => $item->id]) }}"
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
                        </div>
                    </div>
                </div>

            </div> <!-- End Row -->


        </div> <!-- container -->

    </div> <!-- content -->

    <!-- sample modal content -->
    <div id="tambah" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Data Barang</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('barang.store') }}" class="form-horizontal" role="form">
                        @csrf

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Barang</label>
                            <div class="col-md-8">
                                <input name="nama" type="text" class="form-control" placeholder="Nama Barang"
                                    required>
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
    <div id="edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Stok Barang</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="" id="edit_url" class="form-horizontal" role="form">
                        @method('put')
                        @csrf

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Barang</label>
                            <div class="col-md-8">
                                <input name="nama" id="edit_nama" type="text" class="form-control"
                                    placeholder="Nama Barang" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Persediaan Minimum</label>
                            <div class="col-md-8">
                                <input name="minimum" id="edit_minimum" data-parsley-type="number" type="text"
                                    class="form-control" placeholder="Jumlah Minimum Ketersediaan Barang" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nominal Untung</label>
                            <div class="col-md-8">
                                <input name="untung" id="edit_untung" data-parsley-type="number" type="text"
                                    class="form-control" placeholder="Untung dari Penjualan Barang (Rp)" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Status Barang</label>
                            <div class="col-sm-8">
                                <select name="status" id="edit_status" class="form-control" required>
                                    <option value="Barang Dagangan">Barang Dagangan</option>
                                    <option value="Perlengkapan Usaha">Perlengkapan Usaha</option>
                                </select>
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
        function edit(url, nama, minimum, untung, status) {
            document.getElementById("edit_url").action = url;
            document.getElementById("edit_nama").value = nama;
            document.getElementById("edit_minimum").value = minimum;
            document.getElementById("edit_untung").value = untung;

            setSelectedValue(document.getElementById("edit_status"), status);
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
