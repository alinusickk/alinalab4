<?php $xml=simplexml_load_file("data.xml");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Plants</title>
</head>
<body>
    <h1>Plant Store</h1>

    <h2>Popular products</h2>
    <div class="products">
        <?php 
        foreach ($xml->item as $item) {
        ?>
        <div class="product">
            <div class="name"><?php echo $item->name?></div>
            <div class="price"><?php echo $item->price?></div>
            <div class="descr"><?php echo $item->descr?></div>
            <br>
            <a href="update.php?id=<?php echo $item['id']?>">Update</a>
            <a href="delete.php?id=<?php echo $item['id']?>">Delete</a>
        </div>
        <?php 
           }
        ?>
    </div>
    
    <br>

    <a href="create.php"><strong>Add a new plant!</strong></a>
</body>
</html>