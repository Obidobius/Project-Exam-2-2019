<template>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 createHotel">
                <br>
                <div class="header">
                     <h1 class="header--title">Create Hotel</h1>
                </div>
                <form class="col-md-12 formContainer row  justify-content-center" method="POST" action="http://192.168.64.2/hotel-booking/server/add-establishments-success.php">
                <!--Container 1 -->
                    <div class=" col-sm-12 col-md-12 col-lg-5 createHotel--info blockOne">
                        <div class="col-md-12 blockOne--div row ">
                            <div class="col-md-6 blockOne--one">
                                <!--Name-->
                                <label class="blockOne--one__title" for="establishmentName">Hotel Name</label>
                                <br>
                                <input class="blockOne--one__input" type="text" name="establishmentName" id="establishmentName">
                                <br>
                                <!--Email-->
                                <label class="blockOne--one__title" for="establishmentEmail">Hotel Email</label>
                                <input class="blockOne--one__input" type="text" name="establishmentEmail" id="establishmentEmail">
                                <!--Location-->
                                <label class="blockOne--one__title" for="location">Address</label>
                                <input class="blockOne--one__input" type="text" name="location" id="location">
                                <!--Images-->
                                <label class="blockOne--one__title" for="imageUrl">Image URL</label>
                                <input class="blockOne--one__input" type="text" name="imageUrl" id="imageUrl">
                                <!--Price P.P-->
                                <label class="blockOne--one__title" for="price">Price per person per night ($)</label>
                                <input class="blockOne--one__input" type="number" name="price" id="price">
                                <br>
                            </div>
                            <div class="col-md-6 blockOne--two">   
                                <!--Max Guests-->
                                <label class="blockOne--two__title" for="maxGuests">Max guests</label>
                                <br>
                                <input class="blockOne--two__input" type="number" name="maxGuests" id="maxGuests">
                                <br>
                                <!--Number of Bed-->
                                <label class="blockOne--two__title" for="beds">Number of Beds:</label>
                                <input class="blockOne--two__input" type="number" name="beds" id="beds"> 
                                <!--ID-->
                                <label class="blockOne--two__title" for="id">ID:</label>
                                <input class="blockOne--two__input" type="number" name="id" id="id">
                                <!--Description-->
                                <label class="blockOne--two__title" for="description">Description:</label>
                                <textarea class="blockOne--two__input text" type="text" name="description" id="description" cols="20" rows="5"></textarea>
                               
                            </div>
                        </div>   
                    </div>
                    <!--Container 2 -->
                    <div class="col-sm-12 col-md-12 col-lg-5 createHotel--info blockTwo">
                        <div class="col-md-12 blockTwo--div row ">
                            <div class="col-6 blockTwo--one">
                                <!--Breakfast-->
                                <label class="blockTwo--one__title" for="breakfast">Breakfast:</label>
                                <br>
                                <div class="col-md-12 row">
                                    <input class="blockTwo--one__input col-3" type="radio" id="true" name="breakfast" value="Btrue">
                                    <label class="col-9 blockTwo--one__lable y" for="true">Available</label>
                                </div>
                                <div class="col-md-12 row">
                                    <input class="blockTwo--one__input col-3" type="radio" id="false" name="breakfast" value="Bfalse">
                                    <label class="blockTwo--one__lable col-9 n" for="false" >Not available</label>
                                </div>
                                <br>  
                                <!--Smoke-->
                                <label class="blockTwo--one__title" for="smoke">Smoke Room:</label>
                                <br>
                                <div class="col-md-12 row">
                                    <input class="blockTwo--one__input col-3" type="radio" id="Strue" name="smoke" value="true">
                                    <label class="col-9 blockTwo--one__lable y" for="true">Available</label>
                                </div>
                                <div class="col-md-12 row">
                                    <input class="blockTwo--one__input col-3" type="radio" id="Sfalse" name="smoke" value="false">
                                    <label class="col-9 blockTwo--one__lable n" for="false">Not available</label>
                                </div>
                                <br>
                                <!--Shower-->
                                <label class="blockTwo--one__title" for="shower">Shower:</label>
                                <div class="col-md-12 row">
                                    <input class="blockTwo--one__input col-3" type="radio" id="true" name="shower" value="Strue">
                                    <label class="col-9 blockTwo--one__lable y" for="true">Available</label>
                                </div> 
                                <div class="col-md-12 row">
                                    <input class="blockTwo--one__input col-3" type="radio" id="false" name="shower" value="Sfalse">
                                    <label class="col-9 blockTwo--one__lable n" for="false">Not available</label>
                                </div>
                                <br>
                            </div>
                            <div class=" col-6 blockTwo--two">
                                <!--Pets-->
                                <label class="blockTwo--two__title" for="pets">Pets:</label>
                                <div class="col-md-12 row">
                                    <input class="blockTwo--two__input col-3" type="radio" id="true" name="pets" value="Ptrue">
                                    <label class="col-9 blockTwo--two__lable y" for="true">Available</label>
                                </div>
                                <div class="col-md-12 row">
                                    <input class="blockTwo--two__input col-3" type="radio" id="false" name="pets" value="Pfalse">
                                    <label class="col-9 blockTwo--two__lable n" for="false">Not available</label>
                                </div>
                                <br>
                                <!--Wifi-->
                                <label class="blockTwo--two__title" for="wifi">Wifi:</label>
                                <div class="col-md-12 row">
                                    <input class="blockTwo--two__input col-3" type="radio" id="true" name="wifi" value="Wtrue">
                                    <label class="col-9 blockTwo--two__lable y" for="true">Available</label>
                                </div>
                                <div class="col-md-12 row">
                                    <input class="blockTwo--two__input col-3" type="radio" id="false" name="wifi" value="Wfalse">
                                    <label class="col-9 blockTwo--two__lable n" for="false">Not available</label>
                                </div>  
                            </div>
                        </div> 
                    </div>
                    <br>
                    <input class="col-md-12 col-ls-12 col-sm-12 createHotel_button btn-lg" type="submit">
                </form>
            <p class="backLink" v-on:click="changeLogged()">Back..</p>
            </div>
        </div>
    </div>
    </div>
