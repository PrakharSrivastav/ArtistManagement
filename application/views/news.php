<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view("common/header") ?>
<div class="bg-red padding-5" style="min-height:420px">
    <!--loop over this section for each news item-->
    <?php
    if ($albums && !empty($albums) && count($albums) > 0) {
        foreach ($albums as $album) {
            ?><?php //print_r( (file_get_contents($album['play_url']))); ?>
            <div class="row box grey-top-border padding-10" style="background:url(<?= base_url() ?>/img/white-dot.png)">
                <div class="hidden-sm hidden-xs col-md-4">
                    <?php if (isset($album['play_url']) && !empty($album['play_url'])) { ?>
                        <div class="embed-responsive  embed-responsive-16by9">
                            <iframe  id="<?=$album['id']?>_id" marginheight="0" frameborder="0" onLoad="autoResize('<?=$album['id']?>_id');" class="embed-responsive-item" src="<?= $album['play_url'] ?>"></iframe> 
                        </div>
                        <?php
                    } else {
                        echo "<div></div>";
                    }
                    ?>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 text-muted">
                            <h4 class="pull-right"><?= html_escape(date_format(date_create($album['date']), "M. d, Y")); ?></h4>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12" style="background-color:#fd9b9b;margin-top:-5px;">
                            <h3 class="news-title text-capitalize" style="font-weight:500"><?= html_escape($album['title']); ?> </h3>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-xs-12 news-content h4">
                            <p>
                                <?= html_escape($album['description']); ?>
                            </p>
                            <a href="<?= site_url("home/view_release/" . $album['id']) ?>" class="btn btn-lg btn-default " style="background:#fd9b9b;color:#4d4d4d;border:none;margin-top:20px;"> View More >> </a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        <?php
        }
    }
    ?>
</div>

<?php $this->load->view("common/footer") ?>
<script language="JavaScript">
<!--
    function autoResize(id) {
        var newheight;
        var newwidth;

        if (document.getElementById) {
            newheight = document.getElementById(id).contentWindow.document.body.scrollHeight;
            newwidth = document.getElementById(id).contentWindow.document.body.scrollWidth;
        }

        document.getElementById(id).height = (newheight) + "px";
        document.getElementById(id).width = (newwidth) + "px";
    }
//-->
</script>