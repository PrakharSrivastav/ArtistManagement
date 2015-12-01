<?php $this->load->view("admin/header_admin"); ?>
<div class="row">
    <div class="col-sm-6 padding-10">

        <div class="row table-responsive">
            <table class="table table-bordered table-condensed table-striped table-hover">
                <caption class="h4">Twitter Settings</caption>
                <thead>
                    <tr>
                        <th>Twitter Item</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Account Login</td>
                        <td><?php if (!empty($twitter) && $twitter) echo html_escape($twitter[0]['account_login']); ?></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><?php if (!empty($twitter) && $twitter) echo html_escape($twitter[0]['account_password']); ?></td>
                    </tr>
                    <tr>
                        <td>Twitter Handle</td>
                        <td><?php if (!empty($twitter) && $twitter) echo html_escape($twitter[0]['twitter_handle']); ?></td>
                    </tr>
                    <tr>
                        <td>Access Token</td>
                        <td><?php if (!empty($twitter) && $twitter) echo html_escape($twitter[0]['access_token']); ?></td>
                    </tr>
                    <tr>
                        <td>Access Token Secret</td>
                        <td><?php if (!empty($twitter) && $twitter) echo html_escape($twitter[0]['access_token_secret']); ?></td>
                    </tr>
                    <tr>
                        <td>Consumer Key</td>
                        <td><?php if (!empty($twitter) && $twitter) echo html_escape($twitter[0]['consumer_key']); ?></td>
                    </tr>
                </tbody>
            </table>

        </div>

        <div class="row table-responsive">
            <table class="table table-bordered table-condensed table-striped table-hover">
                <caption class="h4">News Items</caption>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>URL</th>
                        <th>Date Added</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($albums) && $albums && count($albums) > 0) {
                        foreach ($albums as $album) {
                            ?>
                            <tr>
                                <td><?= html_escape($album['title']); ?></td>
                                <td><a href="<?= html_escape($album['play_url']); ?>" target="_blank"><?= html_escape($album['play_url']); ?></a></td>
                                <td><?= html_escape(date_format(date_create($album['date']), "d-M-Y")); ?></td>
                            </tr>
                        <?php
                        }
                    }
                    ?>
                </tbody>
            </table>

        </div>

    </div>
    <div class="col-sm-6 padding-10">
        <div class="table-responsive">
            <table class="table table-bordered table-condensed table-striped table-hover">
                <caption class="h4">Homepage Images</caption>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Title</th>
                        <!--<th>Description</th>-->
                        <th>Path</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($images) && $images && count($images) > 0) {
                        foreach ($images as $image) {
                            ?>
                            <tr>
                                <td><?= html_escape($image['filename']); ?></td>
                                <td><?= html_escape($image['title']); ?></td>
                                <!--<td><?php //html_escape($image['desc']);   ?></td>-->
                                <td><a href="<?= html_escape($image['path']); ?>" target="_blank"><?= html_escape($image['path']); ?></a></td>
                                <td><a href="<?= site_url("admin/delete_image/" . $image['id']); ?>" ><span class="text-center"><i class="fa fa-trash"></i></span></a></td>
                            </tr>
    <?php }
} ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-6"></div>
    <div class="col-sm-6"></div>
</div>
<?php $this->load->view("admin/footer"); ?>
