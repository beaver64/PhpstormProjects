<?php
echo   "Merci " . $_POST['user_surname'] . " " . $_POST['user_name'] . " de nous avoir contacté à propos " . $_POST['subjects'] .
" ." . "<br>" . PHP_EOL . "Un de nos conseiller vous contactera soit à l’adresse " . $_POST['user_email'] . " ou par téléphone au " . $_POST['user_phone_number'] . " dans les plus brefs délais pour traiter votre demande :" . "<br>" . PHP_EOL . $_POST['user_message'];