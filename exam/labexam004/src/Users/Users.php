<?php
namespace App\Users;
use PDO;
/**
 * Created by PhpStorm.
 * User: Web App Develop PHP
 * Date: 1/16/2017
 * Time: 9:36 AM
 */

Class Users {

        public $id='';
        public $name='';
        public $password = '';
        public $email = '';
        public $gender='';



        public function __construct()
        {

        }

        public function setData($data=''){



            if(array_key_exists("id",$data)){
              $this->id= $data['id'];
            }

            if(array_key_exists("name",$data)){
                    $this->name= $data['name'];
                    $this->name = filter_var($this->name,FILTER_SANITIZE_STRIPPED);
             }

             if(array_key_exists("email",$data)){

                    $this->email= $data['email'];
                 $this->email = filter_var($this->email,FILTER_SANITIZE_STRIPPED);



             }
            if(array_key_exists("password",$data)){
                $this->password= $data['password'];
            }
            if(array_key_exists("gender",$data)){
                $this->gender= $data["gender"];
            }

        }



        public function store(){
            //single user


            try{



                $pdo = new PDO("mysql:host=localhost;dbname=labexam004",'root','');

                $q="INSERT INTO `users`(`id`, `name`, `password`, `email`, `gender`) VALUES (:a,:b,:c,:d,:e)";

                $stm = $pdo->prepare($q);

                $stm->execute(
                    array(
                        ':a'=>null,
                        ':b'=>$this->name,
                        ':c'=>$this->password,
                        ':d'=>$this->email,
                        ':e'=>$this->gender

                    )
                );

               if($stm){
                 session_start();
                 $_SESSION["msg"] = "Successfully created";

                   header("location:create.php");
               }

            }catch(\Exception $e){

                echo $e->getMessage();
                session_start();
                $_SESSION["msg"] = "Successfully failed";
                header("location:create.php");
            }



        }

        public function index(){
            //all users
            $pdo = new PDO("mysql:host=localhost;dbname=labexam004",'root','');
            $stm = $pdo->prepare("SELECT * FROM `users`");
            $stm->execute();


            return $stm->fetchAll();
        }

        public function show(){
            // single user
            $pdo = new PDO("mysql:host=localhost;dbname=labexam004",'root','');
            $stm = $pdo->prepare("SELECT * FROM `users` where id=$this->id");
            $stm->execute();


            return $stm->fetch();
        }

        public function delete(){
          //single user

            $pdo = new PDO("mysql:host=localhost;dbname=labexam004",'root','');
            $stm = $pdo->prepare("DELETE FROM `users` WHERE `users`.`id` = $this->id");
            $stm->execute();
            session_start();
            $_SESSION["msg"] = "Successfully deleted";
            header("location:index.php");

        }

        public function update(){
            $this->id=14;
            $this->name= "update name";
            $this->password = "2229999";

            $pdo = new PDO("mysql:host=localhost;dbname=labexam004",'root','');
            $q="UPDATE `users` SET `password` = $this->password, `name`= $this->name WHERE `users`.`id` = $this->id";
            $stm = $pdo->prepare($q);
            $stm->execute();
            var_dump($stm->columnCount());

        }


}