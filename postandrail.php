<?php


class Fence
{
    public $numOfPosts;
    public $numOfRailings;
    public $totalLength;
    public $postLength = 0.1;
    public $railingLength = 1.5;

    public function calculateLength($numOfPosts, $numOfRailings)
    {
        $this->numOfPosts = $numOfPosts;
        $this->numOfRailings = $numOfRailings;

        if (($numOfPosts > $numOfRailings) && ($numOfPosts > 0) && ($numOfRailings > 0)) {

            $numOfPosts = ($numOfRailings + 1);

            return (($numOfPosts * $this->postLength) + ($numOfRailings * $this->railingLength));
        }
        elseif (($numOfRailings > $numOfPosts) && ($numOfPosts > 0) && ($numOfRailings > 0)) {
            $numOfRailings = ($numOfPosts - 1);

            return (($numOfPosts * $this->postLength) + ($numOfRailings * $this->railingLength));
        }
        else {
            return "Invalid entry please use numbers between one and infinity!";
        }
    }
    public function calculatePostandRailing($totalLength)
    {
        if ($totalLength >=1 )
        {
            $numOfRailings = ceil(($totalLength - ($this->postLength)) / (($this->railingLength) + ($this->postLength)));
            $numOfPosts = ceil(($numOfRailings + 1));
            return [$numOfRailings, $numOfPosts];
        }
        else
        {
            return 'Please enter a number between one and infinity!';
        }
    }

}


?>