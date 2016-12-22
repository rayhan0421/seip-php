<h1>trigger_error — Generates a user-level error/warning/notice message</h1>
<p>return bool type</p>


<h3>bool trigger_error ( string $error_msg [, int $error_type = E_USER_NOTICE ] ) </h3>

<ul>
    error type:
    <li>E_USER_ERROR</li>
   <li>E_USER_WARNING</li>
   <li>E_USER_NOTICE (this is default)</li>

</ul>
<hr/>
<?php
if ($divisor == 0) {
    trigger_error("Cannot divide by zero", E_USER_ERROR);
}
?>

<?php
function doFunction($var) {
    if(is_numeric($var)) {
        /* do some stuff*/
    } else {
        trigger_error('var must be numeric');
    }
}
?>




