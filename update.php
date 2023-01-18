<?php $xml=simplexml_load_file("data.xml");

    if ($_SERVER['REQUEST_METHOD'] === 'GET'){
        $id = $_GET['id'];
        foreach($xml->item as $item){
            if ($item['id'] == $id){
                $name=$item->name;
                $price=$item->price;
                $descr=$item->descr;
                break;
            }
        }
    } else if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id=$_POST['id'];
        
        foreach($xml->item as $item){
            if ($item['id'] == $id){
                $item->name=$_POST['bookname'];
                $item->price=$_POST['price'];
                $item->descr=$_POST['descr'];
                break;
            }
        }
        $xml->saveXML('data.xml');
        echo '<script>
        alert("New plant has been succesfully added!");
        location.href="index.php";
        </script>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обновить</title>
</head>
<body>
<form action="" method="POST">
    <input type="text" name="bookname"  value="<?php echo $name ?>">
        <br>
        <input type="number" name="price" value="<?php echo $price ?>">
        <br>
        <input type="text" name="descr" value="<?php echo $descr ?>">
        <br>
        <button type="submit" name="submit">Update</button>

    </form>
    <br>
    <br>
    <a href="index.php">Go back</a>
</body>
</html>