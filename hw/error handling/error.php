<pre>

Error::__construct — Construct the error object
Error::getMessage — Gets the error message
Error::getPrevious — Returns previous Throwable
Error::getCode — Gets the error code
Error::getFile — Gets the file in which the error occurred
Error::getLine — Gets the line in which the error occurred
Error::getTrace — Gets the stack trace
Error::getTraceAsString — Gets the stack trace as a string
Error::__toString — String representation of the error
Error::__clone — Clone the error
</pre>

<?php

//see above all

// we have use  this Error::getMessage
try {
    throw new Error("Some error message");
} catch(Error $e) {
    echo $e->getMessage();
}