<?php

require_once 'postandrail.php';

class FenceTest extends PHPUnit_Framework_TestCase
{
    /**
     *@param $numOfPosts
     *@param $numOfRailings
     *@param $output
     *@param $fence
     *
     *@dataProvider numProvider
     */

    public function test_calculating_length($num0fPosts, $numofRailings, $output)
    {
        $fence = new Fence();
        $this->assertEquals($output, $fence->calculateLength($num0fPosts, $numofRailings));
    }

    public static function numProvider()
    {

        $tests = [
            [2, 1, 1.7],
            [3, 2, 3.3],
            [0, 0, 'Invalid entry please use numbers between one and infinity!'],
            [3, 1, 1.7],
            [3, -1, 'Invalid entry please use numbers between one and infinity!'],
            [10, 6, 9.7],
            ['a','b', 'Invalid entry please use numbers between one and infinity!']
        ];

        return $tests;

    }

    /**
     *@param $output
     *@param $fence
     *@param $length
     *
     *@dataProvider lengthProvider
     */

    public function test_calculating_post_and_rail($length, $output)
    {
        $fence = new Fence();
        $this->assertEquals($output, $fence->calculatePostandRailing($length));
    }

    public static function lengthProvider()
    {

        $tests = [
            [100, [63, 64]],
            [212, [133, 134]],
            [50, [32, 33]],
            [0, 'Please enter a number between one and infinity!'],
            [0.8, 'Please enter a number between one and infinity!'],

        ];

        return $tests;

    }
}
