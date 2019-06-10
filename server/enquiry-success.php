<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="../client/src/styles/styles.scss">
<body>
    <div class="logo">
        <div class="container row col-md-12" style="margin: 0; padding: 90px;">
            <div class="message">
                <h1 class="col-12 title">Hotel enquiry success</h1>
                <hr style="color:white margin:0; border:2px solid white; width: 480px;" class="line">
                <br><br>
            </div>
            <div class="information col-md-8">
                <p class="information-text">We have received your enquiry and will respond to you within 24 hours.
                            For urgent enquiries please call us on the Email or telephone numbers below.</p>    
                <br>
                <p class="information-contact"> Tlf: 12345678</p>
                <p class="information-contact"> Email: holidaze@mail.com</p>
                <br>
                <a id="back" href="http://localhost:8083/#/Hotels">Back to hotels...</a>
            </div>
        </div>
    </div>
<?php
//Creates a class called Enquiry
class Enquiry
{
    public $establishment;
    public $clientName;
    public $email;
    public $checkin;
    public $checkout;
}
//Creates new enquiry and sets properties
$newEnquiry = new Enquiry();
$newEnquiry->establishment = $_POST["establishment"];
$newEnquiry->clientName = $_POST["clientName"];
$newEnquiry->email = $_POST["email"];
$newEnquiry->checkin = $_POST["checkin"];
$newEnquiry->checkout = $_POST["checkout"];

//Adds object to array
$enquiriesList = file_get_contents('./../client/public/enquiries.json');
$jsonInput = json_decode($enquiriesList, true);
array_push($jsonInput, $newEnquiry);

//Writes array to JSON file
$jsonData = json_encode($jsonInput);
file_put_contents('./../client/public/enquiries.json', $jsonData);
?>
   </body>   
</html>