<?php
ini_set("auto_detect_line_endings", true);
require_once('Utility.php');
use MieClassi\Utility as UT;

$file = "progetti.json";
$arr = json_decode(UT::leggiTesto($file), true);

$selezionato = UT::richiestaHTTP("id");
$selezionato = ($selezionato == null) ? 1 : $selezionato;

$project = null;
foreach ($arr as $item) {
    if ($item['id'] == $selezionato) {
        $project = $item;
        break;
    }
}

if ($project == null) {
    echo "Progetto non trovato.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettaglio Portfolio</title>
    <link rel="stylesheet" href="./css/style.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <?php include 'header.php';
        echo generateHeaderAndVideo();
        ?>
        <div class="intro">
        <h1><?php echo $project['nome']; ?></h1>
        </div>
    </header>
    <main>
        <section class="progetto">
            <div class="project-title">
        <h2><?php echo $project['progetto_title']; ?></h2>
            </div>
            <div class="project-image">
                <img src="<?php echo $project['progetto_img']; ?>" alt="<?php echo $project['nome']; ?>">
            </div>
            <div class="project-description">
                <p><?php echo $project['descrizione']; ?></p>
            </div>
        </section>
        <div class="project-title">
            <h2>Lavori</h2>
        </div>
        <section class="fotolavori">
  <ul class="lavori">
    <?php
    $count = 0;
    $elencoPortfolio = [];
    $dettaglioPortfolio = [];

    $file = "progetti.json";
    $arr = json_decode(UT::leggiTesto($file), true);

    foreach ($arr as $link) {
        $elencoPortfolio[] = [
            'id' => $link['id'],
            'nome' => $link['nome'],
            'elenco_image_url' => $link['elenco_image_url'],
            'elenco_image_title' => $link['elenco_image_title']
        ];

        $dettaglioPortfolio[$link['id']] = [
            'nome' => $link['nome'],
            'descrizione' => $link['descrizione']
        ];
    }

    $selezionato = UT::richiestaHTTP("selezionato");
    $selezionato = ($selezionato == null) ? 1 : $selezionato;

    foreach ($elencoPortfolio as $link) {
        $n = $link['id'];
        $classeSelezionato = ($n == $selezionato) ? 'class="selezionato"' : '';
        $elenco_image_url = isset($link['elenco_image_url']) ? $link['elenco_image_url'] : '';
        printf('<li %s><a href="dettaglioPortfolio.php?id=%d" title="%s"><img src="%s" alt="%s"><h2>%s</h2></a></li>', $classeSelezionato, $n, $link['elenco_image_title'], $elenco_image_url, $link['nome'], $link['nome']);
        $count++;
        if ($count % 3 == 0) {
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