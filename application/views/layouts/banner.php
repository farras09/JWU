<body>
    <div class="overlay">
        <div class="overlay-child"></div>
    </div>
    <div class="banner" id="top">
        <a href="#" class="brand-logo">
            <div class="logo-bg p-2">
                <img src="<?php echo base_url();?>assets/images/logo 1.png" alt="logo">
            </div>
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
    <div class="container hidden-in-mobile" id="nav-cont">
        <nav class="jwu-navbar">
            <div class="" id="menu-cont">
                <div class="row" style="height: 100%;">
                    <div id="brand-col">
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
                <div class="col-sm-12" id="menu-col">
                    <ul class="navbar-menu">
                        <?php
                        if ($this->uri->segment(1) === "Home" && $this->uri->segment(2)==="" || $this->uri->segment(1) == "" || $this->uri->segment(1) == "#!") {
                        ?>
                            <li>
                                <a href="<?php echo base_url(); ?>" class="active">
                                    <span>Home</span>
                                    <i class="material-icons">home</i>
                                </a>
                            </li>
                        <?php } else { ?>
                            <li>
                                <a href="<?php echo base_url(); ?>">
                                    <span>Home</span>
                                    <i class="material-icons">home</i>
                                </a>
                            </li>
                        <?php } ?>
                        <li>
                            <a href="#!">
                                <span>About</span>
                                <i class="material-icons">info</i>
                            </a>
                        </li>
                        <li class="has-child">
                            <a href="#!">
                                <span>Journals</span>
                                <i class="material-icons">archive</i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#!">Submenu 1</a>
                                </li>
                                <li>
                                    <a href="#!">Submenu 2</a>
                                </li>
                                <li>
                                    <a href="#!">Submenu 3</a>
                                </li>
                                <li>
                                    <a href="#!">Lorem ipsum</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child">
                            <a href="#!">
                                <span>Journal Proceeds</span>
                                <i class="material-icons">archive</i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#!">Submenu 1</a>
                                </li>
                                <li>
                                    <a href="#!">Submenu 2</a>
                                </li>
                                <li>
                                    <a href="#!">Submenu 3</a>
                                </li>
                                <li>
                                    <a href="#!">Lorem ipsum</a>
                                </li>
                            </ul>
                        </li>
                        <?php
                        if ($this->uri->segment(1) === "Home" && $this->uri->segment(2) === "catalog") {
                        ?>
                            <li>
                                <a class="active" href="<?php echo site_url('Home/catalog'); ?>">
                                    <span>e-Books</span>
                                    <i class="material-icons">book</i>
                                </a>

                            </li>
                        <?php } else { ?>
                            <li>
                                <a href="<?php echo site_url('Home/catalog'); ?>">
                                    <span>e-Books</span>
                                    <i class="material-icons">book</i>
                                </a>

                            </li>
                            <?php } ?>
                        <li>
                            <a href="#!">
                                <span>Events</span>
                                <i class="material-icons">announcement</i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>