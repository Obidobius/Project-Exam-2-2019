<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="../client/src/styles/styles.scss">
<body>
    <div class="logo">
        </div>
            <div class="container row col-md-12" style="margin: 0; padding: 90px;">
                <div class="message">
                    <h1 class="col-12 title">Contact success!</h1>
                    <hr style="color:white margin:0; border:2px solid white; width: 480px;" class="line">
                    <br><br>
                <div class="information col-12">
                <h2 class="information-info"> Thank you for contacting us. </h2>    
                 <br><br>
                <p class="information-text">
                    We appreciate that you’ve taken the time to write us.
                    You are very important to us, <br> all information received will always remain confidential.
                </p>
                <p class="information-text">    
                <br>
                We will contact you as soon as we review your message.
                </p>    
                <br>
                <a id="back" href="http://localhost:8083/#/Hotels">Back to hotels...</a>
            </div>
        </div>
<?php
//Creates a class called Message
class Message
{
    public $clientName;
    public $email;
    public $message;
}
//Creates new message and sets properties
$newMessage = new Message();
$newMessage->clientName = $_POST["clientName"];
$newMessage->email = $_POST["email"];
$newMessage->message = $_POST["message"];

//Adds object to array
$messagesList = file_get_contents('./../client/public/contact.json');
$jsonInput = json_decode($messagesList, true);
array_push($jsonInput, $newMessage);

//Writes array to JSON file
$jsonData = json_encode($jsonInput);
file_put_contents('./../client/public/contact.json', $jsonData);
?>

   </body>   
</html>

