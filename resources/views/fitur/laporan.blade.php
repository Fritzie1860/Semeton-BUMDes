@extends('app')

@section('css')
    <link href={{ asset('css/laporan1.css') }} rel="stylesheet" type="text/css">
    {{-- <link href={{ asset('css/laporan2.css') }} rel="stylesheet" type="text/css"> --}}
    {{-- <link href={{ asset('css/laporan3.css') }} rel="stylesheet" type="text/css"> --}}
@endsection
@section('content')
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Laporan</h4>
                        {{-- <ol class="breadcrumb pull-right">
                <li class="active">Dashboard</li>
            </ol> --}}
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs navtab-bg">
                        <li class="active">
                            <a href="#home" data-toggle="tab" aria-expanded="false">
                                <span class="visible-xs"><i class="fa fa-home"></i></span>
                                <span class="hidden-xs">Neraca</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="#profile" data-toggle="tab" aria-expanded="true">
                                <span class="visible-xs"><i class="fa fa-user"></i></span>
                                <span class="hidden-xs">Laba Rugi</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="#messages" data-toggle="tab" aria-expanded="false">
                                <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                                <span class="hidden-xs">Perubahan Modal</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <form class="form-inline" role="form">
                                <div class="form-group">
                                    Jangka Waktu
                                    <input type="date" class="form-control"
                                        style="margin-left: 15px; margin-right: 15px;" id="exampleInputEmail2"
                                        placeholder="Enter email">
                                </div>

                                <div class="form-group">
                                    Sampai
                                    <input type="date" class="form-control"
                                        style="margin-left: 15px; margin-right: 15px;" id="exampleInputPassword2"
                                        placeholder="Password">
                                </div>
                                <button class="btn btn-success center" 
                                onclick="window.location.href='{{ route('get.neraca') }}'">
                                <a href="{{ route('get.neraca') }}" class="text-white">
                                Unduh
                            </a>
                            </button>
                            </form>
                            <p>&nbsp;</p>
                            {{-- table --}}
                            <center>
                                <table border="0" cellpadding="0" cellspacing="0" id="sheet0"
                                    class="sheet0 gridlines">
                                    <col class="col0">
                                    <col class="col1">
                                    <col class="col2">
                                    <col class="col3">
                                    <col class="col4">
                                    <col class="col5">
                                    <col class="col6">
                                    <col class="col7">
                                    <tbody>
                                        <tr class="row0">
                                            <td class="column0 style132 s style132" colspan="6">LAPORAN NERACA</td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row1">
                                            <td class="column0 style133 s style133" colspan="6">BUM DESA PUTRI NYALE KUTA
                                            </td>
                                            <td class="column6 style10 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row2">
                                            <td class="column0 style20 null"></td>
                                            <td class="column1 style20 null"></td>
                                            <td class="column2 style20 null"></td>
                                            <td class="column3 style20 null"></td>
                                            <td class="column4 style20 null"></td>
                                            <td class="column5 style20 null"></td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        {{-- <tr class="row3">
                                            <td class="column0 style134 s style134" colspan="6">Periode: 01/01/2023 -
                                                31/12/2023</td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr> --}}
                                        <tr class="row4">
                                            <td class="column0 style20 null"></td>
                                            <td class="column1 style12 null"></td>
                                            <td class="column2 style12 null"></td>
                                            <td class="column3 style12 null"></td>
                                            <td class="column4 style13 null"></td>
                                            <td class="column5 style13 null"></td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row5">
                                            <td class="column0 style124 s style125" colspan="3">AKTIVA</td>
                                            <td class="column3 style124 s style126" colspan="3">PASIVA</td>
                                            <td class="column6 style15 null"></td>
                                            <td class="column7 style15 null"></td>
                                        </tr>
                                        <tr class="row6">
                                            <td class="column0 style131 s style131" colspan="2">1. HARTA</td>
                                            <td class="column2 style30 s">Rp.</td>
                                            <td class="column3 style127 s style128" colspan="2">2. HUTANG</td>
                                            <td class="column5 style34 s">Rp.</td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row7">
                                            <td class="column0 style50 s">1.1</td>
                                            <td class="column1 style50 s style36"> Kas </td>
                                            <td class="column2 style27 n">&nbsp;Rp 23,800,000 </td>
                                            <td class="column3 style28 s">2.1</td>
                                            <td class="column4 style35 s">Hipotik/Pinjaman</td>
                                            <td class="column5 style32 n">0</td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row8">
                                            <td class="column0 style50 s">1.1.1</td>
                                            <td class="column1 style50 s style36">Kas Jasa penjualan Gas</td>
                                            <td class="column2 style27 n">&nbsp;Rp 5,512,500 </td>
                                            <td class="column3 style28 s">2.2</td>
                                            <td class="column4 style36 s">PADes</td>
                                            <td class="column5 style37 n">0</td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row9">
                                            <td class="column0 style50 s">1.1.2</td>
                                            <td class="column1 style50 s style36">Kas usaha Homestay</td>
                                            <td class="column2 style27 n">&nbsp;Rp 7,000,000 </td>
                                            <td class="column3 style28 s">2.3</td>
                                            <td class="column4 style36 s">Dana Sosial</td>
                                            <td class="column5 style37 n">0</td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row10">
                                            <td class="column0 style50 s">1.1.3</td>
                                            <td class="column1 style50 s style36">Kas Percetakan</td>
                                            <td class="column2 style27 n">0</td>
                                            <td class="column3 style28 s">2.4</td>
                                            <td class="column4 style36 s">Bonus Pengurus</td>
                                            <td class="column5 style37 n">0</td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row11">
                                            <td class="column0 style50 s">1.1.4</td>
                                            <td class="column1 style50 s style36">Kas Peternakan</td>
                                            <td class="column2 style27 n">&nbsp;Rp 12,675,000 </td>
                                            <td class="column3 style129 s style130" colspan="2">Total Hutang</td>
                                            <td class="column5 style56 n">0</td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row12">
                                            <td class="column0 style50 s">1.1.5</td>
                                            <td class="column1 style50 s style36">Kas SPP</td>
                                            <td class="column2 style27 n">&nbsp;Rp 13,551,500 </td>
                                            <td class="column3 style19 null"></td>
                                            <td class="column4 style45 null"></td>
                                            <td class="column5 style44 null"></td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row13">
                                            <td class="column0 style50 s">1.1.6</td>
                                            <td class="column1 style50 s style36">Kas pengolahan jasa pengangkutan Sampah
                                            </td>
                                            <td class="column2 style27 n">0</td>
                                            <td class="column3 style127 s style128" colspan="2">3. MODAL</td>
                                            <td class="column5 style43 s">Rp.</td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row14">
                                            <td class="column0 style50 s">1.1.7</td>
                                            <td class="column1 style50 s style36">Total Kas</td>
                                            <td class="column2 style38 f">&nbsp;Rp 62,539,000 </td>
                                            <td class="column3 style28 s">3.1</td>
                                            <td class="column4 style31 s">Modal Dari PemDes (akumulasi)</td>
                                            <td class="column5 style33 n">&nbsp;Rp 140,000,000 </td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row15">
                                            <td class="column0 style50 s">1.2</td>
                                            <td class="column1 style50 s style36">Bank</td>
                                            <td class="column2 style39 n">&nbsp;Rp 2,363,692 </td>
                                            <td class="column3 style28 s">3.2</td>
                                            <td class="column4 style31 s">Bantuan dari Pusat</td>
                                            <td class="column5 style33 n">&nbsp;Rp 179,000,000 </td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row16">
                                            <td class="column0 style50 s">1.3</td>
                                            <td class="column1 style50 s style36">Persediaan Barang </td>
                                            <td class="column2 style40 n">0</td>
                                            <td class="column3 style28 s">3.3</td>
                                            <td class="column4 style31 s">Modal Pihak ketiga</td>
                                            <td class="column5 style33 n">&nbsp;Rp 20,000,000 </td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row17">
                                            <td class="column0 style50 s">1.4</td>
                                            <td class="column1 style50 s style36">Persediaan Barang Bumdes Mart</td>
                                            <td class="column2 style41 n">0</td>
                                            <td class="column3 style28 s">3.4</td>
                                            <td class="column4 style29 s">Hibah Pihak Ketiga</td>
                                            <td class="column5 style33 n">&nbsp;Rp 50,000,000 </td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row18">
                                            <td class="column0 style122 s style123" colspan="2"><br />
                                                <br />
                                                Total Aktiva Lancar
                                            </td>
                                            <td class="column2 style49 f">&nbsp;Rp 64,902,692 </td>
                                            <td class="column3 style28 s">3.5</td>
                                            <td class="column4 style31 s">Surplus/Defisit Ditahan</td>
                                            <td class="column5 style33 n">0</td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row19">
                                            <td class="column0 style52 null"></td>
                                            <td class="column1 style53 null"></td>
                                            <td class="column2 style61 null"></td>
                                            <td class="column3 style28 s">3.6</td>
                                            <td class="column4 style31 s">Surplus/Defisit Berjalan</td>
                                            <td class="column5 style33 n">0</td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row20">
                                            <td class="column0 style46 s">1.5</td>
                                            <td class="column1 style115 s style115" colspan="2">Aktiva Tetap</td>
                                            <td class="column3 style111 s style112" colspan="2">Total Modal</td>
                                            <td class="column5 style57 f">&nbsp;Rp 389,000,000 </td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row21">
                                            <td class="column0 style50 s">1.5.1</td>
                                            <td class="column1 style50 s style36">Nilai Aktiva Tetap</td>
                                            <td class="column2 style51 n">&nbsp;Rp 15,000,000 </td>
                                            <td class="column3 style58 null"></td>
                                            <td class="column4 style9">&nbsp;</td>
                                            <td class="column5 style59 null"></td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row22">
                                            <td class="column0 style28 s">1.5.2</td>
                                            <td class="column1 style50 s style36">Akumulasi Penyusutan</td>
                                            <td class="column2 style55 n">&nbsp;Rp 50,000 </td>
                                            <td class="column3 style58 null"></td>
                                            <td class="column4 style9">&nbsp;</td>
                                            <td class="column5 style59 null"></td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row23">
                                            <td class="column0 style113 s style114" colspan="2"><br />
                                                <br />
                                                Total Aktiva Lancar
                                            </td>
                                            <td class="column2 style42 f">&nbsp;Rp 14,950,000 </td>
                                            <td class="column3 style58 null"></td>
                                            <td class="column4 style9">&nbsp;</td>
                                            <td class="column5 style59 null"></td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        {{-- <tr class="row24">
                                            <td class="column0 style50 null"></td>
                                            <td class="column1 style14 null"></td>
                                            <td class="column2 style27 null"></td>
                                            <td class="column3 style58 null"></td>
                                            <td class="column4 style9">&nbsp;</td>
                                            <td class="column5 style59 null"></td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr> --}}
                                        <tr class="row25">
                                            <td class="column0 style50 s">1.6</td>
                                            <td class="column1 style121 s style115" colspan="2">Rupa-rupa Aktiva</td>
                                            <td class="column3 style18 null"></td>
                                            <td class="column4 style13 null"></td>
                                            <td class="column5 style17 null"></td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row26">
                                            <td class="column0 style119 s style120" colspan="2">(Selisih Pencatatan)
                                            </td>
                                            <td class="column2 style62 f">&nbsp;Rp 309,147,308 </td>
                                            <td class="column3 style18 null"></td>
                                            <td class="column4 style13 null"></td>
                                            <td class="column5 style17 null"></td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row27">
                                            <td class="column0 style50 null"></td>
                                            <td class="column1">&nbsp;</td>
                                            <td class="column2 style48 null"></td>
                                            <td class="column3 style18 null"></td>
                                            <td class="column4 style13 null"></td>
                                            <td class="column5 style60 null"></td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row28">
                                            <td class="column0 style116 s style117" colspan="2">TOTAL AKTIVA</td>
                                            <td class="column2 style64 f">&nbsp;Rp 389,000,000 </td>
                                            <td class="column3 style116 s style118" colspan="2">TOTAL PASIVA</td>
                                            <td class="column5 style63 f">&nbsp;Rp 389,000,000 </td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row29">
                                            <td class="column0 style1 null"></td>
                                            <td class="column1 style1 null"></td>
                                            <td class="column2 style1 null"></td>
                                            <td class="column3 style1 null"></td>
                                            <td class="column4 style1 null"></td>
                                            <td class="column5 style9 null"></td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row30">
                                            <td class="column0 style11 null"></td>
                                            <td class="column1 style3 s">Diperiksa oleh</td>
                                            <td class="column2 style3 null"></td>
                                            <td class="column3 style3 null"></td>
                                            <td class="column4 style3 s">Dibuat oleh </td>
                                            <td class="column5 style9">&nbsp;</td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row31">
                                            <td class="column0 style11 null"></td>
                                            <td class="column1 style3 s">Ketua Bumdes,</td>
                                            <td class="column2 style3 null"></td>
                                            <td class="column3 style3 null"></td>
                                            <td class="column4 style3 s">Bendahara,</td>
                                            <td class="column5 style9">&nbsp;</td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row32">
                                            <td class="column0 style11 null"></td>
                                            <td class="column1 style3 null"></td>
                                            <td class="column2 style3 null"></td>
                                            <td class="column3 style3 null"></td>
                                            <td class="column4 style3 null"></td>
                                            <td class="column5 style9">&nbsp;</td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row33">
                                            <td class="column0 style11 null"></td>
                                            <td class="column1 style3 null"></td>
                                            <td class="column2 style3 null"></td>
                                            <td class="column3 style3 null"></td>
                                            <td class="column4 style3 null"></td>
                                            <td class="column5 style9">&nbsp;</td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row34">
                                            <td class="column0 style11 null"></td>
                                            <td class="column1 style3 null"></td>
                                            <td class="column2 style3 null"></td>
                                            <td class="column3 style3 null"></td>
                                            <td class="column4 style3 null"></td>
                                            <td class="column5 style9">&nbsp;</td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row35">
                                            <td class="column0 style11 null"></td>
                                            <td class="column1 style3 null"></td>
                                            <td class="column2 style3 null"></td>
                                            <td class="column3 style3 null"></td>
                                            <td class="column4 style3 null"></td>
                                            <td class="column5 style9">&nbsp;</td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row36">
                                            <td class="column0 style11 null"></td>
                                            <td class="column1 style3 s">( EMUR )</td>
                                            <td class="column2 style3 null"></td>
                                            <td class="column3 style3 null"></td>
                                            <td class="column4 style3 s">( FETRILIA VIOLANDA )</td>
                                            <td class="column5 style9">&nbsp;</td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                        <tr class="row37">
                                            <td class="column0 style11 null"></td>
                                            <td class="column1 style11 null"></td>
                                            <td class="column2 style11 null"></td>
                                            <td class="column3 style11 null"></td>
                                            <td class="column4 style11 null"></td>
                                            <td class="column5 style11 null"></td>
                                            <td class="column6 style11 null"></td>
                                            <td class="column7 style11 null"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </center>
                        </div>
                        <div class="tab-pane " id="profile">
                            <form class="form-inline" role="form">
                                <div class="form-group">
                                    Jangka Waktu
                                    <input type="date" class="form-control"
                                        style="margin-left: 15px; margin-right: 15px;" id="exampleInputEmail2"
                                        placeholder="Enter email">
                                </div>

                                <div class="form-group">
                                    Sampai
                                    <input type="date" class="form-control"
                                        style="margin-left: 15px; margin-right: 15px;" id="exampleInputPassword2"
                                        placeholder="Password">
                                </div>

                                {{-- <div class="form-group">
                                    Jenis Usaha
                                    <select name="status" class="form-control"
                                        style="margin-left: 15px; margin-right: 15px;" required>
                                        <option>Bendahara</option>
                                        <option>Pencatat Transaksi</option>
                                    </select>
                                </div> --}}
                                
                                <button class="btn btn-success center" 
                                    onclick="window.location.href='{{ route('get.labarugi') }}'">
                                    <a href="{{ route('get.labarugi') }}" class="text-white">
                                    Unduh
                                </a>
                                </button>
                                
                            </form>
                            <p>&nbsp;</p>
                            <center>
                                <table border="0" cellpadding="0" cellspacing="0" id="sheet0"
                                    class="sheet0 gridlines">
                                    <col class="col0">
                                    <col class="col1">
                                    <col class="col2">
                                    <col class="col3">
                                    <col class="col4">
                                    <col class="col5">
                                    <tbody>
                                        <tr class="row0">
                                            <td class="column0 style132 s style132" colspan="3">LAPORAN LABA RUGI</td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row1">
                                            <td class="column0 style133 s style133" colspan="3">BUM DESA PUTRI NYALE
                                                KUTA
                                            </td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row2">
                                            <td class="column0 style20 null"></td>
                                            <td class="column1 style20 null"></td>
                                            <td class="column2 style3 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        {{-- <tr class="row3">
                                            <td class="column0 style341 s style1" colspan="3">Periode: 01/01/2023 -
                                                31/12/2023</td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr> --}}
                                        <tr class="row4">
                                            <td class="column0 style20 null"></td>
                                            <td class="column1 style12 null"></td>
                                            <td class="column2 style3 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row5">
                                            <td class="column0 style145 s style147" colspan="3">U R A I A N</td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row6">
                                            <td class="column0 style119 s style120" colspan="2">4. PENDAPATAN</td>
                                            <td class="column2 style43 s">Rp.</td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row7">
                                            <td class="column0 style66 s">4.1</td>
                                            <td style="width:700px" class="column1 style67 s">Pendapatan Operasional</td>
                                            <td style="width:200px" class="column2 style68 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row8">
                                            <td class="column0 style69 s">4.1.1</td>
                                            <td style="width:700px" class="column1 style6 s">Pendapatan Jasa penjualan Gas
                                            </td>
                                            <td style="width:200px" class="column2 style70 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row9">
                                            <td class="column0 style69 s">4.1.2</td>
                                            <td style="width:700px" class="column1 style6 s">Pendapatan usaha Homestay
                                            </td>
                                            <td style="width:200px" class="column2 style71 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row10">
                                            <td class="column0 style69 s">4.1.3</td>
                                            <td style="width:700px" class="column1 style6 s">Pendapatan Percetakan</td>
                                            <td style="width:200px" class="column2 style72 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row11">
                                            <td class="column0 style69 s">4.1.4</td>
                                            <td style="width:700px" class="column1 style6 s">Pendapatan Peternakan</td>
                                            <td style="width:200px" class="column2 style73 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row12">
                                            <td class="column0 style69 s">4.1.5</td>
                                            <td style="width:700px" class="column1 style6 s">Pendapatan SPP</td>
                                            <td style="width:200px" class="column2 style73 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row13">
                                            <td class="column0 style69 s">4.1.6</td>
                                            <td style="width:700px" class="column1 style6 s">Pendapatan pengolahan jasa
                                                pengangkutan Sampah</td>
                                            <td style="width:200px" class="column2 style74 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row14">
                                            <td class="column0 style69 s">4.1.7</td>
                                            <td style="width:700px" class="column1 style3 s">Pendapatan Operasional
                                                Lain-lain</td>
                                            <td style="width:200px" class="column2 style75 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style95 null"></td>
                                        </tr>
                                        <tr class="row15">
                                            <td class="column0 style139 s style140" colspan="2">Total Pendapatan
                                                Operasional</td>
                                            <td class="column2 style76 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row16">
                                            <td class="column0 style79 null"></td>
                                            <td style="width:700px" class="column1 style80 null"></td>
                                            <td style="width:200px" class="column2 style81 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row17">
                                            <td class="column0 style77 s">4.2</td>
                                            <td style="width:700px" class="column1 style4 s">Pendapatan Non Operasional
                                            </td>
                                            <td style="width:200px" class="column2 style78 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row18">
                                            <td class="column0 style69 s">4.2.1</td>
                                            <td style="width:700px" class="column1 style6 s">Bunga Bank </td>
                                            <td style="width:200px" class="column2 style74 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row19">
                                            <td class="column0 style69 s">4.2.2</td>
                                            <td style="width:700px" class="column1 style6 s">Pendapatan Non Operasional
                                                Lian-lain</td>
                                            <td style="width:200px" class="column2 style74 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row20">
                                            <td class="column0 style139 s style140" colspan="2">Total Pendapatan Non
                                                Operasional</td>
                                            <td class="column2 style76 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row21">
                                            <td class="column0 style79 null"></td>
                                            <td style="width:700px" class="column1 style80 null"></td>
                                            <td style="width:200px" class="column2 style83 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row22">
                                            <td class="column0 style148 s style149" colspan="2">TOTAL PENDAPATAN</td>
                                            <td class="column2 style82 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row23">
                                            <td class="column0 style79 null"></td>
                                            <td style="width:700px" class="column1 style80 null"></td>
                                            <td style="width:200px" class="column2 style84 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row24">
                                            <td class="column0 style143 s style144" colspan="2">5. BIAYA</td>
                                            <td class="column2 style34 s">Rp.</td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row25">
                                            <td class="column0 style69 s">5.1</td>
                                            <td style="width:700px" class="column1 style4 s">Biaya Operasional</td>
                                            <td style="width:200px" class="column2 style7 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row26">
                                            <td class="column0 style69 s">5.1.1</td>
                                            <td style="width:700px" class="column1 style6 s">ATK</td>
                                            <td style="width:200px" class="column2 style5 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row27">
                                            <td class="column0 style69 s">5.1.2</td>
                                            <td style="width:700px" class="column1 style3 s">Biaya Kantor</td>
                                            <td style="width:200px" class="column2 style5 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row28">
                                            <td class="column0 style69 s">5.1.3</td>
                                            <td style="width:700px" class="column1 style6 s">Honor Pengurus dan karyawan
                                            </td>
                                            <td style="width:200px" class="column2 style5 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row29">
                                            <td class="column0 style69 s">5.1.4</td>
                                            <td style="width:700px" class="column1 style6 s">Biaya Penyusutan Inventaris
                                            </td>
                                            <td style="width:200px" class="column2 style5 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row30">
                                            <td class="column0 style69 s">5.1.5</td>
                                            <td style="width:700px" class="column1 style6 s">Operasional Badan Pengawas
                                                dan Penasehat</td>
                                            <td style="width:200px" class="column2 style5 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row31">
                                            <td class="column0 style69 s">5.1.6</td>
                                            <td style="width:700px" class="column1 style6 s">Lainnya</td>
                                            <td style="width:200px" class="column2 style7 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row32">
                                            <td class="column0 style139 s style140" colspan="2">Total Biaya Operasional
                                            </td>
                                            <td class="column2 style86 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row33">
                                            <td class="column0 style79 null"></td>
                                            <td style="width:700px" class="column1 style80 null"></td>
                                            <td style="width:200px" class="column2 style88 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row34">
                                            <td class="column0 style77 s">5.2</td>
                                            <td style="width:700px" class="column1 style4 s">Biaya Non Operasional</td>
                                            <td style="width:200px" class="column2 style87 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row35">
                                            <td class="column0 style69 s">5.2.1</td>
                                            <td style="width:700px" class="column1 style6 s">Pajak Bunga Bank </td>
                                            <td style="width:200px" class="column2 style78 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row36">
                                            <td class="column0 style69 s">5.2.2</td>
                                            <td style="width:700px" class="column1 style6 s">Administrasi Bank </td>
                                            <td style="width:200px" class="column2 style85 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row37">
                                            <td class="column0 style69 s">5.2.3</td>
                                            <td style="width:700px" class="column1 style6 s">Biaya Non Operasional
                                                Lain-lain</td>
                                            <td style="width:200px" class="column2 style74 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row38">
                                            <td class="column0 style141 s style142" colspan="2">Total Biaya Non
                                                Operasional
                                            </td>
                                            <td class="column2 style89 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row39">
                                            <td class="column0 style90 null"></td>
                                            <td style="width:700px" class="column1 style91 null"></td>
                                            <td style="width:200px" class="column2 style92 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row40">
                                            <td class="column0 style135 s style136" colspan="2">TOTAL BIAYA</td>
                                            <td class="column2 style94 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row41">
                                            <td class="column0 style90 null"></td>
                                            <td style="width:700px" class="column1 style91 null"></td>
                                            <td style="width:200px" class="column2 style83 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row42">
                                            <td class="column0 style137 s style138" colspan="2"><span
                                                    style="font-weight:bold; color:#000000; font-family:'Times New Roman'; font-size:12pt">LABA
                                                    /
                                                    RUGI</span><span
                                                    style="color:#000000; font-family:'Times New Roman'; font-size:12pt">
                                                    (PENDAPATAN -
                                                    BIAYA)</span></td>
                                            <td class="column2 style93 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row43">
                                            <td class="column0 style3 null"></td>
                                            <td class="column1 style3 null"></td>
                                            <td class="column2 style3 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row44">
                                            <td class="column0 style3 null"></td>
                                            <td class="column1 style3 s">Diperiksa oleh</td>
                                            <td class="column2 style3 s">Dibuat oleh </td>
                                            <td class="column3 style3 null"></td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row45">
                                            <td class="column0 style3 null"></td>
                                            <td class="column1 style3 s">Ketua Bumdes,</td>
                                            <td class="column2 style3 s">Bendahara,</td>
                                            <td class="column3 style3 null"></td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row46">
                                            <td class="column0 style3 null"></td>
                                            <td class="column1 style3 null"></td>
                                            <td class="column2 style3 null"></td>
                                            <td class="column3 style3 null"></td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row47">
                                            <td class="column0 style3 null"></td>
                                            <td class="column1 style3 null"></td>
                                            <td class="column2 style3 null"></td>
                                            <td class="column3 style3 null"></td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row48">
                                            <td class="column0 style3 null"></td>
                                            <td class="column1 style3 null"></td>
                                            <td class="column2 style3 null"></td>
                                            <td class="column3 style3 null"></td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row49">
                                            <td class="column0 style3 null"></td>
                                            <td class="column1 style3 null"></td>
                                            <td class="column2 style3 null"></td>
                                            <td class="column3 style3 null"></td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row50">
                                            <td class="column0 style3 null"></td>
                                            <td class="column1 style3 s">( EMUR )</td>
                                            <td class="column2 style3 s">( FETRILIA VIOLANDA )</td>
                                            <td class="column3 style3 null"></td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row51">
                                            <td class="column0 style3 null"></td>
                                            <td class="column1 style3 null"></td>
                                            <td class="column2 style3 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row52">
                                            <td class="column0 style3 null"></td>
                                            <td class="column1 style3 null"></td>
                                            <td class="column2 style3 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                            <td class="column4 style3 null">&nbsp;</td>
                                            <td class="column5 style3 null">&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </center>
                            <p><br></p>
                        </div>
                        <div class="tab-pane" id="messages">
                            <form class="form-inline" role="form">
                                <div class="form-group">
                                    Jangka Waktu
                                    <input type="date" class="form-control"
                                        style="margin-left: 15px; margin-right: 15px;" id="exampleInputEmail2"
                                        placeholder="Enter email">
                                </div>

                                <div class="form-group">
                                    Sampai
                                    <input type="date" class="form-control"
                                        style="margin-left: 15px; margin-right: 15px;" id="exampleInputPassword2"
                                        placeholder="Password">
                                </div>

                                {{-- <div class="form-group">
                                    Jenis Usaha
                                    <select name="status" class="form-control"
                                        style="margin-left: 15px; margin-right: 15px;" required>
                                        <option>Bendahara</option>
                                        <option>Pencatat Transaksi</option>
                                    </select>
                                </div> --}}
                                <button class="btn btn-success center" 
                                onclick="window.location.href='{{ route('get.modal') }}'">
                                <a href="{{ route('get.modal') }}" class="text-white">
                                Unduh
                            </a>
                            </button>
                            </form>
                            <center>
                                <p>&nbsp;</p>
                                <table border="0" cellpadding="0" cellspacing="0" id="sheet0"
                                    class="sheet0 gridlines">
                                    <col class="col0">
                                    <col class="col1">
                                    <col class="col2">
                                    <col class="col3">
                                    <tbody>
                                        <tr class="row0">
                                            <td class="column0 style132 s style132" colspan="3">LAPORAN PERUBAHAN MODAL
                                            </td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row1">
                                            <td class="column0 style133 s style133" colspan="3">BUM DESA PUTRI NYALE
                                                KUTA</td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row2">
                                            <td class="column0 style20 null"></td>
                                            <td class="column1 style20 null"></td>
                                            <td class="column2 style3 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                        </tr>
                                        {{-- <tr class="row3">
                                            <td class="column0 style134 s style134" colspan="3">Periode: 01/01/2023 -
                                                31/12/2023</td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                        </tr> --}}
                                        <tr class="row4">
                                            <td class="column0 style8 null"></td>
                                            <td class="column1 style8 null"></td>
                                            <td class="column2 style8 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row5">
                                            <td class="column0 style110 s">No.</td>
                                            <td class="column1 style96 s">Keterangan</td>
                                            <td class="column2 style97 s">Jumlah</td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row6">
                                            <td class="column0 style108 s">1.</td>
                                            <td class="column1 style109 s">SALDO MODAL AWAL</td>
                                            <td class="column2 style98 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row7">
                                            <td class="column0 style152 s style153" rowspan="4">2.</td>
                                            <td class="column1 style99 s">PERUBAHAN MODAL</td>
                                            <td class="column2 style100 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row8">
                                            <td class="column1 style101 s">Penambahan (setor modal, Laba)</td>
                                            <td class="column2 style102 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row9">
                                            <td class="column1 style103 s">Pengurangan (Prive, Rugi)</td>
                                            <td class="column2 style104 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row10">
                                            <td class="column1 style105 s">Total Perubahan Modal</td>
                                            <td class="column2 style106 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row11">
                                            <td class="column0 style150 s style151" colspan="2">SALDO MODAL AKHIR</td>
                                            <td class="column2 style107 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row12">
                                            <td class="column0 style3 null"></td>
                                            <td class="column1 style3 null"></td>
                                            <td class="column2 style3 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row13">
                                            <td class="column0 style3 null"></td>
                                            <td class="column1 style3 s">Diperiksa oleh</td>
                                            <td class="column2 style3 s">Dibuat oleh </td>
                                            <td class="column3 style3 null"></td>
                                        </tr>
                                        <tr class="row14">
                                            <td class="column0 style3 null"></td>
                                            <td class="column1 style3 s">Ketua Bumdes,</td>
                                            <td class="column2 style3 s">Bendahara,</td>
                                            <td class="column3 style3 null"></td>
                                        </tr>
                                        <tr class="row15">
                                            <td class="column0 style3 null"></td>
                                            <td class="column1 style3 null"></td>
                                            <td class="column2 style3 null"></td>
                                            <td class="column3 style3 null"></td>
                                        </tr>
                                        <tr class="row16">
                                            <td class="column0 style3 null"></td>
                                            <td class="column1 style3 null"></td>
                                            <td class="column2 style3 null"></td>
                                            <td class="column3 style3 null"></td>
                                        </tr>
                                        <tr class="row17">
                                            <td class="column0 style3 null"></td>
                                            <td class="column1 style3 null"></td>
                                            <td class="column2 style3 null"></td>
                                            <td class="column3 style3 null"></td>
                                        </tr>
                                        <tr class="row18">
                                            <td class="column0 style3 null"></td>
                                            <td class="column1 style3 null"></td>
                                            <td class="column2 style3 null"></td>
                                            <td class="column3 style3 null"></td>
                                        </tr>
                                        <tr class="row19">
                                            <td class="column0 style3 null"></td>
                                            <td class="column1 style3 s">( EMUR )</td>
                                            <td class="column2 style3 s">( FETRILIA VIOLANDA )</td>
                                            <td class="column3 style3 null"></td>
                                        </tr>
                                        <tr class="row20">
                                            <td class="column0 style3 null"></td>
                                            <td class="column1 style3 null"></td>
                                            <td class="column2 style3 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                        </tr>
                                        <tr class="row21">
                                            <td class="column0 style3 null"></td>
                                            <td class="column1 style3 null"></td>
                                            <td class="column2 style3 null"></td>
                                            <td class="column3 style3 null">&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->
@endsection
