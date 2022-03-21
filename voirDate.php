<?php
    $jma = date('d/m/Y');
    if (date('G')>20)
        echo $jma.' Bonsoir.';
    else
        echo $jma.' Bonjour';
?>
<br /> <br />
<input type = "button" value = "Voir heure" onClick = "envoyerRequete('pageHeure.php');" />
