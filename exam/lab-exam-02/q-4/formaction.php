<?php


if(isset($_POST["name"])&& isset($_POST["mark"])){


    Result($_POST["mark"]);

}



function Result($mark=''){

if($mark< 40 && $mark>=0){

      echo "Name is : ". $_POST["name"]. "<br/>";

      echo "Result is : ". "F";

  }elseif($mark>40 && $mark<59 ){
    echo "Name is : ". $_POST["name"]. "<br/>";

    echo "Result is : ". "B";
}elseif($mark>=60 && $mark<=74 ){
    echo "Name is : ". $_POST["name"]. "<br/>";

    echo "Result is : ". "C";
}elseif($mark>=75 && $mark<=79 ){
    echo "Name is : ". $_POST["name"]. "<br/>";

    echo "Result is : ". "B";
}elseif($mark>=80 && $mark<=82 ){
    echo "Name is : ". $_POST["name"]. "<br/>";

    echo "Result is : ". "B+";
}elseif($mark>=83 && $mark<=86 ){
    echo "Name is : ". $_POST["name"]. "<br/>";

    echo "Result is : ". "A";
}elseif($mark>=87 && $mark<=89 ){
    echo "Name is : ". $_POST["name"]. "<br/>";

    echo "Result is : ". "A+";
}elseif($mark>=90 && $mark<=100){
    echo "Name is : ". $_POST["name"]. "<br/>";

    echo "Result is : ". "golden plus ";
}


else{

    echo "nothing";
}


}



