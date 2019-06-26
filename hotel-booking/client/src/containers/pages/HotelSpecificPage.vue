<template >
    <div class="all">
        <navigation class="navs"></navigation> 
       <br>
        <div class="container hotelSpecific ">
            <div class="col-md-12" style="padding:0;">
                <div v-for="hotel in allHotels" v-bind:key="hotel.id">
                    <div class="col-md-12 row specInfo"
                        v-bind:identity="hotel.id"
                        v-bind:email="hotel.establishmentEmail"
                        v-bind:cost="hotel.price"
                        v-bind:bed="hotel.beds"
                        v-bind:cigar="hotel.smoke"
                        v-bind:desc="hotel.description"
                        v-bind:max="hotel.maxGuests"
                        v-bind:sted="hotel.location"
                        >
                        <div class="col-12 col-ml-12 imageH">
                            <img class=" imageH__img img-fluid" v-bind:src="hotel.imageUrl">
                        </div>
                        <div class="col-md-7 specInfo--middle">
                            <div class="col-md-12 ">
                            <h2 class="card-title"> Hotel: {{ hotel.establishmentName }}</h2>
                            <hr>
                            </div>
                            <p class="specInfo--middle__info"> {{ hotel.description }}</p>
                            <p class="specInfo--middle__info" >{{hotel.establishmentEmail}}</p>
                            <a class="specInfo--middle__info adress col-12" :href="' http://maps.google.com/?q=' + hotel.location"> {{hotel.location}} </a>
                        </div>
                        <div class="col-md-5 row specInfo--right">
                            <div class="col-md-12" style=" height: 30px">
                                <h2 class="specInfo--right__price" > Price: {{ hotel.price }} ¢,-</h2>
                            </div> 
                            <div class="col-md-12" style=" height: 55px;">
                                <h5 class="specInfo--right__info">Max Quests: {{ hotel.maxGuests }}</h5>
                                 <h5 class="specInfo--right__info">Beds: {{ hotel.beds }}</h5>
                            </div>
                            <div class=" col-5">
                                <p class="specInfo--right__info"><span :id="hotel.smoke">Smoke: </span></p>
                                <p class="specInfo--right__info"><span :id="hotel.shower">Shower: </span></p>
                                <p class="specInfo--right__info"><span :id="hotel.pets">Pets: </span></p>
                                <br>
                            </div>
                             <div class=" col-5">     
                                <p class="specInfo--right__info"><span :id="hotel.wifi">Wifi: </span></p>
                                <p class="specInfo--right__info"><span :id="hotel.breakfast">Breakfast: </span></p>
                                <br>
                             </div>
                             <b-button v-b-modal.modal-lg variant="primary" class="enquireButton" id="show-btn" @click="showModal">Enquire</b-button>
                        </div>
                        <div class="col-md-12 display">
                            <div class="showing col-md-12 display__icons row ">
                            <div :class="hotel.smoke" class=" framing col-md col">
                            </div>
                            <div :class="hotel.shower" class=" framing col-md col"> 
                            </div>
                            <div :class="hotel.pets" class=" framing col-md col"> 
                            </div>
                            <div :class="hotel.wifi" class=" framing col-md col"> 
                            </div>
                            <div :class="hotel.breakfast" class=" framing col-md col"> 
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <b-modal class="container row" id="modal-lg" size="lg" ref="my-modal" hide-footer title="">
            <h1 class="modalH">Hotel enquiry</h1>
            <br>
            <div v-for="hotel in allHotels" v-bind:key="hotel.id"> 
            <form @submit="checkSubmit" class="Enquire col-md-12" method="POST" action=" http://192.168.64.2/hotel-booking/server/enquiry-success.php" novalidate="true">
                <!-- The name of establishment gets sent with the form so that only one JSON file is kept for all establishments.
                This value must be updated for each establishment. -->
                <div class="col-md-12 bForm" style="margin:auto;">
                    <div class="col-12" style="padding:0;">
                        <label  class="col-md-5 bForm-title" for="establishment">Establishment: </label>
                        <br>
                        <input class="Enquire--inputH col-md-12" type="text" name="establishment" id="establishment" v-model="hotel.establishmentName" readonly>
                    </div>
                    <br>
                    <!-- If additional fields are required, they must be handled in enquiry-success.php -->
                    <div class="col-12 bForm-container">
                        <label class="col-md-5 bForm-title" for="clientName">Full name: </label>
                        <br>    
                        <input autofocus class="Enquire--input col-md-12" type="text" name="clientName" id="clientName" v-model="naming"> 
                    </div>

                <!--Error-->
                    <div class="col-md-12 col-sm-12 alert alert-danger error" v-if="errors.length">
                        <div class="col-12" v-for="errors in errors">
                            {{ errors }}
                        </div>
                    </div>
                <!-- End -->

                   <div class="col-12 bForm-container">
                       <label class="col-md-12 bForm-title" for="email">Email Address: </label>
                       <br>
                        <input class="Enquire--input col-md-12" type="text" name="email" id="email" v-model="mailing">
                   </div>

                <!--Error-->
                    <div class="col-md-12 col-sm-12 alert alert-danger error" v-if="errorMail.length" role="alert">
                        <div class="col-12" v-for="errorM in errorMail">{{errorM}}
                        </div>   
                    </div>
                <!-- End -->

                    <div class="col-12 bForm-container">
                        <label class="col-md-5 bForm-title" for="checkin">Check-in: </label>
                        <br>
                        <input class="Enquire--input col-md-12" type="date" name="checkin" id="checkin">
                    </div>
                    <div class="col-12 bForm-container">
                        <label class="col-md-5 bForm-title" for="checkout">Check-out: </label>
                        <br>
                        <input class="Enquire--input col-md-12" type="date" name="checkout" id="checkout">
                    </div>
                </div>
                <div class="col-12">
                    <input class="submit col-md-12" type="submit">
                    <b-button class="col-md-12 cancel" variant="" block @click="hideModal">Cancel</b-button>
                </div>
                
            </form>
            </div>
    </b-modal>
    </div>
