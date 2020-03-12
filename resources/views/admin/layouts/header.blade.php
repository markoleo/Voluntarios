<div class="header-section">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">

                    <!-- Header Logo (Header Left) Start -->
                    <div class="header-logo col-auto">
                        <a href="{{ url('/') }}">
                            <img src="{{asset("assets/images/logo/CIJTulancingo3.png" )}}" alt="">
                            <img src="{{asset("assets/images/logo/CIJTulancingo3.png")}}" class="logo-light" alt="">
                        </a>
                    </div><!-- Header Logo (Header Left) End -->

                    <!-- Header Right Start -->
                    <div class="header-right flex-grow-1 col-auto">
                        <div class="row justify-content-between align-items-center">

                            <!-- Side Header Toggle & Search Start -->
                            <div class="col-auto">
                                <div class="row align-items-center">

                                    <!--Side Header Toggle-->
                                    <div class="col-auto"><button class="side-header-toggle"><i class="zmdi zmdi-menu"></i></button></div>

                                    <!--Header Search-->

                                </div>
                            </div><!-- Side Header Toggle & Search End -->

                            <!-- Header Notifications Area Start -->
                            <div class="col-auto">

                                <ul class="header-notification-area">

                                    <!--Notification-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#"><i class="zmdi zmdi-notifications"></i><span class="badge"></span></a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-notifications">
                                            <div class="head">
                                                <h5 class="title">Tienes 1 notificación nueva.</h5>
                                            </div>
                                            <div class="body custom-scroll">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-notifications-none"></i>
                                                            <p>Bienvenid@ al Sistema de Integracion de Registro y Control de Coberturas.</p>
                                                        </a>
                                                        <span class="float-right">Hoy 16:28</span>
                                                        <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="footer">
                                                <a href="#" class="view-all">Ver todo</a>
                                            </div>
                                        </div>

                                    </li>

                                    <!--User-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#">
                                            <span class="user">
                                        <span class="avatar">
                                            <img src="{{asset("assets/images/avatar-1.png")}}" alt="">
                                            <span class="status"></span>
                                            </span>
                                            <span class="name">{{ Auth::user()->name }}</span>
                                            </span>
                                        </a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-user">
                                            <div class="head">
                                                <h5 class="name"><a href="#">{{ Auth::user()->name }}</a></h5>
                                                <a class="mail" href="#"></a>
                                            </div>
                                            <div class="body">
                                                <ul>
                                                    <li><a href="{{ route('logout') }}"
                                                           onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();"><i class="zmdi zmdi-lock-open"></i>Cerrar sesión</a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </li>
                                                          </ul>
                                                      </div>
                                                       </div>

                                                     </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </li>

                                </ul>

                            </div><!-- Header Notifications Area End -->

                        </div>
                    </div><!-- Header Right End -->

        </div>

