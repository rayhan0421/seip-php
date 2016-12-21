
<h1>clean code rules:</h1>


<ul>
    <li>  Naming Convention

        <ul>
            <li> function name should verb type for example:  get_name(), get_age()   </li>
            <li> camal case forexample : getName() </li>
        </ul>
    </li>

    <li>  commenting

      <ul>
          <li>
              function desc
          </li>
          <li> function creation date</li>
          <li> function specific job for example : getStudent() vs getStudents() </li>
          <li>   function specific job group ex: if work with student name this getResults(), not getStudentResults()</li>
      </ul>
    </li>
    <li> get set is good way   </li>
    <li>  error handling
    <ul>
      <li>try catch finally</li>
    </ul>
    </li>

    <li> folder structure
    <ul>
        <li></li>

    </ul>
    </li>
    <li>    </li>



</ul>





<?php

//wrong way function

function sum(){

    return "google";
}

//right way function
//camal case

function getSum()
{

    // $va1+$var2
    return 10 + 20;


}
//right way 2
//
//

function getList(){

       return array("name1 ","name2");
    }