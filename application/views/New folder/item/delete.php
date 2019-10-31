<!--start container-->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">

<form class="form-horizontal" action="<?=base_url()?>item/delete/<?=$item->id?>" method="post">
<fieldset>

<!-- Form Name -->
<legend>DELETE ITEM</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="id">Name</label>  
  <div class="col-md-8">
  <input value="<?=$item->id?>" readonly id="id" name="id" type="text" placeholder="Enter Item Name" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-8">
  <input readonly value="<?=$item->name?>" id="name" name="name" type="text" placeholder="Enter Item Name" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Description</label>
  <div class="col-md-8">                     
    <textarea readonly class="form-control" id="description" name="description"><?=$item->description?></textarea>
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="price">Price</label>
  <div class="col-md-8">
    <div class="input-group">
      <span class="input-group-addon">PhP</span>
      <input value="<?=$item->price?>" readonly id="price" name="price" class="form-control" placeholder="0" type="text">
    </div>
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-8">
  <button class="btn btn-success"> <span class="glyphicon glyphicon-ok" aria-hidden="true">
        </span> Submit</button>
    <a href="<?=base_url()?>item" id="" name="" class="btn btn-danger">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true">
        </span> Back
    </a>
    
  </div>
</div>

</fieldset>
</form>

</div>
</div>
</div>