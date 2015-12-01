<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view("common/header") ?>
<div class="bg-red">
    <div class="row">
        <div class="col-xs-12">
            <img src="<?= base_url() ?>/img/Philanthropy.png" class="img-responsive" id="phil_header" width="100%" alt="philanthrophy">
        </div>
    </div>
    <div class="row" id="philanth_id" style="">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-2 col-lg-8 text-center " >
            <p class="h3 about-text">We believe in giving back to others and incorporating that in all that we do. We partner with various charities to fulfill this mission. </p>
        </div>
    </div>
    <div class="row" >
        <div  style="background:#800000;height:120px;padding-top:15px;" class="text-center">
            <h1 style="font-family:'proxima_nova_condensed';color:#dddddd;text-align:center;font-size:50px !important;font-weight:700 !important">CAUSES</h1>
        </div>
        <div class="row" id="philan_logo" style="">
            <div class="col-xs-12 col-sm-offset-3 col-sm-2">
                <img src="<?= base_url() ?>/img/Philanthropy-Logo1.png" class="img-responsive" style="width:200px;display: block;margin:0 auto;margin-top:-20px">
            </div>
            <div class="col-xs-12 col-sm-offset-2 col-sm-2">
                <img src="<?= base_url() ?>/img/Philanthropy-Logo2.png" class="img-responsive" style="width:200px;display: block;margin:0 auto;margin-top:-5px">
            </div>
        </div>
    </div>
</div>

<?php $this->load->view("common/footer") ?>
