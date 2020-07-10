<div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 mx-auto">
                    <div class="card p-5">
                        <div class="section-title">
                            <h2 class="text-center">Login</h2>
                            <a href="<?php echo site_url('Login/register');?>" class="col-sm-3 jwu-btn float-right mb-2 mr-2">Register</a>
                            <a href="<?php echo base_url(); ?>" class="col-sm-3 jwu-btn float-left mb-2 mr-1">Home</a>
                        </div>
                        <form action="javascript:void(0)" class="mb-2" method="post" id="login">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="username" class="small ml-2">Username</label>
                                    <input type="text" id="username" placeholder="Username" class="form-control form-control-lg mb-3">
                                </div>
                                <div class="col-sm-12">
                                    <label for="password" class="small ml-2">Password</label>
                                    <input type="password" id="password" placeholder="Password" class="form-control form-control-lg mb-3">
                                </div>
                                <div class="col-sm-12">
                                    <label for="Token" class="small ml-2">Token</label>
                                    <input type="text" id="token" placeholder="Token" class="form-control form-control-lg mb-3">
                                </div>
                                <div class="col-sm-12">
                                <a href="<?php echo site_url('katalog/Dashboard');?>" class="jwu-btn float-right btn-block">Login</a>
                                    <!-- <button type="submit" class="jwu-btn float-right btn-block">Sign in</button> -->
                                </div>
                                <!--<div class="col-sm-12 text-center">
                                    <a href="register.html">Register</a>
                                </div>-->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   