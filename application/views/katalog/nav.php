<body>
    <div class="overlay">
        <div class="overlay-child"></div>
    </div>
    <div class="toast jwu-toast animated fadeInDown" style="position: fixed; top: 0; right: 0; z-index: 3;">
        <div class="toast-header">
            <i class="material-icons mr-2">notifications_active</i>
            <strong class="mr-auto">New Notification</strong>
            <small class="ml-3">Just now</small>
            <a href="#!" class="ml-2 mb-1 toast-close">
                <i class="material-icons">close</i>
            </a>
        </div>
        <div class="toast-body">
            You've got 123 notifications, <a href="javascript:sidebarToggle('notif')">check it now</a>
        </div>
    </div>

    <nav class="jwu-navbar fixed">
        <div class="container-fluid">
            <div class="row" style="height: 100%;">
                <button class="d-sidebar-toggler ripple-effect dark-ripple" onclick="dSidebarToggle()">
                    <i class="material-icons">menu</i>
                </button>
                <div class="col-8 col-sm-3 ml-5 pl-4 pl-sm-5">
                    <a href="#" class="brand-logo">
                        <img src="<?php echo base_url();?>assets/images/logo 1.png" alt="logo">
                        <div class="logo-txt">
                            <span>
                                Journal Wawasan Universal
                            </span>
                            <span>
                                Website Link Publishing
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-2 col-sm-8 d-flex align-items-center justify-content-end ml-xl-5 pl-xl-5">
                    <div class="user-info hidden-in-mobile">
                        <a data-toggle="collapse" href="#navbarUserCollapse" class="ripple-effect light-ripple">
                            <div class="user-img">
                                <img src="../assets/logo.png" alt="user-image">
                            </div>
                            <div class="d-block">
                                <span class="user-greet">Good Morning,</span>
                                <span class="user-name">Mr. John</span>
                            </div>
                            <div class="stat-bar">
                                <div class="on-shape on"></div>
                                <span class="user-stat">Online</span>
                            </div>
                        </a>
                        <div class="collapse" id="navbarUserCollapse">
                            <ul class="dropdown-list">
                                <li>
                                    <a class="menus ripple-effect light-ripple" href="#">
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="menus ripple-effect light-ripple" href="#">
                                        <span>Logout</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="menus ripple-effect light-ripple" href="#">
                                        <span>Logoff</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="notif">
                        <a href="javascript:sidebarToggle('notif')" class="jwu-btn flat ripple-effect dark-ripple ml-4">
                            <i class="material-icons menu-icon">notifications</i>
                        </a>
                        <span class="notif-badge">99+</span>
                    </div>
                </div>
            </div>
        </div>
    </nav>