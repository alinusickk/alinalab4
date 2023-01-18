<?php
    if (isset($_POST['submit'])){
        $nameplant=$_POST['plantname'];
        $nameprice=$_POST['price'];
        $namedescr=$_POST['descr'];

        $xml=simplexml_load_file("data.xml");

        
        $lastEl=$xml->item[($xml->count())-1];

        $newPlant=$xml->addChild('item', '');
        $newPlant->addChild('name', $nameplant);
        $newPlant->addChild('price', $nameprice);
        $newPlant->addChild('descr', $namedescr);
        $newPlant->addAttribute('id', $lastEl['id']+1);

        $xml->saveXML('data.xml');

        echo '<script>
        alert("New plant succesfully added!")
        </script>';

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <input type="text" name="plantname" placeholder="Plant name">
        <br>
        <br>
        <input type="number" name="price" placeholder="Price">
        <br>
        <br>
        <input type="text" name="descr" placeholder="Description">
        <br>
        <br>
        <button type="submit" name="submit">Send</button>

    </form>
    <br>
    <br>
    <a href="index.php">Back</a>
</body>
</html>