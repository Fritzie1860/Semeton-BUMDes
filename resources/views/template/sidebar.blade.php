<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="text-center">
                @foreach ($profilbumdes as $item)
                    <a href=""></a><img src="/images/upload/{{ $item['foto'] }}" alt=""
                        class="img-circle"></a>
                @endforeach
            </div>
            <div class="user-info">
                <div class="dropdown m-t-5">
                    <!--  -->
                    {{-- @if (Auth::user()->status == 'Ketua') --}}
                    <h5><a href="{{ route('bumdes.index') }}" class="text-white">BUMDes Kuta Mandalika</a></h5>
                    {{-- @else --}}
                    {{-- <h5> --}}
                    {{-- <p class="text-white">BUMDes Kuta Mandalika</p> --}}
                    {{-- </h5> --}}
                    <!--  -->
                    {{-- @endif --}}
                </div>

                {{-- <p class="text-muted m-0"><i class="fa fa-dot-circle-o text-success"></i> Online</p> --}}
            </div>
        </div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect"><i class="ion-android-user-menu"></i><span>
                            Dashboard </span></a>
                </li>


                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ion-android-note"></i> <span> Master
                            Data</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('pengelola.index') }}">Pengelola</a></li>
                        <li><a href="{{ route('dataakun') }}">Data Akun</a></li>
                        <li><a href="{{ route('pemasok.index') }}">Pemasok</a></li>
                        <li><a href="{{ route('pelanggan.index') }}">Pelanggan</a></li>
                        <li><a href="{{ route('hutang.index') }}">Data hutang</a></li>
                        <!-- <li><a href="ui-progressbars.html">Data Investor</a></li> Note: Future Development -->
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-group"></i> <span> Jasa</span>
                        <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('transaksi.index') . '?t=jasa' }}">Transaksi Jasa</a></li>
                        <li><a href="{{ route('transaksi.index') . '?t=bebanjasa' }}">Beban</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-shopping-basket"></i> <span>
                            Dagang</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('transaksi.index') . '?t=pembelian' }}">Pembelian</a></li>
                        <li><a href="{{ route('transaksi.index') . '?t=penjualan' }}">Penjualan</a></li>
                        <li><a href="{{ route('transaksi.index') . '?t=bebandagang' }}">Beban</a></li>
                    </ul>
                </li>

                <!-- <li>
                    <a href="index.html" class="waves-effect"><i class="ti-home"></i><span> Bagi Hasil </span></a>
                </li> Note: Future Development-->

                <li>
                    <a href="{{ Route('barang.index') }}" class="waves-effect"><i class="fa fa-cubes"></i><span>
                            Persediaan
                            Barang
                        </span></a>
                </li>

                <li>
                    <a href="/laporan" class="waves-effect"><i class="fa fa-bar-chart-o"></i><span> Laporan </span></a>
                </li>

            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->
