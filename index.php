<?php
include 'FilesList.php';
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Admin_Documents</title>
</head>
<body>
<div class="container top-bar"><h1>Admin_Documents</h1></div>
<div class="container">
    <!-- Content here -->






        <?php

        function displayAllFolders($path) { //se comenzo con 'assets' aqui como parametro
            $allFilesOfAssets = scandir($path);

            foreach ($allFilesOfAssets as $oneFile) {
                if ($oneFile != '.' && $oneFile != '..') {
                    if (is_dir($path . '/' . $oneFile)) {
                        echo '<div class="container-fluid-col">'. $oneFile . '</div>' ;
                        displayAllFolders($path . '/' . $oneFile);
                    }
                }
            }
        }

        displayAllFolders('./assets');

        // este es el parametro de $path que al principio era un string assets arriba en el parametro de la funcion, se comienza desde lo mas simple y despues
       # $pet01 = new Pet();
        #echo $pet01->owner();



             $allFilesOfAssets = scandir('others'); //lo primero que se hizo fue scandir para ver todos los archivos
             foreach ($allFilesOfAssets as $oneFile) {
                 if ($oneFile != '.' && $oneFile != '..') {
                     echo '<div class="container-fluid">' . $oneFile . '</div>';

                     }
                 }



               $allFilesPagina = scandir('pagina'); //lo primero que se hizo fue scandir para ver todos los archivos
               foreach ($allFilesPagina as $onePagina) {
                   if ($onePagina != '.' && $onePagina != '..') {
                       echo '<div class=\"container-fluid\">' . $onePagina . '</div>';
                   }

               }




/*
         function crearCaminos($file)
         {

             if (FilesList::FOLDER . '/' . $file) {

                 foreach ($files as $file) {
                     //code to be executed
                     if ($file != '.' && $file != '..') {
                         if (is_dir(FilesList::FOLDER . '/' . $file)) {
                             //  $result[$file] = list[files . '/' .$file]
                             echo $files;
                         }
                     }
                 }
            };
             crearCaminos(FilesList::FOLDER . '/' . $file);
         }
*/
?>
</div>
<section>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>