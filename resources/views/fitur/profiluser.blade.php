@extends('app')

@section('css')
    <style>
        .rounded-circle {
            width: 280px;
            height: 280px;
            border-radius: 50%;
        }
    </style>
@endsection
@section('content')
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Profil Pengguna</h4>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            {{-- Gambaran Umum --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">

                        <div class="panel-body">
                            <div class="row mt-2">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="conbtn">
                                        <div class="mx-auto text-center">
                                            <form style="padding-right: 25px">
                                                <img class="rounded-circle m-b-5" alt=""
                                                    src="/images/upload/{{ Auth::user()->foto }}">
                                                <p id="file-name"><br></p>
                                                <div class="modal-footer m-t-8">
                                                    <div class="mx-auto text-right">


                                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#foto">Ubah Foto</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class="row mt-5">

                                        <div class="mx-auto text-left">
                                            <form style="padding-right: 25px" method="POST"
                                                action=" {{ route('updateprofilpengelola') }}">
                                                @csrf
                                                <input type="hidden" name="jenis" value=4>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Nama Pengguna</label>
                                                    <input type="text" class="form-control" name="nama"
                                                        placeholder="Nama Lengkap Anda" value="{{ @Auth::user()->nama }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Alamat Pengguna</label>
                                                    <input type="text" class="form-control" name="alamat"
                                                        placeholder="Alamat atau Tempat Tinggal Anda"
                                                        value="{{ @Auth::user()->alamat }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Nomor Telepon Pengguna</label>
                                                    <input type="text" class="form-control" name="no_telp"
                                                        placeholder="Nomor Telepon Anda"
                                                        value="{{ @Auth::user()->no_telp }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Status Pengguna</label>
                                                    <input type="text" disabled="disabled" class="form-control"
                                                        name="no_benda" placeholder="Pencatat Transaksi"
                                                        value="{{ @Auth::user()->status }}">
                                                </div>
                                                <div class="modal-footer">
                                                    {{-- <button type="button" class="btn btn-default waves-effect m-l-5"
                                                        data-dismiss="modal">Cancel</button> --}}
                                                    <button type="submit"
                                                        class="btn btn-primary waves-effect waves-light">Simpan Data
                                                        Profil</button>
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

        </div>

    </div> <!-- container -->

    </div> <!-- content -->




    <!-- sample modal edit foto -->
    <div id="foto" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Pilih Foto Profil</h4>
                </div>
                <div class="modal-body">
                    <form action="{{ route('updateGambarProfil') }}" method="POST" class="form-horizontal" role="form"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="jenis" value=3>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Foto</label>
                            <div class="col-md-8">
                                <input class="form-control" name="file" type="file" id="file"
                                    onchange="validateFile()" required />
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

    {{-- </div>
    </div> --}}
@endsection

@section('script')
    <script>
        function diklik() {
            console.log("masuk!");
            document.getElementsByName('file')[0].click()
        }

        function jenisdata(id, jenis) {
            // var id = $(this).data('ids');
            // console.log("aku "+id);
            console.log(jenis);
            $("#isidata").val(id);
            var atas =
                '<table id="datatable-responsive" class="table table-hover table-bordered dt-responsive nowrap"                        cellspacing="0" width="100%">                        <thead>                            <tr>                                <th style="text-align: center;">Edit Jenis Pendapatan</th>                                <th style="text-align: center;">Aksi</th>                            </tr>                        </thead>                        <tbody>';
            var bawah = '</tbody>  </table>'
            var isi = '';
            jenis.forEach(element => {
                isi = isi +
                    '<form action="#">                                <tr>                                    <td>                                        <div class="">                                            <!-- <label class="control-label m-l-10" style="display: flex; justify-content: left; align-items: left; margin-bottom: 5px;">Data Jenis Pendapatan Baru</label> -->                                            <div class="">                                                <input name="jenis" type="text" class="form-control"                                                    placeholder="Contoh" value="' +
                    element +
                    '">                                            </div>                                        </div>                                    </td>                                    <td>                                        <div class="conbtn pt-3">                                        <button class="btn btn-danger center fa fa-trash"                                        style="padding: 7px;margin-left: 2%;"></button>                                    </div>                                    </td>                                </tr>                            </form>';
            });


            document.querySelector('#place_here').innerHTML = atas + isi + bawah;
        }

        function edit_datajasa(namajasa, alamatjasa, id) {
            console.log('edit datajasa: ' + id);
            document.getElementById("id_jasa").value = id;
            document.getElementById("namajasa").value = namajasa;
            document.getElementById("alamatjasa").value = alamatjasa;
        }

        function edit_datadagang(namadagang, alamatdagang, id) {
            console.log('edit datadagang: ' + id);
            document.getElementById("id_dagang").value = id;
            document.getElementById("namadagang").value = namadagang;
            document.getElementById("alamatdagang").value = alamatdagang;
        }
    </script>
@endsection
