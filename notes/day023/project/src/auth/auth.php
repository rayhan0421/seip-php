<?php

namespace App\auth;
use PDO;
Class auth{


    public $name = '';
    public $id='';
    public $email ='';
    public $password = '';

    public function setData($data='')
    {

        if (array_key_exists('usernamesignup',$data)) {

            $this->name = $data['usernamesignup'];
        }
        if (array_key_exists('emailsignup',$data)) {

            $this->email = $data['emailsignup'];
        }
        if (array_key_exists('passwordsignup',$data)) {

            $this->password = $data['passwordsignup'];
        }


        if (array_key_exists('id',$data)){
            $this->id = $data['id'];
        }



    }

    public function index(){
        try{

            $pdo =  new PDO("mysql:host=localhost;dbname=php38",'root','');

            $queary = "select * from users";

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

            $queary = "INSERT INTO `users` (`id`, `user_name`,`email`,`password`) VALUES (:a,:b,:c,:d );";

            $st = $pdo->prepare($queary);

            $st->execute(
                array(
                    ':a'=>null,
                    ':b'=>$this->name,
                    ':c'=>$this->email,
                    ':d'=>$this->password

                )
            );

            if($st){
               session_start();

                $_SESSION['msg']= "Successfully Registered";


                header("location:index.php#toregister");
            }

        }catch (\PDOException $e){

            echo "Error: ". $e->getTrace();
        }

    }
    public function update(){

        try{

            $pdo =  new PDO("mysql:host=localhost;dbname=php38",'root','');

            $queary = "UPDATE users SET title=:tle, updated_at=:tmt where id=:id";

            $st = $pdo->prepare($queary);

            $st->execute(
                array(
                    ':id'=>$this->id,
                    ':tle'=>$this->title,
                )
            );

            if($st){



                header("location:index.php");
            }

        }catch (\PDOException $e){

            echo "Error: ". $e->getTrace();
        }

    }

    public function login(){
        try{

            $pdo =  new PDO("mysql:host=localhost;dbname=php38",'root','');

            $queary = "select * from users where email='$this->email' AND  password='$this->password'";

            $st = $pdo->prepare($queary);

            $st->execute();


            $stu= $st->fetch();

            session_start();

            if($stu){
              $_SESSION['email'] = $stu['user_name'] ;
              $_SESSION['msg'] = "login successfully";

              header("location:index.php");

            }

            if(!$stu) {
                $_SESSION['msg'] = "username password incorrect";

                header("location:index.php");
            }




        }catch (\PDOException $e){

            echo "Error: ". $e->getTrace();
        }



    }
    public function show(){

        try{

            $pdo =  new PDO("mysql:host=localhost;dbname=php38",'root','');

            $queary = "select * from users where id=$this->id";

            $st = $pdo->prepare($queary);

            $st->execute();

            $stu= $st->fetch();

            return $stu;




        }catch (\PDOException $e){

            echo "Error: ". $e->getTrace();
        }
    }





}