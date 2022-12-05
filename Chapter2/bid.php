<?php

class Bid
{   
    private $minimumBid = 5;
    private $bidAmount;


    //using set method
    public function setBidAmount($amount)
    {
        if ($amount < $this->minimumBid) {
            $this->bidAmount = $this->minimumBid; 

            return;

        }

        $this->bidAmount = $amount;
        
    }

    public function getBidAmount()
    {
        return $this->bidAmount;
    }
}