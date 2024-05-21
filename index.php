<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/style.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <?php include 'header.php';
        echo generateHeaderAndVideo();
        ?>
        <div class="intro">
            <h1>Home Page</h1>
        </div>
    </header>

    <main>
        <div class="title">
            <h1>Esplora Insieme A Noi</h1>
        </div>
        <div class="Home">
            <div class="card">
                <h4>CHI SIAMO?</h4>
            <a href="./chisiamo.php"  title="paginaChiSiamo"><img src="./immagini/pagina-chi-siamo.jpg" alt="pagina-chi-siamo" title="pagina-chi-siamo"></a>
            </div>
            <div class="card">
                <h4>PORTFOLIO</h4>
            <a href="./elencoPortfolio.php" title="paginaPortfolio"><img src="./immagini/portfolio.jpg" alt="portfolio" title="portfolio"></a>
            </div>
            <div class="card">
                <h4>CONTATTI</h4>
            <a href="./contatti.php" title="paginaContatti"><img src="./immagini/contattaci.jpg" alt="contatti" title="contatti"></a>
            </div>
</div>
    </main>
    <?php include 'footer.php';
        echo generateFooter();
        ?>
        
    </body>
    </html>