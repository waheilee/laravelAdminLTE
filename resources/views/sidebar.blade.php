<!-- Left side column. contains the logo and sidebar 左边包含标志的栏-->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less 边栏，可以在sidebar.less中找到样式-->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) 侧边栏用户面板（可选）-->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/bower_components/AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) 搜索表单（可选）-->
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

        <!-- Sidebar Menu 侧边栏菜单-->
        <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links 或者，可以田间图标链接-->
            <li class="active">

                    <i class="fa fa-link"></i>
                    <a href="{{url('/home')}}" class="fa fa-link
                    {{Request::getPathInfo() == 'student' ? 'active' :''}}
                            ">学生列表
                    </a>

            </li>
            <li>

                    <a href="{{url('/student/create')}}" class="fa fa-link"
                    {{Request::getPathInfo() == 'student/create' ? 'active' :''}}
                            ">新增学生
                    </a>

            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-link">

                    </i>
                    <span>Multilevel</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">Link in level 2</a></li>
                    <li><a href="#">Link in level 2</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
