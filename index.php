<?php

include("./admin/database/connection.php");

function data($id) {
    global $conn;
    $sql = mysqli_query($conn, "SELECT text FROM `index` WHERE id=$id");
    $row = mysqli_fetch_assoc($sql);
    echo ($row["text"]);            
}

// https://bgcp.bionluk.com/images/avatar/200x200/27b4c6c3-f7c4-4591-8333-ba282f1e4c65.jpg
// array_push($text, $db)
// $sql = mysqli_query($conn, "SELECT text FROM index");
//$id = 1;
//$text = array();
// while($db = mysqli_query($conn, "SELECT text FROM index WHERE id='$id'")) {
//    $sql = mysqli_query($conn, "SELECT text FROM `index` WHERE id=2");
  //  $row = mysqli_fetch_assoc($sql);
    //echo($row["text"]);
    //echo mysqli_error($conn);
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 1</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="(max-width: 768px)" href="css/tablet.css">
    <link rel="stylesheet" media="(max-width: 500px)" href="css/mobile.css">
</head>

<body>
    <span style="font-size:30px;cursor:pointer" class="treeline" OnMouseOver="openNav()">&#9776;</span>
    <section id="mySidenav" class="sidenav">
        <a href="javascript:void(0) " class="closebtn " OnMouseDown="closeNav() ">&times;</a>
        <a href="#presentation" onClick="closeNav()">Presentation</a>
        <a href="#portfolio" onClick="closeNav()">Portfolio</a>
        <a href="#blog" onClick="closeNav()">Blog</a>
        <a href="#footer" onClick="closeNav()">Contact</a>
    </section>
    <section class="presentation" id="presentation">
        <img src=<?php data(3); ?> alt="">
        <div>
            <h1><?php data(1); ?></h1>
            <p><?php data(2); ?></p>
        </div>
    </section>
    <section class="portfolio" id="portfolio">
        <div>
            <a href=<?php data(4); ?>><img src=<?php data(5); ?> alt=""></a>
            <p><?php data(6); ?></p>
        </div>
        <div>
            <a href=<?php data(7); ?>><img src=<?php data(8); ?> alt=""></a>
            <p><?php data(9); ?></p>
        </div>
        <div>
            <a href=<?php data(10)?>><img src=<?php data(11)?> alt=""></a>
            <p><?php data(12)?></p>
        </div>
    </section>
    <section class="blog" id="blog">
        <div>
            <a href=<?php data(13)?>><img src=<?php data(14)?> alt=""></a>
        </div>
        <div>
            <a href="<?php data(15)?>"><img src=<?php data(16)?> alt=""></a>
        </div>
        <div>
            <a href=<?php data(17)?>><img src=<?php data(18)?> alt=""></a>
        </div>
    </section>
    <footer id="footer">
        <a href=<?php data(19)?>><i class="fas fa-envelope w3-xxxlarge "></i></a>
        <a href=<?php data(20)?>><i class="fab fa-linkedin w3-xxxlarge "></i></a>
        <a href=<?php data(21)?>><i class="fab fa-github w3-xxxlarge "></i></a>
    </footer>
    <script src="js/app.js"></script>
</body>

</html>