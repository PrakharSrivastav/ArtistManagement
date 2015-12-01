<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view("common/header") ?>
<div class="bg-red">
    <div class="row">
        <div class="col-xs-12">
            <img src="<?= base_url() ?>/img/Partnerships.png" class="img-responsive"  width="100%" alt="Partnership.png">
        </div>
    </div>
    <div class="row" style="height:300px;padding-top:80px;background: url(<?= base_url() ?>img/dots.png);color:#dddddd">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-2 col-lg-8 text-center " >
            <p class="h3 about-text">We selectively partner with brands that we believe in to leverage our deep insight on consumer engagement and access to influencers to strategize and implement ground breaking campaigns. Our prerequisite: every campaign we do must include a charitable component.</p>
        </div>
    </div>
    <div class="row" >
        <div  style="background:#800000;height:120px;padding-top:15px;" class="text-center">
            <h1 style="font-family:'proxima_nova_condensed';color:#fff;text-align:center;font-size:50px !important;font-weight:700 !important">OUR PARTNERS</h1>
        </div>
        <div class="row" style="background: url(<?= base_url() ?>img/Waves.jpeg);background-repeat: no-repeat;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;padding-top:90px;height:300px">
            <h1 class="about-text text-center" style="color:#dddddd">COMING SOON </h1>
        </div>
    </div>
</div>

<?php $this->load->view("common/footer") ?>
