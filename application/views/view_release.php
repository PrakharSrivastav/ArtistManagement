<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view("common/header") ?>
<div class="padding-bottom-40" style="background:url(<?= base_url() ?>/img/white-dot.png);font-family:'proxima_nova_condensed'">
    <div class="row bg-info padding-bottom-10">
        <div class="col-xs-12 col-sm-8 h2 text-center"><?= html_escape($album['title']); ?></div>
        <div class="col-xs-12 col-sm-3 pull-right h2 text-center"><?= html_escape(date_format(date_create($album['date']), "M , Y")); ?></div>
    </div>
    <div class="row">
        <div class="col-xs-12 h3 ">
            <p class="text-left padding-left-10">
                <?= html_escape($album['description']); ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <p class="text-left padding-left-10">
                <strong class="big-font">Download it from : </strong>
                <span><a href="<?= html_escape($album['buy_url']); ?>" class=" btn btn-lg btn-info">Download</a></span>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 padding-top-10">
            <?php if (isset($album['play_url']) && !empty($album['play_url'])) { ?>
                <div class="embed-responsive box embed-responsive-16by9" align="center">
                    <iframe id="<?= $album['id'] ?>_id"  onLoad="autoResize('<?= $album['id'] ?>_id');" class="embed-responsive-item" src="<?= html_escape($album['play_url'])  ?>"></iframe> 
                </div>
            <?php
            } else {
                echo "<div></div>";
            }
            ?>
        </div>
    </div>
</div>
<?php $this->load->view("common/footer") ?>
