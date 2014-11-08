<?php

include('../vendor/simpletest/simpletest/autorun.php');

class testChop extends UnitTestCase
{
    public function setUp(){
        $this->chopper = new Chopper;
        $this->threeArray = [1, 3, 5];
        $this->fourArray = [1, 3, 5, 7];
    }

    public function testFirstChop()
    {
        $this->assertEqual(-1, $this->chopper->chopPhpFunctions(3, []));
        $this->assertEqual(-1, $this->chopper->chopPhpFunctions(3, [1]));
        $this->assertEqual(0, $this->chopper->chopPhpFunctions(1, [1]));

        $this->assertEqual(0, $this->chopper->chopPhpFunctions(1, $this->threeArray));
        $this->assertEqual(1, $this->chopper->chopPhpFunctions(3, $this->threeArray));
        $this->assertEqual(2, $this->chopper->chopPhpFunctions(5, $this->threeArray));
        $this->assertEqual(-1, $this->chopper->chopPhpFunctions(0, $this->threeArray));
        $this->assertEqual(-1, $this->chopper->chopPhpFunctions(2, $this->threeArray));
        $this->assertEqual(-1, $this->chopper->chopPhpFunctions(4, $this->threeArray));
        $this->assertEqual(-1, $this->chopper->chopPhpFunctions(6, $this->threeArray));

        $this->assertEqual(0, $this->chopper->chopPhpFunctions(1, $this->fourArray));
        $this->assertEqual(1, $this->chopper->chopPhpFunctions(3, $this->fourArray));
        $this->assertEqual(2, $this->chopper->chopPhpFunctions(5, $this->fourArray));
        $this->assertEqual(3, $this->chopper->chopPhpFunctions(7, $this->fourArray));
        $this->assertEqual(-1, $this->chopper->chopPhpFunctions(0, $this->fourArray));
        $this->assertEqual(-1, $this->chopper->chopPhpFunctions(2, $this->fourArray));
        $this->assertEqual(-1, $this->chopper->chopPhpFunctions(4, $this->fourArray));
        $this->assertEqual(-1, $this->chopper->chopPhpFunctions(6, $this->fourArray));
        $this->assertEqual(-1, $this->chopper->chopPhpFunctions(8, $this->fourArray));
    }

    public function testSecondChop()
    {
        $this->assertEqual(-1, $this->chopper->chopIterative(3, []));
        $this->assertEqual(-1, $this->chopper->chopIterative(3, [1]));
        $this->assertEqual(0, $this->chopper->chopIterative(1, [1]));

        $this->assertEqual(0, $this->chopper->chopIterative(1, $this->threeArray));
        $this->assertEqual(1, $this->chopper->chopIterative(3, $this->threeArray));
        $this->assertEqual(2, $this->chopper->chopIterative(5, $this->threeArray));
        $this->assertEqual(-1, $this->chopper->chopIterative(0, $this->threeArray));
        $this->assertEqual(-1, $this->chopper->chopIterative(2, $this->threeArray));
        $this->assertEqual(-1, $this->chopper->chopIterative(4, $this->threeArray));
        $this->assertEqual(-1, $this->chopper->chopIterative(6, $this->threeArray));

        $this->assertEqual(0, $this->chopper->chopIterative(1, $this->fourArray));
        $this->assertEqual(1, $this->chopper->chopIterative(3, $this->fourArray));
        $this->assertEqual(2, $this->chopper->chopIterative(5, $this->fourArray));
        $this->assertEqual(3, $this->chopper->chopIterative(7, $this->fourArray));
        $this->assertEqual(-1, $this->chopper->chopIterative(0, $this->fourArray));
        $this->assertEqual(-1, $this->chopper->chopIterative(2, $this->fourArray));
        $this->assertEqual(-1, $this->chopper->chopIterative(4, $this->fourArray));
        $this->assertEqual(-1, $this->chopper->chopIterative(6, $this->fourArray));
        $this->assertEqual(-1, $this->chopper->chopIterative(8, $this->fourArray));
    }

    public function testThirdChop()
    {
        $this->assertEqual(-1, $this->chopper->chopShift(3, []));
        $this->assertEqual(-1, $this->chopper->chopShift(3, [1]));
        $this->assertEqual(0, $this->chopper->chopShift(1, [1]));

        $this->assertEqual(0, $this->chopper->chopShift(1, $this->threeArray));
        $this->assertEqual(1, $this->chopper->chopShift(3, $this->threeArray));
        $this->assertEqual(2, $this->chopper->chopShift(5, $this->threeArray));
        $this->assertEqual(-1, $this->chopper->chopShift(0, $this->threeArray));
        $this->assertEqual(-1, $this->chopper->chopShift(2, $this->threeArray));
        $this->assertEqual(-1, $this->chopper->chopShift(4, $this->threeArray));
        $this->assertEqual(-1, $this->chopper->chopShift(6, $this->threeArray));

        $this->assertEqual(0, $this->chopper->chopShift(1, $this->fourArray));
        $this->assertEqual(1, $this->chopper->chopShift(3, $this->fourArray));
        $this->assertEqual(2, $this->chopper->chopShift(5, $this->fourArray));
        $this->assertEqual(3, $this->chopper->chopShift(7, $this->fourArray));
        $this->assertEqual(-1, $this->chopper->chopShift(0, $this->fourArray));
        $this->assertEqual(-1, $this->chopper->chopShift(2, $this->fourArray));
        $this->assertEqual(-1, $this->chopper->chopShift(4, $this->fourArray));
        $this->assertEqual(-1, $this->chopper->chopShift(6, $this->fourArray));
        $this->assertEqual(-1, $this->chopper->chopShift(8, $this->fourArray));
    }
}