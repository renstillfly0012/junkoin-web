<!--start container-->
<!-- <div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
    <h1>Item Management</h1>
    <table class="table table-hover">
                          <tr>
          <th>ID</th><th>IMAGE</th><th>NAME</th><th>PRICE</th><th>ACTION</th>
        </tr>
        <?php foreach ($items as $item): ?>
                <tr>
                    <td><?= $item->id ?></td>
                    
                    <td><img src="<?= base_url() ?>/assets/images/thumb_img/<?= $item->image ?>" width="30px" /></td>
                    <td><?= $item->name ?></td>
                    <td><?= $item->price ?></td>
                    <td>
                        <a href="<?= base_url() ?>item/view/<?= $item->id ?>" type="button" class="btn btn-primary btn-md">
                            <span class="glyphicon glyphicon-search" aria-hidden="true">
                            </span> 
                        </a>
                        <a href="<?= base_url() ?>item/edit/<?= $item->id ?>" type="button" class="btn btn-warning btn-md">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true">
                            </span> 
                        </a>
                        <a href="<?= base_url() ?>item/viewdelete/<?= $item->id ?>" type="button" class="btn btn-danger btn-md">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true">
                            </span> 
                        </a>
                        
                    
                    </td>
                </tr>
<?php endforeach ?>
        
      </table>
<?= $this->pagination->create_links(); ?> 
      <a href="<?= base_url() ?>item/add" type="button" class="btn btn-success btn-md">
          <span class="glyphicon glyphicon-plus" aria-hidden="true">
          </span> ADD Item
      </a>
      </div>
  </div>
</div> -->

<div class="col-md-8 offset-md-2">
    <!-- DATA TABLE -->

    <div class="table-responsive table-responsive-data2">
        <table class="table table-data2 ">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="tr-shadow">

                    <?php foreach ($items as $item): ?>
                    <tr class="tr-shadow">
                        <td><?= $item->id ?></td>

                        <td><img src="<?= base_url() ?>/assets/images/thumb_img/<?= $item->image ?>" width="30px" /></td>
                        <td><?= $item->name ?></td>
                        <td><?= $item->price ?></td>
                        <td>
                            <a href="<?= base_url() ?>item/view/<?= $item->id ?>" type="button" class="btn btn-primary btn-md">
                                <span class="glyphicon glyphicon-search" aria-hidden="true">
                                </span> 
                            </a>
                            <a href="<?= base_url() ?>item/edit/<?= $item->id ?>" type="button" class="btn btn-warning btn-md">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true">
                                </span> 
                            </a>
                            <a href="<?= base_url() ?>item/viewdelete/<?= $item->id ?>" type="button" class="btn btn-danger btn-md">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true">
                                </span> 
                            </a>


                        </td>
                    </tr>
                   

                 </tr>
                 <tr class="tr-spacer"></tr>


                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <!-- END DATA TABLE -->
</div>
<?= $this->pagination->create_links(); ?> 
<a href="<?= base_url() ?>item/add" type="button" class="btn btn-success btn-md">
    <span class="glyphicon glyphicon-plus" aria-hidden="true">
    </span> ADD Item
</a>



