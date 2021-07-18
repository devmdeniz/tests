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
        <img src="https://bgcp.bionluk.com/images/avatar/200x200/27b4c6c3-f7c4-4591-8333-ba282f1e4c65.jpg " alt="">
        <div>
            <h1>Hello World</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas sunt impedit similique beatae suscipit, natus cum consectetur ratione alias, quos debitis ducimus itaque, obcaecati corrupti optio pariatur id laboriosam animi? Porro, culpa iste
                voluptatibus vero deserunt officia tempore nulla fugit pariatur, quis dignissimos, quae officiis animi maiores optio. Dolorum in maxime minima, cupiditate harum accusantium corporis sit quis illum aut suscipit molestiae, culpa tenetur.
                Beatae qui voluptas dolores amet quidem quasi ipsam in dignissimos eligendi quia quas perspiciatis voluptatum dolorum, cupiditate magni vero pariatur maxime vel deserunt, debitis, sed doloribus reprehenderit modi! Minima ea, sequi recusandae
                eligendi tempore soluta velit?</p>
        </div>
    </section>
    <section class="portfolio" id="portfolio">
        <div>
            <img src="https://bgcp.bionluk.com/images/avatar/200x200/27b4c6c3-f7c4-4591-8333-ba282f1e4c65.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, beatae.
            </p>
        </div>
        <div>
            <img src="https://bgcp.bionluk.com/images/avatar/200x200/27b4c6c3-f7c4-4591-8333-ba282f1e4c65.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, beatae.
            </p>
        </div>
        <div>
            <img src="https://bgcp.bionluk.com/images/avatar/200x200/27b4c6c3-f7c4-4591-8333-ba282f1e4c65.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, beatae.
            </p>
        </div>
    </section>
    <section class="blog" id="blog">
        <div>
            <img src="https://bgcp.bionluk.com/images/avatar/200x200/27b4c6c3-f7c4-4591-8333-ba282f1e4c65.jpg" alt="">
        </div>
        <div>
            <img src="https://bgcp.bionluk.com/images/avatar/200x200/27b4c6c3-f7c4-4591-8333-ba282f1e4c65.jpg" alt="">
        </div>
        <div>
            <img src="https://bgcp.bionluk.com/images/avatar/200x200/27b4c6c3-f7c4-4591-8333-ba282f1e4c65.jpg" alt="">
        </div>
    </section>
    <footer id="footer">
        <a href=""><i class="fas fa-envelope w3-xxxlarge "></i></a>
        <a href=""><i class="fab fa-linkedin w3-xxxlarge "></i></a>
        <a href=""><i class="fab fa-github w3-xxxlarge "></i></a>
    </footer>
    <script src="js/app.js"></script>
</body>

</html>