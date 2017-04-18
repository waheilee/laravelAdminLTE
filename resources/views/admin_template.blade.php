@extends('base')
@section('content')
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @include('header')
        @include('sidebar')
         <!-- Content Wrapper. Contains page content 内容包装，含页面内容-->
            <div class="content-wrapper">

                @include('content_header')
                <!-- Main content 主要内容-->
                     <section class="content">
                <!-- Your Page Content Here 页面内容写这里-->

                         @yield('modules')
                     </section>
                <!-- /.content -->
            </div>
            @include('footer')
    <!-- /.content-wrapper -->
            @include('Control_Sidebar')
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar
         添加栏的北京，此div必须控制侧边栏后立即放置-->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
</body>