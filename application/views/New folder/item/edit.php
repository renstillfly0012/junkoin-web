<!--start container-->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">

      <?php if (isset($msg['error'])) : ?>

        <?= $error['error'] ?>

      <?php endif ?>

      <?php if (isset($msg['success'])) : ?>

        <?= $msg['success'] ?>

      <?php endif ?>

      <form class="form-horizontal" action="<?= base_url() ?>item/edits/<?= $item->id ?>" method="post">

        <fieldset>

          <!-- Form Name -->
          <legend>ADD ITEM</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="id">Name</label>
            <div class="col-md-8">
              <input value="<?= $item->id ?>" id="id" name="id" type="text" placeholder="Enter Item Name" class="form-control input-md">

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="name">Name</label>
            <div class="col-md-8">
              <input value="<?= $item->name ?>" id="name" name="name" type="text" placeholder="Enter Item Name" class="form-control input-md">

            </div>
          </div>

          <!-- Textarea -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="description">Description</label>
            <div class="col-md-8">
              <textarea class="form-control" id="description" name="description"><?= $item->description ?></textarea>
            </div>
          </div>

          <!-- Prepended text-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="price">Price</label>
            <div class="col-md-8">
              <div class="input-group">
                <span class="input-group-addon">PhP</span>
                <input value="<?= $item->price ?>" id="price" name="price" class="form-control" placeholder="0" type="text">
              </div>

            </div>
          </div>

          <!-- Button (Double) -->
          <div class="form-group">
            <label class="col-md-4 control-label" for=""></label>
            <div class="col-md-8">
              <a href="<?= base_url() ?>item" id="" name="" class="btn btn-danger">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true">
                </span> Back
              </a>
              <Button id="" name="" class="btn btn-success">
                <span class="glyphicon glyphicon-ok" aria-hidden="true">
                </span> Submit </Button>

            </div>
          </div>

        </fieldset>
      </form>


      <img src="<?= base_url() ?>/assets/images/thumb_img/<?= $item->image ?>" />
      <?php echo form_open_multipart('item/do_upload'); ?>
      <input type="file" name="userfile" size="20" />
      <?php echo form_hidden('id', $item->id) ?>
      <br /><br />
      <input type="submit" value="upload" />
      </form>




    </div>
  </div>
</div>