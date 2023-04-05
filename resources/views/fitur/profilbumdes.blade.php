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
                        <h4 class="pull-left page-title">Profil BUMDes</h4>
                        {{-- <ol class="breadcrumb pull-right">
                        <li class="active">Dashboard</li>
                    </ol> --}}
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
                                                {{-- @foreach ($data as $gambar)
                                                <img class="img-circle rounded-circle m-b-5"alt="" src="/images/upload/{{$gambar['foto']}}">
                                                @endforeach --}}
                                                <p id="file-name"><br></p>

                                                <div class="modal-footer m-t-8">
                                                    <div class="mx-auto text-right">

                                                        {{-- <input type="file" name="file"
                                                            onchange="document.getElementById('file-name').innerHTML = this.files[0].name"
                                                            style="display: none"> --}}
                                                        {{-- <button class="btn btn-primary waves-effect waves-light" onclick="diklik()">Pilih gambar</button> --}}
                                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#foto">Edit Foto/Gambar</button>
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
                                                action="{{ route('bumdes.update', ['bumde' => 1]) }}">
                                                @method('put')
                                                @csrf
                                                {{-- @foreach ($data as $item) --}}

                                                <input type="hidden" name="old_nama" value="{{ $bumdes->nama }}">
                                                <input type="hidden" name="old_alamat" value="{{ $bumdes->alamat }}">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Nama BUMDes</label>
                                                    <input type="text" class="form-control" name="nama"
                                                        value="{{ $bumdes->nama }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Alamat BUMDes</label>
                                                    <input type="text" class="form-control" name="alamat"
                                                        value="{{ $bumdes->alamat }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Nomor Telepon Ketua BUMDes</label>
                                                    <input type="text" class="form-control" name="no_ketua"
                                                        value="{{ $ketua->kontak }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Nomor Telepon Bendahara
                                                        BUMDes</label>
                                                    <input type="text" class="form-control" name="no_bendahara"
                                                        value="{{ $bendahara->kontak }}">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit"
                                                        class="btn btn-primary waves-effect waves-light">Simpan Data
                                                        Profil</button>
                                                </div>
                                                {{-- @endforeach --}}
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                {{-- {{dd($Tab == "jasa")}} --}}
                <ul class="nav nav-tabs navtab-bg nav-justified">
                    <li class="">
                        <a href="#home1" data-toggle="tab" aria-expanded="false">
                            <span class="visible-xs"><i class="fa fa-shopping-basket"></i></span>
                            <span class="hidden-xs">Usaha Jasa</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#profile1" data-toggle="tab" aria-expanded="true">
                            <span class="visible-xs"><i class="fa fa-group"></i></span>
                            <span class="hidden-xs">Usaha Dagang</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content">
                    <div class="tab-pane" id="home1">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Usaha Jasa</h3>
                            </div>

                            <div class="panel-body">
                                <div class="row mt-2">
                                    <button class="btn btn-primary mb-2 pb-2" style="margin-bottom: 25px"
                                        data-toggle="modal" data-target="#tambahdatajasa"> Tambah Data Usaha </button>

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table id="datatable-responsive"
                                            class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0"
                                            width="100%">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;">No</th>
                                                    <th style="text-align: center;">Nama Usaha</th>
                                                    <th style="text-align: center;">Lokasi Usaha</th>
                                                    <th style="text-align: center;">Jenis Pendapatan</th>
                                                    <th style="text-align: center;">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($usahajasa as $item)
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
                                                            {{ $item->lokasi }}
                                                        </td>
                                                        <td>
                                                            {{-- {{ $item->kontak }} --}}
                                                        </td>
                                                        <td>
                                                            <div class="conbtn">
                                                                <button class="btn btn-primary center fa fa-edit"
                                                                    data-toggle="modal" data-target="#editjasa"
                                                                    onclick="edit_datajasa('{{ $item->nama }}', '{{ $item->lokasi }}', '{{ route('usaha.update', ['usaha' => $item->id]) }}')"></button>

                                                                <form id="#delete-post-form "
                                                                    action="{{ route('usaha.destroy', ['usaha' => $item->id]) }}"
                                                                    method="post">
                                                                    @method('delete')
                                                                    @csrf
                                                                    <button
                                                                        class="btn btn-danger center fa fa-trash delete-user"
                                                                        style="margin-left: 2%">
                                                                </form>

                                                                <button class="btn btn-success center fa fa-plus"
                                                                    style="margin-left: 2%" data-toggle="modal"
                                                                    data-target="#editjenis"
                                                                    onclick='jenisdata({{ $loop->index }}, @JSON($item['jenis']))'>
                                                                    Jenis Pendapatan</button>
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
                    <div class="tab-pane" id="profile1">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Usaha Dagang</h3>
                            </div>

                            <div class="panel-body">
                                <div class="row mt-2">
                                    <button class="btn btn-primary mb-2 pb-2" style="margin-bottom: 25px"
                                        data-toggle="modal" data-target="#tambahdatadagang"> Tambah Data Dagang </button>

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table id="datatable-responsive"
                                            class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0"
                                            width="100%">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;">No</th>
                                                    <th style="text-align: center;">Nama Usaha</th>
                                                    <th style="text-align: center;">Lokasi Usaha</th>
                                                    <th style="text-align: center;">Aksi</th>
                                                </tr>
                                            </thead>

                                            @foreach ($usahadagang as $item)
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
                                                        {{ $item->lokasi }}
                                                    </td>
                                                    <td>
                                                        <div class="conbtn">
                                                            <button class="btn btn-primary center fa fa-edit"
                                                                data-toggle="modal" data-target="#editjasa"
                                                                onclick="edit_datadagang('{{ $item->nama }}', '{{ $item->lokasi }}', '{{ route('usaha.update', ['usaha' => $item->id]) }}')"></button>

                                                            <form id="#delete-post-form "
                                                                action="{{ route('usaha.destroy', ['usaha' => $item->id]) }}"
                                                                method="post">
                                                                @method('delete')
                                                                @csrf
                                                                <button
                                                                    class="btn btn-danger center fa fa-trash delete-user"
                                                                    style="margin-left: 2%">
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div> <!-- End Tab Content -->

                                </div> <!-- End Row -->
                            </div>

                        </div> <!-- container -->

                    </div> <!-- content -->

                    <!-- sample modal content -->
                    <div id="tambahdatajasa" class="modal fade" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="myModalLabel">Tambah Data Usaha</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" role="form" action="{{ route('usaha.store') }}"
                                        method="post">
                                        @csrf
                                        <input type="hidden" name="jenis" value="jasa"> {{-- lempar jenis --}}
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Nama Usaha</label>
                                            <div class="col-md-8">
                                                <input name="nama" type="text" class="form-control"
                                                    placeholder="Nama Usaha atau Perusahaan" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Lokasi Usaha</label>
                                            <div class="col-md-8">
                                                <input name="lokasi" type="text" class="form-control"
                                                    placeholder="Alamat atau Lokasi Usaha" required />
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect m-l-5"
                                                data-dismiss="modal">Cancel</button>
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light">Simpan</button>
                                        </div>
                                    </form>
                                </div>

                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <!-- sample modal content -->
                    <div id="editjasa" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="myModalLabel">Edit Data Usaha</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" role="form" action="" method="post"
                                        id="urljasa">
                                        @method('put')
                                        @csrf
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Nama Usaha</label>
                                            <div class="col-md-8">
                                                <input name="nama" type="text" class="form-control" id="namajasa"
                                                    placeholder="Nama Usaha atau Perusahaan" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Lokasi Usaha</label>
                                            <div class="col-md-8">
                                                <input name="lokasi" type="text" class="form-control"
                                                    id="lokasijasa" placeholder="Alamat atau Lokasi Usaha" required />
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect m-l-5"
                                                data-dismiss="modal">Cancel</button>
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light">Simpan</button>
                                        </div>
                                    </form>
                                </div>

                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <!-- sample modal content -->
                    <div id="tambahdatadagang" class="modal fade" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="myModalLabel">Tambah Data Usaha</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" role="form" action="{{ route('usaha.store') }}"
                                        method="post">
                                        @csrf
                                        <input type="hidden" name="jenis" value="dagang">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Nama Usaha</label>
                                            <div class="col-md-8">
                                                <input name="nama" type="text" class="form-control"
                                                    placeholder="Nama Usaha atau Perusahaan" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Lokasi Usaha</label>
                                            <div class="col-md-8">
                                                <input name="lokasi" type="text" class="form-control"
                                                    placeholder="Alamat atau Lokasi Usaha" required />
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect m-l-5"
                                                data-dismiss="modal">Cancel</button>
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light">Simpan</button>
                                        </div>
                                    </form>
                                </div>

                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <!-- sample modal content -->
                    <div id="editdagang" class="modal fade" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="myModalLabel">Edit Data Usaha</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" role="form" action="" method="post"
                                        id="urldagang">
                                        @method('put')
                                        @csrf
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Nama Usaha</label>
                                            <div class="col-md-8">
                                                <input name="nama" type="text" class="form-control"
                                                    id="namadagang" placeholder="Nama Usaha atau Perusahaan" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Lokasi Usaha</label>
                                            <div class="col-md-8">
                                                <input name="lokasi" type="text" class="form-control"
                                                    id="lokasidagang" placeholder="Alamat atau Lokasi Usaha" required />
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect m-l-5"
                                                data-dismiss="modal">Cancel</button>
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light">Simpan</button>
                                        </div>
                                    </form>
                                </div>

                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->


                    <!-- sample modal edit foto -->
                    <div id="foto" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="myModalLabel">Pilih Foto/Gambar</h4>
                                </div>
                                <div class="modal-body">
                                    {{-- @foreach ($data as $profil)
                    <form action="" method="POST" class="form-horizontal" role="form"
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
                    @endforeach --}}
                                </div>

                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <!-- sample modal jenis pendapatan -->
                    <div id="editjenis" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="myModalLabel">Jenis Pendapatan</h4>
                                </div>
                                <div class="modal-body">
                                    {{-- @foreach ($jasa1 as $js) --}}
                                    <form class="form-horizontal" role="form" style="margin-left: 5px;"
                                        method="post" action="">
                                        @csrf
                                        {{-- <!-- <input type="hidden" id="isidata" name="id" value="{{ $item }}"> --> --}}
                                        <div class="form-group">
                                            <label class="control-label m-l-10"
                                                style="display: flex; justify-content: left; align-items: left; margin-bottom: 5px;">Data
                                                Jenis Pendapatan Baru</label>
                                            <div class="col-md-10">
                                                <input name="jenis" type="text" class="form-control"
                                                    placeholder="Nama Jenis Pendapatan" required>
                                            </div>
                                            <div class="col-md-2">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light"
                                                    style="padding: 8px;"> tambah</button>
                                            </div>
                                        </div>
                                    </form>
                                    {{-- @endforeach --}}
                                    <hr>

                                    <div id="place_here">

                                    </div>

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

                        function edit_datajasa(namajasa, lokasijasa, url) {
                            console.log('edit datajasa: ' + url);
                            document.getElementById("urljasa").action = url;
                            document.getElementById("namajasa").value = namajasa;
                            document.getElementById("lokasijasa").value = lokasijasa;
                        }

                        function edit_datadagang(namadagang, lokasidagang, url) {
                            // console.log('edit datadagang: ' + id);
                            document.getElementById("urldagang").action = url;
                            document.getElementById("namadagang").value = namadagang;
                            document.getElementById("lokasidagang").value = lokasidagang;
                        }
                    </script>
                @endsection
