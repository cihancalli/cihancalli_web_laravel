<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.dashboard')}}">
            <div class="sidebar-brand-text mx-3">@yield('backendPanelTitle','cihancalli')
                <sup>@yield('backendPAnelSupTitle','.com')</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item @if(Request::segment(2)=="dashboard") active @endif">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>
                    @yield('backendMenuDashboardText','Dashboard')
                </span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            @yield('backendMenuTitleContentsText','Contents')
        </div>

        <!-- Nav Item - Posts Collapse Menu -->
        <li class="nav-item @if(Request::segment(2)=="posts") active @endif">
            <a class="nav-link @if(Request::segment(2)=="posts") in @else collapsed @endif" href="#" data-toggle="collapse" data-target="#collapsePosts"
               aria-expanded="true" aria-controls="collapsePosts">
                <i class="fas fa-fw fa-edit"></i>
                <span>@yield('backendMenuPostsText','Posts')</span>
            </a>
            <div id="collapsePosts" class="collapse @if(Request::segment(2)=="posts") show @endif" aria-labelledby="headingPosts" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">@yield('backendMenuSubTitleCustomPostsText','Custom Posts'):</h6>
                    <a class="collapse-item @if(Request::segment(2)=="posts" && Request::segment(3)=="create") active @endif"
                       href="{{route('admin.posts.create')}}">@yield('backendSubMenuNewPostText','New Post')</a>
                    <a class="collapse-item @if(Request::segment(2)=="posts" && Request::segment(3)=="") active @endif"
                       href="{{route('admin.posts.index')}}">@yield('backendSubMenuAllPostsText','All Posts')</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Categories Collapse Menu -->
        <li class="nav-item @if(Request::segment(2)=="categories") active @endif">
            <a class="nav-link @if(Request::segment(2)=="categories") in @else collapsed @endif" href="#" data-toggle="collapse" data-target="#collapseCategories"
               aria-expanded="true" aria-controls="collapseCategories">
                <i class="fa fa-object-group"></i>
                <span>@yield('backendMenuCategoriesText','Categories')</span>
            </a>
            <div id="collapseCategories" class="collapse @if(Request::segment(2)=="categories") show @endif" aria-labelledby="headingCategories"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">@yield('backendMenuSubTitleCustomCategoriesText','Custom Categories')
                        :</h6>
                    <a class="collapse-item @if(Request::segment(2)=="categories" && Request::segment(3)=="create") active @endif"
                       href="{{route('admin.categories.create')}}">@yield('backendSubMenuNewCategoryText','New Category')</a>
                    <a class="collapse-item @if(Request::segment(2)=="categories" && Request::segment(3)=="") active @endif"
                       href="{{route('admin.categories.index')}}">@yield('backendSubMenuAllCategoriesText','All Categories')</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item @if(Request::segment(2)=="pages") active @endif">
            <a class="nav-link @if(Request::segment(2)=="pages") in @else collapsed @endif" href="#" data-toggle="collapse" data-target="#collapsePages"
               aria-expanded="true" aria-controls="collapsePages">
                <i class="fa fa-file"></i>
                <span>@yield('backendMenuPagesText','Pages')</span>
            </a>
            <div id="collapsePages" class="collapse @if(Request::segment(2)=="pages") show @endif" aria-labelledby="headingPages"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">@yield('backendMenuSubTitleCustomPagesText','Custom Pages')
                        :</h6>
                    <a class="collapse-item @if(Request::segment(2)=="pages" && Request::segment(3)=="create") active @endif"
                       href="{{route('admin.pages.create')}}">@yield('backendSubMenuNewPageText','New Page')</a>
                    <a class="collapse-item @if(Request::segment(2)=="pages" && Request::segment(3)=="") active @endif"
                       href="{{route('admin.pages.index')}}">@yield('backendSubMenuAllPagesText','All Pages')</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            @yield('backendMenuTitleContentsText','Message Settings')
        </div>

        <!-- Nav Item - Contacts Collapse Menu -->
        <li class="nav-item @if(Request::segment(2)=="contacts") active @endif">
            <a class="nav-link @if(Request::segment(2)=="contacts") in @else collapsed @endif" href="#" data-toggle="collapse" data-target="#collapseContacts"
               aria-expanded="true" aria-controls="collapseContacts">
                <i class="fa fa-comment"></i>
                <span>@yield('backendMenuContactsText','Contacts')</span>
            </a>
            <div id="collapseContacts" class="collapse @if(Request::segment(2)=="contacts") show @endif" aria-labelledby="headingContacts"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">@yield('backendMenuSubTitleCustomContactsText','Custom Contacts')
                        :</h6>
                    <a class="collapse-item @if(Request::segment(2)=="contacts" && Request::segment(3)=="create") active @endif"
                       href="{{route('admin.contacts.create')}}">@yield('backendSubMenuNewContactText','New Mail')</a>
                    <a class="collapse-item @if(Request::segment(2)=="contacts" && Request::segment(3)=="") active @endif"
                       href="{{route('admin.contacts.index')}}">@yield('backendSubMenuAllContactsText','All Contacts')</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Notifications Collapse Menu -->
        <li class="nav-item @if(Request::segment(2)=="notifications") active @endif">
            <a class="nav-link @if(Request::segment(2)=="notifications") in @else collapsed @endif" href="#" data-toggle="collapse" data-target="#collapseNotifications"
               aria-expanded="true" aria-controls="collapseNotifications">
                <i class="fa fa-bell"></i>
                <span>@yield('backendMenuNotificationsText','Notifications')</span>
            </a>
            <div id="collapseNotifications" class="collapse @if(Request::segment(2)=="notifications") show @endif" aria-labelledby="headingNotifications"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">@yield('backendMenuSubTitleCustomNotificationsText','Custom Notifications')
                        :</h6>
                    <a class="collapse-item @if(Request::segment(2)=="notifications" && Request::segment(3)=="create") active @endif"
                       href="{{route('admin.notifications.create')}}">@yield('backendSubMenuNewNotificationText','New Notification')</a>
                    <a class="collapse-item @if(Request::segment(2)=="notifications" && Request::segment(3)=="") active @endif"
                       href="{{route('admin.notifications.index')}}">@yield('backendSubMenuAllNotificationsText','All Notifications')</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            @yield('backendMenuTitleContentsText','User Settings')
        </div>

        <!-- Nav Item - Users Collapse Menu -->
        <li class="nav-item @if(Request::segment(2)=="users") active @endif">
            <a class="nav-link @if(Request::segment(2)=="users") in @else collapsed @endif" href="#" data-toggle="collapse" data-target="#collapseUsers"
               aria-expanded="true" aria-controls="collapseUsers">
                <i class="fa fa-user"></i>
                <span>@yield('backendMenuUsersText','Users')</span>
            </a>
            <div id="collapseUsers" class="collapse @if(Request::segment(2)=="users") show @endif" aria-labelledby="headingUsers"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">@yield('backendMenuSubTitleCustomUsersText','Custom Users')
                        :</h6>
                    <a class="collapse-item @if(Request::segment(2)=="users" && Request::segment(3)=="create") active @endif"
                       href="{{route('admin.users.create')}}">@yield('backendSubMenuNewUserText','New User')</a>
                    <a class="collapse-item @if(Request::segment(2)=="users" && Request::segment(3)=="") active @endif"
                       href="{{route('admin.users.index')}}">@yield('backendSubMenuAllUsersText','All Users')</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Roles Collapse Menu -->
        <li class="nav-item @if(Request::segment(2)=="roles") active @endif">
            <a class="nav-link @if(Request::segment(2)=="roles") in @else collapsed @endif" href="#" data-toggle="collapse" data-target="#collapseRoles"
               aria-expanded="true" aria-controls="collapseRoles">
                <i class="fa fa-handshake"></i>
                <span>@yield('backendMenuRolesText','Roles')</span>
            </a>
            <div id="collapseRoles" class="collapse @if(Request::segment(2)=="roles") show @endif" aria-labelledby="headingRoles"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">@yield('backendMenuSubTitleCustomRolesText','Custom Roles')
                        :</h6>
                    <a class="collapse-item @if(Request::segment(2)=="roles" && Request::segment(3)=="create") active @endif"
                       href="{{route('admin.roles.create')}}">@yield('backendSubMenuNewRoleText','New Role')</a>
                    <a class="collapse-item @if(Request::segment(2)=="roles" && Request::segment(3)=="") active @endif"
                       href="{{route('admin.roles.index')}}">@yield('backendSubMenuAllRolesText','All Roles')</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Fcm Users Collapse Menu -->
        <li class="nav-item @if(Request::segment(2)=="fcmusers") active @endif">
            <a class="nav-link @if(Request::segment(2)=="fcmusers") in @else collapsed @endif" href="#" data-toggle="collapse" data-target="#collapseFcmUsers"
               aria-expanded="true" aria-controls="collapseFcmUsers">
                <i class="fa fa-tablet"></i>
                <span>@yield('backendMenuFcmUsersText','FCM Users')</span>
            </a>
            <div id="collapseFcmUsers" class="collapse @if(Request::segment(2)=="fcmusers") show @endif" aria-labelledby="headingFcmUsers"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">@yield('backendMenuSubTitleCustomFcmUsersText','Custom FcmUsers')
                        :</h6>
                    <a class="collapse-item @if(Request::segment(2)=="fcmUsers" && Request::segment(3)=="create") active @endif"
                       href="{{route('admin.fcmusers.create')}}">@yield('backendSubMenuNewFcmUserText','New FCM User')</a>
                    <a class="collapse-item @if(Request::segment(2)=="fcmUsers" && Request::segment(3)=="") active @endif"
                       href="{{route('admin.fcmusers.index')}}">@yield('backendSubMenuAllFcmUsersText','All FCM Users')</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small"
                               placeholder="@yield('backendSearchForText','Search for...')"
                               aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                @yield('backendAlertCenterText','Alerts Center')
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                @yield('backendMessageCenterText','Message Center')
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle"
                                         src="{{route('homepage')}}/backend/img/undraw_profile_1.svg"
                                         alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                        problem I've been having.
                                    </div>
                                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle"
                                         src="{{route('homepage')}}/backend/img/undraw_profile_2.svg"
                                         alt="...">
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">I have the photos that you ordered last month, how
                                        would you like them sent to you?
                                    </div>
                                    <div class="small text-gray-500">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle"
                                         src="{{route('homepage')}}/backend/img/undraw_profile_3.svg"
                                         alt="...">
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Last month's report looks great, I am very happy with
                                        the progress so far, keep up the good work!
                                    </div>
                                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                         alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                        told me that people say this to all dogs, even if they aren't good...
                                    </div>
                                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500"
                               href="#">@yield('backendReadMoreMessageText','Read More Messages')</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span
                                class="mr-2 d-none d-lg-inline text-gray-600 small">@yield('username','Cihan Çallı')</span>
                            <img class="img-profile rounded-circle"
                                 src="{{route('homepage')}}/backend/img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                @yield('backendProfileText','Profile')

                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                @yield('backendSettingsText','Settings')

                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                @yield('backendActivityLogText','Activity Log')

                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                @yield('backendLogoutText',' Logout')

                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">@yield('backendTitle','Dashboard')</h1>
                    <a href="{{route('homepage')}}" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-globe fa-sm text-white-50"></i> @yield('viewSite','View Site')</a>
                </div>




