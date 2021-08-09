<?php
$strJsonFileContents = file_get_contents("https://devtest.hackerusa.com");
$array = json_decode($strJsonFileContents);
// var_dump($array);
$url = 'images/desktop-bg2.jpg';
$urlS = 'images/mobile-bg.png';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url('<?php echo $url ?>');
        }

        @media screen and (max-width: 768px) {
            body {
                background-image: url('<?php echo $urlS ?>');
                background-position: center;
                background-size: cover;

            }
        }
    </style>

    <title>Document</title>

</head>

<body>
    <div class="container">
        <header>
            <img src="images/UCF LOGO.svg" alt="ucf logo">
            <h1> <?php echo $array->heading1; ?> </h1>
            <p id="para"> <?php echo $array->paragrah ?></p>
        </header>

        <div class="order_items">
            <div class="list">
                <p><img src="images/v.svg" alt="v"><?php echo $array->list[0] ?></p>
                <p><img src="images/v.svg" alt="v"><?php echo $array->list[1] ?></p>
                <p><img src="images/v.svg" alt="v"><?php echo $array->list[2] ?></p>
                <p><img src="images/v.svg" alt="v"><?php echo $array->list[3] ?></p>
                <div class="spans">
                    <span class="span1"> <?php echo $array->bold[0] ?></span>

                    <span class="span2"> <?php echo $array->bold[1] ?></span>
                </div>
            </div>

            <button id="open">
                <span class="word1"> <?php echo $array->button[0]; ?> </span>

                <strong> <span class="word2"> <?php echo $array->button[1]; ?> </span>
                </strong>
                <br>
                <span class="word3"> <?php echo $array->button[2]; ?> </span>
            </button>
        </div>
        <div class="arrow">
            <img src="images/arrow.svg" alt="arrow">
        </div>

    </div>
    <footer>
        <div class="footer-order">
            <img id="icon-UCF" src="images/UCF ICON.svg" alt="UCF ICON" height="20px" width="20px">
            <small>powered by</small>
            <img id="icon-hackeru" src="images/hackeru-bk.svg" alt="hackeru-bk.svg" height="50px" width="50px">
        </div>
        <small>Copyright 2019 by UCF</small>
        <br>

        <a href="privacy_policy.php">Privacy Policy</a>
    </footer>


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
    <script>
        let popup = document.querySelector("#myPopup");
        let open = document.querySelector("#open");
        let close = document.querySelector("#close");

        open.onclick = () => {
            popup.style.display = "block";
        }


        close.onclick = () => {
            popup.style.display = "none";
        }

        window.onclick = (event) => {
            if (event.target == popup) {
                popup.style.display = "none";
            }
        }
    </script>



</body>

</html>