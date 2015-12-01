<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view("common/header") ?>
<div class="row bg-black s-menu" style="z-index: 1000" align="center">
    <div class="col-xs-6 col-sm-offset-3 col-sm-3 submenu-items"><a class="text-uppercase scroll-panel-music" role="button" data-toggle="collapse" data-parent="#accordion" href="#mgmt" aria-expanded="true" aria-controls="mgmt">Archfold Management</a></div>
    <div class="col-xs-6  col-sm-3 submenu-items"><a class="text-uppercase scroll-panel-music" role="button" data-toggle="collapse" data-parent="#accordion" href="#records" aria-expanded="true" aria-controls="records">DORMROOM RECORDS</a></div>
</div>
<div class="bg-red">
    <div  id="panel_parent" >
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div id="music_header" style="">
                
            </div>
            <div class="panel panel-default">
                <a class="scroll-panel-music collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#mgmt" aria-expanded="true" aria-controls="mgmt">
                    <div class="panel-heading heading-5" style="background:#c90303" role="tab" id="headingOne">
                        <h1 class="panel-title text-uppercase text-center font-mobile" style="background:#c90303">  Archfold Management </h1>
                        <i id="mgmt_i" class="fa fa-3x fa-angle-double-up pull-right"></i>
                    </div>
                </a>

                <div id="mgmt" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body no-padding">
                        <div class="row" style="background:url(<?= base_url() ?>/img/dots.png);position:relative;height:300px;padding-top:80px;border-bottom:solid #740202 4px;">
                            <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8 h4">
                                <p class="text-center h1 about-text" style="color:#dddddd">Archfold Management is a talent management company that operates much like a family.</p>
                            </div>
                            <h3 style="background:#740202;color:#dddddd;position:absolute;bottom:-10px;left:0px;padding:5px 10px 5px 10px">ARTISTS</h3>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 images">
                                <div class="hovereffect">
                                    <img  src="<?= base_url() ?>/img/KateBarnette.png" class="img-responsive" style="width:400px;height:300px" alt="artist">
                                    <div class="overlay">
                                        <a class="info" href="#" style="float:right;margin:10px 20px 0px 0px" data-toggle="modal" data-target="#myModal">[+]</a>
                                        <h2>Kate<br>Barnette</h2>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-xs-12 col-sm-3 images">
                                <div class="hovereffect">
                                    <img  src="<?= base_url() ?>/img/DannyHidalgo.jpg" class="img-responsive" style="width:400px;height:300px" alt="artist">
                                    <div class="overlay">
                                        <a class="info" href="#" style="float:right;margin:10px 20px 0px 0px" data-toggle="modal" data-target="#myModal2">[+]</a>
                                        <h2>Danny<br>Hidalgo</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 images">
                                <div class="hovereffect">
                                    <img  src="<?= base_url() ?>/img/DanielLeeBand.png" class="img-responsive" style="width:400px;height:300px" alt="artist">
                                    <div class="overlay">
                                        <a class="info" href="#" style="float:right;margin:10px 20px 0px 0px" data-toggle="modal" data-target="#myModal3">[+]</a>
                                        <h2>Daniel<br>Lee Band</h2>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 images">
                                <div class="hovereffect">
                                    <img  src="<?= base_url() ?>/img/KaneBrown.png" class="img-responsive" style="width:400px;height:300px" alt="artist">
                                    <div class="overlay">
                                        <a class="info" href="#" style="float:right;margin:10px 20px 0px 0px" data-toggle="modal" data-target="#myModal4">[+]</a>
                                        <h2>Kane<br>Brown</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="panel panel-default" >
                <a class="scroll-panel-music collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#records" aria-expanded="false" aria-controls="records">
                    <div class="panel-heading heading-5" style="bcakground-color:#800000" role="tab" id="headingTwo">
                        <h1 class="panel-title text-center text-uppercase font-mobile">DORMROOM RECORDS</h1>
                        <i id="records_i" class="fa fa-3x fa-angle-double-down pull-right"></i>
                    </div>
                </a>

                <div id="records" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body  no-padding" >
                        <div class="row padding-10"  style="background: url(<?= base_url() ?>img/dots.png);color:#dddddd">
                            <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8 h4 padding-top-10">
                                <p class="text-center h1 about-text">DormRoom Records is a fast-growing, independent record label that blends a unique level of artist attention with the resources and contacts to major labels and distribution channels. Artists include Kate Barnette, Daniel Hidalgo, Daniel Lee Band and Kane Brown.</p>
                            </div>
                            <div class="col-xs-offset-2 col-xs-8 col-sm-offset-5 col-sm-2 padding-bottom-10">
                                <img src="<?= base_url() ?>img/Music-Logo1.png" style="width:100px;display: block;margin:0 auto;" class="img-responsive" alt="DromRoom Records">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view("common/footer") ?>
