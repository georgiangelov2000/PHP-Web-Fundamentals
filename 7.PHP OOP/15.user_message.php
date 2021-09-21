<?php 

class UserMessage{
    public $message="Hello I'm ";

    public function introduce($name){
        return $this->message.$name;
    }
}

$MyMessage = new UserMessage();
echo $MyMessage->introduce('George')."\n";

?>