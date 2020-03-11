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
                <li class="has-sub-menu"><a href="#"><i class="ti-bookmark-alt"></i><span>Programas Relacionados</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="{{route('references.index')}}"><span>Ver todas</span></a></li>
                        <li><a href="{{route('references.create')}}"><span>Crear</span></a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a href="#"><i class="ti-id-badge"></i><span>Voluntarios</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="{{route('volunteers.index')}}"><span>Ver todas</span></a></li>
                        <li><a href="{{route('volunteers.create')}}"><span>Crear</span></a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a href="#"><i class="ti-folder"></i><span>Proyectos</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="{{route('projects.index')}}"><span>Ver todas</span></a></li>
                        <li><a href="{{route('projects.create')}}"><span>Crear</span></a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a href="#"><i class="ti-direction"></i><span>Instituciones</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="#"><span>Ver todas</span></a></li>
                        <li><a href="#"><span>Crear</span></a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a href="#"><i class="ti-files"></i><span>Sectores</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="{{route('sector.index')}}"><span>Ver todas</span></a></li>
                        <li><a href="{{route('sector.create')}}"><span>Crear</span></a></li>
                    </ul>
                    </ul>
                </li>
            </ul>
        </nav>

    </div>
    <!-- Side Header Inner End -->
</div>