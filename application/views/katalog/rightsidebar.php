<div class="sidebar right" id="notif">
    <div class="wrapper">
        <button class="close-sidebar" onclick="sidebarClose()">
            <i class="material-icons">close</i>
        </button>
        <div class="title">Notifications</div>
        <div class="accordion" id="accordionNotif">
            <a data-toggle="collapse" href="#collapseUnread" class="notif-accordion px-3">Unread</a>
            <div id="collapseUnread" class="collapse show" data-parent="#accordionNotif">
                <div class="content-wrapper">
                    <ul class="notif-list">
                        <li class="no-notif">
                            You haven't any notifications
                        </li>
                    </ul>
                </div>
            </div>
            <a data-toggle="collapse" href="#collapseRead" class="notif-accordion px-3">Readed</a>
            <div id="collapseRead" class="collapse" data-parent="#accordionNotif">
                <div class="content-wrapper">
                    <ul class="notif-list">
                        <li>
                            <a href="#!" class="px-3">
                                <div class="user-img">
                                    <img src="../assets/logo 1.png" alt="user-image">
                                </div>
                                <div class="d-block" style="width: calc(100% - 40px - 13px);">
                                    <p><b>Admin</b>, just posted an <b>announcement</b></p>
                                    <small>Just now</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="px-3">
                                <div class="user-img">
                                    <img src="../assets/logo.png" alt="user-image">
                                </div>
                                <div class="d-block" style="width: calc(100% - 40px - 13px);">
                                    <p><b>Ilham</b>, just shared 3 <b>new books</b></p>
                                    <small>15 mins ago</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-3.2.1.min.js">
</script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-4.3.1/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/style.js"></script>
<script src="<?php echo base_url(); ?>assets/js/dashboard.js"></script>
<script src="<?php echo base_url(); ?>assets/js/toast.js"></script>
</body>

</html>