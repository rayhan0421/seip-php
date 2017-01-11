<?php

namespace App\bitm\seip\students;
use PDO;
Class students{


    public $title = '';

    public function setData($data=''){

        $this->title= $data['title'];
    }

    public function store(){

        try{

            $pdo =  new PDO("mysql:host=localhost;dbname=php38",'root','');

             $queary = "INSERT INTO `student` (`id`, `title`) VALUES (:a,:b );";

              $st = $pdo->prepare($queary);

            $st->execute(
                array(
                    ':a'=>null,
                    ':b'=>$this->title
                )
            );

        }catch (\PDOException $e){

            echo "Error: ". $e->getTrace();
        }

    }



}