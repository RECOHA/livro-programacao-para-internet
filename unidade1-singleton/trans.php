<?php
    // Inclui a classe TTranslation
    include_once 'TTranslation.class.php';

    // Define a linguagem como português 
    TTranslation::setLanguage('pt');
    echo "Em Português:<br>\n";

    // Imprime palavras traduzidas
    echo _t('Function')	. "<br>\n";
    echo _t('Table')	. "<br>\n";
    echo _t('Tool')	    . "<br>\n";

    // Define a linguagem como italiano 
    TTranslation::setLanguage('it');
    echo "Em Italiano:<br>\n";

    // Imprime palavras traduzidas
    echo _t('Function')	. "<br>\n";
    echo _t('Table')	. "<br>\n";
    echo _t('Tool')	    . "<br>\n";
?>