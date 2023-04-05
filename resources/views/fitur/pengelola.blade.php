@extends('app')

@section('content')
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Pengelola</h4>
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
                            <h3 class="panel-title">Daftar Pengelola</h3>

                        </div>

                        <div class="panel-body">
                            <div class="row mt-2">
                                {{-- @if (Auth::user()->status == 'Ketua') --}}
                                <button class="btn btn-primary mb-2 pb-2" style="margin-bottom: 25px" data-toggle="modal"
                                    data-target="#tambah"> Tambah pengelola </button>
                                {{-- @endif --}}
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable-responsive"
                                        class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">No</th>
                                                <th style="text-align: center;">Nama Pengelola</th>
                                                <th style="text-align: center;">Status Posisi</th>
                                                <th style="text-align: center;">Nomor Telepon</th>
                                                <th style="text-align: center;">Foto Profil</th>
                                                {{-- @if (Auth::user()->status == 'Ketua') --}}
                                                <th style="text-align: center;">Aksi</th>
                                                {{-- @endif --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pengelola as $item)
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
                                                        {{ $item->status }}
                                                        {{-- {{ $data == null ? 'kosong' : $item['status'] }} --}}
                                                    </td>
                                                    <td>
                                                        {{ $item->kontak }}
                                                        {{-- {{ $data == null ? 'kosong' : $item['no_telp'] }} --}}
                                                    </td>
                                                    <td>
                                                        <div class="conbtn">
                                                            {{-- <img src="public\images\users\profil_holder.png" alt="profile"
                                                                style="width: 30px; height: 30px;"> --}}
                                                        </div>
                                                    </td>
                                                    {{-- @if (Auth::user()->status == 'Ketua') --}}
                                                    <td>

                                                        <div class="conbtn">
                                                            <button class="btn btn-primary center fa fa-edit"
                                                                data-toggle="modal" data-target="#edit"
                                                                onclick="edit_data('{{ route('pengelola.update', ['pengelola' => $item->id]) }}', '{{ $item->nama }}', '{{ $item->status }}','{{ $item->kontak }}', '{{ $item->id }}', '{{ $item->username }}')"></button>

                                                            <a href="#" class="delete"
                                                                data-id="{{ $item['id'] }}"></button></a>
                                                            <form id="#delete-post-form "
                                                                action="{{ route('pengelola.destroy', ['pengelola' => $item->id]) }}"
                                                                method="post">
                                                                @method('delete')
                                                                @csrf
                                                                <button
                                                                    class="btn btn-danger center fa fa-trash delete-user"
                                                                    style="margin-left: 2%">
                                                            </form>
                                                        </div>

                                                    </td>
                                                    {{-- @endif --}}
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
                    <h4 class="modal-title" id="myModalLabel">Tambah Data Pengelola</h4>
                </div>
                <div class="modal-body">
                    <form action="{{ route('pengelola.store') }}" method="POST" class="form-horizontal" role="form">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Pengelola</label>
                            <div class="col-md-8">
                                <input name="nama" type="text" class="form-control"
                                    placeholder="Nama Lengkap Pengelola" required>
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
                            <label class="col-md-4 control-label">Username</label>
                            <div class="col-md-8">
                                <input name="username" type="text" class="form-control" placeholder="Username" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>
                            <div class="col-md-8">
                                <input name="password" data-parsley-type="string" type="text" class="form-control"
                                    placeholder="password" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Status Pengelola</label>
                            <div class="col-sm-8">
                                <select name="status" class="form-control" required>
                                    <option value="Bendahara">Bendahara</option>
                                    <option value="Accounting">Pencatat Transaksi</option>
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
    <!-- Modal Edit-->
    <div id="edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Edit Data Pengelola</h4>
                </div>
                <div class="modal-body">
                    <form action="" id="edit_form" method="POST" class="form-horizontal" role="form">
                        @method('put')
                        @csrf
                        <input type="hidden" name="id" id="edit_id">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Pengelola</label>
                            <div class="col-md-8">
                                <input name="nama" type="text" class="form-control" id="edit_nama"
                                    placeholder="Nama Lengkap Pengelola" required>
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
                            <label class="col-md-4 control-label">Username</label>
                            <div class="col-md-8">
                                <input name="username" type="text" class="form-control" placeholder="Username"
                                    id="edit_username" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>
                            <div class="col-md-8">
                                <input name="password" data-parsley-type="string" type="text" class="form-control"
                                    id="edit_password" placeholder="password" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Status Pengelola</label>
                            <div class="col-sm-8">
                                <select name="status" class="form-control" required>
                                    <option value="Bendahara" id="option-bendahara">Bendahara</option>
                                    <option value="Accounting" id="option-pencatat-transaksi">Pencatat Transaksi
                                    </option>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $('.delete-user').on('click', function(e) {
            e.preventDefault();
            var form = $(this).parents('form');
            // var id= $(this).attr('data-id');
            swal({
                    title: "Ingin Menghapus?",
                    text: "Kamu akan menghapus data pengelola",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Data Berhasil Dihapus !", {
                            icon: "success",
                        });
                        form.submit();
                    }

                });
        });
    </script>
    <script>
        function edit_data(url, nama, status, kontak, id, username) {
            document.getElementById("edit_form").action = url;
            document.getElementById("edit_id").value = id;
            document.getElementById("edit_nama").value = nama;
            document.getElementById("edit_kontak").value = kontak;
            document.getElementById("edit_username").value = username;

            if (status == "Bendahara") {
                document.getElementById("option-bendahara").selected = true;
                document.getElementById("option-pencatat-transaksi").selected = false;
            } else if (status == "Accounting") {
                document.getElementById("option-bendahara").selected = false;
                document.getElementById("option-pencatat-transaksi").selected = true;
            }
        }
    </script>
@endsection
