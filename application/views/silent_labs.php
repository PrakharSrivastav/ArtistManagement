<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view("common/header") ?>
<div class="bg-red">
    <div class="row">
        <div class="col-xs-12" id="inter_header">
            <!--<img src="<?= base_url() ?>/img/Overlay.png"   alt="archfold interactive">-->
            <div id="overlay"></div>
        </div>
    </div>
    <div class="row" id="iteractive" style="background:url(<?= base_url() ?>/img/dots.png);">
        <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8 h4 white">
            <!--<h1 class="text-uppercase text-center">Archfold Interactive</h1>-->
            <p class="text-center about-text h2" style="color:#dddddd">
                Archfold Interactive, LLC is an interactive digital media company with expanding ventures that began in the technology, gaming and privacy industries. Our goal is to create platforms that incite change and inspiration, all while maintaining influence in culture. 
            </p>
        </div>
    </div>
    <div class="row" style="position:relative">
        <div class="heading-4" style="background:#740202" >
            <h1 class="text-uppercase text-center" style="background:#740202;margin-top:-5px;color:#dddddd">PROJECTS</h1>
        </div>
        <div class="row" id="iter_projects" style="background: url(<?= base_url() ?>img/Chip.png)">
            <div class="col-xs-12 col-sm-offset-2 col-sm-2">
                <img src="<?= base_url() ?>img/Interactive-Logo3.png" id="img_friv" class="img-responsive" alt="FRIV">
            </div>
            <div class="col-xs-12 col-sm-offset-1 col-sm-2 ">
                <img src="<?= base_url() ?>img/Interactive-Logo2.png" id="img_wish" class="img-responsive"  alt="WishDish">
            </div>
            <div class="col-xs-12 col-sm-offset-1 col-sm-2 ">
                <img src="<?= base_url() ?>img/Interactive-Logo1.png"  id="img_proxy" class="img-responsive" alt="Proxy Server">
            </div>
        </div>   
    </div>
</div>

<?php $this->load->view("common/footer") ?>
