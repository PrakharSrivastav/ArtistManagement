<?php $this->load->view("admin/header_admin"); ?>
<div class="row">
    <div class="col-sm-12 padding-10">
        <div class="table-responsive">
            <table class="table table-bordered table-condensed table-striped table-hover">
                <caption class="h4">List of News Items</caption>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Play URL</th>
                        <th>Purchase URL</th>
                        <th>Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($albums) && count($albums) > 0) {
                        foreach ($albums as $album) {
                            ?>
                    <tr>
                        <td style="width:20%"><?=html_escape($album['title']); ?></td>
                        <td><?=html_escape($album['description']); ?></td>
                        <td style="width:10%"><?=html_escape($album['play_url']); ?></td>
                        <td style="width:10%"><?=html_escape($album['buy_url']); ?></td>
                        <td style="width:15%"><?=html_escape($album['date']); ?></td>
                        <td style="width:5%"><a href="<?=site_url("admin/edit_album/".$album['id'])?>" ><span class="text-center fa fa-edit"></span></a></td>
                        <td style="width:5%"><a href="<?=site_url("admin/delete_album/".$album['id'])?>" ><span class="text-center fa fa-trash"></span></a></td>
                    </tr>
                        <?php }
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $this->load->view("admin/footer"); ?>
