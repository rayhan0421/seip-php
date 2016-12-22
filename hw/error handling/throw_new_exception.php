<?php


class SomeClass {

    function SomeFunction() {
        try {
            throw new Exception('Some Error Message');
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }
    }

}

echo "<h1>nested exception:</h1>";

class Test {
    public function testing() {
        try {
            try {
                throw new MyException('foo!');
            } catch (MyException $e) {
                // rethrow it
                throw $e;
            }
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }
}

$foo = new Test;
$foo->testing();