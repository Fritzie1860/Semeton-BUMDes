@extends('app')

@section('content')
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Pelanggan</h4>
                        {{-- <ol class="breadcrumb pull-right">
                        <li class="active">Dashboard</li>
                    </ol> --}}
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Daftar Pelanggan</h3>

                        </div>

                        <div class="panel-body">
                            <div class="row mt-2">
                                <button class="btn btn-primary mb-2 pb-2" style="margin-bottom: 25px" data-toggle="modal"
                                    data-target="#tambah"> Tambah Pelanggan </button>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable-responsive"
                                        class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">No</th>
                                                <th style="text-align: center;">Nama Pelanggan</th>
                                                <th style="text-align: center;">Nomor Telepon</th>
                                                <th style="text-align: center;">Alamat Pelanggan</th>
                                                <th style="text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pelanggan as $item)
                                                <tr>
                                                    <td>
                                                        <div class="conbtn">
                                                            {{ $loop->iteration }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        {{ $item->nama }}
                                                        {{-- {{ $data == null ? 'kosong' : $item['nama'] }} --}}
                                                    </td>
                                                    <td>
                                                        {{ $item->kontak }}
                                                        {{-- {{ $item == null ? 'kosong' : $item['kontak'] }} --}}
                                                    </td>
                                                    <td>
                                                        {{ $item->alamat }}
                                                        {{-- {{ $data == null ? 'kosong' : $item['alamat'] }} --}}
                                                    </td>
                                                    <td>
                                                        {{-- <div class="conbtn">
                                                            <button class="btn btn-primary center fa fa-edit"
                                                                data-toggle="modal" data-target="#edit"
                                                                onclick="edit_data('{{ $item['nama'] }}', '{{ $item['kontak'] }}', '{{ $item['alamat'] }}', {{ $loop->index }})"></button>
                                                            <button class="btn btn-danger center fa fa-trash"
                                                                style="margin-left: 2%"></button>
                                                            <button class="btn btn-success center mdi mdi-eye"
                                                                style="margin-left: 2%"
                                                                onclick="window.location.href='{{ route('get.detilpelanggan') }}?id={{ $loop->index }}'">
                                                                Hutang</button>
                                                        </div> --}}

                                                        <div class="conbtn">
                                                            <button class="btn btn-primary center fa fa-edit"
                                                                data-toggle="modal" data-target="#edit"
                                                                onclick="edit_data('{{ $item->nama }}', '{{ $item->kontak }}', '{{ $item->alamat }}', '{{ route('pelanggan.update', ['pelanggan' => $item->id]) }}')"></button>

                                                            <form method="POST"
                                                                action="{{ route('pelanggan.destroy', ['pelanggan' => $item->id]) }}}}"
                                                                class="form-horizontal" role="form">
                                                                @method('delete')
                                                                @csrf

                                                                <button class="btn btn-danger center fa fa-trash"
                                                                    style="margin-left: 2%"></button>
                                                            </form>

                                                            {{-- <button class="btn btn-success center mdi mdi-eye"
                                                                style="margin-left: 2%"
                                                                onclick="window.location.href='{{ route('pelanggan.show', ['pelanggan' => $item->id]) }}'">
                                                                Hutang</button> --}}
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
                    <h4 class="modal-title" id="myModalLabel">Tambah Data Pelanggan</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('pelanggan.store') }}" class="form-horizontal" role="form">
                        @csrf

                        <input type="hidden" name="status" value="pelanggan">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Pelanggan</label>
                            <div class="col-md-8">
                                <input name="nama" type="text" class="form-control"
                                    placeholder="Nama Pelanggan atau Nama Perusahaannya" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nomor Telepon</label>
                            <div class="col-md-8">
                                <input name="kontak" data-parsley-type="number" type="text" class="form-control"
                                    placeholder="08XXXXXXXXXX" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Alamat Pelanggan</label>
                            <div class="col-md-8">
                                <input name="alamat" type="text" class="form-control"
                                    placeholder="Alamat Pelanggan atau Alamat Perusahaannya" required>
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

    <!-- sample modal edit -->
    <div id="edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Edit Data Pelanggan</h4>
                </div>
                <div class="modal-body">

                    <form action="" method="POST" class="form-horizontal" role="form" id='form_update'>
                        @method('put')
                        @csrf
                        {{-- <input type="hidden" name="id" id="id_p"> --}}
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Pelanggan</label>
                            <div class="col-md-8">
                                <input name="nama" type="text" class="form-control" id="edit_nama"
                                    placeholder="Nama Pelanggan atau Nama Perusahaannya" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nomor Telepon</label>
                            <div class="col-md-8">
                                <input name="kontak" data-parsley-type="number" type="text" class="form-control"
                                    id="edit_kontak" placeholder="08XXXXXXXXXX" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Alamat Pelanggan</label>
                            <div class="col-md-8">
                                <input name="alamat" type="text" class="form-control" id="edit_alamat"
                                    placeholder="Alamat Pelanggan atau Alamat Perusahaannya" required>
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
        function edit_data(nama, kontak, alamat, url) {
            // console.log(nama, kontak, alamat, url);
            document.getElementById("form_update").action = url;
            document.getElementById("edit_nama").value = nama;
            document.getElementById("edit_kontak").value = kontak;
            document.getElementById("edit_alamat").value = alamat;
        }
    </script>
@endsection
