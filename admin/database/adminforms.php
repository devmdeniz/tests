<?php
include("./connection.php");
// Presentation = 3
// Portfolio = 9
// Blog = 6
// Contact = 3
// UPDATE `index` SET `text` = 'Lorem ipsum dolor sit ame' WHERE `index`.`id` = 12
// 
function updateData($text, $id) {
global $conn;

    if($sql = mysqli_query($conn, 'UPDATE `index` SET `text` = $text WHERE `index`.`id` = $id')) {
        echo "Succesfull";
    } else {
        die('err' . $id . $text . mysqli_error($conn));
    }
}

function updateMail($mail, $id) {
    global $conn;
    $text = 'mailto:'. $mail;
    if($sql = mysqli_query($conn, 'UPDATE `index` SET `text` = $text WHERE `index`.`id` = $id')) {
        echo "Succesfull";
    } else {
        die('err' . $id . $text . mysqli_error($conn));
    }
}

if(isset($_GET["presentationone"])) {
    $presentationone = $_GET["presentationone"];
    updateData($presentationone, 1);
}

if(isset($_GET["presentationtwo"])) {
    $presentationtwo = $_GET["presentationtwo"];
    updateData($presentationtwo, 2);
}

if(isset($_GET["presentationthree"])) {
    $presentationthree = $_GET["presentationthree"];
    updateData($presentationthree, 3);
}

// 
// 
// 

if(isset($_GET["portfolioone"])) {
    $portfolioone = $_GET["portfolioone"];
    updateData($portfolioone, 5);
}

if(isset($_GET["portfoliotwo"])) {
    $portfoliotwo = $_GET["portfoliotwo"];
    updateData($portfoliotwo, 6);
}

if(isset($_GET["portfoliothree"])) {
    $portfoliothree = $_GET["portfoliothree"];
    updateData($portfoliothree, 4);
}

if(isset($_GET["portfoliofour"])) {
    $portfoliofour = $_GET["portfoliofour"];
    updateData($portfoliofour, 8);
}

if(isset($_GET["portfoliofive"])) {
    $portfoliofive = $_GET["portfoliofive"];
    updateData($portfoliofive, 9);
}

if(isset($_GET["portfoliosix"])) {
    $portfoliosix = $_GET["portfoliosix"];
    updateData($portfoliosix, 7);
}

if(isset($_GET["portfolioseven"])) {
    $portfolioseven = $_GET["portfolioseven"];
    updateData($portfolioseven, 11);
}

if(isset($_GET["portfolioeight"])) {
    $portfolioeight = $_GET["portfolioeight"];
    updateData($portfolioeight, 12);
}

if(isset($_GET["portfolionine"])) {
    $portfolionine = $_GET["portfolionine"];
    updateData($portfolionine, 10);
}
// 
// 
// 

if(isset($_GET["blogone"])) {
    $blogone = $_GET["blogone"];
    updateData($blogone, 14);
}

if(isset($_GET["blogtwo"])) {
    $blogtwo = $_GET["blogtwo"];
    updateData($blogtwo, 13);
}

if(isset($_GET["blogthree"])) {
    $blogthree = $_GET["blogthree"];
    updateData($blogthree,16);
}

if(isset($_GET["blogfour"])) {
    $blogfour = $_GET["blogfour"];
    updateData($blogfour, 15);
}

if(isset($_GET["blogfive"])) {
    $blogfive = $_GET["blogfive"];
    updateData($blogfive, 18);
}

if(isset($_GET["blogsix"])) {
    $blogsix = $_GET["blogsix"];
    updateData($blogsix, 17);
}
// 
// 
// 

if(isset($_GET["contactone"])) {
    $contactone = $_GET["contactone"];
    updateMail($contactone, 19);
}

if(isset($_GET["contacttwo"])) {
    $contacttwo = $_GET["contacttwo"];
    updateData($text, 20);
}

if(isset($_GET["contactthree"])) {
    $contactthree = $_GET["contactthree"];
    updateData($text, 21);
}

/*
$presentationthree = $_GET["presentationthree"];
// 
$portfolioone = $_GET["portfolioone"];
$portfoliotwo = $_GET["portfoliotwo"];
$portfoliothree = $_GET["portfoliothree"];
$portfoliofour = $_GET["portfoliofour"];
$portfoliofive = $_GET["portfoliofive"];
$portfoliosix = $_GET["portfoliosix"];
$portfolioseven = $_GET["portfolioseven"];
$portfolioeight = $_GET["portfolioeight"];
$portfolionine = $_GET["portfolionine"];
// 
$blogone = $_GET["blogone"];
$blogtwo = $_GET["blogtwo"];
$blogthree = $_GET["blogthree"];
$blogfour = $_GET["blogfour"];
$blogfive = $_GET["blogfive"];
$blogsix = $_GET["blogsix"];
// 
$contactone = $_GET["contactone"];
$contacttwo = $_GET["contacttwo"];
$contactthree = $_GET["contactthree"];
// 
*/

?>