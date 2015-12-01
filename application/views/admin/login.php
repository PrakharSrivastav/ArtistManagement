<?php $this->load->view("admin/header"); ?>
<div class="row">
    <div class="col-sm-offset-3 col-sm-6" style="margin-top:10%;background:#ff3333;padding:20px ">
        <form class="form-horizontal" action="<?= site_url("admin/validate_login"); ?>" method="post">
            <div class="text-center">
                <?php
                if (isset($message) && !empty($message)) {
                    echo $message;
                    echo "<br/><br/>";
                }
                ?>
            </div>
            <div class="form-group  big-font">
                <label for="username" class="col-sm-3 control-label">Username  : </label>
                <div class="col-sm-offset-1 col-sm-8">
                    <input type="text" class="form-control big-font" id="username" required='required' name="username" placeholder="Username">
                </div>
            </div>
            <div class="form-group  big-font">
                <label for="password" class="col-sm-3 control-label">Password  : </label>
                <div class="col-sm-offset-1 col-sm-8">
                    <input type="password" class="form-control big-font" id="password" required='required' name="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group  big-font">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-primary btn-block btn-font">Sign in</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $this->load->view("admin/footer"); ?>
