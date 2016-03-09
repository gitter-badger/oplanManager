<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->

    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">SPRÁVA</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-cube"></i> <span>Správa klubů</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('clubs.index') }}"><i class="fa fa-circle-o"></i> Seznam klubů</a></li>
          <li><a href="{{ route('clubs.create') }}"><i class="fa fa-circle-o"></i> Přidat nový klub</a></li>
        </ul>
      </li>

      <li class="header">ČLENSKÁ SEKCE</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Panel</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
          <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
        </ul>
      </li>

      <li class="header">SPRÁVA OBSAHU</li>
      <li><a href="{{ route('admin.pages.index') }}"><i class="fa fa-file-text-o"></i> Stránky</a></li>
      <li><a href="{{ route('news.index') }}"><i class="fa fa-newspaper-o"></i> Novinky</a></li>
      <li><a href="#"><i class="fa fa-bars"></i>Správa menu</a></li>
      <li><a href="#"><i class="fa fa-file-image-o"></i> Správa médií</a></li>


      <li>
        <a href="../mailbox/mailbox.html">
          <i class="fa fa-envelope"></i> <span>Mailbox</span>
          <small class="label pull-right bg-yellow">12</small>
        </a>
      </li>

      <li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
      <li class="header">STRÁNKY</li>
      <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>O stránkách</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
