<?php
$strJsonFileContents = file_get_contents("https://devtest.hackerusa.com");
$array = json_decode($strJsonFileContents);
// var_dump($array);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/popup.css">
    <title>Document</title>
    <style>
        body {
            background-image: url("images/desktop-bg2.jpg");

        }
    </style>
</head>

<body>

    <div class="popup" id="myPopup">
        <div class="popupContent">
            <div id="close">&times;</div>
            <h2><?php echo $array->popup->heading; ?></h2>
            <form action="">
                <label><?php echo $array->popup->labels->name ?></label>
                <br>
                <input type="text">
                <br>
                <label><?php echo $array->popup->labels->phone ?></label>
                <br>
                <input type="number">
                <br>
                <label><?php echo $array->popup->labels->email ?></label>
                <br>
                <input type="email">
                <br>
                <br>
                <button><?php echo $array->popup->button ?></button>
            </form>
        </div>
    </div>


</body>

</html>