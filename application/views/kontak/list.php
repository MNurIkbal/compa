<!-- Start Contact us Section -->
<style>
    .con {
        display: flex;
    }

    .rows {
        margin-right: 40px;
        cursor: pointer;
        
    }


</style>
<section class="bg-contact-us">
    <div class="container">
        <div class="row">
            <div class="contact-us">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="contact-title">HUBUNGI KAMI</h3>
                        <?php $messages = $this->session->flashdata('sukses');
                        if (!empty($messages)) : ?>
                            <div class="alert alert-success">Data Berhasil Dikirim</div>
                        <?php endif; ?>
                        <form action="<?= base_url("Kontak/kirim"); ?>" method="POST" class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nameId" name="nama" placeholder="Full Name" required>
                                    </div>
                                    <!-- .form-group -->
                                </div>
                                <!-- .col-md-6 -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="emailId" name="email" placeholder="Email Address" required>
                                    </div>
                                </div>
                                <!-- .col-md-6 -->
                            </div>
                            <textarea class="form-control text-area" rows="3" placeholder="Message" name="pesan" required></textarea>
                            <br>
                            <div class="emot">
                                <h5 style="color: black;">Berikan Penilaian Anda Terhadap Layanan Kami </h4>
                                <br>
                                <div class="sharethis-inline-reaction-buttons"></div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-default">Send Email</button>
                        </form>
                    </div>
                    <!-- .col-md-8 -->
                    <div class="col-md-4">
                        <h3 class="contact-title">KONTAK KAMI</h3>
                        <ul class="contact-address">
                            <li>
                                <i class="flaticon-placeholder"></i>
                                <div class="contact-content">
                                    <p><?php echo $site->alamat; ?></p>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-vibrating-phone"></i>
                                <div class="contact-content">
                                    <p><?php echo $site->telepon; ?></p>
                                    <p><?php echo $site->hp; ?></p>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-message"></i>
                                <div class="contact-content">
                                    <p><?php echo $site->email; ?></p>

                                </div>
                            </li>
                        </ul>
                        <!-- .contact-address -->
                        <ul class="social-icon-rounded contact-social-icon">
                            <li><a href="<?php echo $site->facebook; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo $site->twitter; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo $site->instagram; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <!-- <li><a href="<?php echo $site->google_plus; ?>"><i class="fa fa-google" aria-hidden="true"></i></a></li> -->
                        </ul>
                    </div>
                    <!-- .col-md-4 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .contact-us -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- End Contact us Section -->


<!-- STart Maps Section -->
<style type="text/css" media="screen">
    iframe {
        width: 100%;
        height: auto;
        min-height: 600px;
    }
</style>
<div id="map"><?php echo $site->google_map; ?></div>
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=640bec2be953e4001247aa65&product=inline-reaction-buttons&source=platform" async="async"></script>
<!-- End Maps Section -->