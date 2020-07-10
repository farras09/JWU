<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card p-4">
                    <div class="row">
                        <div class="col-lg-8 col-sm-6">
                            <div class="section-title">
                                <h2>E - Books</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <form action="" class="mb-3">
                                <div class="searchform">
                                    <input type="text" id="keyword1" name="keyword1" placeholder="Search E-Books" value="">
                                    <button type="submit" class="jwu-btn btn-default">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12">
                            <div class="row mt-2">
                                <?php foreach ($buku as $row) : ?>
                                    <div class="col-sm-6">
                                        <div class="catalog-box">
                                            <div class="cover">
                                                <img src="<?php echo base_url(); ?>assets/images/journals/journalThumbnail_en_US.jpg" alt="cover">
                                            </div>
                                            <div class="text">
                                                <span>
                                                    <?php echo $row->judul; ?>
                                                </span>
                                                <span class="author">
                                                    <?php echo $row->pengarang; ?>
                                                </span>
                                                <span class="author">
                                                    ISBN : <?php echo $row->isbn; ?><br>
                                                    Ukuran : <?php echo $row->ukuran; ?><br>
                                                </span>

                                                <div class="d-block" id="catalog-action">
                                                    <i>Rp. <?php echo $row->harga; ?></i>
                                                    <div class="d-flex mt-3">
                                                        <a href="<?php echo site_url('Login'); ?>" class="jwu-btn mr-2">
                                                            Review
                                                        </a>
                                                        <!-- <a href="#!" class="jwu-btn">
                                                    Buy
                                                    </a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <!-- <div class="col-sm-6">
                                        <div class="catalog-box">
                                            <div class="cover">
                                            <img src="<?php echo base_url(); ?>assets/images/journals/journalThumbnail_en_US (1).jpg" alt="cover">
                                            </div>
                                            <div class="text">
                                                <span>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores voluptates, dolore eligendi eos iure vero molestias dolor. Unde, harum earum id, itaque dolores maxime numquam quod modi consequatur fugit aspernatur optio animi atque minima consectetur quo? Iste illum aspernatur explicabo ratione vel. Debitis in quae quam earum odit. Vero, velit.
                                                </span>
                                                <span class="author">
                                                    - John Doe
                                                </span>
                                                <div class="d-block" id="catalog-action">
                                                    <i>Rp. 500.000</i>
                                                <div class="d-flex mt-3">
                                                <a href="#!" class="jwu-btn mr-2">
                                                Review
                                                </a>
                                                <a href="#!" class="jwu-btn">
                                                Buy
                                                </a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="catalog-box">
                                            <div class="cover">
                                            <img src="<?php echo base_url(); ?>assets/images/journals/journalThumbnail_en_US (1).jpg" alt="cover">
                                            </div>
                                            <div class="text">
                                                <span>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores voluptates, dolore eligendi eos iure vero molestias dolor. Unde, harum earum id, itaque dolores maxime numquam quod modi consequatur fugit aspernatur optio animi atque minima consectetur quo? Iste illum aspernatur explicabo ratione vel. Debitis in quae quam earum odit. Vero, velit.
                                                </span>
                                                <span class="author">
                                                    - John Doe
                                                </span>
                                                <div class="d-block" id="catalog-action">
                                                    <i>Rp. 500.000</i>
                                                <div class="d-flex mt-3">
                                                <a href="#!" class="jwu-btn mr-2">
                                                Review
                                                </a>
                                                <a href="#!" class="jwu-btn">
                                                Buy
                                                </a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="catalog-box">
                                            <div class="cover">
                                                <img src="../assets/journals/journalThumbnail_en_US (1).jpg" alt="cover">
                                            </div>
                                            <div class="text">
                                                <span>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores voluptates, dolore eligendi eos iure vero molestias dolor. Unde, harum earum id, itaque dolores maxime numquam quod modi consequatur fugit aspernatur optio animi atque minima consectetur quo? Iste illum aspernatur explicabo ratione vel. Debitis in quae quam earum odit. Vero, velit.
                                                </span>
                                                <span class="author">
                                                    - John Doe
                                                </span>
                                                <div class="d-block" id="catalog-action">
                                                    <i>Rp. 500.000</i>
                                                <div class="d-flex mt-3">
                                                <a href="#!" class="jwu-btn mr-2">
                                                Review
                                                </a>
                                                <a href="#!" class="jwu-btn">
                                                Buy
                                                </a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="catalog-box">
                                            <div class="cover">
                                                <img src="../assets/journals/journalThumbnail_en_US (1).jpg" alt="cover">
                                            </div>
                                            <div class="text">
                                                <span>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores voluptates, dolore eligendi eos iure vero molestias dolor. Unde, harum earum id, itaque dolores maxime numquam quod modi consequatur fugit aspernatur optio animi atque minima consectetur quo? Iste illum aspernatur explicabo ratione vel. Debitis in quae quam earum odit. Vero, velit.
                                                </span>
                                                <span class="author">
                                                    - John Doe
                                                </span>
                                                <div class="d-block" id="catalog-action">
                                                    <i>Rp. 500.000</i>
                                                <div class="d-flex mt-3">
                                                <a href="#!" class="jwu-btn mr-2">
                                                Review
                                                </a>
                                                <a href="#!" class="jwu-btn">
                                                Buy
                                                </a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="catalog-box">
                                            <div class="cover">
                                                <img src="../assets/journals/journalThumbnail_en_US (1).jpg" alt="cover">
                                            </div>
                                            <div class="text">
                                                <span>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores voluptates, dolore eligendi eos iure vero molestias dolor. Unde, harum earum id, itaque dolores maxime numquam quod modi consequatur fugit aspernatur optio animi atque minima consectetur quo? Iste illum aspernatur explicabo ratione vel. Debitis in quae quam earum odit. Vero, velit.
                                                </span>
                                                <span class="author">
                                                    - John Doe
                                                </span>
                                                <div class="d-block" id="catalog-action">
                                                    <i>Rp. 500.000</i>
                                                <div class="d-flex mt-3">
                                                <a href="#!" class="jwu-btn mr-2">
                                                Review
                                                </a>
                                                <a href="#!" class="jwu-btn">
                                                Buy
                                                </a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="catalog-box">
                                            <div class="cover">
                                                <img src="../assets/journals/journalThumbnail_en_US (1).jpg" alt="cover">
                                            </div>
                                            <div class="text">
                                                <span>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores voluptates, dolore eligendi eos iure vero molestias dolor. Unde, harum earum id, itaque dolores maxime numquam quod modi consequatur fugit aspernatur optio animi atque minima consectetur quo? Iste illum aspernatur explicabo ratione vel. Debitis in quae quam earum odit. Vero, velit.
                                                </span>
                                                <span class="author">
                                                    - John Doe
                                                </span>
                                                <div class="d-block" id="catalog-action">
                                                    <i>Rp. 500.000</i>
                                                <div class="d-flex mt-3">
                                                <a href="#!" class="jwu-btn mr-2">
                                                Review
                                                </a>
                                                <a href="#!" class="jwu-btn">
                                                Buy
                                                </a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>