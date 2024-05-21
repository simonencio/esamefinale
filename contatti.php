<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contatti</title>
    <link rel="stylesheet" href="./css/style.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
    <?php include 'header.php';
        echo generateHeaderAndVideo();
        ?>
        <div class="intro">
            <h1>Contattaci</h1>
        </div>
    </header>
    <main>
        <div class="title">
            <h1>I Nostri Contatti:</h1>
        </div>
        <section class="all">
            <div class="contatti">
                <img src="./immagini/205440980-contattaci-o-la-hotline-dell-assistenza-clienti-le-persone-connettono-l-uomo-che-tocca-l-accesso-ai.jpg" alt="lavoro2" title="lavoro2">
            </div>
        <div class="contact">
                <div class="primo">
                    <address>
                <ul>
                    <li>Vienici a trovare in:</li>
                    <li>
                    Via dai piedi, 1<br>58100 Grosseto (GR)<br> Italia
                    </li>
            </ul>
        </address>
            </div>
            <div class="secondo">
                        <p>Contattaci:</p>
                        <address>
                            <ul>
                                <li>
                                    <a href="mailto:simone2nencioni@icloud.com" title="scrivici una mail">simone2nencioni@icloud.com</a>
                                </li>
                                <li>
                                    <a href="tel:3337215293" title="Telefonaci">+39 3337215293</a>
                                </li>
                            </ul>
                        </address>
        </div>
            <div class="terzo">
                        <p>Seguici su:</p>
                        <address>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/?locale=it_IT" title="seguici su facebook">Facebook</a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/?lang=it" title="seguici su twitter">Twitter</a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" title="seguici su Instagram">Instagram</a>
                                </li>               
                            </ul>
                        </address>
            </div>
</div>
        </section>
    <section class="serious">
    <form id="form-01" action="./invioform.php" method="POST" novalidate>
    <h3>Contattaci:</h3>
    <fieldset>
      <label>Dati anagrafici</label>
      <div><label for="campoNome">Nome</label></div>
      <div><input type="text" name="nome" placeholder="nome" id="campoNome" value="<?php echo isset($_GET['nome']) ? htmlspecialchars($_GET['nome']) : ''; ?>" required></div>
      <?php if (isset($_GET['error']) && in_array('Il campo "Nome" è obbligatorio', explode(',', urldecode($_GET['error'])))) {?>
          <p class="error">Il campo "Nome" è obbligatorio</p>
      <?php } elseif (isset($_GET['error']) && in_array('Il campo "Nome" deve contenere solo lettere e spazi', explode(',', urldecode($_GET['error'])))) {?>
          <p class="error">Il campo "Nome" deve contenere solo lettere e spazi</p>
      <?php }?>
      <div><label for="campoCognome">Cognome</label></div>
      <div><input type="text" name="cognome" placeholder="cognome" id="campoCognome" value="<?php echo isset($_GET['cognome']) ? htmlspecialchars($_GET['cognome']) : ''; ?>" required></div>
      <?php if (isset($_GET['error']) && in_array('Il campo "Cognome" è obbligatorio', explode(',', urldecode($_GET['error'])))) {?>
          <p class="error">Il campo "Cognome" è obbligatorio</p>
      <?php } elseif (isset($_GET['error']) && in_array('Il campo "Cognome" deve contenere solo lettere e spazi', explode(',', urldecode($_GET['error'])))) {?>
          <p class="error">Il campo "Cognome" deve contenere solo lettere e spazi</p>
      <?php }?>
      <div><label for="campoEmail">E-Mail</label></div>
      <div><input type="email" name="email" placeholder="e-mail" id="campoEmail" value="<?php echo isset($_GET['email']) ? htmlspecialchars($_GET['email']) : ''; ?>" required></div>
      <?php if (isset($_GET['error']) && in_array('Il campo "E-Mail" è obbligatorio', explode(',', urldecode($_GET['error'])))) {?>
          <p class="error">Il campo "E-Mail" è obbligatorio</p>
      <?php } elseif (isset($_GET['error']) && in_array('Il campo "E-Mail" deve essere un indirizzo email valido', explode(',', urldecode($_GET['error'])))) {?>
          <p class="error">Il campo "E-Mail" deve essere un indirizzo email valido</p>
      <?php }?>
      <div class="dati">
        <label>Trattamento dati personali:</label><br>
        <label><input type="radio" value="si" name="trattamentodatipersonali" required <?php echo isset($_GET['trattamentodatipersonali']) && $_GET['trattamentodatipersonali'] == 'si' ? 'checked' : ''; ?>>acconsento</label><br>
        <label><input type="radio" value="no" name="trattamentodatipersonali" required <?php echo isset($_GET['trattamentodatipersonali']) && $_GET['trattamentodatipersonali'] == 'no' ? 'checked' : ''; ?>>non acconsento</label>
      </div>
      <?php if (isset($_GET['error']) && in_array('Il campo "Trattamento dati personali" è obbligatorio', explode(',', urldecode($_GET['error'])))) {?>
          <p class="error">Il campo "Trattamento dati personali" è obbligatorio</p>
      <?php } elseif (isset($_GET['error']) && in_array('Il campo "Trattamento dati personali" deve essere "si" o "no"', explode(',', urldecode($_GET['error'])))) {?>
          <p class="error">Il campo "Trattamento dati personali" deve essere "si" o "no"</p>
      <?php }?>
      <label>Messaggio:</label><br>
      <div><textarea placeholder="inserisci qui il tuo messaggio" id="campoMessaggio" name="messaggio" required><?php echo isset($_GET['messaggio']) ? htmlspecialchars($_GET['messaggio']) : ''; ?></textarea></div>
      <?php if (isset($_GET['error']) && in_array('Il campo "Messaggio" è obbligatorio', explode(',', urldecode($_GET['error'])))) {?>
          <p class="error">Il campo "Messaggio" è obbligatorio</p>
      <?php } elseif (isset($_GET['error']) && in_array('Il campo "Messaggio" deve contenere almeno 10 caratteri', explode(',', urldecode($_GET['error'])))) {?>
          <p class="error">Il campo "Messaggio" deve contenere almeno 10 caratteri</p>
      <?php }?>
      <div>
        <button type="reset" title="clicca per annullare">Annulla</button>
        <button type="submit" title="clicca per inviare">Invia</button>
      </div>
    </fieldset>
  </form>
    </section>
    </main>
    <?php include 'footer.php';
        echo generateFooter();
        ?>
    </body>
    </html>