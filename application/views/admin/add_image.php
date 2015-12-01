<?php $this->load->view("admin/header_admin"); ?>
<div class="row">
    <div class="col-sm-offset-2 col-sm-8">
        <h2 class="text-primary text-center">Add New Image to Homepage<br><br></h2>
        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?= site_url("admin/insert_image"); ?>">
            <div class="form-group">
                <label for="img_title" class="col-sm-3 control-label">Image Description :</label>
                <div class="col-sm-offset-1 col-sm-8">
                    <input type="text" class="form-control" id="img_title"  name="img_title"  placeholder="Image Title" />
                </div>
            </div>
            <div class="form-group">
                <label for="img_desc" class="col-sm-3 control-label">Image Description :</label>
                <div class="col-sm-offset-1 col-sm-8">
                    <textarea class="form-control" id="img_desc"  name="img_desc"  placeholder="Image Description"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="userfile" class="col-sm-3 control-label">Chose Image : </label>
                <div class="col-sm-offset-1 col-sm-8">
                    <input type="file"  id="userfile" name="userfile" placeholder="Please select an Image to upload">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-primary btn-block">Upload Image</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $this->load->view("admin/footer"); ?>
