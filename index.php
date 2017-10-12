<?php

function checkLeeftijd($leeftijd) {

    if ($leeftijd < 16) {
        echo "${leeftijd} jaar is te jong voor deze film.";

    } elseif ($leeftijd >= 18) {
        echo "Je bent al ${leeftijd} jaar. Geniet van de film!";
    } else {
        echo "${leeftijd} jaar, je hebt ouderlijk toezicht nodig."; 
    }
};

checkLeeftijd(12);

?>