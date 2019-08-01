<?php

    $dir    = './pictures';                 //  Główny folder ze zdjęciami

    if( isset($_GET['dir']) ){              // Jeśli został podany folder -
        $dir = './pictures/'.$_GET['dir'];  // wypisana będzie lista plików wewnątrz niego
    }

    if( isset($_GET['data']) ){
        if( $_GET['data'] == 1 ){
            $files1 = scandir($dir);        // Pobranie listy plików/folderów
            //print_r($files1);
            echo json_encode($files1);      //  Wysłanie listy w formacie JSON
        }
    }

?>
