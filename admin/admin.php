
<?php

$formlink = "database/adminforms.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" media="(max-width: 768px)" href="css/adminmobile.css">
    <link rel="stylesheet" media="(max-width: 500px)" href="css/admintablet.css">
</head>

<body>
    <header>
        <a href="#presentation">Presentation</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#blog">Blog</a>
        <a href="#contact">Contact</a>
    </header>
<!--  -->
    <section id="presentation">
        <div>
            <form action=<?php echo $formlink;?> method="GET">
            <h1>Hello World [1]</h1>
                <input type="text" name="presentationone"  >
        </div>
        <div>
            <h1>Lorem ipsum [2]</h1>
                <input type="text" name="presentationtwo"  >
        </div>
        <div>
            <h1>Image 1</h1>
                <input type="url" name="presentationthree"  >
        </div>
    </section>
<!--  -->
    <section id="portfolio">
        <div>
            <h1>Image 1</h1>
                <input type="url" name="portfolioone"  >
        </div>
        <div>
            <h1>Paragraph 1</h1>
            <input type="text" name="portfoliotwo"  >
        </div>
        <div>
            <h1>Link 1</h1>
                <input type="url" name="portfoliothree"  >
        </div>
        <div>
            <h1>Image 2</h1>
                <input type="url" name="portfoliofour"  >
        </div>
        <div>
            <h1>Paragraph 2</h1>
                <input type="text" name="portfoliofive"  >
        </div>
        <div>
            <h1>Link 2</h1>
                <input type="url" name="portfoliosix"  >
        </div>
        <div>
            <h1>Image 3</h1>
                <input type="url" name="portfolioseven"  >
        </div>
        <div>
            <h1>Paragraph 3</h1>
            <input type="text" name="portfolioeight"  >
        </div>
        <div>
            <h1>Link 3</h1>
                <input type="url" name="portfolionine"  >
        </div>
    </section>

    <section id="blog">
        <div>
            <h1>Image 1</h1>
                <input type="url" name="blogone"  >
        </div>
        <div>
            <h1>Link 1</h1>
                <input type="url" name="blogtwo"  >
        </div>
        <div>
            <h1>Image 2</h1>
                <input type="url" name="blogthree"  >
        </div>
        <div>
            <h1>Link 2</h1>
            <input type="url" name="blogfour"  >
        </div>
        <div>
            <h1>Image 2</h1>
            <input type="url" name="blogfive"  >
        </div>
        <div>
            <h1>Link 3</h1>
            <input type="url" name="blogsix"  >
        </div>
    </section>

    <section id="contact">
    <div>
            <h1>Mail</h1>
                <input type="email" name="contactone"  >
    </div>
    <div>
            <h1>LinedIn</h1>
                <input type="url" name="contacttwo"  >
    </div>
    <div>
            <h1>Github</h1>
                <input type="url" name="contactthree"  >
            </div>
        </section>
        
        <footer>
            <button type="submit">Send</button>
        </footer>
    </form>
</body>

</html>