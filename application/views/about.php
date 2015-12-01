<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view("common/header") ?>
<div class="row bg-black s-menu" style="z-index: 1000;margin-top:-3px;padding-top:15px" align="center">
    <!--<div class="row">-->
    <div class="col-xs-6 col-sm-offset-2 col-sm-2 submenu-items"><a class="text-uppercase scroll-panel" role="button" data-toggle="collapse" data-parent="#accordion" href="#mission" aria-expanded="true" aria-controls="mission">Mission</a></div>
    <div class="col-xs-6  col-sm-2 submenu-items"><a class="text-uppercase scroll-panel" role="button" data-toggle="collapse" data-parent="#accordion" href="#team" aria-expanded="true" aria-controls="team">the team</a></div>
    <div class="col-xs-6  col-sm-2 submenu-items"><a class="text-uppercase scroll-panel" role="button" data-toggle="collapse" data-parent="#accordion" href="#contact" aria-expanded="true" aria-controls="contact">Contact</a></div>
    <div class="col-xs-6  col-sm-2 submenu-items"><a class="text-uppercase scroll-panel" role="button" data-toggle="collapse" data-parent="#accordion" href="#jobs" aria-expanded="true" aria-controls="jobs">Jobs</a></div>
    <!--</div>-->
</div>
<div class="bg-red">
    <div  id="panel_parent" >
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <img src="<?= base_url() ?>/img/About.png"  id="about_header"  class="img-responsive">
            <div class="panel panel-default">
                <a class="scroll-panel collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#mission" aria-expanded="true" aria-controls="mission">
                    <div class="panel-heading heading-1"   role="tab" id="headingOne">
                        <h1 class="panel-title text-uppercase text-center">  Mission </h1>
                        <i id="mission_i"class="fa fa-angle-double-up fa-3x pull-right"></i>
                    </div>
                </a>
                <div id="mission" class="panel-collapse collapse in white" style="background: url(<?= base_url() ?>img/dots.png);" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8 h4">
                                <p class="text-center about-text" style="letter-spacing: 2px;"><br>Archfold, Inc. is an entertainment and media company with diversified holdings ranging from music, technology, digital media, and philanthropy. With vision and guidance by founder Garrett Jacobs, Archfold, Inc. combines creativity, interactive audiences, and innovative marketing to help establish the future of popular culture.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-offset-2 col-xs-8 col-sm-offset-5 col-sm-2">
                                <h2 class="padding-5 bg-info text-center text-black" style="background-color:#fc3636;margin-top:25px;">Our Mission</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8 h4">
                                <p class="text-center text-uppercase about-text" style="font-weight:500;letter-spacing: 3px;">
                                    <br>SO MANY OF US GO THROUGH LIFE <span class="diff">SCARED</span>. SCARED OF THE UNKNOWN THAT IS TO COME. <br><br>
                                    OUR GOAL IS TO CREATE AN ENVIRONMENT WHERE <span class="diff">FEAR AND FAILURE ARE NOTHING MORE THAN REST STOPS ON THE ROAD TO SUCCESS.</span> 
                                    WE WANT TO MOTIVATE PEOPLE TO FIND THEIR PATH TO PURPOSE AND <span class="diff">EXECUTE ON IT.</span> 
                                    WE WANT TO TURN EXCITEMENT INTO <span class="diff">MOVEMENT.</span> WE WANT TO CREATE <span class="diff">REALITY</span> FROM OUR <span class="diff">DREAMS.</span>
                                    WE WANT A YOUNG PERSON TO WAKE UP IN THE MORNING AND REALIZE THAT THEY HAVE MEANING. <span class="diff">AND THAT MEANING HAS WORTH.</span>
                                    <br><br>WHAT IS OUR GOAL? OUR GOAL IS TO <span class="diff">INSPIRE THE WORLD TO TRY.</span>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-offset-2 col-xs-8 col-sm-offset-5 col-sm-2">
                                <h2 class="padding-5 bg-info text-center text-black" style="background-color:#fc3636">What we value</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8 h4">
                                <p class="text-center text-uppercase"><br>
                                <ul class="list-unstyled text-center about-text">
                                    <li>Extreme Work-Ethic</li>
                                    <li>Family</li>
                                    <li>Purpose & Desire</li>
                                    <li>Things can always be improved</li>
                                    <li>What’s Your Why?</li>
                                    <li>A leader lies in you</li>
                                    <li>Be Extraordinary</li>
                                    <li>Live Inspiration</li>
                                </ul>
                                </p><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default no-padding">
                <a class="scroll-panel collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#team" aria-expanded="false" aria-controls="team">
                    <div class="panel-heading heading-2" role="tab" id="headingTwo">
                        <h1 class="panel-title  text-center text-uppercase">The Team</h1>
                        <i id="team_i" class="fa fa-angle-double-down fa-3x pull-right"></i>
                    </div>
                </a>
                <div id="team"  class="panel-collapse collapse no-padding" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body  no-padding">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 box" >
                                <!--src="<?= base_url() ?>img/Garrett.png"-->
                                <img  style="height:400px;width:100%" class="img-responsive" alt="Garret Jacobs">
                            </div>
                            <div class="col-xs-12 col-sm-6 padding-10" style="background: url(<?= base_url() ?>img/dots.png);height:400px;overflow-y: auto;color:#dddddd" >
                                <h1 class="text-left">Garrett Jacobs</h1>
                                <h2 class="text-left">Founder</h2>
                                <p class="text-justfy h4">
                                    dkdnkcjncjlnclc</p>
                            </div>
                        </div>
                        <div class="row bg-black">
                            <div class="col-xs-12 col-sm-6 col-lg-3 tweets">
                                <div class="thumbnail">
                                    <img src="<?= base_url() ?>img/TeamMember1.png" alt="Team Member 1" class="img-responsive">
                                    <div class="caption "> 
                                        <h3 class="text-capitalize">Team Member 1</h3>
                                        <h5 class="text-uppercase">General Manager</h5>
                                        <h4>
                                            <i class="fa fa-twitter"></i>
                                            <i class="fa fa-instagram"></i>
                                            <i class="fa fa-google-plus"></i>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3 tweets">
                                <div class="thumbnail">
                                    <img src="<?= base_url() ?>img/TeamMember2.png" alt="Team Member 2" class="img-responsive">
                                    <div class="caption ">
                                        <h3 class="text-capitalize">Team Member 2</h3>
                                        <h5 class="text-uppercase">Chief Operating Officer</h5>
                                        <h4>
                                            <i class="fa fa-twitter"></i>
                                            <i class="fa fa-google-plus"></i>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3 tweets">
                                <div class="thumbnail">
                                    <img src="<?= base_url() ?>img/TeamMember3.png" alt="Team Member 3" class="img-responsive">
                                    <div class="caption ">
                                        <h3 class="text-capitalize"><span>Team Member 3</span></h3>
                                        <h5 class="text-uppercase">Senior Vice President</h4>
                                        <h4>
                                            <i class="fa fa-twitter"></i>
                                            <i class="fa fa-instagram"></i>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3 tweets">
                                <div class="thumbnail">
                                    <img src="<?= base_url() ?>img/TeamMember4.png" alt="Team Member 4" class="img-responsive">
                                    <div class="caption ">
                                        <h3 class="text-capitalize">Team Member 4</h3>
                                        <h5 class="text-uppercase">VP, Business & Legal Affairs</h5>
                                        <h4>
                                            <i class="fa fa-instagram"></i>
                                            <i class="fa fa-google-plus"></i>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default no-padding ">
                <a class="scroll-panel collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#contact" aria-expanded="false" aria-controls="contact">
                    <div class="panel-heading heading-3" role="tab" id="headingThree">
                        <h1 class="panel-title text-uppercase text-center"> Contact</h1>
                        <i id="contact_i" class="fa fa-angle-double-down fa-3x pull-right"></i>
                    </div>
                </a>
                <div id="contact" class="no-padding panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body no-padding ">
                        <div class="row no-padding " >
                            <div class="col-xs-12 col-sm-6 white" style="height:400px;background: url(<?= base_url() ?>img/dots.png);padding-top:150px">
                                <div class="row text-center">
                                    
                                        <span class="h2 text-left">info@archfold.com</span>
                                </div>
                                <br>
                                <div class="row text-center">
                                    
                                        <span class="h2 text-left">Atlanta, GA </span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 " style="height:400px;background:#c90303;color:#000">
                                <form class="padding-10">
                                    <div class="text-uppercase h3">Got a question?</div>
                                    <div class="form-group h4">
                                        <label for="name">NAME </label>
                                        <input type="text" class="form-control" id="name" >
                                    </div>
                                    <div class="form-group h4">
                                        <label for="email">EMAIL  </label>
                                        <input type="email" class="form-control" id="email" >
                                    </div>
                                    <div class="form-group h4">
                                        <label for="Message">MESSAGE  </label>
                                        <textarea class="form-control" id="Message" rows="4"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-default btn-sm pull-right">SEND</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default no-padding">
                <a class="scroll-panel collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#jobs" aria-expanded="false" aria-controls="jobs">
                    <div class="panel-heading heading-4" role="tab" id="headingFour">
                        <h1 class="panel-title text-uppercase text-center">Jobs</h1>
                        <i id="jobs_i" class="fa fa-angle-double-down fa-3x pull-right"></i>
                    </div>
                </a>
                <div id="jobs" class="panel-collapse collapse  no-padding" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body h2 text-center about-text" style="background: url(<?= base_url() ?>img/dots.png);margin-top:0px;color:#dddddd">
                        <br />Do you believe you can make a difference in the world? <br /><br />
                        Do you want to learn more about the entertainment industry and apply your creativity and work ethic to a company that believes in you? <br /><br />
                        If so, we’d love hear from you!
                        <br><br />
                        <a href="<?= site_url("home/coming_soon") ?>" class="btn btn-default btn-lg" style="background:#fc3636;border:none;color:#dddddd">Know More </a>
                        <br />
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php $this->load->view("common/footer") ?>
</div>

