<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="../client/src/styles/styles.scss">
   <body>
       <div class="container">
           <div class="row col-md-12 result" >
                <br>
                <h1 style="margin:auto">Hotel successfully added!</h1>
                <hr>
                <div>
                    <a href="http://localhost:8080/#/Create">Back</a>
                </div>
           </div>
       </div>
<?php
//Creates a class called Contact
class Establishment
{
  //To add more variables create the variable name here and set below
    public $establishmentName;
    public $establishmentEmail;
    public $imageUrl;
    public $price;
    public $maxGuests;
    public $description;
    public $breakfast;
    public $id;
    public $location;
    public $beds;
    public $smoke;
    public $shower;
    public $pets;
    public $wifi;
}

//Creates new establishment and sets properties
$newEstablishment = new Establishment();
$newEstablishment->establishmentName = $_POST["establishmentName"];
$newEstablishment->establishmentEmail = $_POST["establishmentEmail"];
$newEstablishment->imageUrl = $_POST["imageUrl"];
$newEstablishment->price = $_POST["price"];
$newEstablishment->maxGuests = $_POST["maxGuests"];
$newEstablishment->description = $_POST["description"];
$newEstablishment->breakfast = $_POST["breakfast"];
$newEstablishment->id = $_POST["id"];
$newEstablishment->location = $_POST["location"];
$newEstablishment->beds = $_POST["beds"];
$newEstablishment->smoke = $_POST["smoke"];
$newEstablishment->shower = $_POST["shower"];
$newEstablishment->pets = $_POST["pets"];
$newEstablishment->wifi = $_POST["wifi"];

//Adds object to array
$establishmentsList = file_get_contents('./../client/public/establishments.json');
$jsonInput = json_decode($establishmentsList, true);
array_push($jsonInput, $newEstablishment);

//Writes array to JSON file
$jsonData = json_encode($jsonInput);
file_put_contents('./../client/public/establishments.json', $jsonData);
?>
   </body>   
</html>