</template>
<script>
export default {
    name:"AddEstablishment",
    methods:{
        changeLogged:function(){
            this.$router.push("/admin-logged");
        }
    }
}                              
</script>
<style lang="scss">
$BorderColor: #545252;
$inputField: #fafafa;
$submitColor: #e6e7e8;
$submitHover: #545252;
$trueBlack: #000000;
$titleColor:#5682cf;

.header{
    background-color: $titleColor;
    height: 70px;
    &--title{
        color: white;
        padding: 10px;
        padding-left: 15px;
        text-align: left;
    }
}
.formContainer{
    margin: auto !important;
    padding: 0 !important;
    background-color:$inputField; 
}
.createHotel{
  &--info{
    text-align: left;
    margin: 10px;
    background-color: $inputField;
  }
  &_button{
    background-color: $submitColor;
    color: $trueBlack;
    margin-top: 20px;
    margin-bottom: 20px;
    max-width: 200px !important;
    -webkit-box-shadow: 2px 2px 2px 0px lightGray;
    -moz-box-shadow: 2px 2px 2px 0px lightGray;
    box-shadow: 2px 2px 2px 0px lightGray;
    transition: all 0.3s ease-in-out;
  }
}
.createHotel_button:hover{
  color: white;
  border-color: $submitHover;
  background-color: $submitHover;
  -webkit-box-shadow: 2px 2px 2px 0px $trueBlack;
  -moz-box-shadow: 2px 2px 2px 0px $trueBlack;
  box-shadow: 2px 2px 2px 0px $trueBlack;
}
.blockOne{
    text-align: center !important;
    padding: 0px !important;
    &--div{
        margin: auto !important;
    }
    &--one{
        margin-top: 10px !important;
        margin: auto;
        padding-bottom: 15px;
        text-align: left;
        &__title{
            font-size: 20px;
            margin: auto;
        }
        &__input{
            width: 100%;
            margin-bottom: 15px;
            border: 1px solid lavender;
            border-radius: 5px;
            height: 40px;
        }
    }
     &--two{
        text-align: left;
        margin-top: 10px; 
        padding-bottom: 15px;
        &__title{
            font-size: 20px;
            margin: auto;
        }
        &__input{
            width: 100%;
            margin-bottom: 15px;
            border: 1px solid lavender;
            border-radius: 5px;
            height: 40px;
        }
    }
}
.blockTwo{
    text-align: center !important;
    padding: 0px !important;
    &--div{
        margin: auto !important;
        padding: 0px !important;   
    }
    &--one{
        text-align: left;
        margin-top: 10px; 
        margin: auto;   
        padding-bottom: 15px;
        padding-top: 10px;
        &__title{
            font-size: 20px;
            margin: auto;
        }
        &__input{
            margin:auto;
            width: 100%;
            min-height: 20px;
        }
        &__lable{
            margin:auto;
            text-align:left;
            padding:0px !important;
        }
    }
    &--two{
        text-align: left;
        padding-top: 10px;
        padding-bottom: 15px;
        &__title{
            font-size: 20px;
            margin: auto;
        }
        &__input{
            margin:auto;
            width: 100%;
            min-height: 20px;
        }
        &__lable{
            margin:auto;
            text-align:left;
            padding:0px !important;
        }
    }
}
.n{
    color:darkred;
}
.y{
    color: darkgreen;
}
.text{
    height: 155px;
}
.backLink{
    font-size: 35px;
    padding-top: 20px;
    padding-bottom: 30px;
    text-align: left;
    cursor:pointer;
    margin:0;
}
@media only screen and (max-width: 767px) {
    .createHotel--info{
    //    max-width: 100px;
    }
.header{
    &--title{
        text-align: center;
    }
}
}
@media only screen and (max-width: 992px) {
    .createHotel--info{
      //  min-width: 600px;
    }
}
</style>
