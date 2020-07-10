<footer>
        <div class="container">
            <div class="copyright">
                <span>
                    <b>Journal Wawasan Universal</b> &copy; 2019. All Rights Reserved.
                </span>
                <a href="#!" class="jwu-btn ripple-effect dark-ripple">Contact Us</a>
            </div>
        </div>
    </footer>
    <a class="to-top" href="#top">
        <i class="material-icons">keyboard_arrow_up</i>
    </a>
    <div class="sidebar left">
        <div class="wrapper">
        <button class="close-sidebar" onclick="sidebarClose()">
            <i class="material-icons">close</i>
        </button>
        <div class="title">
            Menu
        </div>
        <ul class="sidebar-menu">
            <li>
                <a href="#">
                    <i class="material-icons">home</i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">info</i>
                    <span>About</span>
                </a>
            </li>
            <li class="has-child">
                <a data-toggle="collapse" href="#journalsSublist" id="journalToggle">
                    <i class="material-icons">archive</i>
                    <span>Journals</span>
                    <i class="material-icons arrow" id="journalToggleArrow">keyboard_arrow_down</i>
                </a>
            </li>
            <div class="collapse" id="journalsSublist">
                <ul class="sidebar-menu">
                    <li>
                        <a href="#">
                            <i class="material-icons">keyboard_arrow_right</i>
                            <span>Submenu 1</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">keyboard_arrow_right</i>
                            <span>Submenu 2</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">keyboard_arrow_right</i>
                            <span>Submenu 3</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">keyboard_arrow_right</i>
                            <span>Submenu 4</span>
                        </a>
                    </li>
                </ul>
            </div>
            <li class="has-child">
                <a data-toggle="collapse" href="#journalsProceedSublist" id="journalProceedToggle">
                    <i class="material-icons">archive</i>
                    <span>Journal Proceeds</span>
                    <i class="material-icons arrow" id="journalProceedToggleArrow">keyboard_arrow_down</i>
                </a>
            </li>
            <div class="collapse" id="journalsProceedSublist">
                <ul class="sidebar-menu">
                    <li>
                        <a href="#">
                            <i class="material-icons">keyboard_arrow_right</i>
                            <span>Submenu 1</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">keyboard_arrow_right</i>
                            <span>Submenu 2</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">keyboard_arrow_right</i>
                            <span>Submenu 3</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">keyboard_arrow_right</i>
                            <span>Submenu 4</span>
                        </a>
                    </li>
                </ul>
            </div>
            <li class="has-child">
                <a data-toggle="collapse" href="#booksSublist" id="bookToggle">
                    <i class="material-icons">book</i>
                    <span>E-Books</span>
                    <i class="material-icons arrow" id="bookToggleArrow">keyboard_arrow_down</i>
                </a>
            </li>
            <div class="collapse" id="booksSublist">
                <ul class="sidebar-menu">
                    <li>
                        <a href="#">
                            <i class="material-icons">keyboard_arrow_right</i>
                            <span>Submenu 1</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">keyboard_arrow_right</i>
                            <span>Submenu 2</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">keyboard_arrow_right</i>
                            <span>Submenu 3</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">keyboard_arrow_right</i>
                            <span>Submenu 4</span>
                        </a>
                    </li>
                </ul>
            </div>
            <li>
                <a href="#">
                    <i class="material-icons">announcement</i>
                    <span>Events</span>
                </a>
            </li>
        </ul>
        </div>
    </div>
    <div class="sidebar right" id="sidebar">
        <div class="wrapper">
        <button class="close-sidebar" onclick="sidebarClose()">
            <i class="material-icons">close</i>
        </button>
        <div class="title"></div>
        <div class="p-4 content-wrapper">
            <div class="sidebar-title mb-2">
                <h2>Search</h2>
            </div>
            <form action="javascript:void(0)" class="mb-5">
                <div class="searchform">
                    <input type="text" id="keyword2" name="keyword2" placeholder="Search Journals" value="">
                    <button type="submit" class="jwu-btn ripple-effect dark-ripple btn-default">Search</button>
                </div>
            </form>
            <div class="sidebar-title mb-2">
                <h2>Login</h2>
            </div>
            <form action="" class="mb-3">
                <input type="text" id="un1" name="un" placeholder="Your Username">
                <input type="password" id="pw1" name="pw" placeholder="Your Password" style="margin-bottom: 0;">
                <div class="row">
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <label class="for-checkbox small" style="white-space: nowrap;">
                                Remember me
                                <input name="chk1" type="checkbox" value="1" id="chk1">
                                <span class="checkmark pr-2">
                                    <i class="material-icons">check</i>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="col-6">
                        <a href="#" class="small float-right">Forget Password?</a>
                    </div>
                </div>
                <div class="to-make-it-center mt-2">
                    <button type="submit" class="jwu-btn ripple-effect dark-ripple">Login</button>
                </div>
            </form>
            <div class="mb-5 text-center small">
                <span>Doesn't have any account?</span> <a href="javascript:sidebarToggle('register-bar')">Register</a>
            </div>
            <div class="sidebar-title mb-2">
                <h2>Most Downloaded</h2>
            </div>
            <ul class="journal-list mb-5">
                <li>
                    <div class="cover">
                        <img src="../assets/journals/journalThumbnail_en_US (1).jpg" alt="cover">
                    </div>
                    <div class="text">
                        <span>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident harum architecto eligendi quos ex dignissimos.
                        </span>
                        <a href="#!" class="jwu-btn ripple-effect dark-ripple">
                            Review
                        </a>
                    </div>
                </li>
                <li>
                    <div class="cover">
                        <img src="../assets/journals/journalThumbnail_en_US (2).jpg" alt="cover">
                    </div>
                    <div class="text">
                        <span>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident harum architecto eligendi quos ex dignissimos.
                        </span>
                        <a href="#!" class="jwu-btn ripple-effect dark-ripple">
                            Review
                        </a>
                    </div>
                </li>
            </ul>
        </div>
        </div>
    </div>
    <div class="sidebar right" id="register-bar">
        <div class="wrapper">
        <button class="close-sidebar" onclick="sidebarClose()">
            <i class="material-icons">close</i>
        </button>
        <div class="title">
            Register
        </div>
        <form action="#!">
        <div class="p-4 content-wrapper">
            <div class="row">
                <div class="col-12">
                    <input type="text" id="username" name="un" placeholder="Your Username" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7 col-12">
                    <input type="text" id="fullname" name="fn" placeholder="Your Full Name" required>
                </div>
                <div class="col-sm-5 col-12">
                    <input type="text" id="nickname" name="nn" placeholder="Nickname" required>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <select class="select2-phone" name="phone-id">
                        <option>+673</option>
                        <option selected>+62</option>
                        <option>+60</option>
                        <option>+95</option>
                        <option>+675</option>
                        <option>+63</option>
                        <option>+65</option>
                        <option>+886</option>
                        <option>+66</option>
                        <option>+670</option>
                        <option>+84</option>
                    </select>
                </div>
                <div class="col-8">
                    <input type="number" id="phone" name="phone" placeholder="Your Phone Number" required>
                </div>
            </div>
        </div>
        <div class="mt-2" style="position: absolute; bottom: 0; left: 0; padding: 1rem; width: 100%;">
            <button type="submit" class="jwu-btn ripple-effect dark-ripple d-block" style="width: 100%;">Done</button>
        </div>
        </form>
        </div>
    </div>
    <script src="<?php echo base_url();?>assets/plugins/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-4.3.1/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/select2/dist/js/select2.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/style.js"></script>
    <script src="<?php echo base_url();?>assets/js/carousel.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2-phone').select2({
                width: '100%',
                theme: 'default'
            });
        });
    </script>
</body>
</html>