<?php


class FilesList
{

    //properties and methods

    public $archivos = "This is an archivo";
    public $otrosArchivos = "Estos son privados";
    public $meLaInvente = 5;

    /* private $directory;
     public const FOLDER = './assets';

     //DIRECTORY
     public function setDirectory($directory) {
         $this->directory = $directory;
     }
     public function getDirectory() {
         //return $this->directory;
         return scandir(FilesList::FOLDER);
     }*/

    ///FOLDER
    ///
    public function getFolder()
    {
       is_dir(FOLDER);

    }

}

$object = new FilesList;
#var_dump($object);













