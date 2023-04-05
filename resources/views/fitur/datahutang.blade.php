@extends('app')

@section('content')
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Data Hutang</h4>
                        {{-- <ol class="breadcrumb pull-right">
                        <li class="active">Dashboard</li>
                    </ol> --}}
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>


            <div class="row">
                @php $Tab = 'jasa'; @endphp
                <ul class="nav nav-tabs navtab-bg nav-justified">
                    <li class={{ $Tab == 'jasa' ? 'active' : '' }}>
                        <a href="#home1" data-toggle="tab" aria-expanded="false">
                            <span class="visible-xs"><i class="fa fa-shopping-basket"></i></span>
                            <span class="hidden-xs">Hutang Pelanggan</span>
                        </a>
                    </li>
                    <li class={{ $Tab == 'dagang' ? 'active' : '' }}>
                        <a href="#profile1" data-toggle="tab" aria-expanded="true">
                            <span class="visible-xs"><i class="fa fa-group"></i></span>
                            <span class="hidden-xs">Hutang BUMDes</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content">
                    <div class="tab-pane {{ $Tab == 'jasa' ? 'active' : '' }}" id="home1">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Hutang Pelanggan</h3>
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
                                                    <th style="text-align: center;">Nama Pelanggan</th>
                                                    <th style="text-align: center;">Alamat</th>
                                                    <th style="text-align: center;">Hutang</th>
                                                    <th style="text-align: center;">Aksi</th>
                                                </tr>
                                            </thead>


                                            <tbody>

                                                <tr>
                                                    <td>
                                                        <div class="conbtn">
                                                            {{-- {{ $loop->index + 1 }} --}}
                                                            1
                                                        </div>
                                                    </td>
                                                    <td>
                                                        {{-- {{ $item['namajasa'] }} --}}
                                                        Wahyudi
                                                    </td>
                                                    <td>
                                                        {{-- {{ $item['alamatjasa'] }} --}}
                                                        Jln raya no 1
                                                    </td>
                                                    <td>
                                                        {{-- {{ $item['alamatjasa'] }} --}}
                                                        2300000
                                                    </td>
                                                    {{-- <td>
                                                            <ul>
                                                                @foreach ($item['jenis'] as $isi)
                                                                    <li>{{ $isi }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </td> --}}
                                                    <td>
                                                        <div class="conbtn">
                                                            <button class="btn btn-primary center fa fa-edit"
                                                                data-toggle="modal" data-target="#editjasa"
                                                                onclick="window.location.href=''">
                                                            </button>
                                                            {{-- <button class="btn btn-danger center fa fa-trash"
                                                                    style="margin-left: 2%"></button> --}}
                                                            {{-- <button class="btn btn-success center fa fa-plus"
                                                                    style="margin-left: 2%" data-toggle="modal"
                                                                    data-target="#editjenis">
                                                                    Jenis Pendapatan</button> --}}
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane {{ $Tab == 'dagang' ? 'active' : '' }}" id="profile1">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Hutang BUMDes</h3>
                            </div>

                            <div class="panel-body">
                                <div class="row mt-2">
                                    {{-- <button class="btn btn-primary mb-2 pb-2" style="margin-bottom: 25px"
                                        data-toggle="modal" data-target="#tambahdatadagang"> Tambah Data Dagang </button> --}}

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table id="datatable-responsive2"
                                            class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0"
                                            width="100%">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;">No</th>
                                                    <th style="text-align: center;">Nama pemasok</th>
                                                    <th style="text-align: center;">Hutang</th>
                                                    <th style="text-align: center;">Aksi</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($bumdes as $item)
                                                    <tr>
                                                        <td>
                                                            <div class="conbtn">
                                                                {{ $loop->iteration }}
                                                                1
                                                            </div>
                                                        </td>
                                                        <td>
                                                            {{ $item->orang->nama }}
                                                        </td>
                                                        <td>
                                                            {{ $item->hutang->last()->sisa }}
                                                        </td>
                                                        <td>
                                                            <div class="conbtn">
                                                                <button class="btn btn-primary center fa fa-edit"
                                                                    data-toggle="modal" data-target="#editdagangs"
                                                                    onclick="window.location.href='{{ route('hutang.edit', ['hutang' => $item->id]) }}'"></button>
                                                                {{-- <button class="btn btn-danger center fa fa-trash"
                                                                    style="margin-left: 2%"></button> --}}
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
                </div> <!-- End Tab Content -->

            </div> <!-- End Row -->


        </div> <!-- container -->

    </div> <!-- content -->

    <!-- sample modal content -->
    <div id="tambahdatajasa" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Data Usaha</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" action="" method="post">
                        @csrf
                        <input type="hidden" name="jenis" value=1> {{-- lempar jenis --}}
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Usaha</label>
                            <div class="col-md-8">
                                <input name="namajasa" type="text" class="form-control"
                                    placeholder="Nama Usaha atau Perusahaan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Lokasi Usaha</label>
                            <div class="col-md-8">
                                <input name="alamatjasa" type="text" class="form-control"
                                    placeholder="Alamat atau Lokasi Usaha" required />
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
    <div id="editjasa" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Edit Data Usaha</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" action="" method="post">
                        @csrf
                        <input type="hidden" name="jenis" value=1> {{-- lempar jenis --}}
                        <input type="hidden" name="id" id="id_jasa">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Usaha</label>
                            <div class="col-md-8">
                                <input name="namajasa" type="text" class="form-control" id="namajasa"
                                    placeholder="Nama Usaha atau Perusahaan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Lokasi Usaha</label>
                            <div class="col-md-8">
                                <input name="alamatjasa" type="text" class="form-control" id="alamatjasa"
                                    placeholder="Alamat atau Lokasi Usaha" required />
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
    <div id="tambahdatadagang" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Data Usaha</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" action="" method="post">
                        @csrf
                        <input type="hidden" name="jenis" value=2>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Usaha</label>
                            <div class="col-md-8">
                                <input name="namadagang" type="text" class="form-control"
                                    placeholder="Nama Usaha atau Perusahaan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Lokasi Usaha</label>
                            <div class="col-md-8">
                                <input name="alamatdagang" type="text" class="form-control"
                                    placeholder="Alamat atau Lokasi Usaha" required />
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
    <div id="editdagang" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Edit Data Usaha</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" action="" method="post">
                        @csrf
                        <input type="hidden" name="jenis" value=2> {{-- lempar jenis --}}
                        <input type="hidden" name="id" id="id_dagang">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Usaha</label>
                            <div class="col-md-8">
                                <input name="namadagang" type="text" class="form-control" id="namadagang"
                                    placeholder="Nama Usaha atau Perusahaan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Lokasi Usaha</label>
                            <div class="col-md-8">
                                <input name="alamatdagang" type="text" class="form-control" id="alamatdagang"
                                    placeholder="Alamat atau Lokasi Usaha" required />
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

    <!-- sample modal jenis pendapatan -->
    <div id="editjenis" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Jenis Pendapatan</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" style="margin-left: 5px;" method="post"
                        action="">
                        @csrf

                        <input type="hidden" id="isidata" name="id">
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
                    <hr>

                    <div id="place_here">

                    </div>

                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

@section('script')
    <script>
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
