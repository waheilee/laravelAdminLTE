<!-- Main Header 主要标题-->
<header class="main-header">

    <!-- Logo -->
    <a href="/home" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels 侧边栏50 * 50迷你像素栏-->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices 定期状态和移动设备标志-->
        <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar 标题导航栏-->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button侧边切换按钮-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu 导航栏右菜单-->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less  消息：可以在dropdown.less中找到-->
                <li class="dropdown messages-menu">
                    <!-- Menu toggle button 菜单切换按钮-->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 4 messages</li>
                        <li>
                            <!-- inner menu: contains the messages 内部菜单：包含的消息-->
                            <ul class="menu">
                                <li><!-- start message 启动消息-->
                                    <a href="#">
                                        <div class="pull-left">
                                            <!-- User Image 用户图像-->
                                            <img src="{{asset('/bower_components/AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                                        </div>
                                        <!-- Message title and timestamp 消息标题和时间戳-->
                                        <h4>
                                            Support Team
                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <!-- The message 消息-->
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <!-- end message 结束消息-->
                            </ul>
                            <!-- /.menu 跟菜单-->
                        </li>
                        <li class="footer"><a href="#">See All Messages</a></li>
                    </ul>
                </li>
                <!-- /.messages-menu 跟消息菜单-->

                <!-- Notifications Menu 通知菜单-->
                <li class="dropdown notifications-menu">
                    <!-- Menu toggle button 菜单切换按钮-->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>
                        <li>
                            <!-- Inner Menu: contains the notifications 内部菜单：包含通知-->
                            <ul class="menu">
                                <li><!-- start notification 启动通知-->
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                    </a>
                                </li>
                                <!-- end notification 关闭通知-->
                            </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                    </ul>
                </li>
                <!-- Tasks Menu 任务菜单-->
                <li class="dropdown tasks-menu">
                    <!-- Menu Toggle Button 菜单切换按钮-->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-danger">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 9 tasks</li>
                        <li>
                            <!-- Inner menu: contains the tasks 内部菜单：包含任务消息-->
                            <ul class="menu">
                                <li><!-- Task item -->
                                    <a href="#">
                                        <!-- Task title and progress text 任务标题和进展文本-->
                                        <h3>
                                            Design some buttons
                                            <small class="pull-right">20%</small>
                                        </h3>
                                        <!-- The progress bar 进度栏-->
                                        <div class="progress xs">
                                            <!-- Change the css width attribute to simulate progress 更改CSS宽度属性来模拟进展-->
                                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item 结束任务项-->
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">View all tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- User Account Menu 用户菜单-->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button 菜单切换按钮-->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar在导航栏中用户图像-->
                        <img src="{{asset('/bower_components/AdminLTE/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. 隐藏-xs 隐藏在所有小型用户设备上出现的图像-->
                        <span class="hidden-xs">Alexander Pierce</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu 在菜单中中用户图像-->
                        <li class="user-header">
                            <img src="{{asset('/bower_components/AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

                            <p>
                                Alexander Pierce - Web Developer
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                        <!-- Menu Body 菜单主体-->
                        <li class="user-body">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer菜单页脚-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                {{--<a href="#" class="btn btn-default btn-flat">Sign out</a>--}}
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    退出
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button控制侧边栏切换按钮 -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>