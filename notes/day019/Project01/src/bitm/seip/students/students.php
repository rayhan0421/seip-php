<?php

namespace App\bitm\seip\students;
use PDO;
Class students{


    public $title = '';
    public $id='';

    public function setData($data='')
    {

        if (array_key_exists('title',$data)) {

        $this->title = $data['title'];
    }


    if (array_key_exists('id',$data)){
        $this->id = $data['id'];
    }



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
   public function update(){

       try{

           $pdo =  new PDO("mysql:host=localhost;dbname=php38",'root','');

           $queary = "UPDATE student SET title=:tle, updated_at=:tmt where id=:id";

           $st = $pdo->prepare($queary);

           $st->execute(
               array(
                   ':id'=>$this->id,
                   ':tle'=>$this->title,
                   ':tmt'=>
               )
           );

           if($st){



               header("location:index.php");
           }

       }catch (\PDOException $e){

           echo "Error: ". $e->getTrace();
       }

   }
    public function show(){

        try{

            $pdo =  new PDO("mysql:host=localhost;dbname=php38",'root','');

            $queary = "select * from student where id=$this->id";

            $st = $pdo->prepare($queary);

            $st->execute();

            $stu= $st->fetch();

            return $stu;




        }catch (\PDOException $e){

            echo "Error: ". $e->getTrace();
        }
    }



}