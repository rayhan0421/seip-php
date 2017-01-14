<?php

namespace App\bitm\seip\students;
use PDO;
Class students{


    public $title = '';

    public function setData($data=''){

        $this->title= $data['title'];
    }

    public function index(){
        try{

            $pdo =  new PDO("mysql:host=localhost;dbname=php38",'root','');

            $queary = "select * from student";

            $st = $pdo->prepare($queary);

            $st->execute();

            $stu= $st->fetchAll();

            return $stu;




        }catch (\PDOException $e){

            echo "Error: ". $e->getTrace();
        }
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

            if($st){



                header("location:create.php");
            }

        }catch (\PDOException $e){

            echo "Error: ". $e->getTrace();
        }

    }



}