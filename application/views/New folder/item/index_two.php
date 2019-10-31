<!--start container-->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
    <h1>Item Management</h1>
    <table class="display" id="table_id">
    <thead>
			  <tr>
          <th>ID</th><th>NAME</th><th>PRICE</th><th>ACTION</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($items as $item): ?>
        
            <tr>
                <td><?=$item->id?></td>
                <td><?=$item->name?></td>
                <td><?=$item->price?></td>
                <td>
                    <a href="<?=base_url()?>item/view/<?=$item->id?>" type="button" class="btn btn-primary btn-md">
                        <span class="glyphicon glyphicon-search" aria-hidden="true">
                        </span> 
                    </a>
                    <button type="button" class="btn btn-warning btn-md">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true">
                        </span> 
                    </button>
                    <a href="<?=base_url()?>item/delete/<?=$item->id?>" type="button" class="btn btn-danger btn-md">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true">
                        </span> 
                    </a>
                    
                
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
      </table>
      
      <a href="<?=base_url()?>item/add" type="button" class="btn btn-success btn-md">
          <span class="glyphicon glyphicon-plus" aria-hidden="true">
          </span> ADD Item
      </a>
      </div>
  </div>
</div>
<!--end container-->

    