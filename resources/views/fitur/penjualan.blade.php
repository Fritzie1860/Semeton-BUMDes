@extends('app')

@section('content')
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Penjualan</h4>
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
                            <h3 class="panel-title">Transaksi Penjualan Dagang</h3>

                        </div>

                        <div class="panel-body">
                            <div class="row mt-2">
                                <button class="btn btn-primary mb-2 pb-2" style="margin-bottom: 25px" data-toggle="modal"
                                    data-target="#tambah"> Tambah Transaksi </button>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable-responsive"
                                        class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">No</th>
                                                <th style="text-align: center;">Tanggal</th>
                                                <th style="text-align: center;">Kode Transaksi</th>
                                                <th style="text-align: center;">Nama Usaha</th>
                                                <th style="text-align: center;">Nama Pelanggan</th>
                                                <th style="text-align: center;">Total Penghasilan</th>
                                                <th style="text-align: center;">Gambar Bukti</th>
                                                <th style="text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach ($transaksi as $item)
                                                <tr>
                                                    <td>
                                                        <div class="conbtn">
                                                            {{ $loop->iteration }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        {{-- {{ $data == null ? 'kosong' : $item['tanggal'] }} --}}
                                                        {{ $item->tanggal }}
                                                    </td>
                                                    <td>
                                                        {{ $item->id }}
                                                        <!-- Perlu dibahas kodenya gmn -->
                                                    </td>
                                                    <td>
                                                        {{-- {{ $data == null ? 'kosong' : $dagang[$item['usaha']]['namadagang'] }} --}}
                                                        {{ $item->usaha->nama }}
                                                    </td>
                                                    <td>
                                                        {{-- {{ $data == null ? 'kosong' : $pelanggan[$item['pelanggan']]['nama'] }} --}}
                                                        {{ $item->orang->nama }}
                                                    </td>
                                                    <td>
                                                        {{-- {{ $data == [] ? 'kosong' : $item['penghasilan'] }} --}}
                                                        {{ 0 }}
                                                    </td>
                                                    <td>
                                                        {{-- {{$data ==[] ? 'kosong' : $item['penghasilan']}} --}}
                                                        {{-- <div class="conbtn">
                                                            <img src="images/{{ $item['file'] }}" alt="nota"
                                                                onclick="edit('images/{{ $item['file'] }}',{{ $loop->index }})"
                                                                data-toggle="modal" data-target="#gambar"
                                                                style="width: 30px; height: 30px;">
                                                        </div> --}}

                                                        {{-- {{"Rp200,000"}} --}}
                                                    </td>
                                                    <td>
                                                        <div class="conbtn">
                                                            <button class="btn btn-primary center fa fa-edit"
                                                                data-toggle="modal" data-target="#edit"
                                                                onclick="edit_data('{{ Route('transaksi.update', ['transaksi' => $item->id]) }}', '{{ $item->tanggal }}', '{{ $item->orang->nama }}', '{{ $item->usaha->nama }}', '{{ $item->keterangan }}')"></button>

                                                            <form method="POST"
                                                                action="{{ route('transaksi.destroy', ['transaksi' => $item->id]) }}"
                                                                class="form-horizontal" role="form">
                                                                @method('delete')
                                                                @csrf
                                                                <button class="btn btn-danger center fa fa-trash"
                                                                    style="margin-left: 2%"></button>
                                                            </form>

                                                            <button class="btn btn-success center mdi mdi-eye"
                                                                style="margin-left: 2%"
                                                                onclick="window.location.href='{{ route('transaksi.show', ['transaksi' => $item->id]) }}'">
                                                                Detail</button>
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
                    <h4 class="modal-title" id="myModalLabel">Tambah Transaksi</h4>
                </div>
                <div class="modal-body">
                    <form action="{{ route('transaksi.store') }}" method="POST" class="form-horizontal" role="form"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="status" value="penjualan">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Tanggal</label>
                            <div class="col-md-8">
                                <div class="input-group ">
                                    <input name="tanggal" type="text" class="form-control" placeholder="mm/dd/yyyy"
                                        id="datepicker-autoclose" required>
                                    <span class="input-group-addon bg-custom b-0"><i
                                            class="mdi mdi-calendar text-white"></i></span>
                                </div><!-- input-group -->
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Nama Usaha</label>
                            <div class="col-sm-8">
                                <select name="id_usaha" class="form-control" required>
                                    @foreach ($usaha as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Nama Pelanggan</label>
                            <div class="col-sm-8">
                                <select name="id_orang" class="form-control" required>
                                    @foreach ($pelanggan as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Catatan Transaksi</label>
                            <div class="col-md-8">
                                <input name="keterangan" type="text" class="form-control"
                                    placeholder="Catatan Transaksi (bisa saja kosong)">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Bukti Transaksi</label>
                            <div class="col-md-8">
                                <input class="form-control" name="file" type="file" id="file"
                                    onchange="validateFile()" />
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
                    <h4 class="modal-title" id="myModalLabel">Edit Transaksi Penjualan</h4>
                </div>
                <div class="modal-body">
                    <form action="" id="edit_url" method="POST" class="form-horizontal" role="form"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf

                        <div class="form-group">
                            <label class="col-md-4 control-label">Tanggal</label>
                            <div class="col-md-8">
                                <div class="input-group ">
                                    <input name="tanggal" type="text" class="form-control" placeholder="mm/dd/yyyy"
                                        id="datepicker-autoclose2" required>
                                    <span class="input-group-addon bg-custom b-0"><i
                                            class="mdi mdi-calendar text-white"></i></span>
                                </div><!-- input-group -->
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Nama Usaha</label>
                            <div class="col-sm-8">
                                <select id="edit_usaha" name="id_usaha" class="form-control" required>
                                    @foreach ($usaha as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Nama Pelanggan</label>
                            <div class="col-sm-8">
                                <select id="edit_pelanggan" name="id_orang" class="form-control" required>
                                    @foreach ($pelanggan as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Catatan Transaksi</label>
                            <div class="col-md-8">
                                <input id="edit_catat" name="keterangan" type="text" class="form-control"
                                    placeholder="Catatan Transaksi (bisa saja kosong)">
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
    <div id="gambar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Bukti Transaksi</h4>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" class="form-horizontal" role="form"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="conbtn">
                            <img src="" alt="nota" id="gambar_src" style="width: 80%;">
                        </div>
                        <input type="hidden" id="gambar_id" name="id">
                        <div style="margin-top: 20px;">
                            <label class="control-label">Edit Bukti Transaksi</label>
                        </div>
                        <div class="modal-footer mt-3">

                            <div class="col-md-10">
                                <div class="input-group ">
                                    <input name="file" type="file" id="file" class="form-control"
                                        onchange="validateFile()" required>
                                    <span class="input-group-addon bg-custom b-0"><i
                                            class="mdi mdi-calendar text-white"></i></span>
                                </div><!-- input-group -->
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary ">submit</button>
                            </div>
                        </div>

                    </form>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

@section('script')
    <script>
        function edit(gambar, id) {
            console.log('edit: ' + gambar);
            document.getElementById("gambar_id").value = id;
            document.getElementById("gambar_src").src = gambar;
        }

        function edit_data(url, tanggal, orang, usaha, keterangan) {
            document.getElementById("edit_url").action = url;
            document.getElementById("datepicker-autoclose2").value = tanggal;
            document.getElementById("edit_catat").value = keterangan;

            var selpelanggan = document.getElementById("edit_pelanggan");
            var selusaha = document.getElementById("edit_usaha");
            setSelectedValue(selpelanggan, orang);
            setSelectedValue(selusaha, usaha);
        }

        function setSelectedValue(selectObj, valueToSet) {
            for (var i = 0; i < selectObj.options.length; i++) {
                if (selectObj.options[i].text == valueToSet) {
                    selectObj.options[i].selected = true;
                    return;
                }
            }
        }

        function validateFile() {
            var input = document.getElementById("file");
            if (input.files.length > 0) {
                var file = input.files[0];
                if (file.type.match(/image\/.*/)) {
                    if (file.size <= (1048576 * 2)) {
                        // file is a valid image and its size is under 1MB
                    } else {
                        alert("Ukuran file terlalu besar. Maksimum ukuran 2MB.");
                    }
                } else {
                    alert("Tipe file tidak valid, tolong masukan file gambar.");
                }
            } else {
                alert("Harap memilih file.");
            }
        }
    </script>
@endsection