</template>
<script>
import Navigation from '../../components/Navigation';
import HotelContainer from '../../components/HotelContainer';
import AllHotelsPage from '../../containers/pages/AllHotelsPage';

export default {
    name:"HotelSpecificPage",
    components:{
        Navigation,
        AllHotelsPage
    },
    props:[
        'company','id'
    ],
    created(){
        this.TargetHotel()
    },
    data(){
        return {
            allHotels:[], 
            filteredHotels: [],
            moreHotels: [],
            errors:[],
            errorMail:[],
            naming:null,
            mailing:null,
        }
    },
    methods:{
        TargetHotel:function(){
            fetch('establishments.json')
            .then((response) => {return response.json()})
            .then((results) => {
                this.moreHotels = results
                this.allHotels = results.filter(value => {
                    console.log(value.id)
                    console.log('Im the selected hotel') 
                    return value.id === this.$route.params.id 
                })           
            })
            .catch(err =>{
                console.log(err);
            });
        },
        showModal() {
        this.$refs['my-modal'].show()
      },
      hideModal() {
        this.$refs['my-modal'].hide()
      },
//Check Form
        checkSubmit:function(e){
            this.errors = [];
            this.errorMail = [];
            if(!this.naming) this.errors.push(" Please enter your name.");
            if(!this.mailing) {
                this.errorMail.push(" Please enter your email.");
                }
            else if(!this.validEmail(this.mailing))
                {
                this.errorMail.push("Please enter a valid email")
            }
            if(!this.errorMail.length && !this.errors.length) return true;
            e.preventDefault();    
        },
        validEmail: function (mailing) {
             var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
             return re.test(mailing);
        },
    },
}
</script>
<style lang="scss" scoped>
$FormColor: #fafafa;
$BorderColor:#a8a8a8;
$titleColor:#5682cf;
%icons{
    background-repeat: no-repeat;
    object-fit: contain;
    height:60px;
    background-position: center;
}
%infoH{
    display: block;
    text-align: left;
}
%Height{
    height: 40px;
}
.all{
    background-image: url('../../assets/prism.png');
    background-repeat: repeat;
    background-position: center;
    height: 130vh;
    min-height: 100%;
    background-size: cover;
}
.navs{
    background-color: white;
}
.imageH{
    padding: 0;
    height: 100%;
    background-color: $FormColor;
    overflow: hidden;
    &__img{
        min-height: 420px;
        max-height: 200px;
        object-fit: cover;
        padding-bottom: 10px;
        width: 100% !important;
        }
}
.specInfo{
        height: 400px;
        margin: 0;
    &--middle{
        padding-top: 15px;
        height: 350px;
        padding-left: 0;
        background-color: $FormColor;
        &__info{
            padding-left: 10px;
            text-align: left;
            margin: 10px;
            float:left;
        }
    }
    &--right{
        height: 350px;
        padding-top: 15px !important;
        background-color: $FormColor;
        padding: 0;
        margin:0;
        &__info{
            text-align: left;
        }
        &__price{
            color: #2f7214;
            text-align: center;
        }
    }
}
.adress{
    margin: 0;
    margin-left: 12px;
    padding-left: 60px;
    background-image: url('../../../icons/locationIcon.svg');
    background-repeat: no-repeat;
    height:60px;
    background-position: left;
    display: flex;
    justify-content: left; /* align horizontal */
    align-items: center; /* align vertical */
    font-size: 1.2rem;

}
.error{
    float: right;
}
.Enquire{
    &--input{
        background-color: $FormColor;
        border-radius: 9px;
        @extend %Height;
    }
    &--inputH{
        margin-top:10px;
        text-align: center;
        border-radius: 9px;
        font-size: 25px;
        background-color: #e6e7e8;  
        @extend %Height;
    }
}
.enquireButton{
    background-color: #429321;
    border: 2px solid #429321;
    width: 100%;
    position: absolute;
    bottom:0;
    font-size: 20px;
    transition: all 0.4s ease-in-out;
}
.enquireButton:hover{
    border: 2px solid #2f7214;
    background-color: white;
    font-size: 20px;
    color: black;
}
.hotelSpecific{
    margin:auto;
    padding-bottom: 20px;
    padding-top: 95px;
}
.searches{
    margin: auto;
}
.result{
    float: left;
    padding-left: 30px;
    color:inherit;
    font-size: 2rem;
    font-family: 'Roboto', sans-serif;
    padding-top: 5px;
    cursor: pointer;
}
.sugjestions{
    height: 60px;
    background-color: lightblue;
    position: relative;
    width: 100%;
    margin-left: 15px;
    margin-right: 15px;
}
.framing{
    margin: 0 !important;
    padding: 0;
}
.display{
    padding: 0;
    &__icons{
        margin: auto;
    }
}
#Ptrue::after{
    @extend %infoH;
    color: green;
    content: "Yes";
}
#Pfalse::after{
    @extend %infoH;
    color: red;
    content: "No";
}

