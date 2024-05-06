<?php
namespace MieClassi;
$stringa2 = ('<div class="testo">
<h2>Creazione di siti web responsive</h2>
<p>Uno tra i tanti lavori che effettuiamo consiste nella creazione di siti web responsive,<br> 
cioè in grado di adattarsi a computer, smartphone e tablet.<br>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum<br> 
has been the industries standard dummy text ever since the 1500s, when an unknown printer<br>
 took a galley of type and scrambled it to make a type specimen book. It has survived not<br>
  only five centuries, but also the leap into electronic typesetting, remaining essentially<br>
   unchanged. It was popularised in the 1960s with the release of Letraset sheets containing<br>
    Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker<br>
     including versions of Lorem Ipsum.</p>
</div>');
$counter = 0;
/**
 * questa classe contiene tutti i metodi utili
 * @author Mario Rossi
 * @copyright 2022
 * @license LGPL
 * @version 1.0.0
 */

class Utility
{
    /**
     * funzione per leggere del testo in un file
     * 
     * @param string $file Nome del file
     * @return boolean|string
     * 
     */
    public static function leggiTesto($file)
    {
        $rit = false;
        if (!$fp = fopen($file, 'r')) {
            echo "non posso aprire il file $file<br>";
        } else {
            if (is_readable($file) === false) {
                echo " il file $file non è leggibile<br>";
            } else {
                $rit = fread($fp, filesize($file));
            }
        }
        fclose($fp);
        return $rit;
    }
    /**
     * funzione per estrarre dal $_POST o dal $_GET la proprieta richiesta
     * 
     * @param string proprieta da ricercare 
     * @return string|null
     * 
     */
    public static function richiestaHTTP($str)
    {
        $rit = null;
        if ($str !== null) {
            if (isset($_POST[$str])) {
                $rit = $_POST[$str];
            } elseif (isset($_GET[$str])) {
                $rit = $_GET[$str];
            }
        }
        return $rit;
    }
}