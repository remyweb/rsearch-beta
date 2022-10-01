// Bienvenue !
// RémyWEB Search Beta
// Fichier: setup.php
//  ____   __                 
// |  _ \ /_/ _ __ ___  _   _ 
// | |_) / _ \ '_ ` _ \| | | |
// |  _ <  __/ | | | | | |_| |
// |_| \_\___|_| |_| |_|\__, |
//                      |___/  
//
// Modification : 1 Octobre 2022 17:17
//



$filename = 'readme.txt';

if (is_readable($filename)) {
    $message = "The file $filename exists";
} else {
    $message = "The file $filename does not exist";
}
echo $message;