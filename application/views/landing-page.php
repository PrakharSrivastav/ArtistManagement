<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view("common/header") ?>
<div class="bg-red">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php
            if (!empty($images) && $images) {
                $count = 0;
                foreach ($images as $image) {
                    $src = html_escape($image['path']);
                    $alt = html_escape($image['filename']);
                    $title = html_escape($image['title']);
                    $desc = html_escape($image['desc']);
                    if ($count == 0) {
                        ?>
                        <div class="item active">
                            <img src="<?= $src; ?>" class="img-responsive" style="width:100%;height:500px" alt="<?= $alt; ?>">
                            <div class="carousel-caption text-red">
                                <h3><?= $title; ?></h3>
                                <p class="big-font"><?= $desc; ?></p>
                            </div>
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="item">
                            <img src="<?= $src; ?>" class="img-responsive" style="width:100%;height:500px" alt="<?= $alt; ?>">
                            <div class="carousel-caption text-red">
                                <h3><?= $title; ?></h3>
                                <p class="big-font"><?= $desc; ?></p>
                            </div>
                        </div>
                        <?php
                    }
                    $count++;
                }
            }
            ?>
        </div>
    </div>
    <div class="row bg-grey" >
        <div class="col-xs-12 col-sm-6 bg-grey padding-5 ">
            <h2 class="pull-left text-uppercase bg-white padding-5 full-width"> News </h2>
            <div class="row">
                <div class="col-xs-12 bg-grey">
                    <div class="thumbnail bg-grey">
                        <?php foreach ($tweets as $tweet) { ?>
                            <div class="caption tweets">
                                <div class="row big-font">
                                    <div class="col-xs-3">
                                        <i class="fa fa-twitter fa-2x text-primary"></i>
                                    </div>
                                    <div class="col-xs-5 text-center">
                                        <span class="text-black"><strong>@<?= $tweet['user']['screen_name']; ?></strong></span>
                                    </div>
                                    <div class="col-xs-4 ">
                                        <span class="pull-right"><?= substr($tweet['created_at'], 0, 11) ?></span>
                                    </div>
                                    <div class="col-xs-12 ">
                                        <p class="h4"><?= mb_substr($tweet['text'], 0, 100, "utf-8") ?>....</p>
                                        <p class="h4">URL: <a target="_blank" href='<?= $tweet['user']['url'] ?>'><?= $tweet['user']['url'] ?></a></p>
                                    </div>
                                </div>
                            </div>
                            <br>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 bg-grey padding-5">
            <h2 class="pull-left text-uppercase bg-white padding-5 full-width"> Latest releases </h2>
            <div class="row  bg-grey">
                <div class="col-xs-12  bg-grey">
                    <div class="thumbnail thumb  bg-grey">
                        <?php foreach ($releases as $release) { ?>
                            <div class="caption releases">
                                <div class="row big-font">
                                    <div class="col-xs-12 pull-right">
                                        <span class="text-muted pull-right"><?= html_escape(date_format(date_create($release['date']), "M , Y")); ?></span>
                                    </div>
                                    <div class="col-xs-12" style="text-align:left;padding:4px;font-size:18px;background:#777777;font-weight:500">
                                        <?= html_escape($release['title']); ?>
                                    </div>
                                    
                                    <div class="col-xs-12 ">
                                        <p>
                                            <?= html_escape($release['description']); ?>
                                        </p>
                                    </div>
                                    <a href="<?= site_url("home/view_release/" . $release['id']) ?>" class="btn btn-default btn-sm pull-right">Read More >></a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!--<div align="center">-->
        <div class="col-xs-12 col-sm-4 images">
            <div class="row cover-140-300" style="background:url(<?= base_url() ?>img/About-Small.png)">
                <div class="col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6">
                    <a class="btn btn-lg btn-info text-uppercase btn-block" style="background:#fd9b9b;color:#4d4d4d;border:none;" href="<?=site_url()?>/home/about">About</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 images">
            <div class="row cover-140-300" style="background:url(<?= base_url() ?>img/Music-Small.png);">
                <div class="col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6">
                    <a class="btn btn-lg btn-info text-uppercase btn-block" style="background:#fd9b9b;color:#4d4d4d;border:none;" href="<?=site_url()?>/home/music">Music</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 images">
            <div class="row cover-140-300" style="background:url(<?= base_url() ?>img/TV_Film-Small.png)">
                <div class="col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6">
                    <a class="btn btn-lg btn-info text-uppercase btn-block" style="background:#fd9b9b;color:#4d4d4d;border:none;" href="<?=site_url()?>/home/tv_film">TV/Film</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 images">
            <div class="row cover-140-300" style="background:url(<?= base_url() ?>img/Interactive-Small.png)">
                <div class="col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6">
                    <a class="btn btn-lg btn-info text-uppercase btn-block" style="background:#fd9b9b;color:#4d4d4d;border:none;" href="<?=site_url()?>/home/silent_labs">Interactive</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 images">
            <div class="row cover-140-300" style="background:url(<?= base_url() ?>img/Brands-Small.png)">
                <div class="col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6">
                    <a class="btn btn-lg btn-info text-uppercase btn-block" style="background:#fd9b9b;color:#4d4d4d;border:none;" href="<?=site_url()?>/home/brand">PARTNERSHIPS</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 images">
            <div class="row cover-140-300" style="background:url(<?= base_url() ?>img/Philanthropy-Small.png);">
                <div class="col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6">
                    <a class="btn btn-lg btn-info text-uppercase btn-block" style="background:#fd9b9b;color:#4d4d4d;border:none;" href="<?=site_url()?>/home/philanthrophy">Philanthropy</a>
                </div>
            </div>
        </div>
        
        <!--</div>-->
    </div>
</div>

<?php $this->load->view("common/footer") ?>
