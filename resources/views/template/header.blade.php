<div class="topbar">
    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <a href="index.html" class="logo"><img src={{ asset('images/horizon.png') }} width="200"></a>
            <a href="index.html" class="logo-sm"><img src={{ asset('images/favicon.ico') }} height="36"></a>
        </div>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="">
                <div class="pull-left">
                    <button type="button" class="button-menu-mobile open-left waves-effect waves-light">
                        <i class="ion-navicon"></i>
                    </button>
                    <span class="clearfix"></span>
                </div>
                <!--  -->
                <!--  -->
                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="dropdown hidden-xs">
                        <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light"
                            data-toggle="dropdown" aria-expanded="true">
                            <i class="fa fa-bell"></i> <span class="badge badge-xs badge-danger">1</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg">
                            <li class="text-center notifi-title">Notification <span
                                    class="badge badge-xs badge-success">1</span></li>
                            <li class="list-group">
                                <!-- list item-->
                                <a href="" class="list-group-item">
                                    <div class="media">
                                        <div class="media-heading">Gas tersisa 10</div>
                                        <p class="m-0">
                                            <small>BUMDes perlu untuk membeli Gas.</small>
                                        </p>
                                    </div>
                                </a>
                                {{-- <a href="#" class="list-group-item">
                                  <div class="media">
                                     <div class="media-body clearfix">
                                        <div class="media-heading">New Message received</div>
                                        <p class="m-0">
                                           <small>You have 87 unread messages</small>
                                        </p>
                                     </div>
                                  </div>
                                </a>
                                <a href="#" class="list-group-item">
                                  <div class="media">
                                     <div class="media-body clearfix">
                                        <div class="media-heading">Your item is shipped.</div>
                                        <p class="m-0">
                                           <small>It is a long established fact that a reader will</small>
                                        </p>
                                     </div>
                                  </div>
                                </a> --}}
                                {{-- <a href="#" class="list-group-item">
                                  <small class="text-primary">See all notifications</small>
                                </a> --}}
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">

                   <a href="" class="dropdown-toggle profile waves-effect waves-light"
                            data-toggle="dropdown" aria-expanded="true"><img
                                src="/images/upload/{{ Auth::user()->foto }}" alt="user-img" class="img-circle" /></a> 

                        <ul class="dropdown-menu">
                            <li><a href="{{ route('profilpengelola') }}" class="dropdown-item"> Profile</a></li>
                            <li class="divider"></li>
                       
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit"class="btn" and
                                    style="background-color:transparent; margin-left:.3rem">
                                    <li><a style="color: red " class="dropdown-item">Keluar</a></li>
                                </button>
                            </form>
                           
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<!-- Top Bar End -->
