
<h1>clean code rules:</h1>


<ul>
    <li>  Naming Convention

        <ul>
            <li> function name should verb type for example:  get_name(), get_age()   </li>
            <li>class name should noun type , customer, student etc</li>
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
    <li>
    dave thomas says:
        <ul>

            <li>Clean code can be read, and enhanced by a developer other than its original author. It has unit and acceptance tests. It has meaningful names. It provides one way rather than many ways for doing one thing. It has minimal dependencies, which are explicitly deﬁned, and provides a clear and minimal API. Code should be literate since depending on the language, not all necessary information can be expressed clearly in code alone.
            </li>
            <li>
                code that is easy to read and code that is easy to change.
            </li>
            <li> Code, without tests, is not clean , no metter big or small code</li>
            <li>e should be literate</li>
        </ul>
    </li>

<li>
    ron jefrey says:
    <ul>
        <li>Contains no duplication; </li>
        <li>Minimizes the number of entities such as classes, methods, functions, and the like.
        </li>
    </ul>
</li>
<li>uncle bob says:
  <ul>
      <li>a clean variable name, a clean function, a clean class, etc.</li>
  </ul>
</li>
 <li>meaningful names</li>
    <li>Programmers must avoid leaving false clues that obscure the meaning of code : hp, aix, and sco would be poor variable names </li>
</ul>
<li>use pronounceable word: If you can’t pronounce it, you can’t discuss it without sounding like an idiot
<pre>
    class DtaRcrd102
    {
    private Date genymdhms;
    private Date modymdhms;
    private final String pszqint = "102"; /* ... */
    };

to

class Customer
    {
    private Date generationTimestamp;
    private Date modificationTimestamp;
    private final String recordId = "102"; /* ... */
    };


</pre>
  <b>So Intelligent conversation is now possible</b>
  <br/>
</li>

<li> should searchable :
<pre>

        ............
    <br/>

    for(int j=0; j<34; j++)
    {

    s += (t[j]*4)/5;

    }
to


int realDaysPerIdealDay = 4;
const int WORK_DAYS_PER_WEEK = 5;
int sum = 0;
for(int j=0; j < NUMBER_OF_TASKS; j++)
{
 int realTaskDays = taskEstimate[j] * realDaysPerIdealDay;
 int realTaskWeeks = (realdays / WORK_DAYS_PER_WEEK);
 sum += realTaskWeeks;
}
    <b>Note that sum,WORK_DAYS_PER_WEEK, realTaskWeeks ,etc above, are not a particularly useful names but at least are searchable</b>
</pre>
</li>

<li>Pick one word for one abstract concept and stick with it. For instance, it’s confusing to have fetch, retrieve, and get as equivalent methods of different classes</li>
<li>Avoid using the same word for two purposes</li>

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