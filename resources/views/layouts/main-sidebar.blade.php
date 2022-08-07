<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a  href="{{ route('info.index')}}"> <i data-toggle="collapse" data-target="#dashboard"></i>
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">info school</span>
                            </div>
                            
                            <div class="clearfix"></div>
                        </a>

                    </li>
                    <!-- menu title -->
                    
                    <!-- menu item Elements-->
                    <li>
                        <a href="{{ route('activity.admin')}}"> <i data-toggle="collapse" data-target="#elements"></i>
                            <div class="pull-left"><i class="ti-palette"></i><span
                                    class="right-nav-text">Activity</span></div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <!-- menu item calendar-->
                    <li>
                        <a href="{{ route('subjectt.index')}}"> <i data-toggle="collapse" data-target="#calendar-menu">  </i>
                            <div class="pull-left"><i class="ti-calendar"></i><span
                                    class="right-nav-text">Subject</span></div>
                            <div class="clearfix"></div>
                        </a>

                    </li>
                    <!-- menu item todo-->
                    <li>
                        <a href=" {{route('class')}}"><i class="ti-menu-alt"></i><span class="right-nav-text">Classes</span> </a>
                    </li>
                    <!-- menu item chat-->
                    <li>
                        <a href="{{route('teacher')}}"><i class="ti-comments"></i><span class="right-nav-text">Teacher
                            </span></a>
                    </li>


                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
