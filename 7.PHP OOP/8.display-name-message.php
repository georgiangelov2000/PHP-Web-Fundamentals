<?php  

class UserMessage{
    public $message="Hello I am George";
    function displayMessage(){
        $this->message;
    }
}

$newUserMessage = new UserMessage();
$newUserMessage->displayMessage();
echo $newUserMessage->message;

?>
