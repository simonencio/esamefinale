<?php
function generateFooter() {
    $html = '
    <footer class="footer">
        <div class="rigaFooter">
            <div class="colonnaFooter">
            <ul>
            <li>
                <p>vienici a trovare in:</p>
                <address>
                Via di casa, 1<br>58100 Grosseto (GR)<br> Italia
                </address>
            </li>
        </ul>
        </div>
        <div class="colonnaFooter">
            <ul>
                <li>
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
                </li>
            </ul>
        </div>
        </div>
    </footer>
    ';

    return $html;
}
?>