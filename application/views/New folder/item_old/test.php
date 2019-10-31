<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
    
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            MANG TOMMY STORE <hr>
            <?= $header ?><br/>
            <table class="table">
                <tr>
                    <th>ID</th><th>NAME</th><th>PRICE</th><th>ACTION</th>
                </tr>
                <?php foreach($items as $item): ?>
                    <tr>
                        <td><?=$item->id?></td>
                        <td><?=$item->name?></td>
                        <td><?=$item->price?></td>
                        <td>
                            <button type="button" class="btn btn-primary btn-md">
                                <span class="glyphicon glyphicon-search" aria-hidden="true">
                                </span> 
                            </button>
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
            </table>
        </div>
    </div>
</body>
</html>