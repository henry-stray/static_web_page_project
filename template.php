<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $page['title']; ?>
        </title>
        <link href="styles.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>My Static Site
            </h1>
            <p class="subtitle">
                "look, ma, no server"
            </p>
        </header>
        <nav>
            <a href="index.html">index</a><br>
            <a href="page1.html">page1</a><br>
            <a href="page2.html">page2</a><br>
            <a href="page3.html">page3</a><br>
        </nav>
        <main>
            <article>
                <h2><?php echo $page['title']; ?>
                </h2>
                <h3><?php echo $page['subtitle']; ?>
                </h3>
                <p>
                    <?php echo $page['content']; ?>
                </p>
                <p>
                    Next page: <?php echo $next_page; ?>
                </p>
            </article>
        </main>
        <footer>
            <?php echo date("Y") ?> Henry macharia 
        </footer>
    </body>
</html>