<!-- Main Header -->
<header class="main-header">

  <!-- Logo -->
  <a href="dash" class="logo"><b>clinic</b>Plus</a>

  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <!-- User Account Menu -->
        <li class="dropdown user user-menu">
          <!-- Menu Toggle Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!-- The user image in the navbar-->
          <img src="{{ asset("/bower_components/admin-lte/dist/img/photo4.jpg") }}" class="user-image" alt="User Image"/>
            <!-- hidden-xs hides the username on small devices so only the image appears. -->
            <span class="hidden-xs"> {{$userDetails->name or "User"}} </span>
          </a>
          <ul class="dropdown-menu">
            <!-- The user image in the menu -->
            <li class="user-header">
              <img src="{{ asset("/bower_components/admin-lte/dist/img/photo4.jpg") }}" class="img-circle" alt="User Image" />
              <p>
              {{$userDetails->name  or "User"}}
                <small> Doctor since {{$userDetails->created_at or "Today"}} </small>
              </p>
            </li>
            
            <!-- user drop down footer -->

            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="auth/logout" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>