</div>

<!-- Modal -1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="border:solid #e6e81c 1px;background:url(<?= base_url() ?>/img/dots.png);">
            <div class="modal-header">
                <button type="button" class="close white" data-dismiss="modal" aria-label="Close"><span style="color:#e6e81c" aria-hidden="true">[ - ]   </span></button>
                <h1 class="modal-title" id="myModalLabel" style="color:#e6e81c">Kate Barnette</h1>
            </div>
            <div class="modal-body" style="">
                <div class="row">
                    <div class="col-xs-4">
                        <img  src="<?= base_url() ?>/img/KateBarnette.png" class="img-responsive" style="width:400px;height:300px" alt="artist">
                    </div>
                    <div class="col-xs-8 padding-10" style="height:300px;overflow-y: auto">
                        <p class="about-text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p> 
                    </div>
                </div>
                <div class="row">
                    <a target="_blank" class="btn btn-lg h3 text-black" style="background-color:#e6e81c;width:40px" href="http://www.facebook.com/katiebarnettemusic"><i class="fa fa-facebook"></i></a>
                    <a target="_blank" class="btn btn-lg h3 text-black" style="background-color:#e6e81c;width:40px" href="http://www.twitter.com/katebarnette"><i class="fa fa-twitter"></i></a>
                    <a target="_blank" class="btn btn-lg h3 text-black" style="background-color:#e6e81c;width:40px" href="http://www.instagram.com/katebarnette"><i class="fa fa-instagram"></i></a>
                    <a target="_blank" class="btn btn-lg h3 text-black pull-right" style="background-color:#e6e81c" href="http://www.katebarnette.com">katebarnette.com >></a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal-2 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="border:solid #024df7 1px;background:url(<?= base_url() ?>/img/dots.png);">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span style="color:#024df7" aria-hidden="true">[ - ]   </span></button>
                <h1 class="modal-title" id="myModalLabel" style="color:#024df7">Danny Hidalgo</h1>
            </div>
            <div class="modal-body" style="">
                <div class="row">
                    <div class="col-xs-4">
                        <img  src="<?= base_url() ?>/img/DannyHidalgo.jpg" class="img-responsive" style="width:400px;height:300px" alt="artist">
                    </div>
                    <div class="col-xs-8 padding-10" style="height:300px;overflow-y: auto">
                        <p class="about-text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p> 
                    </div>
                </div>
                <div class="row">
                    <a target="_blank" class="btn btn-lg h3 text-black" style="background-color:#024df7;width:40px" href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                    <a target="_blank" class="btn btn-lg h3 text-black" style="background-color:#024df7;width:40px" href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a>
                    <a target="_blank" class="btn btn-lg h3 text-black" style="background-color:#024df7;width:40px" href="http://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                    <a target="_blank" class="btn btn-lg h3 text-black pull-right" style="background-color:#024df7" href="http://www.dannyhidalgo.com">dannyhidalgo.com >></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal-3 -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="border:solid #f98701 1px;background:url(<?= base_url() ?>/img/dots.png);">
            <div class="modal-header">
                <button type="button" class="close white" data-dismiss="modal" aria-label="Close"><span style="color:#f98701" aria-hidden="true">[ - ]   </span></button>
                <h1 class="modal-title" id="myModalLabel" style="color:#f98701">Daniel Lee Band</h1>
            </div>
            <div class="modal-body" style="">
                <div class="row">
                    <div class="col-xs-4">
                        <img  src="<?= base_url() ?>/img/DanielLeeBand.png" class="img-responsive" style="width:400px;height:300px" alt="artist">
                    </div>
                    <div class="col-xs-8 padding-10" style="height:300px;overflow-y: auto">
                        <p class="about-text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p> 
                    </div>
                </div>
                <div class="row">
                    <a target="_blank" class="btn btn-lg h3 text-black" style="background-color:#f98701;width:40px" href="http://www.facebook.com/DanielLeeBand"><i class="fa fa-facebook"></i></a>
                    <a target="_blank" class="btn btn-lg h3 text-black" style="background-color:#f98701;width:40px" href="http://www.twitter.com/danielleemusic"><i class="fa fa-twitter"></i></a>
                    <a target="_blank" class="btn btn-lg h3 text-black" style="background-color:#f98701;width:40px" ><i class="fa fa-instagram"></i></a>
                    <a target="_blank" class="btn btn-lg h3 text-black pull-right" style="background-color:#f98701" href="http://www.danielleeofficial.com">danielleeofficial.com >></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal-4 -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="border:solid #01c54b 1px;background:url(<?= base_url() ?>/img/dots.png);">
            <div class="modal-header">
                <button type="button" class="close white" data-dismiss="modal" aria-label="Close"><span style="color:#01c54b" aria-hidden="true">[ - ]   </span></button>
                <h1 class="modal-title" id="myModalLabel" style="color:#01c54b">Kane Brown</h1>
            </div>
            <div class="modal-body" style="">
                <div class="row">
                    <div class="col-xs-4">
                        <img  src="<?= base_url() ?>/img/KaneBrown.png" class="img-responsive" style="width:400px;height:300px" alt="artist">
                    </div>
                    <div class="col-xs-8 padding-10" style="height:300px;overflow-y: auto">
                        <p class="about-text">
                            In 2014, a cover of "I Don't Dance" and 60,000 video shares changed 21 year old Kane Brown's life forever.
                            <br /><br />
                            Growing up, Kane was raised poor and by a hardworking single mother, moving around from Rossville, GA to Fort Oglethorpe, Lafayette, GA and finally settling in Red Bank, TN. Kane has been surrounded by Country music his whole life. 
                            <br /><br />
                            Until 11th grade, Kane planned to take the R&B route, but winning a talent show singing Chris Young's "Gettin' You Home Tonight" took him in the direction of Country. After that performance, Kane started posting covers of himself showcasing songs by Brantley Gilbert, Billy Currington, Alan Jackson and other amazing artists, gaining more and more fans as he went. 
                            <br /><br />
                            Kane released his debut EP, "Closer" on June 2nd, 2015 featuring his previously released single "Don't Go City On Me."

                        </p> 
                    </div>
                </div>
                <div class="row">
                    <a target="_blank" class="btn btn-lg h3 text-black" style="background-color:#01c54b;width:40px" href="http://www.facebook.com/kanebrowncountry"><i class="fa fa-facebook"></i></a>
                    <a target="_blank" class="btn btn-lg h3 text-black" style="background-color:#01c54b;width:40px" href="http://www.twitter.com/kanebrown"><i class="fa fa-twitter"></i></a>
                    <a target="_blank" class="btn btn-lg h3 text-black" style="background-color:#01c54b;width:40px" href="http://www.instagram.com/kanebrown_music"><i class="fa fa-instagram"></i></a>
                    <a target="_blank" class="btn btn-lg h3 text-black pull-right" style="background-color:#01c54b" href="http://www.kanebrownmusic.com">kanebrownmusic.com >></a>
                </div>
            </div>
        </div>
    </div>
</div>



