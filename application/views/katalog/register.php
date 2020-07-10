    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card p-4">
                        <div class="section-title">
                            <h2 class="text-center">Register</h2>
                            <a href="<?php echo site_url('Login'); ?>" class="col-sm-2 jwu-btn float-right mb-2 mr-2">Login</a>
                            
                        </div>
                        <form action="javascript:void(0)" class="mb-2">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="small ml-2" for="Username">Username <span class="asterik">*</span></label>
                                    <input type="text" id="username" name="username" placeholder="Username">
                                </div>
                                <div class="col-sm-6">
                                    <label class="small ml-2" for="Password">Password <span class="asterik">*</span></label>
                                    <input type="password" id="password" name="password" placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <label class="small ml-2" for="Email">Email <span class="asterik">*</span></label>
                                    <input type="email" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="col-sm-6">
                                    <label class="small ml-2" for="Nomor Hp">Nomor Hp <span class="asterik">*</span></label>
                                    <input type="email" id="email" name="no_hp" placeholder="Nomor Hp">
                                </div>
                                <div class="col-sm-12">
                                    <label for="radiobtn" class="small ml-2 d-block">Metode Pembayaran <span class="asterik">*</span></label>
                                    <label class="for-radio f-14 my-1">
                                        BCA
                                        <input name="rad" type="radio" value="1" id="radiobtn1" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="for-radio f-14 my-1">
                                        BNI
                                        <input name="rad" type="radio" value="2" id="radiobtn2">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="jwu-btn float-right">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>