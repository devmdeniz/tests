
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
                <input type="text" name="presentationone" required>
        </div>
        <div>
            <h1>Lorem ipsum [2]</h1>
                <input type="text" name="presentationtwo" required>
        </div>
        <div>
            <h1>Image 1</h1>
                <input type="url" name="presentationthree" required>
            </form>
        </div>
    </section>
<!--  -->
    <section id="portfolio">
        <div>
            <h1>Image 1</h1>
            <form action=<?php echo $formlink;?>>
                <input type="url" name="portfolioone" required>
                <button type="submit">Send</button>
            </form>
        </div>
        <div>
            <h1>Paragraph 1</h1>
            <form action=<?php echo $formlink;?>>
            <input type="text" name="portfoliotwo" required>
            <button type="submit">Send</button>
            </form>
        </div>
        <div>
            <h1>Link 1</h1>
            <form action=<?php echo $formlink;?>>
                <input type="url" name="portfoliothree" required>
                <button type="submit">Send</button>
            </form>
        </div>
        <div>
            <h1>Image 2</h1>
            <form action=<?php echo $formlink;?>>
                <input type="url" name="portfoliofour" required>
                <button type="submit">Send</button>
            </form>
        </div>
        <div>
            <h1>Paragraph 2</h1>
            <form action=<?php echo $formlink;?>>
                <input type="text" name="portfoliofive" required>
                <button type="submit">Send</button>
            </form>
        </div>
        <div>
            <h1>Link 2</h1>
            <form action=<?php echo $formlink;?>>
                <input type="url" name="portfoliosix" required>
                <button type="submit">Send</button>
            </form>
        </div>
        <div>
            <h1>Image 3</h1>
            <form action=<?php echo $formlink;?>>
                <input type="url" name="portfolioseven" required>
                <button type="submit">Send</button>
            </form>
        </div>
        <div>
            <h1>Paragraph 3</h1>
            <form action=<?php echo $formlink;?>>
            <input type="text" name="portfolioeight" required>
            <button type="submit">Send</button>
            </form>
        </div>
        <div>
            <h1>Link 3</h1>
            <form action=<?php echo $formlink;?>>
                <input type="url" name="portfolionine" required>
                <button type="submit">Send</button>
            </form>
        </div>
    </section>

    <section id="blog">
        <div>
            <h1>Image 1</h1>
            <form action=<?php echo $formlink;?>>
                <input type="url" name="blogone" required>
                <button type="submit">Send</button>
            </form>
        </div>
        <div>
            <h1>Link 1</h1>
            <form action=<?php echo $formlink;?>>
                <input type="url" name="blogtwo" required>
                <button type="submit">Send</button>
            </form>
        </div>
        <div>
            <h1>Image 2</h1>
            <form action=<?php echo $formlink;?>>
                <input type="url" name="blogthree" required>
                <button type="submit">Send</button>
            </form>
        </div>
        <div>
            <h1>Link 2</h1>
            <form action=<?php echo $formlink;?>>
            <input type="url" name="blogfour" required>
                <button type="submit">Send</button>
            </form>
        </div>
        <div>
            <h1>Image 2</h1>
            <form action=<?php echo $formlink;?>>
            <input type="url" name="blogfive" required>
            <button type="submit">Send</button>
            </form>
        </div>
        <div>
            <h1>Link 3</h1>
            <form action=<?php echo $formlink;?>>
            <input type="url" name="blogsix" required>
            <button type="submit">Send</button>
            </form>
        </div>
    </section>

    <section id="contact">
    <div>
            <h1>Mail</h1>
            <form action=<?php echo $formlink;?>>
                <input type="email" name="contactone" required>
                <button type="submit">Send</button>
            </form>
    </div>
    <div>
            <h1>LinedIn</h1>
            <form action=<?php echo $formlink;?>>
                <input type="url" name="contacttwo" required>
                <button type="submit">Send</button>
            </form>
    </div>
    <div>
            <h1>Github</h1>
            <form action=<?php echo $formlink;?>>
                <input type="url" name="contactthree" required>
                <button type="submit">Send</button>
            </form>
    </div>
    </section>

    <footer>
    <button type="submit">Send</button>
    </footer>
</body>

</html>