<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset("/bower_components/admin-lte/dist/img/photo4.jpg") }}" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>{{$userDetails->name or "User"}}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
<br>
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">Quick links</li>

      <!-- Dashboard link and icon -->
      <li class="active">
              <a href="/dash">
                <i class="fa fa-fw fa-th"></i> <span>Dashboard</span>
              </a>
            </li>

            <!-- doctor's dashboard -->
            <li class="active">
              <a href="/nurse">
                <i class="fa fa-fw fa-heart"></i> <span>Nurse's Room</span>
              </a>
            </li>

          <!-- nurse dashboard -->
            <li class="active">
              <a href="/doctor">
                <i class="fa fa-fw fa-medkit"></i> <span>Doctor's Plaza</span>
              </a>
            </li>

            <!-- admin dashboard -->
            <li class="active">
              <a href="/admin">
                <i class="fa fa-hand-spock-o"></i> <span>Admin</span>
              </a>
            </li>

      
            <!--multi level links -->
      <li class="treeview">
        <a href="#"><span>My utilies</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
        </ul>
      </li>
    </ul><!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>