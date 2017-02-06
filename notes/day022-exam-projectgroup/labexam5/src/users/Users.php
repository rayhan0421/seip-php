<?php
namespace App\users;
use PDO;

Class Users{

    public $title = '';
    public $id='';
    public $search = '';
    public $hobby = '';

    public function __construct()
    {



    }
    public function setData($data='')
    {

        if (array_key_exists('name',$data)) {

            $this->title = $data['name'];
        }
        if (array_key_exists('keyword',$data)) {

            $this->search = $data['keyword'];
        }
        if (array_key_exists('hobby',$data)) {


           if(count($data['hobby'])>=1){
               foreach ($data['hobby'] as $hoby){
                   $this->hobby .= $hoby.",";
               }
           }else{
               $this->hobby .= $data['hobby'];
           }

        }


        if (array_key_exists('id',$data)){
            $this->id = $data['id'];
        }



    }

    public function index(){
        try{

            $pdo =  new PDO("mysql:host=localhost;dbname=exam5",'root','');

            $queary = "SELECT a.id ,a.name, b.hobbies  FROM `users` as a JOIN hobby as b on a.id = b.user_id";

            $us = $pdo->prepare($queary);

            $us->execute();

            $user= $us->fetchAll();

            return $user;




        }catch (\PDOException $e){

            echo "Error: ". $e->getTrace();
        }
    }

    public function store(){

        try{

            $pdo =  new PDO("mysql:host=localhost;dbname=exam5",'root','');

            $queary = "INSERT INTO `users` (`id`, `name`) VALUES (:a,:b );";

            $st = $pdo->prepare($queary);

            $st->execute(
                array(
                    ':a'=>null,
                    ':b'=>$this->title
                )
            );

            if($st){
             $lastid= $pdo->lastInsertId();
              $hob= trim($this->hobby,',');

                $queary = "INSERT INTO `hobby` (`id`, `user_id`, `hobbies`) VALUES (:a, :b, :c);";

                $hobstm = $pdo->prepare($queary);

                $hobstm->execute(
                    array(
                        ':a'=>null,
                        ':b'=>$lastid,
                        ':c'=>$hob
                    )
                );

                if($hobstm){
                    session_start();

                    $_SESSION['msg'] = "successfully added";
                }


               header("location:create.php");
            }

        }catch (\PDOException $e){

            session_start();

            $_SESSION['msg'] = "failed to add";

            echo "Error: ". $e->getTrace();
        }

    }

    public function delete(){

        $pdo =  new PDO("mysql:host=localhost;dbname=exam5",'root','');
        $stm = $pdo->prepare("DELETE FROM `users` WHERE `users`.`id` = $this->id");
        $stm->execute();
        $stm2 = $pdo->prepare("DELETE FROM `hobby` WHERE `hobby`.`user_id` = $this->id");
        $stm2->execute();


        session_start();
        $_SESSION["msg"] = "Successfully deleted";

        header("location:index.php");

    }

    public function show(){

        try{

            $pdo =  new PDO("mysql:host=localhost;dbname=exam5",'root','');

            $queary = "SELECT a.id ,a.name, b.hobbies  FROM `users` as a JOIN hobby as b on a.id = b.user_id where a.id=$this->id";

            $us = $pdo->prepare($queary);

            $us->execute();

            $user= $us->fetchAll();

            return $user;




        }catch (\PDOException $e){

            echo "Error: ". $e->getTrace();
        }
    }

    public function update(){

        try{



            $pdo =  new PDO("mysql:host=localhost;dbname=exam5",'root','');

            $queary = "UPDATE `users` SET `name` = :tle WHERE `users`.`id` = :id";

            $st = $pdo->prepare($queary);

            $st->execute(
                array(
                    ':id'=>$this->id,
                    ':tle'=>$this->title
                )
            );
            $hob= trim($this->hobby,',');

            $queary2 = "UPDATE `hobby` SET `hobbies` =:tle  WHERE `hobby`.`user_id` =:id ;";

            $st2 = $pdo->prepare($queary2);

            $st2->execute(
                array(
                    ':id'=>$this->id,
                    ':tle'=> $hob
                )
            );
            if($st){

                session_start();
                $_SESSION["msg"] = "Successfully updated";

                header("location:index.php");
            }

        }catch (\PDOException $e){

            echo "Error: ". $e->getTrace();
        }
    }
    public function search(){

        try{

            $pdo =  new PDO("mysql:host=localhost;dbname=exam5",'root','');

            $queary = "SELECT a.id ,a.name, b.hobbies  FROM `users` as a JOIN hobby as b on a.id = b.user_id  ";

            $us = $pdo->prepare($queary);

            $us->execute();

            $user= $us->fetchAll();

            return $user;




        }catch (\PDOException $e){

            echo "Error: ". $e->getTrace();
        }

    }
}
