
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header"></li>
        <!-- Optionally, you can add icons to the links -->
        <li id="beranda" {{{ (Request::is('home') ? 'class=active' : '') }}}><a href="{{ route('home-index') }}"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Transaksi Barang</span></a></li>
        <li><a href="#"><i class="fa fa-exchange"></i> <span>Retur Barang</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-cogs"></i> <span>Kelola Data Master</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-angle-right"></i> <span>Master Barang</span></a></li>
            <li><a href="#"><i class="fa  fa-angle-right"></i> <span>Master Area</span></a></li>
          </ul>
        </li>
        <li id="manage_user" {{{ (Request::is('regis') ? 'class=active' : '') }}}><a href="{{ route('regis-user') }}"><i class="fa fa-user-md"></i> <span>Management User</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>