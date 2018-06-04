<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/avatar5.png')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>Jefes de Familia</span>
                <i class="fa fa-angle-left pull-right"></i>
                <!--<span class="label label-primary pull-right">5</span>-->
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-pencil"></i> Agregar</a></li>
                <li><a href="#"><i class="fa fa-edit"></i> Actualizar</a></li>
                <li><a href="#"><i class="fa fa-search"></i> Buscar</a></li>
                <li><a href="#"><i class="fa fa-pencil-square"></i> Modificar</a></li>
                <li><a href="#"><i class="fa fa-list-alt"></i> Listar</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Familiares</span>
                <i class="fa fa-angle-left pull-right"></i>
                <!--<span class="label label-primary pull-right">3</span>-->
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-pencil"></i> Agregar</a></li>
                <li><a href="#"><i class="fa fa-edit"></i> Actualizar</a></li>
                <li><a href="#"><i class="fa fa-search"></i> Buscar</a></li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-book"></i> <span>Manzanas</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
