<?php

class Reservation
{

    private $host = 'Host class'; //host class
    private $guest = 'Guest class'; // Guest class
    //cancel reservation
    public function cancel()
    {
        // check whether cancellation is an option
        // refund the quest...if refunds applicable [Guest]
        //make a room available again [Room]
        // Notify the host [Host]
            // In app notification
            // Send them an email / SMS [Email, SMS]
        // Send confirmation to quest [Emal, SMS]    
        $this->sendCancellationNotification();
        $this->refundGuest();

        echo 'And other stuff';


    }

    private function sendCancellationNotification()
    {
        echo 'Sending notification to ' . $this->host. '<br>';
    }

    private function refundGuest()
    {
        echo 'Refunding ' . $this->guest. '<br>';
    }

}