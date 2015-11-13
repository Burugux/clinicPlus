<!DOCTYPE html>
<!--this is my dashboard -->
<html>
  <head>
    <meta charset="UTF-8">
    <title>clinicPlus | Dash</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link rel="stylesheet" href="/bower_components/admin-lte/bootstrap/css/bootstrap.min.css"/>
    <!-- Font Awesome Icons -->
    <link href="/fontAwesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- fullCalendar 2.2.5-->
    <link rel="stylesheet" href="/bower_components/admin-lte/plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="/bower_components/admin-lte/plugins/fullcalendar/fullcalendar.print.css" media="print">
    <!-- Theme style -->
    <link href="/bower_components/admin-lte/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="/bower_components/admin-lte/dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Header -->
      @include('header')

      <!-- Sidebar -->
      @include('sidebar')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        {{-- <section class="content-header">
          <h1>
            {{ $page_title or null }}
            <small>{{ $page_description or null }}</small>
          </h1>
           --}}
        </section>

        <!-- Main content -->
        <section class="content">          
          <!--Page Content is Here -->

          <!-- REQUIRED JS SCRIPTS -->
          <!-- jQuery 2.1.4 -->
    <script src="/bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/bower_components/admin-lte/plugins/jQueryUI/jquery-ui.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="/bower_components/admin-lte/dist/js/app.min.js" type="text/javascript"></script>
    <!-- fullCalendar 2.2.5 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="/bower_components/admin-lte/plugins/fullcalendar/fullcalendar.min.js"></script>

          @yield('content')

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

    </div><!-- ./wrapper -->
    @include('footer') 
 
  </body>
</html>