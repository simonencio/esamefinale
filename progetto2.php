<?php
ini_set("auto_detect_line_endings", true);

require_once('Utility.php');

use MieClassi\Utility as UT;

$file = "progetti.json";
$arr = json_decode(UT::leggiTesto($file));
$selezionato = UT::richiestaHTTP("selezionato");
$selezionato = ($selezionato == null) ? 1 : $selezionato;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>progetto 2</title>
    <link rel="stylesheet" href="./style.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
    <?php include 'header.php';
        echo generateHeaderAndVideo();
        ?>
        <div class="intro">
            <h1>Progetti</h1>
        </div>
    </header>
    <main>
        <div class="title">
            <h1>Progetto 2</h1>
        </div>
            
        <section class="progetto">
            <img src="./immagini/coverimage.png" alt="lavoro2" title="lavoro2">
            <?php
            printf($stringa2);
            ?>
        </section>
        <div class="title">
            <h1>Vedi Altri Progetti</h1>
        </div>
        <section class="fotolavori">

            <ul class="lavori">

                <?php
                foreach ($arr as $link) {
                    $n = $link->id;
                    $classeSelezionato = ($n == $selezionato) ? 'class="selezionato"' : '';
                    $image_url = isset($link->image_url) ? $link->image_url : '';
                    printf('<li %s><a href="%s?selezionato=%u" title="%s" ><img class="portfolio-image" src="./immagini/%s" alt="%s" /><h2>%s</h2></a></li>', $classeSelezionato, $link->url, $link->id, isset($link->image_title) ? $link->image_title : '', $image_url, isset($link->image_title) ? $link->image_title : '', $link->nome);
                    $counter++;
                    if ($counter == 3) {
                        echo '</ul></section><section class="fotolavori"><ul class="lavori">';
                    }
                }
                ?>

            </ul>
        </section>
        </main>
        <?php include 'footer.php';
        echo generateFooter();
        ?>
    </body>
    </html>