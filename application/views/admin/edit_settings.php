<?php $this->load->view("admin/header_admin"); ?>
<div class="row">
    <div class="col-sm-offset-2 col-sm-8">
        <h2 class="text-primary text-center">Twitter Account Settings<br><br></h2>
        <form class="form-horizontal" method="post" action="<?=site_url("admin/edit_details");?>">
            <div class="form-group">
                <label for="twitter_login" class="col-sm-3 control-label">Twitter login :</label>
                <div class="col-sm-offset-1 col-sm-8">
                    <input type="text" class="form-control" id="twitter_login"  name="twitter_login" value="<?php if (!empty($twitter) && $twitter) echo $twitter[0]['account_login']; ?>" placeholder="Please provide your twitter Login">
                </div>
            </div>

            <div class="form-group">
                <label for="twitter_password" class="col-sm-3 control-label">Consumer Secret :</label>
                <div class="col-sm-offset-1 col-sm-8">
                    <input type="text" class="form-control" id="twitter_password"  name="twitter_password" value="<?php if (!empty($twitter) && $twitter) echo $twitter[0]['account_password']; ?>" placeholder="Please provide your twitter Password">
                </div>
            </div>

            <div class="form-group">
                <label for="twitter_handle" class="col-sm-3 control-label">Twitter Handle (Search Item): </label>
                <div class="col-sm-offset-1 col-sm-8">
                    <input type="text" class="form-control" id="twitter_handle" name="twitter_handle" value="<?php if (!empty($twitter) && $twitter) echo $twitter[0]['twitter_handle']; ?>" placeholder="Please provide your twitter handle">
                </div>
            </div>

            <div class="form-group">
                <label for="twitter_acces_token" class="col-sm-3 control-label">Twitter Access Token : </label>
                <div class="col-sm-offset-1 col-sm-8">
                    <input type="text" class="form-control" id="twitter_acces_token" name="twitter_acces_token" value="<?php if (!empty($twitter) && $twitter) echo $twitter[0]['access_token']; ?>" placeholder="Twitter access token">
                </div>
            </div>

            <div class="form-group">
                <label for="acces_token_sec" class="col-sm-3 control-label">Access Token Secret: </label>
                <div class="col-sm-offset-1 col-sm-8">
                    <input type="text" class="form-control" id="acces_token_sec" name="acces_token_sec" value="<?php if (!empty($twitter) && $twitter) echo $twitter[0]['access_token_secret']; ?>" placeholder="Access token secret">
                </div>
            </div>

            <div class="form-group">
                <label for="consumer_key" class="col-sm-3 control-label">Consumer Key: </label>
                <div class="col-sm-offset-1 col-sm-8">
                    <input type="text" class="form-control" id="consumer_key" name="consumer_key" value="<?php if (!empty($twitter) && $twitter) echo $twitter[0]['consumer_key']; ?>" placeholder="Consumer Key">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-primary btn-block">Edit Twitter Account details</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $this->load->view("admin/footer"); ?>
