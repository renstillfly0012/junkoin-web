<!--start container-->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
<?php if(validation_errors()): ?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php echo validation_errors(); ?>
</div>
<?php endif; ?>





<!-- <form class="form-horizontal" action="<?=base_url()?>item/insert" method="post"> -->
<?php echo form_open('item/insert')?>
<fieldset>

<!-- Form Name -->
<legend>ADD ITEM</legend>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-8">
  <?php echo form_error('name'); ?>
  <input value="<?=set_value('name')?>" id="name" name="name" type="text" placeholder="Enter Item Name" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Description</label>
  <div class="col-md-8">                     
    <textarea class="form-control" id="description" name="description"><?=set_value('description')?></textarea>
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="price">Price</label>
  <div class="col-md-8">
    <div class="input-group">
      <span class="input-group-addon">PhP</span>
      <input value="<?=set_value('price')?>" id="price" name="price" class="form-control" placeholder="0" type="text">
    </div>
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-8">
    <button id="" name="" class="btn btn-success">Add</button>
    <a id="" href="<?=base_url()?>item" name="" class="btn btn-danger">Cancel</a>
  </div>
</div>

</fieldset>
</form>

</div>
</div>
</div>