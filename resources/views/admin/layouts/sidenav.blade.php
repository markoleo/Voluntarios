<div class="side-header show">
    <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
    <!-- Side Header Inner Start -->
    <div class="side-header-inner custom-scroll">

        <nav class="side-header-menu" id="side-header-menu">
            <ul>
                <li><a href="{{route('admin.index')}}"><i class="ti-home"></i> <span>Home</span></a></li>
                <li class="has-sub-menu"><a href="#"><i class="ti-clipboard"></i> <span>Mis Registros</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="#"><span>Crear</span></a></li>
                        <li><a href="#"><span>Ver</span></a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a href="#"><i class="ti-medall"></i><span>Programas Relacionados</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="{{route('references.index')}}"><span>Ver todas</span></a></li>
                        <li><a href="{{route('references.create')}}"><span>Crear</span></a></li>
                    </ul>
                </li>
            </ul>
        </nav>

    </div>
    <!-- Side Header Inner End -->
</div>