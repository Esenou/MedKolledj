<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">ОСНОВНАЯ НАВИГАЦИЯ</li>

            {{-- Dashboard --}}
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route("addInfo")}}"><i class="fa fa-circle-o"></i>Добавить </a></li>
                    <li><a href="{{route("listInfo")}}"><i class="fa fa-circle-o"></i> Список </a></li>
                </ul>
            </li>

            {{--class menu--}}
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Главная страница</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{ route('addClassSection') }}"><i class="fa fa-circle-o"></i>Добавить слайдер</a></li>
                    <li><a href="{{ route('listClassSection') }}"><i class="fa fa-circle-o"></i> Список  </a></li>
                </ul>
            </li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-newspaper-o"></i> <span>Новости</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{ route('addNews') }}"><i class="fa fa-circle-o"></i>Добавить новости</a></li>
                    <li><a href="{{ route('listNews') }}"><i class="fa fa-circle-o"></i> Список </a></li>
                </ul>
            </li>
         </ul>
    </section>
    <!-- /.sidebar -->
</aside>
