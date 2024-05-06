<?php
function generateHeaderAndVideo() {
    $html = '
    <div>
        <video muted autoplay loop class="videofullscreen">
            <source src="./immagini/video.mp4" type="video/mp4">
        </video>
    </div>
    <nav>
    <div class="nav-bar2">
    <input type="checkbox" id="check">
    <div class="menu">
    <ul class="nav-bar">
    <li class="logo"><a href="./index.php"><img src="./immagini/verologo.jpg" alt="logo"></a></li>
                <li><a href="./index.php">HOME PAGE</a></li>
                <li><a href="./chisiamo.php">CHI SIAMO?</a></li>
                <li><a href="./portfolio.php">PORTFOLIO</a></li>
                <li><a href="./contatti.php">CONTATTI</a></li>
                </ul>
                <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
            </div>
            <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
    </div>
            </nav>
    ';

    return $html;
}
?>