#true::after{
    @extend %infoH;
    color: green;
    content: "Yes";
}
#false::after{
    @extend %infoH;
    color: red;
    content: "No";
}
#Strue::after{
    @extend %infoH;
    color: green;
    content: "Yes";
}
#Sfalse::after{
    @extend %infoH;
    color: red;
    content: "No";
}
#Wtrue::after{
    @extend %infoH;
    color: green;
    content: "Yes";
}
#Wfalse::after{
    @extend %infoH;
    color: red;
    content: "No";
}
#Btrue::after{
    @extend %infoH;
    color: green;
    content: "Yes";
    padding-bottom: 40px;
}
#Bfalse::after{
    @extend %infoH;
    color: red;
    content: "No";
    padding-bottom: 40px;
}
.true{
    background-image: url('../../../icons/smokeIconA.svg');
    @extend %icons;
}
.false{
    background-image: url('../../../icons/smokeIconN.svg');
    @extend %icons;
}
.Strue{
    background-image: url('../../../icons/showerIconA.svg');
    @extend %icons;
}
.Sfalse{
    background-image: url('../../../icons/showerIconN.svg');
    @extend %icons;
}
.Pfalse{
    background-image: url('../../../icons/petIconN.svg');
    @extend %icons;
}
.Ptrue{
    background-image: url('../../../icons/petIconA.svg');
    @extend %icons;
}
.Wtrue{
    background-image: url('../../../icons/wifiIconA.svg');
    @extend %icons;
}
.Wfalse{
    background-image: url('../../../icons/wifiIconN.svg');
    @extend %icons;
}
.Btrue{
    background-image: url('../../../icons/breakfastIconA.svg');
    @extend %icons;
}
.Bfalse{
    background-image: url('../../../icons/breakfastIconN.svg');
    @extend %icons;
}
.showing{
    border: 1px solid $BorderColor;
    background-color: $FormColor;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
    height: 100px;
    width: 100%;
    margin: auto;
    align-content: center;
}
.modalH{
    text-align: center;
}
.bForm{
    padding-left: 30px;
    padding-right: 30px;
    &-container{
        padding: 0;
    }
    &-title{
        margin-top:10px;
        text-align: inherit;
        font-size: 20px;
        @extend %Height;
    }
}
.submit{
    height: 2.6rem;
    margin-bottom: 10px;
    margin-top: 20px;
    border-radius: 3px; 
    background-color: #429321;
    border: 2px solid #429321;
    color: #fafafa;
    width: 100%;
    font-size: 20px;
    transition: all 0.4s ease-in-out;
}
.submit:hover{
    border: 2px solid #2f7214;
    background-color: white;
    font-size: 20px;
    color: black;
}
.cancel{
    width: 100%;
    margin: 0px !important;
    background-color: #a02727;
    border: 2px solid #a02727;
    font-size: 20px;
}
.cancel:hover{
    font-size: 20px;
    border: 2px solid #a02727;
    background-color: white;
    color: black;
}
input[type="date"] {
     -webkit-align-items:center;
     display: -webkit-inline-flex;
     font-family: 'Alike', serif;
     padding: 0;
     -webkit-padding-start: 30px;
}

@media only screen and (max-width: 767px) {
    .all{
        height: 155vh; 
        min-height: 100%;
    }
    .specInfo{
        &--middle{
            height: 300px;
        }
    }
}
</style>
