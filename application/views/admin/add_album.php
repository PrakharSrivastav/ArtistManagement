<?php $this->load->view("admin/header_admin"); ?>
<div class="row">
    <div class="col-sm-offset-2 col-sm-8">
        <h2 class="text-primary text-center">Add News Item<br><br></h2>
        <form class="form-horizontal" method="post" action="<?=site_url("admin/insert_album");?>">
            <div class="form-group">
                <label for="title" class="col-sm-3 control-label">News Title :</label>
                <div class="col-sm-offset-1 col-sm-8">
                    <input type="text" class="form-control" id="title"  name="title"  placeholder="News Title">
                </div>
            </div>

            <div class="form-group">
                <label for="description" class="col-sm-3 control-label">News Description :</label>
                <div class="col-sm-offset-1 col-sm-8">
                    <textarea class="form-control" id="description"  name="description"  placeholder="News Description"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="play_url" class="col-sm-3 control-label">Streaming URL : </label>
                <div class="col-sm-offset-1 col-sm-8">
                    <input type="text" class="form-control" id="play_url" name="play_url" placeholder="Streaming URL ">
                </div>
            </div>

            <div class="form-group">
                <label for="buy_url" class="col-sm-3 control-label">Purchase Link: </label>
                <div class="col-sm-offset-1 col-sm-8">
                    <input type="text" class="form-control" id="buy_url" name="buy_url" placeholder="Purchase Link">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-primary btn-block">Add News details</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $this->load->view("admin/footer"); ?>
