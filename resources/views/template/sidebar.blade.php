
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header"></li>
        <!-- Optionally, you can add icons to the links -->
        <li {{{ (Request::is('home') ? 'class=active' : '') }}}><a href="{{ route('home-index') }}"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Transaksi Barang</span></a></li>
        <li><a href="#"><i class="fa fa-exchange"></i> <span>Retur Barang</span></a></li>
        <li class="treeview 
        {{{ (Request::is('master_item') ? 'active' : '') }}}
        {{{ (Request::is('master_area') ? 'active' : '') }}}
        {{{ (Request::is('master_kategori_barang') ? 'active' : '') }}}
        ">
          <a href="#"><i class="fa fa-cogs"></i> <span>Kelola Data Master</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li {{{ (Request::is('master_item') ? 'class=active' : '') }}}><a href="{{ route('master-item') }}"><i class="fa fa-angle-right"></i> <span>Master Data Barang</span></a></li>
            <li {{{ (Request::is('master_area') ? 'class=active' : '') }}}><a href="{{ route('master-area') }}"><i class="fa  fa-angle-right"></i> <span>Master Data Area</span></a></li>
            <li {{{ (Request::is('master_kategori_barang') ? 'class=active' : '') }}}><a href="{{ route('master-kategori-barang') }}"><i class="fa  fa-angle-right"></i> <span>Master Data Kategori</span></a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-comment"></i> <span>Pengumuman Informasi</span></a></li>
        <li {{{ (Request::is('regis') ? 'class=active' : '') }}}><a href="{{ route('regis-user') }}"><i class="fa fa-user-plus"></i> <span>Management User</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>