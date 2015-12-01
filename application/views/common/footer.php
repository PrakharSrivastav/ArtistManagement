<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>            
<footer class="no-padding">
    <div class="container no-padding" >
        <div class="row no-padding">
            <ul class="list-inline text-center text-uppercase padding-top-10">
                <li class="footer-menu-item padding-right-10"><a href="<?= site_url() ?>/home/about">About</a></li><span class="text-black">&nbsp;</span>
                <li class="footer-menu-item padding-right-10"><a href="<?= site_url() ?>/home/music">Music</a></li><span class="text-black">&nbsp;</span>
                <li class="footer-menu-item padding-right-10"><a href="<?= site_url() ?>/home/tv_film">TV / Film</a></li><span class="text-black">&nbsp;</span>
                <li class="footer-menu-item padding-right-10"><a href="<?= site_url() ?>/home/silent_labs">Interactive</a></li><span class="text-black">&nbsp;</span>
                <li class="footer-menu-item padding-right-10"><a href="<?= site_url() ?>/home/philanthrophy">Philanthropy</a></li><span class="text-black">&nbsp;   </span>
                <li class="footer-menu-item padding-right-10"><a href="<?= site_url() ?>/home/news">News</a></li>
            </ul>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div align="center" class="row no-padding">
            <form class="form-inline">
                <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail3">Notification Email: </label>
                    <div class="input-group">
                        <div class="input-group-addon">Mailing List : </div>
                        <input type="email" class="form-control btn-font" id="exampleInputEmail3" placeholder="Email">
                    </div>
                </div>
                <button type="submit" style="background:#740202;border:none" class="btn btn-primary btn-font">Subscribe</button>
            </form>
        </div>
        <div class="text-center btn-font bg-grey full-width" id="copyright">&copy;<a class="btn btn-link normal-link" href="<?= site_url() ?>/home/silent_labs">Archfold Interactive, LLC 2015</a></div>
    </div>
    <!-- /.container-fluid -->
</footer>
</div> <!-- /container -->
<script>
    var base_url = '<?= base_url(); ?>';
    var site_url = '<?= site_url(); ?>';
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?= base_url() ?>js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
<script src="<?= base_url() ?>js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>js/vendor/niceScroll.js"></script>
<script src="<?= base_url() ?>js/main.js"></script>
<script language="JavaScript">

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

</script>
</body>
</html>